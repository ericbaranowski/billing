<div class="clientarea-normal">
	<div class="row">
		<div class="col-sm-3 clientarea-button">
			<a title="Products/Services" href="clientarea.php?action=products">
				<span class="glyphicon glyphicon-hdd"> </span>
				<h4>{$LANG.statsnumproducts}</h4>
			</a>
			<span class="label label-success">{$clientsstats.productsnumactive}</span>
		</div>
		<div class="col-sm-3 clientarea-button">
			<a title="Domains" href="clientarea.php?action=domains">
				<span class="glyphicon glyphicon-globe"> </span>
				<h4>{$LANG.statsnumdomains}</h4>
			</a>
			<span class="label label-success">{$clientsstats.numactivedomains}</span>
		</div>
		<div class="col-sm-3 clientarea-button">
			<a title="Invoices" href="clientarea.php?action=invoices">
				<span class="glyphicon glyphicon-file"> </span>
				<h4>{$LANG.statsnumdueinvoices|default:'Due Invoices'}</h4>
			</a>
			<span class="label label-danger">{$clientsstats.numdueinvoices}</span>
		</div>
		<div class="col-sm-3 clientarea-button">
			<a title="Support Tickets" href="supporttickets.php">
				<span class="glyphicon glyphicon-cog"> </span>
				<h4>{$LANG.statsnumtickets}</h4>
			</a>
			<span class="label label-success">{$clientsstats.numtickets}</span>
		</div>
	</div>
</div>	
<div class="row">
	<div class="col-sm-6">
		<h4 style="margin-left:5px;"><span class="badge badge-circle-sm"><span class="glyphicon glyphicon-credit-card"></span></span> {$LANG.navbilling}</h4>
		<div class="well">
			<table class="table">
				<tr>
					<td><span class="glyphicon glyphicon-file"></span> {$LANG.statsdueinvoicesbalance}:</td>
					<td><a href="clientarea.php?action=invoices">{$clientsstats.dueinvoicesbalance}</a>
					</td>
					<td><a href="clientarea.php?action=invoices" title="{$LANG.invoices}"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
					</td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-plus-sign"> </span> {$LANG.statscreditbalance}:</td>
					<td><a href="clientarea.php?action=addfunds">{$clientsstats.creditbalance}</a>
					</td>
					<td><a href="clientarea.php?action=addfunds" title="{$LANG.addfunds}"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a> 
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-sm-6">
		<h4 style="margin-left:5px;"><span class="badge badge-circle-sm"><span class="glyphicon glyphicon-user"></span></span> {$LANG.accountinfo}</h4>
		<div class="well">
			<table class="table">
				<tr>
					<td><span class="glyphicon glyphicon-user"></span> {$clientsdetails.firstname} {$clientsdetails.lastname}</td>
					<td><a href="clientarea.php?action=details" title="{$LANG.editaccountdetails}"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-envelope"></span> {$clientsdetails.email}</td>
					<td><a href="clientarea.php?action=emails" title="{$LANG.navemailssent}"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></td>
				</tr>
			</table>
		</div>
	</div> 
</div>
{if $announcements}
<div class="alert alert-white">
	<p><span class="glyphicon glyphicon-circle-arrow-right"></span> <strong>{$LANG.ourlatestnews}:</strong> {$announcements.0.text|strip_tags|truncate:100:'...'}
		<a href="announcements.php?id={$announcements.0.id}" class="btn btn-default btn-xs pull-right">{$LANG.more}</a>
	</p>
</div>{/if} {if $ccexpiringsoon}
<div class="alert alert-danger">
	<p><strong>{$LANG.ccexpiringsoon}:</strong> {$LANG.ccexpiringsoondesc|sprintf2:'
		<a href="clientarea.php?action=creditcard" class="btn btn-danger btn-xs pull-right">':'</a>'}</p>
	</div>{/if} {if $clientsstats.incredit}
	<div class="alert alert-success">
		<p><span class="glyphicon glyphicon-plus-sign"></span> <strong>{$LANG.availcreditbal}:</strong> {$LANG.availcreditbaldesc|sprintf2:$clientsstats.creditbalance}</p>
	</div>{/if} {if $clientsstats.numoverdueinvoices>0}
	<div class="alert alert-block alert-danger">
		<h4><span class="glyphicon glyphicon-exclamation-sign"></span> {$LANG.youhaveoverdueinvoices|sprintf2:$clientsstats.numoverdueinvoices}<a href="clientarea.php?action=masspay&amp;all=true" class="btn btn-sm btn-danger pull-right">{$LANG.invoicespaynow}</a></h4>
		</div>{/if} {foreach from=$addons_html item=addon_html}
		<div style="margin: 15px 0;">{$addon_html}</div>{/foreach}
		<div class="row">
			<div class="col-lg-12">			
				<a class="btn btn-default btn-sm pull-right" href="submitticket.php"><span class="glyphicon glyphicon-tag" style="color:#5cb85c"></span> {$LANG.opennewticket}</a>
				<h4 style="margin-left:5px;"><span class="badge badge-circle badge-success">{$clientsstats.numactivetickets}</span> {$LANG.supportticketsopentickets}</h4>
				<div class="well well-sm">{if in_array('tickets',$contactpermissions)}
					<table class="table table-data table-hover">
						<thead>
							<tr>
								<th>{$LANG.supportticketssubject}</th>
								<th class="hidden-sm hidden-xs">{$LANG.supportticketsdepartment}</th>
								<th class="hidden-sm hidden-xs">{$LANG.supportticketsticketurgency}</th>
								<th class="hidden-sm hidden-xs">{$LANG.supportticketsticketlastupdated}</th>								
								<th></th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$tickets item=ticket}
							<tr>
								<td>
									<button type="button" class="btn btn-default btn-xs disabled" style="margin-right:5px;">{$ticket.status}</button><a href="viewticket.php?tid={$ticket.tid}&amp;c={$ticket.c}">{$ticket.subject}</a>
									<ul	class="cell-inner-list">
										<li class="visible-sm visible-xs"><span class="item-title">{$LANG.supportticketsticketlastupdated} : </span>{$ticket.lastreply}</li>
										<li class="visible-sm visible-xs"><span class="item-title">{$LANG.supportticketsdepartment}: </span>{$ticket.department}</li>
										<li class="visible-sm visible-xs"><span class="item-title">{$LANG.supportticketsticketurgency}: </span>{$ticket.urgency}</li>
									</ul>
								</td>
								<td class="hidden-sm hidden-xs">{$ticket.department}</td>
								<td class="hidden-sm hidden-xs">{$ticket.urgency}</td>
								<td class="hidden-sm hidden-xs">{$ticket.lastreply}</td>
								<td><a href="viewticket.php?tid={$ticket.tid}&amp;c={$ticket.c}"><span class="glyphicon glyphicon-chevron-right"></span></a>
								</td>
							</tr>
							{foreachelse}
							<tr>
								<td colspan="5" class="norecords">{$LANG.norecordsfound}</td>
							</tr>{/foreach}
							</tbody>
						</table>
						{/if}
						</div>
						</div>
						</div>
						<div class="row">
							<div class="col-lg-12">		
								{if in_array('invoices',$contactpermissions)}
								<a href="clientarea.php?action=masspay&amp;all=true" class="btn btn-default btn-sm pull-right"><span class="glyphicon glyphicon-ok-circle" style="color:#5cb85c"></span> {$LANG.masspayall}</a>
								<h4  style="margin-left:5px;"><span class="badge badge-circle badge-important">{$clientsstats.numdueinvoices}</span> {$LANG.invoicesdue}</h4>
								<div class="well well-sm">
									<form method="post" action="clientarea.php?action=masspay">
										<table class="table table-data table-hover">
											<thead>
												<tr>{if $masspay}
													<th class="cell-checkbox">
														<input type="checkbox" onclick="toggleCheckboxes('invids')" />
													</th>{/if}
													<th>{$LANG.invoicestitle}</th>
													<th class="text-center hidden-sm hidden-xs" style="white-space: nowrap;">{$LANG.invoicesdatecreated}</th>
													<th class="text-center hidden-sm hidden-xs">{$LANG.invoicesdatedue}</th>
													<th class="text-center hidden-sm hidden-xs">{$LANG.invoicesstatus}</th>
													<th class="text-right hidden-sm hidden-xs">{$LANG.invoicestotal}</th>
													<th class="cell-view"></th>
												</tr>
											</thead>
											<tbody>{foreach from=$invoices item=invoice}
												<tr>{if $masspay}
													<td class="cell-checkbox">
														<input type="checkbox" name="invoiceids[]" value="{$invoice.id}" class="invids"
														/>
													</td>{/if}
													<td><a href="viewinvoice.php?id={$invoice.id}" target="_blank" class="item-title">{$invoice.invoicenum}</a>
														<ul
														class="cell-inner-list visible-sm visible-xs">
														<li><span class="label label-{$invoice.rawstatus} label-danger">{$invoice.statustext}</span>
														</li>
														<li><span class="item-title">{$LANG.invoicestotal} : </span>{$invoice.total}</li>
														<li><span class="item-title">{$LANG.invoicesdatecreated} : </span>{$invoice.datecreated}</li>
														<li><span class="item-title">{$LANG.invoicesdatedue} : </span>{$invoice.datedue}</li>
													</ul>
												</td>
												<td class="text-center hidden-sm hidden-xs">{$invoice.datecreated}</td>
												<td class="text-center hidden-sm hidden-xs">{$invoice.datedue}</td>
												<td class="text-center hidden-sm hidden-xs"><span class="label label-{$invoice.rawstatus} label-danger">{$invoice.statustext}</span>
												</td>
												<td class="text-right hidden-sm hidden-xs">{$invoice.total}</td>
												<td class="cell-view"><a href="viewinvoice.php?id={$invoice.id}" target="_blank"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
												</td>
											</tr>{foreachelse}
											<tr>
												<td colspan="{if $masspay}7{else}6{/if}" class="norecords">{$LANG.norecordsfound}</td>
											</tr>{/foreach}</tbody>{if $masspay}
											<tfoot>
												<tr>
													<td class="cell-checkbox"><input type="checkbox" onclick="toggleCheckboxes('invids')" class="invids" /></td>
													<td colspan="5" class=""><input type="submit" name="masspayselected" value="{$LANG.masspayselected}" class="btn btn-default btn-sm" /></td><td class="hidden-sm"></td>
												</tr>
											</tfoot>{/if}
										</table>
									</form>
								</div>{/if}
							</div>
						</div>
						{if $files}
						<h3>{$LANG.clientareafiles}</h3>
						<div class="row">
							<div class="form-group">{foreach from=$files item=file}
								<div class="col-lg-6"><div class="well well-sm">
									<a href="dl.php?type=f&amp;id={$file.id}" class="fontsize2"><h4><span class="glyphicon glyphicon-floppy-disk"></span> {$file.title}</h4></a>
									<p>{$LANG.clientareafilesdate}: {$file.date}</p></div></div>{/foreach}</div>
								</div>{/if}

  <div class="modal fade" id="qsl" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">{$LANG.quickserverlogins}</h4>
      </div>
     {if $showqsl}               
     {if in_array('manageproducts',$contactpermissions)}
     {php}
     // Show an error if the login failed
     if(($_REQUEST['failed'] == "1") or ($error == 1)) {
     echo '<div class="alert alert-danger">'.$this->_tpl_vars['LANG']['loginattemptfailed'].'</div>';
   }
   {/php}
   {foreach from=$quickserverlogin item=qsl}
   <ul class="list-group">
    <li class="list-group-item"><a href="clientarea.php?action=productdetails&id={$qsl.id}">{$qsl.domain}</a><span class="pull-right">{$qsl.code|replace:'class="button"':' class="btn btn-info btn-xs"'|replace:'class="modulebutton"':' class="btn btn-info btn-xs"'}</span></li>
    {if $showqslusage}
    {literal}
    <script type="text/javascript">
      jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function(){
          $(this).easyPieChart({
            scaleColor: false,
            lineCap: 'butt',
            barColor: '#495b79',
            trackColor: '#dddddd',
            lineWidth: '3',
            animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
            size: '39',
          });
        })
      })
    </script>   
    {/literal}
    <li class="list-group-item">
      <div class="row">
        <div class="infobox-small col-md-6">
          <div class="infobox-progress">
            <div class="easy-pie-chart percentage" data-percent="{$qsl.diskpercent}" data-size="49" style="height: 49px; width: 49px; line-height: 48px;">
              <span class="percent">{$qsl.diskpercent}</span>
              <canvas height="49" width="49"></canvas></div>
              </div>
            <div class="infobox-data">
              <span class="infobox-text">{$LANG.clientareadiskusage}</span>
              <div class="infobox-content">
                {$qsl.diskusage}MB {$LANG.clientareaused}
              </div>
            </div>
          </div>
          <div class="infobox-small col-md-6">
            <div class="infobox-progress">
              <div class="easy-pie-chart percentage" data-percent="{$qsl.bwpercent}" data-size="49" style="height: 49px; width: 49px; line-height: 48px;">
                <span class="percent">{$qsl.bwpercent}</span>
                <canvas height="49" width="49"></canvas></div>
              </div>
              <div class="infobox-data">
                <span class="infobox-text">{$LANG.clientareabwusage}</span>
                <div class="infobox-content">
                  {$qsl.bwusage}MB {$LANG.clientareaused}
                </div>
              </div>
            </div>
          </div>
        </li>
        {/if}   
      </ul>
      {foreachelse}
      <ul class="list-group">
        <li class="list-group-item">{$LANG.norecordsfound}</li>  
      </ul>
      {/foreach}
      {/if}
      {/if}
    </div>
    </div>
  </div>							