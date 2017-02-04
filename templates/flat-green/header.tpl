<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta http-equiv="content-type" content="text/html; charset={$charset}" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

  {if $systemurl}<base href="{$systemurl}" />{/if}
  <script type="text/javascript" src="includes/jscript/jquery.js"></script>
  {if $livehelpjs}{$livehelpjs}{/if}
    
  <link href="templates/{$template}/css/bootstrap.css" rel="stylesheet" />
  <link href="templates/{$template}/css/whmcs.css" rel="stylesheet" />
  <link href="templates/{$template}/css/flex.css" rel="stylesheet" />
  <link href="templates/{$template}/css/flat.css" rel="stylesheet" />
  <link href="templates/{$template}/css/flat-green.css" rel="stylesheet" />
  <link href="templates/{$template}/css/reset.css" rel="stylesheet" />
  <link href="templates/{$template}/css/jquery.selectBoxIt.css" rel="stylesheet" />
  <!--[if lte IE 9]>
  <link href="templates/{$template}/css/flex-ie.css" rel="stylesheet" />
  <![endif]-->
  <script src="templates/{$template}/js/jquery-ui.min.js"></script>
  <script src="templates/{$template}/js/jquery.selectBoxIt.min.js"></script>
  <script src="templates/{$template}/js/whmcs.js"></script>
  <script src="templates/{$template}/js/bootstrap.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>  
	<link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>  
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  {$headoutput}
       
</head>

<body>

	<header>

		<div class="wrapper">

			<h1><a class="navbar-brand" href="https://kulado.com/billing"><img src="images/flathost-logo.png" alt="logo"></a></h1>

		<div class="right">
				<ul class="nav pull-right">
					  <li data-toggle="dropdown" class="dropdown">
				      {if $loggedin}
						<a href="#" class="dropdown-toggle"><span>{$LANG.hello}, {$loggedinuser.firstname}!</span></a>
				      </li>
					  <ul class="dropdown-menu">
						<li><a href="clientarea.php?action=details"><img src="templates/{$template}/img/editdetails.png" alt="{$LANG.editaccountdetails}" />{$LANG.editaccountdetails}</a></li>
						<li><a href="clientarea.php?action=changepw"><img src="templates/{$template}/img/key.png" alt="{$LANG.clientareanavchangepw}" />{$LANG.clientareanavchangepw}</a></li>
						<li><a class="logout" href="logout.php"><img src="templates/{$template}/img/logout.png" alt="{$LANG.logouttitle}" />{$LANG.logouttitle}</a></li>
					  </ul>
				      {else}
				        <a class="dropdown-toggle" href="#"><span>{$LANG.account}</span></a>
				      </li>
					  <ul class="dropdown-menu">
						<li><a href="clientarea.php"><img src="templates/{$template}/img/login.png" alt="{$LANG.login}" />{$LANG.login}</a></li>
						<li><a href="register.php"><img src="templates/{$template}/img/register.png" alt="{$LANG.register}" />{$LANG.register}</a></li>
						<li><a class="logout" href="pwreset.php"><img src="templates/{$template}/img/forgot.png" alt="{$LANG.forgotpw}" />{$LANG.forgotpw}</a></li>
					  </ul>
				      {/if}
					</ul>

			</div>


		</div><!--wrapper-->

	</header>
	


<!--	
<div id="whmcsheader">
  
  <div class="whmcscontainer">
  
  
    <a href="clientarea.php" id="whmcsimglogo"></a>
        
    <ul class="nav pull-right">
	  <li data-toggle="dropdown" class="dropdown">
      {if $loggedin}
		<a href="#" class="dropdown-toggle">{$LANG.hello}, {$loggedinuser.firstname}! &nbsp;<b class="caret"></b></a>
      </li>
	  <ul class="dropdown-menu">
		<li><a href="clientarea.php?action=details"><img src="templates/{$template}/img/editdetails.png" alt="{$LANG.editaccountdetails}" />{$LANG.editaccountdetails}</a></li>
		{if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard"><img src="templates/{$template}/img/card.png" alt="{$LANG.navmanagecc}" />{$LANG.navmanagecc}</a></li>{/if}
		<li><a href="clientarea.php?action=contacts"><img src="templates/{$template}/img/contacts.png" alt="{$LANG.clientareanavcontacts}" />{$LANG.clientareanavcontacts}</a></li>
		{if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds"><img src="templates/{$template}/img/funds.png" alt="{$LANG.addfunds}" />{$LANG.addfunds}</a></li>{/if}
		<li><a href="clientarea.php?action=emails"><img src="templates/{$template}/img/emails.png" alt="{$LANG.navemailssent}" />{$LANG.navemailssent}</a></li>
		<li><a href="clientarea.php?action=changepw"><img src="templates/{$template}/img/key.png" alt="{$LANG.clientareanavchangepw}" />{$LANG.clientareanavchangepw}</a></li>
		<li class="divider"></li>
		<li><a class="logout" href="logout.php"><img src="templates/{$template}/img/logout.png" alt="{$LANG.logouttitle}" />{$LANG.logouttitle}</a></li>
	  </ul>
      {else}
        <a class="dropdown-toggle" href="#">{$LANG.account} &nbsp;<b class="caret"></b></a>
      </li>
	  <ul class="dropdown-menu">
		<li><a href="clientarea.php"><img src="templates/{$template}/img/login.png" alt="{$LANG.login}" />{$LANG.login}</a></li>
		<li><a href="register.php"><img src="templates/{$template}/img/register.png" alt="{$LANG.register}" />{$LANG.register}</a></li>
		<li class="divider"></li>
		<li><a class="logout" href="pwreset.php"><img src="templates/{$template}/img/forgot.png" alt="{$LANG.forgotpw}" />{$LANG.forgotpw}</a></li>
	  </ul>
      {/if}
	</ul>
          
    <div class="clear"></div>
          
	
  </div>
    
</div>
-->

<div class="whmcscontainer breadcrumb">
	<h2>{$pagetitle}</h2>

<ul>{$breadcrumbnav|replace:'</a> >':'</a></li>'|replace:'<a href=':'<li><a href='}</li></ul> 

</div>

<div id="whmcscontent">

  <div class="whmcscontainer">
    
    {if $pagetitle eq $LANG.carttitle}<div id="whmcsorderfrm">{/if}