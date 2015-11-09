<?php 

    require "core/init.php";
    
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff - Customer list</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Retail POS Sytem">
    <meta name="keywords" content="POS System">
    <meta name="author" content="Hafiq iqmal">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
    <!-- bootstrap -->
    <link href="../detail/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../detail/bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <link href="../detail/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">

    <!-- libraries -->
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../css/dataTable/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/user-list.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    <?php
    
    $assign = Crytion::decryt64(Session::get('assign'));
    $user_id = Crytion::decryt64(Session::get('user_id'));
    $user = new User();
    $user->checkLoggedin(array('assign','user_id'));
    if($user->isLoggedin())
    {
        if($assign == "AD")
        {
            header("Location:../detail%20admin/");
        }
        else if($assign == "ST_C" || $assign == "ST_IN")
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

        <div class="loader">
            <div id="scan-text">
                <div class="vertical-centered">
                    <label style="display:block;">Loading.....</label>
                    <img src="../images/ajax-loader.gif">
                </div>
            </div>
        </div>
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
            <li>
                <a href="report.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Report</span>
                </a>
            </li>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="user-list.php">
                    <i class="fa fa-group"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="sales.php">
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
        <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid">
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-users"></i> Customers</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li> Customer</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>

        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <div class="span10 pull-right">

                        <input type="text" class="span4 search global_filter" id="global_filter" placeholder="Customer Index Global Search" style="padding-right:0px">   
                        <div class="ui-dropdown">
                            <div class="head" data-toggle="tooltip" title="Click me!" style="height:22px;">
                                Filter Customer
                                <i class="arrow-down"></i>
                            </div>  
                            <div class="dialog">
                                <div class="pointer">
                                    <div class="arrow"></div>
                                    <div class="arrow_border"></div>
                                </div>
                                <div class="body">
                                    <p class="title">
                                        Show users where:
                                    </p>
                                    <div class="form">
                                        <select class="select-filter" style="width:200px">
                                            <option value="1">Person Id</option>
                                            <option value="2">Name</option>
                                            <option value="3">Sign up</option>
                                            <option value="4">Email</option>
                                            <option value="5">Phone Number</option>
                                        </select>
                                        <input style="width:200px;"type="text" data-column="1" placeholder="Customer ID Index" class="column_filter" id="col1_filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info pull-right" disabled="disabled" id="deletebtn">
                            <span>-</span>
                            DELETE
                        </button>
                        <a href="new-user.php" class="btn btn-success success pull-right">
                            <span>&#43;</span>
                            NEW CUSTOMER
                        </a>
                    </div>
                </div>


                <!-- Users table -->
                <div class="row-fluid table">
                                <style type="text/css">
                                    .dataTables_filter{
                                        display: none;
                                    }
                                    
                                </style>
                                <?php
                                    if(Input::get('del')==1){
                                        $delete = new Customer();
                                        if(Input::get('check')!=null){
                                            foreach(Input::get('check') as $check){
                                                $delete->deletecustomer(Crytion::decryt64(Crytion::decryt64($check)));             
                                            }
                                        }
                                    }
                                ?>
                                <form action='user-list.php?del=1' method='post' id='deletecust'>
                                <table class="table table-bordered display dataTable" id="user-list">
                                    <thead>
                                        <tr>
                                            <th class="span1"><input type="checkbox" name="checkall" id="checkall"/></th>
                                            <th class="span2">Person Id</th>
                                            <th class="span4">Name</th>
                                            <th class="span2">Registered</th>
                                            <th class="span3">Contact</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    require "../config/config.php";
                                    $sql = "Select * from tbl_cust";
                                    $query = $con->query($sql);
                                    while($r = $query->fetch(PDO::FETCH_OBJ))
                                    {
                                        echo '<tr>';
                                        echo '<td><input type="checkbox" name="check[]" id="check" value="'.base64_encode(base64_encode($r->cust_id)).'" /></td>';
                                        echo '<td><a class="name" href="cust-profile.php?id='.base64_encode(base64_encode($r->cust_id)).'">'.$r->cust_id.'</a><span>&nbsp;</span></td>';
                                        echo '<td><img style="top:0px;" src="../getimg.php?id='.base64_encode(base64_encode($r->cust_id)).'&jb='.base64_encode(base64_encode("cust")).'"class="img-circle avatar" />';
                                        echo '<a class="name" href="cust-profile.php?id='.base64_encode(base64_encode($r->cust_id)).'">'.$r->cust_fname.' '.$r->cust_lname.'</a>';
                                        echo '<span>&nbsp;</span>';
                                        echo '</td>';
                                        echo '<td>'.$r->date_reg.'</td>';
                                        echo '<td><a href="#" class="name">'.$r->cust_email.'</a><span class="subtext">'.$r->cust_tel.'</span></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                    
                                    </tbody>
                                </table>
                                </form>
                </div>
        </div>
                                

    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/theme.js"></script>
    <script src="../js/dataTables/jquery.dataTables.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            $(".loader").hide();
        })


        //check all check box in datatable
        $(document).ready(function() {
            $('#checkall').click(function(event) {
                if(this.checked) { 
                    $('#check').each(function() { 
                        this.checked = true;               
                    });
                }else{
                    $('#check').each(function() { 
                        this.checked = false;                       
                    });         
                }
            });
            
            var checkboxes = $("input[type='checkbox']");
            var submitButt = $("#deletebtn");
                checkboxes.click(function() {
                submitButt.attr("disabled", !checkboxes.is(":checked"));
            });
            
        });
        
        $('#deletebtn').click(function(){
            if (confirm("Are You Sure? Delete this will not be revert back") == true){
                $('#deletecust').submit(); 
            } 
        });

        $("#global_filter").click(function(){
            $(".column_filter").val('').click();
        });

        //data table select option
        $(".select-filter").change(function(){
            var a = $(this).val();
                var str;
                if(a=="0") str="Customer ID Index";
                if(a=="1") str="Customer Name Index";
                if(a=="2") str="Sign Up Date Index";
                if(a=="3") str="Email Index";
                if(a=="4") str="Phone Number Index";

                $(".column_filter").attr("data-column",a).attr("id","col"+a+"_filter").attr("placeholder",str);
            })

            //custom add class to data table
            function addclasses(target,str)
            {
                $(target).addClass(str);
            }
            //data table jquery setting
            function filterColumn ( i ) {
                $('#user-list').DataTable().column( i ).search( 
                    $('#col'+i+'_filter').val()
                ).draw();
            }
            function filterGlobal () {
                $('#user-list').DataTable().search( 
                    $('#global_filter').val()
                ).draw();
            }
            $(document).ready(function() {
                var table = $('#user-list').DataTable({
                  "oLanguage": {
                    "sEmptyTable" : "There is no record in this list"},
                  "iDisplayLength": 5,
                  "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                  "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0 ] }],
                  "dom": '<"top"flp<"clear">>rt<"bottom"ifp<"clear">>'
                
                });

                $('input.column_filter').on( 'keyup click', function () {
                    filterColumn($(".column_filter").attr("data-column"))
                });

                $('input.global_filter').on( 'keyup click', function () {
                    filterGlobal();
                });
                
                $("#user-list thead tr th:nth-child(2)").click();

            $(".dataTables_length label select").css("height","30px");
            

            addclasses("#user-list thead tr th:nth-child(3)","hidden-phone hidden-tablet");
            addclasses("#user-list tbody tr td:nth-child(3)","hidden-phone hidden-tablet");

            addclasses("#user-list thead tr th:nth-child(4)","hidden-phone");
            addclasses("#user-list tbody tr td:nth-child(4)","hidden-phone");


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