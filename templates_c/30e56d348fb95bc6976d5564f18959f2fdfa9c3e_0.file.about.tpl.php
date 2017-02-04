<?php
/* Smarty version 3.1.29, created on 2016-12-19 03:12:48
  from "/home/billing/public_html/admin/templates/lara/sidebar-tabs/about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58575030aa2d36_63149430',
  'file_dependency' => 
  array (
    '30e56d348fb95bc6976d5564f18959f2fdfa9c3e' => 
    array (
      0 => '/home/billing/public_html/admin/templates/lara/sidebar-tabs/about.tpl',
      1 => 1479234049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58575030aa2d36_63149430 ($_smarty_tpl) {
?>
          <div class="tab-pane" id="control-sidebar-about-tab">
		  
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa  fa-info bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">AdminLTE-WHMCS</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
					<p>Code Name : Lara</p>
                  </div>
                </a>
              </li>
            </ul>

            <ul class="control-sidebar-menu">
              <li>
                  <div class="menu-info">                  

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-code-fork bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['version'];?>
</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['lara_general_settings']->value['version'];?>
</p>
						  </div>
						</a>
					  </li>
					</ul>
                  </div>				
              </li>
            </ul>			

            <ul class="control-sidebar-menu">
              <li>
                  <div class="menu-info">                  

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-copyright bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">Copyright 2015</h4>
							<p>Amr M. Ibrahim</p>
						  </div>
						</a>
					  </li>
					</ul>
                  </div>				
              </li>
            </ul>

            <ul class="control-sidebar-menu">
              <li>
                  <div class="menu-info">                  

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-envelope  bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">Contact</h4>
							<p>mailamr@gmail.com</p>
						  </div>
						</a>
					  </li>
					</ul>
                  </div>				
              </li>
            </ul>			
		  </div><?php }
}
