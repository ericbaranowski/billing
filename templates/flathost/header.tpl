<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset={$charset}" />
<title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
{if $systemurl}
<base href="{$systemurl}" />
{/if}<script type="text/javascript" src="templates/{$template}/js/jquery.js"></script>
{if $livehelpjs}{$livehelpjs}
    {/if}
<link href="templates/{$template}/css/bootstrap.css" rel="stylesheet">
<link href="templates/{$template}/css/flathost.css" rel="stylesheet">
<!--==== GOOGLE FONT - MONTSERRAT =======-->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<script src="templates/{$template}/js/bootstrap.js"></script>
<script src="templates/{$template}/js/whmcs.js"></script>
{$headoutput}
</head>

<body>
{$headeroutput} 

<!--===== FLATHOST NAVIGATION ======-->

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="https://kulado.com"> <img src="templates/{$template}/img/logo.png" alt="{$companyname}" /></a> </div>
    <a href="index.php" class="hidden">{$companyname}</a> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="https://kulado.com">HOME</a></li>
        <li class="hidden-sm"><a href="https://kulado.com/#features">FEATURES</a></li>
        <li><a href="https://kulado.com/#pricing">PRICING</a></li>
        <li><a href="mailto:hosting@kulado.com" target="_blank">CONTACT</a></li>
        <li><a id="Menu-Support-Knowledgebase" href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
      <li class="dropdown"><a id="Menu-Account" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> {$LANG.account}&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Account-Login" href="clientarea.php">{$LANG.login}</a></li>
        <li><a id="Menu-Account-Register" href="register.php">{$LANG.register}</a></li>
        <li class="divider"></li>
        <li><a id="Menu-Account-Forgot_Password" href="pwreset.php">{$LANG.forgotpw}</a></li>
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
{if $pagetitle eq $LANG.carttitle}
<div id="whmcsorderfrm">
{/if} 
