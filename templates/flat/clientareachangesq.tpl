{include file="$template/pageheader.tpl" title=$LANG.clientareanavsecurityquestions}

{include file="$template/clientareadetailslinks.tpl"}

{if $successful}
<div class="alert alert-success">
    <p>{$LANG.changessavedsuccessfully}</p>
</div>
{/if}

{if $errormessage}
<div class="alert alert-error">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}

<br />

<form class="form-horizontal" method="post" action="{$smarty.server.PHP_SELF}?action=changesq">

  <fieldset class="onecol">

{if !$nocurrent}
    <div class="control-group">
	    <label class="control-label" for="currentans">{$currentquestion}</label>
		<div class="controls">
		    <input type="password" name="currentsecurityqans" id="currentans" />
		</div>
	</div>
{/if}
    <div class="control-group">
	    <label class="control-label" for="securityqid">{$LANG.clientareasecurityquestion}</label>
		<div class="controls">
		    <select name="securityqid" id="securityqid">
            {foreach key=num item=question from=$securityquestions}
            	<option value={$question.id}>{$question.question}</option>
            {/foreach}
            </select>
		</div>
	</div>

    <div class="control-group">
	    <label class="control-label" for="securityqans">{$LANG.clientareasecurityanswer}</label>
		<div class="controls">
		    <input type="password" name="securityqans" id="securityqans" />
		</div>
	</div>

    <div class="control-group">
	    <label class="control-label" for="securityqans2">{$LANG.clientareasecurityconfanswer}</label>
		<div class="controls">
		    <input type="password" name="securityqans2" id="securityqans2" />
		</div>
	</div>

  </fieldset>

  <div class="form-actions">
    <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />&nbsp;
    <input class="btn" type="reset" value="{$LANG.cancel}" />
  </div>

</form>