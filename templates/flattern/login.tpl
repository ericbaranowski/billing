{include file="$template/pageheader.tpl" title=$LANG.login}
{if $incorrect}
<div class="alert alert-danger">
	<p><i class="fa fa-exclamation-triangle"></i> {$LANG.loginincorrect}</p>
</div>
{/if}
<form method="post" action="{$systemsslurl}dologin.php">
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="control-label" for="username">{$LANG.loginemail}:</label>
				<input class="form-control" name="username" id="username" tabindex="1" type="text" />
			</div>
			<div class="checkbox"><label><input type="checkbox" tabindex="3" name="rememberme"{if $rememberme} checked="checked"{/if} />{$LANG.loginrememberme}</label>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label class="control-label" for="password">{$LANG.loginpassword}:</label>
				<input class="form-control" name="password" id="password" tabindex="2" type="password" />
			</div>
			<a href="pwreset.php" tabindex="5">{$LANG.loginforgotteninstructions}</a>
		</div>
	</div>
<input type="submit" tabindex="4" class="btn btn-primary" value="{$LANG.loginbutton}" />
</form>