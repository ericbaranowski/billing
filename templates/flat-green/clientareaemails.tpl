{include file="$template/pageheader.tpl" title=$LANG.clientareaemails desc=$LANG.emailstagline}

<div class="table_title">
  <strong>{$numitems}</strong> {$LANG.recordsfound}, {$LANG.page} <strong>{$pagenumber}</strong> {$LANG.pageof} <strong>{$totalpages}</strong>
</div>

<table class="table table-striped table-framed no-more-tables">
    <thead>
        <tr>
            <th{if $orderby eq "date"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=emails&orderby=date">{$LANG.clientareaemailsdate}</a></th>
            <th{if $orderby eq "subject"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=emails&orderby=subject">{$LANG.clientareaemailssubject}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
{foreach from=$emails item=email}
        <tr>
            <td data-title="{$LANG.clientareaemailsdate}">{$email.date}</td>
            <td data-title="{$LANG.clientareaemailssubject}">{$email.subject}</td>
            <td class="textcenter"><input type="button" class="btn btn-info" value="{$LANG.emailviewmessage}" onclick="popupWindow('viewemail.php?id={$email.id}','emlmsg',650,400)" /></td>
        </tr>
{foreachelse}
        <tr>
            <td colspan="3" class="textcenter">{$LANG.norecordsfound}</td>
        </tr>
{/foreach}
    </tbody>
</table>

<div class="pagination">
    <ul>
        <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}clientarea.php?action=emails&amp;page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
        <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}clientarea.php?action=emails&amp;page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
    </ul>
</div>
