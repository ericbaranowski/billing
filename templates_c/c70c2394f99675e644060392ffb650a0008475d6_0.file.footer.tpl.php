<?php
/* Smarty version 3.1.29, created on 2017-01-10 20:54:39
  from "/home/billing/public_html/admin/templates/v4/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58754a0fb741a5_86471667',
  'file_dependency' => 
  array (
    'c70c2394f99675e644060392ffb650a0008475d6' => 
    array (
      0 => '/home/billing/public_html/admin/templates/v4/footer.tpl',
      1 => 1481721244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:v4/sidebar.tpl' => 1,
  ),
),false)) {
function content_58754a0fb741a5_86471667 ($_smarty_tpl) {
?>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-md-pull-10 col-sm-3 col-sm-pull-9" id="sidebar">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:v4/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>
    <div class="clear"></div>
  </div>
  <div id="footer">
    Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.  All Rights Reserved.
  </div>

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

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
