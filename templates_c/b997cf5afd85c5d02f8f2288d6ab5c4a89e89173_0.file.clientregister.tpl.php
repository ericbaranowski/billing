<?php
/* Smarty version 3.1.29, created on 2016-12-25 02:36:15
  from "/home/billing/public_html/templates/flathost/clientregister.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585f309f02d397_03744080',
  'file_dependency' => 
  array (
    'b997cf5afd85c5d02f8f2288d6ab5c4a89e89173' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/clientregister.tpl',
      1 => 1479127803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585f309f02d397_03744080 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="includes/jscript/statesdropdown.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'],'desc'=>$_smarty_tpl->tpl_vars['LANG']->value['registerintro']), 0, true);
?>


<?php if ($_smarty_tpl->tpl_vars['noregistration']->value) {?>

    <div class="alert alert-danger">
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdisablednotice'];?>
</p>
    </div>

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
<div class="alert alert-danger">
    <p class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</p>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

    </ul>
</div>
<?php }?>

<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
<input type="hidden" name="register" value="true" />

<fieldset>

<div class="row">
<div class="col-sm-6">

    <div class="form-group">
        <label for="firstname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
            <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
"<?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="lastname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
            <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
"<?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="companyname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
            <input class="form-control" type="text" name="companyname" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
"<?php if (in_array('companyname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
            <input class="form-control" type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
"<?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
            <input class="form-control" type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['clientpassword']->value;?>
" />
    </div>

    <div class="form-group">
        <label for="password2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
            <input class="form-control" type="password" name="password2" id="password2" value="<?php echo $_smarty_tpl->tpl_vars['clientpassword2']->value;?>
" />
    </div>

    <div class="form-group">
        <label for="passstrength"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
</label>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>

</div>
<div class="col-sm-6">

    <div class="form-group">
        <label for="address1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
            <input class="form-control" type="text" name="address1" id="address1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"<?php if (in_array('address1',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="address2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
            <input class="form-control" type="text" name="address2" id="address2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
"<?php if (in_array('address2',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

    <div class="form-group">
        <label for="city"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
            <input class="form-control" type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"<?php if (in_array('city',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>

  <div class="form-group">
        <label for="state"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
            <div><?php echo $_smarty_tpl->tpl_vars['clientcountriesdropdown']->value;?>
</div>
    </div>

    <div class="form-group">
        <label for="state"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
            <div><input class="form-control" type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"<?php if (in_array('state',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> /></div>
    </div>

    <div class="form-group">
        <label for="postcode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
            <input class="form-control" type="text" name="postcode" id="postcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
"<?php if (in_array('postcode',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> />
    </div>


    <div class="form-group">
        <label for="phonenumber"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
            <div><input class="form-control" type="text" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
"<?php if (in_array('phonenumber',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="" class="disabled"<?php }?> /></div>
    </div>

</div>
</div>

</fieldset>

<fieldset class="onecol">

<?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
    <div class="form-group">
        <label for="currency"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</label>
        <div id="currency">
            <select class="form-control" name="currency">
            <?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curr_0_saved_item = isset($_smarty_tpl->tpl_vars['curr']) ? $_smarty_tpl->tpl_vars['curr'] : false;
$_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
$__foreach_curr_0_saved_local_item = $_smarty_tpl->tpl_vars['curr'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency'] && $_smarty_tpl->tpl_vars['curr']->value['default'] || $_POST['currency'] == $_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_0_saved_local_item;
}
if ($__foreach_curr_0_saved_item) {
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_0_saved_item;
}
?>
            </select>
        </div>
    </div>
<?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_1_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$__foreach_customfield_1_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_1_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
    <div class="form-group">
        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
            <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

    </div>
<?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_local_item;
}
if ($__foreach_customfield_1_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_item;
}
if ($__foreach_customfield_1_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_customfield_1_saved_key;
}
?>

<?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
    <div class="form-group">
        <label for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</label>
            <select name="securityqid" id="securityqid">
            <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_2_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_2_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_2_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_local_item;
}
if ($__foreach_question_2_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_item;
}
if ($__foreach_question_2_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_question_2_saved_key;
}
?>
            </select>
    </div>
    <div class="form-group">
        <label for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
            <input type="password" name="securityqans" id="securityqans" />
    </div>
<?php }?>

</fieldset>

<?php if ($_smarty_tpl->tpl_vars['capatacha']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchatitle'];?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchaverify'];?>
</p>
<?php if ($_smarty_tpl->tpl_vars['capatacha']->value == "recaptcha") {?>
<div align="center"><?php echo $_smarty_tpl->tpl_vars['recapatchahtml']->value;?>
</div>
<?php } else { ?>
<p align="center"><img src="includes/verifyimage.php" align="middle" /> <input type="text" name="code" size="10" maxlength="5" class="input-small" /></p>
<?php }
}?>

<br />

<?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
<div class="form-group">
    <label id="tosagree"></label>
       <div class="checkbox"> <label>
            <input type="checkbox" name="accepttos" id="accepttos" value="on" >
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 </label> </div><a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
    </div>
</div>
<?php }?>

<p align="center"><input class="btn btn-lg btn-success" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
" /></p>

</form>

<?php }?>

<br />
<br /><?php }
}
