$(document).ready(function(){
    $('#checkall').click(function(){
        var obj = $(this);
        $('.checkall').each(function(){
            if($(this).parent().parent().is(':visible')){
                $(this).attr('checked', obj.is(':checked'));
            }
        });
    });
});

    function pagination(tid, limit, page){
        var totalrecords = $('#' + tid + ' tbody tr').length;
        var totalpages = Math.ceil($('#' + tid + ' tbody tr').length / limit);

        if($('#current-page').length == 0){
            $('#' + tid ).parent().prepend('<input type="hidden" id="current-page" value="1" />');
        }
        else{
            $('#current-page').val(page);
        }
        
        if($('#total-records').length == 0){
            $('#' + tid).before('<p id="total-records"></p>');
        }
        $('#total-records').html(totalrecords + ' Records Found, Page ' + page + ' of ' + totalpages);

        
        if($('#pagination').length == 0){
            $('#' + tid).after('<p id="pagination" align="center"><a id="prev-page">&laquo; Previous Page</a> <a href="javascript:pagination(\'tbl-backup\', '+limit+', 2)" id="next-page">Next Page &raquo;</a></p>');
        }
        else{
            if(page == totalpages){
                $('#prev-page').attr('href', "javascript:pagination('tbl-backup', "+limit+", "+(page-1)+")");
                $('#next-page').attr('href', "#");
            }
            else if(totalpages > page && page > 1){
                $('#prev-page').attr('href', "javascript:pagination('tbl-backup', "+limit+", "+(page-1)+")");
                $('#next-page').attr('href', "javascript:pagination('tbl-backup', "+limit+", "+(page+1)+")");
            }
            else{
                $('#prev-page').attr('href', "#");
                $('#next-page').attr('href', "javascript:pagination('tbl-backup', "+limit+", "+(page+1)+")");
            }
        }

        $('#' + tid + ' tbody tr').hide();
        var i;
        var start = (page - 1)*limit;

        for(i=start; i<(start+limit); i++){
            $('#' + tid + ' tbody tr:eq(' + i + ')').show();
        }
    }

$(document).ready(function(){
    pagination('tbl-backup', 15, 1);
});
