<?php
/**
 * Lara Theme Settings
 *
 * Setting module for the Lara admin template.
 * Please refer to the full documentation @ http://www.whmcsadmintheme.com for more details.
 *
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

define("currentLaraVersion", "4.0.1");

function lara_addon_config() {
     $configarray = array(
    "name" => "Lara Theme Settings",
    "description" => "Setting module for the Lara admin template. <br><b>Important:</b> Make sure to permit access to all admin groups.",
    "version" => currentLaraVersion,
    "author" => "Amr M. Ibrahim",
    "language" => "english",
    "fields" => array());
    return $configarray;
}

function lara_addon_activate() {

    $query = "CREATE TABLE `mod_laraSettings` (`id` int(10) NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, `value` TEXT NOT NULL, PRIMARY KEY (`id`))";
    $result = full_query($query);
	
	full_query("INSERT INTO `mod_laraSettings` (`name`, `value`) VALUES ('version', '".currentLaraVersion."')");
	
    $query = "CREATE TABLE `mod_laraUserSettings` (`admin_id` INT( 10 ) NOT NULL ,`name` TEXT NOT NULL, `value` TEXT NOT NULL )";
    $result = full_query($query);

    $query = "CREATE TABLE `mod_lrgawidget` (`id` int(10) NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, `value` TEXT NOT NULL, PRIMARY KEY (`id`))";
    $result = full_query($query);	
	
    $query = "CREATE TABLE `mod_lrchat` (`id` int(10) NOT NULL AUTO_INCREMENT, `fromid` int(10) NOT NULL , `toid` int(10) NOT NULL, `message` TEXT NOT NULL, `chatid` VARCHAR(15) NOT NULL, `seen` TINYINT(1) DEFAULT 0, `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`))";
    $result = full_query($query);	
}

function lara_addon_deactivate() {
	
    $query = "DROP TABLE `mod_laraSettings`";
    $result = full_query($query);	

    $query = "DROP TABLE `mod_laraUserSettings`";
    $result = full_query($query);
	
    $query = "DROP TABLE `mod_lrgawidget`";
    $result = full_query($query);

    $query = "DROP TABLE `mod_lrchat`";
    $result = full_query($query);	

}

function lara_addon_upgrade($vars) {
	$version = $vars['version'];
   
	full_query("UPDATE `mod_laraSettings` SET `value` = '".currentLaraVersion."' WHERE `name` = 'version' ");
	
	if ($version < 3.0) {
		$query = "CREATE TABLE `mod_lrgawidget` (`id` int(10) NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, `value` TEXT NOT NULL, PRIMARY KEY (`id`))";
		$result = full_query($query);
	}
	
	if ($version < 3.5) {
		$query = "CREATE TABLE `mod_lrchat` (`id` int(10) NOT NULL AUTO_INCREMENT, `fromid` int(10) NOT NULL , `toid` int(10) NOT NULL, `message` TEXT NOT NULL, `chatid` VARCHAR(15) NOT NULL, `seen` TINYINT(1) DEFAULT 0, `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`))";
		$result = full_query($query);	
	}	

}

function lara_internal_permissions(){
	$parray = array();
	$data = get_query_vals("tbladmins", "tbladminroles.widgets,tbladmins.roleid,tbladmins.disabled", array("tbladmins.id" => $_SESSION['adminid']), "", "", "", "tbladminroles ON tbladminroles.id=tbladmins.roleid");
	if (!empty($data) || $data['disabled'] != "0"){
		$adminPermissions = localAPI("getadmindetails", array());
		if ($adminPermissions['result'] === "success"){
			$parray["widgets"] = explode(',', $data['widgets']);
			$parray["permissions"] = explode(',', $adminPermissions['allowedpermissions']); 
		}
	}
	return $parray;
}

function lara_addon_output($vars) {
	if (isset($_SESSION['adminid'])){
		if (isset($_POST['action'])){
			$lrperm = lara_internal_permissions();
			$lrdata = $_POST;
			require ("lrgawidget/lrgawidget.handler.php");
		}elseif (isset($_POST['lrchat'])){
			$lrdata = $_POST;
			require ("lrchat/lrchat.handler.php");			
		}elseif ($_POST['mode'] == "update"){
			unset($_POST['mode']);
			foreach ($_POST as $key => $value){
				$table = "mod_laraUserSettings";
				$fields = "admin_id,name,value";
				$where = array("admin_id"=>$_SESSION['adminid'],"name"=>$key);
				$result = select_query($table,$fields,$where);
				$data = mysql_fetch_array($result);
				$id = $data['admin_id'];
					if ($id){
						$update = array("value"=>$value);
						update_query($table,$update,$where);
					}else{
						$values = array("admin_id"=>$_SESSION['adminid'],"name"=>$key,"value"=>$value);
						insert_query($table,$values);
					}
			}
			$data = array('results'=>'done');
			header('Content-Type: application/json');
			echo json_encode($data);
			exit;
		}else{ //Module page ourput
			echo '<div class="callout callout-success">
					<h4>Tip</h4>
					To apply any custom CSS classes or Javascript/jQuery, check the files in the "custom" folder.
					<br>Add your modifications, then rename the file name to custom.css/custom.js. 
				  </div>';		
		}
	}
}
?>