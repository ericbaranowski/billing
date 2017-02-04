{if $condlinks.domainreg || $condlinks.domaintrans || $condlinks.domainown}
<div class="well margin0">
    <h2>{$LANG.domaincheckerchoosedomain}</h2>
    <p>{$LANG.domaincheckerenterdomain}</p>
    <br />
    <div>
      <form method="post" action="domainchecker.php">
        {if $capatacha}
        <div class="captchainput textcenter" align="center">
            <p>{$LANG.captchaverify}</p>
            {if $capatacha eq "recaptcha"}
            {$recapatchahtml}
            {else}
            <img src="includes/verifyimage.php" /> &nbsp;<input type="text" name="code" class="input-small" maxlength="5" />
            {/if}
        </div>
        {/if}
        <div class="domaincheck">
          <div class="searchbar"><input class="bigfield" name="domain" type="text" value="{$LANG.domaincheckerdomainexample}" onfocus="if(this.value=='{$LANG.domaincheckerdomainexample}')this.value=''" onblur="if(this.value=='')this.value='{$LANG.domaincheckerdomainexample}'" /></div>
          <div>{if $condlinks.domainreg}<input type="submit" value="{$LANG.checkavailability}" class="btn btn-primary btn-large" />{/if}</div>
	      <div>{if $condlinks.domaintrans}<input type="submit" name="transfer" value="{$LANG.domainstransfer}" class="btn btn-success btn-large" />{/if}</div>
    	  <div>{if $condlinks.domainown}<input type="submit" name="hosting" value="{$LANG.domaincheckerhostingonly}" class="btn btn-large" />{/if}</div>
        </div>
      </form>
    </div>
</div>
{/if}

<div class="row rowend"{if !$condlinks.domainreg && !$condlinks.domaintrans && !$condlinks.domainown} style="margin-top:0;"{/if}>

<div class="col2half left">
    <div class="internalpadding ordernew">
      <span class="icon"></span>
      <h2>{$LANG.navservicesorder}</h2>
      <div class="innercontent">
        <p>{$LANG.clientareahomeorder}<br /><br /></p>
        <form method="post" action="cart.php">
        <div align="center"><input type="submit" value="{$LANG.clientareahomeorderbtn} &raquo;" class="btn" /></div>
        </form>
      </div>
    </div>
</div>
<div class="col2half right">
    <div class="internalpadding manageaccount">
      <span class="icon"></span>
      <h2>{$LANG.manageyouraccount}</h2>
      <div class="innercontent">
        <p>{$LANG.clientareahomelogin}<br /><br /></p>
        <form method="post" action="clientarea.php">
        <div align="center"><input type="submit" value="{$LANG.clientareahomeloginbtn} &raquo;" class="btn" /></div>
        </form>
      </div>
    </div>
</div>
<div class="clear"></div>

</div>

{if $twitterusername}
<div class="row rowend">
<div class="internalpadding twitter">
<div class="styled_title">
    <h2>{$LANG.twitterlatesttweets}</h2>
</div>
<div id="twitterfeed">
    <p><img src="images/loading.gif"></p>
</div>
{literal}<script language="javascript">
jQuery(document).ready(function(){
  jQuery.post("announcements.php", { action: "twitterfeed", numtweets: 3 },
    function(data){
      jQuery("#twitterfeed").html(data);
    });
});
</script>{/literal}
</div>
</div>
{elseif $announcements}
<div class="row rowend">
<div class="internalpadding announcements">
	<div class="styled_title">
		<h2>{$LANG.latestannouncements}</h2>
	</div>
	{foreach from=$announcements item=announcement}
	<p><strong>{$announcement.date}</strong> - <a href="{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}"><b>{$announcement.title}</b></a><br />{$announcement.text|strip_tags|truncate:100:"..."}</p>
	{/foreach}
</div>
</div>
{/if}

