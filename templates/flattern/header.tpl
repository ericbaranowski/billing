<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<head>
  <meta charset="UTF-8">
  <title>{$companyname} - {$pagetitle}{if $kbarticle.title} - {$kbarticle.title}{/if}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {if $systemurl}<base href="{$systemurl}" />{/if}
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="includes/jscript/jquery.js"></script>
  {if $livehelpjs}{$livehelpjs}{/if}
  <link rel='stylesheet' href='templates/{$template}/css/animate.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='flattern-css'  href='templates/{$template}/css/whmcs.css' type='text/css' media='all' />
  {$headoutput}
</head>
<body>
  {$headeroutput}
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{if $loggedin}clientarea{else}index{/if}.php"><span class="glyphicon glyphicon-stop" style="color:#e26148; font-size:14px;"></span> Flattern</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navservices} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="clientarea.php?action=products">{$LANG.clientareanavservices}</a></li>
              {if $condlinks.pmaddon}<li><a href="index.php?m=project_management">{$LANG.clientareaprojects}</a></li>{/if}
              <li class="divider"></li>
              <li><a href="cart.php?gid=3&systpl=flattern&carttpl=flatternslider">{$LANG.navservicesorder}</a></li>
            </ul>
          </li>
        </ul>
        {if $condlinks.domainreg || $condlinks.domaintrans}<ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navdomains}&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="clientarea.php?action=domains">{$LANG.clientareanavdomains}</a></li>
            <li class="divider"></li>
            <li><a href="cart.php?gid=renewals&carttpl=flatterncart">{$LANG.navrenewdomains}</a></li>
            {if $condlinks.domainreg}<li><a href="cart.php?a=add&domain=register&carttpl=flatterncart">{$LANG.navregisterdomain}</a></li>{/if}
            {if $condlinks.domaintrans}<li><a href="cart.php?a=add&domain=transfer&carttpl=flatterncart">{$LANG.navtransferdomain}</a></li>{/if}
            {if $enomnewtldsenabled}<li><a href="index.php?m=enomnewtlds">Preregister New TLDs</a></li>{/if}
            <li class="divider"></li>
            <li><a href="domainchecker.php">{$LANG.navwhoislookup}</a></li>
          </ul>
        </li>
      </ul>{/if}
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navsupport}&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="supporttickets.php">{$LANG.navtickets}</a></li>
            <li><a href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
            <li><a href="downloads.php">{$LANG.downloadstitle}</a></li>
          </ul>
        </li>
      </ul> 
      {if $condlinks.affiliates}<ul class="nav navbar-nav">
      <li><a href="affiliates.php">{$LANG.affiliatestitle}</a></li>
    </ul>{/if}
    {if $livehelp}
    <ul class="nav navbar-nav">
      <li><a id="Menu-Live_Chat" href="#" class="LiveHelpButton">Live Chat - <span class="LiveHelpTextStatus">Offline</span></a></li>
    </ul>
    {/if}
    {if $loggedin}
    <ul class="nav navbar-nav pull-right">
      <li class="dropdown"><a class="dropdown-toggle dropdown-avatar" data-toggle="dropdown" href="#"><img src="https://www.gravatar.com/avatar/{php}$userid = $this->_tpl_vars['clientsdetails']['userid'];$result = mysql_query("SELECT email FROM tblclients WHERE id=$userid");$data = mysql_fetch_array($result);$email = $data["email"];echo md5( strtolower( trim( $email ) ) );{/php}?s=30&d=mm" class="menu-avatar" alt=""><small>Welcome,{$loggedinuser.firstname}!</small> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="clientarea.php?action=details">{$LANG.editaccountdetails}</a></li>
          {if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>{/if}
          {if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>{/if}
          <li><a href="clientarea.php?action=changepw">{$LANG.clientareanavchangepw}</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">{$LANG.logouttitle}</a></li>
        </ul>
      </li>
    </ul>

    <div class="navbar-header pull-right hidden-sm hidden-xs" role="navigation">
      <ul class="nav flattern-nav">
        <li>
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="glyphicon glyphicon-bell"></span>
            <span class="badge badge-important">
              {php}$result = mysql_query("SELECT * FROM tblnetworkissues WHERE status!='Resolved' AND status!='Scheduled'");
              echo mysql_num_rows($result);{/php}
            </span>
          </a>

          <ul class="pull-right dropdown-navbar navbar-status dropdown-menu dropdown-caret dropdown-close">
            <li class="dropdown-header">
              <span class="glyphicon glyphicon-exclamation-sign"></span>
              Service Status Updates
            </li>
            <li>
              <a href="serverstatus.php?view=open">
                <div class="clearfix">
                  <span class="pull-left">
                    <span class="glyphicon glyphicon-warning-sign" style="color:#d9534f;"></span>
                    {$LANG.networkissuesstatusopen}                
                  </span>
                  <span class="pull-right badge badge-important">               
                    {php}$result = mysql_query("SELECT * FROM tblnetworkissues WHERE status!='Resolved' AND status!='Scheduled'");
                    echo mysql_num_rows($result);{/php}
                  </span>
                </div>
              </a>
            </li>
            <li>
              <a href="serverstatus.php?view=scheduled">
                <div class="clearfix">
                  <span class="pull-left">
                    <span class="glyphicon glyphicon-time" style="color:#f0ad4e;"></span>
                    {$LANG.networkissuesstatusscheduled}
                  </span>
                  <span class="pull-right badge badge-warning">
                    {php}$result = mysql_query("SELECT * FROM tblnetworkissues WHERE status='Scheduled'");
                    echo mysql_num_rows($result);{/php}                                                                             
                  </span>
                </div>
              </a>
            </li>
            <li>
              <a href="serverstatus.php?view=resolved">
                <div class="clearfix">
                  <span class="pull-left">
                    <span class="glyphicon glyphicon-ok-circle" style="color:#5cb85c;"></span>
                    {$LANG.networkissuesstatusresolved}
                  </span>
                  <span class="pull-right badge badge-success">    
                    {php}$result = mysql_query("SELECT * FROM tblnetworkissues WHERE status='Resolved'");
                    echo mysql_num_rows($result);{/php}
                  </span>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul><!-- status nav -->
    </div>
    <div class="navbar-header pull-right hidden-sm hidden-xs" role="navigation">
      <ul class="nav flattern-nav">
        <li>
          <a href="clientarea.php?action=emails">
            <span class="glyphicon glyphicon-envelope"></span></a>
          </li>
        </ul><!-- mail nav -->
      </div>
      {if $showqsl} 
      {if $filename eq "clientarea" and $smarty.get.action eq ""}
         <div class="navbar-header pull-right hidden-xs" role="navigation">
      <ul class="nav flattern-nav">
        <li>
          <a data-toggle="modal" href="#qsl">
            <span class="glyphicon glyphicon-flash animated bounce"></span></a>
          </li>
        </ul><!-- mail nav -->
      </div>
      {/if} 
      {/if}
      <div class="navbar-header pull-right hidden-sm hidden-xs" role="navigation">
        <ul class="nav flattern-nav">
          <li>
            <a href="cart.php?a=view&carttpl=flatternslider">
              <span class="glyphicon glyphicon-shopping-cart"></span></a>
            </li>
          </ul><!-- cart nav -->
        </div>
        {else}  
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        <div class="navbar-header pull-right hidden-sm hidden-xs" role="navigation">
          <ul class="nav flattern-nav">
            <li>
              <a href="cart.php?a=view&carttpl=flatternslider">
                <span class="glyphicon glyphicon-shopping-cart"></span></a>
              </li>
            </ul><!-- cart nav -->
          </div>
          {/if}
        </div><!-- /.navbar-collapse -->
      </nav>
      <div class="row">		
        <div class="content col-lg-9">