<?php 
    require "core/init.php";
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Dashboard</title>
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
    
    <!-- libraries -->
    <link href="../detail/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/index.css" type="text/css" media="screen" />   

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
                <img src="../images/ajax-loader.gif"/>
            </div>
        </div>
    </div>

    <?php 
    $assign = Crytion::decryt64(Session::get('assign'));
    $user_id = Crytion::decryt64(Session::get('user_id'));
    $user = new User();
    $user->checkLoggedin(array('assign','user_id'));
    if($user->isLoggedin())
    {
        if($assign == "ST_C" || $assign == "ST_IN")
        {
            header("Location:../detail%20staff/");
        }
        else if($assign == "AD")
        {            
            $user = DB::getInstance()->get('tbl_employee',array("user_id","=",$user_id));
            
            if($user->error()){
                Redirect::to('../');
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
                                    <div class="name">Afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <img src="../detail/img/contact-img2.png" class="display" />
                                    <div class="name">Afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 26 min.</span>
                                </a>
                                <a href="index.php#" class="item last">
                                    <img src="../detail/img/contact-img.png" class="display" />
                                    <div class="name">Afiq Iqmal</div>
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
                <li class="settings">
                    <a href="logout.php" role="button">
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
                    <span>Dashboard</span>
                </a>
            </li>            
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="report.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Report</span>
                </a>
            </li>
            <li>
                <a href="employee-list.php">
                    <i class="fa fa-users"></i>
                    <span>Employees</span>
                </a>
            </li>
            <li>
                <a href="user-list.php">
                    <i class="fa fa-group"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="supplier.php">
                    <i class="fa fa-download"></i>
                    <span>Supplier</span>
                </a>
            </li>
            <li>
                <a href="sales.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sales</span>
                </a>
            </li>
            <li>
                <a href="items.php">
                    <i class="fa fa-truck"></i>
                    <span>Items</span>
                </a>
            </li>
            <li>
                <a href="personal-info.php">
                    <i class="fa fa-cog"></i>
                    <span>My Info</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">

            <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid">
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-bar-chart"></i> Report</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li> Report</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>
            <div id="pad-wrapper">
                <div class="span5">
                    <div class="sidebar">
                        <ul class="nav nav-tabs nav-stacked">
                            <li><a href="" data-toggle="tab" data-target="#customer" class="report-tab"><i class="fa fa-group"></i> Customers<i class="icon-chevron-right pull-right"></i></a></li>
                            <li><a href="" data-toggle="tab" data-target="#employee" class="report-tab"><i class="fa fa-group"></i> Employee<i class="icon-chevron-right pull-right"></i></a></li>
                            <li><a href="" data-toggle="tab"data-target="#profit" class="report-tab"><i class="fa fa-money"></i> Profit<i class="icon-chevron-right pull-right"></i></a></li>
                            <li><a href="" data-toggle="tab" data-target="#sales" class="report-tab"><i class="fa fa-shopping-cart"></i> Sales<i class="icon-chevron-right pull-right"></i></a></li>
                            <li><a href="" data-toggle="tab" data-target="#inventory" class="report-tab"><i class="fa fa-truck"></i> Inventory<i class="icon-chevron-right pull-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="span5">
                    <div class="panel panel1" id="">
                        <div class="panel-heading">
                            <h4><i class="fa fa-arrow-left"></i> Reports : Make Your Selection</h4>
                        </div>
                    </div>
                    <div class="panel panel2 hide" id="customer">
                        <div class="panel-heading">
                            <h4><i class="fa fa-group"></i> Customers</h4>
                        </div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs nav-stacked">
                                <li><a href="report_input/report_customer.php?rep=graph&type=customer"><i class="fa fa-bar-chart"></i> Graphical Report</a></li>
                                <li><a href="report_input/report_customer.php?rep=summary&type=customer"><i class="fa fa-bar-chart"></i> Summary Report</a></li>
                                <li><a href="report_input/report_customer.php?rep=detailed&type=customer"><i class="fa fa-file"></i> Detailed Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel3 hide" id="employee">
                        <div class="panel-heading">
                            <h4><i class="fa fa-group"></i> Employees</h4>
                        </div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs nav-stacked">
                                <li><a href="report_input/report_employee.php?rep=graph&type=employee"><i class="fa fa-bar-chart"></i> Graphical Report</a></li>
                                <li><a href="report_input/report_employee.php?rep=detailed&type=employee"><i class="fa fa-file"></i> Detailed Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel4 hide" id="profit">
                        <div class="panel-heading">
                            <h4><i class="fa fa-money"></i> Profit</h4>
                        </div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs nav-stacked">
                                <li><a href="report_input/report_profit.php?rep=summary&type=profit"><i class="fa fa-bar-chart"></i> Summary Report</a></li>
                                <li><a href="report_input/report_profit.php?rep=graph&type=profit"><i class="fa fa-file"></i> Graphical Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel5 hide" id="sales">
                        <div class="panel-heading">
                            <h4><i class="fa fa-shopping-cart"></i> Sales</h4>
                        </div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs nav-stacked">
                                <li><a href="report_input/"><i class="fa fa-bar-chart"></i> Graphical Report</a></li>
                                <li><a href="report_input/"><i class="fa fa-file"></i> Summary Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel6 hide" id="inventory">
                        <div class="panel-heading">
                            <h4><i class="fa fa-truck"></i> Inventory</h4>
                        </div>
                        <div class="panel-content">
                            <ul class="nav nav-tabs nav-stacked">
                                <li><a href="report_input/"><i class="fa fa-bar-chart"></i> Summary Report</a></li>
                                <li><a href="report_input/"><i class="fa fa-file"></i> Detailed Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/jquery-ui-1.10.2.custom.min.js"></script>
    
    <!-- call all plugins -->
    <script src="../detail/js/theme.js"></script>

    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
        });
        
        $(document).ready(function () {
            var $targets = $('.panel');
            $('.report-tab').click(function () {
                var $target = $($(this).data('target')).show();
                $targets.not($target).hide();
            });
        });

    </script>

    <script type="text/javascript">
            function timedMsg()
            {
              var t=setInterval("change_time();",1000);
            }
            function change_time()
            {
              var d = new Date();
              var curr_hour = d.getHours();
              var curr_min = d.getMinutes();
              var curr_sec = d.getSeconds();
              var ampm = curr_hour >= 12 ? 'PM' : 'AM';
              
              if(curr_sec < 10)
                curr_sec = "0"+curr_sec;
              if(curr_min < 10)
                curr_min = "0"+curr_min;
              if(curr_hour > 12)
                curr_hour = curr_hour - 12;
              if(curr_hour < 10)
                curr_hour = "0"+curr_hour;
              document.getElementById('time').innerHTML =curr_hour+':'+curr_min+':'+curr_sec+' '+ampm;
            }
            timedMsg(); 
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