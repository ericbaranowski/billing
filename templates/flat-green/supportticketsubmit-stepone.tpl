{include file="$template/pageheader.tpl" title=$LANG.navopenticket}

<p>{$LANG.supportticketsheader}</p>

<br />

<ul class="departments">
  {foreach from=$departments item=department}
  <li><a href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$department.id}"><strong>{$department.name}</strong>{if $department.description}<br /><span class="description">{$department.description}</span>{/if}</a></li>
  {foreachelse}
    <div class="alert alert-block alert-error textcenter">
        {$LANG.nosupportdepartments}
    </div>
  {/foreach}        
</ul>

<br />