/*!
 * WHMCS Admin Login Javascript Library
 * Copyright 2015 WHMCS Limited
 */

function verticalCenter() {
    var middlePos = jQuery(window).height() - jQuery(".login-container").outerHeight() - 40;
    if (middlePos > 0) {
        jQuery('.login-container').css({
            "margin-top": Math.ceil(middlePos / 2)
        });
    }
}

jQuery(document).ready(function() {
    verticalCenter();
    jQuery(window).resize(function() {
        verticalCenter();
    });

    jQuery(".language-chooser li a").click(function() {
        jQuery("#languageName").html(jQuery(this).html());
        jQuery("#inputLanguage").val(jQuery(this).html());
    });
});
