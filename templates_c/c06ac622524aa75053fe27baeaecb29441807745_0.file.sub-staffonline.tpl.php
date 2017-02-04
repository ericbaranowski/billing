<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/sidebar-tabs/sub-staffonline.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030a9d7d8_56939720',
  'file_dependency' => 
  array (
    'c06ac622524aa75053fe27baeaecb29441807745' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/sidebar-tabs/sub-staffonline.tpl',
      1 => 1479234051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030a9d7d8_56939720 ($_smarty_tpl) {
?>
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-users bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['staffonline'];?>
</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
					<br />
					<?php if (isset($_smarty_tpl->tpl_vars["adminsOnlineArray"])) {$_smarty_tpl->tpl_vars["adminsOnlineArray"] = clone $_smarty_tpl->tpl_vars["adminsOnlineArray"];
$_smarty_tpl->tpl_vars["adminsOnlineArray"]->value = explode(",",$_smarty_tpl->tpl_vars['adminsonline']->value); $_smarty_tpl->tpl_vars["adminsOnlineArray"]->nocache = null;
} else $_smarty_tpl->tpl_vars["adminsOnlineArray"] = new Smarty_Variable(explode(",",$_smarty_tpl->tpl_vars['adminsonline']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "adminsOnlineArray", 0);?>
					<?php
$_from = $_smarty_tpl->tpl_vars['adminsOnlineArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_adminOnline_0_saved_item = isset($_smarty_tpl->tpl_vars['adminOnline']) ? $_smarty_tpl->tpl_vars['adminOnline'] : false;
$_smarty_tpl->tpl_vars['adminOnline'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['adminOnline']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['adminOnline']->value) {
$_smarty_tpl->tpl_vars['adminOnline']->_loop = true;
$__foreach_adminOnline_0_saved_local_item = $_smarty_tpl->tpl_vars['adminOnline'];
?>
						<span class="control-sidebar-subheading"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['adminOnline']->value;?>
</span>
					<?php
$_smarty_tpl->tpl_vars['adminOnline'] = $__foreach_adminOnline_0_saved_local_item;
}
if ($__foreach_adminOnline_0_saved_item) {
$_smarty_tpl->tpl_vars['adminOnline'] = $__foreach_adminOnline_0_saved_item;
}
?> 					
                  </div>
                </a>
              </li>
            </ul><?php }
}
