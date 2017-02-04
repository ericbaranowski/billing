{include file="$template/pageheader.tpl" title=$LANG.clientareaproducts desc=$LANG.clientareaproductsintro}

<form method="post" class="form-inline" action="clientarea.php?action=products">
    <div class="row">
       <div class="col-md-4">
           <div class="input-group">
            <input type="text" class="form-control" name="q" value="{if $q}{$q}{else}{$LANG.searchenterdomain}{/if}" class="input-medium appendedInputButton" onfocus="if(this.value=='{$LANG.searchenterdomain}')this.value=''" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <span class="help-block"><small>{$numitems} {$LANG.recordsfound}, {$LANG.page} {$pagenumber} {$LANG.pageof} {$totalpages}</small></span>
    </div>
</div>        
    </form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th{if $orderby eq "status"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=products{if $q}&q={$q}{/if}&orderby=status">{$LANG.clientareastatus}</a></th>               
            <th{if $orderby eq "product"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=products{if $q}&q={$q}{/if}&orderby=product">{$LANG.orderproduct}</a></th>
            <th{if $orderby eq "price"} class="headerSort{$sort} hidden-sm hidden-xs"{else} class="hidden-sm hidden-xs"{/if}><a href="clientarea.php?action=products{if $q}&q={$q}{/if}&orderby=price">{$LANG.orderprice}</a></th>
            <th{if $orderby eq "billingcycle"} class="headerSort{$sort} hidden-sm hidden-xs"{else} class="hidden-sm hidden-xs"{/if}><a href="clientarea.php?action=products{if $q}&q={$q}{/if}&orderby=billingcycle">{$LANG.orderbillingcycle}</a></th>
            <th{if $orderby eq "nextduedate"} class="headerSort{$sort} hidden-xs"{else} class="hidden-xs"{/if}><a href="clientarea.php?action=products{if $q}&q={$q}{/if}&orderby=nextduedate">{$LANG.clientareahostingnextduedate}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$services item=service}
        <tr>
            <td><span class="label {$service.rawstatus}">{$service.statustext}</span></td>
            <td><strong>{$service.group} - {$service.product}</strong>{if $service.domain}<br><a href="http://{$service.domain}" target="_blank">{$service.domain}</a>{/if}
                <ul class="cell-inner-list visible-sm visible-xs">
                    <li><span class="item-title">{$LANG.orderbillingcycle} : </span>{$service.billingcycle}</li>
                    <li><span class="item-title">{$LANG.clientareahostingnextduedate}</span> : {$service.nextduedate}</li>                                                              
                    <li><span class="item-title">{$LANG.orderprice} : </span>{$service.amount}</li>
                </ul>
            </td>
            <td class="hidden-sm hidden-xs">{$service.amount}</td>
            <td class="hidden-sm hidden-xs">{$service.billingcycle}</td>
            <td class="hidden-xs">{$service.nextduedate}</td>
            <td><a href="{$smarty.server.PHP_SELF}?action=productdetails&amp;id={$service.id}"><span class="glyphicon glyphicon-chevron-right pull-right"></span></a></td>
        </td>
    </tr>
    {foreachelse}
    <tr>
        <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
    </tr>
    {/foreach}
</tbody>
</table>

{include file="$template/clientarearecordslimit.tpl" clientareaaction=$clientareaaction}

<ul class="pagination">
    <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}clientarea.php?action=products{if $q}&q={$q}{/if}&amp;page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
    <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}clientarea.php?action=products{if $q}&q={$q}{/if}&amp;page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
</ul>