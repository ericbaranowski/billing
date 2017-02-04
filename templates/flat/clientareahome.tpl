<div id="account-snapshot">
		<a href="clientarea.php?action=products" class="active-services">

			<p class="stats-title">Active Services</p>

			<p class="stats-number">{$clientsstats.productsnumactive}</p>

		</a><!--active-services-->

		 <a href="clientarea.php?action=domains" class="active-domains">

			<p class="stats-title">Active Domains</p>

			<p class="stats-number">{$clientsstats.numactivedomains}</p>

		</a><!--active-services-->

		<a href="clientarea.php?action=invoices" class="due-invoices">

			<p class="stats-title">Due Invoices</p>

			<p class="stats-number">{$clientsstats.numunpaidinvoices}</p>

		</a><!--active-services-->

		<a href="supporttickets.php" class="open-tickets">

			<p class="stats-title">Open Tickets</p>

			<p class="stats-number">{$clientsstats.numactivetickets}</p>

		</a><!--active-services-->
</div>

<div class="row rowend rowbottom">

    <div class="col2half margin0 left">
        <div class="internalpadding accountinfo" style="padding:0;">
          <span class="icon"></span>
          <h2>{$LANG.accountinfo}</h2>
          <div class="innercontent">
            <p><strong>{$clientsdetails.firstname} {$clientsdetails.lastname} {if $clientsdetails.companyname}({$clientsdetails.companyname}){/if}</strong></p>
            <p>{$clientsdetails.address1}{if $clientsdetails.address2}, {$clientsdetails.address2}{/if}</p>
            <p>{if $clientsdetails.city}{$clientsdetails.city}, {/if}{if $clientsdetails.state}{$clientsdetails.state}, {/if}{$clientsdetails.postcode}</p>
            <p>{$clientsdetails.countryname}</p>
            <p><a href="mailto:{$clientsdetails.email}">{$clientsdetails.email}</a></p>
            <div class="divider"></div>
            <a class="btn" href="clientarea.php?action=details"><span class="icon"></span>{$LANG.clientareaupdateyourdetails}</a>
          </div>
        </div>
    </div>
    <div class="col2half right">
        <div class="internalpadding accountview">
          <span class="icon"></span>
          <h2>{$LANG.accountoverview}</h2>
          <div class="innercontent nopadding" style="overflow: hidden;">
			  <ul class="account-overview">
				<li>
					<strong>{$LANG.statsnumproducts}:</strong> 
					
					<a href="clientarea.php?action=products" class="go-arrow">
					<span class="icon"></span>
					</a>
					
					<a class="badges" href="clientarea.php?action=products">
					<span class="badge-total">{$clientsstats.productsnumtotal}</span>
					<span class="badge-active">{$clientsstats.productsnumactive}</span>
					</a>
					
				</li>
				
				<li>
					<strong>{$LANG.statsnumdomains}:</strong>
					
					<a href="clientarea.php?action=domains" class="go-arrow">
						<span class="icon"></span>
					</a>	            
					
					<a class="badges" href="clientarea.php?action=domains">
					 <span class="badge-total">{$clientsstats.numdomains}</span>
					 <span class="badge-active">{$clientsstats.numactivedomains}</span>
					</a> 
				</li>
				
				<li>
				<strong>{$LANG.statsnumtickets}:</strong>
					<a href="supporttickets.php" class="go-arrow">
						<span class="icon"></span>
					</a>	            
				<a class="badges" href="supporttickets.php">
				<span class="badge-active">{$clientsstats.numactivetickets}</span></a>
				</li>
				
				<li>
				<strong>{$LANG.statsnumreferredsignups}:</strong> 
				
					<a href="affiliates.php" class="go-arrow">
						<span class="icon"></span>
					</a>	             
				
				<a class="badges" href="affiliates.php">
				   <span class="badge-active">{$clientsstats.numaffiliatesignups}</span>
				</a></li>
				
				<li>
				<strong>{$LANG.creditcardyourinfo}: &nbsp; </strong> 
				{if $defaultpaymentmethod}{$defaultpaymentmethod}{else}{$LANG.paymentmethoddefault}{/if} {if $clientsdetails.cctype}({$clientsdetails.cctype}-{$clientsdetails.cclastfour}) - <a href="clientarea.php?action=creditcard">Update &raquo;</a></li>{/if}
				
			  </ul> 
          </div>
        </div>
    </div>
    
</div>
<div class="clear"></div>

{if $announcements}
<div class="alert alert-info">
    <h2 class="announcements-icon">{$LANG.ourlatestnews}:</h2> <p>{$announcements.0.text|strip_tags|truncate:100:'...'} - <a href="announcements.php?id={$announcements.0.id}">{$LANG.more}...</a></p>
</div>
{/if}
{if $ccexpiringsoon}
<div class="alert alert-error">
    <h2>{$LANG.ccexpiringsoon}:</h2><p> {$LANG.ccexpiringsoondesc|sprintf2:'<a href="clientarea.php?action=creditcard">':'</a>'}</p>
</div>
{/if}
{if $clientsstats.incredit}
<div class="alert alert-success">
    <h2 class="credit-icon">{$LANG.availcreditbal}:</h2><p> {$LANG.availcreditbaldesc|sprintf2:$clientsstats.creditbalance}</p>
</div>
{/if}
{if $clientsstats.numoverdueinvoices>0}
<div class="alert alert-error">
    <h2 class="overdue-icon">{$LANG.youhaveoverdueinvoices|sprintf2:$clientsstats.numoverdueinvoices}:</h2><p> {$LANG.overdueinvoicesdesc|sprintf2:'<a href="clientarea.php?action=masspay&all=true">':'</a>'}</p>
</div>
{/if}

{if $condlinks.domainreg || $condlinks.domaintrans || $condlinks.domainown}
<form method="post" action="domainchecker.php">
<div class="domain-checker">
    <h2>{$LANG.domaincheckerchecknewdomain}</h2>
    <div class="domaincheck">
      <div class="searchbar"><input class="bigfield" name="domain" type="text" value="{$LANG.domaincheckerdomainexample}" onfocus="if(this.value=='{$LANG.domaincheckerdomainexample}')this.value=''" onblur="if(this.value=='')this.value='{$LANG.domaincheckerdomainexample}'" /></div>
      <div>{if $condlinks.domainreg}<input type="submit" value="{$LANG.checkavailability}" class="btn btn-primary btn-large" />{/if}</div>
      <div>{if $condlinks.domaintrans}<input type="submit" name="transfer" value="{$LANG.domainstransfer}" class="btn btn-success btn-large" />{/if}</div>
      <div>{if $condlinks.domainown}<input type="submit" name="hosting" value="{$LANG.domaincheckerhostingonly}" class="btn btn-large" />{/if}</div>
    </div> 
    <div class="clear"></div>
</div>
</form>
{/if}

{foreach from=$addons_html item=addon_html}
<div style="margin-top:15px;">{$addon_html}</div>
{/foreach}

{if in_array('tickets',$contactpermissions)}


<div class="table_title" style="margin-top:20px;">
  <a class="btn btn-primary pull-right" href="submitticket.php">{$LANG.opennewticket}</a>
  <h3 class="open-tickets-icon"><strong>{$clientsstats.numactivetickets}</strong> &nbsp;{$LANG.supportticketsopentickets}</h3>
</div>

<table class="table table-striped table-framed table-centered no-more-tables">
  <thead>
    <tr>
      <th><a href="supporttickets.php?orderby=date">{$LANG.supportticketsdate}</a></th>
      <th><a href="supporttickets.php?orderby=dept">{$LANG.supportticketsdepartment}</a></th>
      <th><a href="supporttickets.php?orderby=subject">{$LANG.supportticketssubject}</a></th>
      <th><a href="supporttickets.php?orderby=status">{$LANG.supportticketsstatus}</a></th>
      <th class="headerSortdesc"><a href="supporttickets.php?orderby=lastreply">{$LANG.supportticketsticketlastupdated}</a></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$tickets item=ticket}
    <tr>
      <td data-title="{$LANG.supportticketsdate}">{$ticket.date}</td>
      <td data-title="{$LANG.supportticketsdepartment}">{$ticket.department}</td>
      <td data-title="{$LANG.supportticketssubject}"><div align="left"><img src="images/article.gif" alt="Ticket" border="0" />&nbsp;<a href="viewticket.php?tid={$ticket.tid}&amp;c={$ticket.c}">{if $ticket.unread}<strong>{/if}#{$ticket.tid} - {$ticket.subject}{if $ticket.unread}</strong>{/if}</a></div></td>
      <td data-title="{$LANG.supportticketsstatus}">{$ticket.status}</td>
      <td data-title="{$LANG.supportticketsticketlastupdated}">{$ticket.lastreply}</td>
      <td class="textcenter"><a href="viewticket.php?tid={$ticket.tid}&c={$ticket.c}" class="btn btn-inverse">{$LANG.supportticketsviewticket}</a></td>
    </tr>  
  {foreachelse}
    <tr>
      <td colspan="6" class="textcenter">{$LANG.supportticketsnoneopen}</td>
    </tr>
  {/foreach}
  </tbody>
</table>

{/if}

{if in_array('invoices',$contactpermissions)}

<div class="table_title">
  <a class="btn btn-primary pull-right" href="clientarea.php?action=invoices">{$LANG.view} {$LANG.invoices}</a>
  <h3 class="due-invoices-icon"><strong>{$clientsstats.numdueinvoices}</strong> &nbsp;{$LANG.invoicesdue}</h3>
</div>

<form method="post" action="clientarea.php?action=masspay">

<table class="table table-striped table-framed table-centered no-more-tables">
  <thead>
    <tr>
      {if $masspay}<th class="textcenter"><input type="checkbox" onclick="toggleCheckboxes('invids')" /></th>{/if}
      <th class="headerSortdesc"><a href="clientarea.php?action=invoices&orderby=id">{$LANG.invoicestitle}</a></th>
      <th {if $orderby eq "date"}class="numeric headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=date">{$LANG.invoicesdatecreated}</a></th>
      <th {if $orderby eq "duedate"}class="numeric headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=duedate">{$LANG.invoicesdatedue}</a></th>
      <th {if $orderby eq "total"}class="numeric headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=total">{$LANG.invoicestotal}</a></th>
      <th {if $orderby eq "balance"}class="numeric headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=balance">{$LANG.invoicesbalance}</a></th>
      <th {if $orderby eq "status"}class=" headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=status">{$LANG.invoicesstatus}</a></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$invoices item=invoice}
    <tr>
      {if $masspay}<td data-title="Selected" class="textcenter"><input type="checkbox" name="invoiceids[]" value="{$invoice.id}" class="invids" /></td>{/if}
      <td data-title="{$LANG.invoicestitle}">{$invoice.invoicenum}</td>
      <td data-title="{$LANG.invoicesdatecreated}">{$invoice.datecreated}</td>
      <td data-title="{$LANG.invoicesdatedue}">{$invoice.datedue}</td>
      <td data-title="{$LANG.invoicestotal}">{$invoice.total}</td>
      <td data-title="{$LANG.invoicesbalance}">{$invoice.balance}</td>
      <td data-title="{$LANG.invoicesstatus}"><span class="label {$invoice.rawstatus}">{$invoice.statustext}</span></td>
      <td class="textcenter"><a href="viewinvoice.php?id={$invoice.id}" target="_blank" class="btn">{$LANG.invoicesview}</a></td>
    </tr>          
  {foreachelse}
    <tr>
      <td colspan="{if $masspay}8{else}7{/if}" class="textcenter">{$LANG.invoicesnoneunpaid}</td>
    </tr>
  {/foreach}
  {if $invoices}
    <tr class="invoice-footer">
      <td colspan="{if $masspay}4{else}3{/if}">{if $masspay}<div class="clientareahome-invoice-controls" align="left"><input type="submit" value="{$LANG.masspayselected}" class="btn btn-primary" />&nbsp; <a href="clientarea.php?action=masspay&all=true" class="btn btn-success">{$LANG.masspayall}</a></div>{/if}</td>
	  <td colspan="2" class="tdhide">&nbsp;</td>
      <td class="textright clientareahome-label-totaldue"><strong>{$LANG.invoicestotaldue}:</strong></td>
      <td class="clientareahome-label-totalamount"><strong>{$totalbalance}</strong></td>
      
    </tr>
  {/if}
  </tbody>
</table>

</form>

{/if}

{if $files}

<div class="styled_title">
    <h3>{$LANG.clientareafiles}</h3>
</div>

<div class="row">
<div class="control-group">
{foreach from=$files item=file}
    <div class="col4">
        <div class="internalpadding">
            <img src="images/file.png" /> <a href="dl.php?type=f&id={$file.id}" class="fontsize2"><strong>{$file.title}</strong></a><br />
            {$LANG.clientareafilesdate}: {$file.date}
        </div>
    </div>
{/foreach}
</div>
</div>

{/if}