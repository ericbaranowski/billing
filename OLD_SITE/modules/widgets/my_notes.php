<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

function widget_my_notes($vars) {
    global $_ADMINLANG;

    $title = "My Notes";

    $mynotes = get_query_val("tbladmins","notes",array("id"=>$vars['adminid']));

    $content = '
<script>
function widgetnotessave() {
    $.post("index.php", { action: "savenotes", notes: $("#widgetnotesbox").val(), token: "'.generate_token('plain').'" });
    $("#widgetnotesconfirm").slideDown().delay(2000).slideUp();
}
</script>
<div id="widgetnotesconfirm" style="display:none;margin:0 0 5px 0;padding:5px 20px;background-color:#DBF3BA;font-weight:bold;color:#6A942C;">Notes Saved Successfully!</div>
<form>
    <textarea id="widgetnotesbox" style="height:100px;" class="form-control">' . $mynotes . '</textarea>
    <div class="widget-footer">
        <input type="reset" value="' . $_ADMINLANG['global']['cancel'] . '" class="btn btn-default btn-sm" /> <input type="button" value="Save Notes" onclick="widgetnotessave()" class="btn btn-info btn-sm" />
    </div>
</form>
    ';

    return array('title'=>$title,'content'=>$content);

}

add_hook("AdminHomeWidgets",1,"widget_my_notes");
