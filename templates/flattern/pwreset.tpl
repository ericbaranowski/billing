{include file="$template/pageheader.tpl" title=$LANG.pwreset}
{if $success}
<div class="alert alert-success">
  <p>{$LANG.pwresetvalidationsent}</p>
</div>
<p>{$LANG.pwresetvalidationcheckemail}</p>
{else}
{if $errormessage}
<div class="alert alert-danger">
  <p>{$errormessage}</p>
</div>
{/if}

<form method="post" action="pwreset.php">
  <input type="hidden" name="action" value="reset" />
  {if $securityquestion}
  <input type="hidden" name="email" value="{$email}" />

  <p>{$LANG.pwresetsecurityquestionrequired}</p>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label class="control-label" for="answer">{$securityquestion}:</label>
        <input class="form-control input-lg" name="answer" id="answer" type="text" value="{$answer}" />
      </div>
    </div>
  </div>
  <input type="submit" class="btn btn-primary btn-lg" value="{$LANG.pwresetsubmit}" />

  {else}

  <p><small>{$LANG.pwresetdesc}</small></p>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label class="control-label" for="email">{$LANG.loginemail}:</label>
        <input class="form-control" name="email" id="email" type="text" />
      </div>
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="{$LANG.pwresetsubmit}" />
  {/if}
</form>
{/if}