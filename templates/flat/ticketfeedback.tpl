{if $error}

<p>{$LANG.supportticketinvalid}</p>

{elseif $stillopen}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

<br /><br />

<div class="alert alert-error textcenter">
    <p><strong>{$LANG.feedbackclosed}</strong></p>
</div>

<br /><br />

<p class="textcenter"><input type="button" value="Return to Client Area" onclick="window.location='clientarea.php'" class="btn" /></p>

<br /><br /><br /><br /><br />

{elseif $feedbackdone}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

<br /><br />

<div class="alert alert-success textcenter">
    <p><strong>{$LANG.feedbackprovided}</strong></p>
</div>

<p class="textcenter">{$LANG.feedbackthankyou}</p>

<br /><br />

<p class="textcenter"><input type="button" value="{$LANG.returnclient}" onclick="window.location='clientarea.php'" class="btn" /></p>

<br /><br /><br /><br /><br />

{elseif $success}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

<br /><br />

<div class="alert alert-success textcenter">
    <p><strong>{$LANG.feedbackreceived}</strong></p>
    <p>{$LANG.feedbackthankyou}</p>
</div>

<br /><br />

<p class="textcenter"><input type="button" value="{$LANG.returnclient}" onclick="window.location='clientarea.php'" class="btn" /></p>

<br /><br /><br /><br /><br />

{else}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

{if $errormessage}
<div class="alert alert-error">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}

<p>{$LANG.feedbackdesc}</p>

<div class="alert alert-warning">
    <p class="textcenter">[ <a href="viewticket.php?tid={$tid}&c={$c}">{$LANG.feedbackclickreview}</a> ]</p>
</div>

<br />

<table class="table table-framed">
<tr><td>{$LANG.feedbackopenedat}:</td><td><strong>{$opened}</strong></td></tr>
<tr><td>{$LANG.feedbacklastreplied}:</td><td><strong>{$lastreply}</strong></td></tr>
<tr><td>{$LANG.feedbackstaffinvolved}:</td><td><strong>{foreach from=$staffinvolved item=staff}{$staff}, {foreachelse}{$LANG.none}{/foreach}</strong></td></tr>
<tr><td>{$LANG.feedbacktotalduration}:</td><td><strong>{$duration}</strong></td></tr>
</table>

<form method="post" action="{$smarty.server.PHP_SELF}?tid={$tid}&c={$c}&feedback=1">
<input type="hidden" name="validate" value="true" />

{foreach from=$staffinvolved key=staffid item=staff}

<div class="ticketfeedbackstaffcont">

    <p class="margin0">{$LANG.feedbackpleaserate1} <strong>{$staff}</strong> {$LANG.feedbackhandled}: &nbsp;
    <select name="rate[{$staffid}]">
    {foreach from=$ratings item=rating}
    <option value="{$rating}"{if $rate.$staffid eq $rating} selected{/if}>{$rating}</option>
    {/foreach}
    </select>
    </p>

    <p>{$LANG.feedbackpleasecomment1} <strong>{$staff}</strong> {$LANG.feedbackhandled}.</p>

    <p class="textcenter"><textarea name="comments[{$staffid}]" rows="4" style="width:100%;">{$comments.$staffid}</textarea></p>

</div>

{/foreach}


<p>{$LANG.feedbackimprove}</p>

<p class="textcenter"><textarea name="comments[generic]" rows="4" style="width:100%;">{$comments.generic}</textarea></p>

<br />

<div class="form-actions">
    <input class="btn btn-primary" type="submit" name="save" value="{$LANG.clientareasavechanges}" />
    <input class="btn" type="reset" value="{$LANG.cancel}" />
</div>

</form>

{literal}
<style>
.ticketfeedbackstaffcont {
    margin: 10px auto;
    padding: 15px;
    width: 90%;
    background-color: #efefef;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    border-radius: 6px;
}
.ticketfeedbackrating {
    padding: 0 100px;
}
.ticketfeedbackrating .rate {
    float: left;
    padding: 0 10px;
    min-width: 30px;
    text-align: center;
}

</style>
{/literal}

{/if}