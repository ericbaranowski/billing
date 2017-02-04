<!-- Template Start includes/breadcrumb.tpl -->
<ol class="breadcrumb" id="whmp-breadcrumbs_breadcrumb">
    {foreach $breadcrumb as $item}
        <li{if $item@last} class="active"{/if}>
            {if !$item@last}<a href="{$item.link}">{/if}
            {$item.label}
            {if !$item@last}</a>{/if}
        </li>
    {/foreach}
</ol>
<!-- Template End includes/breadcrumb.tpl -->
