<!DOCTYPE html>
<html>
<head>
	<title>Detail Staff - Form Showcase</title>
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

    <!-- libraries -->
    <link href="../detail/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/uniform.default.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/select2.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/form-showcase.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand " href="index.php"><img src="../detail/img/logo.png"></a>
            <ul class="nav pull-right">                
                <li class="notification-dropdown hidden-phone">
                    
                    <a href="index.php#" class="trigger">
                        <i class="fa fa-exclamation-triangle"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="index.php#" class="close-fa fa"><i class="fa fa-times-circle"></i></a>
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
                    <a href="index.php#" class="trigger">
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
                        Welcome, <?php echo "Muhammad Hafiq Iqmal" ?>
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
                    <a href="signin.html" role="button">
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
            <li class="hidden-phone hidden-tablet" >
                <span>Time: <span id="time"></span></span>
            </li>
            <li >
                <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li >
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="chart-showcase.php">
                    <i class="fa fa-signal"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li>
                <a href="user-list.php">
                    <i class="fa fa-group"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="active">
                <a class="dropdown-toggle" href="index.php#">
                    <i class="fa fa-edit"></i>
                    <span>Forms</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu active">
                    <li><a href="form-showcase.html" class="active">Form showcase</a></li>
                    <li><a href="form-wizard.html">Form wizard</a></li>
                </ul>
            </li>
            <li>
                <a href="personal-info.php">
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
        
        <!-- settings changer -->
        <div class="skins-nav">
            <a href="form-showcase.php#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default</span>
            </a>
            <a href="form-showcase.php#" class="skin second_nav" data-file="../detail/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>
        <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid">
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-dashboard"></i> Registration</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i> <a href="index.php">Dashboard</a> <span class="divider">></span</li>
                  <li> Form Type 1</li>
                </ul>
            </div>

            <!-- end upper main stats -->
            <div class="alert alert-error hide">
                  <button type="button" class="close">&times;</button>
                  <strong>Required!</strong> Please Check Required Field
                </div>
        <div class="container-fluid">

            <div id="pad-wrapper" class="form-page">
                <div class="row-fluid form-wrapper">
                <form id="form" name="form" method="post" action="">
                    <div class="span6 column">
                            <div class="field-box">
                                <label>Name:</label>
                                <input class="span3 inline-input" name="fname" id="fname" placeholder="first name" type="text">
                                <input class="span3 inline-input" name="lname" id="lname" placeholder="last name" type="text">
                            </div>                            
                            <div class="field-box">
                                <label>Company Name:</label>
                                <input class="span4 inline-input" type="text" value="" placeholder="ABC Sdn Bhd" />
                            </div>
                            <div class="field-box checkemail">
                                <label>Email: </label>
                                <input class="span4 inline-input" name="email" id="email" type="text" placeholder="abc@gmail.com" />
                                <span class="email-msg"></span>
                            </div>
                            <div class="field-box">
                                <label class="required">No tel: </label>
                                <input class="span4 inline-input" name="telno" id="telno" type="text"/>
                            </div>
                            <div class="field-box">
                                <label>Date of Birth:</label>
                                <input type="text" id="date" placeholder="DD/MM/YYYY" value="" class="input-large datepicker inline-input" autocomplete="off"/>
                            </div>
                            <div class="field-box">
                                <label>Gender:</label>
                                <div class="span8">
                                    <label class="radio">
                                        <input type="radio" name="gender" id="gender1" value="male" checked>
                                        Male
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="gender" id="gender2" value="female">
                                        Female
                                    </label>
                                </div>                                
                            </div>
                            <div class="field-box">
                                <label>Address:</label>
                                <textarea class="span8" rows="2" style="resize:none;"type="text" ></textarea>
                            </div>
                            <div class="field-box">
                                <label>City:</label>
                                <input class="span4 inline-input" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Postal/ZIP code:</label>
                                <input class="span4 inline-input" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Country:</label>
                                <select class="country-list" style="width:250px" name="country">
                                    <option></option>
                                    <?php
                                        include('../config/config.php');
                                        $sql = "Select * from countries";
                                        $query = $con->query($sql);
                                        $query->execute();
                                        While($r= $query->fetch())
                                        {
                                            echo "<option value=".$r['country_code'].">".$r['country_name']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                                           
                    </div>

                    <!-- right column -->
                    <div class="span6 column pull-right">
                            <div class="field-box">
                                <label>Username:</label>
                                <input class="span6 inline-input" type="text" placeholder="abc123"/>
                            </div>
                            <div class="field-box">
                                <label>Password:</label>
                                <input class="span4 inline-input" type="password" placeholder="password"/>
                                <input class="span4 inline-input" type="password" placeholder="confirm password"/>
                            </div>
                            <div class="field-box">
                                <label>Credit Card Number:</label>
                                <input class="span6" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Expiration:</label>
                                <input style="width:60px;" placeholder="MM" type="text" /> 
                                &nbsp; / &nbsp;
                                <input style="width:85px;" placeholder="YYYY" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Card CVC Number:</label>
                                <input class="span6" type="text" />
                            </div>
                            <style type="text/css">#wysi-wysihtml5-toolbar{display: none;}</style>                                       
                            <div class="field-box">   
                                <label>Comment <a id="wysihtml5option">(show option)</a></label>
                                <div class="wysi-column">
                                    <textarea id="wysi" class="span12 wysihtml5" rows="5"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="span12" align="center">
                        <input type="submit" name="submit" class="btn btn-success span2" value="Submit">
                        <input type="clear" name="clear" class="btn btn-warning span2" value="Clear">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->

	<!-- scripts for this page -->
    <script src="../detail/js/wysihtml5-0.3.0.js"></script>
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="../detail/js/bootstrap.datepicker.js"></script>
    <script src="../detail/js/jquery.uniform.min.js"></script>
    <script src="../detail/js/select2.min.js"></script>
    <script src="../detail/js/jquery.maskedinput.js"></script>
    <script src="../detail/js/theme.js"></script>
    

    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {

            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });

        });

        $(function($){
           $("#date").mask("99/99/9999",{placeholder:"   "});
        });

        // datepicker plugin
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy"
        });
    </script>

    <script>
    
        //validation for required field
        $('#form').submit(function()
        {
            var flag=true;
            if($("#fname").val()=="" || $("#lname").val()=="" || $("#telno").val()==""){
                $(".alert").show();
                flag = false;
            }

            if($("#fname").val()==""){
                $("#fname").css("background-color","#f2dede");
                flag = false;
            }
            if($("#lname").val()==""){
                $("#lname").css("background-color","#f2dede");
                flag = false;
            }
            if($("#telno").val()==""){
                $("#telno").css("background-color","#f2dede");
                flag = false;
            }
            
            if($(".email").val()!=null)
            {
                if(!validateEmail($(".email").val()))
                {                  
                    flag=false;
                }
                else
                    flag=true;
            }

            return flag;
        });

        $("#wysihtml5option").click(function(){
            $(this).text($(this).text() == '(show option)' ? '(hide option)' : '(show option)'); 
            $("#wysi-wysihtml5-toolbar").toggle("fast");

          });
    </script>

    <script type="text/JavaScript"> // script for mobile
        window.onLoad = detect();
        function detect() 
        {
            var uagent = navigator.userAgent.toLowerCase();
            var mobile = false;
            var search_strings = [
                "iphone",
                "ipod",
                "ipad",
                "series60",
                "symbian",
                "android",
                "windows ce",
                "windows7phone",
                "w7p",
                "blackberry",
                "palm",
                "bb10",
                "nexus7"
            ];
            for (i in search_strings) {
                if (uagent.search(search_strings[i]) > -1)
                { 
                    $('.country-list').removeClass('country-list').addClass('ui-elements');
                    mobile = true;
                }
            }

            if(mobile == false){
                $('.country-list').removeClass('ui-elements').addClass('select2');
            }
            
        }
    </script>

    <script type="text/javascript">

        // Function that validates email address through a regular expression.
        function validateEmail(email) {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if( !emailReg.test( email ) ) {
            return false;
          } else {
            return true;
          }
        }

        $(document).ready(function(){
        $("#email").change(function() {
                jQuery(".email-msg").empty();
                var usr = jQuery("#email").val();
                    
                    if(usr != null)
                    {
                        if(validateEmail(usr))
                        {    
                            $(".email-msg").html('<img src="../detail/img/loader.gif" align="absmiddle">&nbsp;Checking availability...');
                            jQuery.ajax({  
                               type: "POST",  
                               url: "check.php" ,
                               data: "email="+usr,  
                               success: function(data){
                                        if(data == 0)
                                        { 
                                            $('.email-msg').html('<font color="Green"><i class="fa fa-check"></i> Available </font>');
                                            $('.checkemail').addClass('success');
                                            $('.checkemail').removeClass('error');
                                            
                                        }  
                                        else
                                        {  
                                            $('.email-msg').html('<font color="red"> <STRONG>'+usr+'</STRONG> already use.</font>');
                                            $('.checkemail').addClass('error');
                                            $('.checkemail').removeClass('success');
                                            $('#email').val('');
                                        }  

                                    }
                            });
                        }
                        else
                        {
                            $('.email-msg').html('<font color="red"> Email invalid!</font>');
                            $('.checkemail').addClass('error');
                            $('.checkemail').removeClass('success');
                        }

                    }
                    else
                    {
                        $('.checkemail').removeClass('success');
                        $('.checkemail').removeClass('error');
                    } 
            
             });

        });

    </SCRIPT>

    
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
</html>