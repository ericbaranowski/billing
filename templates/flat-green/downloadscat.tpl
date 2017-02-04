{include file="$template/pageheader.tpl" title=$LANG.downloadstitle}
<div class="downloads-info">
<div class="searchbox">
    <form method="post" action="downloads.php?action=search">
        <div class="input-append">
            <input type="text" name="q" value="{if $q}{$q}{else}{$LANG.downloadssearch}{/if}" class="input-medium appendedInputButton" onfocus="if(this.value=='{$LANG.downloadssearch}')this.value=''" /><button type="submit" class="btn btn-warning">{$LANG.search}</button>
        </div>
    </form>
</div>

<p>{$LANG.downloadsintrotext}</p>
</div>

{if $dlcats}

<br />

{include file="$template/subheader.tpl" title=$LANG.downloadscategories}

<div class="row rowend rowbottom">
{foreach name=dlcats from=$dlcats item=dlcat}
    <div class="col4">
        <div class="internalpadding">
            <img src="images/folder.gif" style="float:left;" />&nbsp;&nbsp; <a href="{if $seofriendlyurls}downloads/{$dlcat.id}/{$dlcat.urlfriendlyname}{else}downloads.php?action=displaycat&amp;catid={$dlcat.id}{/if}" class="fontsize3"><strong>{$dlcat.name}</strong></a> &nbsp;({$dlcat.numarticles})<br />
            {$dlcat.description}
        </div>
    </div>
    {if ($smarty.foreach.dlcats.index+1) is div by 4}
      <div class="clear"></div>
      </div>
      <div class="row rowend rowbottom">
    {/if}
{/foreach}
</div>

{else}
<br />
{/if}

{include file="$template/subheader.tpl" title=$LANG.downloadsfiles}

{if $downloads}

<ul class="itemlist downloads">
{foreach from=$downloads item=download}
  <li class="internalpadding">
    {$download.type} <a href="{$download.link}" class="fontsize2"><strong>{$download.title}{if $download.clientsonly} <img src="images/padlock.gif" alt="{$LANG.loginrequired}" />{/if}</strong></a><br />
    {$download.description}<br />
    <span class="lighttext">{$LANG.downloadsfilesize}: {$download.filesize}</span>
  </li>
{/foreach}
</ul>

{else}

<p class="textcenter fontsize2">{$LANG.downloadsnone}</p>

{/if}