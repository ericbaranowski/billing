{include file="$template/pageheader.tpl" title=$LANG.invoices desc=$LANG.invoicesintro}

<div class="table_title">
  <strong>{$numitems}</strong> {$LANG.recordsfound}, {$LANG.page} <strong>{$pagenumber}</strong> {$LANG.pageof} <strong>{$totalpages}</strong>
  <div class="searchbox2">
<span class="invoicetotal">{$LANG.invoicesoutstandingbalance}: <span class="text{if $nobalance}green{else}red{/if}">{$totalbalance}</span></span>{if $masspay}&nbsp; <a href="clientarea.php?action=masspay&all=true" class="btn btn-success" style="float:none;margin:0;"> {$LANG.masspayall}</a>{/if}
</div>
</div>


<form method="post" action="clientarea.php?action=masspay">
<table class="table table-striped table-framed table-centered no-more-tables">
    <thead>
        <tr>
            <th{if $orderby eq "id"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=id">{$LANG.invoicestitle}</a></th>
            <th{if $orderby eq "date"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=date">{$LANG.invoicesdatecreated}</a></th>
            <th{if $orderby eq "duedate"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=duedate">{$LANG.invoicesdatedue}</a></th>
            <th{if $orderby eq "total"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=total">{$LANG.invoicestotal}</a></th>
            <th{if $orderby eq "status"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=invoices&orderby=status">{$LANG.invoicesstatus}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
{foreach from=$invoices item=invoice}
        <tr>
            <td data-title="{$LANG.invoicestitle}"><a href="viewinvoice.php?id={$invoice.id}" target="_blank"><strong>{$invoice.invoicenum}</strong></a></td>
            <td data-title="{$LANG.invoicesdatecreated}">{$invoice.datecreated}</td>
            <td data-title="{$LANG.invoicesdatedue}">{$invoice.datedue}</td>
            <td data-title="{$LANG.invoicestotal}">{$invoice.total}</td>
            <td data-title="{$LANG.invoicesstatus}"><span class="label {$invoice.rawstatus}">{$invoice.statustext}</span></td>
            <td class="textcenter"><a href="viewinvoice.php?id={$invoice.id}" target="_blank" class="btn">{$LANG.invoicesview}</a></td>
        </tr>
{foreachelse}
        <tr>
            <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
        </tr>
{/foreach}
    </tbody>
</table>
</form>

<div class="pagination">
    <ul>
        <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}clientarea.php?action=invoices{if $q}&q={$q}{/if}&amp;page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
        <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}clientarea.php?action=invoices{if $q}&q={$q}{/if}&amp;page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
    </ul>
</div>

{include file="$template/clientarearecordslimit.tpl" clientareaaction=$clientareaaction}

<div class="clear"></div>