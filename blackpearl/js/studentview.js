$(function() {
    var currentid = "";
    $('.search1').on('click','.viewdiv', function() {
        if (currentid != $(this).attr('view') && $(this).attr('view')) {
            var id = $(this).attr('view');
            $('.right-content').show();
            $('#overlay').show();
            currentid = id;

            $.ajax({
                type: "POST",
                url: "cart.php",
                data: "detail=" + id,
                cache: false,
                success: function(response) {
                    $('.display-detail').html(response);
                }
            });

            var btable = $('.cart-detail').DataTable({
                "destroy": true, //able to dynamically change datatables
                "autoWidth": false, //block table autowidth
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "ajax/cart-history.php?id=" + id,
                    type: "post"
                },
                createdRow: function(row, data, index) {
                    $('td', row).eq(1).html("<a href='/blackpearl/transcript' class='reminder'>" + data[1] + "</a>");
                    if (data[3].replace(/[\$,]/g, '') == "pending") {
                        $(row).addClass('yellow');
                    } else if (data[3].replace(/[\$,]/g, '') == "paid") {
                        $(row).addClass('green');
                    } else if (data[3].replace(/[\$,]/g, '') == "unpaid") {
                        $(row).addClass('red');
                        var text = "unpaid &nbsp;&nbsp;<a class='reminder blinker' href='view.php?remind=" + data[1] + "'>Remind This!</a>";
                        $('td', row).eq(3).html(text);
                    }
                },
                "iDisplayLength": 5,
                "aLengthMenu": [
                    [5, 10],
                    [5, 10, "All"]
                ],
                "info": false,
                "oLanguage": {
                    "sEmptyTable": "No Previous Purchase",
                    "sProcessing": "<img src='img/ajax-loader.gif'>"
                }
            });

            $(".dataTables_filter").hide();
            $(".dataTables_length").hide();

            if (!($(".cart-detail tbody tr").length == 1 && $(".cart-detail tbody tr").find("dataTables_empty")))
                $(".cart-detail thead tr th:nth-child(1)").click();
        }

        $('#overlay').hide();
    });
});



$(function() {
    var state = 1;
    var currentval = "";
    var ctable;
    $('#search-person').keyup(function(){
        var id = $(this).val();
        currentval = id;
        if(state == 1){
            if(id==""){
                $('.search1').html("");
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "cart.php",
                    data: "search-person=" + id,
                    cache: false,
                    success: function(response) {
                        $('.search1').html(response);
                    }
                });
            }
        }
        else if(state == 2){
            ctable = $('.search-table').DataTable({
                "destroy": true, //able to dynamically change datatables
                "autoWidth": false, //block table autowidth
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "ajax/studentlist.php",
                    type: "post"
                },
                createdRow: function (row, data, index){
                    $('td', row).eq(6).html("<img class='media-object' src='data:image;base64," + data[6] + "'>");
                    $('td', row).eq(7).html("<a class='btn btn-primary btn-sm' >View More</a>");
                },
                "iDisplayLength": 5,
                "aLengthMenu": [
                    [5, 10],
                    [5, 10, "All"]
                ],
                "info": false,
                "oLanguage": {
                   "sEmptyTable": "Result Not in Record",
                    "sProcessing": "<img src='img/ajax-loader.gif'>"
                }
            });

            $(".dataTables_filter").hide();
            $(".dataTables_length").hide();
            ctable.search(id).draw();
        }
    });

    $(".dataTables_filter").hide();
    $(".dataTables_length").hide();

    $('#show-list').click(function(){
        $('.search1').show();
        $('.search2').hide();
        $('.search2 table tbody').html('');
        $('.search-dis').parent().removeClass('col-lg-12').addClass('col-lg-6');
        state = 1;
    });

    $('#show-table').click(function(){
        $('.search2').show();
        $('.search1').hide();
        $('.search1').html('');
        $('.search-dis').parent().removeClass('col-lg-6').addClass('col-lg-12');
        //ctable.search(currentval).draw();
        $('.right-content').hide();

        state = 2;
    });

});
