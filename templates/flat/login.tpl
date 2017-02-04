<div class="logincontainer">

<form method="post" action="{$systemsslurl}dologin.php" class="form-stacked">

<div class="rememberme" style="float:right;"><input type="checkbox" name="rememberme"{if $rememberme} checked="checked"{/if} /> <strong>{$LANG.loginrememberme}</strong></div>
<div class="page-header show">
    <div class="styled_title"><h1>Login</h1></div>
</div>

{if $incorrect}
<div class="alert alert-error textcenter">
    <p>{$LANG.loginincorrect}</p>
</div>
{/if}

    <fieldset class="control-group">

	    <div class="control-group">
		    <label class="control-label" for="username">{$LANG.loginemail}:</label>
			<div class="controls">
			    <input class="input-xlarge" name="username" id="username" type="email" />
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="password">{$LANG.loginpassword}:</label>
			<div class="controls">
			    <input class="input-xlarge" name="password" id="password" type="password"/>
			</div>
		</div>
        
        <div class="divider"></div>

        <div>
		  <div class="loginbtn col30"><input type="submit" class="btn btn-primary btn-large" value="{$LANG.loginbutton}" /></div>
          <div class="loginbtn col70" style="float:right; width:67%;"><input type="button" class="btn btn-large" onclick="window.location='pwreset.php'" value="{$LANG.forgotpw}" /></div>
          <div class="clear"></div>
        </div>

	</fieldset>

</form>

<script type="text/javascript">
$("#username").focus();
</script>

</div>