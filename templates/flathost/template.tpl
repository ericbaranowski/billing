{if $credit_billing}
    <hr />
    <div class="col2half">
        <h3>{$mg_lang.credit_billing}:</h3>
    </div>
    <div class="clear"></div> 
    <div class="col2half">
        <p> 
        <h4>{$mg_lang.current_credit}</h4>
        {$credit_billing.total}
        </p>
    </div> 
    {*<div class="col2half">
        <p> 
        <h4>{$mg_lang.current_paid}</h4>
        {$credit_billing.paid}
        </p>
    </div>*}
    <div class="clear"></div> 
{/if}
 