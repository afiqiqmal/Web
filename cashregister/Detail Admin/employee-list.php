<?php
    require "core/init.php";
    
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
?>
<!DOCTYPE html>

<head>
	<title>Detail Admin - Employee list</title>
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

    <div class="loader">
        <div id="scan-text">
            <div class="vertical-centered">
                <label style="display:block;">Loading.....</label>
                <img src="../images/ajax-loader.gif">
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
                $user = $user->result();
                $fname = $user->fname;
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
                                    <i class="fa fa-envelope-o"></i> New message from Afiq Iqmal
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
                                    <img src="../images/default_pic.jpg" class="display" />
                                    <div class="name">Afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <img src="../images/default_pic.jpg" class="display" />
                                    <div class="name">Afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 26 min.</span>
                                </a>
                                <a href="index.php#" class="item last">
                                    <img src="../images/default_pic.jpg" class="display" />
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
        
        <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid">
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-dashboard"></i> Employee List</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li>Employee List</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <div class="span10 pull-right">
                        <input type="text" class="span4 search global_filter" id="global_filter" placeholder="Employee Index Global Search" style="padding-right:0px">
                        <div class="ui-dropdown">
                            <div class="head" data-toggle="tooltip" title="Click me!" style="height:22px;">
                                Filter Employee
                                <i class="arrow-down"></i>
                            </div>  
                            <div class="dialog">
                                <div class="pointer">
                                    <div class="arrow"></div>
                                    <div class="arrow_border"></div>
                                </div>
                                <div class="body">
                                    <p class="title">
                                        Show Employee where:
                                    </p>
                                    <div class="form">
                                        <select class="select-filter" style="width:200px">
                                            <option value="0">Employee Info</option>
                                            <option value="1">Date Employed</option>
                                            <option value="2">Job</option>
                                            <option value="3">Salary</option>
                                            <option value="4">Contact</option>
                                        </select>
                                        <input style="width:200px;"type="text" data-column="0" placeholder="Employee ID Index" class="column_filter" id="col0_filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info pull-right" disabled="disabled" id="deletebtn">
                            <span>-</span>
                            DELETE
                        </button>
                        <a href="new-employee.php" class="btn btn-success pull-right">
                            <i class="fa fa-pencil"></i>
                            NEW EMPLOYEE
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
                            $delete = new Employee();
                            if(Input::get('check')!=null){
                                foreach(Input::get('check') as $check){
                                    $delete->deleteEmployee(Crytion::decryt64(Crytion::decryt64($check)));             
                                }
                            }
                        }
                    ?>
                    <form action='employee-list.php?del=1' method='post' id='deleteem'>
                    <table class="table table-bordered table-hover dataTable" id="employee-list-table">
                        <thead>
                            <tr>
                                <th class="span1">
                                    <input type="checkbox" name="checkall" id="checkall"/>
                                </th>
                                <th class="span4">
                                    Employee Info
                                </th>
                                <th class="span2">
                                    Date Employed
                                </th>
                                <th class="span2">
                                    Job
                                </th>
                                <th class="span2">
                                    Salary
                                </th>
                                <th class="span2">
                                    Contact
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "../config/config.php";
                            $sql = "Select * from tbl_employee a,tbl_jobs b where a.job_id = b.job_id and b.job_name !='ADMIN' order by a.user_id";
                            $query = $con->query($sql); 
                            if($query->rowCount()){
                                while($r = $query->fetch(PDO::FETCH_OBJ)){ 
                                    echo "<tr>";
                                    echo '<td><input type="checkbox" name="check[]" id="check" value="'.Crytion::encryt64(Crytion::encryt64($r->user_id)).'" /></td>';
                                    echo "<td>";
                                    echo "<img src='../getimg.php?id=".Crytion::encryt64(Crytion::encryt64($r->user_id))."&jb=".Crytion::encryt64(Crytion::encryt64("employee"))."' class='img-circle avatar hidden-phone' />";
                                    echo "<a href='em-profile.php?id=".Crytion::encryt64(Crytion::encryt64($r->user_id))."' class='name'>".$r->lname.",".$r->fname."</a>";
                                    echo "<span class='subtext'>".$r->job_name."</span>";
                                    echo "</td>";
                                    echo "<td></td>";
                                    echo "<td>".$r->job_name."</td>";
                                    echo "<td>".$r->salary."</td>";
                                    echo "<td><a href='#' class='name'>".$r->email."</a><span class='subtext'>".$r->tel."</span></td>";
                                    echo "</tr>";
                                }                                
                            }
                            ?>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="../js/dataTables/jquery.dataTables.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.js"></script>
    
    <!-- call all plugins -->
    <script src="../detail/js/theme.js"></script>

    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
        });
        
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
            var submitButt = $("#deletebtn  ");
                checkboxes.click(function() {
                submitButt.attr("disabled", !checkboxes.is(":checked"));
            });
            
        });
        
        $('#deletebtn').click(function(){
            if (confirm("Are You Sure? Delete this will not be revert back") == true){
                $('#deleteem').submit(); 
            }
        });
    </script>


    <script> // datatables function custom
        //data table select option
        $(".select-filter").change(function(){
            var a = $(this).val();
                var str;
                if(a=="0") str="Employee Info Index";
                if(a=="1") str="Date Empoyed Index";
                if(a=="2") str="Job Index";
                if(a=="3") str="Salary Index";
                if(a=="4") str="Contact Index";

                $(".column_filter").attr("data-column",a).attr("id","col"+a+"_filter").attr("placeholder",str);
            })

            $("#global_filter").click(function(){
                $(".column_filter").val('').click();
            });
            
            //data table jquery setting
            function filterColumn ( i ) {
                $('#employee-list-table').DataTable().column( i ).search( 
                    $('#col'+i+'_filter').val()
                ).draw();
            }

            function filterGlobal () {
                $('#employee-list-table').DataTable().search( 
                    $('#global_filter').val()
                ).draw();
            }

            $(document).ready(function() {
                var table = $('#employee-list-table').DataTable({
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
            } );

            $(".dataTables_length label select").css("height","30px");
            
            $("#employee-list-table thead tr th:nth-child(2)").click();
            
            

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
        Redirect::to('../');

?>
</html>