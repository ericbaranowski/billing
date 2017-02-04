            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-users bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.global.staffonline}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
					<br />
					{assign var="adminsOnlineArray" value=","|explode:$adminsonline}
					{foreach from=$adminsOnlineArray item=adminOnline}
						<span class="control-sidebar-subheading"><i class="fa fa-user"></i>&nbsp;&nbsp;{$adminOnline}</span>
					{/foreach} 					
                  </div>
                </a>
              </li>
            </ul>