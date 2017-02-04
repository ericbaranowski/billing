<?php

namespace Lara;

/**
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

if (isset($lrdata['lrchat'])){
	require("lrchat.class.php");
	
	$call = new lrchat($lrdata);

	switch ($lrdata['command']) {
		case "sendmsg":
			$call->sendMsg();
			break;	
		case "getmsg":
			$call->getMsg();
			break;	
		default:
		    exit;
	} 
}else{ exit();}

?>