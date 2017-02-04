<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset={$charset}" />

<title>WHMCS - {$pagetitle}</title>



<link href="../includes/jscript/css/ui.all.css" rel="stylesheet" type="text/css" />
<link href="templates/admin/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../includes/jscript/jquery.js"></script>

<script type="text/javascript" src="../includes/jscript/jqueryui.js"></script>

<script type="text/javascript" src="../includes/jscript/selectboxit.js"></script>

<script type="text/javascript" src="../includes/jscript/textext.js"></script>


<script type="text/javascript">

var datepickerformat = "{$datepickerformat}";

{if $jquerycode}$(document).ready(function(){ldelim}

    {$jquerycode}

{rdelim});

{/if}

{if $jscode}{$jscode}

{/if}

</script>

<script type="text/javascript" src="templates/{$template}/head.js"></script>

<script type="text/javascript" src="../includes/jscript/adminsearchbox.js"></script>





{$headoutput}

</head>

<body>
{$headeroutput}

  <div id="headerWrapper" align="center">

      <div class="bodyContentWrapper" align="left">      

      

      <div id="mynotes"><textarea id="mynotesbox" rows="15" cols="80">{$admin_notes}</textarea><br /><input type="button" value="Save" id="savenotes" /></div>

      <div id="topnav">

        <div id="welcome"><a href="./" title="Home">Home</a><a href="../" title="Client Area">{$_ADMINLANG.global.clientarea}</a><a href="#" id="shownotes" title="My Notes">{$_ADMINLANG.global.mynotes}</a><a href="myaccount.php" title="My Account">{$_ADMINLANG.global.myaccount}</a><a href="logout.php" title="Logout">{$_ADMINLANG.global.logout}</a></div>

       

       <div class="right">

    

       <a href="supporttickets.php"><strong>{$sidebarstats.tickets.awaitingreply}</strong> {$_ADMINLANG.stats.ticketsawaitingreply}</a> <a href="orders.php?status=Pending"><strong>{$sidebarstats.orders.pending}</strong> {$_ADMINLANG.stats.pendingorders}</a><a href="invoices.php?status=Overdue"><strong>{$sidebarstats.invoices.overdue}{$opennetworkissues}</strong> {$_ADMINLANG.stats.overdueinvoices}</a>

       </div>

       

        

        <div class="clear"></div>

      </div>

      

      <div class="header">

      

	        <a href="./"><h1 class="logo"></h1></a>

	

	      

	      <div id="intellisearch">

	      	<div class="searchbg">
<!-- Admin 1.01 Theme Fix -->
          <form id="frmintellisearch">
          <input type="hidden" name="intellisearch" value="1" />
          <input type="hidden" name="token" value="{$csrfToken}" />
          <input type="text" id="intellisearchval" name="value" />
          <img src="images/icons/delete.png" alt="Cancel" width="16" height="16" class="absmiddle" id="intellisearchcancel" />
          <input type="submit" style="display:none;">
          </form>
<!-- Admin 1.01 Theme Fix -->              

	      	</div> 

	        <div align="left" id="searchresults"></div>

	      </div>



      </div>

    </div>

  </div>

  

      <div class="navigation">

      <div class="bodyContentWrapper">

	        <ul id="menu">

	            {include file="admin/menu.tpl"}

	        </ul>

      </div>

      </div>  

  

  <div id="content_container">

    <div id="left_side">



  {include file="admin/sidebar.tpl"}



    </div>

    <div id="content">

      {if $helplink}<div class="contexthelp"><a href="http://docs.whmcs.com/{$helplink}" target="_blank"><img src="images/icons/help.png" border="0" align="absmiddle" /> {$_ADMINLANG.help.contextlink}</a></div>{/if}

      <h1 style="display: none;">{$pagetitle}</h1>

      <div id="content_padded">

