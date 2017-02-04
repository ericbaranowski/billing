$(document).ready(function(){
     $("#shownotes").click(function () {
        $("#mynotes").toggle("slow");
        return false;
    });
    $("#savenotes").click(function () {
        $("#mynotes").toggle("slow");
        $.post("index.php", $("#frmmynotes").serialize() );
    });
    $("#frmintellisearch").submit(function(e) {
        e.preventDefault();
        $.post("search.php", $("#frmintellisearch").serialize(),
        function(data){
            if (data) {
                $("#searchresults").html(data);
                $("#btnIntelliSearch").hide();
                $("#btnIntelliSearchCancel").removeClass('hidden').show();
                $("#searchresults").hide().removeClass('hidden').slideDown();
            }
        });
    });
    $(".datepick, .date-picker").datepicker({
        dateFormat: datepickerformat,
        showOn: "button",
        buttonImage: "images/showcalendar.gif",
        buttonImageOnly: true,
        showButtonPanel: true
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
function intellisearchcancel() {
    $("#intellisearchval").val("");
    $("#btnIntelliSearchCancel").hide();
    $("#btnIntelliSearch").show();
    $("#searchresults").slideUp();
}
