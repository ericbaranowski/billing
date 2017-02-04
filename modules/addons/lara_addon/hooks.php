<?php
/**
 * Lara Theme Settings Hook
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

function lara_chat_admins(){
	$allAdmins = array();
	$query = "SELECT id, username, firstname, lastname, email, disabled FROM tbladmins";
	$result = full_query($query);
	while ($data = mysql_fetch_array($result)) {
		if ((int)($data['disabled']) == 0 ){
			$allAdmins[(int)($data['id'])]['id'] = (int)($data['id']);
			$allAdmins[(int)($data['id'])]['username'] = $data['username'];
			$allAdmins[(int)($data['id'])]['name'] = ucwords($data['firstname'])." ".ucwords($data['lastname']);
			$allAdmins[(int)($data['id'])]['uimg'] = md5(strtolower($data['email']));
			$allAdmins[(int)($data['id'])]['status'] = 0;
			if ((int)($data['id']) == $_SESSION['adminid']){
				$allAdmins[(int)($data['id'])]['cuser'] = 1;
			}else{
				$allAdmins[(int)($data['id'])]['cuser'] = 0;
			}
		}
	}
	return $allAdmins;
}

function lara_count_tickets(){
	
	$result = select_query("tbladmins", "supportdepts", array("id" => $_SESSION['adminid']));
	$data = mysql_fetch_array($result);
	$admin_supportdepts = $data['supportdepts'];
	
	$allactive = $awaitingreply = 0;
	$flaggedtickets = 0;
	$ticketsCalculatedData = array();
	$ticketcounts = array();
	$admin_supportdepts_qry = array();
	$admin_supportdepts = explode(",", $admin_supportdepts);
	foreach ($admin_supportdepts as $deptid) {
		if (trim($deptid)) {
			$admin_supportdepts_qry[] = (int)$deptid;
			continue;
		}
	}
	
	if (count($admin_supportdepts_qry) < 1) {
		$admin_supportdepts_qry[] = 0;
	}
	
    $query = "SELECT tblticketstatuses.title,(SELECT COUNT(tbltickets.id) FROM tbltickets WHERE did IN (" . db_build_in_array($admin_supportdepts_qry) . ") AND tbltickets.status=tblticketstatuses.title AND tbltickets.merged_ticket_id = '0'),showactive,showawaiting FROM tblticketstatuses ORDER BY sortorder ASC";
	$result = full_query($query);
	while ($data = mysql_fetch_array($result)) {
		$ticketcounts[] = array("title" => $data[0], "count" => $data[1]);
		if ($data['showactive']) {
			$allactive += $data[1];
		}
		
		if ($data['showawaiting']) {
			$awaitingreply += $data[1];
		}
	}
	
	$result = select_query("tbltickets", "COUNT(*)", "status!='Closed' AND merged_ticket_id = '0' AND flag='" . (int)$_SESSION['adminid'] . "'");
	$data = mysql_fetch_array($result);
	$flaggedtickets = $data[0];
	$flaggedticketschecked = true;
	
	$ticketsCalculatedData["ticketsallactive"]= $allactive;
	$ticketsCalculatedData["ticketsawaitingreply"]= $awaitingreply;
	$ticketsCalculatedData["ticketsflagged"]=  $flaggedtickets;
	$ticketsCalculatedData["ticketcounts"]=  $ticketcounts;
	$ticketsCalculatedData["ticketstatuses"]=  $ticketcounts;

	return $ticketsCalculatedData;
}

function lara_sysoverview($vars, $ticketsawaitingreply){
	$return = array();
	$jqueryCodeArray = explode(PHP_EOL,$vars['jquerycode']);
	foreach($jqueryCodeArray as $key => $value){
		if(stripos($value,"#sysoverviewbanner")!== false){
			$divFound=preg_match('/<div(.*?)<\/div>/s',$value, $matches);
			if ($divFound === 1 ){
				$sysStatus = new \DOMDocument();
				$internalErrors = libxml_use_internal_errors(true);
				$sysStatus->loadHTML($matches[0]);
				libxml_use_internal_errors($internalErrors);
				$sysStatusArray = $sysStatus->getElementsByTagName("a");
				foreach($sysStatusArray as $item) {
					$href = str_replace ('\"', "", $item->getAttribute("href"));
					if (!empty($href)){
						$hrefParts = explode( '.', $href );
						$current = $hrefParts[0];
						$return[$current]['name'] = $hrefParts[0];
						$text = trim($item->nodeValue);
						$textParts = explode( ' ', $text );
						$return[$current]['url'] = $href;
						if ($current == "supporttickets"){ $return[$current]['value'] = $ticketsawaitingreply;}
						else{ $return[$current]['value'] = $textParts[0];}
						$return[$current]['bgcolor'] = 'bg-green';
						if (($return[$current]['value'] > 0) && ($return[$current]['value'] <= 4) ){
							$return[$current]['bgcolor'] = 'bg-yellow';
						}elseif ($return[$current]['value'] >= 5){
							$return[$current]['bgcolor'] = 'bg-red';
						}						
					}
				}					
			}
		}
	}
	return $return;
}

function lara_settings_update_SmartyVars($vars){
		$return = array();
		if ($vars['template'] == "lara"){
			## General Settings
			$table = "mod_laraSettings";
			$fields = "name,value";
			$where = array();
			$result = select_query($table,$fields,$where);
			$settingsArray = array();
			while ($data = mysql_fetch_array($result)) {
				$settingsArray[$data['name']] = $data['value'];
			}
			$return['lara_general_settings'] = $settingsArray;
			
			## User Settings
			$cAdminID = $_SESSION['adminid'];
			$table = "mod_laraUserSettings";
			$fields = "admin_id,name,value";
			$where = array("admin_id"=>$cAdminID);
			$result = select_query($table,$fields,$where);
			while ($data = mysql_fetch_array($result)) {
				$ckey = $data['name'];
				$vkey = $data['value'];
				$return['lara_'.$ckey]= $vkey;
			}
			$adminEmail = get_query_vals("tbladmins", "email", array("id" => $_SESSION['adminid']));
			if (!empty($adminEmail['email'])){
				$return['lara_adminemail']= $adminEmail['email'];
				$return['lara_adminemail_md5']= md5(strtolower($adminEmail['email']));
			}
			
			## Tickets Count
			global $disable_admin_ticket_page_counts;
			$ticketsCalculatedData = array();
			session_start();
			
			if ((isset($_SESSION['adminid'])) && (in_array("List Support Tickets", $vars['admin_perms'])) && (!$disable_admin_ticket_page_counts) ) {
				if (($vars['sidebar'] == "support") && ($vars['pageicon'] == "tickets")){
					$_SESSION['cachedTicketsData']['ticketsallactive'] = $vars["ticketsallactive"];
					$_SESSION['cachedTicketsData']['ticketsawaitingreply'] = $vars["ticketsawaitingreply"];
					$_SESSION['cachedTicketsData']['ticketsflagged'] = $vars["ticketsflagged"];
					$_SESSION['cachedTicketsData']['ticketcounts'] = $vars["ticketcounts"];
					$_SESSION['cachedTicketsData']['ticketstatuses'] = $vars["ticketstatuses"];
				}else{
					if (isset($_SESSION['cachedTicketsData'])) {
						$ticketsCalculatedData = $_SESSION['cachedTicketsData'];
					}else{
						$ticketsCalculatedData = lara_count_tickets();
						$_SESSION['cachedTicketsData'] = $ticketsCalculatedData;
					}
					$return = array_merge($return, $ticketsCalculatedData);
				}
			}
			
			## All admins
			$laraChatAdmins = array();
			if ((isset($_SESSION['adminid']))){
				if (isset($_SESSION['laraChatAdmins'])) {
					$laraChatAdmins = $_SESSION['laraChatAdmins'];
				}else{
					$laraChatAdmins = lara_chat_admins();
					$_SESSION['laraChatAdmins'] = $laraChatAdmins;
				}
			}
			
			$onlineAdmins = explode(",", $vars['adminsonline']);
			foreach ($laraChatAdmins as $lrAdminId => $lrAdminDetails){
				if (in_array($lrAdminDetails['username'], $onlineAdmins)){
					$laraChatAdmins[$lrAdminId]['status'] = 1;
				}
			}
			
			## System Overview
			if ($vars['sidebar'] == "home"){
				$lSysOverView = lara_sysoverview($vars, $ticketsCalculatedData['ticketsawaitingreply']);
				$return = array_merge($return, array("laraSysOverview" =>$lSysOverView));
			}

			$return = array_merge($return, array("laraChatAdmins" =>$laraChatAdmins));
		}
		return $return;
}

add_hook("AdminAreaPage",1,"lara_settings_update_SmartyVars");

function widget_lr_google_analytics_permissions($vars) {
	if (($vars['filename'] === "configadminroles") && (isset($_GET["action"])) && ($_GET["action"] === "edit" ) ){
		$cTemplate ="";
		if ($vars['template'] === "lara"){ $cTemplate = "lara"; }
			$head_return = '';
			$head_return = '<script type="text/javascript">
			$(document).ready(function(){
				var cTemplate ="'.$cTemplate.'";
				function fillWidgetsTable(widgets, wtable){
					var maxColumns = Math.ceil(widgets.length / 3);
					var i = 1;
					var currentColumn = 1;
					$.each(widgets, function( x, widget ) {
						if ($(widget).children("input").val() === "lrgawidget"){
							$("#lr_widget_table_main").append(widget[\'outerHTML\']+"</br>");
							return true;
						}else{
							$("#"+wtable+"_"+currentColumn).append(widget[\'outerHTML\']+"</br>");
						}
						if (maxColumns <= i) {
							currentColumn++;
							i = 1;
							return true;
						}
						i++;
					});					
				}
                var widgetsPlaceHolder = $("form[name=\'frmperms\'] .fieldlabel:eq(2)").next("td.fieldarea");
				var afterWidgetsPlaceHolder = $("form[name=\'frmperms\'] tr:eq(3)");
                 
				var lr = $("form[name=\'frmperms\'] label.checkbox-inline [value^=lrgawidget]").parents("label").get().reverse(); 
				 $("form[name=\'frmperms\'] label.checkbox-inline [value^=lrgawidget]").parents("label").detach();
				var wi = $("form[name=\'frmperms\'] label.checkbox-inline [name^=widget]").parents("label").get().reverse(); 

                widgetsPlaceHolder.empty(); 

				widgetsPlaceHolder.append("<table width=\"100%\" id=\"pre_widget_tables\"><tbody><tr><td width=\"33%\" valign=\"top\" id=\"pre_widget_table_1\"></td><td width=\"33%\" valign=\"top\" id=\"pre_widget_table_2\"></td><td width=\"33%\" valign=\"top\" id=\"pre_widget_table_3\"></td></tr></tbody></table>");
				fillWidgetsTable(wi, "pre_widget_table");
				
				if (cTemplate === "lara"){
					afterWidgetsPlaceHolder.after("<tr><td class=\"fieldlabel\">Lara Widgets</td><td class=\"fieldarea\"><table width=\"100%\" id=\"lr_widget_table\"><tbody><tr><td colspan=\"3\" id=\"lr_widget_table_main\" style=\"background-color: #367fa9 ; color: #FFFFFF;\"></td></tr><tr><td width=\"33%\" valign=\"top\" id=\"lr_widget_table_1\"></td><td width=\"33%\" valign=\"top\" id=\"lr_widget_table_2\"></td><td width=\"33%\" valign=\"top\" id=\"lr_widget_table_3\"></td></tr></tbody></table></td></tr>");	
					fillWidgetsTable(lr, "lr_widget_table");
					
					if(!$("#lr_widget_table [value=\'lrgawidget\']").is(":checked")) {
						$("#lr_widget_table input").prop("checked", false);
						$("#lr_widget_table input").prop("disabled", true);
						$("#lr_widget_table [value=\'lrgawidget\']").prop("disabled", false);						
					}
					
					$("#lr_widget_table [value=\'lrgawidget\']").on(\'click\', function (e) {
						if($(this).is(":checked")) { 
						   $("#lr_widget_table input").prop("disabled", false);
						   $("#lr_widget_table input").prop("checked", true);
						   $("#lr_widget_table input[value=\'lrgawidget_perm_admin\']").prop("checked", false);
						}else{
						   $("#lr_widget_table input").prop("checked", false);
						   $("#lr_widget_table input").prop("disabled", true);
						   $(this).prop("disabled", false);
						}
					});	
				}
            });
			
			</script>';
			return $head_return;
	}

	if (($vars['filename'] === "index") && ($vars['sidebar'] === "home") ){
		if ($vars['template'] != "lara"){ 
			$head_return = '';
			$head_return = '<script type="text/javascript">
			$(document).ready(function(){
				$(".homewidget[id^=lrgawidget]").remove();
            });
			</script>';
			return $head_return;
		}
	}	
}

add_hook("AdminAreaHeadOutput",1,"widget_lr_google_analytics_permissions"); 

function widget_lrgawidget($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'Google Analytics', 'content' => $content );
}
 
function widget_lrgawidget_perm_admin($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'Administrator [Change Settings]', 'content' => $content );
}

function widget_lrgawidget_perm_sessions($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Sessions', 'content' => $content );
}

function widget_lrgawidget_perm_countries($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Countries', 'content' => $content );
}

function widget_lrgawidget_perm_browsers($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Browsers', 'content' => $content );
}

function widget_lrgawidget_perm_languages($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Languages', 'content' => $content );
}

function widget_lrgawidget_perm_os($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Operating Systems', 'content' => $content );
}

function widget_lrgawidget_perm_screenres($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Screen Resolutions', 'content' => $content );
}

function widget_lrgawidget_perm_sources($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Sources', 'content' => $content );
}

function widget_lrgawidget_perm_keywords($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Keywords', 'content' => $content );
}

function widget_lrgawidget_perm_pages($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'View Pages', 'content' => $content );
}

function widget_lrgawidget_perm_daterange($vars) {
    $content = '<p>Place Holder</p>';
    return array( 'title' => 'Change Date Range', 'content' => $content );
}

add_hook("AdminHomeWidgets",1,"widget_lrgawidget"); 
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_admin"); 
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_sessions");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_countries");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_browsers");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_languages");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_os");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_screenres");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_sources");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_keywords");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_pages");
add_hook("AdminHomeWidgets",1,"widget_lrgawidget_perm_daterange"); 
