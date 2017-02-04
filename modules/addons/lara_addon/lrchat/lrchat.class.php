<?php

namespace Lara;

use Illuminate\Database\Capsule\Manager as Capsule;


/**
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

class lrchat{
	
	private $output  = array();
	private $errors  = array();
	private $cUserID;
	private $chatID;
	private $message;
	private $notifyOnly;
	private $msgHistory;
	private $lastMsgID;
	private $firstMsgID;
	
	
	function __construct($lrdata){
		Capsule::connection()->setFetchMode(\PDO::FETCH_ASSOC);
		$this->cUserID = $lrdata['userid'];
		$this->chatID  = $this->generateChatID($_SESSION['adminid'], $this->cUserID);
		if (!empty($lrdata['message'])){$this->message = trim($lrdata['message']);}
		if (!empty($lrdata['notifyonly'])){$this->notifyOnly = $lrdata['notifyonly'];}
		if (!empty($lrdata['msghistory'])){$this->msgHistory = $lrdata['msghistory'];}
		if (!empty($lrdata['lastmsgid'])){$this->lastMsgID  = $lrdata['lastmsgid'];}
		if (!empty($lrdata['firstmsgid'])){$this->firstMsgID = $lrdata['firstmsgid'];}
	}

	public function sendMsg(){
		$this->floodProtection();
		$inserted = false;
		if (empty($this->cUserID) || empty($this->message)){
			$this->errors[]= "empty message";
			$this->jsonOutput();
		}
		try{
			$inserted = Capsule::table("mod_lrchat")->insert(array('fromid'  => $_SESSION['adminid'],
			                                                       'toid'    => $this->cUserID,
																   'message' => $this->message,
																   'chatid'  => $this->chatID,
																   'timestamp' => gmdate('Y-m-d H:i:s')));
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute sendMsg "; // $e->getMessage();
		}
		if ($inserted){
			$this->getMsg();
		}
	}
	
	public function getMsg(){
		if ($this->msgHistory == "yes"){
			$this->getMsgHistory();
			$this->getIds();
			
		}elseif ($this->notifyOnly != "yes"){
			
			if (!$this->lastMsgID){
				$this->getRecentMsgs();
			}else{
				$this->getUpdatedMsgs();
			}

			$this->getIds();

			if ($this->output['lastMsgId']){
				$this->markMsgSeen();	
			}
		}
		
		$this->getNotifications();
		$this->jsonOutput();
	}
	
	private function getMsgHistory(){
		try{
			$results = Capsule::table("mod_lrchat")->where('chatid', '=', $this->chatID)
			                                        ->where('id', '<', $this->firstMsgID)
													->orderBy('id', 'desc') 
													->limit(15)
													->get();
													
			$this->output['messages'] = array_reverse($results);
			$this->output['mode'] = "history";												
													
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute getMsgHistory";
		}														   
	}	
	
	private function getRecentMsgs(){
		try{
			$results = Capsule::table("mod_lrchat")->where('chatid', $this->chatID)
			                                       ->orderBy('id', 'desc')
												   ->limit(15)
												   ->get();
														 
			$this->output['messages'] = array_reverse($results);
			$this->output['mode'] = "recent";
			
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute getRecentMsgs";
		}			
	}

	private function getUpdatedMsgs(){
		try{
			$results = Capsule::table("mod_lrchat")->where('chatid', '=', $this->chatID)
			                                       ->where('id', '>', $this->lastMsgID)
												   ->orderBy('id', 'desc')
												   ->get();
			$this->output['messages'] = array_reverse($results);
			$this->output['mode'] = "update";
													
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute getUpdatedMsgs ";
		}														  
	}
	
	private function markMsgSeen(){
		try{
			Capsule::table("mod_lrchat")->where('chatid', '=', $this->chatID)
			                            ->where('toid', '=', $_SESSION['adminid'])
										->where('id', '<=', $this->output['lastMsgId'])
										->where('seen', '=', 0)
										->update(array('seen' => 1));
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute markMsgSeen";
		}														  
	}

	private function getNotifications(){
		try{
			$results = Capsule::table("mod_lrchat")->where('toid', '=', $_SESSION['adminid'])
			                                       ->where('seen', '=', 0)
												   ->orderBy('id', 'desc')
												   ->get();

		    $this->output['notifications'] = array();
			$this->output['notifications']['messages'] = $this->getLastNotifications($results);
			$this->output['notifications']['total'] = count($results);
			$this->output['nhash'] = md5(json_encode($this->output['notifications']));												   
												   
		} catch (\Exception $e) {
			$this->errors[]= "cannot execute getNotifications";
		}														  
	}
	

	
	private function getLastNotifications($messages){
		$notifications =  $_SESSION['laraChatAdmins'];
		$lastFromID = array();
		
		foreach ( $messages as $message ) {
			if (!in_array($message['fromid'], $lastFromID)){
				$notifications[$message['fromid']]['lastmessage'] = $message;
				$lastFromID[] = $message['fromid'];
			}
			$notifications[$message['fromid']]['total']++;
		}
        return $notifications;		
	}
	
	private function getIds(){
		$firstMsg = reset($this->output['messages']);
		$lastMsg  = end($this->output['messages']);
		$this->output['firstMsgId'] = $firstMsg['id'];
		$this->output['lastMsgId']  = $lastMsg['id'];
	}

	private function generateChatID($userA, $userB){
		$id = ($userA < $userB) ? $userA."-".$userB : $userB."-".$userA;
		return $id;
	}
	
	private function floodProtection(){
		session_start();
		$cTime = time();
		$ftleft = "";
		if( isset($_SESSION['lrchat-fptime']) && isset($_SESSION['lrchat-fpcount']) && (($cTime - $_SESSION['lrchat-fptime']) < 60 )){
			if ($_SESSION['lrchat-fpcount'] < 15){
				$_SESSION['lrchat-fpcount']++;
			}else{
				$ftleft = (60 -($cTime - $_SESSION['lrchat-fptime']));
				$this->errors['msg']= "Flood Protection Error : You've exceeded the maximum allowed messages per minute,  please try again after ".$ftleft." seconds.";
				$this->errors['ftleft'] = $ftleft;
				$this->jsonOutput();
			}
		}else{
			$_SESSION['lrchat-fptime'] = $cTime;
			$_SESSION['lrchat-fpcount'] = 1;
		}
	}
	
	private function jsonOutput(){
		header('Content-Type: application/json');
		
		if (empty($this->errors)){
			$this->output['adminid'] = $_SESSION['adminid'];
			$this->output['status']  = "done";
			echo json_encode($this->output,JSON_FORCE_OBJECT);
		}else{ echo json_encode($this->errors); }
		
		exit();
	}	
	
}

?>