<?php

use WHMCS\Application;
use WHMCS\Config\Setting;
use WHMCS\Exception\ProgramExit;

require("../init.php");

/*
*** USAGE SAMPLES ***

<script language="javascript" src="feeds/productsinfo.php?pid=1&get=name"></script>

<script language="javascript" src="feeds/productsinfo.php?pid=1&get=description"></script>

<script language="javascript" src="feeds/productsinfo.php?pid=1&get=price&billingcycle=monthly&currency=1"></script>

<script language="javascript" src="feeds/productsinfo.php?pid=1&get=orderurl&carttpl=web20cart"></script>

*/

$whmcs = App::self();
$pid = (int) $whmcs->get_req_var('pid');
$get = $whmcs->get_req_var('get');
$data = array();
$name = $description = '';

// Verify user input for pid exists, is greater than 0, and as is a valid id
if ($pid > 0) {
    $result = select_query("tblproducts", "", array("id" => $pid));
    $data = mysql_fetch_array($result);
    $pid = (int) $data['id'];
    $name = $data['name'];
    $description = $data['description'];
}

// Verify that the pid is not less than 1 to in order to continue.
if ($pid < 1) {
    widgetOutput('Product ID Not Found');
}

if ($get=="name") {
    widgetOutput($name);
} elseif ($get=="description") {
    $description = str_replace(array("\r", "\n", "\r\n"), "", nl2br($description));
    widgetOutput($description);
} elseif ($get=="configoption") {
    $configOptionNum = $whmcs->get_req_var('configoptionnum');
    if (!$configOptionNum) {
        widgetOutput('The variable configoptionnum is required when get is configoption.');
    }
    widgetoutput($data['configoption' . (int) $configOptionNum]);
} elseif ($get=="orderurl") {
    $cartTemplate = $whmcs->get_req_var('carttpl');
    if ($cartTemplate == "ajax") {
        $cartTemplate = "ajaxcart";
    }
    $systemUrl = $whmcs->isSSLAvailable() ? $whmcs->getSystemSSLURL() : $whmcs->getSystemURL();
    if (!$cartTemplate) {
        $cartTemplate = Setting::getValue('OrderFormTemplate ');
    }
    widgetOutput("{$systemURL}cart.php?a=add&pid={$pid}&carttpl={$cartTemplate}");
} elseif ($get=="price") {
    // Verify user input for currency exists, is numeric, and as is a valid id
    $billingCycle = $whmcs->get_req_var('billingcycle');
    $currencyID = $whmcs->get_req_var('currency');
    if (!is_numeric($currencyID)) {
        $currency = array();
    } else {
        $currency = getCurrency('', $currencyID);
    }

    if (!$currency || !is_array($currency) || !isset($currency['id'])) {
        $currency = getCurrency();
    }
    $currencyID = $currency['id'];

    $result = select_query("tblpricing", "", array("type" => "product", "currency" => $currencyID, "relid" => $pid));
    $data = mysql_fetch_array($result);
    $price = $data[$billingCycle];
    $price = formatCurrency($price);
    widgetOutput($price);
} else {
    widgetOutput('Invalid get option. Valid options are "name", "description", "configoption", "orderurl" or "price"');
}

/**
 * The function to output the widget data to the browser in a javascript format.
 *
 * @throws WHMCS\Exception\ProgramExit
 * @param string $value the data to output
 */
function widgetOutput($value) {
    echo "document.write('".addslashes($value)."');";
    throw new ProgramExit();
}
