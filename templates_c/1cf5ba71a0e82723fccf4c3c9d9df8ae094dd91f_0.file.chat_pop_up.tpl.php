<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/widgets/chat/chat_pop_up.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030a83be3_41923319',
  'file_dependency' => 
  array (
    '1cf5ba71a0e82723fccf4c3c9d9df8ae094dd91f' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/widgets/chat/chat_pop_up.tpl',
      1 => 1479234057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030a83be3_41923319 ($_smarty_tpl) {
?>
<div id="lrchat-widget" class="box box-primary direct-chat direct-chat-primary " style="<?php if (($_smarty_tpl->tpl_vars['lara_lrchat_state']->value == 'closed') || (!$_smarty_tpl->tpl_vars['lara_lrchat_lastuid']->value)) {?> display: none; <?php }?>">
	  <div class="box-header with-border">
		<h3 class="box-title" id="lrchat-title"></h3>
		<div class="box-tools pull-right">
		  <span id="lrchat_loading"></span>
		  <button class="btn btn-box-tool" data-toggle="tooltip" title="Staff" data-widget="lrchat-contacts" ><i class="fa fa-comments notifications-icon" ></i><span class="label label-danger notifications-count" data-widget="lrchat-notifications-count" ></span></button>
		  <button class="btn btn-box-tool hidden-xs" data-widget="lrchat-collapse"><i class="fa <?php if ($_smarty_tpl->tpl_vars['lara_lrchat_state']->value == 'collapsed') {?> fa-plus <?php } else { ?> fa-minus <?php }?>"></i></button>
		  <button class="btn btn-box-tool" data-widget="lrchat-hide"><i class="fa fa-times"></i></button>
		</div>
	  </div><!-- /.box-header -->
	  
	  <div id="lrchat-body-container" <?php if ($_smarty_tpl->tpl_vars['lara_lrchat_state']->value == 'collapsed') {?> style="display: none;" <?php }?> >
		  <div id="lrchat-box-body" class="box-body">
			<!-- Conversations are loaded here -->
			<div class="direct-chat-messages" id="lrchat-chat-window"></div>
			<div class='direct-chat-error' id="lrchat-chat-error" style="display: none;"></div>

			<!-- Contacts are loaded here -->
			<div class="direct-chat-contacts" id="lrchat-chat-contacts">
			  <ul id="lrchat-popup-nav-contacts" class="contacts-list">
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
				<li>
				  <a href="#" data-lrchat-adminid="<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
" data-lrchat-adminname="<?php echo $_smarty_tpl->tpl_vars['adminDetails']->value['name'];?>
">
					<img class="contacts-list-img" src="//www.gravatar.com/avatar.php?gravatar_id=<?php echo $_smarty_tpl->tpl_vars['adminDetails']->value['uimg'];?>
" alt="Contact Avatar">
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
				</li><!-- End Contact Item -->
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
			  </ul><!-- /.contatcts-list -->
			</div><!-- /.direct-chat-pane -->
		  </div><!-- /.box-body -->
		  <div id="lrchat-box-footer" class="box-footer">
		  <form id="lrchat-sendmsg" name="lrchat-sendmsg" role="form">
			<input name="lrchat" value="true" type="hidden">
			<input name="command" value="sendmsg" type="hidden">
			<input name="userid" value="<?php echo $_smarty_tpl->tpl_vars['lara_lrchat_lastuid']->value;?>
" type="hidden">
			<div class="input-group">
			  <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="lrchat-message">
			  <span class="input-group-btn">
				<button type="submit" class="btn btn-danger btn-flat" id="lrchat-sendmsg-submit">Send</button>
			  </span>
			</div>
		  </form> 
		  </div><!-- /.box-footer-->
	  </div><!-- /.container-->
</div><!--/.direct-chat --><?php }
}
