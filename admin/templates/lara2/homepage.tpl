
{if $maintenancemode}
    <div class="errorbox" style="font-size:14px;">
        {$_ADMINLANG.home.maintenancemode}
    </div>
    <br />
{/if}

{$infobox}


{foreach from=$addons_html item=addon_html}
    <div class="addon-html-output-container">
        {$addon_html}
    </div>
{/foreach}

		  {if {"system_overview"|in_array:$globalWidgetNames} }
		    {include file="$template/widgets/sysoverviewbanner.tpl"}
		  {/if}
		  
		  {if {"lrgawidget"|in_array:$globalWidgetNames} && {{${"lara_lrgawidget_state"}} ne "closed"}}
		    <div>
				{include file="$template/widgets/lrgawidget.tpl"}
			</div>
		  {/if}
		  
		  <div class="row">
		    <div class="col-sm-6">
			    <div class="homecolumn left" id="homecol1" style="min-height: 100px;">
				
		    {assign var=googleChartsWidgets value=["income_overview","orders_overview", "supporttickets_overview"]}
            {foreach from=$widgets item=widget}
				{if {{${"lara_`$widget.name`_state"}} ne "closed"} && {$widget.name ne "lrgawidget"} && {!$widget.name|in_array:$globalWidgetPermissions}}
					<div class="homewidget box box-primary" id="{$widget.name}">
					  <div class="widget-header box-header with-border">
					   
					  {if $widget.name|in_array:$googleChartsWidgets}
						<h3 class="box-title"><i class="fa fa-line-chart "></i>&nbsp;&nbsp;&nbsp;{$widget.title}</h3>
					  {else}
						<h3 class="box-title">{$widget.title}</h3> 
					  {/if}

					  </div><!-- /.box-header -->
					  <div class="widget-content box-body">
					 {if $widget.name|in_array:$googleChartsWidgets}
						{$widget.content|replace:'google':'customChartDraw'}
					 {else}
						{$widget.content} 
					 {/if}
					  </div><!-- /.box-body -->
					</div><!-- /.box -->			
				{/if}
            {/foreach}

        </div>
    </div>
    <div class="col-sm-6">
        <div class="homecolumn right" id="homecol2" style="min-height: 100px;">

        </div>
    </div>
</div>

{$generateInvoices}
{$creditCardCapture}
