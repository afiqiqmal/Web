$(document).ready(function(){
    var d = new Date();
    var day= d.getDate();var month=d.getMonth()+1;var year = d.getFullYear();
    $('.from_date').val(day+"/"+month+'/'+year);
    $('.to_date').val(day+"/"+month+'/'+year);
            
    var startDate = new Date(d);
    var FromEndDate = new Date();
    var ToEndDate = new Date();
            
    ToEndDate.setDate(ToEndDate.getDate()+365);
            
    $('.from_date').datepicker({
        weekStart: 1,
        startDate: '01/01/2012',
        endDate: FromEndDate, 
        autoclose: true
    }).on('changeDate', function(selected){
            startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('.to_date').datepicker('setStartDate', startDate);
        }); 
    $('.to_date').datepicker({
        weekStart: 1,
        startDate: startDate,
        endDate: ToEndDate,
        autoclose: true
    }).on('changeDate', function(selected){
        FromEndDate = new Date(selected.date.valueOf());
        FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
        $('.from_date').datepicker('setEndDate', FromEndDate);
    });
});
            
$(document).ready(function() {
    var cb = function(start, end, label) {
            $('#reportrange input').val(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '31/12/2014',
            dateLimit: { days: 60 },
            showDropdowns: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'right'
        };
        $('#reportrange input').val(moment().format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);      
});