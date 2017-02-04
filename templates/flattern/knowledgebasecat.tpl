{include file="$template/pageheader.tpl" title=$LANG.knowledgebasetitle}

<p><small>{$breadcrumbnav}</small></p>
<div class="row">
  <div class="col-lg-12">
  <div class="form-group">
    <form method="post" action="knowledgebase.php?action=search">
    <div class="input-group">
     <input class="form-control" name="search" type="text" value="{$LANG.kbquestionsearchere}" onfocus="this.value=(this.value=='{$LANG.kbquestionsearchere}') ? '' : this.value;" onblur="this.value=(this.value=='') ? '{$LANG.kbquestionsearchere}' : this.value;"/>
     <span class="input-group-btn">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
 </span>
 </div> 
 </div>              
  </form>               
</div>
</div>
{if $kbcats}
{include file="$template/subheader.tpl" title=$LANG.knowledgebasecategories}
<div class="row">
  {foreach name=kbasecats from=$kbcats item=kbcat}
  <div class="col-lg-4">
    <h5><span class="glyphicon glyphicon-folder-close"></span> <a href="{if $seofriendlyurls}knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}">{$kbcat.name}</a> <span class="badge">{$kbcat.numarticles}</span></h5>
    {$kbcat.description}
  </div>
  {if ($smarty.foreach.kbasecats.index+1) is div by 3}<div class="row" style="margin-bottom:15px;"></div>
  {/if}
  {/foreach}
</div>
{/if}

{if $kbarticles}
{include file="$template/subheader.tpl" title=$LANG.knowledgebasearticles}
<div class="row">
  <div class="col-lg-12">
    <ul class="list-group">
      {foreach from=$kbarticles item=kbarticle}
      <li class="list-group-item"><h5><span class="glyphicon glyphicon-file"></span> <a href="{if $seofriendlyurls}knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}">{$kbarticle.title}</a></h5> <p>{$kbarticle.article|truncate:130:"..."}</p></li>
	  <div class="info-aa">
	    <a href="http://iserverhosting.com">iserverhosting.com</a>
	  </div>
      {/foreach}
      </ul>
     </div>
     </div>      
      {else}
      <p class="bg-info">{$LANG.knowledgebasenoarticles}</p>
    </ul>
{/if}