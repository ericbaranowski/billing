{include file="$template/pageheader.tpl" title=$LANG.clientareanavdomains desc=$LANG.clientareadomainsintro}

    <form method="post" class="form-inline"  action="clientarea.php?action=domains">
<div class="row">
 <div class="col-lg-4">
 <div class="input-group">
    <input type="text" name="q" value="{if $q}{$q}{else}{$LANG.searchenterdomain}{/if}" class="form-control input-medium appendedInputButton" onfocus="if(this.value=='{$LANG.searchenterdomain}')this.value=''" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div>
    <span class="help-block"><small>{$numitems} {$LANG.recordsfound}, {$LANG.page} {$pagenumber} {$LANG.pageof} {$totalpages}</small></span>
  </div>
</div>        
    </form>
{literal}
<script>
$(document).ready(function() {
	$(".setbulkaction").click(function(event) {
	  event.preventDefault();
	  $("#bulkaction").val($(this).attr('id'));
	  $("#bulkactionform").submit();
	});
});
</script>
{/literal}
<form method="post" id="bulkactionform" action="clientarea.php?action=bulkdomain">
<input id="bulkaction" name="update" type="hidden" />

<table class="table table-striped table-framed">
    <thead>
        <tr>
            <th class="textcenter"><input type="checkbox" onclick="toggleCheckboxes('domids')" /></th>
            <th{if $orderby eq "domain"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=domains{if $q}&q={$q}{/if}&orderby=domain">{$LANG.clientareahostingdomain}</a></th>
            <th{if $orderby eq "regdate"} class="headerSort{$sort} hidden-sm hidden-xs"{else} class="hidden-sm hidden-xs"{/if}><a href="clientarea.php?action=domains{if $q}&q={$q}{/if}&orderby=regdate">{$LANG.clientareahostingregdate}</a></th>
            <th{if $orderby eq "nextduedate"} class="headerSort{$sort} hidden-xs"{else} class="hidden-xs"{/if}><a href="clientarea.php?action=domains{if $q}&q={$q}{/if}&orderby=nextduedate">{$LANG.clientareahostingnextduedate}</a></th>
            <th{if $orderby eq "autorenew"} class="headerSort{$sort} hidden-sm hidden-xs"{else} class="hidden-sm hidden-xs"{/if}><a href="clientarea.php?action=domains{if $q}&q={$q}{/if}&orderby=autorenew">{$LANG.domainsautorenew}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
{foreach key=num item=domain from=$domains}
        <tr>
            <td class="textcenter"><input type="checkbox" name="domids[]" class="domids" value="{$domain.id}" /></td>
            <td><span class="label {$domain.rawstatus}">{$domain.statustext}</span> <a href="http://{$domain.domain}/" target="_blank">{$domain.domain}</a>
            <ul class="cell-inner-list visible-sm visible-xs">
            <li><span class="item-title">{$LANG.clientareahostingnextduedate} : </span>{$domain.nextduedate}</li>
            <li><span class="item-title">{$LANG.clientareahostingregdate} : </span>{$domain.registrationdate}</li>                                      
            <li><span class="item-title">{$LANG.domainsautorenew} : </span>{if $domain.autorenew}{$LANG.domainsautorenewenabled}{else}{$LANG.domainsautorenewdisabled}{/if}</li>
            </ul>
            </td>
            <td class="hidden-sm hidden-xs">{$domain.registrationdate}</td>
            <td class="hidden-xs">{$domain.nextduedate}</td>
            <td class="hidden-sm hidden-xs">{if $domain.autorenew}{$LANG.domainsautorenewenabled}{else}{$LANG.domainsautorenewdisabled}{/if}</td>
            <td>
                <div class="btn-group pull-right">
                <a class="btn btn-default" href="clientarea.php?action=domaindetails&id={$domain.id}">{$LANG.managedomain}</a>
                {if $domain.rawstatus == "active"}
                <a class="btn btn-default dropdown-toggle hidden-xs" href="#" data-toggle="dropdown"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="clientarea.php?action=domaindetails&id={$domain.id}#tab3"><span class="glyphicon glyphicon-globe"></span> {$LANG.domainmanagens}</a></li>
                    <li><a href="clientarea.php?action=domaincontacts&domainid={$domain.id}"><span class="glyphicon glyphicon-user"></span> {$LANG.domaincontactinfoedit}</a></li>
                    <li><a href="clientarea.php?action=domaindetails&id={$domain.id}#tab2"><span class="glyphicon glyphicon-globe"></span> {$LANG.domainautorenewstatus}</a></li>
                    <li class="divider"></li>
                    <li><a href="clientarea.php?action=domaindetails&id={$domain.id}"><span class="glyphicon glyphicon-pencil"></span> {$LANG.managedomain}</a></li>
                </ul>
                {/if}
                </div>
            </td>
        </tr>
{foreachelse}
        <tr>
        <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
        </tr>
{/foreach}
    </tbody>
</table>

<div class="btn-group">
<a class="btn btn-default" href="#" data-toggle="dropdown">{$LANG.withselected}</a>
<a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown"><span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="#" id="nameservers" class="setbulkaction"><span class="glyphicon glyphicon-globe"></span> {$LANG.domainmanagens}</a></li>
    <li><a href="#" id="autorenew" class="setbulkaction"><span class="glyphicon glyphicon-refresh"></span> {$LANG.domainautorenewstatus}</a></li>
    <li><a href="#" id="reglock" class="setbulkaction"><span class="glyphicon glyphicon-lock"></span> {$LANG.domainreglockstatus}</a></li>
    <li><a href="#" id="contactinfo" class="setbulkaction"><span class="glyphicon glyphicon-user"></span> {$LANG.domaincontactinfoedit}</a></li>
    {if $allowrenew}<li><a href="#" id="renew" class="setbulkaction"><span class="glyphicon glyphicon-repeat"></span> {$LANG.domainmassrenew}</a></li>{/if}
</ul>
</div>
</form>
{include file="$template/clientarearecordslimit.tpl" clientareaaction=$clientareaaction}
    <ul class="pagination">
        <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}clientarea.php?action=domains{if $q}&q={$q}{/if}&amp;page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
        <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}clientarea.php?action=domains{if $q}&q={$q}{/if}&amp;page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
    </ul>