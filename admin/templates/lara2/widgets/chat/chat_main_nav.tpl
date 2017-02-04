 				  <li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  <i class="fa fa-comments"></i>
					  <span class="label label-success" data-widget="lrchat-notifications-count"></span>
					</a>
					<ul class="dropdown-menu">
					  <li class="header">Staff</li>
					  <li>
						<!-- inner menu: contains the actual data -->
						<ul id="lrchat-top-nav-contacts" class="contacts-list">
						  {foreach from=$laraChatAdmins key=adminID item=adminDetails}
							{if $adminDetails.cuser != 1}
							  <li><!-- start message -->
								<a href="#" data-lrchat-adminid="{$adminID}" data-lrchat-adminname="{$adminDetails.name}">
									<img class="contacts-list-img" src="//www.gravatar.com/avatar.php?gravatar_id={$adminDetails.uimg}">
									<div class="contacts-list-info">
									  <span class="contacts-list-name">
										{$adminDetails.name} <span data-lrchat-notificationsfor="{$adminID}"></span>
										
										<small class="contacts-list-date pull-right" data-lrchat-onlinestatusefor="{$adminID}" >{if $adminDetails.status == '1'}<i class="fa fa-circle text-success"></i>{/if}</small>
									  </span>
									  <span class="contacts-list-msg" data-lrchat-messagefor="{$adminID}"></span>
									  <small class="contacts-list-date pull-right" data-lrchat-timestampfor="{$adminID}" ></small>
									</div><!-- /.contacts-list-info -->
								</a>
							  </li>
							  {/if}
						  {/foreach}
						  
						  <!-- end message -->
						</ul>
					  </li>
					</ul>
				  </li>