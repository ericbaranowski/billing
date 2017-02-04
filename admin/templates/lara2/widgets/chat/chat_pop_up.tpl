<div id="lrchat-widget" class="box box-primary direct-chat direct-chat-primary " style="{if ($lara_lrchat_state == 'closed') || (!$lara_lrchat_lastuid)} display: none; {/if}">
	  <div class="box-header with-border">
		<h3 class="box-title" id="lrchat-title"></h3>
		<div class="box-tools pull-right">
		  <span id="lrchat_loading"></span>
		  <button class="btn btn-box-tool" data-toggle="tooltip" title="Staff" data-widget="lrchat-contacts" ><i class="fa fa-comments notifications-icon" ></i><span class="label label-danger notifications-count" data-widget="lrchat-notifications-count" ></span></button>
		  <button class="btn btn-box-tool hidden-xs" data-widget="lrchat-collapse"><i class="fa {if $lara_lrchat_state == 'collapsed'} fa-plus {else} fa-minus {/if}"></i></button>
		  <button class="btn btn-box-tool" data-widget="lrchat-hide"><i class="fa fa-times"></i></button>
		</div>
	  </div><!-- /.box-header -->
	  
	  <div id="lrchat-body-container" {if $lara_lrchat_state == 'collapsed'} style="display: none;" {/if} >
		  <div id="lrchat-box-body" class="box-body">
			<!-- Conversations are loaded here -->
			<div class="direct-chat-messages" id="lrchat-chat-window"></div>
			<div class='direct-chat-error' id="lrchat-chat-error" style="display: none;"></div>

			<!-- Contacts are loaded here -->
			<div class="direct-chat-contacts" id="lrchat-chat-contacts">
			  <ul id="lrchat-popup-nav-contacts" class="contacts-list">
			  {foreach from=$laraChatAdmins key=adminID item=adminDetails}
				  {if $adminDetails.cuser != 1}
				<li>
				  <a href="#" data-lrchat-adminid="{$adminID}" data-lrchat-adminname="{$adminDetails.name}">
					<img class="contacts-list-img" src="//www.gravatar.com/avatar.php?gravatar_id={$adminDetails.uimg}" alt="Contact Avatar">
					<div class="contacts-list-info">
					  <span class="contacts-list-name">
						{$adminDetails.name} <span data-lrchat-notificationsfor="{$adminID}"></span>
						
						<small class="contacts-list-date pull-right" data-lrchat-onlinestatusefor="{$adminID}" >{if $adminDetails.status == '1'}<i class="fa fa-circle text-success"></i>{/if}</small>
					  </span>
					  <span class="contacts-list-msg" data-lrchat-messagefor="{$adminID}"></span>
					  <small class="contacts-list-date pull-right" data-lrchat-timestampfor="{$adminID}" ></small>
					</div><!-- /.contacts-list-info -->
				  </a>
				</li><!-- End Contact Item -->
				{/if}
			  {/foreach}	
			  </ul><!-- /.contatcts-list -->
			</div><!-- /.direct-chat-pane -->
		  </div><!-- /.box-body -->
		  <div id="lrchat-box-footer" class="box-footer">
		  <form id="lrchat-sendmsg" name="lrchat-sendmsg" role="form">
			<input name="lrchat" value="true" type="hidden">
			<input name="command" value="sendmsg" type="hidden">
			<input name="userid" value="{$lara_lrchat_lastuid}" type="hidden">
			<div class="input-group">
			  <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="lrchat-message">
			  <span class="input-group-btn">
				<button type="submit" class="btn btn-danger btn-flat" id="lrchat-sendmsg-submit">Send</button>
			  </span>
			</div>
		  </form> 
		  </div><!-- /.box-footer-->
	  </div><!-- /.container-->
</div><!--/.direct-chat -->