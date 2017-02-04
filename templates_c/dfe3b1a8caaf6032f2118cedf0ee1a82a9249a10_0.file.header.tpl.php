<?php
/* Smarty version 3.1.29, created on 2017-01-10 20:54:39
  from "/home/billing/public_html/admin/templates/v4/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58754a0f67a5b1_30054592',
  'file_dependency' => 
  array (
    'dfe3b1a8caaf6032f2118cedf0ee1a82a9249a10' => 
    array (
      0 => '/home/billing/public_html/admin/templates/v4/header.tpl',
      1 => 1481721244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:v4/menu.tpl' => 1,
  ),
),false)) {
function content_58754a0f67a5b1_30054592 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
<title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
",
    csrfToken = "<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
";
<?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>$(document).ready(function(){
    <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

});
<?php }
if ($_smarty_tpl->tpl_vars['jscode']->value) {
echo $_smarty_tpl->tpl_vars['jscode']->value;?>

<?php }
echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


  <div id="headerWrapper" align="center">
    <div id="bodyContentWrapper" align="left">
      <div id="mynotes"><form id="frmmynotes"><input type="hidden" name="action" value="savenotes" /><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" /><textarea id="mynotesbox" name="notes" rows="15" cols="80"><?php echo $_smarty_tpl->tpl_vars['admin_notes']->value;?>
</textarea><br /><input type="button" value="Save" id="savenotes" /></form></div>
      <div id="topnav">
        <div id="welcome"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['welcomeback'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
</strong>&nbsp;&nbsp;- <a href="../" title="Client Area"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['clientarea'];?>
</a> | <a href="#" id="shownotes" title="My Notes"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</a> | <a href="myaccount.php" title="My Account"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a> | <a href="logout.php" title="Logout"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['logout'];?>
</a><?php echo $_smarty_tpl->tpl_vars['topBarNotification']->value;?>
</div>
        <div id="date"><?php echo smarty_modifier_date_format(time(),"%A | %d %B %Y | %H:%M %p");?>
</div>
        <div class="clear"></div>
      </div>
      <div id="intellisearch">
        <form id="frmintellisearch">
          <input type="hidden" name="intellisearch" value="1" />
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
          <div class="input-group input-group-sm">
            <input type="text" name="value" id="intellisearchval" class="form-control"  placeholder="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['intellisearch'];?>
..." >
            <span class="input-group-addon">
              <button type="submit" id="btnIntelliSearch">
                <span class="fa fa-search"></span>
              </button>
              <button class="hidden" id="btnIntelliSearchCancel" onclick="intellisearchcancel()">
                <span class="fa fa-times"></span>
              </button>
            </span>
          </div>
          <div align="left" id="searchresults" class="hidden"></div>
        </form>
      </div>
      <a title="WHMCS Home" href="./" id="logo"></a>
      <div class="navigation">
        <ul id="menu">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:v4/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </ul>
      </div>
    </div>
  </div>
  <div class="global-admin-warning<?php if (!$_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value) {?> hidden<?php }?>">
    <?php echo $_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value;?>

  </div>
  <div id="content_container">

    <div class="col-md-10 col-md-push-2 col-sm-9 col-sm-push-3">

      <div id="content">
        <?php if ($_smarty_tpl->tpl_vars['helplink']->value) {?><div class="contexthelp"><a href="http://docs.whmcs.com/<?php echo $_smarty_tpl->tpl_vars['helplink']->value;?>
" target="_blank"><img src="images/icons/help.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['contextlink'];?>
</a></div><?php }?>
        <h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
        <div id="content_padded">
<?php }
}
