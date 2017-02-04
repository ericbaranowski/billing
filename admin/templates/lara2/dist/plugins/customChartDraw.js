

var customChartDraw = new function() {
	this.colorsArray = ['#a0d0e0', "#3c8dbc", "#f56954", "#00a65a",'#8a56e2','#cf56e2','#e256ae','#e25668','#e28956','#e2cf56','#aee256','#68e256','#56e289','#56e2cf','#56aee2','#a6cee3'];
	this.drawnCharts = [];
	this.execute = 1;
    this.rawData = ""; 
    this.graphType = "";	
    this.data = [];
    this.xkey = [];
    this.ykeys = [];
    this.labels = [];
	this.elementid = "";
	
    this.load = function (type,version,packages) {
		customChartDraw.graphType = "";	
		customChartDraw.rawData = "";
		customChartDraw.data = [];
		customChartDraw.xkey = [];
		customChartDraw.ykeys = [];
		customChartDraw.labels = [];
		customChartDraw.elementid = "";		
    };
	
	this.setElementId = function(elementID){
		if ($.inArray(elementID.id, customChartDraw.drawnCharts) !== -1){
			customChartDraw.execute = 0;
		}else{
			customChartDraw.drawnCharts.push(elementID.id);
			customChartDraw.execute = 1;
		}
			
		//console.log('added : '+ elementID.id);
        //console.log ('exe :'+  customChartDraw.execute);
	};
  
    this.setOnLoadCallback = function (a) {
		$(function() { a(); });
    };
	
	this.processData = function (){

            //console.log('processing : ') ;
             var data = jQuery.parseJSON(customChartDraw.rawData);
             var cols = data['cols'];
             var rows = data['rows'];
			 
			 if (customChartDraw.graphType == "Pie"){
			    
				$.each(rows, function(rkey, item){
					var obj = {};
					//console.log(rkey+ '  : '+item);
					$.each(item, function(ikey, item){
					    //console.log(ikey+ '  : '+item);
						$.each(item, function(vkey, item){
							//console.log(vkey+ '  : '+item['v']);
							if (vkey === 0){
								obj['label']=item['v'];
							}else{
							    obj['value']=item['v'];
							}
						});
						
					});
					customChartDraw.data.push(obj);
				
				
				
			    });
			 
			 }else{
			 
				 //var aofo = [];
				 //console.log(data['rows'][0]);
				 $.each(rows, function(rkey, item){
					 var obj = {};
					  $.each(item, function(ikey, item){
						  $.each(item, function(vkey, item){
							  if (rkey === 0){customChartDraw.xkey[0]='v0';
								  if (vkey > 0){
									  customChartDraw.ykeys.push('v'+vkey);
									  customChartDraw.labels.push(cols[vkey]['label']);
								  }
							  }
							  //console.log(rkey+'|'+vkey+'  : '+item['v']);
							  obj['v'+vkey]=item['v'];
						   });
					  });
					 //console.log(obj);
					 customChartDraw.data.push(obj);
				 });
			 }
	
	
	}
	
    this.visualization =  new function () {
         this.DataTable =  function (a) {
			if (customChartDraw.execute){
				customChartDraw.load();
				customChartDraw.rawData = a;
			}
         }
         this.AreaChart =  function (a) {
			 if (customChartDraw.execute){
				customChartDraw.setElementId(a);
				customChartDraw.graphType = "Area";
				customChartDraw.elementid = a.id;			 
				customChartDraw.processData();
			 }
		     
			 
             this.draw = function (a,b){
				 if (customChartDraw.execute){
					 $('#'+customChartDraw.elementid+' div').has('img[src="images/loading.gif"]').remove();
		 
				 
					  //console.log(customChartDraw.elementid) ; 
					  //console.log(customChartDraw.xkey) ;
					  //console.log(customChartDraw.ykeys) ;
					  //console.log(customChartDraw.labels) ;
					  //console.log(customChartDraw.graphType) ;
					  //console.log(customChartDraw.data) ;

					new Morris.Area({
					  // ID of the element in which to draw the chart.
					  element: customChartDraw.elementid,
					  // Chart data records -- each entry in this array corresponds to a point on
					  // the chart.
					  data: customChartDraw.data,
					  // The name of the data record attribute that contains x-values.
					  xkey: customChartDraw.xkey,
					  // A list of names of data record attributes that contain y-values.
					  ykeys: customChartDraw.ykeys,
					  // Labels for the ykeys -- will be displayed when you hover over the
					  // chart.
					  labels: customChartDraw.labels,
					  
                       lineColors: customChartDraw.colorsArray,
                       fillOpacity:0.7,					   
					   behaveLikeLine: true,
					   parseTime: false,
					   hideHover: true,
					   smooth: true
					});
					 $('#'+customChartDraw.elementid).parent('div').append( "<div>&nbsp;</div>" );
					 $('#'+customChartDraw.elementid).parent('div').prepend( "<div class='pull-right' id='"+customChartDraw.elementid+"_legend'></div>" );
					 $.each(customChartDraw.labels, function(key, item){
						 $('#'+customChartDraw.elementid+'_legend').append("<span>&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-square' style='color: "+customChartDraw.colorsArray[key]+";'></i> "+item+"&nbsp;&nbsp;</span>");
						//console.log('label :'+item+' ... color:'+customChartDraw.colorsArray[key]); 
						 
					 });					
					
				 }
				 
                 
             }
              //console.log('customChartDraw.xload : '+a) ;
         }
		 
         this.PieChart =  function (a) {
			 if (customChartDraw.execute){
				 //console.log(a);
				 customChartDraw.setElementId(a);
				 customChartDraw.graphType = "Pie";
				 customChartDraw.elementid = a.id;			 
				 customChartDraw.processData();
			 }
			 
             this.draw = function (a,b){
				 if (customChartDraw.execute){
					  $('#'+customChartDraw.elementid+' div').has('img[src="images/loading.gif"]').remove();
					  
					 $('#'+customChartDraw.elementid).parent('div').addClass( "row" );
					 $('#'+customChartDraw.elementid).removeAttr( 'style' );
					 $('#'+customChartDraw.elementid).addClass( "col-md-8" );
					 $('#'+customChartDraw.elementid).append("<div id='"+customChartDraw.elementid+"_drawarea' ></div>");
					 $('#'+customChartDraw.elementid).after("<div id='"+customChartDraw.elementid+"_legend' class='col-md-4 hidden-xs' style='padding-top: 60px;'><p><strong>"+b['title']+"</strong></p></div>");
					 
					 $.each(customChartDraw.data, function(key, item){
						 $('#'+customChartDraw.elementid+'_legend').append("<p><i class='fa fa-square' style='color: "+customChartDraw.colorsArray[key]+";'></i> "+item['label']+"</p>");
						 
					 });					 
					 
					  //console.log(customChartDraw.elementid) ; 
					  //console.log(customChartDraw.xkey) ;
					  //console.log(customChartDraw.ykeys) ;
					  //console.log(customChartDraw.labels) ;
					  //console.log(customChartDraw.graphType) ;
					  //console.log(customChartDraw.data) ;

					new Morris.Donut({
					  element: customChartDraw.elementid+"_drawarea",
					  data: customChartDraw.data,
					  xkey: customChartDraw.xkey,
					  ykeys: customChartDraw.ykeys,
					  labels: customChartDraw.labels,
					  
					  
					   colors: customChartDraw.colorsArray,
					   parseTime: false,
					   hideHover: true,
					   smooth: true					   
					});
					

				 }
				 
                 
             }
              //console.log('customChartDraw.xload : '+a) ;
         }		 
    };   
    
}

