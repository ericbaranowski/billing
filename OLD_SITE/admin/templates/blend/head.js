var SMALL_SCREEN_SIZE = 825;

function searchclose() {
    $("#searchresults").slideUp();
}

function sidebarOpen() {
    $("#sidebaropen").fadeOut();
    $("#contentarea").animate({"margin-left":"209px"},1000,function() {
        $("#sidebar").fadeIn("slow");
    });
    $.post("search.php","a=maxsidebar");
}
function sidebarClose() {
    $("#sidebar").fadeOut("slow",function(){
        $("#contentarea").animate({"margin-left":"10px"});
        $("#sidebaropen").fadeIn();
    });
    $.post("search.php","a=minsidebar");
}
function notesclose(save) {
    $('#myNotes').modal('hide');
    if (save) {
        $.post("index.php", $("#frmmynotes").serialize());
    }
}

$(document).ready(function(){
    $(window).on("load resize", function() {
        if ($("#sidebar").is(':visible') && $(window).width() <= SMALL_SCREEN_SIZE) {
            $("#sidebar").hide();
            $("#contentarea").css('margin-left', '10px');
            $("#sidebaropen").show();
        }
    });
    $("#frmintellisearch").submit(function(e) {
        e.preventDefault();
        $("#intellisearchval").css("background-image","url('images/loading.gif')");
        $.post("search.php", $("#frmintellisearch").serialize(),
        function(data){
            $("#searchresultsscroller").html(data);
            $("#searchresults").slideDown("slow",function(){
                    $("#intellisearchval").css("background-image","url('images/icons/search.png')");
                });
        });
    });
    $(".datepick, .date-picker").datepicker({
        dateFormat: datepickerformat,
        showOn: "button",
        buttonImage: "images/showcalendar.gif",
        buttonImageOnly: true,
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true
    });
    jQuery(".credit-card-type li a").click(function() {
        jQuery("#selectedCard").html(jQuery(this).html());
        jQuery("#cctype").val(jQuery('span.type', this).html());
    });
    jQuery('a.autoLinked').click(function (e) {
        e.preventDefault();

        var child = window.open();
        child.opener = null;
        child.location = e.target.href;
    });
});
