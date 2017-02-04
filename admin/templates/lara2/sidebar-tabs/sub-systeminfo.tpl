            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-info bg-red "></i>
                  <div class="menu-info">                  
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.global.systeminfo}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
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
						  <i class="menu-icon fa fa-key bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">{$_ADMINLANG.license.regto}</h4>
							<p>{$licenseinfo.registeredname}</p>
						  </div>
						</a>
					  </li>
					</ul>

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-info bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">{$_ADMINLANG.license.type}</h4>
							<p>{$licenseinfo.productname}</p>
						  </div>
						</a>
					  </li>
					</ul>

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-calendar-o  bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">{$_ADMINLANG.license.expires}</h4>
							<p>{$licenseinfo.expires}</p>
						  </div>
						</a>
					  </li>
					</ul>

					<ul class="control-sidebar-menu">
					  <li>
						<a href="#">
						  <i class="menu-icon fa fa-code-fork  bg-light-blue "></i>
						  <div class="menu-info">
							<h4 class="control-sidebar-subheading">{$_ADMINLANG.global.version}</h4>
							<p>{$licenseinfo.currentversion}</p>
							{if $licenseinfo.updateavailable}
							<p>{$_ADMINLANG.license.updateavailable}</p>
							{/if}
						  </div>
						</a>
					  </li>
					</ul>

                  </div>				
              </li>
            </ul>