{include file="$template/pageheader.tpl" title=$LANG.knowledgebasetitle}

<p class="breadcrumb">{$breadcrumbnav}</p>

<div class="well">
    <div class="textcenter">
        <form method="post" action="knowledgebase.php?action=search" class="form-inline">
        <input type="hidden" name="catid" value="{$catid}" />
            <fieldset class="control-group">
              <div class="col85">
        	    <input class="bigfield" name="search" type="text" value="{if $searchterm}{$searchterm}{else}{$LANG.kbquestionsearchere}{/if}" onfocus="this.value=(this.value=='Have a question? Start your search here.') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Have a question? Start your search here.' : this.value;"/>
              </div>
              <div class="col15">
                <input type="submit" class="btn btn-large btn-primary" value="{$LANG.knowledgebasesearch}" />
              </div>
        	</fieldset>
        </form>
    </div>
</div>

{if $kbcats}
<br />

{include file="$template/subheader.tpl" title=$LANG.knowledgebasecategories}

<div class="row rowend rowbottom">
{foreach name=kbasecats from=$kbcats item=kbcat}
    <div class="col4 downloadcat">
        <div class="internalpadding">
            <img src="images/folder.gif" style="float:left;" />&nbsp;&nbsp; <a href="{if $seofriendlyurls}knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}" class="fontsize3"><strong>{$kbcat.name}</strong></a> &nbsp;({$kbcat.numarticles})<br />
            {$kbcat.description}
        </div>
    </div>
	{if ($smarty.foreach.kbasecats.index+1) is div by 3}
      <div class="clear"></div>
      </div>
      <div class="row rowend rowbottom">
    {/if}
{/foreach}
<div class="clear"></div>
</div>

{else}
<br />
{/if}


{include file="$template/subheader.tpl" title=$LANG.knowledgebasearticles}
<ul class="itemlist">
  {foreach from=$kbarticles item=kbarticle}
  <li class="internalpadding">
    <a href="{if $seofriendlyurls}knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}"><strong>{$kbarticle.title}</strong></a><br />
    {$kbarticle.article|truncate:100:"..."}
  </li>
  {foreachelse}
  <p class="fontsize2 textcenter">{$LANG.knowledgebasenoarticles}</p>
  {/foreach}
