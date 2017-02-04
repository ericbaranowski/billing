	  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel  -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="//www.gravatar.com/avatar.php?gravatar_id={$lara_adminemail_md5}" class="img-circle" style="background-color: #ffffff;" />
            </div>
            <div class="pull-left info">
              <p>{$admin_username}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form  -->
          <form class="sidebar-form" id="frmintellisearch">
            <input type="hidden" name="intellisearch" value="1" />
            <input type="hidden" name="token" value="{$csrfToken}" />
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

		    {if $sidebar eq "home"}<li class="treeview active" id="SideMenu-Home">
				<a href="#"><i class="fa fa-home"></i><span>{$_ADMINLANG.home.title}</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					{if in_array("Add New Client",$admin_perms)}<li><a href="clientsadd.php"><i class="fa fa-user-plus"></i>{$_ADMINLANG.clients.addnew}</a></li>{/if}
					{if in_array("Add New Order",$admin_perms)}<li><a href="ordersadd.php"><i class="fa fa-cart-plus"></i>{$_ADMINLANG.orders.addnew}</a></li>{/if}
					{if in_array("Manage Quotes",$admin_perms)}<li><a href="quotes.php?action=manage"><i class="fa fa-calculator"></i>{$_ADMINLANG.quotes.createnew}</a></li>{/if}
					{if in_array("To-Do List",$admin_perms)}<li><a href="todolist.php"><i class="fa fa-list-ol"></i>{$_ADMINLANG.utilities.todolistcreatenew}</a></li>{/if}
					{if in_array("Open New Ticket",$admin_perms)}<li><a href="supporttickets.php?action=open"><i class="fa fa-ticket"></i>{$_ADMINLANG.support.opennewticket}</a></li>{/if}
					{if in_array("WHOIS Lookups",$admin_perms)}<li><a href="whois.php"><i class="fa fa-globe"></i>{$_ADMINLANG.utilities.whois}</a></li>{/if}
					{if $sidebar eq "home"}
					{if in_array("Generate Due Invoices",$admin_perms)}<li><a href="#" data-toggle="modal" data-target="#modalGenerateInvoices"><i class="fa  fa-usd"></i>{$_ADMINLANG.invoices.geninvoices}</a></li>{/if}
					{if in_array("Attempts CC Captures",$admin_perms)}<li><a href="#" data-toggle="modal" data-target="#modalCreditCardCapture"><i class="fa  fa-credit-card"></i> {$_ADMINLANG.invoices.attemptcccaptures}</a></li>{/if}
					{/if}
				</ul>
			</li>
			{/if}

			{if $sidebar eq "clients"}<li class="treeview active">{else}<li class="treeview">{/if}
			    <a id="Menu-Clients" href="#" ><i class="fa fa-users"></i><span>{$_ADMINLANG.clients.title}</span> <i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    {if in_array("Add New Client",$admin_perms)}<li><a id="Menu-Clients-Add_New_Client" href="clientsadd.php"><i class="fa fa-user-plus"></i>{$_ADMINLANG.clients.addnew}</a></li>{/if}
					{if in_array("List Clients",$admin_perms)}<li><a id="Menu-Clients-View_Search_Clients" href="clients.php"><i class="fa fa-search"></i>{$_ADMINLANG.clients.viewsearch}</a></li>{/if}
					{if in_array("List Services",$admin_perms)}
					<li>
						<a id="Menu-Clients-Products_Services" href="#"><i class="fa fa-server"></i><span>{$_ADMINLANG.services.title}</span><i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
							    <li><a id="Menu-Clients-Products_Services-ALL" href="clientshostinglist.php"><i class="fa fa-server"></i>{$_ADMINLANG.home.viewall}</a></li>
								<li><a id="Menu-Clients-Products_Services-Shared_Hosting" href="clientshostinglist.php?listtype=hostingaccount"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i>{$_ADMINLANG.services.listhosting}</a></li>
								<li><a id="Menu-Clients-Products_Services-Reseller_Accounts" href="clientshostinglist.php?listtype=reselleraccount"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i>{$_ADMINLANG.services.listreseller}</a></li>
								<li><a id="Menu-Clients-Products_Services-VPS_Servers" href="clientshostinglist.php?listtype=server"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i>{$_ADMINLANG.services.listservers}</a></li>
								<li><a id="Menu-Clients-Products_Services-Other_Services" href="clientshostinglist.php?listtype=other"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-server"></i>{$_ADMINLANG.services.listother}</a></li>
							</ul>
					</li>
					{/if}
					{if in_array("List Addons",$admin_perms)}<li><a id="Menu-Clients-Service_Addons" href="clientsaddonslist.php"><i class="fa  fa-puzzle-piece"></i>{$_ADMINLANG.services.listaddons}</a></li>{/if}
					{if in_array("List Domains",$admin_perms)}<li><a id="Menu-Clients-Domain_Registration" href="clientsdomainlist.php"><i class="fa fa-globe"></i>{$_ADMINLANG.services.listdomains}</a></li>{/if}
					{if in_array("View Cancellation Requests",$admin_perms)}<li><a id="Menu-Clients-Cancelation_Requests" href="cancelrequests.php"><i class="fa fa-ban"></i>{$_ADMINLANG.clients.cancelrequests}</a></li>{/if}
					{if in_array("Manage Affiliates",$admin_perms)}<li><a id="Menu-Clients-Manage_Affiliates" href="affiliates.php"><i class="fa fa-users"></i>{$_ADMINLANG.affiliates.manage}</a></li>{/if}
					{if in_array("Mass Mail",$admin_perms)}<li><a id="Menu-Clients-Mass_Mail_Tool" href="massmail.php"><i class="fa fa-envelope"></i>{$_ADMINLANG.clients.massmail}</a></li>{/if}
				  </ul>
				</li>
			</li>

			{if $sidebar eq "orders"}<li class="treeview active">{else}<li class="treeview">{/if}
				<a id="Menu-Orders" href="#" ><i class="fa fa-shopping-cart"></i><span>{$_ADMINLANG.orders.title}</span>{if in_array("View Orders",$admin_perms) && $sidebarstats.orders.pending}<span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right">{$sidebarstats.orders.pending}</span>{/if}<i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    {if in_array("Add New Order",$admin_perms)}<li><a id="Menu-Orders-Add_New_Order" href="ordersadd.php"><i class="fa   fa-cart-plus"></i>{$_ADMINLANG.orders.addnew}</a></li>{/if}
					{if in_array("View Orders",$admin_perms)}<li><a id="Menu-Orders-List_All_Orders" href="orders.php"><i class="fa  fa-list-alt"></i>{$_ADMINLANG.orders.listall}</a></li>
					<li><a id="Menu-Orders-Pending_Orders" href="orders.php?status=Pending"><i class="fa   fa-minus" style="visibility: hidden;"></i><i class="fa fa-pause"></i>{$_ADMINLANG.orders.listpending}{if $sidebarstats.orders.pending}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right">{$sidebarstats.orders.pending}</span>{/if}</a></li>
					<li><a id="Menu-Orders-Active_Orders" href="orders.php?status=Active"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check-circle"></i>{$_ADMINLANG.orders.listactive}</a></li>
					<li><a id="Menu-Orders-Fraud_Orders" href="orders.php?status=Fraud"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-user-secret"></i>{$_ADMINLANG.orders.listfraud}</a></li>
					<li><a id="Menu-Orders-Cancelled_Orders" href="orders.php?status=Cancelled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-ban"></i>{$_ADMINLANG.orders.listcancelled}</a></li>
					{/if}
				  </ul>
				</li>
			{if $sidebar eq "billing"}<li class="treeview active">{else}<li class="treeview">{/if}
				<a id="Menu-Billing" href="#"><i class="fa fa-usd"></i><span>{$_ADMINLANG.billing.title}</span>{if in_array("List Invoices",$admin_perms) && $sidebarstats.invoices.overdue}<span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right">{$sidebarstats.invoices.overdue}</span>{/if}<i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					{if in_array("List Transactions",$admin_perms)}<li><a id="Menu-Billing-Transactions_List" href="transactions.php"><i class="fa fa-list"></i>{$_ADMINLANG.billing.transactionslist}</a></li>{/if}
					{if in_array("List Invoices",$admin_perms)}
					<li><a id="Menu-Billing-Invoices" href="#"><i class="fa fa-file-o"></i>{$_ADMINLANG.invoices.title} {$_ADMINLANG.status.overdue}{if $sidebarstats.invoices.overdue}<span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right">{$sidebarstats.invoices.overdue}</span>{/if}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Billing-Invoices-ALL" href="invoices.php"><i class="fa fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>
						<li><a id="Menu-Billing-Invoices-Paid" href="invoices.php?status=Paid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check-circle"></i>{$_ADMINLANG.status.paid}</a></li>
						<li><a id="Menu-Billing-Invoices-Draft" href="invoices.php?status=Draft"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-file-text-o"></i>{$_ADMINLANG.status.draft}</a></li>
						<li><a id="Menu-Billing-Invoices-Unpaid" href="invoices.php?status=Unpaid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-times-circle"></i>{$_ADMINLANG.status.unpaid}{if $sidebarstats.invoices.unpaid}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right">{$sidebarstats.invoices.unpaid}</span>{/if}</a></li>
						<li><a id="Menu-Billing-Invoices-Overdue" href="invoices.php?status=Overdue"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-clock-o"></i>{$_ADMINLANG.status.overdue}{if $sidebarstats.invoices.overdue}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right">{$sidebarstats.invoices.overdue}</span>{/if}</a></li>
						<li><a id="Menu-Billing-Invoices-Cancelled" href="invoices.php?status=Cancelled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-ban "></i>{$_ADMINLANG.status.cancelled}</a></li>
						<li><a id="Menu-Billing-Invoices-Refunded" href="invoices.php?status=Refunded"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-arrow-circle-left "></i>{$_ADMINLANG.status.refunded}</a></li>
						<li><a id="Menu-Billing-Invoices-Collections" href="invoices.php?status=Collections"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-book"></i>{$_ADMINLANG.status.collections}</a></li>
						</ul>
					</li>{/if}
					{if in_array("View Billable Items",$admin_perms)}<li><a id="Menu-Billing-Billable_Items" href="#"><i class="fa fa-files-o "></i>{$_ADMINLANG.billableitems.title}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Manage Billable Items",$admin_perms)}<li><a id="Menu-Billing-Billable_Items-Add_New" href="billableitems.php?action=manage"><i class="fa fa-plus-square "></i>{$_ADMINLANG.billableitems.addnew}</a></li>{/if}
						<li><a id="Menu-Billing-Billable_Items-ALL" href="billableitems.php"><i class="fa  fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>						
						<li><a id="Menu-Billing-Billable_Items-Uninvoiced_Items" href="billableitems.php?status=Uninvoiced"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-exclamation-circle"></i>{$_ADMINLANG.billableitems.uninvoiced}</a></li>
						<li><a id="Menu-Billing-Billable_Items-Recurring_Items" href="billableitems.php?status=Recurring"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-refresh"></i>{$_ADMINLANG.billableitems.recurring}</a></li>
						</ul>
					</li>{/if}
					{if in_array("Manage Quotes",$admin_perms)}<li><a id="Menu-Billing-Quotes" href="#"><i class="fa  fa-file-text-o"></i>{$_ADMINLANG.quotes.title}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Billing-Quotes-Create_New_Quote" href="quotes.php?action=manage"><i class="fa fa-plus-square"></i>{$_ADMINLANG.quotes.createnew}</a></li>
						<li><a id="Menu-Billing-Quotes-ALL" href="quotes.php"><i class="fa fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>
						<li><a id="Menu-Billing-Quotes-Valid" href="quotes.php?validity=Valid"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-check"></i>{$_ADMINLANG.status.valid}</a></li>
						<li><a id="Menu-Billing-Quotes-Expired" href="quotes.php?validity=Expired"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa fa-times"></i>{$_ADMINLANG.status.expired}</a></li>
						
						</ul>
					</li>{/if}
					{if in_array("Offline Credit Card Processing",$admin_perms)}<li><a id="Menu-Billing-Offline_CC_Processing" href="offlineccprocessing.php"><i class="fa fa-credit-card"></i>{$_ADMINLANG.billing.offlinecc}</a></li>{/if}
					{if in_array("View Gateway Log",$admin_perms)}<li><a id="Menu-Billing-Gateway_Log" href="gatewaylog.php"><i class="fa  fa-file-text"></i>{$_ADMINLANG.billing.gatewaylog}</a></li>{/if}
				  </ul>
				</li>
				
			{if $sidebar eq "support"}<li class="treeview active">{else}<li class="treeview">{/if}	
				<a id="Menu-Support" href="#"><i class="fa  fa-phone-square"></i><span>{$_ADMINLANG.support.title}</span> {if in_array("List Support Tickets",$admin_perms) && $ticketsawaitingreply}<span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right">{$ticketsawaitingreply}</span>{/if}<i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					{if in_array("List Support Tickets",$admin_perms) || in_array("Open New Ticket",$admin_perms)}<li><a id="Menu-Support-Support_Tickets" href="#"><i class="fa  fa-ticket"></i>{$_ADMINLANG.support.supporttickets}{if $ticketsawaitingreply}<span style="padding:0.2em 0.6em 0.3em; margin-right:25px;" class="label bg-red pull-right">{$ticketsawaitingreply}</span>{/if}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Open New Ticket",$admin_perms)}<li><a id="Menu-Support-Open_New_Ticket" href="supporttickets.php?action=open"><i class="fa  fa-plus-square"></i>{$_ADMINLANG.support.opennewticket}</a></li>{/if}
						{if in_array("List Support Tickets",$admin_perms)}
						<li><a id="Menu-Support-Support_Tickets-ALL" href="supporttickets.php"><i class="fa  fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>
						<li><a id="Menu-Support-Support_Tickets-Awaiting_Reply" href="supporttickets.php"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-list"></i>{$_ADMINLANG.support.awaitingreply}{if $ticketsawaitingreply}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-red pull-right">{$ticketsawaitingreply}</span>{/if}</a></li>
						<li><a id="Menu-Support-Support_Tickets-Flagged_Tickets" href="supporttickets.php?view=flagged"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa   fa-flag"></i>{$_ADMINLANG.support.flagged}{if $ticketsflagged}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-yellow pull-right">{$ticketsflagged}</span>{/if}</a></li>
						<li><a id="Menu-Support-Support_Tickets-All_Active_Tickets" href="supporttickets.php?view=active"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-list"></i>{$_ADMINLANG.support.allactive}{if $ticketsallactive}<span style="padding:0.2em 0.6em 0.3em; " class="label bg-orange pull-right">{$ticketsallactive}</span>{/if}</a></li>
						{assign var="sticketfabgcolor" value="label-primary" nocache}
						{foreach from=$menuticketstatuses key=i item=status}
							{if $status eq 'Open'}{assign var="sticketfaicon" value="fa-comments-o" nocache}
							{elseif $status eq 'Answered'}{assign var="sticketfaicon" value="fa-reply" nocache}
							{elseif $status eq 'Customer-Reply'}{assign var="sticketfaicon" value="fa-reply-all" nocache}
							{elseif $status eq 'On Hold'}{assign var="sticketfaicon" value="fa-pause" nocache}
							{elseif $status eq 'In Progress'}{assign var="sticketfaicon" value="fa-spinner" nocache}
							{elseif $status eq 'Closed'}{assign var="sticketfaicon" value="fa-check-square" nocache}{assign var="sticketfabgcolor" value="bg-green" nocache}
							{else}{assign var="sticketfaicon" value="fa-circle-o" nocache}
							{/if}						    
							<li><a id="Menu-Support-Support_Tickets-{$status|replace:' ':'_'}" href="supporttickets.php?view={$status}"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa {$sticketfaicon}"></i>{$status}{if $ticketcounts.$i.count }<span style="padding:0.2em 0.6em 0.3em;" class="label {$sticketfabgcolor} pull-right">{$ticketcounts.$i.count}</span>{/if}</a></li>
						{/foreach}
						{/if}	
						</ul>
					</li>{/if}
					{if in_array("Manage Network Issues",$admin_perms)}<li><a id="Menu-Support-Network_Issues" href="#"><i class="fa  fa-sitemap "></i>{$_ADMINLANG.networkissues.title}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						<li><a id="Menu-Support-Network_Issues-Create_New" href="networkissues.php?action=manage"><i class="fa  fa-plus-square"></i>{$_ADMINLANG.networkissues.addnew}</a></li>
						<li><a id="Menu-Support-Network_Issues-ALL" href="networkissues.php"><i class="fa  fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>	
						<li><a id="Menu-Support-Network_Issues-Open" href="networkissues.php"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-comments-o  "></i>{$_ADMINLANG.networkissues.open}</a></li>
						<li><a id="Menu-Support-Network_Issues-Scheduled" href="networkissues.php?view=scheduled"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-clock-o"></i>{$_ADMINLANG.networkissues.scheduled}</a></li>
						<li><a id="Menu-Support-Network_Issues-Resolved" href="networkissues.php?view=resolved"><i class="fa  fa-minus" style="visibility: hidden;"></i><i class="fa  fa-check-square"></i>{$_ADMINLANG.networkissues.resolved}</a></li>
						</ul>
					</li>{/if}
					{if in_array("Support Center Overview",$admin_perms)}<li><a id="Menu-Support-Support_Overview" href="supportcenter.php"><i class="fa  fa-bar-chart"></i>{$_ADMINLANG.support.supportoverview}</a></li>{/if}
					{if in_array("Manage Announcements",$admin_perms)}<li><a id="Menu-Support-Announcements" href="supportannouncements.php"><i class="fa  fa-bullhorn"></i>{$_ADMINLANG.support.announcements}</a></li>{/if}
					{if in_array("Manage Downloads",$admin_perms)}<li><a id="Menu-Support-Downloads" href="supportdownloads.php"><i class="fa  fa-download "></i>{$_ADMINLANG.support.downloads}</a></li>{/if}
					{if in_array("Manage Knowledgebase",$admin_perms)}<li><a id="Menu-Support-Knowledgebase" href="supportkb.php"><i class="fa  fa-lightbulb-o "></i>{$_ADMINLANG.support.knowledgebase}</a></li>{/if}
					{if in_array("Manage Predefined Replies",$admin_perms)}<li><a id="Menu-Support-Predefined_Replies" href="supportticketpredefinedreplies.php"><i class="fa  fa-reply-all "></i>{$_ADMINLANG.support.predefreplies}</a></li>{/if}
				  </ul>
				</li>				

				{if in_array("View Reports",$admin_perms)}
				{if $sidebar eq "reports"}<li class="treeview active">{else}<li class="treeview">{/if}
				<a id="Menu-Reports" href="#"><i class="fa fa-file-text "></i> <span>{$_ADMINLANG.reports.title}</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    <li><a id="Menu-Reports-ALL" href="reports.php"><i class="fa  fa-list-alt"></i>{$_ADMINLANG.home.viewall}</a></li>
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
			    {/if}				

				{if $sidebar eq "utilities"}<li class="treeview active">{else}<li class="treeview">{/if}
				<a id="Menu-Utilities" href="#"><i class="fa fa-th-large"></i><span>{$_ADMINLANG.utilities.title}</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
				    {if in_array("Update WHMCS",$admin_perms)}<li><a id="Menu-Utilities-Update" href="update.php"><i class="fa fa-refresh"></i>{$_ADMINLANG.update.title}</a></li>{/if}
					{if in_array("WHMCSConnect",$admin_perms)}<li><a id="Menu-Utilities-WHMCS_Connect" href="whmcsconnect.php"><i class="fa fa-external-link-square"></i>{$_ADMINLANG.whmcsConnect.whmcsConnectName}</a></li>{/if}
					{if in_array("Email Marketer",$admin_perms)}<li><a id="Menu-Utilities-Email_Marketer" href="utilitiesemailmarketer.php"><i class="fa  fa-envelope"></i>{$_ADMINLANG.utilities.emailmarketer}</a></li>{/if}
					{if in_array("Link Tracking",$admin_perms)}<li><a id="Menu-Utilities-Link_Tracking" href="utilitieslinktracking.php"><i class="fa fa-link"></i>{$_ADMINLANG.utilities.linktracking}</a></li>{/if}
					{if in_array("Calendar",$admin_perms)}<li><a id="Menu-Utilities-Calendar" href="calendar.php"><i class="fa fa-calendar"></i>{$_ADMINLANG.utilities.calendar}</a></li>{/if}
					{if in_array("To-Do List",$admin_perms)}<li><a id="Menu-Utilities-To-Do_List" href="todolist.php"><i class="fa fa-list-ol"></i>{$_ADMINLANG.utilities.todolist}</a></li>{/if}
					{if in_array("WHOIS Lookups",$admin_perms)}<li><a id="Menu-Utilities-WHOIS_Lookups" href="whois.php"><i class="fa fa-globe"></i>{$_ADMINLANG.utilities.whois}</a></li>{/if}
					{if in_array("Domain Resolver Checker",$admin_perms)}<li><a id="Menu-Utilities-Domain_Resolver" href="utilitiesresolvercheck.php"><i class="fa fa-chain-broken "></i>{$_ADMINLANG.utilities.domainresolver}</a></li>{/if}
					{if in_array("View Integration Code",$admin_perms)}<li><a id="Menu-Utilities-Integration_Code" href="systemintegrationcode.php"><i class="fa  fa-code"></i>{$_ADMINLANG.utilities.integrationcode}</a></li>{/if}
					{if in_array("WHM Import Script",$admin_perms)}<li><a id="Menu-Utilities-cPanel_WHM_Import" href="whmimport.php"><i class="fa fa-cloud-download"></i>{$_ADMINLANG.utilities.cpanelimport}</a></li>{/if}
					{if in_array("Database Status",$admin_perms) || in_array("System Cleanup Operations",$admin_perms) || in_array("View PHP Info",$admin_perms)}<li><a id="Menu-Utilities-System" href="#"><i class="fa fa-cog "></i>{$_ADMINLANG.utilities.system}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Database Status",$admin_perms)}<li><a id="Menu-Utilities-System-Database_Status" href="systemdatabase.php"><i class="fa fa-database"></i>{$_ADMINLANG.utilities.dbstatus}</a></li>{/if}
						{if in_array("System Cleanup Operations",$admin_perms)}<li><a id="Menu-Utilities-System-System_Cleanup" href="systemcleanup.php"><i class="fa fa-magic"></i>{$_ADMINLANG.utilities.syscleanup}</a></li>{/if}
						{if in_array("View PHP Info",$admin_perms)}<li><a id="Menu-Utilities-System-PHP_Info" href="systemphpinfo.php"><i class="fa fa-info-circle"></i>{$_ADMINLANG.utilities.phpinfo}</a></li>{/if}
						</ul>
					</li>{/if}
					{if in_array("View Activity Log",$admin_perms) || in_array("View Admin Log",$admin_perms) || in_array("View Module Debug Log",$admin_perms) || in_array("View Email Message Log",$admin_perms) || in_array("View Ticket Mail Import Log",$admin_perms) || in_array("View WHOIS Lookup Log",$admin_perms)}<li><a id="Menu-Utilities-Logs" href="#"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.logs}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("View Activity Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-Activity_Log" href="systemactivitylog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.activitylog}</a></li>{/if}
						{if in_array("View Admin Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-Admin_Log" href="systemadminlog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.adminlog}</a></li>{/if}
						{if in_array("View Module Debug Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-Module_Log" href="systemmodulelog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.modulelog}</a></li>{/if}
						{if in_array("View Email Message Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-Email_Message_Log" href="systememaillog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.emaillog}</a></li>{/if}
						{if in_array("View Ticket Mail Import Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-Ticket_Email_Import_Log" href="systemmailimportlog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.ticketmaillog}</a></li>{/if}
						{if in_array("View WHOIS Lookup Log",$admin_perms)}<li><a id="Menu-Utilities-Logs-WHOIS_Lookup_Log" href="systemwhoislog.php"><i class="fa fa-file-text"></i>{$_ADMINLANG.utilities.whoislog}</a></li>{/if}
						</ul>
					</li>{/if}
				  </ul>
				</li>				

				{if $sidebar eq "addonmodules"}<li class="treeview active">{else}<li class="treeview">{/if}
				<a id="Menu-Addons" href="#"><i class="fa fa-puzzle-piece"></i><span>{$_ADMINLANG.utilities.addonmodules}</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					{foreach from=$addon_modules key=module item=displayname}
					<li><a id="Menu-Addons-{$displayname}" href="addonmodules.php?module={$module}"><i class="fa fa-puzzle-piece"></i>{$displayname}</a></li>
					{/foreach}
					<li><a id="Menu-Addons-Marketplace-Link" class="autoLinked" href="https://marketplace.whmcs.com"><i class="fa fa-shopping-bag "></i>Visit WHMCS Marketplace</a></li>
				  </ul>
				</li>
				
                {if $sidebar eq "config"}<li class="treeview active">{else}<li class="treeview">{/if} 
				<a id="Menu-Setup" href="#"><i class="fa fa-wrench"></i><span>{$_ADMINLANG.setup.title}</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					{if in_array("Configure General Settings",$admin_perms)}<li><a id="Menu-Setup-General_Settings" href="configgeneral.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.general}</a></li>{/if}
					{if in_array("Configure Automation Settings",$admin_perms)}<li><a id="Menu-Setup-Automation_Settings" href="configauto.php"><i class="fa fa-cogs "></i>{$_ADMINLANG.setup.automation}</a></li>{/if}
				{if in_array("Configure Administrators",$admin_perms) || in_array("Configure Admin Roles",$admin_perms) || in_array("Configure Two-Factor Authentication",$admin_perms)}
					<li><a id="Menu-Setup-Staff_Management" href="#"><i class="fa fa-user "></i>{$_ADMINLANG.setup.staff}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Configure Administrators",$admin_perms)}<li><a id="Menu-Setup-Staff_Management-Administrator_Users" href="configadmins.php"><i class="fa fa-users "></i>{$_ADMINLANG.setup.admins}</a></li>{/if}
						{if in_array("Configure Admin Roles",$admin_perms)}<li><a id="Menu-Setup-Staff_Management-Administrator_Roles" href="configadminroles.php"><i class="fa fa-lock "></i>{$_ADMINLANG.setup.adminroles}</a></li>{/if}
						{if in_array("Configure Two-Factor Authentication",$admin_perms)}<li><a id="Menu-Setup-Staff_Management-Two-Factor_Authentication" href="configtwofa.php"><i class="fa fa-random"></i>{$_ADMINLANG.setup.twofa}</a></li>{/if}
						</ul>
					</li>{else}
					<li><a id="Menu-Setup-Staff_Management-My_Account" href="myaccount.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.global.myaccount}</a></li>{/if}
				{if in_array("Configure Currencies",$admin_perms) || in_array("Configure Payment Gateways",$admin_perms) || in_array("Configure Tax Setup",$admin_perms) || in_array("View Promotions",$admin_perms)}
					<li><a id="Menu-Setup-Payments" href="#"><i class="fa fa-usd"></i>{$_ADMINLANG.setup.payments}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Configure Currencies",$admin_perms)}<li><a id="Menu-Setup-Payments-Currencies" href="configcurrencies.php"><i class="fa fa-eur "></i>{$_ADMINLANG.setup.currencies}</a></li>{/if}
						{if in_array("Configure Payment Gateways",$admin_perms)}<li><a id="Menu-Setup-Payments-Payment_Gateways" href="configgateways.php"><i class="fa fa-paypal "></i>{$_ADMINLANG.setup.gateways}</a></li>{/if}
						{if in_array("Configure Tax Setup",$admin_perms)}<li><a id="Menu-Setup-Payments-Tax_Rules" href="configtax.php"><i class="fa fa-university "></i>{$_ADMINLANG.setup.tax}</a></li>{/if}
						{if in_array("View Promotions",$admin_perms)}<li><a id="Menu-Setup-Payments-Promotions" href="configpromotions.php"><i class="fa fa-tag"></i>{$_ADMINLANG.setup.promos}</a></li>{/if}
						</ul>
					</li>{/if}
				{if in_array("View Products/Services",$admin_perms) || in_array("Configure Product Addons",$admin_perms) || in_array("Configure Product Bundles",$admin_perms) || in_array("Configure Domain Pricing",$admin_perms) || in_array("Configure Domain Registrars",$admin_perms) || in_array("Configure Servers",$admin_perms)}
					<li><a id="Menu-Setup-Products_Services" href="#"><i class="fa fa-server"></i>{$_ADMINLANG.setup.products}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("View Products/Services",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Products_Services" href="configproducts.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.products}</a></li>{/if}
						{if in_array("View Products/Services",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Configurable_Options" href="configproductoptions.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.configoptions}</a></li>{/if}
						{if in_array("Configure Product Addons",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Product_Addons" href="configaddons.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.addons}</a></li>{/if}
						{if in_array("Configure Product Bundles",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Product_Bundles" href="configbundles.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.bundles}</a></li>{/if}
						{if in_array("Configure Domain Pricing",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Domain_Pricing" href="configdomains.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.domainpricing}</a></li>{/if}
						{if in_array("Configure Domain Registrars",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Domain_Registrars" href="configregistrars.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.registrars}</a></li>{/if}
						{if in_array("Configure Servers",$admin_perms)}<li><a id="Menu-Setup-Products_Services-Servers" href="configservers.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.servers}</a></li>{/if}
						</ul>
					</li>{/if}
				{if in_array("Configure Support Departments",$admin_perms) || in_array("Configure Ticket Statuses",$admin_perms) || in_array("Configure Support Departments",$admin_perms) || in_array("Configure Spam Control",$admin_perms)}
					<li><a id="Menu-Setup-Support" href="#"><i class="fa fa-phone-square"></i>{$_ADMINLANG.support.title}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Configure Support Departments",$admin_perms)}<li><a id="Menu-Setup-Support-Support_Departments" href="configticketdepartments.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.supportdepartments}</a></li>{/if}
						{if in_array("Configure Ticket Statuses",$admin_perms)}<li><a id="Menu-Setup-Support-Ticket_Statuses" href="configticketstatuses.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.ticketstatuses}</a></li>{/if}
						{if in_array("Configure Support Departments",$admin_perms)}<li><a id="Menu-Setup-Support-Escalation_Rules" href="configticketescalations.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.escalationrules}</a></li>{/if}
						{if in_array("Configure Spam Control",$admin_perms)}<li><a id="Menu-Setup-Support-Spam_Control" href="configticketspamcontrol.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.spam}</a></li>{/if}
						</ul>
					</li>{/if}
					{if in_array("Configure Application Links",$admin_perms)}<li><a id="Menu-Setup-Application_Links" href="configapplinks.php"><i class="fa fa-share-alt"></i>{$_ADMINLANG.setup.applicationLinks}</a></li>{/if}
					{if in_array("Configure OpenID Connect",$admin_perms)}<li><a id="Menu-Setup-OpenID_Connect" href="configopenid.php"><i class="fa fa-openid"></i>{$_ADMINLANG.setup.openIdConnect}</a></li>{/if}
					{if in_array("View Email Templates",$admin_perms)}<li><a id="Menu-Setup-Email_Templates" href="configemailtemplates.php"><i class="fa fa-envelope"></i>{$_ADMINLANG.setup.emailtpls}</a></li>{/if}
					{if in_array("Configure Addon Modules",$admin_perms)}<li><a id="Menu-Setup-Addons_Modules" href="configaddonmods.php"><i class="fa fa-puzzle-piece"></i>{$_ADMINLANG.setup.addonmodules}</a></li>{/if}
					{if in_array("Configure Client Groups",$admin_perms)}<li><a id="Menu-Setup-Client_Groups" href="configclientgroups.php"><i class="fa fa-users"></i>{$_ADMINLANG.setup.clientgroups}</a></li>{/if}
					{if in_array("Configure Custom Client Fields",$admin_perms)}<li><a id="Menu-Setup-Custom_Client_Fields" href="configcustomfields.php"><i class="fa fa-th-list"></i>{$_ADMINLANG.setup.customclientfields}</a></li>{/if}
					{if in_array("Configure Fraud Protection",$admin_perms)}<li><a id="Menu-Setup-Fraud_Protection" href="configfraud.php"><i class="fa fa-user-secret "></i>{$_ADMINLANG.setup.fraud}</a></li>{/if}
				{if in_array("Configure Order Statuses",$admin_perms) || in_array("Configure Security Questions",$admin_perms) || in_array("View Banned IPs",$admin_perms) || in_array("Configure Banned Emails",$admin_perms) || in_array("Configure Database Backups",$admin_perms)}
					<li><a id="Menu-Setup-Other" href="#"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.other}<i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
						{if in_array("Configure Order Statuses",$admin_perms)}<li><a id="Menu-Setup-Other-Order_Statuses" href="configorderstatuses.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.orderstatuses}</a></li>{/if}
						{if in_array("Configure Security Questions",$admin_perms)}<li><a id="Menu-Setup-Other-Security_Questions" href="configsecurityqs.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.securityqs}</a></li>{/if}
						{if in_array("View Banned IPs",$admin_perms)}<li><a id="Menu-Setup-Other-Banned_IPs" href="configbannedips.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.bannedips}</a></li>{/if}
						{if in_array("Configure Banned Emails",$admin_perms)}<li><a id="Menu-Setup-Other-Banned_Emails" href="configbannedemails.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.bannedemails}</a></li>{/if}
						{if in_array("Configure Database Backups",$admin_perms)}<li><a id="Menu-Setup-Other-Database_Backups" href="configbackups.php"><i class="fa fa-wrench"></i>{$_ADMINLANG.setup.backups}</a></li>{/if}
						</ul>
					</li>{/if}
				  </ul>
				</li>
				
				<li><a id="Menu-Help" href="#"><i class="fa fa-question-circle"></i><span>{$_ADMINLANG.help.title}</span><i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					<li><a id="Menu-Help-Documentation" href="http://docs.whmcs.com/" target="_blank"><i class="fa fa-book "></i>{$_ADMINLANG.help.docs}</a></li>
					{if in_array("Main Homepage",$admin_perms)}<li><a id="Menu-Help-License_Information" href="systemlicense.php"><i class="fa fa-key"></i>{$_ADMINLANG.help.licenseinfo}</a></li>{/if}
					{if in_array("Configure Administrators",$admin_perms)}<li><a id="Menu-Help-Change_License_Key" href="licenseerror.php?licenseerror=change"><i class="fa fa-exchange"></i>{$_ADMINLANG.help.changelicense}</a></li>{/if}
					{if in_array("Health and Updates", $admin_perms)}<li><a id="Menu-Help-Check_Health_Updates" href="systemhealthandupdates.php"><i class="fa fa-medkit"></i>{$_ADMINLANG.healthCheck.menuTitle}</a></li>{/if}
					{if in_array("Configure General Settings",$admin_perms)}
						<li><a id="Menu-Help-Setup_Wizard" href="#" onclick="openSetupWizard();return false;"><i class="fa fa-magic"></i>{$_ADMINLANG.help.setupWizard}</a></li>
						<li><a id="Menu-Help-Get_Help" href="systemsupportrequest.php"><i class="fa fa-life-ring"></i>{$_ADMINLANG.help.support}</a></li>
					{/if}
					<li><a id="Menu-Help-Community_Forums" href="http://forum.whmcs.com/" target="_blank"><i class="fa fa-comments "></i>{$_ADMINLANG.help.forums}</a></li>
				  </ul>
				</li>				
			
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
	  