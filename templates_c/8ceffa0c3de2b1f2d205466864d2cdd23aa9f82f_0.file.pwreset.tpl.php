<?php
/* Smarty version 3.1.29, created on 2016-12-21 12:27:09
  from "/home/billing/public_html/templates/flathost/pwreset.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585a751de9c5b3_97441228',
  'file_dependency' => 
  array (
    '8ceffa0c3de2b1f2d205466864d2cdd23aa9f82f' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/pwreset.tpl',
      1 => 1479127852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a751de9c5b3_97441228 ($_smarty_tpl) {
?>
<div class="halfwidthcontainer">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['pwreset']), 0, true);
?>


<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>

  <div class="alert alert-success">
    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationsent'];?>
</p>
  </div>

  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationcheckemail'];?>


  <br />
  <br />
  <br />
  <br />

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
<div class="alert alert-danger textcenter">
    <p><?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>
</p>
</div>
<?php }?>

<form method="post" action="pwreset.php"  class="form-stacked">
<input type="hidden" name="action" value="reset" />

<?php if ($_smarty_tpl->tpl_vars['securityquestion']->value) {?>

<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />

<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsecurityquestionrequired'];?>
</p>


<div class="logincontainer">

    <fieldset class="form-group">

        <div class="form-group">
          <label for="answer"><?php echo $_smarty_tpl->tpl_vars['securityquestion']->value;?>
:</label>
          <div class="controls">
            <input class="form-control" name="answer" id="answer" type="text" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
" />
          </div>
        </div>

        <div>
          <p align="center"><input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
" /></p>
        </div>

    </fieldset>

</div>

<?php } else { ?>

<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetdesc'];?>
</p>

<div class="logincontainer">

    <fieldset class="form-group">

        <div class="form-group">
          <label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
:</label>
          <div class="controls">
            <input class="form-control" name="email" id="email" type="text" />
          </div>
        </div>

        <div>
          <p align="center"><input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
" /></p>
        </div>

    </fieldset>

</div>

<?php }?>

</form>

<?php }?>

</div><?php }
}
