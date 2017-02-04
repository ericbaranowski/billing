<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030a61316_58945401',
  'file_dependency' => 
  array (
    '43f265eb6bddd8a9f1629416e22cb93f50632f35' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/menu.tpl',
      1 => 1479234048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030a61316_58945401 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/billing/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?>
	  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel  -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="//www.gravatar.com/avatar.php?gravatar_id=<?php echo $_smarty_tpl->tpl_vars['lara_adminemail_md5']->value;?>
" class="img-circle" style="background-color: #ffffff;" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form  -->
          <form class="sidebar-form" id="frmintellisearch">
            <input type="hidden" name="intellisearch" value="1" />
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
            <div class="input-group">
              <input type="text" name="value" id="intellisearchval" class="form-control" placeholder="Menu Search ..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i id="isearch-icon" class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
	  
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
		    <span id="IntSearchResults" class="sidebar-menu"></span>

		    <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?><li class="treeview active" id="SideMenu-Home">
				<a href="#"><i class="fa fa-home"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<?php if (in_array("Add New Client",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="clientsadd.php"><i class="fa fa-user-plus"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li><?php }?>
					<?php if (in_array("Add New Order",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="ordersadd.php"><i class="fa fa-cart-plus"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Quotes",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="quotes.php?action=manage"><i class="fa fa-calculator"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li><?php }?>
					<?php if (in_array("To-Do List",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="todolist.php"><i class="fa fa-list-ol"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolistcreatenew'];?>
</a></li><?php }?>
					<?php if (in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="supporttickets.php?action=open"><i class="fa fa-ticket"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li><?php }?>
					<?php if (in_array("WHOIS Lookups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="whois.php"><i class="fa fa-globe"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
					<?php if (in_array("Generate Due Invoices",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="#" data-toggle="modal" data-target="#modalGenerateInvoices"><i class="fa  fa-usd"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['geninvoices'];?>
</a></li><?php }?>
					<?php if (in_array("Attempts CC Captures",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a href="#" data-toggle="modal" data-target="#modalCreditCardCapture"><i class="fa  fa-credit-card"></i> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['attemptcccaptures'];?>
</a></li><?php }?>
					<?php }?>
				</ul>
			</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "clients") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
			    <a id="Menu-Clients" href="#" ><i class="fa fa-users"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['title'];?>
</span> <i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    <?php if (in_array("Add New Client",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Add_New_Client" href="clientsadd.php"><i class="fa fa-user-plus"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li><?php }?>
					<?php if (in_array("List Clients",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-View_Search_Clients" href="clients.php"><i class="fa fa-search"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['viewsearch'];?>
</a></li><?php }?>
					<?php if (in_array("List Services",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li>
						<a id="Menu-Clients-Products_Services" href="#"><i class="fa fa-server"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
							    <li><a id="Menu-Clients-Products_Services-ALL" href="clientshostinglist.php"><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>
								<li><a id="Menu-Clients-Products_Services-Shared_Hosting" href="clientshostinglist.php?listtype=hostingaccount"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listhosting'];?>
</a></li>
								<li><a id="Menu-Clients-Products_Services-Reseller_Accounts" href="clientshostinglist.php?listtype=reselleraccount"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listreseller'];?>
</a></li>
								<li><a id="Menu-Clients-Products_Services-VPS_Servers" href="clientshostinglist.php?listtype=server"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listservers'];?>
</a></li>
								<li><a id="Menu-Clients-Products_Services-Other_Services" href="clientshostinglist.php?listtype=other"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listother'];?>
</a></li>
							</ul>
					</li>
					<?php }?>
					<?php if (in_array("List Addons",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Service_Addons" href="clientsaddonslist.php"><i class="fa  fa-puzzle-piece"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listaddons'];?>
</a></li><?php }?>
					<?php if (in_array("List Domains",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Domain_Registration" href="clientsdomainlist.php"><i class="fa fa-globe"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listdomains'];?>
</a></li><?php }?>
					<?php if (in_array("View Cancellation Requests",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Cancelation_Requests" href="cancelrequests.php"><i class="fa fa-ban"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['cancelrequests'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Affiliates",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Manage_Affiliates" href="affiliates.php"><i class="fa fa-users"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['manage'];?>
</a></li><?php }?>
					<?php if (in_array("Mass Mail",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Clients-Mass_Mail_Tool" href="massmail.php"><i class="fa fa-envelope"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['massmail'];?>
</a></li><?php }?>
				  </ul>
				</li>
			</li>

			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "orders") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
				<a id="Menu-Orders" href="#" ><i class="fa fa-shopping-cart"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['title'];?>
</span><?php if (in_array("View Orders",$_smarty_tpl->tpl_vars['admin_perms']->value) && $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending']) {?><span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</span><?php }?><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    <?php if (in_array("Add New Order",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Orders-Add_New_Order" href="ordersadd.php"><i class="fa   fa-cart-plus"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li><?php }?>
					<?php if (in_array("View Orders",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Orders-List_All_Orders" href="orders.php"><i class="fa  fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listall'];?>
</a></li>
					<li><a id="Menu-Orders-Pending_Orders" href="orders.php?status=Pending"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-pause"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listpending'];
if ($_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending']) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</span><?php }?></a></li>
					<li><a id="Menu-Orders-Active_Orders" href="orders.php?status=Active"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check-circle"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listactive'];?>
</a></li>
					<li><a id="Menu-Orders-Fraud_Orders" href="orders.php?status=Fraud"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-user-secret"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listfraud'];?>
</a></li>
					<li><a id="Menu-Orders-Cancelled_Orders" href="orders.php?status=Cancelled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-ban"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listcancelled'];?>
</a></li>
					<?php }?>
				  </ul>
				</li>
			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "billing") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
				<a id="Menu-Billing" href="#"><i class="fa fa-usd"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['title'];?>
</span><?php if (in_array("List Invoices",$_smarty_tpl->tpl_vars['admin_perms']->value) && $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue']) {?><span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span><?php }?><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<?php if (in_array("List Transactions",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Transactions_List" href="transactions.php"><i class="fa fa-list"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['transactionslist'];?>
</a></li><?php }?>
					<?php if (in_array("List Invoices",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Billing-Invoices" href="#"><i class="fa fa-file-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['overdue'];
if ($_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue']) {?><span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span><?php }?><i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Billing-Invoices-ALL" href="invoices.php"><i class="fa fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>
						<li><a id="Menu-Billing-Invoices-Paid" href="invoices.php?status=Paid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check-circle"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paid'];?>
</a></li>
						<li><a id="Menu-Billing-Invoices-Draft" href="invoices.php?status=Draft"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-file-text-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['draft'];?>
</a></li>
						<li><a id="Menu-Billing-Invoices-Unpaid" href="invoices.php?status=Unpaid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-times-circle"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['unpaid'];
if ($_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['unpaid']) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['unpaid'];?>
</span><?php }?></a></li>
						<li><a id="Menu-Billing-Invoices-Overdue" href="invoices.php?status=Overdue"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['overdue'];
if ($_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue']) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span><?php }?></a></li>
						<li><a id="Menu-Billing-Invoices-Cancelled" href="invoices.php?status=Cancelled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-ban "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</a></li>
						<li><a id="Menu-Billing-Invoices-Refunded" href="invoices.php?status=Refunded"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-arrow-circle-left "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['refunded'];?>
</a></li>
						<li><a id="Menu-Billing-Invoices-Collections" href="invoices.php?status=Collections"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-book"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['collections'];?>
</a></li>
						</ul>
					</li><?php }?>
					<?php if (in_array("View Billable Items",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Billable_Items" href="#"><i class="fa fa-files-o "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['title'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Manage Billable Items",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Billable_Items-Add_New" href="billableitems.php?action=manage"><i class="fa fa-plus-square "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['addnew'];?>
</a></li><?php }?>
						<li><a id="Menu-Billing-Billable_Items-ALL" href="billableitems.php"><i class="fa  fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>						
						<li><a id="Menu-Billing-Billable_Items-Uninvoiced_Items" href="billableitems.php?status=Uninvoiced"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-exclamation-circle"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['uninvoiced'];?>
</a></li>
						<li><a id="Menu-Billing-Billable_Items-Recurring_Items" href="billableitems.php?status=Recurring"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-refresh"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['recurring'];?>
</a></li>
						</ul>
					</li><?php }?>
					<?php if (in_array("Manage Quotes",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Quotes" href="#"><i class="fa  fa-file-text-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['title'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Billing-Quotes-Create_New_Quote" href="quotes.php?action=manage"><i class="fa fa-plus-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
						<li><a id="Menu-Billing-Quotes-ALL" href="quotes.php"><i class="fa fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>
						<li><a id="Menu-Billing-Quotes-Valid" href="quotes.php?validity=Valid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['valid'];?>
</a></li>
						<li><a id="Menu-Billing-Quotes-Expired" href="quotes.php?validity=Expired"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-times"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['expired'];?>
</a></li>
						
						</ul>
					</li><?php }?>
					<?php if (in_array("Offline Credit Card Processing",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Offline_CC_Processing" href="offlineccprocessing.php"><i class="fa fa-credit-card"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['offlinecc'];?>
</a></li><?php }?>
					<?php if (in_array("View Gateway Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Gateway_Log" href="gatewaylog.php"><i class="fa  fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['gatewaylog'];?>
</a></li><?php }?>
				  </ul>
				</li>
				
			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "support") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>	
				<a id="Menu-Support" href="#"><i class="fa  fa-phone-square"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span> <?php if (in_array("List Support Tickets",$_smarty_tpl->tpl_vars['admin_perms']->value) && $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value) {?><span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
</span><?php }?><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<?php if (in_array("List Support Tickets",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Support_Tickets" href="#"><i class="fa  fa-ticket"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['supporttickets'];
if ($_smarty_tpl->tpl_vars['ticketsawaitingreply']->value) {?><span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
</span><?php }?><i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Open_New_Ticket" href="supporttickets.php?action=open"><i class="fa  fa-plus-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li><?php }?>
						<?php if (in_array("List Support Tickets",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
						<li><a id="Menu-Support-Support_Tickets-ALL" href="supporttickets.php"><i class="fa  fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>
						<li><a id="Menu-Support-Support_Tickets-Awaiting_Reply" href="supporttickets.php"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-list"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['awaitingreply'];
if ($_smarty_tpl->tpl_vars['ticketsawaitingreply']->value) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
</span><?php }?></a></li>
						<li><a id="Menu-Support-Support_Tickets-Flagged_Tickets" href="supporttickets.php?view=flagged"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa   fa-flag"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['flagged'];
if ($_smarty_tpl->tpl_vars['ticketsflagged']->value) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-yellow pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketsflagged']->value;?>
</span><?php }?></a></li>
						<li><a id="Menu-Support-Support_Tickets-All_Active_Tickets" href="supporttickets.php?view=active"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-list"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['allactive'];
if ($_smarty_tpl->tpl_vars['ticketsallactive']->value) {?><span style="padding:0.2em 0.6em 0.3em; " class="label bg-orange pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketsallactive']->value;?>
</span><?php }?></a></li>
						<?php if (isset($_smarty_tpl->tpl_vars["sticketfabgcolor"])) {$_smarty_tpl->tpl_vars["sticketfabgcolor"] = clone $_smarty_tpl->tpl_vars["sticketfabgcolor"];
$_smarty_tpl->tpl_vars["sticketfabgcolor"]->value = "label-primary"; $_smarty_tpl->tpl_vars["sticketfabgcolor"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfabgcolor"] = new Smarty_Variable("label-primary", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfabgcolor", 0);?>
						<?php
$_from = $_smarty_tpl->tpl_vars['menuticketstatuses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_status_0_saved_item = isset($_smarty_tpl->tpl_vars['status']) ? $_smarty_tpl->tpl_vars['status'] : false;
$__foreach_status_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['status'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['status']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
$__foreach_status_0_saved_local_item = $_smarty_tpl->tpl_vars['status'];
?>
							<?php if ($_smarty_tpl->tpl_vars['status']->value == 'Open') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-comments-o"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-comments-o", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'Answered') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-reply"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-reply", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'Customer-Reply') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-reply-all"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-reply-all", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'On Hold') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-pause"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-pause", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'In Progress') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-spinner"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-spinner", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'Closed') {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-check-square"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-check-square", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);
if (isset($_smarty_tpl->tpl_vars["sticketfabgcolor"])) {$_smarty_tpl->tpl_vars["sticketfabgcolor"] = clone $_smarty_tpl->tpl_vars["sticketfabgcolor"];
$_smarty_tpl->tpl_vars["sticketfabgcolor"]->value = "bg-green"; $_smarty_tpl->tpl_vars["sticketfabgcolor"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfabgcolor"] = new Smarty_Variable("bg-green", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfabgcolor", 0);?>
							<?php } else {
if (isset($_smarty_tpl->tpl_vars["sticketfaicon"])) {$_smarty_tpl->tpl_vars["sticketfaicon"] = clone $_smarty_tpl->tpl_vars["sticketfaicon"];
$_smarty_tpl->tpl_vars["sticketfaicon"]->value = "fa-circle-o"; $_smarty_tpl->tpl_vars["sticketfaicon"]->nocache = true;
} else $_smarty_tpl->tpl_vars["sticketfaicon"] = new Smarty_Variable("fa-circle-o", true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "sticketfaicon", 0);?>
							<?php }?>						    
							<li><a id="Menu-Support-Support_Tickets-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value,' ','_');?>
" href="supporttickets.php?view=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa <?php echo $_smarty_tpl->tpl_vars['sticketfaicon']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['status']->value;
if ($_smarty_tpl->tpl_vars['ticketcounts']->value[$_smarty_tpl->tpl_vars['i']->value]['count']) {?><span style="padding:0.2em 0.6em 0.3em;" class="label <?php echo $_smarty_tpl->tpl_vars['sticketfabgcolor']->value;?>
 pull-right"><?php echo $_smarty_tpl->tpl_vars['ticketcounts']->value[$_smarty_tpl->tpl_vars['i']->value]['count'];?>
</span><?php }?></a></li>
						<?php
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_0_saved_local_item;
}
if ($__foreach_status_0_saved_item) {
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_0_saved_item;
}
if ($__foreach_status_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_status_0_saved_key;
}
?>
						<?php }?>	
						</ul>
					</li><?php }?>
					<?php if (in_array("Manage Network Issues",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Network_Issues" href="#"><i class="fa  fa-sitemap "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['title'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Support-Network_Issues-Create_New" href="networkissues.php?action=manage"><i class="fa  fa-plus-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['addnew'];?>
</a></li>
						<li><a id="Menu-Support-Network_Issues-ALL" href="networkissues.php"><i class="fa  fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>	
						<li><a id="Menu-Support-Network_Issues-Open" href="networkissues.php"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-comments-o  "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['open'];?>
</a></li>
						<li><a id="Menu-Support-Network_Issues-Scheduled" href="networkissues.php?view=scheduled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['scheduled'];?>
</a></li>
						<li><a id="Menu-Support-Network_Issues-Resolved" href="networkissues.php?view=resolved"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-check-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['resolved'];?>
</a></li>
						</ul>
					</li><?php }?>
					<?php if (in_array("Support Center Overview",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Support_Overview" href="supportcenter.php"><i class="fa  fa-bar-chart"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['supportoverview'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Announcements",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Announcements" href="supportannouncements.php"><i class="fa  fa-bullhorn"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['announcements'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Downloads",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Downloads" href="supportdownloads.php"><i class="fa  fa-download "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['downloads'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Knowledgebase",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Knowledgebase" href="supportkb.php"><i class="fa  fa-lightbulb-o "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['knowledgebase'];?>
</a></li><?php }?>
					<?php if (in_array("Manage Predefined Replies",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Support-Predefined_Replies" href="supportticketpredefinedreplies.php"><i class="fa  fa-reply-all "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['predefreplies'];?>
</a></li><?php }?>
				  </ul>
				</li>				

				<?php if (in_array("View Reports",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "reports") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
				<a id="Menu-Reports" href="#"><i class="fa fa-file-text "></i> <span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['reports']['title'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    <li><a id="Menu-Reports-ALL" href="reports.php"><i class="fa  fa-list-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
</a></li>
					<li><a id="Menu-Reports-ALL-General" href="#"><i class="fa  fa-file-text"></i>General<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-Daily_Performance" href="reports.php?report=daily_performance"><i class="fa  fa-file-text"></i>Daily Performance</a></li>
								<li><a id="Menu-Reports-Disk_Usage_Summary" href="reports.php?report=disk_usage_summary"><i class="fa  fa-file-text"></i>Disk Usage Summary</a></li>
								<li><a id="Menu-Reports-Monthly_Orders" href="reports.php?report=monthly_orders"><i class="fa  fa-file-text"></i>Monthly Orders</a></li>
								<li><a id="Menu-Reports-Product_Suspensions" href="reports.php?report=product_suspensions"><i class="fa  fa-file-text"></i>Product Suspensions</a></li>
								<li><a id="Menu-Reports-Promotions_Usage" href="reports.php?report=promotions_usage"><i class="fa  fa-file-text"></i>Promotions Usage</a></li>
							</ul>
					</li>
					<li><a id="Menu-Reports-ALL-Billing" href="#"><i class="fa  fa-usd"></i>Billing<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-Aging_Invoices" href="reports.php?report=aging_invoices"><i class="fa  fa-file-text"></i>Aging Invoices</a></li>
								<li><a id="Menu-Reports-Credits_Reviewer" href="reports.php?report=credits_reviewer"><i class="fa  fa-file-text"></i>Credits Reviewer</a></li>
								<li><a id="Menu-Reports-Direct_Debit_Processing" href="reports.php?report=direct_debit_processing"><i class="fa  fa-file-text"></i>Direct Debit Processing</a></li>
								<li><a id="Menu-Reports-Sales_Tax_Liability" href="reports.php?report=sales_tax_liability"><i class="fa  fa-file-text"></i>Sales Tax Liability</a></li>
								<li><a id="Menu-Reports-Vat_Moss" href="reports.php?report=vat_moss"><i class="fa  fa-file-text"></i>Vat Moss</a></li>
							</ul>
					</li>					
					<li><a id="Menu-Reports-ALL-Income" href="#"><i class="fa   fa-line-chart "></i>Income<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-Annual_Income_Report" href="reports.php?report=annual_income_report"><i class="fa  fa-file-text"></i>Annual Income Report</a></li>
								<li><a id="Menu-Reports-Income_Forecast" href="reports.php?report=income_forecast"><i class="fa  fa-file-text"></i>Income Forecast</a></li>
								<li><a id="Menu-Reports-Income_By_Product" href="reports.php?report=income_by_product"><i class="fa  fa-file-text"></i>Income by Product</a></li>
								<li><a id="Menu-Reports-Monthly_Transactions" href="reports.php?report=monthly_transactions"><i class="fa  fa-file-text"></i>Monthly Transactions</a></li>
								<li><a id="Menu-Reports-Server_Revenue_Forecasts" href="reports.php?report=server_revenue_forecasts"><i class="fa  fa-file-text"></i>Server Revenue Forecasts</a></li>							
							</ul>
					</li>
					<li><a id="Menu-Reports-ALL-Clients" href="#"><i class="fa  fa-users "></i>Clients<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-New_Customers" href="reports.php?report=new_customers"><i class="fa  fa-file-text"></i>New Customers</a></li>
								<li><a id="Menu-Reports-Client_Sources" href="reports.php?report=client_sources"><i class="fa  fa-file-text"></i>Client Sources</a></li>
								<li><a id="Menu-Reports-Client_Statement" href="reports.php?report=client_statement"><i class="fa  fa-file-text"></i>Client Statement</a></li>
								<li><a id="Menu-Reports-Clients_By_Country" href="reports.php?report=clients_by_country"><i class="fa  fa-file-text"></i>Clients by Country</a></li>
								<li><a id="Menu-Reports-Top_10_Clients_By_Income" href="reports.php?report=top_10_clients_by_income"><i class="fa  fa-file-text"></i>Top 10 Clients by Income</a></li>								
								<li><a id="Menu-Reports-Affiliates_Overview" href="reports.php?report=affiliates_overview"><i class="fa  fa-file-text"></i>Affiliates Overview</a></li>
								<li><a id="Menu-Reports-Domain_Renewal_Emails" href="reports.php?report=domain_renewal_emails"><i class="fa  fa-file-text"></i>Domain Renewal Emails</a></li>
								<li><a id="Menu-Reports-Customer_Retention_Time" href="reports.php?report=customer_retention_time"><i class="fa  fa-file-text"></i>Customer Retention Time</a></li>
							</ul>
					</li>
					<li><a id="Menu-Reports-ALL-Support" href="#"><i class="fa  fa-phone-square "></i>Support<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-Support_Ticket_Replies" href="reports.php?report=support_ticket_replies"><i class="fa  fa-file-text"></i>Support Ticket Replies</a></li>
								<li><a id="Menu-Reports-Ticket_Feedback_Scores" href="reports.php?report=ticket_feedback_scores"><i class="fa  fa-file-text"></i>Ticket Feedback Scores</a></li>
								<li><a id="Menu-Reports-Ticket_Feedback_Comments" href="reports.php?report=ticket_feedback_comments"><i class="fa  fa-file-text"></i>Ticket Feedback Comments</a></li>								
								<li><a id="Menu-Reports-Ticket_Ratings_Reviewer" href="reports.php?report=ticket_ratings_reviewer"><i class="fa  fa-file-text"></i>Ticket Ratings Reviewer</a></li>
								<li><a id="Menu-Reports-Ticket_Tags" href="reports.php?report=ticket_tags"><i class="fa  fa-file-text"></i>Ticket Tags</a></li>
							</ul>
					</li>
					<li><a id="Menu-Reports-ALL-Exports" href="#"><i class="fa  fa-download"></i>Exports<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a id="Menu-Reports-Clients" href="reports.php?report=clients"><i class="fa  fa-file-text"></i>Clients</a></li>
								<li><a id="Menu-Reports-Domains" href="reports.php?report=domains"><i class="fa  fa-file-text"></i>Domains</a></li>
								<li><a id="Menu-Reports-Invoices" href="reports.php?report=invoices"><i class="fa  fa-file-text"></i>Invoices</a></li>								
								<li><a id="Menu-Reports-Services" href="reports.php?report=services"><i class="fa  fa-file-text"></i>Services</a></li>
								<li><a id="Menu-Reports-Transactions" href="reports.php?report=transactions"><i class="fa  fa-file-text"></i>Transactions</a></li>
								<li><a id="Menu-Reports-Pdf_Batch" href="reports.php?report=pdf_batch"><i class="fa  fa-file-text"></i>Pdf Batch</a></li>
							</ul>
					</li>						
				  </ul>
				</li>
			    <?php }?>				

				<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "utilities") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
				<a id="Menu-Utilities" href="#"><i class="fa fa-th-large"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['title'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    <?php if (in_array("Update WHMCS",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Update" href="update.php"><i class="fa fa-refresh"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['update']['title'];?>
</a></li><?php }?>
					<?php if (in_array("WHMCSConnect",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-WHMCS_Connect" href="whmcsconnect.php"><i class="fa fa-external-link-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['whmcsConnect']['whmcsConnectName'];?>
</a></li><?php }?>
					<?php if (in_array("Email Marketer",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Email_Marketer" href="utilitiesemailmarketer.php"><i class="fa  fa-envelope"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emailmarketer'];?>
</a></li><?php }?>
					<?php if (in_array("Link Tracking",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Link_Tracking" href="utilitieslinktracking.php"><i class="fa fa-link"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['linktracking'];?>
</a></li><?php }?>
					<?php if (in_array("Calendar",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Calendar" href="calendar.php"><i class="fa fa-calendar"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['calendar'];?>
</a></li><?php }?>
					<?php if (in_array("To-Do List",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-To-Do_List" href="todolist.php"><i class="fa fa-list-ol"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolist'];?>
</a></li><?php }?>
					<?php if (in_array("WHOIS Lookups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-WHOIS_Lookups" href="whois.php"><i class="fa fa-globe"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li><?php }?>
					<?php if (in_array("Domain Resolver Checker",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Domain_Resolver" href="utilitiesresolvercheck.php"><i class="fa fa-chain-broken "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['domainresolver'];?>
</a></li><?php }?>
					<?php if (in_array("View Integration Code",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Integration_Code" href="systemintegrationcode.php"><i class="fa  fa-code"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['integrationcode'];?>
</a></li><?php }?>
					<?php if (in_array("WHM Import Script",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-cPanel_WHM_Import" href="whmimport.php"><i class="fa fa-cloud-download"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['cpanelimport'];?>
</a></li><?php }?>
					<?php if (in_array("Database Status",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("System Cleanup Operations",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View PHP Info",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System" href="#"><i class="fa fa-cog "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['system'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Database Status",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-Database_Status" href="systemdatabase.php"><i class="fa fa-database"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['dbstatus'];?>
</a></li><?php }?>
						<?php if (in_array("System Cleanup Operations",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-System_Cleanup" href="systemcleanup.php"><i class="fa fa-magic"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['syscleanup'];?>
</a></li><?php }?>
						<?php if (in_array("View PHP Info",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-PHP_Info" href="systemphpinfo.php"><i class="fa fa-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['phpinfo'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
					<?php if (in_array("View Activity Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Admin Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Module Debug Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Email Message Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Ticket Mail Import Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View WHOIS Lookup Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs" href="#"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['logs'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("View Activity Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-Activity_Log" href="systemactivitylog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['activitylog'];?>
</a></li><?php }?>
						<?php if (in_array("View Admin Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-Admin_Log" href="systemadminlog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['adminlog'];?>
</a></li><?php }?>
						<?php if (in_array("View Module Debug Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-Module_Log" href="systemmodulelog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['modulelog'];?>
</a></li><?php }?>
						<?php if (in_array("View Email Message Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-Email_Message_Log" href="systememaillog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emaillog'];?>
</a></li><?php }?>
						<?php if (in_array("View Ticket Mail Import Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-Ticket_Email_Import_Log" href="systemmailimportlog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['ticketmaillog'];?>
</a></li><?php }?>
						<?php if (in_array("View WHOIS Lookup Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-Logs-WHOIS_Lookup_Log" href="systemwhoislog.php"><i class="fa fa-file-text"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whoislog'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
				  </ul>
				</li>				

				<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "addonmodules") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?>
				<a id="Menu-Addons" href="#"><i class="fa fa-puzzle-piece"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['addonmodules'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<?php
$_from = $_smarty_tpl->tpl_vars['addon_modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_displayname_1_saved_item = isset($_smarty_tpl->tpl_vars['displayname']) ? $_smarty_tpl->tpl_vars['displayname'] : false;
$__foreach_displayname_1_saved_key = isset($_smarty_tpl->tpl_vars['module']) ? $_smarty_tpl->tpl_vars['module'] : false;
$_smarty_tpl->tpl_vars['displayname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['module'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['displayname']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['displayname']->value) {
$_smarty_tpl->tpl_vars['displayname']->_loop = true;
$__foreach_displayname_1_saved_local_item = $_smarty_tpl->tpl_vars['displayname'];
?>
					<li><a id="Menu-Addons-<?php echo $_smarty_tpl->tpl_vars['displayname']->value;?>
" href="addonmodules.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"><i class="fa fa-puzzle-piece"></i><?php echo $_smarty_tpl->tpl_vars['displayname']->value;?>
</a></li>
					<?php
$_smarty_tpl->tpl_vars['displayname'] = $__foreach_displayname_1_saved_local_item;
}
if ($__foreach_displayname_1_saved_item) {
$_smarty_tpl->tpl_vars['displayname'] = $__foreach_displayname_1_saved_item;
}
if ($__foreach_displayname_1_saved_key) {
$_smarty_tpl->tpl_vars['module'] = $__foreach_displayname_1_saved_key;
}
?>
					<li><a id="Menu-Addons-Marketplace-Link" class="autoLinked" href="https://marketplace.whmcs.com"><i class="fa fa-shopping-bag "></i>Visit WHMCS Marketplace</a></li>
				  </ul>
				</li>
				
                <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "config") {?><li class="treeview active"><?php } else { ?><li class="treeview"><?php }?> 
				<a id="Menu-Setup" href="#"><i class="fa fa-wrench"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['title'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<?php if (in_array("Configure General Settings",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-General_Settings" href="configgeneral.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['general'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Automation Settings",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Automation_Settings" href="configauto.php"><i class="fa fa-cogs "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['automation'];?>
</a></li><?php }?>
				<?php if (in_array("Configure Administrators",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Admin Roles",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Two-Factor Authentication",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Setup-Staff_Management" href="#"><i class="fa fa-user "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['staff'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Configure Administrators",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Staff_Management-Administrator_Users" href="configadmins.php"><i class="fa fa-users "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['admins'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Admin Roles",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Staff_Management-Administrator_Roles" href="configadminroles.php"><i class="fa fa-lock "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['adminroles'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Two-Factor Authentication",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Staff_Management-Two-Factor_Authentication" href="configtwofa.php"><i class="fa fa-random"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['twofa'];?>
</a></li><?php }?>
						</ul>
					</li><?php } else { ?>
					<li><a id="Menu-Setup-Staff_Management-My_Account" href="myaccount.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a></li><?php }?>
				<?php if (in_array("Configure Currencies",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Payment Gateways",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Tax Setup",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Promotions",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Setup-Payments" href="#"><i class="fa fa-usd"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['payments'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Configure Currencies",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Payments-Currencies" href="configcurrencies.php"><i class="fa fa-eur "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['currencies'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Payment Gateways",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Payments-Payment_Gateways" href="configgateways.php"><i class="fa fa-paypal "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['gateways'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Tax Setup",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Payments-Tax_Rules" href="configtax.php"><i class="fa fa-university "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['tax'];?>
</a></li><?php }?>
						<?php if (in_array("View Promotions",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Payments-Promotions" href="configpromotions.php"><i class="fa fa-tag"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['promos'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
				<?php if (in_array("View Products/Services",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Product Addons",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Product Bundles",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Domain Pricing",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Domain Registrars",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Servers",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Setup-Products_Services" href="#"><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("View Products/Services",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Products_Services" href="configproducts.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
</a></li><?php }?>
						<?php if (in_array("View Products/Services",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Configurable_Options" href="configproductoptions.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['configoptions'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Product Addons",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Product_Addons" href="configaddons.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addons'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Product Bundles",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Product_Bundles" href="configbundles.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bundles'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Domain Pricing",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Domain_Pricing" href="configdomains.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['domainpricing'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Domain Registrars",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Domain_Registrars" href="configregistrars.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['registrars'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Servers",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Products_Services-Servers" href="configservers.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['servers'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
				<?php if (in_array("Configure Support Departments",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Ticket Statuses",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Support Departments",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Spam Control",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Setup-Support" href="#"><i class="fa fa-phone-square"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Configure Support Departments",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Support-Support_Departments" href="configticketdepartments.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['supportdepartments'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Ticket Statuses",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Support-Ticket_Statuses" href="configticketstatuses.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['ticketstatuses'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Support Departments",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Support-Escalation_Rules" href="configticketescalations.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['escalationrules'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Spam Control",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Support-Spam_Control" href="configticketspamcontrol.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['spam'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
					<?php if (in_array("Configure Application Links",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Application_Links" href="configapplinks.php"><i class="fa fa-share-alt"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['applicationLinks'];?>
</a></li><?php }?>
					<?php if (in_array("Configure OpenID Connect",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-OpenID_Connect" href="configopenid.php"><i class="fa fa-openid"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['openIdConnect'];?>
</a></li><?php }?>
					<?php if (in_array("View Email Templates",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Email_Templates" href="configemailtemplates.php"><i class="fa fa-envelope"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['emailtpls'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Addon Modules",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Addons_Modules" href="configaddonmods.php"><i class="fa fa-puzzle-piece"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addonmodules'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Client Groups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Client_Groups" href="configclientgroups.php"><i class="fa fa-users"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['clientgroups'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Custom Client Fields",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Custom_Client_Fields" href="configcustomfields.php"><i class="fa fa-th-list"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['customclientfields'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Fraud Protection",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Fraud_Protection" href="configfraud.php"><i class="fa fa-user-secret "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['fraud'];?>
</a></li><?php }?>
				<?php if (in_array("Configure Order Statuses",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Security Questions",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Banned IPs",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Banned Emails",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Configure Database Backups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
					<li><a id="Menu-Setup-Other" href="#"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['other'];?>
<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<?php if (in_array("Configure Order Statuses",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Other-Order_Statuses" href="configorderstatuses.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['orderstatuses'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Security Questions",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Other-Security_Questions" href="configsecurityqs.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['securityqs'];?>
</a></li><?php }?>
						<?php if (in_array("View Banned IPs",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Other-Banned_IPs" href="configbannedips.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedips'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Banned Emails",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Other-Banned_Emails" href="configbannedemails.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedemails'];?>
</a></li><?php }?>
						<?php if (in_array("Configure Database Backups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Setup-Other-Database_Backups" href="configbackups.php"><i class="fa fa-wrench"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['backups'];?>
</a></li><?php }?>
						</ul>
					</li><?php }?>
				  </ul>
				</li>
				
				<li><a id="Menu-Help" href="#"><i class="fa fa-question-circle"></i><span><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['title'];?>
</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<li><a id="Menu-Help-Documentation" href="http://docs.whmcs.com/" target="_blank"><i class="fa fa-book "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['docs'];?>
</a></li>
					<?php if (in_array("Main Homepage",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Help-License_Information" href="systemlicense.php"><i class="fa fa-key"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['licenseinfo'];?>
</a></li><?php }?>
					<?php if (in_array("Configure Administrators",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Help-Change_License_Key" href="licenseerror.php?licenseerror=change"><i class="fa fa-exchange"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['changelicense'];?>
</a></li><?php }?>
					<?php if (in_array("Health and Updates",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Help-Check_Health_Updates" href="systemhealthandupdates.php"><i class="fa fa-medkit"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['healthCheck']['menuTitle'];?>
</a></li><?php }?>
					<?php if (in_array("Configure General Settings",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
						<li><a id="Menu-Help-Setup_Wizard" href="#" onclick="openSetupWizard();return false;"><i class="fa fa-magic"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['setupWizard'];?>
</a></li>
						<li><a id="Menu-Help-Get_Help" href="systemsupportrequest.php"><i class="fa fa-life-ring"></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['support'];?>
</a></li>
					<?php }?>
					<li><a id="Menu-Help-Community_Forums" href="http://forum.whmcs.com/" target="_blank"><i class="fa fa-comments "></i><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['forums'];?>
</a></li>
				  </ul>
				</li>				
			
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
	  <?php }
}
