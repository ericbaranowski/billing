{include file="$template/pageheader.tpl" title=$LANG.quotestitle desc=$LANG.quotesintro}

<div class="table_title">
  <strong>{$numitems}</strong> {$LANG.recordsfound}, {$LANG.page} <strong>{$pagenumber}</strong> {$LANG.pageof} <strong>{$totalpages}</strong>
</div>

<table class="table table-striped table-framed table-centered no-more-tables">
    <thead>
        <tr>
            <th{if $orderby eq "id"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=quotes&orderby=id">{$LANG.quotenumber}</a></th>
            <th{if $orderby eq "subject"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=quotes&orderby=subject">{$LANG.quotesubject}</a></th>
            <th{if $orderby eq "datecreated"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=quotes&orderby=datecreated">{$LANG.quotedatecreated}</a></th>
            <th{if $orderby eq "validuntil"} class="headerSort{$sort}"{/if}><a href="clientarea.php?action=quotes&orderby=validuntil">{$LANG.quotevaliduntil}</a></th>
            <th class="noborder {if $orderby eq "stage"}headerSort{$sort}{/if}"><a href="clientarea.php?action=quotes&orderby=stage">{$LANG.quotestage}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
{foreach from=$quotes item=quote}
        <tr>
            <td data-title="{$LANG.quotenumber}"><a href="dl.php?type=q&id={$quote.id}" target="_blank">{$quote.id}</a></td>
            <td data-title="{$LANG.quotesubject}">{$quote.subject}</td>
            <td data-title="{$LANG.quotedatecreated}">{$quote.datecreated}</td>
            <td data-title="{$LANG.quotevaliduntil}">{$quote.validuntil}</td>
            <td data-title="{$LANG.quotestage}">{$quote.stage}</td>
            <td class="textcenter"><input type="button" class="btn btn-info" value="{$LANG.quoteview}" onclick="window.location='viewquote.php?id={$quote.id}'" />&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-info" value="{$LANG.quotedownload}" onclick="window.location='dl.php?type=q&id={$quote.id}'" /></td>
        </tr>
{foreachelse}
        <tr>
            <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
        </tr>
{/foreach}
    </tbody>
</table>

<div class="pagination">
    <ul>
        <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}clientarea.php?action=quotes&amp;page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
        <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}clientarea.php?action=quotes&amp;page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
    </ul>
</div>

{include file="$template/clientarearecordslimit.tpl" clientareaaction=$clientareaaction}

<div class="clear"></div>