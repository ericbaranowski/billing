{include file="$template/pageheader.tpl" title=$LANG.knowledgebasetitle}
<form method="post" action="knowledgebase.php?action=search">
  <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
      <div class="input-group">
       <input class="form-control" name="search" type="text" value="{$LANG.kbquestionsearchere}" onfocus="this.value=(this.value=='{$LANG.kbquestionsearchere}') ? '' : this.value;" onblur="this.value=(this.value=='') ? '{$LANG.kbquestionsearchere}' : this.value;"/>
       <span class="input-group-btn">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
      </span>
    </div>               
  </div>
</div>
</div>
</form>
{include file="$template/subheader.tpl" title=$LANG.knowledgebasecategories}
<div class="row">
  {foreach name=kbasecats from=$kbcats item=kbcat}
  <div class="col-md-4">
    <h5><span class="glyphicon glyphicon-folder-close"></span> <a href="{if $seofriendlyurls}knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}">{$kbcat.name}</a> <span class="badge">{$kbcat.numarticles}</span></h5>
    <p>{$kbcat.description}</p>
  </div>
  {if ($smarty.foreach.kbasecats.index+1) is div by 3}<div class="row" style="margin-bottom:15px;"></div>
  {/if}
  {/foreach}
</div>
{include file="$template/subheader.tpl" title=$LANG.knowledgebasepopular}
<div class="row">
  <div class="col-lg-12">
    <div class="list-group">
      {foreach from=$kbmostviews item=kbarticle}
      <a href="{if $seofriendlyurls}knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}" class="list-group-item">
        <h4 class="list-group-item-heading"><span class="glyphicon glyphicon-file"></span> {$kbarticle.title}</h4>
        <p class="list-group-item-text">{$kbarticle.article|truncate:130:"..."}</p>
      </a>
	  <div class="info-aa">
	    <a href="http://iserverhosting.com">iserverhosting.com</a>
	  </div>
      {/foreach}
    </div>
  </div>
</div>