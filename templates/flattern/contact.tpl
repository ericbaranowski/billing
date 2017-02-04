{include file="$template/pageheader.tpl" title=$LANG.contacttitle desc=$LANG.contactheader}

{if $sent}

<br />
<div class="alert alert-success textcenter">
    <p><strong>{$LANG.contactsent}</strong></p>
</div>

{else}

{if $errormessage}
<div class="alert alert-danger">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}
<form method="post" action="contact.php?action=send">
    <fieldset>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">{$LANG.supportticketsclientname}</label>
                    <input class="form-control" type="text" name="name" id="name" value="{$name}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="control-label bold" for="email">{$LANG.supportticketsclientemail}</label>
                        <input class="form-control" type="text" name="email" id="email" value="{$email}" />
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
            <div class="form-group">
                <label for="subject">{$LANG.supportticketsticketsubject}</label>
                    <input class="form-control" type="text" name="subject" id="subject" value="{$subject}" />
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
            <label for="message">{$LANG.contactmessage}</label>
                <textarea name="message" id="message" rows="5" class="form-control">{$message}</textarea>
            </div>
            </div>
        </div>
    </fieldset>

<div class="row">
<div class="col-lg-12">
{if $capatacha}
<div class="well well-sm">
<h4>{$LANG.captchatitle}<small> {$LANG.captchaverify}</small></h4>
{if $capatacha eq "recaptcha"}
<div align="center">{$recapatchahtml}</div>
{else}
<img src="includes/verifyimage.php" /><input type="text" class="input-sm" name="code" maxlength="5" />
{/if}
</div>
{/if}
<input type="submit" value="{$LANG.contactsend}" class="btn btn-primary" />
</div>
</div>
</form>
{/if}