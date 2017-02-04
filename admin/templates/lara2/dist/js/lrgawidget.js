/*
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */


function gauthWindow(url) {
      var newWindow = window.open(url, 'name', 'height=600,width=450');
      if (window.focus) {
        newWindow.focus();
      }
}

function debugWindow() {
      var newWindow = window.open('', 'Debug', 'height=600,width=600,scrollbars=yes');
	  newWindow.document.write("<pre>"+JSON.stringify(lrgawidget_debug, null, " ")+"</pre>");
      if (window.focus) {
        newWindow.focus();
      }
}

var lrgawidget_debug;

(function() {

//Settings
var dateRange = {};
var lrsessionStorageReady = false;
var setup = false;
var debug = false;

function reloadCurrentTab(){
   var $link = $('#lrgawidget li.active a[data-toggle="tab"]');
   $link.parent().removeClass('active');
   var tabLink = $link.attr('href');
   $('#lrgawidget a[href="' + tabLink + '"]').tab('show');	
}

function lrgaErrorHandler(err){
	var error;
	var error_description;
	var error_code;
	var error_debug;
	var message;
	if (typeof err === 'object'){
		error = ((err.error != null) ? "["+err.error+"]" : "");
		error_description = ((err.error_description != null) ? err.error_description : "");
		error_code = ((err.code != null) ? "code ["+err.code+"]" : "");	
		if (err.debug != null){
			error_debug = "<a href='javascript:debugWindow();'>debug</a>";
			lrgawidget_debug = err.debug;
		}
        message = "Error "+error_code+" "+error_debug+":<br> "+error+" "+error_description;
	}else {
		message = err;
	}
    $("#lrgawidget_error").html('<h4><i class="icon fa fa-ban"></i> '+message+'</h4>');
	$("#lrgawidget_error").removeClass("hidden");	
}

function lrWidgetSettings(arr){
	$("#lrgawidget_error").html("").addClass("hidden");
	$("#lrgawidget_mode").html("");
	$("#lrgawidget_loading").html('<i class="fa fa-spinner fa-pulse"></i>');
	if (typeof arr === 'object'){
		try {
			arr.push({name: 'start', value: dateRange.start});
			arr.push({name: 'end', value: dateRange.end});
		}catch(e){
			arr['start'] = dateRange.start;
			arr['end'] = dateRange.end;
		}
	}

	if (debug){console.log(arr)};
	return $.ajax({
		method: "POST",
		url: "addonmodules.php?module=lara_addon",
		data: arr,
		dataType: 'json'
	})
	.done(function (data, textStatus, jqXHR) {
		if (debug){console.log(data)};
		if (data.status != "done"){
			lrgaErrorHandler(data);
		}
		
		if (data.setup === 1){
			setup = true;
			if ($("[href='#lrgawidget_settings_tab']").is(":visible")){
				$("[href='#lrgawidget_settings_tab']").tab('show');
			}else{
				lrgaErrorHandler("Initial Setup Required!<br><br>Please contact an administratior to complete the widget setup.");
			}
		}
		
		if (data.status == "done"){
			if (data.cached){ $("#lrgawidget_mode").html('cached');}
		}		
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
		lrgaErrorHandler(errorThrown);
		if (debug){
			console.log(jqXHR);
			console.log(textStatus);
			console.log(errorThrown);
		}
	})		
	.always(function (dataOrjqXHR, textStatus, jqXHRorErrorThrown) {
		$("#lrgawidget_loading").html("");
	});
}


//Setup
var lrgaProfiles;
var lrgascpurls; 
var lrgaaccountID; 
var webPropertyID;
var profileID;
var webPropertyUrl;
var lrgascpurl; 



function populateViews(){
	$('#lrgawidget-accounts').html("");
	$('#lrgawidget-properties').html("");
	$('#lrgawidget-profiles').html("");
	$('#lrgawidget-scp-url').html("");
	$("#lrgawidget-scpurl-error").addClass("hidden");
    
	$.each(lrgaProfiles, function( index, account ) {
		if (account.id){
			if (!lrgaaccountID){lrgaaccountID = account.id;}
			$('#lrgawidget-accounts').append($("<option></option>").attr("value",account.id).text(account.name)); 
			if (account.id == lrgaaccountID){
				$("#lrgawidget-accname").html(account.name);
				if (account.webProperties){
					$.each(account.webProperties, function( index, webProperty ) {
						if (!webPropertyID){webPropertyID = webProperty.id;}
						$('#lrgawidget-properties').append($("<option></option>").attr("value",webProperty.id).text(webProperty.name + " - [ " + webProperty.id + " ] "));
						if (webProperty.id == webPropertyID){
							$("#lrgawidget-propname").html(webProperty.name);
							$("#lrgawidget-propurl").html(webProperty.websiteUrl+ " - [ " + webProperty.id + " ] ");
							webPropertyUrl = webProperty.websiteUrl;
							if (webProperty.profiles){
								$.each(webProperty.profiles, function( index, profile ) {
									if (!profileID){profileID = profile.id;}
									$('#lrgawidget-profiles').append($("<option></option>").attr("value",profile.id).text(profile.name));
									if (profile.id == profileID){
										$("#lrgawidget-vname").html(profile.name);
										$("#lrgawidget-vtype").html(profile.type);
										
									}
								});
							}
						}											 
					});
				}
			}
		}
	});

	$('#lrgawidget-scp-url').append($("<option></option>").attr("value","").text("-- Select Property URL --"));
	if (lrgascpurls){
		$.each(lrgascpurls, function( i, scpurl ) {
			if (scpurl.siteUrl){
				$('#lrgawidget-scp-url').append($("<option></option>").attr("value",scpurl.siteUrl).text(scpurl.siteUrl));
				if (lrgascpurl == scpurl.siteUrl ){
					$('#lrgawidget-scp-url').val(lrgascpurl);
					$("#lrgawidget-scpurl").html(lrgascpurl);
				}
			}
		});		
	}
	
	if (!$('#lrgawidget-scp-url').val()){
		$("#lrgawidget-scpurl").html("");
		$("#lrgawidget-scpurl-error").removeClass("hidden");
		
		
	}
	
	$('#lrgawidget-accounts').val(lrgaaccountID);
	$('#lrgawidget-properties').val(webPropertyID);
	$('#lrgawidget-profiles').val(profileID);
	
}

$(document).ready(function(){
	
    $("#lrgawidget-credentials").submit(function(e) {
        e.preventDefault();
		lrWidgetSettings($("#lrgawidget-credentials").serializeArray()).done(function (data, textStatus, jqXHR) {
			$('#lrga-wizard').wizard('selectedItem', {step: "lrga-getCode"});
			$('#lrga-wizard #code-btn').attr('href','javascript:gauthWindow("'+data.url+'");');
			$('#lrgawidget-code input[name="client_id"]').val($('#lrgawidget-credentials input[name="client_id"]').val());
			$('#lrgawidget-code input[name="client_secret"]').val($('#lrgawidget-credentials input[name="client_secret"]').val());
		})
	});
	
	
    $("#lrgawidget-code").submit(function(e) {
        e.preventDefault();
		lrWidgetSettings($("#lrgawidget-code").serializeArray()).done(function (data, textStatus, jqXHR) {
			if (data.status == "done"){
				$('#lrga-wizard').wizard('selectedItem', {step: "lrga-profile"});
			}
		})
	});	
	
    $("#lrgawidget-setProfileID").submit(function(e) {
        e.preventDefault();
		lrWidgetSettings($("#lrgawidget-setProfileID").serializeArray()).done(function (data, textStatus, jqXHR) {
			if (data.status == "done"){
				$("#lrgawidget a[href^='#lrgawidget_']:eq(1)").click();
			}
		})	
	});		
	
	$('#lrga-wizard').on('changed.fu.wizard', function (evt, data) {
		if ($("[data-step="+data.step+"]").attr("data-name") == "lrga-profile"){
			lrWidgetSettings({action: "getProfiles"}).done(function (data, textStatus, jqXHR) {
				if (data.status == "done"){
					lrgaaccountID = data.current_selected.account_id;
					webPropertyID = data.current_selected.property_id;
					profileID = data.current_selected.profile_id;
					lrgascpurl = data.current_selected.scp_url;
					lrgaProfiles = data.all_profiles;
					lrgascpurls = data.web_master_sites;
					populateViews();
					setup = false;
				}
			})
		}
	});
	
	$('#lrgawidget-accounts').on('change', function() {
		lrgaaccountID = this.value;
		webPropertyID = "";
		profileID = "";
		populateViews();
	});

	$('#lrgawidget-properties').on('change', function() {
		webPropertyID = this.value;
		profileID = "";
		populateViews();
	});	

	$('#lrgawidget-profiles').on('change', function() {
		profileID = this.value;
		populateViews();
	});	
	
	$('#lrgawidget-scp-url').on('change', function() {
		lrgascpurl = this.value;
		populateViews();		
	});	

	$('a[data-reload="lrgawidget_reload_tab"]').on('click', function(e) {
		 e.preventDefault();
		 reloadCurrentTab();
	});
	
});

function drawRegionsMap(countriesMapData) {
	$('#lrgawidget_countries_chartDiv').empty();
	if ($('#lrgawidget_countries_chartDiv').is(":visible")){
		$('#lrgawidget_countries_chartDiv').vectorMap({
			map: 'world_mill_en',
			backgroundColor: "#5FA3CA",
			regionStyle: {
			  initial: {
				fill: '#fff',
				"fill-opacity": 1,
				stroke: 'none',
				"stroke-width": 0,
				"stroke-opacity": 1
			  }
			},
			series: {
			  regions: [{
				values: countriesMapData,
				scale: [ "#ebf4f9", "#92c1dc"],
				normalizeFunction: 'polynomial'
			  }]
			},
			onRegionLabelShow: function (e, el, code) {
			  el.html("<img src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' class='flag flag-"+code.toLowerCase()+"'><b>"+el.html()+"</b>");	
			  if (typeof countriesMapData[code] != "undefined"){
				  el.html(el.html() + '<br>' + countriesMapData[code] + ' Sessions');
			  }
			}
		});
	}
}


var pieColors = ['#8a56e2','#cf56e2','#e256ae','#e25668','#e28956','#e2cf56','#aee256','#68e256','#56e289','#56e2cf','#56aee2','#a6cee3'];
pieColors.reverse(); 



var pieObjects = {};

function tooltipFunction(v, pieData, legendHeader){
	var percent;
	var tip;
	$.each(pieData, function( i, obj ){
		if (v.value == obj.value){
			percent = obj.percent;
			return false;
		}
	});
	if (percent){
		tip = legendHeader+" "+v.label+" - Sessions: "+v.value+" - "+percent+" %";
	}else{
		tip = legendHeader+" "+v.label+" - Clicks: "+v.value;
	}
	return tip;
}
	
function drawDPieChart (tabName, pieData, legendHeader , iconName , iconColor ) {
	var chartName = "#lrgawidget_"+tabName+"_chartDiv";
	var legendName = "#lrgawidget_"+tabName+"_legendDiv";
	
	$(legendName).empty();
	 if(pieObjects[tabName]!=null  && !$.isEmptyObject(pieObjects[tabName])){
		pieObjects[tabName].destroy();
		pieObjects[tabName] = {};
	}
		
	if ($(chartName).is(":visible")){
		var helpers = Chart.helpers;
		var options = { animateRotate : true,
						animationSteps: 100,
						segmentShowStroke : true, 
						animationEasing: 'easeInOutQuart',
						middleIconName: iconName,
						middleIconColor: iconColor,
						legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><i class=\"fa fa-circle-o fa-fw\" style=\"color:<%=segments[i].fillColor%>\"></i>  <%if(segments[i].label){%><%if(segments[i].label.length > 18){%><%=segments[i].label.substring(0, 18)%><%=\" ...\"%><%}else{%><%=segments[i].label%><%}%><%}%>   </li><%}%></ul>",
						tooltipTemplate: function(v) {return tooltipFunction(v, pieData, legendHeader);}
						 };
		var ctx = $(chartName).get(0).getContext("2d");

		var moduleDoughnut  = new Chart(ctx).DoughnutWithMiddleIcon(pieData,options);

		pieObjects[tabName] = moduleDoughnut;
		
			var legendHolder = document.createElement('div');
			legendHolder.innerHTML = moduleDoughnut.generateLegend();
			helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
				helpers.addEvent(legendNode, 'mouseover', function(){
					var activeSegment = moduleDoughnut.segments[index];
					activeSegment.save();
					activeSegment.fillColor = activeSegment.highlightColor;
					moduleDoughnut.showTooltip([activeSegment]);
					activeSegment.restore();
				});
			});
			helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
				moduleDoughnut.draw();
			});
			
			$(legendName).append(legendHolder.firstChild);
	}
	
}

var mainChart;

function drawGraph(data,name){
	var ttip="";
	$("#lrgawidget_sessions_chart_tooltip").remove();
	$("#lrgawidget_sessions_chartDiv").removeData("plot").empty();

	if (mainChart){
        mainChart.shutdown();
		mainChart.destroy();
        mainChart = null;
	}

	mainChart = $.plot($("#lrgawidget_sessions_chartDiv"), [data], {
					grid: {
							hoverable: true,
							borderColor: "#f3f3f3",
							borderWidth: 1,
							tickColor: "#f3f3f3",
							mouseActiveRadius: 350
					},
					series: {
							shadowSize: 1,
							lines: { show: true },
							points: { show: true}
					},
					lines: {
							fill: true,
							color: ["#3c8dbc", "#f56954"]
					},
					yaxis: {
							show: true,
					},
					xaxis: {
							mode: "time",
							timeformat: "%b %d"
					},
					colors :  ["#3c8dbc"]
				});
	
	$('<div class="tooltip-inner" id="lrgawidget_sessions_chart_tooltip"></div>').css({
		"text-align": "left",
		"position": "absolute",
		"display": "none",
		"opacity": 0.8
	}).appendTo("body");

	if ((name == "percentNewSessions") || (name == "bounceRate")){ ttip = " %";} 
	
	$("#lrgawidget_sessions_chartDiv").bind("plothover", function (event, pos, item) {
		if (item) {
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1],
					formattedDateString = moment(item.datapoint[0]).format('ddd, MMMM D, YYYY');
					if (name == "avgSessionDuration" ){ y = formatSeconds(y);}
					
					
					
					if(item.pageX + 200 > $(document).width()){ item.pageX = $(document).width() - 200; }					
					
					$("#lrgawidget_sessions_chart_tooltip").html(formattedDateString + "<br>" + item.series.label + " : " + y + ttip)
						.css({top: item.pageY - 25, left: item.pageX + 15})
						.show();
					} else {
						$("#lrgawidget_sessions_chart_tooltip").hide();
						$("#lrgawidget_sessions_chart_tooltip").empty();
					}
	});
}



var browsersIcons = {"chrome":{"hex": "\uf268", "icon" : "fa-chrome", "color" : "#4587F3"},
                     "firefox":{"hex": "\uf269", "icon" : "fa-firefox", "color" : "#e66000"},
					 "safari":{"hex": "\uf267", "icon" : "fa-safari", "color" : "#1B88CA"},
					 "safari (in-app)":{"hex": "\uf179", "icon" : "fa-apple", "color" : "#979797"},
					 "internet explorer":{"hex": "\uf26b", "icon" : "fa-internet-explorer", "color" : "#1EBBEE"},
					 "edge":{"hex": "\uf282", "icon" : "fa-edge", "color" : "#55acee"},
					 "opera":{"hex": "\uf26a", "icon" : "fa-opera", "color" : "#cc0f16"},
					 "opera mini":{"hex": "\uf26a", "icon" : "fa-opera", "color" : "#cc0f16"},
					 "android browser":{"hex": "\uf17b", "icon" : "fa-android", "color" : "#a4c639"},
					 "mozilla compatible agent":{"hex": "\uf136", "icon" : "fa-maxcdn", "color" : "#FF6600"},
					 "default_icon":{"hex": "\uf022", "icon" : "fa-list-alt", "color" : "#1EBBEE"}
					 };
						  
var osIcons = {"chrome os":{"hex": "\uf268", "icon" : "fa-chrome", "color" : "#4587F3"},
               "ios":{"hex": "\uf179", "icon" : "fa-apple", "color" : "#979797"},
			   "windows":{"hex": "\uf17a", "icon" : "fa-windows", "color" : "#1EBBEE"},
			   "linux":{"hex": "\uf17c", "icon" : "fa-linux", "color" : "#000000"},
			   "macintosh":{"hex": "\uf179", "icon" : "fa-apple", "color" : "#979797"},
			   "windows phone":{"hex": "\uf17a", "icon" : "fa-windows", "color" : "#1EBBEE"},
			   "android":{"hex": "\uf17b", "icon" : "fa-android", "color" : "#a4c639"},
			   "default_icon":{"hex": "\uf108", "icon" : "fa-desktop", "color" : "#1EBBEE"}
			   };

var languagesIcons = {"default_icon":{"hex": "\uf031", "icon" : "fa-font", "color" : "#1EBBEE"}};
var screenresIcons = {"default_icon":{"hex": "\uf0b2", "icon" : "fa-arrows-alt", "color" : "#1EBBEE"}};
var sourcesIcons = {"default_icon":{"hex": "\uf14c", "icon" : "fa-external-link-square", "color" : "#1EBBEE"}};
var pagesIcons = {"default_icon":{"hex": "\uf016","icon" : "fa-file-o", "color" : "#1EBBEE"}};			   
var keywordsIcons = {"default_icon":{"hex": "\uf002","icon" : "fa-search", "color" : "#1EBBEE"}};

var dataTableDefaults = { "paging": true,
						  "pagingType": "full",
						  "lengthChange": false,
						  "searching": false,
						  "ordering": true,
						  "info": true,
						  "autoWidth": false,
						  "pageLength": 7,
						  "retrieve": true,
						  "columnDefs": [{ "width": "60%", "targets": 0 }],
						  "order": [[ 1, "desc" ]]};
						  
function getIcon (name, icons){
	var sname = name.toLowerCase();
	if ( icons[sname] ){
		return {"hex" : icons[sname]['hex'], "name" : icons[sname]['icon'], "color" : icons[sname]['color']};
	}else{
		return {"hex" : icons['default_icon']['hex'], "name" : icons['default_icon']['icon'], "color" : icons['default_icon']['color']};
	}
}

function prepareTable(tableName, options){
	var settings = $.extend({}, dataTableDefaults, options);
	var table = $(tableName).DataTable(settings);
	return table;
}

function prepareData(data, icons){
	var pieData = [];
	var tableData = [];
	var combined = 0;
	var combinedPercent = 0;
	var lIndex = 0;	
	
	$.each(data, function( i, row ){
		if ($.isArray(row)){
			var icon = getIcon (row[0], icons);
			if ((row[2] <= 1) || (i >= 11)){
				combined = combined + parseFloat(row[1]);
				combinedPercent = combinedPercent + parseFloat(row[2]);
			}else{
				pieData[i] = { label: row[0],  value: row[1], percent: row[2] ,color: pieColors[i]};
			}
			
			tableData[i] = [row[0],"<i class='fa "+icon.name+" fa-lg fa-fw' style='color:"+icon.color+";'></i>&nbsp;&nbsp;"+row[0],row[1],row[2]+" %"];
			lIndex = i;
		}
	});
	if ( combined > 0){
		pieData.push({label: "Others",  value: combined,  percent: parseFloat(Math.round(combinedPercent * 100) / 100).toFixed(2), color: pieColors[lIndex]});
	}
	return [tableData, pieData];
}

function drawTablePie(tabName, callName, icons){
	var tableName = "#lrgawidget_"+tabName+"_dataTable";
	var pieData = [];
	var options = {"columnDefs": [{"targets": [ 0 ],"visible": false,"searchable": false},{ "width": "60%", "targets": 1 }],
	               "order": [[ 2, "desc" ]]	};
	   
	var table = prepareTable(tableName, options);
	table.clear();
	
	lrWidgetSettings({action : callName}).done(function (data, textStatus, jqXHR) {
		if (data.status == "done"){
			var processedData = prepareData(data, icons);
			table.rows.add(processedData[0]);
			table.draw();
			drawDPieChart(tabName, processedData[1],"",icons['default_icon']['hex'], icons['default_icon']['color']);
		}
	});
	return table;			
}

function versionsPie(tabName, callName, icons, tableObj, cObject){
	var rdata = tableObj.row( cObject ).data();
	$("#lrgawidget_"+tabName+"_dataTable tbody tr").removeClass('selected');
	$(cObject).addClass('selected');			
	lrWidgetSettings({action: callName , versions: rdata[0] }).done(function (data, textStatus, jqXHR) {
		if (data.status == "done"){
			var processedData = prepareData(data, icons);
			var icon = getIcon (rdata[0], icons);
			drawDPieChart(tabName, processedData[1],rdata[0],icon.hex, icon.color);
	    }
	});	
}

function formatSeconds(totalSec){
	var hours   = Math.floor(totalSec / 3600);
	var minutes = Math.floor((totalSec - (hours * 3600)) / 60);
	var seconds = totalSec - (hours * 3600) - (minutes * 60);
	var fseconds = seconds.toFixed(0);
	var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (fseconds  < 10 ? "0" + fseconds : fseconds);	
	return result;
}

function drawSparkline(id, data, color){
	if (!color){color = '#b1d1e4';}
	$(id).sparkline(data.split(','), {
		type: 'line',
		lineColor: "#3c8dbc",
		fillColor: color,
		spotColor: "#3c8dbc",
		minSpotColor: "#3c8dbc",
		maxSpotColor: "#3c8dbc",
		drawNormalOnTop: false,
		disableTooltips: true,
		disableInteraction: true,
		width:"100px"
		});
}

var plotData = {};
var plotTotalData = {};
var selectedPname = "";

function drawMainGraphWidgets(data, selected){
	if ($('#lrgawidget_sb-main').is(":visible")){
		$.each(data, function( name, raw ){
			var appnd = "";
			var color = "";
			if ((name == "percentNewSessions") || (name == "bounceRate")){ appnd = " %";} 
			if (name == selected ){  color = "#77b2d4";} 		
			$("#lrgawidget_sb_"+name+" .description-header").html(raw['total']+appnd);
			drawSparkline("#lrgawidget_spline_"+name, raw['data'], color);
		});
	}
}

function drawMainGraph(){
	lrWidgetSettings({action : "getSessions"}).done(function (data, textStatus, jqXHR) {
		if(!setup){
			plotData = data.plotdata;
			plotTotalData = data.totalsForAllResults;
			if (!selectedPname){selectedPname = "sessions";}
			drawGraph(plotData[selectedPname], selectedPname);
			drawMainGraphWidgets(plotTotalData);
			$("#lrgawidget_sb_"+selectedPname).addClass("selected");
		}
	});	
}

function drawKeywords(){
	var table = prepareTable("#lrgawidget_keywords_dataTable", {"language": {"emptyTable": "No data available in table.\
                                                                                          <sopan class='pull-left'>\
                                                                                            <ul><li>Did you <a href='https://support.google.com/webmasters/answer/34592?hl=en' target='_blank'>add your website to Google Search Console</a> ?</li>\
																						        <li>After adding your website to Google Search Console, did you save it as the <b>'Search Console Property URL'</b> in the widget <b>Settings</b> tab ?</li>\
																						        <li>If you've added your website recently, keywords may take some time to appear.</li></ul></span> "},
		                                                        "pageLength": 6,"columnDefs": [{"targets": [ 0 ],"visible": false,"searchable": false},{ "width": "60%", "targets": 1 }],"order": [[ 2, "desc" ]]});
	var pieData = [];
	var combined = 0;
	var lIndex = 0;
	table.clear();
	lrWidgetSettings({action : "getKeywords"}).done(function (data, textStatus, jqXHR) {
		if (data.status == "done"){
			$.each(data, function( i, row ){
				if ($.isArray(row.keys)){
					var icon = getIcon (row.keys[0], keywordsIcons);
					table.row.add([row.keys[0],"<i class='fa "+icon.name+" fa-lg fa-fw' style='color:"+icon.color+";'></i>&nbsp;&nbsp;"+row.keys[0], row.clicks,row.impressions,row.ctr.toFixed(2)+" %", row.position.toFixed(2)]);
					if ((row.clicks <= 1) || (i >= 11)){
						combined = combined + parseFloat(row.clicks);
					}else{
						pieData[i] = { label: row.keys[0],  value: row.clicks , color: pieColors[i]};
					}
					lIndex = i;
				}
			});
			table.draw();
			
			if ( combined > 0){
				pieData.push({label: "Others",  value: combined, color: pieColors[lIndex]});
			}					
			drawDPieChart("keywords", pieData,"",keywordsIcons['default_icon']['hex'], keywordsIcons['default_icon']['color']);
		}
	});
	return table;
}

function getObjFromCache(name){
	if (lrsessionStorageReady === true){
		var item = sessionStorage.getItem(name);
		return JSON.parse(item);
	}else{return null;}
}

function saveObjToCache(name, obj){
	if (lrsessionStorageReady === true){
		var strObj = JSON.stringify(obj);
		return sessionStorage.setItem(name, strObj);
	}else{return null;}	
}




function cb(start, end, label) {
	$('#lrgawidget_reportrange').html(moment(start).format('MMMM D, YYYY') + ' - ' + moment(end).format('MMMM D, YYYY'));
	dateRange.start = moment(start).format('YYYY-MM-DD');
	dateRange.end = moment(end).format('YYYY-MM-DD');
	if (debug){console.log(dateRange)};
	if (lrsessionStorageReady === true){
		saveObjToCache('dateRange', dateRange);
	}
	reloadCurrentTab();
}

$(document).ready(function(){
	
	dateRange = {start : moment().subtract(29, 'days').format('YYYY-MM-DD'),  end : moment().format('YYYY-MM-DD')};

	if (typeof (sessionStorage) !== "undefined"){
		lrsessionStorageReady = true;
		if (getObjFromCache('dateRange') !== null){
			dateRange = getObjFromCache('dateRange');
		}else{
			saveObjToCache('dateRange', dateRange);
		}
	}

	$('#lrgawidget_reportrange').html(moment(dateRange.start).format('MMMM D, YYYY') + ' - ' + moment(dateRange.end).format('MMMM D, YYYY'));
	$('#lrgawidget_daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
		  "opens": "left"
        }, cb);


	$("[data-lrgawidget-reset]").on('click', function () {
		if (confirm("All saved authentication data will be removed.\nDo you want to continue ?!") == true) {
			lrWidgetSettings({action : "settingsReset"}).done(function (data, textStatus, jqXHR) {
				if (data.status == "done"){
					$('#lrga-wizard').wizard('selectedItem', {step: 1});
					$("[data-lrgawidget-reset]").hide();
				}
			});	
		}
	});			
	
	$("#lrgawidget_main a[data-toggle='tab']").on('shown.bs.tab', function (e) {
		$("#lrgawidget_sessions_chart_tooltip").remove();
		$(".jvectormap-label").remove();
		
		if (this.hash == "#lrgawidget_settings_tab"){
			if (!setup){
				$('#lrga-wizard').wizard('selectedItem', {step: "lrga-profile"});
				$("#lrga-wizard .steps li").removeClass("complete");
				$("[data-lrgawidget-reset]").show();
			}
	    }else if (this.hash == "#lrgawidget_sessions_tab"){
			drawMainGraph();
		}else if (this.hash == "#lrgawidget_countries_tab"){
			
			var countriesTable = prepareTable("#lrgawidget_countries_dataTable", {});
			
			countriesTable.clear();
			
			var countriesMapData = {};
			
			lrWidgetSettings({action : "getCountries"}).done(function (data, textStatus, jqXHR) {
				if (data.status == "done"){
					$.each(data, function( index, row ){
						if ($.isArray(row)){
							countriesMapData[row[0]] = row[2];
							countriesTable.row.add(["<img src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' class='flag flag-"+row[0].toLowerCase()+"'>  "+row[1],row[2],row[3]+" %"]);
						}
					});
					countriesTable.draw();
					drawRegionsMap(countriesMapData);
				}
			});			

		}else if (this.hash == "#lrgawidget_browsers_tab"){

			browsersTable = drawTablePie("browsers", "getBrowsers", browsersIcons);

		}else if (this.hash == "#lrgawidget_languages_tab"){
			
			languagesTable = drawTablePie("languages", "getLanguages", languagesIcons);
		
		}else if (this.hash == "#lrgawidget_os_tab"){
			
			osTable = drawTablePie("os", "getOS", osIcons);
		
		}else if (this.hash == "#lrgawidget_screenres_tab"){
			
			screenresTable = drawTablePie("screenres", "getScreenResolution", screenresIcons);
			
		}else if (this.hash == "#lrgawidget_keywords_tab"){
			
			keuwordsTable = drawKeywords();
			
		}else if (this.hash == "#lrgawidget_sources_tab"){
			
			sourcesTable = drawTablePie("sources", "getSources", sourcesIcons);
			
		}else if (this.hash == "#lrgawidget_pages_tab"){
			
			pagesTable = drawTablePie("pages", "getPages", pagesIcons);
			
		}
		
	});
 
    $("#lrgawidget_browsers_dataTable tbody").on('click', 'tr', function () {
		versionsPie("browsers", "getBrowsers", browsersIcons, browsersTable, this);
    });	
	
    $("#lrgawidget_os_dataTable tbody").on('click', 'tr', function () {
		versionsPie("os", "getOS", osIcons, osTable, this);
    });
	
	$("[data-lrgawidget-plot]").on('click', function (e) {
		e.preventDefault();
		selectedPname = $(this).data('lrgawidget-plot');
		drawGraph(plotData[selectedPname] , selectedPname);
		$("[data-lrgawidget-plot]").removeClass("selected");
		$(this).addClass("selected");	
	});
	
	
});

})();

