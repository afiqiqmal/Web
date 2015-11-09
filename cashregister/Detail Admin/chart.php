<?php 
    require "core/init.php";
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Retail POS Sytem">
    <meta name="keywords" content="POS System">
    <meta name="author" content="Hafiq iqmal">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <!-- bootstrap -->
    <link href="../detail/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../detail/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="../detail/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">

    <!-- libraries -->
    <link href="../detail/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../detail/lib/morris.css" type="text/css" rel="stylesheet" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/chart-showcase.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <div class="loader">
        <div id="scan-text">
            <div class="vertical-centered">
                <label style="display:block;">Loading.....</label>
                <img src="../images/ajax-loader.gif">
            </div>
        </div>
    </div>

    <?php 
    
    if(Session::get('user_id')&& Session::get('assign'))
    {
        if(Crytion::decryt64(Session::get('assign')) == "ST_C" || Crytion::decryt64(Session::get('assign')) == "ST_IN")
        {
            header("Location:../detail%20staff/");
        }
        else if(Crytion::decryt64(Session::get('assign')) == "AD")
        {
            $user_id = Crytion::decryt64(Session::get('user_id'));
            
            $user = DB::getInstance()->get('tbl_employee',array("user_id","=",$user_id));
            
            if($user->error()){
                header("Refresh :0;url=../");
            }
            else
            if($user->count() == 1)
            {
                $fname = $user->result()->fname;
                $user_id = Crytion::encryt64(Crytion::encryt64($user_id));
                $jb = Crytion::encryt64(Crytion::encryt64("employee"));
    ?>
    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand " href="index.php"><img src="../detail/img/logo.png"></a>

            <button type="button" class="btn btn-navbar hidden-phone" style="display:block" id="menu-toggler2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav pull-right">                
                <li class="notification-dropdown hidden-phone">
                    
                    <a href="#" class="trigger">
                        <i class="fa fa-exclamation-triangle"></i>
                        
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-fa fa"><i class="fa fa-times-circle"></i></a>
                            <div class="notifications">
                                <h3>You have 6 new notifications</h3>
                                <a href="index.php#" class="item">
                                    <i class="fa fa-sign-in"></i> New user registration
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <i class="fa fa-sign-in"></i> New user registration
                                    <span class="time"><i class="fa fa-clock-o"></i> 18 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <i class="fa fa-envelope-o"></i> New message from Alejandra
                                    <span class="time"><i class="fa fa-clock-o"></i> 28 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <i class="fa fa-sign-in"></i> New user registration
                                    <span class="time"><i class="fa fa-clock-o"></i> 49 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <i class="fa fa-download"></i> New order placed
                                    <span class="time"><i class="fa fa-clock-o"></i> 1 day.</span>
                                </a>
                                <div class="footer">
                                    <a href="index.php#" class="logout">View all notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="fa fa-envelope-o"></i>
                        
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="index.php#" class="close-fa fa"><i class="fa fa-times-circle"></i></a>
                            <div class="messages">
                                <a href="index.php#" class="item">
                                    <img src="../detail/img/contact-img.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <img src="../detail/img/contact-img2.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 26 min.</span>
                                </a>
                                <a href="index.php#" class="item last">
                                    <img src="../detail/img/contact-img.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 48 min.</span>
                                </a>
                                <div class="footer">
                                    <a href="index.php#" class="logout">View all messages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        Welcome, <?php echo $fname ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="personal-info.php">Personal info</a></li>
                        <li><a href="index.php#">Account settings</a></li>
                        <li><a href="index.php#">Billing</a></li>
                        <li><a href="index.php#">Export your data</a></li>
                        <li><a href="index.php#">Send feedback</a></li>
                    </ul>
                </li>
                <li class="settings hidden-phone">
                    <a href="personal-info.php" role="button">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="signout.php" role="button">
                        <i class="fa fa-share"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="pic active">
                <div class="pull-left">
                    <img src='../getimg.php?id=<?php echo $user_id ?>&jb=<?php echo $jb?>' class='img-circle avatar' />
                </div>
                <div class="info pull-left" style="padding-left:10px">
                    <span style="font-weigth:10em">Hello, <?php echo $fname ?></span><br>
                    <span> <i class="fa fa-circle" style="color:#00B218;font-size:0.8em"></i> Online</span>
                </div>
            </li>
            <li>
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="chart.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle" href="index.php#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="user-list.html">User list</a></li>
                    <li><a href="new-user.html">New user form</a></li>
                    <li><a href="user-profile.html">User profile</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="index.php#">
                    <i class="fa fa-edit"></i>
                    <span>Forms</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="form-showcase.html">Form showcase</a></li>
                    <li><a href="form-wizard.html">Form wizard</a></li>
                </ul>
            </li>
            <li>
                <a href="gallery.html">
                    <i class="fa fa-picture-o"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="fa fa-calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a href="tables.html">
                    <i class="fa fa-th-large"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle ui-elements" href="index.php#">
                    <i class="fa fa-code-fork"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="ui-elements.html">UI Elements</a></li>
                    <li><a href="icons.html">Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="personal-info.html">
                    <i class="fa fa-cog"></i>
                    <span>My Info</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle" href="index.php#">
                    <i class="fa fa-share"></i>
                    <span>Extras</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="code-editor.html">Code editor</a></li>
                    <li><a href="grids.html">Grids</a></li>
                    <li><a href="signin.html">Sign in</a></li>
                    <li><a href="signup.html">Sign up</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">
            <div id="pad-wrapper">
                <!-- morris stacked chart -->
                <div class="row-fluid">
                    <h4 class="title">Morris.js stacked</h4>
                    <div class="span12">
                        <h5>Quarterly Apple iOS device unit sales</h5>
                        <br>
                        <div id="hero-area" style="height: 250px;"></div>
                    </div>
                </div>

                <!-- morris graph chart -->
                <div class="row-fluid section">
                    <h4 class="title">Morris.js <small>Monthly growth</small></h4>
                    <div class="span12 chart">                        
                        <div id="hero-graph" style="height: 230px;"></div>
                    </div>
                </div>

                <!-- jQuery flot chart -->
                <div class="row-fluid section">
                    <h4 class="title">
                        jQuery Flot <small>Monthly growth</small>
                        <div class="btn-group pull-right">
                            <button class="glow left">DAY</button>
                            <button class="glow middle active">MONTH</button>
                            <button class="glow right">YEAR</button>
                        </div>
                    </h4>
                    <div class="span12">
                        <div id="statsChart"></div>
                    </div>
                </div>

                <!-- morris bar & donut charts -->
                <div class="row-fluid section">
                    <h4 class="title">
                        Morris.js
                    </h4>
                    <div class="span6 chart">
                        <h5>Devices sold</h5>
                        <div id="hero-bar" style="height: 250px;"></div>
                    </div>
                    <div class="span5 chart">
                        <h5>Month traffic</h5>
                        <div id="hero-donut" style="height: 250px;"></div>    
                    </div>
                </div>

                <!-- jQuery knobs -->
                <div class="row-fluid section">
                    <h4 class="title">jQuery Knob</h4>
                    <div class="row-fluid">
                        <div class="span3">     
                            <input type="text" value="50" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140">
                        </div>
                        <div class="span3">
                            <input type="text" value="75" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#8ac368" data-bgColor="#c4e9aa" data-width="140">
                        </div>
                        <div class="span3">
                            <input type="text" value="35" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#5ba0a3" data-bgColor="#cef3f5" data-width="140">
                        </div>
                        <div class="span3">
                            <input type="text" value="85" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#b85e80" data-bgColor="#f8d2e0" data-width="140">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts for this page -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="../detail/js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="../detail/js/jquery.flot.js"></script>
    <script src="../detail/js/jquery.flot.stack.js"></script>
    <script src="../detail/js/jquery.flot.resize.js"></script>
    <!-- morrisjs -->
    <script src="../detail/js/raphael-min.js"></script>
    <script src="../detail/js/morris.min.js"></script>
    <!-- call all plugins -->
    <script src="../detail/js/theme.js"></script>

    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
        })

    </script>

    <!-- build the charts -->
    <script type="text/javascript">

        // Morris Bar Chart
        Morris.Bar({
            element: 'hero-bar',
            data: [
                {device: '1', sells: 136},
                {device: '3G', sells: 1037},
                {device: '3GS', sells: 275},
                {device: '4', sells: 380},
                {device: '4S', sells: 655},
                {device: '5', sells: 1571}
            ],
            xkey: 'device',
            ykeys: ['sells'],
            labels: ['Sells'],
            barRatio: 0.4,
            xLabelMargin: 10,
            hideHover: 'auto',
            barColors: ["#3d88ba"]
        });


        // Morris Donut Chart
        Morris.Donut({
            element: 'hero-donut',
            data: [
                {label: 'Direct', value: 25 },
                {label: 'Referrals', value: 40 },
                {label: 'Search engines', value: 25 },
                {label: 'Unique visitors', value: 10 }
            ],
            colors: ["#30a1ec", "#76bdee", "#c4dafe"],
            formatter: function (y) { return y + "%" }
        });


        // Morris Line Chart
        var tax_data = [
            {"period": "2013-04", "visits": 2407, "signups": 660},
            {"period": "2013-03", "visits": 3351, "signups": 729},
            {"period": "2013-02", "visits": 2469, "signups": 1318},
            {"period": "2013-01", "visits": 2246, "signups": 461},
            {"period": "2012-12", "visits": 3171, "signups": 1676},
            {"period": "2012-11", "visits": 2155, "signups": 681},
            {"period": "2012-10", "visits": 1226, "signups": 620},
            {"period": "2012-09", "visits": 2245, "signups": 500}
        ];
        Morris.Line({
            element: 'hero-graph',
            data: tax_data,
            xkey: 'period',
            xLabels: "month",
            ykeys: ['visits', 'signups'],
            labels: ['Visits', 'User signups']
        });



        // Morris Area Chart
        Morris.Area({
            element: 'hero-area',
            data: [
                {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
                {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
                {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
                {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            lineWidth: 2,
            hideHover: 'auto',
            lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
          });



        // Build jQuery Knobs
        $(".knob").knob();



        //  jQuery Flot Chart
        var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 75],[11, 57],[12, 59]];
        var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,47],[12, 39]];

        var plot = $.plot($("#statsChart"),
            [ { data: visits, label: "Signups"},
             { data: visitors, label: "Visits" }], {
                series: {
                    lines: { show: true,
                            lineWidth: 1,
                            fill: true, 
                            fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
                         },
                    points: { show: true, 
                             lineWidth: 2,
                             radius: 3
                         },
                    shadowSize: 0,
                    stack: true
                },
                grid: { hoverable: true, 
                       clickable: true, 
                       tickColor: "#f9f9f9",
                       borderWidth: 0
                    },
                legend: {
                        // show: false
                        labelBoxBorderColor: "#fff"
                    },  
                colors: ["#a7b5c5", "#30a0eb"],
                xaxis: {
                    ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4,"APR"], [5,"MAY"], [6,"JUN"], 
                           [7,"JUL"], [8,"AUG"], [9,"SEP"], [10,"OCT"], [11,"NOV"], [12,"DEC"]],
                    font: {
                        size: 12,
                        family: "Open Sans, Arial",
                        variant: "small-caps",
                        color: "#9da3a9"
                    }
                },
                yaxis: {
                    ticks:3, 
                    tickDecimals: 0,
                    font: {size:12, color: "#9da3a9"}
                }
             });

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y - 30,
                left: x - 50,
                color: "#fff",
                padding: '2px 5px',
                'border-radius': '6px',
                'background-color': '#000',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#statsChart").bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);

                    var month = item.series.xaxis.ticks[item.dataIndex].label;

                    showTooltip(item.pageX, item.pageY,
                                item.series.label + " of " + month + ": " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
    </script>
</body>

<?php
            }
        }
    }
    else
        header("Refresh :0;url=../");

?>
</html>