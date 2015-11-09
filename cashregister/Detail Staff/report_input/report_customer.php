<?php 
    require "core/init.php";
    require "../../config/config.php";
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
    
    $typereport = Input::get('rep');
    $type = Input::get('type');
    if(($typereport != 'detailed') && ($typereport != 'graph') && ($typereport != 'summary'))
        Redirect::to("error.php");
    if(($type != 'item') && ($type != 'profit') && ($type != 'employee')&& ($type != 'customer')&& ($type != 'sales'))
        Redirect::to("error.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff - Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Retail POS Sytem">
    <meta name="keywords" content="POS System">
    <meta name="author" content="Hafiq iqmal">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <!-- bootstrap -->
    <link href="../../detail/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../detail/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="../../detail/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />
    
    <!-- libraries -->
    <link href="../../detail/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="../../detail/lib/bootstrap.datepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../detail/lib/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../../detail/icons.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../../detail/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../detail/report.css" type="text/css" media="screen" />     

    <link href='../../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <div class="loader">
        <div id="scan-text">
            <div class="vertical-centered">
                <label style="display:block;">Loading.....</label>
                <img src="../../images/ajax-loader.gif"/>
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
        if($assign == "AD")
        {
            header("Location:../../detail%20admin/");
        }
        else if($assign == "ST_C" || $assign == "ST_IN")
        {            
            $user = DB::getInstance()->get('tbl_employee',array("user_id","=",$user_id));
            
            if($user->error()){
                Redirect::to('../../');
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
            
            <a class="brand " href="index.php"><img src="../../detail/img/logo.png"></a>

            <button type="button" class="btn btn-navbar hidden-phone" style="display:block" id="menu-toggler2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav pull-right">                
                <li class="notification-dropdown hidden-phone">
                    
                    <a href="#" class="trigger">
                        <i class="fa fa-exclamation-triangle"></i>
                        <span class="count">8</span>
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
                        <span class="count">8</span>
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
                                    <img src="../../detail/img/contact-img.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <img src="../../detail/img/contact-img2.png" class="display" />
                                    <div class="name">Alejandra Galván</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 26 min.</span>
                                </a>
                                <a href="index.php#" class="item last">
                                    <img src="../../detail/img/contact-img.png" class="display" />
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
                    <img src='../../getimg.php?id=<?php echo $user_id ?>&jb=<?php echo $jb?>' class='img-circle avatar' />
                </div>
                <div class="info pull-left" style="padding-left:10px">
                    <span style="font-weigth:10em">Hello, <?php echo $fname ?></span><br>
                    <span> <i class="fa fa-circle" style="color:#00B218;font-size:0.8em"></i> Online</span>
                </div>
            </li>
            <li>
                <a href="../index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>            
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="../report.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Report</span>
                </a>
            </li>
            <li>
                <a href="../user-list.php">
                    <i class="fa fa-group"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="../sales.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sales</span>
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

                    <?php
                        if(Input::exists()){
                                if($typereport == 'detailed'){
                                    $static_date = Input::get('inputrange');
                                    $from = Input::get('custom_from');
                                    $to = Input::get('custom_to');
                                    $sql = DB::getInstance()->get('tbl_cust',array('cust_id','=',Input::get('cust_select')));
                                    $custname = $sql->result()->cust_fname;
                                    
                                    if($static_date!=null)
                                        $date = $static_date;
                                    else
                                        $date = $from.'-'.$to;
                                ?>
                                    <div id="main-stats">
                                        <div class="row-fluid">
                                            <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-bar-chart"></i><?php  echo ucwords($typereport) ?> Report - <?php echo $custname?></h2>
                                        </div>
                                        <ul class="breadcrumb" style="margin-bottom:0px;">
                                          <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                                          <li><a href="../report.php"> Report</a><span class="divider">></span></li>
                                          <li><a href="report_customer.php?rep=<?php echo $typereport ?>&type=<?php echo $type ?>"> Report input : <?php  echo ucwords($typereport).' '.ucwords($type) ?> Report</a><span class="divider">></span></li>
                                          <li> Report <?php  echo ucwords($typereport) ?> </li>
                                          <span class="pull-right">Time: <span id="time"></span></span>
                                        </ul>
                                    </div>
                                    <div id="pad-wrapper">
                                        <div class="row-fluid">
                                            <table class="table-report table table-bordered">
                                                <tr>
                                                    <th class="span1" style="text-align: center;"><i class="fa fa-align-justify fa-lg"></i></th>
                                                    <th class="header"><span><?php echo $date?></span><span style="color:#0088cc" class="pull-right">Click <i class="fa fa-plus"/> For More Details</span></th>
                                                </tr>
                                            </table>
                                            <table class="table-report table table-bordered" id="report-list">
                                                <thead>
                                                    <tr>
                                                        <th class="span1"></th>
                                                        <th>Sales ID</th>
                                                        <th>Date</th>
                                                        <th>Item Purchased</th>
                                                        <th>Total Spend</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php
                                                        $date = str_replace(' ','',$date);
                                                        $datesplit = explode("-",$date);
                                                        $reset = explode("/",$datesplit[0]);
                                                        $reset2 = explode("/",$datesplit[1]);
                                                        $first = $reset[2].'/'.$reset[1].'/'.$reset[0].' 00:00:00';
                                                        $last = $reset2[2].'/'.$reset2[1].'/'.$reset2[0].' 23:59:59';
                                                        
                                                        $disp = 'SELECT b.sales_id,sale_time,payment_amount,payment_type,SUM(goods_qty) 
                                                                FROM tbl_sales_item a,tbl_sales b,tbl_sales_payment c 
                                                                WHERE a.sales_id = b.sales_id 
                                                                AND b.sales_id = c.sales_id 
                                                                AND b.cust_id = ?
                                                                AND b.sale_time BETWEEN ? AND ?
                                                                Group by sale_time';
                                                                
                                                        $query = $con->prepare($disp);
                                                        $query->execute(array(Input::get('cust_select'),$first,$last));
                                                        if($query->rowCount()>0){
                                                            while($r = $query->fetch(PDO::FETCH_NUM)){
                                                                echo "<tr class='click'>";
                                                                    echo "<td style='text-align:center;color:#0088cc'><i class='fa fa-plus'></i></td>";
                                                                    echo "<td>".$r[0]."</td>";
                                                                    echo "<td>".$r[1]."</td>";
                                                                    echo "<td>".$r[4]."</td>";
                                                                    echo "<td>".$r[2]."</td>";
                                                                echo "</tr>";
                                                                echo "<tr class='rowdetail'>";
                                                                    echo "<td colspan='5' style='padding:0'>";
                                                                        echo "<table class='table-report inner table table-bordered'>";
                                                                            echo "<tr>";
                                                                                echo "<th>Item ID</th>";
                                                                                echo "<th>Item Name</th>";
                                                                                echo "<th>Item Purchase</th>";
                                                                                echo "<th>Price</th>";
                                                                                echo "<th>Discount</th>";                                                                                
                                                                            echo "</tr>";
                                                                            
                                                                            $rowd = 'SELECT a.goods_id,c.goods_name,a.goods_qty,a.unit_price,a.goods_discount
                                                                            FROM tbl_sales_item a,tbl_sales b,tbl_goods c
                                                                            WHERE a.sales_id = b.sales_id 
                                                                            AND a.goods_id = c.goods_id 
                                                                            AND b.cust_id = ?
                                                                            AND b.sales_id = ?
                                                                            AND b.sale_time BETWEEN ? AND ?';
                                                                            
                                                                            $query1 = $con->prepare($rowd);
                                                                            $query1->execute(array(Input::get('cust_select'),$r[0],$first,$last));
                                                                            if($query1->rowCount()>0){
                                                                                while($ro = $query1->fetch(PDO::FETCH_NUM)){
                                                                                    echo "<tr>";
                                                                                        echo "<td>".$ro[0]."</td>";
                                                                                        echo "<td>".$ro[1]."</td>";
                                                                                        echo "<td>".$ro[2]."</td>";
                                                                                        echo "<td>".$ro[3]."</td>";
                                                                                        echo "<td>".$ro[4]."</td>";
                                                                                    echo "</tr>";
                                                                                }
                                                                            }
                                                                        echo "</table>";
                                                                    echo "</td>";
                                                                echo "</tr>";
                                                                
                                                            }
                                                        }
                                                        
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div> 
                                     
                                <?php
                                }
                                else if($typereport == 'graph'){
                                ?>
                                    <div id="main-stats">
                                        <div class="row-fluid">
                                            <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-bar-chart"></i><?php  echo ucwords($typereport) ?> Report</h2>
                                        </div>
                                        <ul class="breadcrumb" style="margin-bottom:0px;">
                                          <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                                          <li><a href="../report.php"> Report</a><span class="divider">></span></li>
                                          <li><a href="report_customer.php?rep=<?php echo $typereport ?>&type=<?php echo $type ?>"> Report input : <?php  echo ucwords($typereport).' '.ucwords($type) ?> Report</a><span class="divider">></span></li>
                                          <li> Report <?php  echo ucwords($typereport) ?> </li>
                                          <span class="pull-right">Time: <span id="time"></span></span>
                                        </ul>
                                    </div>
                                    <div id="pad-wrapper">
                                        
                                    </div>
                                <?php
                                }
                                else if($typereport == 'summary'){
                                ?>
                                    <div id="main-stats">
                                        <div class="row-fluid">
                                            <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-bar-chart"></i><?php  echo ucwords($typereport) ?> Report</h2>
                                        </div>
                                        <ul class="breadcrumb" style="margin-bottom:0px;">
                                          <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                                          <li><a href="../report.php"> Report</a><span class="divider">></span></li>
                                          <li><a href="report_customer.php?rep=<?php echo $typereport ?>&type=<?php echo $type ?>"> Report input : <?php  echo ucwords($typereport) ?> '.ucwords($type).' Report</a><span class="divider">></span></li>
                                          <li> Report <?php  echo ucwords($typereport) ?> </li>
                                          <span class="pull-right">Time: <span id="time"></span></span>
                                        </ul>
                                    </div>
                                    <div id="pad-wrapper">
                                        <div class="row-fluid">
                                            <table class="table-report table table-bordered">
                                                <tr>
                                                    <th class="span1" style="text-align: center;"><i class="fa fa-align-justify fa-lg"></i></th>
                                                    <th class="header"><span><?php echo $date?></span></th>
                                                </tr>
                                            </table>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="span3">Sales ID</th>
                                                        <th class="span3">Date</th>
                                                        <th class="span3">Item Purchased</th>
                                                        <th class="span3">Total Spend</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                <?php
                                }
                        }
                        else{
                            echo '<div id="main-stats">
                                <div class="row-fluid">
                                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-bar-chart"></i>'.ucwords($typereport).' Report</h2>
                                </div>
                                <ul class="breadcrumb" style="margin-bottom:0px;">
                                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                                  <li><a href="../report.php"> Report</a><span class="divider">></span></li>
                                  <li> Report input : '.ucwords($typereport).' '.ucwords($type).' Report</li>
                                  <span class="pull-right">Time: <span id="time"></span></span>
                                </ul>
                            </div>
                            <div id="pad-wrapper">
                            <div class="row-fluid">
                            <table class="table-report table table-bordered">
                                <tr>
                                    <th class="span1" style="text-align: center;"><i class="fa fa-align-justify fa-lg"></i></th>
                                    <th colspan="2" class="header"><span>Date Range</span></th>
                                </tr>
                            </table>';
                            $report = new Report();
                            echo $report->RecognizeReport($type,$typereport);
                            echo '</div></div>';
                        }
                    ?>
                
        </div>
    </div>


	<!-- scripts -->
    <script src="../../detail/js/jquery-2.1.0.js"></script>
    <script src="../../detail/js/bootstrap.min.js"></script>
    <script src="../../detail/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="../../detail/js/bootstrap.datepicker.js"></script>
    <script src="../../detail/js/moment.min.js"></script>
    <script src="../../detail/js/daterangepicker.js"></script>
    <script src="../../js/dataTables/jquery.dataTables.js"></script>
    <script src="../../js/dataTables/dataTables.bootstrap.js"></script>

    <!-- call all plugins -->
    <script src="../../detail/js/theme.js"></script>
    <script src="../../detail/js/datetheme.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            $(".loader").hide();
        });
        
        $(document).ready(function(){
            $('input[type=radio]').click(function(){
                if ($("#simple_radio").prop('checked')){
                    $('.switch2 input[type=text]').prop('disabled', true);
                    $('.switch1 input[type=text]').prop('disabled', false);
                }
                else{
                    $('.switch1 input[type=text]').prop('disabled', true);
                    $('.switch2 input[type=text]').prop('disabled', false);
                }
            })
        });
        
        $(function() {
            $('.rowdetail').hide();
            $('.click').click(function ()
            {
                $(this).find('.fa').toggleClass('fa-minus','fa-plus');
                $(this).nextAll('tr').each( function()
                {
                    if ($(this).is('.click'))
                    {
                        return false;
                    }
                    $(this).toggle();
                });
            });
        });
        
        /*
		$(document).ready(function()
		{
			$("#generate_report").click(function()
			{		
				if ($("#simple_radio").prop('checked'))
				{
                    var str = $('#inputrange').val().replace(/ /g, '')
					window.location = window.location+'&date='+str;
				}
				else
				{
					var start_date = $(".from_date").val();
					var end_date = $(".to_date").val();
					window.location = window.location+'&date='+start_date + '-'+ end_date;
				}
			});
		});
        */
       
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
        header("Refresh :0;url=../../");
?>
</html>