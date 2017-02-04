{include file="$template/pageheader.tpl" title=$LANG.clientareanavsupporttickets desc=$LANG.supportticketsintro}

<div class="table_title">
  <strong>{$numitems}</strong> {$LANG.recordsfound}, {$LANG.page} <strong>{$pagenumber}</strong> {$LANG.pageof} <strong>{$totalpages}</strong>
  <div class="searchbox2">
    <form method="post" action="supporttickets.php">
      <div class="input-append">
        <input type="text" name="searchterm" value="{if $q}{$q}{else}{$LANG.searchtickets}{/if}" class="input-medium appendedInputButton" onfocus="if(this.value=='{$LANG.searchtickets}')this.value=''" /><button type="submit" class="btn btn-info">{$LANG.searchfilter}</button>
      </div>
    </form>
  </div>
</div>

<table class="table table-striped table-framed table-centered no-more-tables">
    <thead>
        <tr>
            <th{if $orderby eq "date"} class="headerSort{$sort}"{/if}><a href="supporttickets.php?orderby=date">{$LANG.supportticketsdate}</a></th>
            <th{if $orderby eq "dept"} class="headerSort{$sort}"{/if}><a href="supporttickets.php?orderby=dept">{$LANG.supportticketsdepartment}</a></th>
            <th{if $orderby eq "subject"} class="headerSort{$sort}"{/if}><a href="supporttickets.php?orderby=subject">{$LANG.supportticketssubject}</a></th>
            <th{if $orderby eq "status"} class="headerSort{$sort}"{/if}><a href="supporttickets.php?orderby=status">{$LANG.supportticketsstatus}</a></th>
            <th{if $orderby eq "lastreply"} class="headerSort{$sort}"{/if}><a href="supporttickets.php?orderby=lastreply">{$LANG.supportticketsticketlastupdated}</a></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
{foreach key=num item=ticket from=$tickets}
        <tr>
            <td data-title="{$LANG.supportticketsdate}">{$ticket.date}</td>
            <td data-title="{$LANG.supportticketsdepartment}">{$ticket.department}</td>
            <td data-title="{$LANG.supportticketssubject}"><div align="left"><a href="viewticket.php?tid={$ticket.tid}&amp;c={$ticket.c}"><img src="images/article.gif" alt="" border="0" /> {if $ticket.unread}<strong>{/if}#{$ticket.tid} - {$ticket.subject}{if $ticket.unread}</strong>{/if}</a></div></td>
            <td data-title="{$LANG.supportticketsstatus}">{$ticket.status}</td>
            <td data-title="{$LANG.supportticketsticketlastupdated}">{$ticket.lastreply}</td>
            <td class="textcenter"><a href="viewticket.php?tid={$ticket.tid}&c={$ticket.c}" class="btn btn-inverse">{$LANG.supportticketsviewticket}</a></td>
        </tr>
{foreachelse}
        <tr>
            <td colspan="7" class="textcenter">{$LANG.norecordsfound}</td>
        </tr>
{/foreach}
    </tbody>
</table>

<div class="pagination">
    <ul>
        <li class="prev{if !$prevpage} disabled{/if}"><a href="{if $prevpage}supporttickets.php?page={$prevpage}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></li>
        <li class="next{if !$nextpage} disabled{/if}"><a href="{if $nextpage}supporttickets.php?page={$nextpage}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></li>
    </ul>
</div>

{include file="$template/clientarearecordslimit.tpl" clientareaaction=$clientareaaction}

<div class="clear"></div>