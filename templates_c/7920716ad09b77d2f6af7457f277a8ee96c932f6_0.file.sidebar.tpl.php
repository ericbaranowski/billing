<?php
/* Smarty version 3.1.29, created on 2017-01-10 20:54:39
  from "/home/billing/public_html/admin/templates/v4/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58754a0fbfd098_82551498',
  'file_dependency' => 
  array (
    '7920716ad09b77d2f6af7457f277a8ee96c932f6' => 
    array (
      0 => '/home/billing/public_html/admin/templates/v4/sidebar.tpl',
      1 => 1481721244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58754a0fbfd098_82551498 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>

<span class="header"><img src="images/icons/linktracking.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['shortcuts'];?>
</span>
<ul class="menu">
    <li><a href="clientsadd.php"><img src="images/icons/clientsadd.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li>
    <li><a href="ordersadd.php"><img src="images/icons/ordersadd.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li>
    <li><a href="quotes.php?action=manage"><img src="images/icons/quotes.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
    <li><a href="todolist.php"><img src="images/icons/todolist.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolistcreatenew'];?>
</a></li>
    <li><a href="supporttickets.php?action=open"><img src="images/icons/tickets.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li>
    <li><a href="whois.php"><img src="images/icons/domains.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modalGenerateInvoices"><img src="images/icons/invoices.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['geninvoices'];?>
</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modalCreditCardCapture"><img src="images/icons/offlinecc.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['attemptcccaptures'];?>
</a></li>
</ul>

<span class="plain_header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['systeminfo'];?>
</span>
<div class="smallfont"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['regto'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['registeredname'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['type'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['productname'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['expires'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['expires'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['version'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['currentversion'];
if ($_smarty_tpl->tpl_vars['licenseinfo']->value['updateavailable']) {?><br /><span class="textred"><b><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['updateavailable'];?>
</b></span><?php }?></div>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "clients") {?>

<span class="header"><img src="images/icons/clients.png" class="absmiddle" alt="Clients" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['title'];?>
</span>
<ul class="menu">
    <li><a href="clients.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['viewsearch'];?>
</a></li>
    <li><a href="clientsadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/products.png" alt="Products/Services" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>
</span>
<ul class="menu">
    <li><a href="clientshostinglist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listall'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=hostingaccount">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listhosting'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=reselleraccount">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listreseller'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=server">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listservers'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=other">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listother'];?>
</a></li>
    <li><a href="clientsaddonslist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listaddons'];?>
</a></li>
    <li><a href="clientsdomainlist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listdomains'];?>
</a></li>
    <li><a href="cancelrequests.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['cancelrequests'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/affiliates.png" alt="Affiliates" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['title'];?>
</span>
<ul class="menu">
    <li><a href="affiliates.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['manage'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "orders") {?>

<span class="header"><img src="images/icons/orders.png" alt="Affiliates" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['title'];?>
</span>
<ul class="menu">
    <li><a href="orders.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listall'];?>
</a></li>
    <li><a href="orders.php?status=Pending">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listpending'];?>
</a></li>
    <li><a href="orders.php?status=Active">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listactive'];?>
</a></li>
    <li><a href="orders.php?status=Fraud">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listfraud'];?>
</a></li>
    <li><a href="orders.php?status=Cancelled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listcancelled'];?>
</a></li>
    <li><a href="ordersadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "billing") {?>

<span class="header"><img src="images/icons/transactions.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['title'];?>
</span>
<ul class="menu">
    <li><a href="transactions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['transactionslist'];?>
</a></li>
    <li><a href="gatewaylog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['gatewaylog'];?>
</a></li>
    <li><a href="offlineccprocessing.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['offlinecc'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/invoices.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['title'];?>
</span>
<ul class="menu">
    <li><a href="invoices.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['listall'];?>
</a></li>
    <li><a href="invoices.php?status=Paid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paid'];?>
</a></li>
    <li><a href="invoices.php?status=Draft">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['draft'];?>
</a></li>
    <li><a href="invoices.php?status=Unpaid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['unpaid'];?>
</a></li>
    <li><a href="invoices.php?status=Overdue">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['overdue'];?>
</a></li>
    <li><a href="invoices.php?status=Cancelled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</a></li>
    <li><a href="invoices.php?status=Refunded">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['refunded'];?>
</a></li>
    <li><a href="invoices.php?status=Collections">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['collections'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/billableitems.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['title'];?>
</span>
<ul class="menu">
    <li><a href="billableitems.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['listall'];?>
</a></li>
    <li><a href="billableitems.php?status=Uninvoiced">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['uninvoiced'];?>
</a></li>
    <li><a href="billableitems.php?status=Recurring">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['recurring'];?>
</a></li>
    <li><a href="billableitems.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['addnew'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/quotes.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['title'];?>
</span>
<ul class="menu">
    <li><a href="quotes.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['listall'];?>
</a></li>
    <li><a href="quotes.php?validity=Valid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['valid'];?>
</a></li>
    <li><a href="quotes.php?validity=Expired">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['expired'];?>
</a></li>
    <li><a href="quotes.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "support") {?>

<?php if ($_smarty_tpl->tpl_vars['inticket']->value) {?>

<span class="header">
    <img src="images/icons/support.png" alt="Support Center" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['ticketinfo'];?>

</span>
<div class="contentarea">

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['client'];?>
</span>
<div class="ticketinfo smallfont">
    <?php if ($_smarty_tpl->tpl_vars['userid']->value) {?>
        <a href="clientssummary.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['clientgroupcolour']->value) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['clientgroupcolour']->value;?>
"<?php }?> target="_blank">
            <?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['contactid']->value) {?>
            (<a href="clientscontacts.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
&contactid=<?php echo $_smarty_tpl->tpl_vars['contactid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['clientgroupcolour']->value) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['clientgroupcolour']->value;?>
"<?php }?> target="_blank"><?php echo $_smarty_tpl->tpl_vars['contactname']->value;?>
</a>)
        <?php }?>
    <?php } else { ?>
        <a href="?email=<?php echo urlencode($_smarty_tpl->tpl_vars['email']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a><br />
        <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

    <?php }?>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['department'];?>
</span>
<div class="ticketinfo">
<select id="deptid" onchange="updateTicket('deptid')" class="form-control input-sm">
<?php
$_from = $_smarty_tpl->tpl_vars['departments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_department_0_saved_item = isset($_smarty_tpl->tpl_vars['department']) ? $_smarty_tpl->tpl_vars['department'] : false;
$_smarty_tpl->tpl_vars['department'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['department']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
$__foreach_department_0_saved_local_item = $_smarty_tpl->tpl_vars['department'];
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == $_smarty_tpl->tpl_vars['deptid']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_local_item;
}
if ($__foreach_department_0_saved_item) {
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_item;
}
?>
</select>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['assignedto'];?>
</span>
<div class="ticketinfo">
<select id="flagto" onchange="updateTicket('flagto')" class="form-control input-sm select-assignto">
<option value="0"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['none'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['staff']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_staffmember_1_saved_item = isset($_smarty_tpl->tpl_vars['staffmember']) ? $_smarty_tpl->tpl_vars['staffmember'] : false;
$_smarty_tpl->tpl_vars['staffmember'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['staffmember']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['staffmember']->value) {
$_smarty_tpl->tpl_vars['staffmember']->_loop = true;
$__foreach_staffmember_1_saved_local_item = $_smarty_tpl->tpl_vars['staffmember'];
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['staffmember']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['staffmember']->value['id'] == $_smarty_tpl->tpl_vars['flag']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['staffmember']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['staffmember'] = $__foreach_staffmember_1_saved_local_item;
}
if ($__foreach_staffmember_1_saved_item) {
$_smarty_tpl->tpl_vars['staffmember'] = $__foreach_staffmember_1_saved_item;
}
?>
</select> <a href="#" onclick="$('#flagto').val(<?php echo $_smarty_tpl->tpl_vars['adminid']->value;?>
);$('#flagto').trigger('change');return false"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['me'];?>
</a>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['priority'];?>
</span>
<div class="ticketinfo">
<select id="priority" onchange="updateTicket('priority')" class="form-control input-sm">
<option value="High"<?php if ($_smarty_tpl->tpl_vars['priority']->value == "High") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['high'];?>
</option>
<option value="Medium"<?php if ($_smarty_tpl->tpl_vars['priority']->value == "Medium") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['medium'];?>
</option>
<option value="Low"<?php if ($_smarty_tpl->tpl_vars['priority']->value == "Low") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['low'];?>
</option>
</select>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['staffparticipants'];?>
</span>
<div class="ticketinfo smallfont">
<?php
$_from = $_smarty_tpl->tpl_vars['staffinvolved']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_staffname_2_saved_item = isset($_smarty_tpl->tpl_vars['staffname']) ? $_smarty_tpl->tpl_vars['staffname'] : false;
$_smarty_tpl->tpl_vars['staffname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['staffname']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['staffname']->value) {
$_smarty_tpl->tpl_vars['staffname']->_loop = true;
$__foreach_staffname_2_saved_local_item = $_smarty_tpl->tpl_vars['staffname'];
echo $_smarty_tpl->tpl_vars['staffname']->value;?>
<br />
<?php
$_smarty_tpl->tpl_vars['staffname'] = $__foreach_staffname_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['staffname']->_loop) {
?>
No Replies Yet
<?php
}
if ($__foreach_staffname_2_saved_item) {
$_smarty_tpl->tpl_vars['staffname'] = $__foreach_staffname_2_saved_item;
}
?>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['tags'];?>
</span>
<div class="ticketinfo">
    <input id="ticketTags" value="<?php echo implode($_smarty_tpl->tpl_vars['tags']->value,',');?>
" class="selectize-tags" />
</div>

</div>

<span class="header">
    <img src="images/icons/find.png" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['ticketWatchers'];?>
" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['ticketWatchers'];?>

</span>
<div class="contentarea">
    <ul class="menu smallfont ticket-watchers" id="ticketWatchers">
        <?php
$_from = $_smarty_tpl->tpl_vars['ticketWatchers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ticketWatcher_3_saved_item = isset($_smarty_tpl->tpl_vars['ticketWatcher']) ? $_smarty_tpl->tpl_vars['ticketWatcher'] : false;
$__foreach_ticketWatcher_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['ticketWatcher'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ticketWatcher']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ticketWatcher']->value) {
$_smarty_tpl->tpl_vars['ticketWatcher']->_loop = true;
$__foreach_ticketWatcher_3_saved_local_item = $_smarty_tpl->tpl_vars['ticketWatcher'];
?>
            <li id="ticket-watcher-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ticketWatcher']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['ticketWatcher'] = $__foreach_ticketWatcher_3_saved_local_item;
}
if ($__foreach_ticketWatcher_3_saved_item) {
$_smarty_tpl->tpl_vars['ticketWatcher'] = $__foreach_ticketWatcher_3_saved_item;
}
if ($__foreach_ticketWatcher_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_ticketWatcher_3_saved_key;
}
?>
        <li id="ticket-watcher-0"<?php if ($_smarty_tpl->tpl_vars['ticketWatchers']->value) {?> class="hidden"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['none'];?>
</li>
    </ul>
</div>

<?php } else { ?>

<span class="header"><img src="images/icons/support.png" alt="Support Center" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span>
<ul class="menu">
    <li><a href="supportannouncements.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['announcements'];?>
</a></li>
    <li><a href="supportdownloads.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['downloads'];?>
</a></li>
    <li><a href="supportkb.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['knowledgebase'];?>
</a></li>
    <li><a href="supporttickets.php?action=open"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li>
    <li><a href="supportticketpredefinedreplies.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['predefreplies'];?>
</a></li>
</ul>

<?php }?>

<span class="header">
    <img src="images/icons/tickets.png" alt="Filter Tickets" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['filtertickets'];?>

</span>
<div class="contentarea">
    <form method="post" action="supporttickets.php">
        <span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</span>
        <div class="ticketinfo">
            <select name="view" class="form-control input-sm">
                <option value="any">- Any -</option>
                <option value=""<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == '') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['awaitingreply'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
)</option>
                <option value="flagged"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == "flagged") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['flagged'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsflagged']->value;?>
)</option>
                <option value="active"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == "active") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['allactive'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsallactive']->value;?>
)</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['ticketstatuses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_status_4_saved_item = isset($_smarty_tpl->tpl_vars['status']) ? $_smarty_tpl->tpl_vars['status'] : false;
$_smarty_tpl->tpl_vars['status'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['status']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
$__foreach_status_4_saved_local_item = $_smarty_tpl->tpl_vars['status'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['status']->value['title'] == $_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['status']->value['count'];?>
)</option>
            <?php
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_4_saved_local_item;
}
if ($__foreach_status_4_saved_item) {
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_4_saved_item;
}
?>
            </select>
        </div>
        <span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['department'];?>
</span>
        <div class="ticketinfo">
            <select name="deptid" class="form-control input-sm">
                <option value="">- Any -</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['ticketdepts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dept_5_saved_item = isset($_smarty_tpl->tpl_vars['dept']) ? $_smarty_tpl->tpl_vars['dept'] : false;
$_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dept']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->_loop = true;
$__foreach_dept_5_saved_local_item = $_smarty_tpl->tpl_vars['dept'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['dept']->value['id'] == $_smarty_tpl->tpl_vars['ticketfilterdata']->value['deptid']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dept']->value['name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['dept'] = $__foreach_dept_5_saved_local_item;
}
if ($__foreach_dept_5_saved_item) {
$_smarty_tpl->tpl_vars['dept'] = $__foreach_dept_5_saved_item;
}
?>
            </select>
        </div>
        <span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['subjectmessage'];?>
</span>
        <div class="ticketinfo">
            <input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['subject'];?>
" class="form-control input-sm" />
        </div>
        <span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['email'];?>
</span>
        <div class="ticketinfo">
            <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['email'];?>
" class="form-control input-sm" />
        </div>
        <div class="text-center">
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['filter'];?>
  &raquo;" class="btn btn-sm" />
        </div>
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['inticketlist']->value) {?>

<span class="header">
    <img src="images/icons/tickets.png" alt="Tag Cloud" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['tagcloud'];?>

</span>
<div class="tagcloud">
    <?php echo $_smarty_tpl->tpl_vars['tagcloud']->value;?>

</div>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['inticket']->value) {?>

<span class="header"><img src="images/icons/networkissues.png" alt="Network Issues" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['title'];?>
</span>
<ul class="menu">
    <li><a href="networkissues.php">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['open'];?>
</a></li>
    <li><a href="networkissues.php?view=scheduled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['scheduled'];?>
</a></li>
    <li><a href="networkissues.php?view=resolved">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['resolved'];?>
</a></li>
    <li><a href="networkissues.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['addnew'];?>
</a></li>
</ul>

<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "reports") {?>

<span class="header"><img src="images/icons/reports.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['reports']['title'];?>
</span>
<ul class="menu">
    <?php
$_from = $_smarty_tpl->tpl_vars['text_reports']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_reporttitle_6_saved_item = isset($_smarty_tpl->tpl_vars['reporttitle']) ? $_smarty_tpl->tpl_vars['reporttitle'] : false;
$__foreach_reporttitle_6_saved_key = isset($_smarty_tpl->tpl_vars['filename']) ? $_smarty_tpl->tpl_vars['filename'] : false;
$_smarty_tpl->tpl_vars['reporttitle'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['reporttitle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['filename']->value => $_smarty_tpl->tpl_vars['reporttitle']->value) {
$_smarty_tpl->tpl_vars['reporttitle']->_loop = true;
$__foreach_reporttitle_6_saved_local_item = $_smarty_tpl->tpl_vars['reporttitle'];
?>
    <li><a href="reports.php?report=<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reporttitle']->value;?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['reporttitle'] = $__foreach_reporttitle_6_saved_local_item;
}
if ($__foreach_reporttitle_6_saved_item) {
$_smarty_tpl->tpl_vars['reporttitle'] = $__foreach_reporttitle_6_saved_item;
}
if ($__foreach_reporttitle_6_saved_key) {
$_smarty_tpl->tpl_vars['filename'] = $__foreach_reporttitle_6_saved_key;
}
?>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "utilities") {?>

<span class="header"><img src="images/icons/utilities.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['title'];?>
</span>
<ul class="menu">
    <?php if (in_array("View Module Queue",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
        <li><a href="modulequeue.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['moduleQueue'];?>
</a></li>
    <?php }?>
    <li><a href="utilitiesemailmarketer.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emailmarketer'];?>
</a></li>
    <li><a href="utilitieslinktracking.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['linktracking'];?>
</a></li>
    <li><a href="calendar.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['calendar'];?>
</a></li>
    <li><a href="todolist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolist'];?>
</a></li>
    <li><a href="whois.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li>
    <li><a href="utilitiesresolvercheck.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['domainresolver'];?>
</a></li>
    <li><a href="systemintegrationcode.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['integrationcode'];?>
</a></li>
    <li><a href="whmimport.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['cpanelimport'];?>
</a></li>
    <li><a href="systemdatabase.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['dbstatus'];?>
</a></li>
    <li><a href="systemcleanup.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['syscleanup'];?>
</a></li>
    <li><a href="systemphpinfo.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['phpinfo'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/logs.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['logs'];?>
</span>
<ul class="menu">
    <li><a href="systemactivitylog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['activitylog'];?>
</a></li>
    <li><a href="systemadminlog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['adminlog'];?>
</a></li>
    <li><a href="systemmodulelog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['modulelog'];?>
</a></li>
    <li><a href="systememaillog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emaillog'];?>
</a></li>
    <li><a href="systemmailimportlog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['ticketmaillog'];?>
</a></li>
    <li><a href="systemwhoislog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whoislog'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "addonmodules") {?>

<?php echo $_smarty_tpl->tpl_vars['addon_module_sidebar']->value;?>


<span class="header"><img src="images/icons/addonmodules.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['addonmodules'];?>
</span>
<ul class="menu">
    <?php
$_from = $_smarty_tpl->tpl_vars['addon_modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addontitle_7_saved_item = isset($_smarty_tpl->tpl_vars['addontitle']) ? $_smarty_tpl->tpl_vars['addontitle'] : false;
$__foreach_addontitle_7_saved_key = isset($_smarty_tpl->tpl_vars['filename']) ? $_smarty_tpl->tpl_vars['filename'] : false;
$_smarty_tpl->tpl_vars['addontitle'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addontitle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['filename']->value => $_smarty_tpl->tpl_vars['addontitle']->value) {
$_smarty_tpl->tpl_vars['addontitle']->_loop = true;
$__foreach_addontitle_7_saved_local_item = $_smarty_tpl->tpl_vars['addontitle'];
?>
    <li><a href="addonmodules.php?module=<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['addontitle']->value;?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['addontitle'] = $__foreach_addontitle_7_saved_local_item;
}
if ($__foreach_addontitle_7_saved_item) {
$_smarty_tpl->tpl_vars['addontitle'] = $__foreach_addontitle_7_saved_item;
}
if ($__foreach_addontitle_7_saved_key) {
$_smarty_tpl->tpl_vars['filename'] = $__foreach_addontitle_7_saved_key;
}
?>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == "config") {?>

<span class="header"><img src="images/icons/config.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['config'];?>
</span>
<ul class="menu">
    <li><a href="configgeneral.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['general'];?>
</a></li>
    <li><a href="configauto.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['automation'];?>
</a></li>
    <li><a href="configapplinks.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['applicationLinks'];?>
</a></li>
    <li><a href="configopenid.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['openIdConnect'];?>
</a></li>
    <li><a href="configemailtemplates.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['emailtpls'];?>
</a></li>
    <li><a href="configaddonmods.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addonmodules'];?>
</a></li>
    <li><a href="configclientgroups.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['clientgroups'];?>
</a></li>
    <li><a href="configfraud.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['fraud'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/admins.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['staff'];?>
</span>
<ul class="menu">
    <li><a href="configadmins.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['admins'];?>
</a></li>
    <li><a href="configadminroles.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['adminroles'];?>
</a></li>
    <li><a href="configtwofa.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['twofa'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/income.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['payments'];?>
</span>
<ul class="menu">
    <li><a href="configcurrencies.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['currencies'];?>
</a></li>
    <li><a href="configgateways.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['gateways'];?>
</a></li>
    <li><a href="configtax.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['tax'];?>
</a></li>
    <li><a href="configpromotions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['promos'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/products.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
</span>
<ul class="menu">
    <li><a href="configproducts.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
</a></li>
    <li><a href="configproductoptions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['configoptions'];?>
</a></li>
    <li><a href="configaddons.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addons'];?>
</a></li>
    <li><a href="configbundles.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bundles'];?>
</a></li>
    <li><a href="configdomains.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['domainpricing'];?>
</a></li>
    <li><a href="configregistrars.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['registrars'];?>
</a></li>
    <li><a href="configservers.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['servers'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/support.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span>
<ul class="menu">
    <li><a href="configticketdepartments.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['supportdepartments'];?>
</a></li>
    <li><a href="configticketstatuses.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['ticketstatuses'];?>
</a></li>
    <li><a href="configticketescalations.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['escalationrules'];?>
</a></li>
    <li><a href="configticketspamcontrol.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['spam'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/configother.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['other'];?>
</span>
<ul class="menu">
    <li><a href="configcustomfields.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['customclientfields'];?>
</a></li>
    <li><a href="configorderstatuses.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['orderstatuses'];?>
</a></li>
    <li><a href="configsecurityqs.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['securityqs'];?>
</a></li>
    <li><a href="configbannedips.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedips'];?>
</a></li>
    <li><a href="configbannedemails.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedemails'];?>
</a></li>
    <li><a href="configbackups.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['backups'];?>
</a></li>
</ul>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "clients" || $_smarty_tpl->tpl_vars['sidebar']->value == "orders" || $_smarty_tpl->tpl_vars['sidebar']->value == "billing") {?>

<span class="plain_header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['quicklinks'];?>
</span>
<div class="smallfont">
<table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td><a href="orders.php?status=Pending"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['pendingorders'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</td>
    </tr>
    <tr>
      <td><a href="clients.php?status=Active"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['activeclients'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['clients']['active'];?>
</td>
    </tr>
    <tr>
      <td><a href="clientshostinglist.php?status=Active"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['activeservices'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['services']['active'];?>
</td>
    </tr>
    <tr>
      <td><a href="clientsdomainlist.php?status=Active"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['activedomains'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['domains']['active'];?>
</td>
    </tr>
    <tr>
      <td><a href="invoices.php?status=Overdue"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['overdueinvoices'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</td>
    </tr>
    <tr>
      <td><a href="supporttickets.php?view=active"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['activetickets'];?>
</a></td>
      <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['tickets']['active'];?>
</td>
    </tr>
</table>
</div>

<?php }?>

<br />

<span class="plain_header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['advancedsearch'];?>
</span>
<div class="adv-search row">
    <form method="get" action="search.php">
        <div class="col-xs-6 col-sm-12">
        <select name="type" id="searchtype" onchange="populate(this)" class="form-control input-sm">
            <option value="clients">Clients </option>
            <option value="orders">Orders </option>
            <option value="services">Services </option>
            <option value="domains">Domains </option>
            <option value="invoices">Invoices </option>
            <option value="tickets">Tickets </option>
        </select>
        </div>
        <div class="col-xs-6 col-sm-12">
        <select name="field" id="searchfield" class="form-control input-sm">
            <option>Client ID</option>
            <option selected="selected">Client Name</option>
            <option>Company Name</option>
            <option>Email Address</option>
            <option>Address 1</option>
            <option>Address 2</option>
            <option>City</option>
            <option>State</option>
            <option>Postcode</option>
            <option>Country</option>
            <option>Phone Number</option>
            <option>CC Last Four</option>
        </select>
        </div>
        <div class="col-xs-12">
        <div class="input-group input-group-sm">
                <input type="text" name="q" class="form-control" />
            <span class="input-group-btn">
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['search'];?>
" class="btn btn-warning" />
            </span>
        </div>
        </div>
    </form>
</div>

<br />

<span class="plain_header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['staffonline'];?>
</span>
<div class="smallfont"><?php echo $_smarty_tpl->tpl_vars['adminsonline']->value;?>
</div>
<?php }
}
