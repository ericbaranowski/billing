<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:46
  from "/home/billing/public_html/templates/flathost/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5857502e2f2af4_60360035',
  'file_dependency' => 
  array (
    'b367485a497e821655a901cccb0105a36cf987cd' => 
    array (
      0 => '/home/billing/public_html/templates/flathost/header.tpl',
      1 => 1479127816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5857502e2f2af4_60360035 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
<title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>
<?php if ($_smarty_tpl->tpl_vars['systemurl']->value) {?>
<base href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" />
<?php }
echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['livehelpjs']->value) {
echo $_smarty_tpl->tpl_vars['livehelpjs']->value;?>

    <?php }?>
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/bootstrap.css" rel="stylesheet">
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/flathost.css" rel="stylesheet">
<!--==== GOOGLE FONT - MONTSERRAT =======-->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>
 

<!--===== FLATHOST NAVIGATION ======-->

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="https://kulado.com"> <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></a> </div>
    <a href="index.php" class="hidden"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="https://kulado.com">HOME</a></li>
        <li class="hidden-sm"><a href="https://kulado.com/#features">FEATURES</a></li>
        <li><a href="https://kulado.com/#pricing">PRICING</a></li>
        <li><a href="mailto:hosting@kulado.com" target="_blank">CONTACT</a></li>
        <li><a id="Menu-Support-Knowledgebase" href="knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
      <li class="dropdown"><a id="Menu-Account" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Account-Login" href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a></li>
        <li><a id="Menu-Account-Register" href="register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a></li>
        <li class="divider"></li>
        <li><a id="Menu-Account-Forgot_Password" href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a></li>
</ul>
      </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
    
  </div>
</nav>

<!-- /navbar -->

<div class="container">
<div class="contentpadded">
<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['LANG']->value['carttitle']) {?>
<div id="whmcsorderfrm">
<?php }?> 
<?php }
}
