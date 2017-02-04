function searchclose() {
    $("#searchresults").slideUp();
}

function notesclose(save) {
    $('#myNotes').modal('hide');
    if (save) {
        $.post("index.php", $("#frmmynotes").serialize());
    }
}

function setThemeSettings(settingsArray){
	var errormsg="";
	$.ajax({
		type    : 'POST',
		url     : "addonmodules.php?module=lara_addon",
		data    : settingsArray,
		dataType: 'json',
		success: function(data, textStatus, jqXHR) { },
		error: function(jqXHR, textStatus, errorThrown) { 
					$('#ljsonerror').remove();
					$('section.content').prepend("<div id='ljsonerror' class='callout callout-danger'><h4>Error :</h4>Couldn't save settings! .. Make sure that your administrator group has access to <b>Lara Theme Settings</b> module </div>");
		}
	});
}

$.fn.textWidth = function(text, font) {
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
    return $.fn.textWidth.fakeEl.width();
};

var lara_skins = [
	"skin-blue",
	"skin-black",
	"skin-red",
	"skin-yellow",
	"skin-purple",
	"skin-green",
	"skin-blue-light",
	"skin-black-light",
	"skin-red-light",
	"skin-yellow-light",
	"skin-purple-light",
	"skin-green-light"
];

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();


function resetMainNav(){
	$(".sidebar-menu li").removeClass('active').show();
	$("#IntSearchResults").html('');
	$('.main-sidebar').css("width", "");
	setNavigation();	
}

function doiSearch(form){
	var searchIconsArray = {clients:"fa-user", contacts:"fa-user", "products/services":"fa-server", domains:"fa-globe", invoices:"fa-usd", "support tickets":"fa-ticket"};
	var currentSearchSection = "";
	var currentSearchIcon = "";
	var obj = {};
	var stats = {};
	var resultsObj = {};
	
	var start_time = new Date().getTime();
	$.post("search.php", $(form).serialize(),
	
	function(data){
		var request_time = (new Date().getTime() - start_time) / 1000;
		var resultsCount=0;
		var maxWidth=0;
		var longest="";
		
		$(data).each(function( index ) {
			if (this.className == "searchresultheader"){currentSearchSection = this.innerHTML.toLowerCase();}
			if ( !searchIconsArray[currentSearchSection] ){ currentSearchIcon = "fa-circle"; }else{currentSearchIcon = searchIconsArray[currentSearchSection]; }    
			if (this.className == "searchresult"){
				resultsCount++;
				obj[index]= {};
				obj[index]['icon'] = currentSearchIcon;
				obj[index]['url'] = $( this ).children('a').attr('href');
				obj[index]['classText'] = $( this ).children('a').children('span.label').text();
				obj[index]['class'] = $( this ).children('a').children('span.label').removeClass('label').attr('class');
				obj[index]['desc'] = $( this ).children('a').children('span.desc').text();
				$( this ).children('a').children('span').remove();
				obj[index]['result'] = $( this ).children('a').text();  					 
				
				
				if (Object.keys(obj[index]['desc']).length > maxWidth){ 
					maxWidth = Object.keys(obj[index]['desc']).length;
					longest = obj[index]['desc'];
				}
				if (Object.keys(obj[index]['result']).length > maxWidth){ 
					maxWidth = Object.keys(obj[index]['result']).length;
					longest = obj[index]['result'];
				}
			}
		});
		
		stats['time'] = request_time;
		stats['resultscount'] = resultsCount;
		stats['maxWidth'] = maxWidth;
		stats['longest'] = longest;
		resultsObj ={'stats' : stats, 'results' : obj};
		showISearchResults(form, resultsObj);
	});
}

function showISearchResults(form, resultsObj){
	if (form == "#navbarfrmintellisearch"){
		$("#tnsearch-icon").removeClass('fa-pulse').removeClass('fa-spinner').addClass('fa-search');
		$("#tnsearchresults").empty();
		$('#tnsearchstats').html("<small><b>"+resultsObj['stats']['resultscount']+"</b> results ("+resultsObj['stats']['time']+" seconds)</small>");
			
		if ($.isEmptyObject(resultsObj['results'])){
			$("#tnsearchresults").append('<li><a href="#"><div class="pull-left" style="color: #444; margin-left: 10px;"><i class="fa fa-ban fa-lg"></i></div>\
			<h4>No Matches Found!</h4></a></li>');
		}else{
			$.each( resultsObj['results'], function( key, value ) {
				$("#tnsearchresults").append('<li><a href="'+value['url']+'"><div class="pull-left" style="color: #444; margin-left: 10px; margin-top: 2px;"><i class="fa '+value['icon']+' fa-lg"></i></div>\
				<h4>'+value['result']+'<span class="label '+value['class']+' pull-right">'+value['classText']+'</span></h4><p>'+value['desc']+'</p></a></li>');
			});
		}
		$('#tnsearchbox').addClass('open');
	}else if (form == "#frmintellisearch"){
			$(".sidebar-menu li").hide();
			$("#IntSearchResults").html('');
			$('.main-sidebar').css("width", "");
			$("#isearch-icon").removeClass('fa-pulse').removeClass('fa-spinner').addClass('fa-search');

			if ($.isEmptyObject(resultsObj['results'])){
				$("#IntSearchResults").append('<li><a href="#"><i class="fa fa-ban"></i><strong>No Matches Found!</strong></a></li>');
			}else{
				var maxCalcWidth = $.fn.textWidth(resultsObj['stats']['longest']) + 140;
				if (maxCalcWidth > 230){ $('.main-sidebar').css("width", maxCalcWidth+"px");}
				setTimeout(function(){
					$("#IntSearchResults").append("<li class='header' ><b>"+resultsObj['stats']['resultscount']+"</b> results ("+resultsObj['stats']['time']+" seconds)</li>");
					$.each( resultsObj['results'], function( key, value ) {
						$("#IntSearchResults").append('<li><a href="'+value['url']+'"><i class="fa '+value['icon']+'"></i><strong>'+value['result']+'</strong>\
						<span class="label '+value['class']+' pull-right">'+value['classText']+'</span><br><span class="desc">'+value['desc']+'</span></a></li>');
					});
				}, $.AdminLTE.options.animationSpeed);
			}			
	}
}

$(document).ready(function(){
    $(".datepick, .date-picker").datepicker({
        dateFormat: datepickerformat,
        showOn: "button",
        buttonImage: "images/showcalendar.gif",
        buttonImageOnly: true,
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true
    });

    $('div.modal').on('shown.bs.modal', function() {
        var inputs = $(this).find('input,button.btn-primary');

        if (inputs.length > 0) {
            $(inputs).first().focus();
        }
    });

    $('#btnClientLimitNotificationDismiss').click(function(e) {
        $('#clientLimitNotification').fadeOut();
        $.post(window.location, 'clientlimitdismiss=1&name=' + $('#clientLimitNotification').find('.panel-title span').html());
    });

    $('#btnClientLimitNotificationDontShowAgain').click(function(e) {
        $('#clientLimitNotification').fadeOut();
        $.post(window.location, 'clientlimitdontshowagain=1&name=' + $('#clientLimitNotification').find('.panel-title span').html());
    });

    $('.client-limit-notification-form form').submit(function(e) {
        e.preventDefault();
        var $this = $(this);
        var $submit = $this.find('button[type="submit"]');
        var $submitLabel = $submit.html();
        $submit.css('width', $submit.css('width')).prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i>');
        $.post("systemlicense.php", $this.serialize(),
            function(data) {
                $this.find('.input-license-key').val(data.license_key);
                $this.find('.input-member-data').val(data.member_data);
                $this.off('submit').submit();
                $submit.html($submitLabel).removeProp('disabled');
            }, 'json');
    });	
	
	
	
	/* custom */
	
	try {	
		$(".lara-bootstrap-switch").bootstrapSwitch();
		
		$('.lara-bootstrap-switch').on('switchChange.bootstrapSwitch', function(event, state) {
			var sArray = {mode: 'update'};
			sArray[this.name]= state;
			setThemeSettings(sArray);
		});	
	} catch(err) {
		console.log(err.message);
	}	
	
    $("#frmintellisearch").submit(function(e) {
        e.preventDefault();
		if ($('#frmintellisearch input[name=value]').val()){
			$("#isearch-icon").removeClass('fa-search').addClass('fa-spinner fa-pulse');
			$('.main-sidebar').css("width", "");
			$("#IntSearchResults").html('<li><a href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i> <strong> Searching ... </strong></a></li>');
			doiSearch("#frmintellisearch");
		}
	});
	
    $("#navbarfrmintellisearch").submit(function(e) {
		e.preventDefault();
		if ($('#navbarfrmintellisearch input[name=value]').val()){
			$("#tnsearch-icon").removeClass('fa-search').addClass('fa-spinner fa-pulse');
			$("#tnsearchresults").html('<li><a href="#"><div class="pull-left" style="color: #444; margin-left: 10px;"><i class="fa fa-spinner fa-pulse"></i></div>\
				<h4>Searching .... </h4></a></li>');			
			doiSearch("#navbarfrmintellisearch");
		}
    });	
	
    $("#navbarfrmintellisearch").keyup(function(e) {
		if ($('#navbarfrmintellisearch input[name=value]').val()){
			delay(function(){
				if ($('input[name="qstoggle"]').bootstrapSwitch('state')){
					$("#tnsearch-icon").removeClass('fa-search').addClass('fa-spinner fa-pulse');
					$("#tnsearchresults").html('<li><a href="#"><div class="pull-left" style="color: #444; margin-left: 10px;"><i class="fa fa-spinner fa-pulse"></i></div>\
						<h4>Searching .... </h4></a></li>');
					doiSearch("#navbarfrmintellisearch");
				}
			}, 250 );
		}
    });	

	
	$('.navbar-form-results').click(function(e){
		e.stopPropagation();
	});
	
	$('#navbarfrmintellisearch').click(function(e){
		if ($('#tnsearchbox').hasClass('open')  || $('#tnsearchresults').is(':empty')){
			e.stopPropagation();
		}
	});
	
	$("#intellisearchval").keyup(function (e) {
		var key = e.which;
		if(key == 13){return;}
		if (this.value.length > 0) {
			$("#IntSearchResults").html('');	
			var input =  this.value.toLowerCase().split(" ");
			var query = '';
			var results = 0;

			$.each( input, function( key, value ) {
				query += "(?=.*"+value+")";
			});	

			$(".sidebar-menu li").each(function () {
				 if ($(this).text().toLowerCase().match("^"+query+".*$")) {
					 if ($(this).parents('li').attr("id") != "SideMenu-Home"){
						 $(this).show();
						 $(this).parents('li').addClass('active').show();
						 $(this).parents('ul').addClass('active').show();
						 results++;
					 }
				 }else{
					$(this).hide(); 
				 }
					
			});
			if( results == 0 ){
				$("#IntSearchResults").append('<li><a href="#">To use Intelligent Search, press <br>enter or click on the &nbsp;<i class="fa fa-search"></i>icon.</a></li>');
			}
		}else{
			resetMainNav();
		}
	});	
	
	$.each(lara_skins, function (i) {
		if ($("body").hasClass(lara_skins[i])){
			$("[data-lara-skin="+lara_skins[i]+"]").next('p').css( 'text-decoration','underline' );
		}
	});	
	
	$(document).on('click', "[data-toggle='offcanvas']" , function (e) {
		if ($("body").hasClass('sidebar-collapse')) {
			$.post("search.php","a=minsidebar");
			$("#intellisearchval").val("");
			resetMainNav();		
		} else {
			$.post("search.php","a=maxsidebar");
		} 
	});	
	
	$("[data-toggle='control-sidebar']").on('click', function (e) {
		if (typeof (Storage) !== "undefined") {	
			if ($("body").hasClass('control-sidebar-open')) {
				localStorage.setItem('controlsidebaropen', '1');
			} else {
				localStorage.setItem('controlsidebaropen', '0');
			}
		}
	});	
	
	$(".control-sidebar .nav-tabs [data-toggle='tab']").on('click', function (e) {
		if (typeof (Storage) !== "undefined") {
			localStorage.setItem('controlsidebartab', $(this).attr('href'));
		}
	});

	if (typeof (Storage) !== "undefined"){
		if (localStorage.getItem('controlsidebartab')){
			$('.control-sidebar .nav-tabs a[href="'+localStorage.getItem('controlsidebartab')+'"]').tab('show');
		}
	}
    
    $( ".homewidget" ).find( ".widget-header" ).prepend( "<span class='ui-icon ui-icon-closethick' data-widget='home-widget-remove'></span>");
	$( ".homewidget" ).find( ".widget-header span" ).css({'margin-left': '5px','cursor': 'pointer'});
 
    $(".box").on('click', "[data-widget='home-widget-remove']", function (e){
		var sArray = {mode: 'update'};
		var wID = $(this).parents(".box").first().attr("id");
		sArray[wID+'_state']= 'closed';
		$.AdminLTE.boxWidget.remove($(this));
		$("input[data-widget-state='"+wID+"']").attr("checked", false);
		setThemeSettings(sArray);
	});
	
    $("[data-widget-state]").on('click', function () {
		var sArray = {mode: 'update'};
		var wID = $(this).data('widget-state');
		if ($(this).is(":checked")){
			sArray[wID+'_state']= 'open';
			$('[data-widgets-settings="save"]').prop('disabled', false);
		}else{
			sArray[wID+'_state']= 'closed';
			$.AdminLTE.boxWidget.remove($(".box[id="+wID+"] [data-widget=home-widget-remove]"));
		}
		setThemeSettings(sArray);		
    });	
	
	$("[data-widgets-settings]").on('click', function () {
		location.reload(true);
    });	
	
    $("[data-lara-skin]").on('click', function (e) {
		e.preventDefault();
		var sideBarSkin ="";
	
		$.each(lara_skins, function (i) {
			$("body").removeClass(lara_skins[i]);
		});
		
		$("body").addClass($(this).data('lara-skin'));
		
		
		$("[data-lara-skin]").next('p').css( 'text-decoration','' );
		$(this).next('p').css( 'text-decoration','underline' );
		
		$(".control-sidebar").removeClass("control-sidebar-dark");
		$(".control-sidebar").removeClass("control-sidebar-light");
		if( $(this).data('lara-skin').indexOf('light') >= 0){
			sideBarSkin = "control-sidebar-light";
		}else{
			sideBarSkin = "control-sidebar-dark";
		}
		$(".control-sidebar").addClass(sideBarSkin);
	
		setThemeSettings({'mode': 'update', 
		                  'current_skin': $(this).data('lara-skin'),
                          'sidebar_skin':sideBarSkin});
		return false;
			  
    });
	
	$(".tablebg a").each(function( index ) {
		var bgColor = $( this ).css('backgroundColor') ;
		if (bgColor != "rgba(0, 0, 0, 0)" && bgColor != "transparent" && bgColor != "rgb(255, 255, 255)") {
			$(this).parent("td").css("background-color", bgColor);
			$(this).css("color", "#fff");     
		}
	});
	
	$("[data-modal-class='modal-configure-settings']").css('margin','25px');
	
});


