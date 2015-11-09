<?php 
    require "core/init.php";
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Personal Info</title>
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
    <link href="../detail/lib/uniform.default.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/select2.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet">
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/personal-info.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../detail/new-user.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../detail/user-profile.css" type="text/css" media="screen" />

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
                <img src="../images/ajax-loader.gif"/>
            </div>
        </div>
    </div>

    <?php
    
    
     
    $assign = Crytion::decryt64(Session::get('assign'));
    $user_id = Crytion::decryt64(Session::get('user_id'));
    
    if(Input::exists() && Input::get('img') =='upd'){
            $em = new Employee();
            $img = new Image();
            $img->checkimage('image','update','tbl_employee',array('user_id','=',$user_id));
            try{
                $em->updateEm($user_id,array(
                    'image' => $img->getimage(),
                    'image_name' => $img->getimagename(),
                    'image_type' => $img->getimagetype(),
                    'date_update' => date('d-m-Y H:i:s')
                ));
            }
            catch(Exception $e){
                die($e->getMessage());
            }
            
            if(!$em->passed()){
                Session::put('form-error',$em->errors());
            }
            else
                Session::put('form-success','Your Account successfully updated!');
    }
    
    if(Input::exists() && Input::get('edit') == 1){
        
        $validate = new Validate();
        $validation = $validate->check($_POST,array(
            'fname' => array(
                'name' => 'Full Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'lname' => array(
                'name' => 'Last Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'tel' => array(
                'name' => 'Phone Number',
                'required' => true,
                'min'=>10,
            ),
            'email' => array(
                'name' => 'Email',
            ),
            'address' => array(
                'name' => 'Street Address',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'city' => array(
                'name' => 'City',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'state' => array(
                'name' => 'State',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'postcode' => array(
                'name' => 'PostCode',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'country' => array(
                'name' => 'Country',
                'required' => true,
            ),
            'job' => array(
                'name' => 'Job',
                'required' => true,
            ),
            'pwd' => array(
                'name' => 'New Password',
                'min' =>8,
                'max' => 50
            ),
            'rpassword' => array(
                'name' => 'Confirm password',
                'matches' => 'pwd'
            ),
            'cpwd' => array(
                'name' => 'Current Password',
                'required' => true,
                'samepassword' => 'tbl_employee'
            ),
            'comment' => array(
                'name' => 'Comment',
                'max' => 100,
            )
            
        ));
        
        if($validation->passed()){
            
            $em = new Employee();
            $pwd = $em->updatepass($user_id,'pwd');
                                                                
            try{
                $em->updateEm($user_id,array(
                    'fname' => Input::get('fname'),
                    'lname' => Input::get('lname'),
                    'icnumber' => Input::get('icnumber'),
                    'dob' => Input::get('dob'),
                    'email' => Input::get('email'),
                    'tel' => Input::get('tel'),
                    'gender' => Input::get('gender'),
                    'pwd' => $pwd,
                    'notes' => Input::get('comment'),
                    'salary' => Input::get('salary'),
                    'date_update' => date('d-m-Y H:i:s'),
                    'job_id' => Input::get('job')
                ));
                
                $em->updateEmAddress($user_id,array(
                    'add_street' => Input::get('address'),
                    'add_city' => Input::get('city'),
                    'add_state' => Input::get('state'),
                    'add_post' => Input::get('postcode'),
                    'country_id' => Input::get('country')
                ));
                
                
                if($em->passed()){
                    Session::put('form-success','Your Account successfully updated!');
                }
                else{
                    Session::put('form-error','There is a problem updating an account');
                }
                
            }
            catch(Exception $e){
                die($e->getMessage());
            }
            
        }else{
            
            Session::put('form-error',$validation->errors());
        }
    }
    
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
            <li  class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div> 
                <a href="personal-info.php">
                    <i class="fa fa-cog"></i>
                    <span>My Info</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->

	<!-- main container .wide-content is used for this layout without sidebar :)  -->
    <div class="content">
        <div id="main-stats">
            <div class="row-fluid">
                <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-th"></i> My Profile</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li>My Profile</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>
              
        <div class="container-fluid">
            <div class="row-fluid header">

            </div>
            <div class="settings-wrapper user-profile new-user" id="pad-wrapper">
                <?php
                    $address = DB::getInstance()->query("Select * from tbl_add where person_id = ?",array($user->user_id));
                    $addr = $address->result();
                    
                ?>
                <!-- avatar column -->
                <div class="span3 avatar-box">
                    <form name="update-img" method="post" action="personal-info.php?img=upd" enctype="multipart/form-data">
                            <div class="personal-image">
                                <img src="../getimg.php?id=<?php echo Crytion::encryt64(Crytion::encryt64($user->user_id)) ?>&jb=<?php echo Crytion::encryt64(Crytion::encryt64("employee"))?>" class=" dis-img avatar img-circle">
                                <p>Upload different photo...</p>
                                <input type="file" name="image" class="img-upload" id="img-upload"/>
                                <button type="submit" name="submit" class="btn btn-flat" >Upload</button>
                            </div>
                    </form>
                </div>
                

                <!-- edit form column -->
                <div class="span8 personal-info form-wrapper">
                    <?php
                    if(Input::get('edit')==1){
                        echo '<a class="btn-flat icon pull-right delete-user" data-toggle="modal" data-toggle="tooltip" title="Delete user" data-placement="top" href="#deleteuser">
                              <i class="icon-trash"></i>
                              </a>';
                        echo '<a class="btn btn-flat icon large pull-right edit" href="personal-info.php">
                              Done edit
                              </a>';
                        if(Session::exists('form-error')){                 
                            echo '<div class="alert alert-danger">';
                            $x=0;
                            $set='';
                            foreach(Session::get('form-error') as $error)
                            {
                                echo $set .= $error;
                                if($x<count(Session::get('form-error')))
                                    $set .=" | ";
                            }
                            echo '</div>';
                            Session::delete('form-error');                        
                        }
                        else if(Session::exists('form-success')){
                            echo '<div class="alert alert-success">';
                            echo '<a class="close" data-dismiss="alert" href="#">&times;</a>';
                            echo Session::get('form-success');
                            echo '</div>';
                            Session::delete('form-success');                    
                        }                                        
                        ?>                                        
                    <h5 class="personal-title ">Personal info</h5>
                        <form id="new_user_form" class="new_user_form inline-input" action="personal-info.php?edit=1" method="post">
                            <div class="field-box span8">
                               <label >Name:</label>
                               <input class="span2" name="fname" id="fname" placeholder="first name" type="text" value="<?php echo $user->fname ?>"/>
                               <input class="span2" name="lname" id="lname" placeholder="last name" type="text" value="<?php echo $user->lname ?>"/>
                            </div>                            
                            <div class="field-box span8">
                                <label>Identity Number</label>
                                <input class="span2 " type="text" id="ic" name="icnumber" placeholder="XXXXXX-XX-XXXX" value="<?php echo $user->icnumber ?>"/>
                                <span class="ic-msg"></span>
                            </div>
                            <div class="field-box span8 checkemail">
                                <label>Email: </label>
                                <input class="span2 " name="email" id="email" type="text" placeholder="abc@gmail.com" value="<?php echo $user->email; ?>"/>
                                <span class="email-msg"></span>
                            </div>
                            <div class="field-box span8">
                                <label >No tel: </label>
                                <input class="span2 " name="tel" id="telno" type="text" value="<?php echo $user->tel ?>"/>
                                <span class="tel-msg"></span>
                            </div>
                            <div class="field-box span8">
                                <label>Date of Birth:</label>
                                <input type="text" id="date" name="dob" placeholder="DD/MM/YYYY" value="<?php echo $user->dob ?>" class="input-large datepicker span2" autocomplete="off"/>
                            </div>
                            <div class="field-box span8">
                                <label>Gender:</label>
                                <div class="span4">
                                    <label class="radio">
                                    <input type="radio" name="gender" id="gender1" value="male" <?php if ($user->gender == "male") echo "checked"; ?>>
                                        Male
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="gender" id="gender2" value="female" <?php if ($user->gender == "female") echo "checked"; ?>>
                                        Female
                                    </label>
                                </div>                                
                            </div>
                            <div class="span8 field-box">
                                <label >Address:</label>
                                    <div class="address-fields">
                                    <input class="span6" type="text" name="address" placeholder="Street address" value="<?php if(!empty($addr->add_street)) echo $addr->add_street ?>">
                                    <input class="span1 small" type="text" name="city" placeholder="City" value="<?php if(!empty($addr->add_city))echo $addr->add_city ?>">
                                    <input class="span1 small" type="text" name="state" placeholder="State" value="<?php if(!empty($addr->add_state)) echo $addr->add_state ?>">
                                    <input class="span1 small last" type="text" name="postcode" placeholder="Postal Code" value="<?php if(!empty($addr->add_post)) echo $addr->add_post ?>">
                                    </div>
                            </div>
                            <div class="field-box span8">
                                <label >Country:</label>
                                    <select class="country-list" style="width:250px" name="country">
                                    <option></option>
                                    <?php
                                        include('../config/config.php');
                                        $sql = "Select * from tbl_countries";
                                        $query = $con->query($sql);
                                        $query->execute();
                                        While($r= $query->fetch())
                                        {
                                            if($r['country_code'] == $addr->country_id)
                                                echo "<option selected value=".$r['country_code'].">".$r['country_name']."</option>";
                                            else
                                                echo "<option value=".$r['country_code'].">".$r['country_name']."</option>";
                                        }
        
                                            $con=null;
                                    ?>
                                    </select>
                            </div>
                            <div class="field-box span8">
                                <label >Job As</label>
                                <select name="job" class="job" style="width: 250px;">
                                    <option></option>
                                    <option value="AD" <?php if($user->job_id == "AD") echo "Selected"?>>Admin</option>
                                    <option value="SC" <?php if($user->job_id == "SC") echo "Selected"?>>Staff Cashier</option>
                                    <option value="SI" <?php if($user->job_id == "SI") echo "Selected"?>>Staff Inventory</option>
                                    <option value="SW" <?php if($user->job_id == "SW") echo "Selected"?>>Staff Worker</option>
                                    <option value="ST" <?php if($user->job_id == "ST") echo "Selected"?>>Staff Training</option>
                                </select>
                            </div>
                            <div class="field-box span8">
                                <label>Salary</label>
                                <input class="span2" name="salary" type="text" placeholder="$2000" value="<?php echo $user->salary ?>"/>
                            </div>
                                        
                            <div class="field-box span8">
                                <label >Change Password:</label>
                                <input class="span2 " name="pwd" id="pass" type="password" placeholder="new password"/>
                                <input class="span2 " name="rpassword" id="rpass" type="password" placeholder="confirm password"/>
                            </div>
                            <div class="span8 field-box textarea">
                                <label>Notes:</label>
                                <textarea style="width:60%;" id="comment" name="comment"></textarea>
                                <span class="charactersleft">Field limited to 100 characters</span>
                            </div>  
                            <div class="field-box span8">
                                <label >Password:</label>
                                <input class="span4" name="cpwd" id="cpass" type="password" placeholder="Enter current password before submit"/>
                                <input type="hidden" name="phidden" value="<?php echo $user->pwd?>" />
                            </div>     
                            <div class="span6 actions">
                                <input type="submit" class="btn-glow primary" value="Save Changes">
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset">
                            </div>                                        
                    </form>
                    <?php
                        }
                        else
                        {
                            echo '<a class="btn-flat icon pull-right delete-user" data-toggle="modal" data-toggle="tooltip" title="Delete user" data-placement="top" href="#deleteuser">
                                  <i class="icon-trash"></i>
                                  </a>';
                            echo '<a class="btn btn-flat icon large pull-right edit" href="personal-info.php?id='.Crytion::encryt64(Crytion::encryt64($user->user_id)).'&edit=1">
                                  Edit this person
                                  </a>';
                    ?>
                            <div class="span7 section">
                            <h6>Recent Activity</h6>
                            <br>
                            <!-- recent orders table -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span2">
                                             Transaction
                                        </th>
                                        <th class="span3">
                                            <span class="line"></span>
                                            Date
                                        </th>
                                        <th class="span3">
                                            <span class="line"></span>
                                            Items
                                        </th>
                                        <th class="span3">
                                            <span class="line"></span>
                                            Total amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            </div>
                            <!-- new comment form -->
                            <div class="span7 section comment">
                                <h6>Add a quick note</h6>
                                <p>Add a note about this user to keep a history of your interactions.</p>
                                <textarea class="span7" id="comment" name="comment"></textarea>
                                <span class="charactersleft">Field limited to 100 characters</span>
                                <div class="span7 actions">
                                    <input type="submit" class="btn-glow primary" value="Update">
                                    <span>OR</span>
                                    <input type="reset" value="Cancel" class="reset">
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <script src="../detail/js/bootstrap.datepicker.js"></script>
    <script src="../detail/js/jquery.uniform.min.js"></script>
    <script src="../detail/js/select2.min.js"></script>
    <script src="../detail/js/jquery.maskedinput.js"></script>
    <script src="../detail/js/theme.js"></script>
    
    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
            $('#menu-toggler2').click();
        });
    </script>
    
    <script type="text/javascript">

        $(function () {

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select A Country"
            });
            
            $(".job").select2({
                placeholder: "Select A Job"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

        });

        $(function($){
           $("#exp").mask("99/99",{placeholder:" "});
           $("#ic").mask("999999-99-9999",{placeholder:" "});
        });

        // datepicker plugin
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy"
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
                    $('.job').removeClass('job').addClass('ui-elements');
                    mobile = true;
                }
            }

            if(mobile == false){
                $('.country-list').removeClass('ui-elements').addClass('select2');
                $('.job').removeClass('ui-elements').addClass('job');
            }
            
        }
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
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