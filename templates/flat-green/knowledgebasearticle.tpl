{include file="$template/pageheader.tpl" title=$LANG.knowledgebasetitle}

<script language="javascript">
function addBookmark() {ldelim}
    if (window.sidebar) {ldelim}
        window.sidebar.addPanel('{$companyname} - {$kbarticle.title}', location.href,"");
    {rdelim} else if( document.all ) {ldelim}
        window.external.AddFavorite( location.href, '{$companyname} - {$kbarticle.title}');
    {rdelim} else if( window.opera && window.print ) {ldelim}
        return true;
    {rdelim}
{rdelim}
</script>

<p class="kbbreadcrumb">{$breadcrumbnav}</p>

<h2 class="kbtitle">{$kbarticle.title}</h2>

<div class="kbarticle itemtext internalpadding">{$kbarticle.text}</div>

<p style="float:right;"><img src="images/addtofavouritesicon.gif" alt="{$LANG.knowledgebasefavorites}" />&nbsp; <a href="#" onClick="addBookmark();return false">{$LANG.knowledgebasefavorites}</a> &nbsp;&nbsp; <img src="images/print.gif" alt="{$LANG.knowledgebaseprint}" />&nbsp; <a href="#" onclick="window.print();return false">{$LANG.knowledgebaseprint}</a></p>

<form method="post" action="knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}&amp;useful=vote">
<p>
{if $kbarticle.voted}
<strong>{$LANG.knowledgebaserating}</strong> {$kbarticle.useful} {$LANG.knowledgebaseratingtext} ({$kbarticle.votes} {$LANG.knowledgebasevotes})
{else}
<strong>{$LANG.knowledgebasehelpful}</strong> <select name="vote"><option value="yes">{$LANG.knowledgebaseyes}</option><option value="no">{$LANG.knowledgebaseno}</option></select> <input type="submit" value="{$LANG.knowledgebasevote}" class="btn" />
{/if}
</p>
</form>



{if $kbarticles}
<br />

{include file="$template/subheader.tpl" title=$LANG.knowledgebasealsoread}

<ul class="itemlist">
{foreach key=num item=kbarticle from=$kbarticles}
  <li class="internalpadding"><strong><a href="{if $seofriendlyurls}knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}">{$kbarticle.title}</a></strong>&nbsp; <span class="kbviews">({$LANG.knowledgebaseviews}: {$kbarticle.views})</span></li>
{/foreach}
</ul>
{/if}