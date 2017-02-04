{if $remotecode}

<div id="submitfrm" align="center">

{$remotecode}

<iframe name="3dauth" width="100%" height="600" scrolling="auto" src="about:blank" style="border:1px solid #fff;"></iframe>

</div>

<br />

{literal}
<script language="javascript">
setTimeout ( "autoForward()" , 1000 );
function autoForward() {
	var submitForm = $("#submitfrm").find("form");
    submitForm.submit();
}
</script>
{/literal}

{else}
{php}
  $result = select_query("tblpaymentgateways","value", array("gateway" => "stripe","setting" => "publishableKey"));
  $gateway_data = mysql_fetch_array($result);
  $this->_tpl_vars['publishableKey'] = $gateway_data['value'];
{/php}

<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
<script type="text/javascript">
            // this identifies your website in the createToken call below
            Stripe.setPublishableKey('{$publishableKey}');
            var $continue_button = '{$LANG.ordercontinuebutton}';
            
            {literal}
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
                    // show the errors on the form
                    $(".payment-errors").html(response.error.message);
                    $('#submit-button').val($continue_button);
                    $(".payment-errors").show();
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                 
                    $.post("modules/gateways/stripe-php/stripesave.php", $("#payment-form").serialize(), function(data) {
                      if (data == "error") {
                         $('.submit-button').removeAttr("disabled");
                         $(".payment-errors").html("The credit card details you entered were declined. Please try a different card or contact support.");
                         $('#submit-button').val($continue_button);
                         $(".payment-errors").show();
                      }
                      else {
                         $('input:radio[name=ccinfo]')[0].checked = true;   
                         form$.get(0).submit();
                      }
                     
                     });
                    
                }
            }

            $(document).ready(function() {
                $("#payment-form").submit(function(event) {
                    if ($("input[name=ccinfo]:checked").val() == "new") {
                      // disable the submit button to prevent repeated clicks
                      $('.submit-button').attr("disabled", "disabled");

                   
                     
                      // createToken returns immediately - the supplied callback submits the form if there are no errors
                      Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val(),
                        name: $('#firstname').val() + ' ' + $('#lastname').val(),
                        address_line1: $('#address1').val(),
                        address_line2: $('#address2').val(),
                        address_city: $('#city').val(),
                        address_state: $('#stateselect option:selected').val(),
                        address_zip:  $('#postcode').val(),
                        address_country: $('#country').val(),
                      }, stripeResponseHandler);
                      
                      
                      return false; // submit from callback
                    }
                    else {
                      return true;
                    }
                });
            });
        </script>
 {/literal}
<script type="text/javascript" src="includes/jscript/statesdropdown.js"></script>
{literal}<script language="javascript">
function useExistingCC() {
    jQuery(".newccinfo").hide();
}
function enterNewCC() {
    jQuery(".newccinfo").show();
}
</script>{/literal}
<form method="post" id="payment-form" name="payment-form" action="creditcard.php?action=submit">
  <input type="hidden" name="invoiceid" value="{$invoiceid}">
  <h2>{$LANG.creditcardyourinfo}</h2>
  {if $errormessage}
  <div class="errorbox">{$errormessage}</div>
  <br />
  {/if}
  <table width="100%" cellspacing="0" cellpadding="0" class="frame">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0">
          <tr>
            <td width=120 class="fieldarea">{$LANG.clientareafirstname}</td>
            <td><input type="text" id="firstname" name="firstname" size=30 value="{$firstname}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientarealastname}</td>
            <td><input type="text" id="lastname"  name="lastname" size=30 value="{$lastname}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaaddress1}</td>
            <td><input type="text" id="address1" name="address1" size=40 value="{$address1}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaaddress2}</td>
            <td><input type="text" id="address2" name="address2" size=30 value="{$address2}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareacity}</td>
            <td><input type="text" id="city"  name="city" size=30 value="{$city}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareastate}</td>
            <td><input type="text" id="state" name="state" size=25 value="{$state}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareapostcode}</td>
            <td><input type="text" id="postcode"  name="postcode" size=10 value="{$postcode}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareacountry}</td>
            <td>{$countriesdropdown}</td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaphonenumber}</td>
            <td><input type="text" id="phonenumber" name="phonenumber" size="20" value="{$phonenumber}" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <h2>{$LANG.creditcarddetails}</h2>
  <div class="errorbox payment-errors" style="display:none;"></div>
  <p>
    <input type="radio" name="ccinfo" value="useexisting" id="ccinfo" onclick="useExistingCC()"{if $cardnum} checked{else} disabled{/if} />
    <label for="useexisting">{$LANG.creditcarduseexisting}{if $cardnum} ({$cardnum}){/if}</label><br />
    <input type="radio" name="ccinfo" value="new" id="ccinfo" onclick="enterNewCC()"{if !$cardnum || $ccinfo eq "new"} checked{/if} />
    <label for="new">{$LANG.creditcardenternewcard}</label></p>
    <table width="100%" cellspacing="0" cellpadding="0" class="frame">
      <tr>
        <td><table width="100%" cellpadding="10" cellspacing="0" border="0">
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardnumber}</td>
              <td><input type="text" size="30"  autocomplete="off" class="card-number newccinfo" /></td>
            </tr>
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardexpires}</td>
              <td><select name="card-exp-month" id="ccexpirymonth" class="card-expiry-month newccinfo">{foreach from=$months item=month}
<option{if $ccexpirymonth eq $month} selected{/if}>{$month}</option>
{/foreach}</select> / <select name="card-exp-year" class="card-expiry-year newccinfo">
{foreach from=$years item=year}
<option{if $ccexpiryyear eq $year} selected{/if}>{$year}</option>
{/foreach}
</select></td>
            </tr>
            <tr  class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td width="120" class="fieldarea">{$LANG.creditcardcvvnumber}</td>
              <td><input type="text" size="5" class="card-cvc input-small newccinfo"  autocomplete="off" />
                <a href="#" onclick="window.open('images/ccv.gif','','width=280,height=200,scrollbars=no,top=100,left=100');return false">{$LANG.creditcardcvvwhere}</a>
                <input type="hidden" name="cccvv" value="123" />
                </td>
            </tr>
          </table></td>
      </tr>
    </table>
  <p align="center">
    <input type="submit" class="submit-button" id="submit-button" value="{$LANG.ordercontinuebutton}" onclick="this.value='{$LANG.pleasewait}'" />
  </p>
  <p align="center"><img src="images/padlock.gif" class="absmiddle" alt="Padlock" border="0" /> {$LANG.creditcardsecuritynotice}</p>
</form>

{/if}