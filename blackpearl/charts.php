<?php require "control/core/init.php";?>
<!DOCTYPE html>
<html>
     <head>
          <title></title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="keywords" content="">
          <meta charset="UTF-8">
         
          <!-- CSS -->
           <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
           <link href="css/calendar.min.css" rel="stylesheet">
           <link href="css/media-player.min.css" rel="stylesheet">
           <link href="css/form.min.css" rel="stylesheet">
           <link href="css/style.min.css" rel="stylesheet">
           
           <!-- CSS font -->
           <link href="css/icomoon.min.css" rel="stylesheet">
           <link href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
            

          <!-- custom page css -->
           <style type="text/css">
               .block { margin-bottom: 0; }
           </style>
     </head>
     <body>
          <div id="overlay"><img id="loading" src="img/loader.gif"></div>
          <!-- Header -->
          <header id="header" class="clearfix">
               <!-- Logo -->
               <a href="index.php" class="logo shadowed">MHI ADMIN V1.0 BETA</a>
               
               <div class="dropdown profile-menu shadowed">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <img src="img/profile-pics/profile-pic.png" alt="" class="profile-pic">
                    </a>
                    <ul class="dropdown-menu pull-right text-right">
                         <li><a href="">Update Profile</a></li>
                         <li><a href="">Notifications & Updates</a></li>
                         <li><a href="">Settings</a></li>
                         <li class="divider"></li>
                         <li><a href="">Sign-Out</a></li>
                    </ul>
               </div>
               
               <ul class="nav nav-pills pull-right shadowed" id="top-menu">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<b class="caret"></b></a>
                         <ul class="dropdown-menu">
                              <li><a href="">Action</a></li>
                              <li><a href="">Another action</a></li>
                              <li><a href="">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a></li>
                         </ul>
                    </li>
                    <li><a href="#">Users</a></li>
               </ul>
               
               <form class="form-inline top-search shadowed">
                    <input type="text" class="form-control" placeholder="Search for anything...">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
               
               <div class="updates shadowed pull-right">
                    <ul class="list-unstyled list-inline">
                         <li class="dropdown">
                              <a href="" data-toggle="dropdown" class="messages ttips" title="Messages" data-placement="bottom">
                                   <img src="img/message.png" alt="">
                              </a>
                         </li>
                         <li class="dropdown">
                              <a href="" class="notifications ttips" data-toggle="dropdown" title="Notifications" data-placement="bottom">
                                   <img src="img/updates.png" alt="">
                              </a>
                         </li>
                    </ul>
               </div>
               
          </header>
          
          <section id="main" role="main">
               
               <!-- Left Sidebar -->
               <aside id="leftbar" class="pull-left">
                    <div class="sidebar-container">
                        <?php
                        //Main Menu bar
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'chart'); 
                        ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>

               <!-- Right Sidebar -->
                <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
                        
                        <!-- Profile -->
                        <div class="shadowed side-profile text-center">
                             <div class="banner">
                                  <img src="img/profile-bg.jpg" alt="" class="banner-img">
                                  <a href="#" class="profile-pic">
                                       <img src="img/profile-pics/6.jpg" alt="" class="img-circle">
                                  </a>
                             </div>
                             <h4>Ahmad Jalani</h4>
                             <small>Class: A | Grade Two</small>
                             <a class="btn btn-gr-gray btn-sm" href="#">View Student Profile</a>
                        </div>
                        
                        <!-- Date + Clock -->
                        <div class="clock shadowed">
                             <div id="date"></div>
                             <div id="time">
                                  <span id="hours"></span>
                                  :
                                  <span id="min"></span>
                                  :
                                  <span id="sec"></span>
                             </div>
                        </div>
                        
                    </div>

                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="fa fa-angle-left"></i>
                    </span>
                </aside>
          
               <!-- Content -->
               <section id="content" class="container">
                    <header class="p-header">
                         <h2 class="p-title">Various Charts</h2>
                    </header>
                    <!-- Column Chart -->
                    <div class="c-block" id="columnChartdemo">
                         <h3 class="block-title">Column Chart</h3>
     
                         <div class="block">
                              <h2>Basic Column chart</h2>
                              <div id="container"class="columnChart"></div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Line Chart -->
                    <div class="c-block" id="lineChartdemo">
                         <h3 class="block-title">Line Chart</h3>
     
                         <div class="block">
                              <h2>Basic Line chart</h2>
                              <div id="lineChart"></div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Area Chart -->
                    <div class="c-block" id="areaChartdemo">
                         <h3 class="block-title">Area Chart</h3>
                         
                         <div class="block">
                              <h2>Basic Area chart</h2>
                              <div id="areaChart"></div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Bar Chart -->
                    <div class="c-block" id="barChartdemo">
                         <h3 class="block-title">Bar Chart</h3>
                         
                         <div class="block">
                              <h2>Basic Bar chart</h2>
                              <div id="barChart"></div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Pie Chart -->
                    <div class="c-block" id="pieChartdemo">
                         <h3 class="block-title">Pie Chart</h3>
                         
                         <div class="row">
                              <!-- Basic -->
                              <div class="col-lg-6">
                                   <div class="block">
                                        <h2>Basic Pie chart</h2>
                                        <div id="pieChart"></div>
                                   </div>
                              </div>
                              
                              <!-- Gradient -->
                              <div class="col-lg-6">
                                   <div class="block">
                                        <h2>Gradient Filled</h2>
                                        <div id="pieChartgr"></div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
     
                    <!-- Dynamic Chart -->
                    <div class="c-block" id="dynamicChartdemo">
                         <h3 class="block-title">Dynamic Chart</h3>
                         <div class="block">
                              <h2>Basic Dynamic Chart</h2>
                              <div id="dynamicChart"></div>
                         </div>
                    </div>
               </section>
          </section>

          <!-- Javascipt -->
          <script src="js/jquery-1.11.3.js"></script>
          <script src='js/jquery-ui-1.11.4.min.js'></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/feeds.js"></script>
          <script src="js/chosen.js"></script>
          <script src="js/shadowbox.js"></script>
          <script src="js/sparkline.min.js"></script>
          <script src="js/masonry.min.js"></script>
          <script src="js/enscroll.min.js"></script>
          <script src='js/calendar.min.js'></script>
          <script src='js/datatables.min.js'></script>
          <script src='js/autosize.min.js'></script>
          <script src='js/select.min.js'></script>
          <script src="js/toggler.min.js"></script>
          <script src="js/datetimepicker.min.js"></script>
          <script src="js/colorpicker.min.js"></script>
          <script src="js/fileupload.min.js"></script>
          <script src="js/media-player.js"></script>
          <script src="js/validation/validate.min.js"></script>
          <script src="js/validation/validationEngine.min.js"></script>
          <script src="js/jquery.vticker.js"></script>
          <script src="js/chart/highcharts.js"></script>
          <script src="js/chart/modules/exporting.js"></script>
          <script src="js/chart/themes/dark-unica.js"></script>
          <script src="js/functions.js"></script>
          
          <script type="text/javascript">
               $(document).ready(function(){
                  <?php
                    if(Session::exists('bodybg') && Session::exists('bodycss')){
                      echo "$('".Session::get('bodybg')."').css('background','".Session::get('bodycss')."');";
                      echo "$('#leftbar-toggle,#rightbar-toggle').css('background','".Session::get('bodycss')."');";
                    }
                    if(Session::exists('contbg') && Session::exists('contcss')){
                      echo "$('".Session::get('contbg')."').css('background','".Session::get('contcss')."');";
                    }
                  ?>
                });
               
               // Column Chart 
               $(function () {
                    $('.columnChart').highcharts({
                         chart: {
                              type: 'column',
                              height: 300
                         },
                         title: {
                              text: 'Traffic Rates'
                         },
                         subtitle: {
                              text: ''
                         },
                         xAxis: {
                              type: 'category'
                         },
                         yAxis: {
                              min: 0,
                              max: 40,
                             
                              title: {
                                   text: ''
                              },
                              tickInterval: 5,
                              gridLineWidth: 1
                              
                         },
                         tooltip: {
                              pointFormat: 'Rates : {point.y}'
                         },
                         legend: {
                              enabled : false
                         },
                         plotOptions: {
                              column: {
                                   pointPadding: 0,
                                   borderWidth: 0,
                                   colorByPoint: true
                              }
                         },
                         credits: {
                              enabled: true,
                              text: 'MHI ADMIN BETA',
                              href: '',
                              style:{
                                  color: '#FFF'
                              }
                         },
                         exporting: {
                              enabled: true    
                         },
                         series: [{
                              data: [
                                ['Shanghai', 23.7],
                                ['Lagos', 16.1],
                                ['Instanbul', 14.2],
                                ['Karachi', 14.0],
                                ['Mumbai', 12.5],
                                ['Moscow', 12.1],
                                ['São Paulo', 11.8],
                                ['Beijing', 11.7]
                            ]}
                         ]
                    });
               });
               
               //Line Chart
               $(function () {
                    $('#lineChart').highcharts({
                         chart: {
                              
                              height: 300
                         },
                         
                         title: {
                              text: 'Monthly Temperature',
                         },
                         subtitle: {
                              text: '',
                         },
                         xAxis: {
                              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                         },
                         yAxis: {
                              title: {
                                   text: 'Temperature'
                              },
                              plotLines: [{
                                   value: 0,
                                   width: 1,
                                   color: '#808080'
                              }],
                              gridLineWidth: 1,
                         },
                         tooltip: {
                              valueSuffix: 'C'
                         },
                         legend: {
                              borderRadius: 0
                         },
                         series: [{
                              name: 'Tokyo',
                              data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                         }, {
                              name: 'New York',
                              data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
                         }, {
                              name: 'Berlin',
                              data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
                         }],
                         exporting: {
                              enabled: false    
                         },
                         credits: {
                              enabled: false
                         }
                    });
               });
               
               // Area Chart
               $(function () {
                    $('#areaChart').highcharts({
                         chart: {
                              type: 'area',
                              
                              height: 300
                         },
                         title: {
                              text: 'Nuclear stockpiles',
                         },
                         subtitle: {
                              text: 'USA and USSR'
                         },
                         xAxis: {
                              labels: {
                                   formatter: function() {
                                        return this.value; // clean, unformatted number for year
                                   }
                              }
                         },
                         yAxis: {
                              title: {
                                   text: '<span style="font-weight:normal">Nuclear weapon states</span>'
                              },
                              labels: {
                                   formatter: function() {
                                        return this.value / 1000 +'k';
                                   }
                              },
                              gridLineWidth: 1,
                         },
                         tooltip: {
                              pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                         },
                         plotOptions: {
                              area: {
                                   pointStart: 1940,
                                   marker: {
                                        enabled: false,
                                        symbol: 'circle',
                                        radius: 2,
                                        states: {
                                             hover: {
                                                  enabled: true
                                             }
                                        }
                                   }
                              }
                         },
                         series: [{
                              name: 'USA',
                              data: [null, null, null, null, null, 6 , 11, 32, 110, 235, 369, 640,
                                   1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
                                   27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
                                   26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
                                   24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
                                   22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950,
                                   10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295, 10104 ]
                         }, {
                              name: 'USSR/Russia',
                              data: [null, null, null, null, null, null, null , null , null ,null,
                              5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                              4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                              15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                              33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                              35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                              21000, 20000, 19000, 18000, 18000, 17000, 16000]
                         }],
                         exporting: {
                              enabled: false    
                         },
                         credits: {
                              enabled: false
                         },
                         colors: [
                              '#FFA206', 
                              '#049025', 
                         ],
                         legend: {
                              borderRadius: 0
                         }
                    });
               });
    
               // Bar Chart
               $(function () {
                    $('#barChart').highcharts({
                         chart: {
                              type: 'bar',
                              
                              height: 330
                         },
                         title: {
                              text: 'World Population'
                         },
                         subtitle: {
                              text: 'Year: 1800, 1900, 2008'
                         },
                         xAxis: {
                              categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                              title: {
                                   text: null
                              },
                         },
                         yAxis: {
                              min: 0,
                              title: {
                                   text: 'Population (millions)',
                                   align: 'middle'
                              },
                              labels: {
                                   overflow: 'justify'
                              },
                              gridLineWidth: 1,
                         },
                         tooltip: {
                              valueSuffix: ' millions'
                         },
                         plotOptions: {
                              bar: {
                                   dataLabels: {
                                        enabled: true
                                   }
                              }
                         },
                         legend: {
                              enabled: false
                         },
                         credits: {
                              enabled: false
                         },
                         series: [{
                              name: '1800',
                              data: [107, 31, 635, 203, 39]
                         }, {
                              name: '1900',
                              data: [133, 156, 947, 408, 45]
                         }, {
                              name: '2008',
                              data: [973, 914, 4054, 732, 55]
                         }],
                         exporting: {
                              enabled: false    
                         },
                         credits: {
                              enabled: false
                         },
                         colors: [
                              '#FFA206', 
                              '#049025',
                              '#0671c7'
                         ]
                    });
                    
                    //Basic Pie Chart
                    $(function () {
                         $('#pieChart').highcharts({
                              chart: {
                                   plotBackgroundColor: null,
                                   plotBorderWidth: null,
                                   plotShadow: false,
                                   
                              },
                              title: {
                                   text: ''
                              },
                              subtitle: {
                                   text: ''
                              },
                              tooltip: {
                                   pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                              },
                              plotOptions: {
                                   pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                             enabled: false
                                        },
                                        showInLegend: true
                                   }
                              },
                              series: [{
                                   type: 'pie',
                                   name: 'Browser share',
                                   data: [
                                        ['Firefox',   27.0],
                                        ['IE',       12.1],
                                        {
                                             name: 'Chrome',
                                             y: 53.2,
                                             sliced: true,
                                             selected: true
                                        }
                                   ]
                              }],
                              exporting: {
                                   enabled: false    
                              },
                              credits: {
                                   enabled: false
                              },
                              colors: [
                                   '#FFA206', 
                                   '#049025',
                                   '#0671c7',
                              ],
                              legend: {
                                   borderRadius: 0,
   
                              },
                         });
                    });
                    
                    //Gradient Pie Chart
                    $(function () {
    	
                         // Radialize the colors
                         Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
                              return {
                              radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                                   stops: [
                                        [0, color],
                                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                                   ]
                              };
                         });
                                 
                         // Build the chart
                         $('#pieChartgr').highcharts({
                              chart: {
                                   plotBackgroundColor: null,
                                   plotBorderWidth: null,
                                   plotShadow: false,
                                   
                              },
                              title: {
                                   text: ''
                              },
                              subtitle: {
                                   text: ''
                              },
                              tooltip: {
                                   pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                              },
                              plotOptions: {
                                   pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                             enabled: false
                                        },
                                        showInLegend: true
                                   }
                              },
                              series: [{
                                   type: 'pie',
                                   name: 'Browser share',
                                   data: [
                                        ['Firefox',   45.0],
                                        ['IE',       26.8],
                                        {
                                             name: 'Chrome',
                                             y: 12.8,
                                             sliced: true,
                                             selected: true
                                        },
                                   ]
                              }],
                              exporting: {
                                   enabled: false    
                              },
                              credits: {
                                   enabled: false
                              },
                              legend: {
                                   borderRadius: 0,
   
                              },
                         });
                    });
    
    
               });
    
               
               //Dynamic chart
               $(function () {
                    Highcharts.setOptions({
                         global: {
                              useUTC: false
                         }
                    });
               
                    var chart;
                    $('#dynamicChart').highcharts({
                         chart: {
                              type: 'spline',
                              animation: Highcharts.svg, // don't animate in old IE
                              marginRight: 10,
                              height: 215,
                              events: {
                                   load: function() {
                
                                        // set up the updating of the chart each second
                                        var series = this.series[0];
                                        setInterval(function() {
                                            var x = (new Date()).getTime(), // current time
                                                y = Math.random();
                                            series.addPoint([x, y], true, true);
                                        }, 1000);
                                   }
                              },
                              
                              height: 200
                         },
                         title: {
                              text: ''
                         },
                         xAxis: {
                              type: 'datetime',
                              tickPixelInterval: 150,
                              gridLineWidth: 1,
                         },
                         yAxis: {
                              title: {
                                   text: ''
                              },
                              plotLines: [{
                                   value: 0,
                                   width: 1,
                                   color: '#808080'
                              }],
                              gridLineWidth: 1,
                         },
                         tooltip: {
                              formatter: function() {
                                   return '<b>'+ this.series.name +'</b><br/>'+
                                   Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
                                   Highcharts.numberFormat(this.y, 2);
                              }
                         },
                         legend: {
                              enabled: false
                         },
                         credits: {
                              enabled: false  
                         },
                         exporting: {
                              enabled: false
                         },
                         series: [{
                              name: 'Random data',
                              data: (function() {
                                   // generate an array of random data
                                   var data = [],
                                        time = (new Date()).getTime(),
                                        i;
                  
                                   for (i = -19; i <= 0; i++) {
                                        data.push({
                                             x: time + i * 1000,
                                             y: Math.random()
                                   });
                              }
                                   return data;
                              })()
                         }]
                    });
               });
          </script>
     </body>
</html>
               