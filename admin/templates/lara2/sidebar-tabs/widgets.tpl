        <div class="tab-pane" id="control-sidebar-widgets-tab">
		  
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-dashboard bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Homepage Widgets</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>
			<p>Customize your dashboard by choosing what homepage widgets to show/hide.<br></p>
			<div class="form-group">
				{foreach from=$widgets item=widget}
				{if {!$widget.name|in_array:$globalWidgetPermissions}}
					<label class="control-sidebar-subheading">{$widget.title}
						<input class="pull-right" data-widget-state="{$widget.name}" type="checkbox"  {if {${"lara_`$widget.name`_state"}} ne "closed"} checked {/if}>
					</label>
				{/if}
				{/foreach}
			</div>
			
			<div class="form-group">
			    <button class="btn btn-danger btn-block" data-widgets-settings="save" disabled><span><i class="fa fa-refresh"></i></span> Reload Widgets</button>
			</div>
		</div>