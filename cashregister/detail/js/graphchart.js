$(function () {
    $('#gross').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Month Gross Profit'
        },
        subtitle: {
            text: 'www.retailphpsytem.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            title:{
                text: "Month"
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Profit (RM)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>RM {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Gross',
            data: [490.9, 710.5, 1060.4, 1290.2, 1440.0, 1760.0, 1350.6, 1480.5, 2160.4, 1940.1, 950.6, 540.4]

        }]
    });
    
    $('#clean').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Month Clean Profit'
        },
        subtitle: {
            text: 'www.retailphpsytem.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            title:{
                text: "Month"
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Profit (RM)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>RM {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Clean',
            data: [409.9, 701.5, 1006.4, 1029.2, 1404.0, 1076.0, 1035.6, 1048.5, 2016.4, 1094.1, 905.6, 504.4]

        }]
    });

    $('#loss').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Month Loss Profit'
        },
        subtitle: {
            text: 'www.retailphpsytem.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            title:{
                text: "Month"
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Profit (RM)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>RM {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Loss',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }]
    });

    $('#all').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Month Profit'
        },
        subtitle: {
            text: 'www.retailphpsytem.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            title:{
                text: "Month"
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Profit (RM)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>RM {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Gross',
            color: 'green',
            data: [490.9, 710.5, 1060.4, 1290.2, 1440.0, 1760.0, 1350.6, 1480.5, 2160.4, 1940.1, 950.6, 540.4]

        },{
            name: 'Clean',
            data: [409.9, 701.5, 1006.4, 1029.2, 1404.0, 1076.0, 1035.6, 1048.5, 2016.4, 1094.1, 905.6, 504.4]

        },{
            name: 'Loss',
            color: "red",
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }]
    });
});
