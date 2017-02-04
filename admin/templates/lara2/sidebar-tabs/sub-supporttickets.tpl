            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-filter bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.support.filtertickets}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>			

			<form method="post" action="supporttickets.php">
				<div class="form-group">
					<label>{$_ADMINLANG.fields.status}</label>
					<select name="view" class="form-control input-sm">
						<option value="any">- Any -</option>
						<option value=""{if $ticketfilterdata.view eq ""} selected{/if}>{$_ADMINLANG.support.awaitingreply} ({$ticketsawaitingreply})</option>
						<option value="flagged"{if $ticketfilterdata.view eq "flagged"} selected{/if}>{$_ADMINLANG.support.flagged} ({$ticketsflagged})</option>
						<option value="active"{if $ticketfilterdata.view eq "active"} selected{/if}>{$_ADMINLANG.support.allactive} ({$ticketsallactive})</option>
						{foreach from=$ticketstatuses item=status}
							<option value="{$status.title}"{if $status.title eq $ticketfilterdata.view} selected{/if}>{$status.title} ({$status.count})</option>
						{/foreach}
					</select>
				</div>
				
				<div class="form-group">
					<label>{$_ADMINLANG.support.department}</label>
					<select name="deptid" class="form-control input-sm">
						<option value="">- Any -</option>
						{foreach from=$ticketdepts item=dept}
							<option value="{$dept.id}"{if $dept.id eq $ticketfilterdata.deptid} selected{/if}>{$dept.name}</option>
						{/foreach}
					</select>
				</div>
				
				<div class="form-group">
					<label>{$_ADMINLANG.support.subjectmessage}</label>
					<input type="text" name="subject" value="{$ticketfilterdata.subject}" class="form-control input-sm" />
				</div>
				
				<div class="form-group">
					<label>{$_ADMINLANG.fields.email}</label>
					<input type="text" name="email" value="{$ticketfilterdata.email}" class="form-control input-sm" />
				</div>
				
				<div class="form-group">
					<input type="submit" value="{$_ADMINLANG.global.filter}  &raquo;" class="btn btn-warning btn-block" />
				</div>
			</form>	
