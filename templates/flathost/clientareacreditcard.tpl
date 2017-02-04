{php}
  if ($_REQUEST['error'] == 1) {
    $this->_tpl_vars['errormessage'] = "Your card could not be saved, please try again or contact support.";
   }
{/php}
{include file="$template/clientareadetailslinks.tpl"}

<h2>{$LANG.clientareanavchangecc}</h2>

{if $remoteupdatecode}

  <div align="center">
    {$remoteupdatecode}
  </div>

{else}
{literal}
<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
<script type="text/javascript">
            // this identifies your website in the createToken call below
            {/literal}
            {php}
              $result = select_query("tblpaymentgateways","value", array("gateway" => "stripe","setting" => "publishableKey"));
              $gateway_data = mysql_fetch_array($result);
              $this->_tpl_vars['publishableKey'] = $gateway_data['value'];
            {/php}
            Stripe.setPublishableKey('{$publishableKey}');
            var $customer_name = '{$clientsdetails.firstname|escape:'quotes'} {$clientsdetails.lastname|escape:'quotes'}';
            var $address_1 = '{$clientsdetails.address1|escape:'quotes'}';
            var $address_2 = '{$clientsdetails.address2|escape:'quotes'}';
            var $city = '{$clientsdetails.city|escape:'quotes'}';
            var $zip = '{$clientsdetails.postcode|escape:'quotes'}';
            var $county = '{$clientsdetails.country|escape:'quotes'}';
            var $state = '{$clientsdetails.state|escape:'quotes'}';
            
            {literal}
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
                    // show the errors on the form
                    $(".payment-errors").html(response.error.message);
                    $(".payment-errors").show();
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                     // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
                    form$.get(0).submit();
                }
            }

            $(document).ready(function() {
                $("#payment-form").submit(function(event) {
                    // disable the submit button to prevent repeated clicks
                    $('.submit-button').attr("disabled", "disabled");
             

                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val(),
                        name: $customer_name,
                        address_line1: $address_1,
                        address_line2: $address_2,
                        address_city: $city,
                        address_state: $state,
                        address_zip:  $zip,
                        address_country: $county,
                    }, stripeResponseHandler);
                    return false; // submit from callback
                });
            });
        </script>
 {/literal}


{if $successful}<div class="successbox">{$LANG.changessavedsuccessfully}</div><br />{/if}
{if $errormessage}<div class="errorbox">{$errormessage|replace:'<li>':' &nbsp;#&nbsp; '} &nbsp;#&nbsp; </div><br />{/if}
<div class="errorbox payment-errors" style="display:none;"></div>



  <table width="100%" cellspacing="0" cellpadding="0" class="frame">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0">
          <tr><td width="150" class="fieldarea">{$LANG.creditcardcardtype}</td><td>{$cardtype}</td></tr>
          <tr><td class="fieldarea">{$LANG.creditcardcardnumber}</td><td><form method="post" action="{$smarty.server.PHP_SELF}?action=creditcard">{$cardnum}{if $allowcustomerdelete && $cardtype} &nbsp;&nbsp;&nbsp; <input type="submit" name="remove" value="{$LANG.creditcarddelete}" class="button" />{/if}</form></td></tr>
          <tr><td class="fieldarea">{$LANG.creditcardcardexpires}</td><td>{$cardexp}</td></tr>
          {if $cardissuenum}<tr><td class="fieldarea">{$LANG.creditcardcardissuenum}</td><td>{$cardissuenum}</td></tr>{/if}
          {if $cardstart}<tr><td class="fieldarea">{$LANG.creditcardcardstart}</td><td>{$cardstart}</td></tr>{/if}
      </table></td>
    </tr>
  </table>
<form method="post" id="payment-form" action="modules/gateways/stripe-php/stripesave.php">
<h2>{$LANG.creditcardenternewcard}</h2>

<table width="100%" cellspacing="0" cellpadding="0" class="frame">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0">
          <tr><td class="fieldarea">{$LANG.creditcardcardnumber}</td><td><input type="text" size="25" autocomplete="off" class="card-number" /></td></tr>
          <tr><td class="fieldarea">{$LANG.creditcardcardexpires}</td><td><select name="card-exp-month" id="ccexpirymonth" class="card-expiry-month">{foreach from=$months item=month}
<option{if $ccexpirymonth eq $month} selected{/if}>{$month}</option>
{/foreach}</select> / <select name="card-exp-year" id="ccexpiryyear" class="card-expiry-year">
{foreach from=$years item=year}
<option{if $ccexpiryyear eq $year} selected{/if}>{$year}</option>
{/foreach}</select></td></tr>
          <tr><td class="fieldarea">{$LANG.creditcardcvvnumber}</td><td><input type="text" size="5" autocomplete="off" class="input-small newccinfo card-cvc" />&nbsp;<a href="#" onclick="window.open('images/ccv.gif','','width=280,height=200,scrollbars=no,top=100,left=100');return false">{$LANG.creditcardcvvwhere}</a><input type="hidden" name="cccvv2" value="123" /></td></tr>
      </table></td>
    </tr>
  </table>

<p align="center"><input type="submit" value="{$LANG.clientareasavechanges}" class="submit-button button" /> <input type="reset" value="{$LANG.clientareacancel}" class="button" /></p>

</form>

{/if}