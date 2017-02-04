{include file="$template/pageheader.tpl" title=$LANG.contacttitle desc=$LANG.contactheader}

{if $sent}

<br />

<div class="alert alert-success textcenter">
    <p><strong>{$LANG.contactsent}</strong></p>
</div>

{else}

{if $errormessage}
<div class="alert alert-error">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}

<form method="post" action="contact.php?action=send" class="form-stacked">

    <fieldset class="control-group">

	    <div class="row" style="padding-top:0;">
            <div class="col45">
                <div class="control-group">
        		    <label class="control-label bold" for="name">{$LANG.supportticketsclientname}</label>
        			<div class="controls">
        			    <input class="input-xlarge" type="text" name="name" id="name" value="{$name}" />
        			</div>
        		</div>
        	</div>
            <div class="col2half" style="float:right;">
                <div class="control-group">
        		    <label class="control-label bold" for="email">{$LANG.supportticketsclientemail}</label>
        			<div class="controls">
        			    <input class="input-xlarge" type="text" name="email" id="email" value="{$email}" />
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row">
    	    <div class="control-group">
    		    <label class="control-label bold" for="subject">{$LANG.supportticketsticketsubject}</label>
    			<div class="controls">
    			    <input class="input-xlarge" type="text" name="subject" id="subject" value="{$subject}" />
    			</div>
    		</div>
		</div>
		<div class="row">
          <div class="control-group">
		    <label class="control-label bold" for="message">{$LANG.contactmessage}</label>
			<div class="controls">
			    <textarea name="message" id="message" rows="12" class="fullwidth">{$message}</textarea>
			</div>
          </div>
		</div>

    </fieldset>

{if $capatacha}
<div class="divider"></div>
<p><strong>&nbsp;&raquo;&nbsp;{$LANG.captchatitle}</strong></p>
<p>{$LANG.captchaverify}</p>
{if $capatacha eq "recaptcha"}
<div>{$recapatchahtml}</div>
{else}
<p><img src="includes/verifyimage.php" align="middle" />&nbsp; <input type="text" class="input-small" name="code" size="10" maxlength="5" /></p>
{/if}
<div class="divider"></div>
{/if}

    <p><input type="submit" value="{$LANG.contactsend}" class="btn btn-primary" /></p>

</form>

{/if}