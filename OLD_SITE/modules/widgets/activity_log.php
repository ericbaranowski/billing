<?php

use WHMCS\Log\Activity;

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

function widget_activity_log($vars) {
    global $_ADMINLANG;

    $title = $_ADMINLANG['utilities']['activitylog'];

    $content = '<div class="fixed-height-container">';

    $log = new Activity();

    $logs = $log->getLogEntries(0, 25);
    foreach ($logs AS $entry) {
        $content .= '<div class="activity-log-entry"><div>' . $entry['description'] . '</div><small>By '.$entry['username'].' - '.$entry['ipaddress'].' ('.$entry['date'].')</small></div>';
    }

    $content .= '</div>';

    if (!$content) $content = '<div align="center">No Activity Recorded Yet</div>';
    else $content .= '<div class="widget-footer"><a href="systemactivitylog.php" class="btn btn-info btn-sm">'.$_ADMINLANG['home']['viewall'].' &raquo;</a></div>';

    return array('title'=>$title,'content'=>$content);

}

add_hook("AdminHomeWidgets",1,"widget_activity_log");
