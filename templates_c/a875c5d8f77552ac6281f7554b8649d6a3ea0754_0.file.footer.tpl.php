<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030a79596_43830356',
  'file_dependency' => 
  array (
    'a875c5d8f77552ac6281f7554b8649d6a3ea0754' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/footer.tpl',
      1 => 1479234046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030a79596_43830356 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
	  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/widgets/chat/chat_pop_up.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


	  
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <?php echo smarty_modifier_date_format(time(),"%A, %d %B %Y, %H:%M");?>

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.</strong> All rights reserved.
      </footer>
	  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



		<div id="greyout"></div>

			<form id="frmmynotes">
				<input type="hidden" name="action" value="savenotes" />
				<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
				<div class="modal fade modal-my-notes" id="myNotes">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header modal-warning">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</h4>
							</div>
							<div class="modal-body">
								<textarea id="mynotesbox" name="notes" rows="12" class="form-control"><?php echo $_smarty_tpl->tpl_vars['admin_notes']->value;?>
</textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['cancel'];?>
</button>
								<button type="button" class="btn btn-primary" onclick="notesclose('1')"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['savechanges'];?>
</button>
							</div>
						</div>
					</div>
				</div>
			</form>

			<?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value) {?>
				<div class="client-limit-notification client-limit-notification-form panel panel-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];?>
" id="clientLimitNotification">
					<div class="panel-heading">
						<button type="button" class="close" id="btnClientLimitNotificationDismiss"><span aria-hidden="true">&times;</span></button>
						<h3 class="panel-title">
							<i class="fa <?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['icon'];?>
"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['title'];?>
</span>
							<small>(<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['numberOfActiveClients'];?>
 / <?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['clientLimit'];?>
)</small>
						</h3>
					</div>
					<div class="panel-body">
						<p><?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['body'];?>
</p>
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['upgradeUrl'];?>
" target="_blank">
							<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
">
							<input type="hidden" name="getupgradedata" value="1">
							<input type="hidden" name="license_key" value="" class="input-license-key">
							<input type="hidden" name="member_data" value="" class="input-member-data">
							<div class="links">
								<a href="#" id="btnClientLimitNotificationDontShowAgain" class="btn btn-xs btn-link pull-right">Don't show this again</a>
								<button type="submit" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];
if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['autoUpgradeEnabled']) {?> hidden<?php }?>" id="btnClientLimitNotificationUpgrade">Upgrade Now</button>
								<?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['learnMoreUrl']) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['learnMoreUrl'];?>
" class="btn btn-xs <?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['autoUpgradeEnabled']) {?>btn-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];
} else { ?>btn-link<?php }?>" target="_blank">Learn more &raquo;</a>
								<?php }?>
							</div>
						</form>
					</div>
				</div>
			<?php }?>

			<div class="modal whmcs-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content panel panel-primary">
						<div class="modal-header panel-heading" id="modalAjaxHeader">
							<button id=modalAjaxCloseSmall" type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="modalAjaxTitle">Title</h4>
						</div>
						<div class="modal-body panel-body" id="modalAjaxBody">
							Loading...
						</div>
						<div class="modal-footer panel-footer" id="modalAjaxFooter">
							<div id="modalFooterLeft"></div>
							<div class="pull-left loader" id="modalAjaxLoader">
								<i class="fa fa-circle-o-notch fa-spin"></i> Loading...
							</div>
							<button id="modalAjaxClose" type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
							<button type="button" class="btn btn-primary modal-submit" id="modalAjaxSubmit">
								Submit
							</button>
						</div>
					</div>
				</div>
			</div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/lightbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/icheck.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/Admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AjaxModal.js"><?php echo '</script'; ?>
>
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/icheck/flat/blue.css" rel="stylesheet" />	
		
    </div><!-- ./wrapper -->
	<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

	
  </body>
</html>
<?php }
}
