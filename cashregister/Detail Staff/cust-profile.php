<?php require "core/init.php";
    
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::exists('current_url',$current_url);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff - Customer Profile</title>
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
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../detail/lib/uniform.default.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/select2.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet">
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/new-user.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../detail/user-profile.css" type="text/css" media="screen" />
    
    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css"> 

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
            'ccust_pass' => array(
                'name' => 'Current Password',
                'required' => true,
                'samepassword' => 'tbl_cust'
            ),
            'comment' => array(
                'name' => 'Comment',
                'max' => 100,
            )
            
        ));
        
        if($validation->passed()){
            
            $id = Crytion::decryt64(Crytion::decryt64(Input::get('id')));
            $user = new Customer();
            $address= new Address();
            $img = new Image();
            $img->checkimage('image','update','tbl_cust',array('cust_id','=',$id));
            $pwd = $user->updatepass($id,'pwd');
                                                          
            try{
                $user->updatecust($id,array(
                    'cust_fname' => Input::get('fname'),
                    'cust_lname' => Input::get('lname'),
                    'cust_dob' => Input::get('dob'),
                    'image' => $img->getimage(),
                    'image_name' => $img->getimagename(),
                    'image_type' => $img->getimagetype(),
                    'cust_email' => Input::get('email'),
                    'cust_tel' => Input::get('tel'),
                    'cust_gender' => Input::get('gender'),
                    'cust_pass' => $pwd,
                    'cust_comment' => Input::get('comment'),
                    'date_update' => date('d-m-Y H:i:s')
                ));
                $user->passed();
                
                $address->setAddress($id,array(
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

                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li><a href="user-list.php"> Customer List</a><span class="divider">></span></li>
                  <li> Edit Customer</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>

        <div class="container-fluid">
            <div id="pad-wrapper" class="user-profile new-user" >
            <?php
                if(Input::get('del')==1){
                    $delete = new Customer();
                    $delete->deletecustomer(Crytion::decryt64(Crytion::decryt64((Input::get('id')))));
                                                       
                    if($delete->valid()){
                        echo "<script>alert('Delete Successful');</script>";
                        echo "<script>window.setTimeout(function(){window.location = 'user-list.php'},1000);</script>";
                    }
                }
                if(Input::get('id'))
                {
                    $id = Crytion::decryt64(Crytion::decryt64((Input::get('id'))));

                    $user = DB::getInstance()->query("Select * from tbl_cust where cust_id=?",array($id));
                    
                    if(!$user->error() && $user->count()==1 )
                    {
                        $result = $user->result();
                        $address = DB::getInstance()->get('tbl_add',array("person_id","=",$result->cust_id));
                        $addr = $address->result();

                ?>
                <!-- delete modal -->
                <div id="deleteuser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 >Delete User</h3> 
                      </div>
                      <div class="modal-body">
                        <p><strong>Delete This Data Will Never Be Revert back.Are you Sure?</strong></p>
                      </div>
                      <div class="modal-footer">
                        <a class="btn" data-dismiss="modal" aria-hidden="true">Cancel</a>
                        <a class="btn btn-danger" href="cust-profile.php?id=<?php echo Crytion::encryt64(Crytion::encryt64($id)) ?>&del=1">Confirm</a>
                </div>
                </div> 
                <!-- header -->               
                <div class="row-fluid header">
                    <div class="span8">
                        <img src="../getimg.php?id=<?php echo Crytion::encryt64(Crytion::encryt64($result->cust_id)) ?>&jb=<?php echo Crytion::encryt64(Crytion::encryt64("cust"))?>" class="avatar img-circle">
                        <h3 class="name"><?php echo $result->cust_fname ?> <?php echo $result->cust_lname ?></h3>
                        <span class="area">Member since <?php echo $result->date_reg ?></span>
                    </div>
                    <a class="btn-flat icon pull-right delete-user" data-toggle="modal" data-toggle="tooltip" title="Delete user" data-placement="top" href="#deleteuser">
                        <i class="icon-trash"></i>
                    </a>
                    
                    <?php 
                    if(Input::get('edit')==1)
                    {
                        echo '<a class="btn btn-flat icon large pull-right edit" href="cust-profile.php?id='.Crytion::encryt64(Crytion::encryt64($id)).'">
                        Done edit
                        </a>';
                    }
                    else
                        echo '<a class="btn btn-flat icon large pull-right edit" href="cust-profile.php?id='.Crytion::encryt64(Crytion::encryt64($id)).'&edit=1">
                        Edit this person
                        </a>';
                    ?>

                </div>


                <div class="row-fluid profile">
                    <!-- bio, new note & orders column -->
                    <div class="span9 bio">
                        <?php
                            if(Input::get('edit')==1)
                            {
                        ?>
                                <div class="profile-box">
                                <?php
                                
                                    if(Session::exists('form-error'))
                                    {
                                        echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                        echo '<div id="form_error" class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-exclamation-triangle"></i> ';
                                        $x=0;
                                        $set='';
                                        foreach(Session::get('form-error') as $error)
                                        {
                                            echo $set .= $error;
                                            if($x<count(Session::get('form-error')))
                                                $set .=" | ";
                                        }    
                                        echo '</div></div>';
                                        
                                        Session::delete('form-error');
                                    }
                                    else
                                    if(Session::exists('form-success')){
                                        echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                        echo '<div id="form_success" class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-check"></i> ';
                                        echo Session::get('form-success').'<br/> Redirect in 10 seconds';    
                                        echo '</div></div>';
                                        
                                        Session::delete('form-success');
                                        
                                        echo "<script>window.setTimeout(function(){window.location = ''},10000);</script>";
                                    }   
                                ?>
                                    <div class="form-wrapper">
                                    <form id="new_user_form" class="new_user_form inline-input" enctype='multipart/form-data' action="cust-profile.php?id=<?php echo Input::get('id')?>&edit=1" method="post">
                                        <div class="box-image" style="margin-bottom:20px;">
                                            <div style="border:1px solid #000;width:150px;height:150px;margin:0 auto;" >
                                                <img src="../getimg.php?id=<?php echo Crytion::encryt64(Crytion::encryt64($result->cust_id)) ?>&jb=<?php echo Crytion::encryt64(Crytion::encryt64("cust"))?>" class=" dis-img" style="width:150px;height:150px">
                                            
                                            </div>
                                            <div class="dis-img" style="text-align:center;width:150px;margin:0 auto;">
                                                <span class="btn btn-default btn-file" style="margin-top:10px">
                                                    Browse <input type="file" name="image" class="img-upload" id="img-upload"/>
                                                </span>
                                            </div> 
                                        </div>
                                        <hr />
                                        <div class="field-box span12">
                                            <label >Name:</label>
                                            <input class="span4 " name="fname" id="fname" placeholder="first name" type="text" value="<?php echo $result->cust_fname ?>"/>
                                            <input class="span4 " name="lname" id="lname" placeholder="last name" type="text" value="<?php echo $result->cust_lname ?>"/>
                                        </div>                            
                                        <div class="field-box checkemail">
                                            <label>Email: </label>
                                            <input class="span4 " name="email" id="email" type="text" placeholder="abc@gmail.com" value="<?php echo $result->cust_email; ?>"/>
                                            <span class="email-msg"></span>
                                        </div>
                                        <div class="field-box span12">
                                            <label >No tel: </label>
                                            <input class="span4 " name="tel" id="telno" type="text" value="<?php echo $result->cust_tel ?>"/>
                                            <span class="tel-msg"></span>
                                        </div>
                                        <div class="field-box span12">
                                            <label>Date of Birth:</label>
                                            <input type="text" id="date" name="dob" placeholder="DD/MM/YYYY" value="<?php echo $result->cust_dob ?>" class="input-large datepicker span4" autocomplete="off"/>
                                        </div>
                                        <div class="field-box span12">
                                            <label>Gender:</label>
                                            <div class="span8">
                                                <label class="radio">
                                                    <input type="radio" name="gender" id="gender1" value="male" <?php if ($result->cust_gender == "male") echo "checked"; ?>>
                                                    Male
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="gender" id="gender2" value="female" <?php if ($result->cust_gender == "female") echo "checked"; ?>>
                                                    Female
                                                </label>
                                            </div>                                
                                        </div>
                                        <div class="span12 field-box">
                                            <label >Address:</label>
                                            <div class="address-fields">
                                                <input class="span12" type="text" name="address" placeholder="Street address" value="<?php if(!empty($addr->add_street)) echo $addr->add_street ?>">
                                                <input class="span12 small" type="text" name="city" placeholder="City" value="<?php if(!empty($addr->add_city))echo $addr->add_city ?>">
                                                <input class="span12 small" type="text" name="state" placeholder="State" value="<?php if(!empty($addr->add_state)) echo $addr->add_state ?>">
                                                <input class="span12 small last" type="text" name="postcode" placeholder="Postal Code" value="<?php if(!empty($addr->add_post)) echo $addr->add_post ?>">
                                            </div>
                                        </div>
                                        <div class="field-box span12">
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
                                        <div class="field-box span12">
                                            <label >Change Password:</label>
                                            <input class="span4 " name="pwd" id="pass" type="password" placeholder="new password"/>
                                            <input class="span4 " name="rpassword" id="rpass" type="password" placeholder="confirm password"/>
                                        </div>
                                        <div class="span12 field-box textarea">
                                            <label>Notes:</label>
                                            <textarea style="width:70%;" class="span6" id="comment" name="comment"></textarea>
                                            <span class="charactersleft">Field limited to 100 characters</span>
                                        </div>
                                        
                                        <div class="field-box span12">
                                            <label >Password:</label>
                                            <input class="span6" name="ccust_pass" id="ccust_pass" type="password" placeholder="Enter current password before submit"/>
                                        </div>
                                        
                                        <div class="span11 actions">
                                            <input type="submit" class="btn-glow primary" value="Save Changes">
                                            <span>OR</span>
                                            <input type="reset" value="Cancel" class="reset">
                                        </div>                          
                                        
                                    </form>
                                    </div>
                                </div>
                            <?php
                            }
                            else
                            {
                            ?>                    
                        <div class="profile-box">
                            <!-- biography -->
                            <div class="span12 section">
                                <h6>Biography</h6>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority have humour suffered alteration in believable some formhumour , by injected humour, or randomised words which don't look even slightly believable. </p>
                            </div>

                            <h6>Recent Transactions</h6>
                            <br>
                            <?php
                                $results = DB::getInstance()->get('tbl_cust',array('cust_id','=',$id));
                                if($results){
                                    echo '<table class="table table-bordered dataTable" id="custhistory" style="font-size:13px">';
                                        echo '<thead>';
                                            echo '<tr><th class="span2">Date</th><th class="span3">Payment</th><th class="span3">Payment Type</th><th class="span2">Item Purchase</th><th class="span3">View Reciept</th></tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        $sql = 'SELECT sale_time,payment_amount,payment_type,SUM(goods_qty),b.sales_id 
                                                FROM tbl_sales_item a,tbl_sales b,tbl_sales_payment c 
                                                WHERE a.sales_id = b.sales_id 
                                                AND b.sales_id = c.sales_id 
                                                AND b.cust_id = ?
                                                Group by sale_time';
                                        $query = $con->prepare($sql);
                                        $query->execute(array($id));
                                        if($query->rowCount()>0){
                                            while($r = $query->fetch(PDO::FETCH_NUM)){
                                                echo "<tr>";
                                                    echo "<td>".$r[0]."</td>";
                                                    echo "<td>RM ".$r[1]."</td>";
                                                    echo "<td>".$r[2]."</td>";
                                                    echo "<td>".$r[3]."</td>";
                                                    echo "<td><a href='view-receipt.php?view=".Crytion::encryt64($id)."&time=".$r[0]."&sale=".$r[4]."'>View Receipt</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        
                                        echo '</tbody>';
                                    echo '</table>';
                                }
                            ?>

                            <!-- new comment form -->
                            <div class="span12 section comment">
                                <h6>Add a quick note</h6>
                                <p>Add a note about this user to keep a history of your interactions.</p>
                                <textarea></textarea>
                                <a href="user-profile.html#">Attach files</a>
                                <div class="span12 submit-box pull-right">
                                    <input type="submit" class="btn-glow primary" value="Add Note">
                                    <span>OR</span>
                                    <input type="reset" value="Cancel" class="reset">
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                            }
                        ?>
                        
                    </div>

                    <!-- side address column -->
                    <div class="span3 address pull-right">
                        <h6>Address</h6>
                        <!-- <iframe width="300" height="133" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;t=m&amp;ll=19.715081,-155.071421&amp;spn=0.010746,0.025749&amp;z=14&amp;output=embed"></iframe>-->
                        <ul>
                        <?php
                            $address = DB::getInstance()->query("Select * from tbl_add a,tbl_countries b where a.country_id = b.country_code and person_id = ?",array($result->cust_id));
                            $addr = $address->result();
                            if($address->count()!=0){                        
                                echo '<li>'.$addr->add_street.'</li>';
                                echo '<li>'.$addr->add_city.','.$addr->add_state.'</li>';
                                echo '<li>'.$addr->add_post.','.$addr->country_name.'</li>';
                            }
                            
                            echo '<li class="ico-li">';
                            echo '<i class="ico-phone"></i>';
                            echo $result->cust_tel;
                            echo '</li>';
                            
                            echo '<li class="ico-li">';
                            echo '<i class="ico-mail"></i>';
                            echo '<a href="#">'.$result->cust_email.'</a>';
                            echo '</li>';
                            
                        ?>
                        </ul>
                    </div>
                </div>
                <?php
                    }
                    
                }
                else{
                    include '../include/error/404.php';
                }
                ?>
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
    
    <!-- call all plugins -->
    <script src="../detail/js/theme.js"></script>


    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
        })

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