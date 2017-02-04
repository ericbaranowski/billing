{if $error}

<p>{$LANG.supportticketinvalid}</p>

{elseif $stillopen}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

<div class="alert alert-danger">
    <p><strong>{$LANG.feedbackclosed}</strong></p>
</div>


<p><input type="button" value="{$LANG.returnclient}" onclick="window.location='clientarea.php'" class="btn btn-default" /></p>


{elseif $feedbackdone}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}
<div class="alert alert-success textcenter">
    <p><strong>{$LANG.feedbackprovided}</strong></p>
</div>

<p>{$LANG.feedbackthankyou}</p>

<input type="button" value="{$LANG.returnclient}" onclick="window.location='clientarea.php'" class="btn btn-default" />



{elseif $success}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}


<div class="alert alert-success">
    <p><strong>{$LANG.feedbackreceived}</strong></p>
    <p>{$LANG.feedbackthankyou}</p>
</div>

<p class="textcenter"><input type="button" value="{$LANG.returnclient}" onclick="window.location='clientarea.php'" class="btn btn-default" /></p>

{else}

{include file="$template/pageheader.tpl" title=$LANG.ticketfeedbacktitle|cat:' #'|cat:$tid}

{if $errormessage}
<div class="alert alert-danger">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}
<div class="panel panel-default">
  <div class="panel-body">
<dl class="dl-horizontal">
  <dt>{$LANG.feedbackopenedat}</dt>
  <dd>{$opened}</dd>
  <dt>{$LANG.feedbacklastreplied}</dt>
  <dd>{$lastreply}</dd>
  <dt>{$LANG.feedbackstaffinvolved}</dt>
  <dd>{foreach from=$staffinvolved item=staff}{$staff}, {foreachelse}{$LANG.none}{/foreach}</dd>
  <dt>{$LANG.feedbacktotalduration}</dt>
  <dd>{$duration}</dd>
</dl>
<a class="btn btn-default btn-sm" href="viewticket.php?tid={$tid}&c={$c}">{$LANG.feedbackclickreview}</a>
</div>
</div>

<form method="post" action="{$smarty.server.PHP_SELF}?tid={$tid}&c={$c}&feedback=1">
    <input type="hidden" name="validate" value="true" />
    {foreach from=$staffinvolved key=staffid item=staff}
        <p>{$LANG.feedbackpleaserate1} <strong>{$staff}</strong> {$LANG.feedbackhandled}:</p>
        <div class="well well-sm">
        <div class="row">        
            <div class="col-sm-1"><h4><i class="fa fa-thumbs-o-down"></i></h4></div>
            {foreach from=$ratings item=rating}
            <div class="col-sm-1"><div class="radio"><label><input type="radio" name="rate[{$staffid}]" value="{$rating}"{if $rate.$staffid eq $rating} checked{/if} />{$rating}</label></div></div>
            {/foreach}
            <div class="col-sm-1"><h4><i class="fa fa-thumbs-o-up"></i> </h4></div>
                </div>
                </div>
        <div class="form-group">
        <label for="feedbackcomment[{$staffid}]">{$LANG.feedbackpleasecomment1} <strong>{$staff}</strong> {$LANG.feedbackhandled}</label>
        <textarea class="form-control" id="feedbackcomment[{$staffid}]" name="comments[{$staffid}]" rows="3">{$comments.$staffid}</textarea>
        </div>
    {/foreach}
    <hr>
    <div class="form-group">
    <label for="feedbackimprove">{$LANG.feedbackimprove}</label>
    <textarea class="form-control" id="feedbackimprove" name="comments[generic]" rows="3">{$comments.generic}</textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="save" value="{$LANG.clientareasavechanges}">
        <input class="btn btn-default" type="reset" value="{$LANG.cancel}">
    </div>
</form>
{/if}