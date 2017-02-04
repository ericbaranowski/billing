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

			<h1><a href="clientarea.php">{$companyname}</a></h1>

{if $loggedin}			
			<span class="sep"></span>

			<div class="header-notifications">

				<a class="header-messages" href="supporttickets.php">
					<span class="icon"></span>
					<span class="bubble">{$clientsstats.numactivetickets}</span>
				</a>
				
				<a class="header-invoices" href="clientarea.php?action=invoices">
					<span class="icon"></span>
					<span class="bubble">{$clientsstats.numunpaidinvoices}</span>
				</a>
			
				<a class="header-services" href="announcements.php">
					<span class="icon"></span>
					<span class="bubble">{php}$query ="SELECT COUNT(id) from tblannouncements ";$result = mysql_query($query);$data = mysql_fetch_array($result);echo $data[0];{/php}</span>
				</a>
					
			</div><!--header-notifications-->
{/if}
		<div class="right">
				<form class="left" action="knowledgebase.php?action=search" method="post">		
					<input type="search" class="header-search" name="search" placeholder="Search our knowledgebase">
				</form>
				  <ul class="nav pull-right">
					  <li data-toggle="dropdown" class="dropdown">
				      {if $loggedin}
						<a href="#" class="dropdown-toggle"><span>{$LANG.hello}, {$loggedinuser.firstname}!</span></a>
				      </li>
					  <ul class="dropdown-menu">
						<li><a href="clientarea.php?action=details"><img src="templates/{$template}/img/editdetails.png" alt="{$LANG.editaccountdetails}" />{$LANG.editaccountdetails}</a></li>
						{if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard"><img src="templates/{$template}/img/creditcard.png" alt="{$LANG.navmanagecc}" />{$LANG.navmanagecc}</a></li>{/if}
						<li><a href="clientarea.php?action=contacts"><img src="templates/{$template}/img/contacts.png" alt="{$LANG.clientareanavcontacts}" />{$LANG.clientareanavcontacts}</a></li>
						{if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds"><img src="templates/{$template}/img/funds.png" alt="{$LANG.addfunds}" />{$LANG.addfunds}</a></li>{/if}
						<li><a href="clientarea.php?action=emails"><img src="templates/{$template}/img/emails.png" alt="{$LANG.navemailssent}" />{$LANG.navemailssent}</a></li>
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
	
	<nav class="primary-nav{if $loggedin}{else} primary-nav-loggedout{/if}">

		<div class="wrapper">

			
			
			<ul>
				<li{if $filename eq "clientarea" and $smarty.get.action eq ""} class="active"{/if}{if $filename eq "index" and $smarty.get.action eq ""} class="active"{/if}><a href="{if $loggedin}clientarea{else}index{/if}.php"><span class="nav-home">{$LANG.hometitle}</span></a></li>
				{if $loggedin}
					  <li class="{if $filename eq "clientarea" and $smarty.get.action eq "products"} active{/if}{if $filename eq "index" and $smarty.get.m eq "project_management"}active{/if}{if $filename eq "cart" and $smarty.get.action eq " "} active{/if}{if $filename eq "cart" and $smarty.get.gid eq "addons"} active{/if} dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="nav-services">{$LANG.navservices}&nbsp;<b class="caret"></b></span></a>
						<ul class="dropdown-menu">
						  <li><a href="clientarea.php?action=products">{$LANG.clientareanavservices}</a></li>
						  {if $condlinks.pmaddon}<li><a href="index.php?m=project_management">{$LANG.clientareaprojects}</a></li>{/if}
						  <li><a href="cart.php">{$LANG.navservicesorder}</a></li>
						  <li><a href="cart.php?gid=addons">{$LANG.clientareaviewaddons}</a></li>
						</ul>
					  </li>			
				{/if}
				{if $condlinks.domainreg || $condlinks.domaintrans}
				<li class="dropdown {if $filename eq "clientarea" and $smarty.get.action eq "domains"} active{/if}{if $filename eq "cart" and $smarty.get.gid eq "renewals"} active{/if}{if $filename eq "domainchecker"} active{/if}{if $filename eq "cart" and $smarty.get.domain eq "register"} active{/if}{if $filename eq "cart" and $smarty.get.domain eq "transfer"} active{/if}"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="nav-domains">{$LANG.navdomains}&nbsp;<b class="caret"></b></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="clientarea.php?action=domains">{$LANG.clientareanavdomains}</a></li>
					  <li><a href="cart.php?gid=renewals">{$LANG.navrenewdomains}</a></li>
					  {if $condlinks.domainreg}<li><a href="cart.php?a=add&domain=register">{$LANG.navregisterdomain}</a></li>{/if}
					  {if $condlinks.domaintrans}<li><a href="cart.php?a=add&domain=transfer">{$LANG.navtransferdomain}</a></li>{/if}
					  <li><a href="domainchecker.php">{$LANG.navwhoislookup}</a></li>
				  </ul>
				</li>
				{/if}
				
				  <li class="dropdown{if $filename eq "clientarea" and $smarty.get.action eq "invoices"} active{/if}{if $filename eq "clientarea" and $smarty.get.action eq "quotes"} active{/if}{if $filename eq "clientarea" and $smarty.get.action eq "addfunds"} active{/if}{if $filename eq "clientarea" and $smarty.get.action eq "masspay"} active{/if}{if $filename eq "clientarea" and $smarty.get.action eq "creditcard"} active{/if}"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="nav-billing">{$LANG.navbilling}&nbsp;<b class="caret"></b></span></a>
					<ul class="dropdown-menu">
					  <li><a href="clientarea.php?action=invoices">{$LANG.invoices}</a></li>
					  <li><a href="clientarea.php?action=quotes">{$LANG.quotestitle}</a></li>
					  {if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>{/if}
					  {if $condlinks.masspay}<li><a href="clientarea.php?action=masspay&all=true">{$LANG.masspaytitle}</a></li>{/if}
					  {if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>{/if}
					</ul>
				  </li>
				  
				  <li class="dropdown{if $filename eq "supporttickets"} active{/if}{if $filename eq "knowledgebase"} active{/if}{if $filename eq "downloads"} active{/if}{if $filename eq "serverstatus"} active{/if}"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="nav-support">{$LANG.navsupport}&nbsp;<b class="caret"></b></span></a>
					<ul class="dropdown-menu">
					  <li><a href="supporttickets.php">{$LANG.navtickets}</a></li>
					  <li><a href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
					  <li><a href="downloads.php">{$LANG.downloadstitle}</a></li>
					  <li><a href="serverstatus.php">{$LANG.networkstatustitle}</a></li>
					</ul>
				  </li>
				<li{if $filename eq "submitticket"} class="active"{/if}><a href="submitticket.php"><span class="nav-open-tickets">{$LANG.navopenticket}</span></a></li>
				<li{if $filename eq "affiliates"} class="active"{/if}><a href="affiliates.php"><span class="nav-affiliates">{$LANG.affiliatestitle}</span></a></li>

			</ul>

		</div><!--wrapper-->

	</nav><!--primary-nav-->

<!--	
<div id="whmcsheader">
  
  <div class="whmcscontainer">
  
  
    <a href="index.php" id="whmcsimglogo"></a>
        
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