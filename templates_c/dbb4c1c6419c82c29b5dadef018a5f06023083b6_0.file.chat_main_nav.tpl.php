<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/widgets/chat/chat_main_nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585750309898b4_56877663',
  'file_dependency' => 
  array (
    'dbb4c1c6419c82c29b5dadef018a5f06023083b6' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/widgets/chat/chat_main_nav.tpl',
      1 => 1479234057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585750309898b4_56877663 ($_smarty_tpl) {
?>
 				  <li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  <i class="fa fa-comments"></i>
					  <span class="label label-success" data-widget="lrchat-notifications-count"></span>
					</a>
					<ul class="dropdown-menu">
					  <li class="header">Staff</li>
					  <li>
						<!-- inner menu: contains the actual data -->
						<ul id="lrchat-top-nav-contacts" class="contacts-list">
						  <?php
$_from = $_smarty_tpl->tpl_vars['laraChatAdmins']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_adminDetails_0_saved_item = isset($_smarty_tpl->tpl_vars['adminDetails']) ? $_smarty_tpl->tpl_vars['adminDetails'] : false;
$__foreach_adminDetails_0_saved_key = isset($_smarty_tpl->tpl_vars['adminID']) ? $_smarty_tpl->tpl_vars['adminID'] : false;
$_smarty_tpl->tpl_vars['adminDetails'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['adminID'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['adminDetails']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['adminID']->value => $_smarty_tpl->tpl_vars['adminDetails']->value) {
$_smarty_tpl->tpl_vars['adminDetails']->_loop = true;
$__foreach_adminDetails_0_saved_local_item = $_smarty_tpl->tpl_vars['adminDetails'];
?>
							<?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['cuser'] != 1) {?>
							  <li><!-- start message -->
								<a href="#" data-lrchat-adminid="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
" data-lrchat-adminname="<?php echo $_smarty_tpl->tpl_vars['adminDetails']->value['name'];?>
">
									<img class="contacts-list-img" src="//www.gravatar.com/avatar.php?gravatar_id=<?php echo $_smarty_tpl->tpl_vars['adminDetails']->value['uimg'];?>
">
									<div class="contacts-list-info">
									  <span class="contacts-list-name">
										<?php echo $_smarty_tpl->tpl_vars['adminDetails']->value['name'];?>
 <span data-lrchat-notificationsfor="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
"></span>
										
										<small class="contacts-list-date pull-right" data-lrchat-onlinestatusefor="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
" ><?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['status'] == '1') {?><i class="fa fa-circle text-success"></i><?php }?></small>
									  </span>
									  <span class="contacts-list-msg" data-lrchat-messagefor="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
"></span>
									  <small class="contacts-list-date pull-right" data-lrchat-timestampfor="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
" ></small>
									</div><!-- /.contacts-list-info -->
								</a>
							  </li>
							  <?php }?>
						  <?php
$_smarty_tpl->tpl_vars['adminDetails'] = $__foreach_adminDetails_0_saved_local_item;
}
if ($__foreach_adminDetails_0_saved_item) {
$_smarty_tpl->tpl_vars['adminDetails'] = $__foreach_adminDetails_0_saved_item;
}
if ($__foreach_adminDetails_0_saved_key) {
$_smarty_tpl->tpl_vars['adminID'] = $__foreach_adminDetails_0_saved_key;
}
?>
						  
						  <!-- end message -->
						</ul>
					  </li>
					</ul>
				  </li><?php }
}
