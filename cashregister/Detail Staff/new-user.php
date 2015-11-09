<?php 
    require "core/init.php";
    
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<html>
<head>
	<title>Staff - New Customer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="../detail/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../detail/bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <link href="../detail/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet">

    <!-- libraries -->
    <link href="../detail/lib/uniform.default.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/select2.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
    
    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">
    <!--<link rel="stylesheet" type="text/css" href="../detail/skins/dark.css">-->

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/form-showcase.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../detail/new-user.css" type="text/css" media="screen" />

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
    
    if(Input::exists()){
        
        $validate = new Validate();
        $validation = $validate->check($_POST,array(
            'cust_fname' => array(
                'name' => 'Full Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'cust_lname' => array(
                'name' => 'Last Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'cust_tel' => array(
                'name' => 'Phone Number',
                'required' => true,
                'min'=>10,
                'unique' => 'tbl_cust'
            ),
            'cust_email' => array(
                'name' => 'Email',
                'unique' => 'tbl_cust'
            ),
            'address' => array(
                'name' => 'Street Address',
                'min' => 2,
                'max' => 50
            ),
            'city' => array(
                'name' => 'City',
                'min' => 2,
                'max' => 50
            ),
            'state' => array(
                'name' => 'State',
                'min' => 2,
                'max' => 50
            ),
            'postcode' => array(
                'name' => 'PostCode',
                'min' => 2,
                'max' => 50
            ),
            'country' => array(
                'name' => 'Country',
                'required' => true,
            ),
            'cust_pass' => array(
                'name' => 'Password',
                'required' => true,
                'min' => 8,
                'max' => 50
            ),
            'cust_uname' => array(
                'name' => 'Username',
                'min' => 8,
                'max' => 50
            ),
            'rpassword' => array(
                'name' => 'Retype password',
                'required' => true,
                'matches' => 'cust_pass'
            ),
            'cust_comment' => array(
                'name' => 'Comment',
                'max' => 100,
            )
            
        ));
        
        if($validation->passed()){
            
            $user = new Customer();
            $address = new Address();
            $img = new Image();
            $img->checkimage('image','insert');
            $id = $user->provideID('customer');
            
            try{
                $user->addCustomer(array(
                    'cust_id' => $id,
                    'cust_fname' => Input::get('cust_fname'),
                    'cust_lname' => Input::get('cust_lname'),
                    'cust_dob' => Input::get('cust_dob'),
                    'image' => $img->getimage(),
                    'image_name' => $img->getimagename(),
                    'image_type' => $img->getimagetype(),
                    'cust_email' => Input::get('cust_email'),
                    'cust_tel' => Input::get('cust_tel'),
                    'cust_gender' => Input::get('cust_gender'),
                    'cust_uname' => Input::get('cust_uname'),
                    'cust_pass' => Crytion::generatehash(Input::get('cust_pass')),
                    'cust_comment' => Input::get('comment'),
                    'date_reg' => date('d-m-Y H:i:s')
                ));
                $user->passed();
                
                $address->addAddress(array(
                    'person_id' => $id,
                    'add_street' => Input::get('address'),
                    'add_city' => Input::get('city'),
                    'add_state' => Input::get('state'),
                    'add_post' => Input::get('postcode'),
                    'country_id' => Input::get('country')
                ));
                
                $address->passed();
                
                
                
            }
            catch(Exception $e){
                die($e->getMessage());
            }
            
        }else{
            
            Session::put('form-error',$validation->errors());
        }
    }
    
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
            <li >
                <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li>
                <a href="sales.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sales</span>
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
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-users"></i> Customer Registration</h2>

                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li><a href="user-list.php"> Customer List</a><span class="divider">></span></li>
                  <li> New Customer</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>Create a new customer</h3>
                    <button id="optionform" class="btn btn-flat icon" style="margin-left:10px;">(Show Only Important)</button>
                </div>

                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        
                            <?php
                            
                                if(Session::exists('form-error'))
                                {
                                    echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                    echo '<div id="form_error" class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-exclamation-triangle"></i> ';
                                    $x=1;
                                    $set='';                                                
                                    foreach(Session::get('form-error') as $error)
                                    {
                                        $set .= $error;
                                        if($x<count(Session::get('form-error')))
                                            $set .=" | ";
                                                    
                                        $x=$x+1;
                                    }  
                                    echo $set;   
                                    echo '</div></div>';
                                    
                                    Session::delete('form-error');
                                }
                                else
                                if(Session::exists('form-success')){
                                    
                                    if(Input::get('return_url')){
                                        $return_url = Crytion::decryt64(Input::get('return_url'));
                                        Session::put('select_cust',$id);
                                        echo "<script>window.setTimeout(function(){window.location = '".$return_url."'},1);</script>";
                                    }
                                    else
                                    {
                                        echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                        echo '<div id="form_success" class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a> ';
                                        echo '<i class="fa fa-check"></i><span>'.Session::get('form-success').'</span><br/> Redirect in 3 seconds';    
                                        echo '</div></div>';
                                        echo "<script>window.setTimeout(function(){window.location = 'user-list.php'},3000);</script>";
                                    } 
                                    Session::delete('form-success');
                                }  
                            ?>
                      
                        <div class="container">
                            <form id="new_user_form" class="new_user_form inline-input" action="new-user.php" method="post" enctype='multipart/form-data'>
                                <div class="box-image" style="margin-bottom:20px;">
                                    <div style="border:1px solid #000;width:150px;height:150px;margin:0 auto;" >
                                        <img src="../images/default_pic.jpg" class="dis-img" style="width:150px;height:150px;"/>
                                    </div>
                                    <div class="dis-img" style="text-align:center;width:150px;margin:0 auto;">
                                        <span class="btn btn-default btn-file" style="margin-top:10px">
                                            Browse <input type="file" name="image" class="img-upload" id="img-upload"/>
                                        </span>
                                    </div> 

                                </div>
                                <hr/>
                                <div class="field-box span12 r">
                                    <label class="required">Name:</label>
                                    <input class="span4 " name="cust_fname" id="fname" placeholder="first name" type="text" value="<?php echo Input::get('fname'); ?>"/>
                                    <input class="span4 " name="cust_lname" id="lname" placeholder="last name" type="text" value="<?php echo Input::get('lname'); ?>"/>
                                </div>                            
                                <div class="field-box checkemail">
                                    <label>Email: </label>
                                    <input class="span4 " name="cust_email" id="email" type="text" placeholder="abc@gmail.com" value="<?php echo Input::get('email'); ?>"/>
                                    <span class="email-msg"></span>
                                </div>
                                <div class="field-box span12 r">
                                    <label class="required">No tel: </label>
                                    <input class="span4 " name="cust_tel" id="telno" type="text" value="<?php echo Input::get('telno'); ?>"/>
                                    <span class="tel-msg"></span>
                                </div>
                                <div class="field-box span12">
                                    <label>Date of Birth:</label>
                                    <input type="text" id="date" name="cust_dob" placeholder="DD/MM/YYYY" value="<?php echo Input::get('dob'); ?>" class="input-large datepicker span4" autocomplete="off"/>
                                </div>
                                <div class="field-box span12">
                                    <label>Gender:</label>
                                    <div class="span8">
                                        <label class="radio">
                                            <input type="radio" name="cust_gender" id="gender1" value="male">
                                            Male
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="cust_gender" id="gender2" value="female">
                                            Female
                                        </label>
                                    </div>                                
                                </div>
                                <div class="span12 field-box">
                                    <label>Address:</label>
                                    <div class="address-fields">
                                        <input class="span12" type="text" name="address" placeholder="Street address" value="<?php echo Input::get('address'); ?>">
                                        <input class="span12 small" type="text" name="city" placeholder="City" value="<?php echo Input::get('city'); ?>">
                                        <input class="span12 small" type="text" name="state" placeholder="State" value="<?php echo Input::get('state'); ?>">
                                        <input class="span12 small last" type="text" name="postcode" placeholder="Postal Code" value="<?php echo Input::get('postcode'); ?>">
                                    </div>
                                </div>
                                <div class="field-box span12">
                                    <label>Country:</label>
                                    <select class="country-list" style="width:250px" name="country">
                                        <option></option>
                                        <?php
                                            include('../config/config.php');
                                            $sql = "Select * from tbl_countries";
                                            $query = $con->query($sql);
                                            $query->execute();
                                            While($r= $query->fetch())
                                            {
                                                if($r['country_code'] == "MY")
                                                    echo "<option selected value=".$r['country_code'].">".$r['country_name']."</option>";
                                                else
                                                    echo "<option value=".$r['country_code'].">".$r['country_name']."</option>";
                                            }

                                            $con=null;
                                        ?>
                                    </select>
                                </div>
                                <div class="field-box span12">
                                    <label>Username:</label>
                                    <input class="span4" name="cust_uname" id="username" type="text" placeholder="abc123"/>
                                    <span class="uname-msg"></span>
                                </div>
                                <div class="field-box span12 r">
                                    <label class="required">Password:</label>
                                    <input class="span4 " name="cust_pass" id="pass" type="password" placeholder="password"/>
                                    <input class="span4 " name="rpassword" id="rpass" type="password" placeholder="confirm password"/>
                                </div>
                                <div class="span12 field-box textarea">
                                    <label>Notes:</label>
                                    <textarea class="span9" id="comment" name="cust_comment"></textarea>
                                    <span class="charactersleft">Field limited to 100 characters</span>
                                </div>
                                <input type="hidden" name="return_url" value="<?php echo Input::get('url'); ?>">
                                <div class="span11 actions">
                                    <input type="submit" class="btn-glow primary" value="Create user">
                                    <span>OR</span>
                                    <input type="reset" value="Cancel" class="reset">
                                </div>
                            </form>
                        </div>

                        
                    </div>

                    <!-- side right column -->
                    <div class="span3 form-sidebar pull-right hidden-phone">
                        <div class="btn-group toggle-inputs hidden-tablet">
                            <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                            <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                        </div>
                        <div class="alert alert-info hidden-tablet">
                        	<a class="close" data-dismiss="alert" href="#">&times;</a>
                            <i class="fa fa-lightbulb-o pull-left"></i>
                            Click above if you not familiar with the form interface
                        </div>  

                        <p>Add multiple customers at once?</p>
                        <p>Choose one of the following file types:</p>
                        <ul>
                            <li><a href="#importmodal" role="button" data-toggle="modal">Import from a CSV file</a></li>
                            <li><a href="#importmodal" role="button" data-toggle="modal">Import from an Excel file</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->

    <div id="importmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Import CRV or Excel File</h3>
	  </div>
	  <div class="modal-body">
	    <p><label>Import File :</label><input type="file" name="import-file" id="import-file" /></p>
	  </div>
	  <div class="modal-footer">
	  	<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
	    <button class="btn btn-success" id="preview-file" disabled="disabled">Preview</button>
	    <button class="btn btn-success" id="confirm-file" disabled="disabled">Import Now</button>
	  </div>
	</div>


	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/theme.js"></script>
    <script src="../detail/js/bootstrap.datepicker.js"></script>
    <script src="../detail/js/jquery.uniform.min.js"></script>
    <script src="../detail/js/select2.min.js"></script>
    <script src="../detail/js/jquery.maskedinput.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            $(".loader").hide();
        })
    </script>

    <script type="text/javascript">
    	$(function () {
    		$("#optionform").click(function(){
    			$(".field-box").not(".r").toggle();
    		});
    	});

        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.new_user_form");

            $buttons.click(function () {
                var mode = $(this).data("input");
                $buttons.removeClass("active");
                $(this).addClass("active");

                if (mode === "inline") {
                    $form.addClass("inline-input");
                } else {
                    $form.removeClass("inline-input");
                }
            });
        });

        $(function () {

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a Country"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

        });

        // datepicker plugin
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy"
        });
    </script>

    <script>
    	
    	$(document).ready(function(){
	    	$("#rpass").change(function(){
	    		if($("#pass").val() != $("#rpass").val())
	    		{
	    			alert("Password not match");
	    			$("#rpass").css("background-color","#f2dede");
	    		}
	    		else
	    		if($("#pass").val() == $("#rpass").val())
	    			$("#rpass").css("background-color","none");

		    	});
		    });

       
        
        $('#comment').keyup(function(){
            $max=100;
            $count = $('#comment').val().length;
            $count = $max-$count;
            if($count == 100){
                $('.charactersleft').html('Field limited to 100 characters');
            }
            else{
                if($count<0)
                    $('.charactersleft').html($count+" characters exceed. Field limited to "+$max+" characters");
                else
                    $('.charactersleft').html($count+" characters remaining. Field limited to "+$max+" characters");
            }
            
        })
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
	                $(".email-msg").empty();
	                var usr = $("#email").val(); 
	                    if(usr != null){
	                        if(validateEmail(usr)){    
	                            $(".email-msg").html('<img src="../detail/img/loader.gif" align="absmiddle">&nbsp;Checking availability...');
	                            $.ajax({  
	                               type: "POST",  
	                               url: "custcheck.php" ,
	                               data: "email="+usr,  
	                               success: function(data){
	                                        if(data == 0){ 
	                                            $('.email-msg').html('<font color="Green"><i class="fa fa-check"></i> Available </font>'); 
	                                        }  
	                                        else{  
	                                            $('.email-msg').html('<font color="red"> <STRONG>'+usr+'</STRONG> already use.</font>');
	                                            $('#email').val('');
	                                        }  

	                                    }
	                            });
	                        }
	                        else{
	                            $('.email-msg').html('<font color="red"> Email invalid!</font>');
	                        }
	                    } 
	             });

				$("#telno").change(function() {
	                $(".tel-msg").empty();
	                var usr = $("#telno").val();
	                    if(usr != null){
	                            $(".tel-msg").html('<img src="../detail/img/loader.gif" align="absmiddle">&nbsp;Checking availability...');
	                            $.ajax({  
	                               type: "POST",  
	                               url: "custcheck.php" ,
	                               data: "tel="+usr,  
	                               success: function(data){
	                                        if(data == 0){ 
	                                            $('.tel-msg').html('<font color="Green"><i class="fa fa-check"></i> Available </font>');	                                            
	                                        }  
	                                        else{  
	                                            $('.tel-msg').html('<font color="red"> <STRONG>'+usr+'</STRONG> already use.</font>');
	                                            $('#telno').val('');
	                                        }  
	                                    }
	                            });
	                    }
	             });
                 
                 $("#username").change(function() {
	                $(".uname-msg").empty();
	                var usr = $("#username").val();
	                    if(usr != null){
	                            $(".uname-msg").html('<img src="../detail/img/loader.gif" align="absmiddle">&nbsp;Checking availability...');
	                            $.ajax({  
	                               type: "POST",  
	                               url: "custcheck.php" ,
	                               data: "uname="+usr,  
	                               success: function(data){
	                                        if(data == 0){ 
	                                            $('.uname-msg').html('<font color="Green"><i class="fa fa-check"></i> Available </font>');	                                            
	                                        }  
	                                        else{  
	                                            $('.uname-msg').html('<font color="red"> <STRONG>'+usr+'</STRONG> already use.</font>');
	                                            $('#username').val('');
	                                        }  
	                                    }
	                            });
	                    }
	             });
        });

    </SCRIPT>

    <script type="text/javascript">
        $(document).ready(function () {
            //for file validation
            $("#import-file").change(function () {
                // Get the file upload control file extension
                var ext = $(this).val().split('.').pop().toLowerCase();
                // Create array with the files extensions to upload
                var fileListToUpload = new Array('csv','xls','xlsx');
                //Check the file extension is in the array.               
                var isValidFile = $.inArray(ext, fileListToUpload); 
                // isValidFile gets the value -1 if the file extension is not in the list.  
                if (isValidFile == -1) {
                    alert('Please select a valid file of type csv/xls/xlsx.');
                   $(this).replaceWith($(this).val('').clone(true));
                   $("#confirm-file").attr("disabled",true);
                   $("#preview-file").attr("disabled",true);
                }
                else {
                    // Restrict the file size to 10 MB.
                    if ($(this).get(0).files[0].size > (1024 * 1024 * 10)) {
                        ShowMessage('File size should not exceed 10MB.', 'error');
                        $(this).replaceWith($(this).val('').clone(true));
                        $("#confirm-file").attr("disabled",true);
                        $("#preview-file").attr("disabled",true);
                    }
                    else {
                        $("#confirm-file").attr("disabled",false);
                        $("#preview-file").attr("disabled",false);
                    }
                }
            });

            //for image validation

            $("#img-upload").change(function () {
                // Get the file upload control file extension
                var ext = $(this).val().split('.').pop().toLowerCase();
                // Create array with the files extensions to upload
                var fileListToUpload = new Array('jpg','png','gif');
                //Check the file extension is in the array.               
                var isValidFile = $.inArray(ext, fileListToUpload); 
                // isValidFile gets the value -1 if the file extension is not in the list.  
                if (isValidFile == -1) {
                    alert('Please select a valid image of type jpg/png/gif');
                   $(this).replaceWith($(this).val('').clone(true));
                }
                else {
                    // Restrict the file size to 10 MB.
                    if ($(this).get(0).files[0].size > (1024 * 1024 * 10)) {
                        ShowMessage('File size should not exceed 10MB.', 'error');
                        $(this).replaceWith($(this).val('').clone(true));
                    }
                    else
                    {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('.dis-img').attr('src', e.target.result);
                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                    }
                }
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