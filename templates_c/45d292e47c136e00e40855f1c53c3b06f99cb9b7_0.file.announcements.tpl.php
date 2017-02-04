<?php
/* Smarty version 3.1.29, created on 2016-12-23 05:40:34
  from "/home/billing/public_html/templates/flathost/announcements.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585cb8d277c527_78585093',
  'file_dependency' => 
  array (
    '45d292e47c136e00e40855f1c53c3b06f99cb9b7' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/announcements.tpl',
      1 => 1479127790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585cb8d277c527_78585093 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['announcementstitle']), 0, true);
?>


<?php
$_from = $_smarty_tpl->tpl_vars['announcements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_announcement_0_saved_item = isset($_smarty_tpl->tpl_vars['announcement']) ? $_smarty_tpl->tpl_vars['announcement'] : false;
$__foreach_announcement_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['announcement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
$__foreach_announcement_0_saved_local_item = $_smarty_tpl->tpl_vars['announcement'];
?>

<h2><a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else {
echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a></h2>
<p><strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['timestamp'],"%A, %B %e, %Y");?>
</strong></p>

<br />

<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']),400,"...");?>
</p>

<?php if (strlen($_smarty_tpl->tpl_vars['announcement']->value['text']) > 400) {?><p><a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else {
echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['more'];?>
 &raquo;</a></p><?php }?>

<br />

<?php if ($_smarty_tpl->tpl_vars['facebookrecommend']->value) {?>

<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>

<div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
<?php }?>
<br /><br />
<?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['announcement']->_loop) {
?>
<p align="center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementsnone'];?>
</strong></p>
<?php
}
if ($__foreach_announcement_0_saved_item) {
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_item;
}
if ($__foreach_announcement_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_announcement_0_saved_key;
}
?>

<br />

<?php if ($_smarty_tpl->tpl_vars['prevpage']->value || $_smarty_tpl->tpl_vars['nextpage']->value) {?>

<div style="float: left; width: 200px;">
<?php if ($_smarty_tpl->tpl_vars['prevpage']->value) {?><a href="announcements.php?page=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
"><?php }?>&laquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['previouspage'];
if ($_smarty_tpl->tpl_vars['prevpage']->value) {?></a><?php }?>
</div>

<div style="float: right; width: 200px; text-align: right;">
<?php if ($_smarty_tpl->tpl_vars['nextpage']->value) {?><a href="announcements.php?page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
"><?php }
echo $_smarty_tpl->tpl_vars['LANG']->value['nextpage'];?>
 &raquo;<?php if ($_smarty_tpl->tpl_vars['nextpage']->value) {?></a><?php }?>
</div>

<?php }?>

<br />

<p align="right"><img src="images/rssfeed.gif" alt="RSS" align="absmiddle" /> <a href="announcementsrss.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementsrss'];?>
</a></p>

<br /><?php }
}
