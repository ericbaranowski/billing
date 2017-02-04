<!-- Template Start banned.tpl -->
<div class="alert alert-danger">
    <strong><i class="fa fa-gavel"></i> {$LANG.bannedyourip} {$ip} {$LANG.bannedhasbeenbanned}</strong>
    <ul>
        <li>{$LANG.bannedbanreason}: <strong>{$reason}</strong></li>
        <li>{$LANG.bannedbanexpires}: {$expires}</li>
    </ul>
</div>
<!-- Template End banned.tpl -->
