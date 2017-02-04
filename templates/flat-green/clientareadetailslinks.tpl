<div>
    <ul class="nav nav-tabs">

        <li {if $clientareaaction eq "details"}class="active"{/if}><a href="clientarea.php?action=details">{$LANG.clientareanavdetails}</a></li>

        {if $condlinks.updatecc}<li {if $clientareaaction eq "creditcard"}class="active"{/if}><a href="{$smarty.server.PHP_SELF}?action=creditcard">{$LANG.clientareanavccdetails}</a></li>{/if}

        <li {if $clientareaaction eq "contacts" ||  $clientareaaction eq "addcontact"}class="active"{/if}><a href="{$smarty.server.PHP_SELF}?action=contacts">{$LANG.clientareanavcontacts}</a></li>

        <li {if $clientareaaction eq "changepw"}class="active"{/if}><a href="{$smarty.server.PHP_SELF}?action=changepw">{$LANG.clientareanavchangepw}</a></li>

        {if $condlinks.updatesq}<li {if $clientareaaction eq "changesq"}class="active"{/if}><a href="{$smarty.server.PHP_SELF}?action=changesq">{$LANG.clientareanavsecurityquestions}</a></li>{/if}

    </ul>
</div>
<div class="clear"></div>