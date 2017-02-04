{include file="$template/pageheader.tpl" title=$LANG.clientareanavchangepw}

{include file="$template/clientareadetailslinks.tpl"}

{if $successful}
<div class="alert alert-success">
    <p>{$LANG.changessavedsuccessfully}</p>
</div>
{/if}

{if $errormessage}
<div class="alert alert-danger">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}
<div class="titleline"></div>
<form  method="post" action="{$smarty.server.PHP_SELF}?action=changepw">
    <div class="row">
        <div class="col-lg-12">
            <label for="existingpw">{$LANG.existingpassword}</label>
            <div class="form-group">
               <input type="password" class="form-control" name="existingpw" id="existingpw" />
           </div>
       </div>
   </div>
   <div class="row">
    <div class="col-sm-6">
       <label for="password">{$LANG.newpassword}</label>
       <div class="form-group">
          <input type="password" name="newpw" class="form-control" id="password" />
      </div>
  </div>
  <div class="col-sm-6">          
      <label for="confirmpw">{$LANG.confirmnewpassword}</label>
      <div class="form-group">
          <input type="password" class="form-control" name="confirmpw" id="confirmpw" />
      </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {include file="$template/pwstrength.tpl"}
        </div>
    </div>
</div>
<input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />
<input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
</form>