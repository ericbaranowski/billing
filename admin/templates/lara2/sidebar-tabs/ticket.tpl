          <div class="tab-pane active" id="control-sidebar-ticket-tab">
  
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-ticket bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.support.ticketinfo}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>
			
            <div class="form-group">
			    <label>{$_ADMINLANG.fields.client}</label>
				<p>
					{if $userid}
						<i class="fa fa-user"></i>&nbsp;&nbsp;<a href="clientssummary.php?userid={$userid}"{if $clientgroupcolour} style="background-color:{$clientgroupcolour}"{/if} target="_blank">
						  {$clientname}
						</a>
						{if $contactid} 
						  (<i class="fa fa-user"></i>&nbsp;&nbsp;<a href="clientscontacts.php?userid={$userid}&contactid={$contactid}"{if $clientgroupcolour} style="background-color:{$clientgroupcolour}"{/if} target="_blank">{$contactname}</a>)
						{/if}
					{else}
					     <i class="fa fa-user"></i>&nbsp;&nbsp;<a href="?email={$email|urlencode}">{$name}</a><br />
						 <i class="fa fa-envelope-o"></i>&nbsp;&nbsp;{$email}
					{/if}
				</p>
			</div>
			
			<div class="form-group">
				<label>{$_ADMINLANG.support.staffparticipants}</label>
				<p>
					{foreach from=$staffinvolved item=staffname}
						<i class="fa fa-user"></i>&nbsp;&nbsp;{$staffname}<br />
					{foreachelse}
						- No Replies Yet
					{/foreach}
				</p>
			</div>
			
			<div class="form-group">
				<label>{$_ADMINLANG.support.department}</label>
				<select id="deptid" onchange="updateTicket('deptid')" class="form-control input-sm">
					{foreach from=$departments item=department}
						<option value="{$department.id}"{if $department.id eq $deptid} selected{/if}>{$department.name}</option>
					{/foreach}
				</select>
			</div>
			
			
			<div class="form-group">
			<label>{$_ADMINLANG.support.assignedto}</label>
				<div class="input-group">
					<span class="input-group-addon input-sm"><a href="#" onclick="$('#flagto').val({$adminid});$('#flagto').trigger('change');return false"><i class="fa fa-arrow-circle-right"></i></a></span>
					<select id="flagto" onchange="updateTicket('flagto')" class="form-control input-sm">
						<option value="0">{$_ADMINLANG.global.none}</option>
						{foreach from=$staff item=staffmember}
							<option value="{$staffmember.id}"{if $staffmember.id eq $flag} selected{/if}>{$staffmember.name}</option>
						{/foreach}
					</select>
				</div>
			</div>
			
			
			<div class="form-group">
				<label>{$_ADMINLANG.support.priority}</label>
				<select id="priority" onchange="updateTicket('priority')" class="form-control input-sm">
					<option value="High"{if $priority eq "High"} selected{/if}>{$_ADMINLANG.status.high}</option>
					<option value="Medium"{if $priority eq "Medium"} selected{/if}>{$_ADMINLANG.status.medium}</option>
					<option value="Low"{if $priority eq "Low"} selected{/if}>{$_ADMINLANG.status.low}</option>
				</select>
			</div>


            <div class="form-group">
				<label>{$_ADMINLANG.support.tags}</label>
				<textarea class="form-control" id="ticketTags" rows="2" style="width:200px;"></textarea>
			</div>
			
						
			<div class="form-group watch-ticket">
			    <br />
				{if $watchingTicket}
					<button class="btn btn-danger btn-block btn-sm" id="watch-ticket" type="button" data-admin-full-name="{$adminFullName}" data-admin-id="{$adminid}" data-ticket-id="{$ticketid}" data-type="unwatch">
						{lang key="support.unwatchTicket"}
					</button>
				{else}
					<button class="btn btn-success btn-block btn-sm" id="watch-ticket" type="button" data-admin-full-name="{$adminFullName}" data-admin-id="{$adminid}" data-ticket-id="{$ticketid}" data-type="watch">
						{lang key="support.watchTicket"}
					</button>
				{/if}
			</div>


            <ul class="control-sidebar-menu" >
              <li>
                <a href="#">
                  <i class="menu-icon fa  fa-binoculars bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.support.ticketWatchers}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
					<br />
					<span class="ticketWatchersulcustom">
						<ul id="ticketWatchers">
							{foreach $ticketWatchers as $k => $ticketWatcher}
								<li id="ticket-watcher-{$k}">{$ticketWatcher}</li>
							{/foreach}
							<li id="ticket-watcher-0"{if $ticketWatchers} class="hidden"{/if}>{$_ADMINLANG.global.none}</li>
						</ul>
					</span>
                  </div>
                </a>
              </li>
            </ul>			

		</div>
