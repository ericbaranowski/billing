<?php

namespace Lara\Utils\Common;

use Lara\Utils\Common as Common;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

class registryStore{
	
	function __construct(){
		session_start();
	}
	
	public function set($name, $value=""){
		if (empty($value)){$this->remove($name);}
		elseif (!empty($name)){
			try{
				$exists = Capsule::table("mod_lrgawidget")->where('name', $name)->get();
				if (!empty($exists)){
					Capsule::table("mod_lrgawidget")->where('name', $name)->update(array('value' => $value));
				}else{
					Capsule::table("mod_lrgawidget")->insert(array('name' => $name, 'value' => $value));
				}
			} catch (\Exception $e) {
				Common\ErrorHandler::FatalError("cannot save ".$name." returned error: ". $e->getMessage());
			}
		}
	}
	
	public function remove($name){
		if (!empty($name)){
			try{
				Capsule::table("mod_lrgawidget")->where('name', $name)->delete();
			} catch (\Exception $e) {
				Common\ErrorHandler::FatalError("cannot delete ".$name." returned error: ". $e->getMessage());
			}
		}		
	}	
	
	public function getSettingsArray(){
		$allSettings = array();
		$settings = Capsule::table("mod_lrgawidget")->get();
		//$_SESSION['db_settings_obj'] = $settings;
		if (!empty($settings)){
			foreach ($settings as $setting) {
				$allSettings[$setting->name] = $setting->value;
			}			
		}
		foreach ($_SESSION as $key => $value) {
			if(preg_match('/^lrgatmp_/s', $key)){
				$nkey = str_replace("lrgatmp_", "", $key);
				$allSettings[$nkey] = $value;
			}
		}
		return $allSettings;
	}
	
	public function settingsReset(){
    	try{
			Capsule::table("mod_lrgawidget")->truncate();
		} catch (\Exception $e) {
				Common\ErrorHandler::FatalError("cannot empty table, returned error: ". $e->getMessage());
		}

		foreach ($_SESSION as $key => $value) {
			if(preg_match('/^lrgatmp_/s', $key)){
			   unset($_SESSION[$key]);
			};
		}		
	}	

	public function getCache($cachePrefix, $queryID, $expires_in=0){
		if (isset($_SESSION[$cachePrefix.$queryID]["cache"])){
			if (($_SESSION[$cachePrefix.$queryID]["created_on"] + $expires_in) >=  time()){
				return $_SESSION[$cachePrefix.$queryID]["cache"];
			}else{
				unset($_SESSION[$cachePrefix.$queryID]);
			}
		}
	}

	public function saveCache($cachePrefix , $queryID, $value){
		if (!empty($queryID) && !empty($value) && !empty($cachePrefix)){
			$_SESSION[$cachePrefix.$queryID]["cache"] = $value;
			$_SESSION[$cachePrefix.$queryID]["created_on"] = time();
		}		
	}	
	
	public function purgeCache($cachePrefix){
		foreach ($_SESSION as $key => $value) {
			if(preg_match("/^".$cachePrefix."/s", $key)){ 
			   unset($_SESSION[$key]);
			};
		}		
	}

	public function setToSession($var, $value){
		if (!empty($var) && !empty($value)){
             $_SESSION["lrgatmp_".$var] = $value ;
		}
	}
	
	public function removeFromSession($var){
		if (isset($_SESSION[$var])){
			unset($_SESSION[$var]);
		}
	}
}
?>

