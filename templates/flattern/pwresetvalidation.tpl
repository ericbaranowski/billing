{include file="$template/pageheader.tpl" title=$LANG.pwreset}

{if $invalidlink}

<div class="alert alert-danger">
  <p class="textcenter">{$invalidlink}</p>
</div>
{elseif $success}
<div class="alert alert-success">
  <p class="textcenter bold">{$LANG.pwresetvalidationsuccess}</p>
</div>
<p class="textcenter">{$LANG.pwresetsuccessdesc|sprintf2:'<a href="clientarea.php">':'</a>'}</p>

{else}

{if $errormessage}

<div class="alert alert-danger">
  <p class="textcenter">{$errormessage}</p>
</div>

{/if}

<form class="form-horizontal" method="post" action="{$smarty.server.PHP_SELF}?action=pwreset">
  <input type="hidden" name="key" id="key" value="{$key}" />
  <h4>{$LANG.pwresetenternewpw}</h4>

  <div class="form-group">
   <label class="col-sm-3 control-label" for="password">{$LANG.newpassword}</label>
   <div class="col-sm-9">
    <input type="password" class="form-control" name="newpw" id="password" />
  </div>
</div>

<div class="form-group">
 <label class="col-sm-3 control-label" for="confirmpw">{$LANG.confirmnewpassword}</label>
 <div class="col-sm-9">
  <input type="password" class="form-control" name="confirmpw" id="confirmpw" />
</div>
</div>

<div class="form-group">
 <label class="col-sm-3 control-label" for="passstrength">{$LANG.pwstrength}</label>
 <div class="col-sm-9">
  {include file="$template/pwstrength.tpl"}
</div>
</div>

<div class="form-group">
 <div class="col-sm-offset-3 col-sm-9">
  <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />
  <input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
</div>
</div>
</form>

{/if}