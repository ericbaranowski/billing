          <div class="tab-pane active" id="control-sidebar-addonmodules-tab">
		  
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-puzzle-piece bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.utilities.addonmodules}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>
			
			<div class="box box-danger">
			    <div class="box-body">
					{$addon_module_sidebar|replace:'class="header"':'class="box-header"'}
				</div>
			</div>
			
		</div>