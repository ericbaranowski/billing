{include file="$template/pageheader.tpl" title=$LANG.knowledgebasetitle}

<div class="well">
    <div class="textcenter">
        <form method="post" action="knowledgebase.php?action=search" class="form-inline">
            <fieldset class="control-group">
              <div class="col85">
        	    <input class="bigfield" name="search" type="text" value="{$LANG.kbquestionsearchere}" onfocus="this.value=(this.value=='Have a question? Start your search here.') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Have a question? Start your search here.' : this.value;"/>
              </div>
              <div class="col15">
                <input type="submit" class="btn btn-large btn-primary" value="{$LANG.knowledgebasesearch}" />
              </div>
        	</fieldset>
        </form>
    </div>
</div>

<br />

{include file="$template/subheader.tpl" title=$LANG.knowledgebasecategories}

<div class="row rowend rowbottom">
{foreach name=kbasecats from=$kbcats item=kbcat}
    <div class="col4 downloadcat">
        <div class="internalpadding">
            <img src="images/folder.gif" style="float:left;" />&nbsp;&nbsp; <a href="{if $seofriendlyurls}knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}" class="fontsize3"><strong>{$kbcat.name}</strong></a> &nbsp;({$kbcat.numarticles})
            <p>{$kbcat.description}</p>
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


{include file="$template/subheader.tpl" title=$LANG.knowledgebasepopular}
<ul class="itemlist">
  {foreach from=$kbmostviews item=kbarticle}
  <li class="internalpadding">
    <a href="{if $seofriendlyurls}knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}" class="fontsize2"><strong>{$kbarticle.title}</strong></a><br />
    {$kbarticle.article|truncate:100:"..."}
  </li>
{/foreach}
</ul>