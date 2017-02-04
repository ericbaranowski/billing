      <!-- Control Sidebar -->
	  <aside class="control-sidebar {if $lara_sidebar_skin} {$lara_sidebar_skin} {else} control-sidebar-dark {/if}">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
		  {if $ticketTabStatus }<li class="active"><a href="#control-sidebar-ticket-tab" data-toggle="tab"><i class="fa fa-ticket"></i></a></li>{/if}
		  {if $addonmodulesTabStatus }<li class="active"><a href="#control-sidebar-addonmodules-tab" data-toggle="tab"><i class="fa fa-puzzle-piece"></i></a></li>{/if}
          {if $homeTabStatus }<li class="active">{else}<li>{/if} <a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-search"></i></a></li>
		  {if $sidebar eq "home"}<li><a href="#control-sidebar-widgets-tab" data-toggle="tab"><i class="fa fa-dashboard"></i></a></li>{/if}
          <li><a href="#control-sidebar-skins-tab" data-toggle="tab"><i class="fa  fa-paint-brush"></i></a></li>
		  <li><a href="#control-sidebar-about-tab" data-toggle="tab"><i class="fa  fa-info-circle"></i></a></li>
		  
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
		
		    {if $addonmodulesTabStatus }
			  {include file="$template/sidebar-tabs/addonmodules.tpl"}
			{/if}
			
			{if $ticketTabStatus }
			  {include file="$template/sidebar-tabs/ticket.tpl"}
			{/if}
			
			<!-- Home tab content -->
			{if $homeTabStatus }<div class="tab-pane active" id="control-sidebar-home-tab">{else}<div class="tab-pane" id="control-sidebar-home-tab">{/if}
			
				{if $sidebar eq "support"}
				  {include file="$template/sidebar-tabs/sub-supporttickets.tpl"}
				  {if ($inticketlist) && ($tagcloud ne "None") }
				   	{include file="$template/sidebar-tabs/sub-tagcloud.tpl"}
				  {/if}			
				{/if}
				
				{include file="$template/sidebar-tabs/sub-advancedsearch.tpl"}
				
				{if $sidebar eq "home"} 
					{include file="$template/sidebar-tabs/sub-systeminfo.tpl"}
				{/if}
				
				{include file="$template/sidebar-tabs/sub-staffonline.tpl"}
			</div>
			
			{if $sidebar eq "home"}
				{include file="$template/sidebar-tabs/widgets.tpl"}
			{/if}			
			
			{include file="$template/sidebar-tabs/skins.tpl"}
			{include file="$template/sidebar-tabs/about.tpl"}	
			
		</div>
      </aside>
    <div class="control-sidebar-bg"></div>
