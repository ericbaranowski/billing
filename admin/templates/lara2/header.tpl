<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="{$charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>WHMCS - {$pagetitle}</title>
	
    <link href="{$BASE_PATH_CSS}/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="templates/{$template}/dist/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/jquery.growl.css" rel="stylesheet" type="text/css">	
    <link href="templates/{$template}/style.css?larav={$lara_general_settings.version}" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/lightbox.css" rel="stylesheet" type="text/css">
	
	
	{if $sidebar eq "home"}
	<link href="templates/{$template}/dist/plugins/morris/morris.css?larav={$lara_general_settings.version}" rel="stylesheet" type="text/css" />
	{/if}
	
    <script type="text/javascript" src="{$BASE_PATH_JS}/jquery.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
	
	{if $sidebar eq "home"}
	<script src="templates/{$template}/dist/plugins/morris/raphael-min.js?larav={$lara_general_settings.version}" type="text/javascript"></script>
	<script src="templates/{$template}/dist/plugins/morris/morris.min.js?larav={$lara_general_settings.version}" type="text/javascript"></script>
	<script type="text/javascript" src="templates/{$template}/dist/plugins/customChartDraw.js?larav={$lara_general_settings.version}"></script>	
	{/if}	
	
	<link href="templates/{$template}/dist/plugins/bootstrap-switch/bootstrap-switch.min.css?larav={$lara_general_settings.version}" rel="stylesheet" type="text/css" />
	<script src="templates/{$template}/dist/plugins/bootstrap-switch/bootstrap-switch.min.js?larav={$lara_general_settings.version}" type="text/javascript"></script>	
	<script src="templates/{$template}/dist/plugins/slimscroll/jquery.slimscroll.min.js?larav={$lara_general_settings.version}" type="text/javascript"></script>	
	<script src="templates/{$template}/dist/plugins/daterangepicker/moment.min.js?larav={$lara_general_settings.version}"></script>
	
	<script type="text/javascript" src="templates/{$template}/dist/js/app.js?larav={$lara_general_settings.version}" ></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/textext.min.js"></script>
	<script type="text/javascript" src="{$BASE_PATH_JS}/jquery.growl.js"></script>
	
    <script type="text/javascript">
	
	    var globalSideBarLocation = "{$sidebar|default:none}";
	    
		$(function () {
			setNavigation();
		});

		function setNavigation() {
			var fullpath = $(location).attr("href");
			var path = fullpath.substr(fullpath.lastIndexOf('/') + 1);

			$(".sidebar-menu a").each(function () {
				var href = $(this).attr('href');
				if (decodeURI(path) === href) {
					if($(this).attr('id')){
						$(this).parents('li').addClass('active');
					}
				}
			});
		}	
	
        var datepickerformat = "{$datepickerformat}";
        {if $jquerycode}
            $(document).ready(function(){ldelim}
                {$jquerycode}
            {rdelim});
        {/if}
        {if $jscode}
            {$jscode}
        {/if}
    </script>

	{if {$sidebar eq "home"}}
		{assign var=widgetNames value=[]}
		{assign var=widgetPermissions value=[]}
		{foreach from=$widgets item=nWidget}
			{if $nWidget.name|strpos:"lrgawidget_perm_" === 0}
				{$widgetPermissions[] = $nWidget.name}
			{else}
				{$widgetNames[] = $nWidget.name}
			{/if}
		{/foreach}
		{assign var=globalWidgetNames value=$widgetNames scope="global" nocache}
		{assign var=globalWidgetPermissions value=$widgetPermissions scope="global" nocache}	
	{else}
		{assign var=globalWidgetNames value=[] scope="global" nocache}
		{assign var=globalWidgetPermissions value=[] scope="global" nocache}	
	{/if}

	{if {$sidebar eq "home"} && {"lrgawidget"|in_array:$globalWidgetNames} && {{${"lara_lrgawidget_state"}} ne "closed"}}
	<!-- start analytics block-->
	<!-- css files -->
	<link rel="stylesheet" href="templates/{$template}/dist/plugins/fuelux/fuelux.min.css?larav={$lara_general_settings.version}">
	<link rel="stylesheet" href="templates/{$template}/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.css?larav={$lara_general_settings.version}">
	<link rel="stylesheet" href="templates/{$template}/dist/plugins/datatables/dataTables.bootstrap.css?larav={$lara_general_settings.version}">
	<link rel="stylesheet" href="templates/{$template}/dist/plugins/flags/allflags.css?larav={$lara_general_settings.version}">
	<link rel="stylesheet" href="templates/{$template}/dist/plugins/daterangepicker/daterangepicker.css?larav={$lara_general_settings.version}">
	<link rel="stylesheet" href="templates/{$template}/dist/css/lrgawidget.css?larav={$lara_general_settings.version}">
	<!-- js files -->
	<script src="templates/{$template}/dist/plugins/fuelux/wizard.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/flot/jquery.flot.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/flot/jquery.flot.time.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/sparkline/sparkline.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/chartjs/Chart.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/datatables/jquery.dataTables.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/datatables/dataTables.bootstrap.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/plugins/daterangepicker/daterangepicker.min.js?larav={$lara_general_settings.version}"></script>
	<script src="templates/{$template}/dist/js/lrgawidget.js?larav={$lara_general_settings.version}"></script>
	<!-- stop analytics block-->
	{/if}
	
	<script src="templates/{$template}/dist/js/lrchat.js?larav={$lara_general_settings.version}"></script>
	
    <script type="text/javascript" src="templates/{$template}/head.js?larav={$lara_general_settings.version}"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/AdminAdvSearch.js"></script>

    {$headoutput}	
	
    <!-- Theme Style and Skins-->
    <link href="templates/{$template}/dist/css/AdminLTE.css?larav={$lara_general_settings.version}" rel="stylesheet" type="text/css" />
    <link href="templates/{$template}/dist/css/lara-skins.css?larav={$lara_general_settings.version}" rel="stylesheet" type="text/css" />
	
	
	<!-- Custom JavaScript and Style Sheets-->
	{if file_exists("templates/{$template}/custom/custom.css")}
	<link href="templates/{$template}/custom/custom.css" rel="stylesheet" type="text/css" />
	{/if}
	{if file_exists("templates/{$template}/custom/custom.js")}
	<script type="text/javascript" src="templates/{$template}/custom/custom.js" ></script>
	{/if}
    
  </head>
 
  <body class="{if $lara_current_skin} {$lara_current_skin} {else} skin-blue {/if} sidebar-mini {if $minsidebar} sidebar-collapse {/if}">
    
	<script type="text/javascript">
		if (typeof (Storage) !== "undefined") {	if (localStorage.getItem('controlsidebaropen') == 1){ $('body').addClass('control-sidebar-open');}}
	</script>
  
  {$headeroutput}
  
    <div class="wrapper">
	

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>WHM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>WHMCS</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">

		  <ul class="nav navbar-nav">
			
				<li class="dropdown messages-menu hidden-xs " id="tnsearchbox" >
				   <!-- the search button -->
				   <form class="navbar-form " role="search" id="navbarfrmintellisearch" class="dropdown-toggle" data-toggle="dropdown">
						<input type="hidden" name="intellisearch" value="1" />
						<input type="hidden" name="token" value="{$csrfToken}" />	  
						<div class="input-group" >
							<input type="text" name="value" class="form-control" id="navbar-search-input" placeholder="{$_ADMINLANG.global.intellisearch}...">
							<span class="input-group-btn" >
								<button type="submit" name="search" id="tnsearch-btn" class="btn btn-flat" style="margin-left: 0px;"><i id="tnsearch-icon" class="fa fa-search fa-fw"></i></button>
							</span>

						</div>
					</form>

					<ul class="dropdown-menu navbar-form-results">
						<li class="header">
								<span class="pull-left" id="tnsearchstats"></span>
								<span class="pull-right">
									<input type="checkbox" class="lara-bootstrap-switch" {if $lara_qstoggle == "true"} checked="true" {/if} name="qstoggle" data-label-text="Quick Search" data-size="mini" />
								</span>
						</li>
						<li>
							<ul class="menu sscroll" id="tnsearchresults"></ul>
						</li>
						<li class="footer"><a href="#" onclick="($('#tnsearchbox').removeClass('open'));">{$_ADMINLANG.global.close}</a></li>
					</ul>
				</li>

				{include file="$template/widgets/chat/chat_main_nav.tpl"}
				
				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-shopping-cart"></i>
					{if $sidebarstats.orders.pending > 0 } 
					<span class="label label-warning">{$sidebarstats.orders.pending}</span>
					{/if}
				  </a>
				  <ul class="dropdown-menu">
					<li class="header">{$_ADMINLANG.stats.pendingorders}</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="orders.php?status=Pending">
							<i class="fa fa-info-circle"></i> {$sidebarstats.orders.pending} {$_ADMINLANG.stats.pendingorders}
						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
				
				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa  fa-usd"></i>
					{if $sidebarstats.invoices.overdue > 0 }
					<span class="label label-warning">{$sidebarstats.invoices.overdue}</span>
					{/if}
				  </a>
				  <ul class="dropdown-menu">
					<li class="header">{$_ADMINLANG.stats.overdueinvoices}</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="invoices.php?status=Overdue">
							<i class="fa fa-info-circle"></i> {$sidebarstats.invoices.overdue} {$_ADMINLANG.stats.overdueinvoices}
						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>

				<li class="dropdown notifications-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-ticket "></i>
					{if $ticketsawaitingreply > 0 }
					<span class="label label-warning">{$ticketsawaitingreply}</span>
					{/if}
				  </a>
				  <ul class="dropdown-menu">
					<li class="header">{$_ADMINLANG.stats.ticketsawaitingreply}</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
						  <a href="supporttickets.php">
							<i class="fa fa-info-circle"></i> {$ticketsawaitingreply} {$_ADMINLANG.stats.ticketsawaitingreply}
						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
	    
			{if {$topBarNotification}}
				<li class="dropdown notifications-menu hidden-xs">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-exclamation-triangle"></i>
					<span class="label label-warning">*</span>
				  </a>
				  <ul class="dropdown-menu">
					<li class="header">Notifications</li>
					<li>
					  <!-- inner menu: contains the actual data -->
					  <ul class="menu">
						<li>
							{$topBarNotification}
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
			{/if}				

				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img class="user-image" src="//www.gravatar.com/avatar.php?gravatar_id={$lara_adminemail_md5}" style="background-color: #ffffff;"/>
					<span class="hidden-xs hidden-sm">{$admin_username}</span>
				  </a>
				  <ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
					  <img src="//www.gravatar.com/avatar.php?gravatar_id={$lara_adminemail_md5}" class="img-circle"  style="background-color: #ffffff;" />
					</li>
					<div class="box">
						<div class="box-body">
							<a href="index.php" class="btn btn-block btn-primary btn-social"><i class="fa fa-home "></i>{$_ADMINLANG.home.title}</a>
							<a href="../" class="btn btn-block btn-primary btn-social"><i class="fa fa-sign-in "></i>{$_ADMINLANG.global.clientarea}</a>
							<a href="#" data-toggle="modal" data-target="#myNotes" class="btn btn-block btn-primary btn-social"><i class="fa fa-files-o"></i>{$_ADMINLANG.global.mynotes}</a>
							<a href="myaccount.php" class="btn btn-block btn-primary btn-social"><i class="fa fa-wrench"></i>{$_ADMINLANG.global.myaccount}</a>
							<a id="logout" href="logout.php" class="btn btn-block btn-danger btn-social"><i class="fa fa-sign-out "></i>{$_ADMINLANG.global.logout}</a>
						</div>
					</div>
					<!-- Menu Body -->
					<!-- Menu Footer-->
				  </ul>
				</li>				

			    <!-- Control Sidebar Toggle Button -->
				  {if ($sidebar eq "support") && $inticket}{assign var=sidebaractiveicon value="fa-ticket" nocache}{assign var=ticketTabStatus value="active" scope="global" nocache}
				  {elseif ($sidebar eq "addonmodules") && ($addon_module_sidebar) }{assign var=sidebaractiveicon value="fa-puzzle-piece" nocache}{assign var=addonmodulesTabStatus value="active" scope="global" nocache}
				  {else}{assign var=sidebaractiveicon value="fa-cogs" nocache}{assign var=homeTabStatus value="active" scope="global" nocache}
				  {/if}	
				   <li>
					<a href="#" data-toggle="control-sidebar" ><i id="sidebar-menu-active-icon" class="fa {$sidebaractiveicon}"></i></a>
				  </li>
            </ul>
          </div>
        </nav>
      </header>
	  
    {include file="$template/menu.tpl"}

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		    
			{if $sidebar eq "home"}
				{if $viewincometotals}
					<div id="incometotals" class="hidden-xs pull-right">
						<a href="transactions.php">
							<img src="images/icons/transactions.png" align="absmiddle" border="0">
							<strong>{$_ADMINLANG.billing.income}</strong>
						</a>
						<img src="images/loading.gif" align="absmiddle" />
						{$_ADMINLANG.global.loading}
					</div>
				{/if}			
			{/if}
		    
		
            {if $helplink}
                <div class="contexthelp">
                    <a href="http://docs.whmcs.com/{$helplink}" target="_blank">
                        <img src="images/icons/help.png" border="0" align="absmiddle" />
                        {$_ADMINLANG.help.contextlink}
                    </a>
                </div>
            {/if}
			
	
          <h1>{$pagetitle}</h1>
        </section>

        <!-- Main content -->
        <section class="content">
		
		<div class="global-admin-warning{if !$globalAdminWarningMsg} hidden{/if}">
		     {$globalAdminWarningMsg}
		</div>		
		
		{if !{$lara_general_settings.version}}
			<div class="callout callout-danger">
				<h4>Alert !</h4>
				This "<b>Lara Theme Settings</b>" module is not active. 
				<br>The module is used to save user settings, and must be activated for the theme to work.
				{if in_array("Configure Addon Modules",$admin_perms)}
				<br>Please <b>activate</b> the module and make sure to permit access to all admin groups in <a href="configaddonmods.php">Addon Modules Configuration</a>.
				{else}
				<br>Please contact an administratior to <b>activate</b> the module and permit access to your admin group.
				{/if}
			</div>
		{/if}
