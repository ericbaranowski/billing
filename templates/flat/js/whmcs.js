

jQuery(document).ready(function(){
	
  // Calls the selectBoxIt method on your HTML select box and uses the Bootstrap theme
  jQuery("select").selectBoxIt();
  
  var mobile = 0;
  // Fix for mobile view order form
  var width = jQuery(document).width();

  // Changes order of fields in customer details table
  if (width < 720) {
	jQuery(".field1b").after(jQuery(".field2a"));
	jQuery(".field2a").after(jQuery(".field2b"));
	jQuery(".field2b").after(jQuery(".field3a"));
	jQuery(".field3a").after(jQuery(".field3b"));
	jQuery(".field3b").after(jQuery(".field4a"));
	jQuery(".field4a").after(jQuery(".field4b"));
	jQuery(".field4b").after(jQuery(".field5a"));
	jQuery(".field5a").after(jQuery(".field5b"));
	jQuery(".field5b").after(jQuery(".field6a"));
	jQuery(".field6a").after(jQuery(".field6b"));
	mobile = 1;
  }

  // And check again if the window is resized
  jQuery(window).resize(function() {
	  var width = jQuery(document).width();
	  console.log(mobile);
	  if (width > 720 && mobile === 1) {
		jQuery(".field1b").parent().next().prepend(jQuery(".field2a"));
		jQuery(".field2a").after(jQuery(".field2b"));
		jQuery(".field2b").parent().next().prepend(jQuery(".field3a"));
		jQuery(".field3a").after(jQuery(".field3b"));
		jQuery(".field3b").parent().next().prepend(jQuery(".field4a"));
		jQuery(".field4a").after(jQuery(".field4b"));
		jQuery(".field4b").parent().next().prepend(jQuery(".field5a"));
		jQuery(".field5a").after(jQuery(".field5b"));
		jQuery(".field5b").parent().next().prepend(jQuery(".field6a"));
		jQuery(".field6a").after(jQuery(".field6b"));
		mobile = 0;
	  } else if (width < 720 && mobile === 0) {
		jQuery(".field1b").after(jQuery(".field2a"));
		jQuery(".field2a").after(jQuery(".field2b"));
		jQuery(".field2b").after(jQuery(".field3a"));
		jQuery(".field3a").after(jQuery(".field3b"));
		jQuery(".field3b").after(jQuery(".field4a"));
		jQuery(".field4a").after(jQuery(".field4b"));
		jQuery(".field4b").after(jQuery(".field5a"));
		jQuery(".field5a").after(jQuery(".field5b"));
		jQuery(".field5b").after(jQuery(".field6a"));
		jQuery(".field6a").after(jQuery(".field6b"));
	    mobile = 1;
	  }
  });

  // Tabs Changer
  // ===============================
	//Default Action	
	jQuery(".tab-content").hide(); //Hide all content
	if (jQuery(location).attr('hash').substr(1)!="") {
		var activeTab = jQuery(location).attr('hash');
		jQuery("ul").find('li').removeClass('open');
		jQuery("ul.nav li").removeClass("active"); //Remove any "active" class
		jQuery(activeTab+"nav").addClass("active");
		jQuery(activeTab).show();
	} else {
		jQuery("#tabs ul.nav .nav-tabs li:first").addClass("active").show(); //Activate first tab
		jQuery(".tab-content:first").show(); //Show first tab content	
	}

	//On Click Event
	jQuery("#tabs ul.nav li").click(function() {
        jQuery("ul").find('li').removeClass('open');
		jQuery("ul.nav li").removeClass("active"); //Remove any "active" class
		jQuery(this).addClass("active"); //Add "active" class to selected tab
		var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        if (activeTab.substr(0,1)=="#" && activeTab.substr(1)!="") { //Determine if a tab or link
            jQuery(".tab-content").hide(); //Hide all tab content
    		jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
        } else {
            return true; // If link allow redirect
        }
	});

});

// Checkboxes Toggle
// ===============================

function toggleCheckboxes(classname) {
    jQuery("."+classname).attr('checked',!jQuery("."+classname+":first").is(':checked'));
}

// Disable Field Class
// ===============================

function disableFields(classname,disable) {
    if (disable) jQuery("."+classname).attr("disabled","disabled");
    else jQuery("."+classname).removeAttr("disabled");
}

// Open Centered Popup
// ===============================

function popupWindow(addr,popname,w,h,features) {
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  if (winl < 0) winl = 0;
  if (wint < 0) wint = 0;
  var settings = 'height=' + h + ',';
  settings += 'width=' + w + ',';
  settings += 'top=' + wint + ',';
  settings += 'left=' + winl + ',';
  settings += features;
  win = window.open(addr,popname,settings);
  win.window.focus();
}

// Support Tickets
// ===============================

function extraTicketAttachment() {
    jQuery("#fileuploads").append('<input type="file" name="attachments[]" style="width:70%;" /><br />');
}

function rating_hover(id) {
    var selrating=id.split('_');
    for(var i=1; i<=5; i++){
        if(i<=selrating[1]) document.getElementById(selrating[0]+'_'+i).style.background="url(images/rating_pos.png)";
        if(i>selrating[1]) document.getElementById(selrating[0]+'_'+i).style.background="url(images/rating_neg.png)";
    }
}
function rating_leave(id){
    for(var i=1; i<=5; i++){
        document.getElementById(id+'_'+i).style.background="url(images/rating_neg.png)";
    }
}
function rating_select(tid,c,id){
    window.location='viewticket.php?tid='+tid+'&c='+c+'&rating='+id;
}

/* ============================================================
 * bootstrap-dropdown.js v2.0.3
 * http://twitter.github.com/bootstrap/javascript.html#dropdowns
 * ============================================================
 * Copyright 2012 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */


!function ($) {

  "use strict"; // jshint ;_;


 /* DROPDOWN CLASS DEFINITION
  * ========================= */

  var toggle = '[data-toggle="dropdown"]'
    , Dropdown = function (element) {
        var $el = $(element).on('click.dropdown-menu.data-api', this.toggle)
        $('html').on('click.dropdown-menu.data-api', function () {
          $el.parent().removeClass('open')
        })
      }

  Dropdown.prototype = {

    constructor: Dropdown

  , toggle: function (e) {
      var $this = $(this)
        , $parent
        , selector
        , isActive

      if ($this.is('.disabled, :disabled')) return

      selector = $this.attr('data-target')

      if (!selector) {
        selector = $this.attr('href')
        selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
      }

      $parent = $(selector).parent()
      $parent.length || ($parent = $this.parent())

      isActive = $parent.hasClass('open')

      clearMenus()

      if (!isActive) $parent.toggleClass('open')

      return false
    }

  }

  function clearMenus() {
    $(toggle).parent().removeClass('open')
  }


  /* DROPDOWN PLUGIN DEFINITION
   * ========================== */

  $.fn.dropdown = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('dropdown')
      if (!data) $this.data('dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  $.fn.dropdown.Constructor = Dropdown


  /* APPLY TO STANDARD DROPDOWN ELEMENTS
   * =================================== */

  $(function () {
    $('html').on('click.dropdown.data-api', clearMenus)
    $('body')
      .on('click.dropdown', '.dropdown form', function (e) { e.stopPropagation() })
      .on('click.dropdown.data-api', toggle, Dropdown.prototype.toggle)
  })


}(window.jQuery);


// Scroll to point in page

function scrollToAnchor(id){
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}