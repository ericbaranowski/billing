{if $affiliatesystemenabled}

{include file="$template/pageheader.tpl" title=$LANG.affiliatesactivate}

<h2>{$LANG.affiliatesignuptitle}</h2>
<div class="affsignup">
<p class="step step1"><span class="stepbadge">1</span>{$LANG.affiliatesignupintro}</p>

<ul>
<li class="step step2"><span class="stepbadge">2</span>{$LANG.affiliatesignupinfo1}</li>
<li class="step step3"><span class="stepbadge">3</span>{$LANG.affiliatesignupinfo2}</li>
<br />
<li>{$LANG.affiliatesignupinfo3}</li>
</ul>

<form method="post" action="affiliates.php">
<input type="hidden" name="activate" value="true" />
<p align="center"><input type="submit" value="{$LANG.affiliatesactivate}" class="btn btn-success" /></p>
</form>

{else}

{include file="$template/pageheader.tpl" title=$LANG.affiliatestitle}

<div class="alert alert-warning">
    <p>{$LANG.affiliatesdisabled}</p>
</div>

</div>

{/if}