$(function() {

    function open() {
        $(this).closest(".menu-top").find('.topbar-container').fadeIn(400);
        $(this).closest(".menu-top").addClass('topggle').find('.topbar-container').animate({
            height: '300px'
        }, {
            duration: 400,
            queue: false
        });
        $(this).closest(".menu-top").find('.top-toggle').animate({
            top: 'auto'
        }, {
            duration: 400,
            queue: false
        });
        $(this).closest(".menu-top").find('.top-toggle').one("click", close);
    }

    function close() {
        $(this).closest(".menu-top").find('.topbar-container').fadeOut(400);
        $(this).closest(".menu-top").removeClass('topggle').find('.topbar-container').animate({
            height: '20px'
        }, {
            duration: 400,
            queue: false
        });
        $(this).closest(".menu-top").find('.top-toggle').animate({
            top: "auto"
        }, {
            duration: 400,
            queue: false
        });
        $(this).closest(".menu-top").find('.top-toggle').one("click", open);
    }

    $('.top-toggle').one("click", open);
});

//table
$(function() {
    var atable = $('.table-item').DataTable({
        "bSort": false,
        "bFilter": false,
        "paging": false,
        "ordering": false,
        "info": false,
        "oLanguage": {
            "sEmptyTable": "There is no item in the cart"
        }
    });

    var btable = $('.table-history').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
            url :"ajax/cart-history.php",
            type: "post"  
        },
        createdRow: function (row, data, index){
            if(data[3].replace(/[\$,]/g, '') == "pending"){
                $(row).addClass('yellow');
            }
            else if(data[3].replace(/[\$,]/g, '') == "paid"){
                $(row).addClass('green');   
            }
            else if(data[3].replace(/[\$,]/g, '') == "unpaid"){
                $(row).addClass('red');
                var text = "unpaid &nbsp;&nbsp;<a class='reminder' href='cart.php?remind="+data[1]+"'>Remind This!</a>";
                $('td',row).eq(3).html(text);
            }
        },
        "iDisplayLength": 5,
        "aLengthMenu": [[5, 10], [5, 10, "All"]],
        "info": false,
        "oLanguage": {
            "sEmptyTable": "No Previous Purchase",
            "sProcessing": "<img src='img/ajax-loader.gif'>"
        }
    });

    $('.data-all,.data-today').on('click',function () {
        var i =$(this).attr('data-column'); 
        var v =$(this).val();
        if(v == "All")
            v="";
        else if(v == "Today"){
            var getdate = new Date();
            v=((getdate.getDate()>9)?getdate.getDate():("0"+getdate.getDate()))+'/'+((getdate.getMonth()>9)?(getdate.getMonth()+1):("0"+(getdate.getMonth()+1)))+'/'+getdate.getFullYear();
        }
        btable.columns(i).search(v).draw();
    });

    $('#range-to,#range-from').on('focusout',function () {
        var v =$('#range-from').val()+"-"+$('#range-to').val();  
        btable.columns(0).search(v).draw();
    });

    $('.data-month').on('click',function(){
        $(".range").toggle(300);
    });

    $(".dataTables_filter").hide();
    if(!($(".table-history tbody tr").length == 1 && $(".table-history tbody tr").find("dataTables_empty")))
        $(".table-history thead tr th:nth-child(1)").click();

});

$(function() {
    $('.editfield').dblclick(function() {
        var value = $(this).html();
        $(this).html('<input class="form-control input-sm" type="text" value="' + value + '" />');
    });

    //focus out
    $('.editfield').focusout(function() {
        if ($(this).find('input').length > 0) {
            $qty = $(this).find('input').val().trim();
            $id = $(this).prev().prev().html();
            $(this).html($qty);
            document.location.href = "cart.php?update_item=" + $id + "&qty=" + $qty;
        }
    });

    //detect button enter
    $('.editfield').keypress(function(e) {
        if(e.which == 13) {
            if ($(this).find('input').length > 0) {
                $qty = $(this).find('input').val().trim();
                $id = $(this).prev().prev().html();
                $(this).html($qty);
                document.location.href = "cart.php?update_item=" + $id + "&qty=" + $qty;
            }
        }
    });
});

$(function() {
    $(".browse").on('click', '.main', function() {
        var get = $(this).attr('id');
        $('.browse').html("<img class='loading' src='img/ajax-loader.gif'>");

        $.ajax({
            type: "POST",
            url: "cart.php",
            data: "check=" + get,
            cache: false,
            success: function(response) {
                if (response != 0)
                    $('.browse ').html(response);
            }
        });
    });
});

$(function() {
     $("#search-item").on('keyup', function() {
        var get = $(this).val();
            if(get.length >=2){
                $.ajax({
                        type: "GET",
                        url: "cart.php",
                        data: { 'term' : get }, 
                        success: function(data){
                            $(".search-dis").html(data);
                        }
                });
            }
            else{
                $(".search-dis").html("");
            }
        });

     $(".table-fixed").on('click','a',function(){
            var id = $(this).html();
            alert(id);
        }); 
});

