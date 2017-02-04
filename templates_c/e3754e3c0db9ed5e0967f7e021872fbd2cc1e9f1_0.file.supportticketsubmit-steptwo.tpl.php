<?php
/* Smarty version 3.1.29, created on 2016-12-25 09:24:40
  from "/home/billing/public_html/templates/flathost/supportticketsubmit-steptwo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585f90586e8029_22137911',
  'file_dependency' => 
  array (
    'e3754e3c0db9ed5e0967f7e021872fbd2cc1e9f1' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/supportticketsubmit-steptwo.tpl',
      1 => 1479127856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585f90586e8029_22137911 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['navopenticket']), 0, true);
?>


<?php echo '<script'; ?>
 language="javascript">
var currentcheckcontent,lastcheckcontent;
<?php if ($_smarty_tpl->tpl_vars['kbsuggestions']->value) {?>

function getticketsuggestions() {
    currentcheckcontent = jQuery("#message").val();
    if (currentcheckcontent!=lastcheckcontent && currentcheckcontent!="") {
        jQuery.post("submitticket.php", { action: "getkbarticles", text: currentcheckcontent },
        function(data){
            if (data) {
                jQuery("#searchresults").html(data);
                jQuery("#searchresults").slideDown();
            }
        });
        lastcheckcontent = currentcheckcontent;
    }
    setTimeout('getticketsuggestions();', 3000);
}
getticketsuggestions();

<?php }
echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
<div class="alert alert-danger">
    <p class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</p>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

    </ul>
</div>
<?php }?>

<br />

<form name="submitticket" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?step=3" enctype="multipart/form-data" class="center95 form-stacked">

    <fieldset class="form-group">

        <div class="row">
            <div class="multicol">
                <div class="form-group">
                    <label class="control-label bold" for="name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?><input class="form-control disabled" type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
" disabled="disabled" /><?php } else { ?><input class="form-control" type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /><?php }?>
                    </div>
                </div>
            </div>
            <div class="multicol">
                <div class="form-group">
                    <label class="control-label bold" for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?><input class="form-control disabled" type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled="disabled" /><?php } else { ?><input class="form-control" type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /><?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="control-label bold" for="subject"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
                <div class="controls">
                    <input class="form-control" type="text" name="subject" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="multicol">
                <div class="form-group">
                    <label class="control-label bold" for="name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
</label>
                    <div class="controls">
                        <select class="form-control" name="deptid">
                        <?php
$_from = $_smarty_tpl->tpl_vars['departments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_department_0_saved_item = isset($_smarty_tpl->tpl_vars['department']) ? $_smarty_tpl->tpl_vars['department'] : false;
$_smarty_tpl->tpl_vars['department'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['department']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
$__foreach_department_0_saved_local_item = $_smarty_tpl->tpl_vars['department'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == $_smarty_tpl->tpl_vars['deptid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_local_item;
}
if ($__foreach_department_0_saved_item) {
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_item;
}
?>
                        </select>
                    </div>
                </div>
            </div>
<?php if ($_smarty_tpl->tpl_vars['relatedservices']->value) {?>
             <div class="multicol">
                 <div class="form-group">
                    <label class="control-label bold" for="relatedservice"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['relatedservice'];?>
</label>
                    <div class="controls">
                        <select class="form-control" name="relatedservice" id="relatedservice">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['none'];?>
</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['relatedservices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_relatedservice_1_saved_item = isset($_smarty_tpl->tpl_vars['relatedservice']) ? $_smarty_tpl->tpl_vars['relatedservice'] : false;
$_smarty_tpl->tpl_vars['relatedservice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['relatedservice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['relatedservice']->value) {
$_smarty_tpl->tpl_vars['relatedservice']->_loop = true;
$__foreach_relatedservice_1_saved_local_item = $_smarty_tpl->tpl_vars['relatedservice'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['status'];?>
)</option>
                            <?php
$_smarty_tpl->tpl_vars['relatedservice'] = $__foreach_relatedservice_1_saved_local_item;
}
if ($__foreach_relatedservice_1_saved_item) {
$_smarty_tpl->tpl_vars['relatedservice'] = $__foreach_relatedservice_1_saved_item;
}
?>
                        </select>
                    </div>
                </div>
            </div>
<?php }?>
            <div class="multicol">
                <div class="form-group">
                    <label class="control-label bold" for="priority"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketspriority'];?>
</label>
                    <div class="controls">
                        <select class="form-control" name="urgency" id="priority">
                            <option value="High"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "High") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencyhigh'];?>
</option>
                            <option value="Medium"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Medium" || !$_smarty_tpl->tpl_vars['urgency']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencymedium'];?>
</option>
                            <option value="Low"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Low") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencylow'];?>
</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"><div class="form-group">
            <label class="control-label bold" for="message"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
            <div class="controls">
                <textarea class="form-control" name="message" id="message" rows="12"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
            </div>
        </div></div>
<?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_2_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$__foreach_customfield_2_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_2_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
        <div class="form-group">
            <label class="control-label bold" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

            </div>
        </div>
<?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_2_saved_local_item;
}
if ($__foreach_customfield_2_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_2_saved_item;
}
if ($__foreach_customfield_2_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_customfield_2_saved_key;
}
?>
        <div class="form-group">
            <label class="control-label bold" for="attachments"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketattachments'];?>
:</label>
            <div class="controls">
                <input type="file" name="attachments[]" /><br />
                <div id="fileuploads"></div>
                <a href="#" onclick="extraTicketAttachment();return false"><img src="images/add.gif" align="absmiddle" border="0" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addmore'];?>
</a><br />
                (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsallowedextensions'];?>
: <?php echo $_smarty_tpl->tpl_vars['allowedfiletypes']->value;?>
)
            </div>
        </div>

    </fieldset>

<div id="searchresults" class="contentbox" style="display:none;"></div>

<?php if ($_smarty_tpl->tpl_vars['capatacha']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchatitle'];?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchaverify'];?>
</p>
<?php if ($_smarty_tpl->tpl_vars['capatacha']->value == "recaptcha") {?>
<div align="center"><?php echo $_smarty_tpl->tpl_vars['recapatchahtml']->value;?>
</div>
<?php } else { ?>
<p align="center"><img src="includes/verifyimage.php" align="middle" /> <input type="text" name="code" class="input-small" maxlength="5" /></p>
<?php }
}?>

<div class="form-actions textcenter">
    <input class="btn btn-success btn-lg" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubmit'];?>
" />
    <input class="btn btn-lg" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
</div>

</form><?php }
}
