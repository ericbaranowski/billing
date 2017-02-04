<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/sidebar-tabs/sub-advancedsearch.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030a987c3_04180667',
  'file_dependency' => 
  array (
    'cfc2e559a78c7d69bded63b8e5ec79468b4016e9' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/sidebar-tabs/sub-advancedsearch.tpl',
      1 => 1479234050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030a987c3_04180667 ($_smarty_tpl) {
?>
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-search bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['advancedsearch'];?>
</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>

            <form method="get" action="search.php">
              <div class="form-group">
			  <p>
				<select name="type" id="searchtype" onchange="populate(this)" class="form-control input-sm">
				  <option value="clients">Clients </option>
				  <option value="orders">Orders </option>
				  <option value="services">Services </option>
				  <option value="domains">Domains </option>
				  <option value="invoices">Invoices </option>
				  <option value="tickets">Tickets </option>
				</select>
			  </p>	
			  <p>
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
			   </p>
			   <p>
				<div class="input-group input-group-sm">
					<input type="text" name="q" class="form-control" />
					<div class="input-group-btn">
						<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['search'];?>
" class="btn btn-warning" />
					</div>
				</div>
                </p>				
              </div><!-- /.form-group -->
            </form>	
<?php }
}
