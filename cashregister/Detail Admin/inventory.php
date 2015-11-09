<?php
    require "core/init.php";
    include '../config/config.php';
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::put('current_url',$current_url);
?>

<html>
<head>
	<title>Admin - Inventory list</title>
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
    $assign = Crytion::decryt64(Session::get('assign'));
    $user_id = Crytion::decryt64(Session::get('user_id'));
    $user = new User();
    $inv = new Inventory();
    $validate = new Validate();
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
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>                
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
    <div class="content">
            <div id="main-stats">
                <div class="row-fluid">
                    <h2 class="title" style="margin:10px 0 10px 10px;"><i class="fa fa-truck"></i> Inventory</h2>
                </div>
                <ul class="breadcrumb" style="margin-bottom:0px;">
                  <li><i class="fa fa-home"></i><a href="index.php"> Dashboard</a><span class="divider">></span></li>
                  <li><a href="Items.php"> Items</a><span class="divider">></span></li>
                  <li> Inventory</li>
                  <span class="pull-right">Time: <span id="time"></span></span>
                </ul>
            </div>
            <div class="container-fluid">
                <?php 
                    if(Input::get('tkn') == 'add' && Input::get('item')=='new' && Input::get('inv')==md5('3'))
                    {
                        if(input::get('add') == md5('true') && Input::exists())
                        {
                            $validation = $validate->check($_POST,array(
                                'goods_id' => array(
                                    'name' => 'Item Barcode',
                                    'unique' => 'tbl_goods',
                                    'max'=>16
                                ),
                                'goods_name' =>array(
                                    'name' => 'Item Name',
                                    'required' => true,
                                    'min' => 4,
                                    'max' => 50
                                ),
                                'goods_qty' => array(
                                    'name' => "Quantity",
                                    'required' => true,
                                    'number' =>true
                                ),
                                'category' =>array(
                                    'name' => "Category",
                                    'required' => true
                                ),
                                'supplier' => array(
                                    'name' => "Supplier",
                                    'required' => true
                                ),
                                'selling_price' => array(
                                    'name' => "Selling Price Per Unit",
                                    'required' => true,
                                    'number' =>true
                                ),
                                'cost_price' => array(
                                    'name' => 'Cost Price',
                                    'required' => true,
                                    'number' =>true
                                ),
                                'goods_discount' => array(
                                    'name' => 'Discount',
                                    'number' => true
                                )
                            ));
                            
                            if($validation->passed()){
                                $img = new Image();
                                $img->checkimage('image','insert');
                                
                                if(Input::get('goods_id')==null)
                                    $id = $inv->generateid(16);
                                else
                                    $id = Input::get('goods_id');
                                    
                                $add1 = $inv->addinventory('tbl_goods',array(
                                    'goods_id' => $id,
                                    'goods_name' => Input::get('goods_name'),
                                    'goods_category' => Input::get('category'),
                                    'description' => Input::get('desc'),
                                    'image' => $img->getimage(),
                                    'image_type' => $img->getimagetype(),
                                    'image_name' => $img->getimagename()
                                ));
                                $add2 = $inv->addinventory('tbl_goods_stock',array(
                                    'goods_id' => $id,
                                    'goods_qty' => Input::get('goods_qty'),
                                    'goods_discount' => Input::get('goods_discount'),
                                    'goods_price_per_unit' => Input::get('selling_price'),
                                    'goods_cost_price_per_unit' => Input::get('cost_price'),
                                    'supplier_id' => Input::get('supplier'),
                                    'date_added' => date('Y-m-d H:i:s'),
                                    'date_update' => date('Y-m-d H:i:s'),
                                    'comment' => "New Stock Added"
                                    
                                ));
                                
                                $add3 = $inv->addinventory('tbl_item_update_record',array(
                                    'goods_id' => $id,
                                    'user_id' => Crytion::decryt64(Crytion::decryt64($user_id)),
                                    'update_qty' => '+'.Input::get('goods_qty'),
                                    'date_update_qty' => date('d-m-Y H:i:s'),
                                    'notes_update' => "New Stock Added"
                                ));
                                
                                if($add1 && $add2){
                                    Session::put('form-success','New Item Successfully Added');
                                }
                                else{
                                    Session::put('form-error',array('There is a problem creating an item'));
                                }
                            }
                            else
                               Session::put('form-error',$validation->errors()); 
                                
                        }
                ?>
                        <div id="pad-wrapper" class="new-user">
                            <div class="row-fluid header">
                                <h3>New Items</h3>
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
                                                echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                                echo '<div id="form_success" class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-check"></i> ';
                                                echo Session::get('form-success').'<br/> Redirect in 1 seconds';    
                                                echo '</div></div>';
                                                
                                                Session::delete('form-success');
                                                
                                                echo "<script>window.setTimeout(function(){window.location = 'items.php'},1000);</script>";
                                            }   
                                        ?>
                                  
                                    <div class="container">
                                        <form class="add_form inline-input" action="inventory.php?item=new&tkn=add&inv=<?php echo md5('3')?>&add=<?php echo md5('true') ?>" method="post" enctype="multipart/form-data">
                                            <div class="box-image" style="margin-bottom:20px;">
                                                <div style="width:150px;height:150px;margin:0 auto;" >
                                                    <img src="../images/avatar.png" class="dis-img" style="width:150px;height:150px"/>
                                                </div>
                                                <div class="dis-img" style="text-align:center;width:150px;margin:0 auto;">
                                                    <span class="btn btn-default btn-file" style="margin-top:10px">
                                                        Browse <input type="file" name="image" class="img-upload" id="img-upload"/>
                                                    </span>
                                                </div> 
            
                                            </div>
                                            <hr/>
                                            <div class="field-box span12">
                                                <label>Item Code / Barcode:</label>
                                                <input class="span4 " name="goods_id" id="item_code" placeholder="Items Code" type="text"/>
                                                <input class="btn-flat" id="generate_id" type="button" value="Generate ID" data-toggle="tooltip" title="Item with no Code Only!">
                                            </div>                            
                                            <div class="field-box span12">
                                                <label>Item Name</label>
                                                <input class="span6" name="goods_name" type="text" />
                                            </div>
                                            <?php
                                                if(Session::exists('no-cat')){
                                                    echo '<div class="field-box span12">';
                                                        echo '<label>New Category</label>';
                                                        echo '<input class="span4" name="category" type="text" />';
                                                        echo '<span style="margin-left:10px ;"><a href="setSession.php?set=nocat&return_url='.$current_url.'">Choose Category?</a></span>';
                                                    echo '</div>';
                                                }
                                                else
                                                {
                                                    echo '<div class="field-box span12">';
                                                        echo '<label>Category</label>';
                                                        echo '<select name="category" class="category span4">';
                                                            echo '<option></option>';
                                                                $cat = $con->query('Select * from tbl_goods');
                                                                $cat->execute();
                                                                if($cat->rowCount()>0){
                                                                    while($ct = $cat->fetch()){
                                                                        echo '<option value='.$ct["goods_category"].'>'.$ct["goods_category"].'</option>';
                                                                    }
                                                                }
                                                        echo '</select>';
                                                        echo '<span style="margin-left:10px ;"><a href="setSession.php?set=cat&return_url='.$current_url.'">New Category</a></span>';
                                                    echo '</div>';
                                                }
                                            ?>
                                            
                                            <div class="field-box span12">
                                                <label>Supplier</label>
                                                <select class="supplier span4" name="supplier">
                                                    <option></option>
                                                    <?php
                                                    $sup = $con->query('Select * from tbl_supplier');
                                                    $sup->execute();
                                                    if($sup->rowCount()>0){
                                                        while($sp = $sup->fetch()){
                                                            if(Session::exists('select-sup')){
                                                                if(Session::get('select-sup') == $sp['supplier_id'])
                                                                    echo '<option value='.$sp['supplier_id'].'>'.$sp['supplier_name'].'</option>';
                                                            }
                                                            echo '<option value='.$sp['supplier_id'].'>'.$sp['supplier_name'].'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <span style="margin-left:10px ;"><a href="new-supplier.php?return=<?php echo $current_url ?>">New Supplier?</a></span>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Quantity</label>
                                                <input class="span4" name="goods_qty" type="text" />
                                            </div>
                                            <div class="field-box span12">
                                                <label>Selling Price</label>
                                                <div class="predefined">
                                                    <span class="value">RM</span>
                                                    <input class="span4" name="selling_price" type="text"/>
                                                </div>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Cost Price</label>
                                                <div class="predefined">
                                                    <span class="value">RM</span>
                                                    <input class="span4" name="cost_price" type="text"/>
                                                </div>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Discount</label>
                                                <div class="postdefined">
                                                    <input class="span2" name="goods_discount" type="text"/>
                                                    <span class="value">%</span>
                                                </div>
                                            </div>
                                            <div class="span12 field-box textarea">
                                                <label>Notes:</label>
                                                <textarea class="span9" id="comment" name="comment"></textarea>
                                                <span class="charactersleft">Field limited to 100 characters</span>
                                            </div>
                                            
                                            <div class="span11 actions">
                                                <input type="submit" class="btn-glow primary" value="Save Item">
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
            
                                    <p>Add multiple Item at once?</p>
                                    <p>Choose one of the following file types:</p>
                                    <ul>
                                        <li><a href="#importmodal" role="button" data-toggle="modal">Import from a CSV file</a></li>
                                        <li><a href="#importmodal" role="button" data-toggle="modal">Import from an Excel file</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>      
                <?php 
                    }
                    
                    else if(Input::get('item') && Input::get('tkn')== 'inventory' && Input::get('inv') == md5('1')){
                    
                        if(Input::get('updateinv') == md5('true') && Input::exists() && Input::get('modqty'))
                        {
                            $validation = $validate->check($_POST,array(
                                'invqty' => array(
                                    'name' => 'Quantity',
                                    'required' => true  
                                )
                            ));
                            
                            if($validation->passed()){
                                $valid=$inv->updateqty('tbl_goods_stock',
                                                        'tbl_item_update_record',
                                                        Crytion::decryt64(Crytion::decryt64($user_id)),
                                                        Crytion::decryt64(Input::get('item')),
                                                        Input::get('invqty'),
                                                        Input::get('comment'));
                                if($valid){
                                    Session::put('form-success',"Updating Success");
                                    echo "<script>window.setTimeout(function(){window.location = 'inventory.php?item=".Input::get('item')."&tkn=inventory&inv=".md5('1')."'},1000);</script>";
                                    
                                }
                                else
                                    Session::put('form-error','Invalid Format');
                            }
                            else
                                Session::put('form-error',"Quantity is Required");
                        }
                ?>
                        <div id="pad-wrapper">
                            <div class="row-fluid">
                                <div class="span12">
                                    <?php
                                            if(Session::exists('form-error'))
                                            {
                                                echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                                echo '<div id="form_error" class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-exclamation-triangle"></i> ';
                                                echo Session::get('form-error');    
                                                echo '</div></div>';
                                                Session::delete('form-error');
                                            }
                                            else
                                            if(Session::exists('form-success')){
                                                echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                                echo '<div id="form_success" class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-check"></i> ';
                                                echo Session::get('form-success').'<br/> Redirect in 1 seconds';    
                                                echo '</div></div>';
                                                Session::delete('form-success');
                                            }   
                                        ?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="padding-bottom:0;background-color:#efefef" colspan="4"><i class="fa fa-barcode fa-2x"></i> Item Infomation<a class="pull-right" href="inventory.php?item=<?php echo Input::get('item');?>&tkn=edit&inv=<?php echo md5('2'); ?>">Edit</a></th>
                                            </tr>
                                        </thead>
                                    <?php
                                        
                                        $inventory = DB::getInstance()->query('Select * from tbl_goods a,tbl_goods_stock b Where a.goods_id = b.goods_id
                                                                                And a.goods_id =?',array(Crytion::decryt64(Input::get('item'))));
                                        if($inventory->count() == 1)
                                        {
                                            echo '<form method="post" action="inventory.php?item='.Input::get('item').'&tkn=inventory&inv='.md5('1').'&updateinv='.md5('true').'">';
                                            echo '<tbody style="font-size: 13px;">';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Item Code</td>';
                                                echo '<td class="span6" colspan="2"><a href="../barcode.php?text='.input::get('item').'">'.$inventory->result()->goods_id.'</a></td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Item Name</td>';
                                                echo '<td class="span6" colspan="2">'.$inventory->result()->goods_name.'</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Category</td>';
                                                echo '<td class="span6" colspan="2">'.$inventory->result()->goods_category.'</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Selling Price</td>';
                                                echo '<td class="span6" colspan="2">$'.$inventory->result()->goods_price_per_unit.'</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Current Quantity</td>';
                                                echo '<td class="span6" colspan="2">'.$inventory->result()->goods_qty.'</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2"><span class="required">Add Or Subtract Quantity</span><label style="font-size:10px">*Note : to subtract (-1) to add (+1)</label></td>';
                                                echo '<td class="span6" colspan="2"><input type="text" name="invqty" class="span4" placeholder="to subtract (-1) to add (+1)"/></td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                                echo '<td class="span6" colspan="2">Comment</td>';
                                                echo '<td class="span6" colspan="2"><textarea class="span9" id="comment" name="comment"></textarea><label style="font-size:10px" class="charactersleft">Field limited to 100 characters</label></td>';
                                            echo '</tr>';
                                            
                                            echo '<tr >';
                                                echo '<td colspan=4 style="text-align:center"><input type="submit" name="modqty" class="btn btn-info"/></td>';
                                            echo '</tr>';
                                            echo '</form>';
                                            
                                            echo '<tr>';
                                                echo '<th class="span3">Data Tracking</th>';
                                                echo '<th class="span3">Update By</th>';
                                                echo '<th class="span2">In/Out Quantity</th>';
                                                echo '<th class="span4">Notes</th>';
                                            echo '</tr>';
                                            
                                            include "../config/config.php";
                                            $sql = "Select * from tbl_item_update_record a,tbl_employee b where a.user_id = b.user_id and a.goods_id =".Crytion::decryt64(Input::get('item'));
                                            $sql = $con->query($sql);
                                            $sql->execute();
                                            while($s = $sql->fetch()){
                                                echo '<tr>';
                                                    echo '<td>'.$s['date_update_qty'].'</td>';
                                                    echo '<td>'.$s['fname'].'</td>';
                                                    echo '<td>'.$s['update_qty'].'</td>';
                                                    echo '<td>'.$s['notes_update'].'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                        else{
                                            Redirect::to(404);
                                        }
                                    ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    
                    else if(Input::get('item') && Input::get('tkn')== 'edit' && Input::get('inv') == md5('2')){
                        if(Input::get('edit') == md5("true")){
                            $validate = new Validate();
                            
                            $validation = $validate->check($_POST,array(
                                'category' => array(
                                    'name' => 'Category',
                                    'required' =>true
                                ),
                                'supplier' => array(
                                    'name' => 'Supplier',
                                    'required' => true
                                ),
                                'goods_id' => array(
                                    'name' => 'Good ID',
                                    'required' => true
                                ),
                                'goods_name' => array(
                                    'name' => 'Good Name',
                                    'required' => true
                                ),
                                'goods_qty' => array(
                                    'name' => 'Quantity',
                                    'required' => true
                                ),
                                'selling_price' => array(
                                    'name' => 'Selling Price',
                                    'required' => true
                                ),
                                'cost_price' => array(
                                    'name' => 'Cost Price',
                                    'required' => true
                                )
                                
                            ));
                            
                            if($validation->passed()){
                                $img = new Image();
                                $update = new Inventory();
                                
                                $update1 = $update->updateinv('tbl_goods','goods_id',Crytion::decryt64(Input::get('item')),array(
                                    'goods_id' => Input::get('goods_id'),
                                    'goods_name' => Input::get('goods_name'),
                                    'goods_category' => Input::get('category'),
                                    'image' => $img->getimage(),
                                    'image_name' => $img->getimagename(),
                                    'image_type' => $img->getimagetype()
                                ));
                                
                                $update2 = $update->updateinv('tbl_goods_stock','goods_id',Crytion::decryt64(Input::get('item')),array(
                                    'goods_id' => Input::get('goods_id'),
                                    'goods_qty' => Input::get('goods_qty'),
                                    'goods_discount' => Input::get('goods_discount'),
                                    'goods_price_per_unit' => Input::get('selling_price'),
                                    'goods_cost_price_per_unit' => Input::get('cost_price'),
                                    'supplier_id' => Input::get('supplier'),
                                    'date_update' => date('Y-m-d H:i:s'),
                                    'comment' => 'Stock details update'
                                ));
                                
                                $update3 = $update->updateinv('tbl_item_update_record','goods_id',Crytion::decryt64(Input::get('item')),array(
                                    'goods_id' => Input::get('goods_id'),
                                ));
                                
                                if($update1 && $update2 && $update3){
                                    Session::put('form-success','Update Item Success!');
                                }
                                else{
                                    Session::put('form-error',array('Error in updating item!'));
                                }
                            }
                            else{
                                Session::put('form-error',$validation->error());
                            }
                        }
                        $item = "Select * from tbl_goods a,tbl_goods_stock b where a.goods_id = b.goods_id 
                                    AND a.goods_id = ?";
                        $itemquery = $con->prepare($item);
                        $itemquery->execute(array(Crytion::decryt64(Input::get('item'))));
                        $row = $itemquery->fetch(PDO::FETCH_OBJ);
                ?>
                        
                        <div id="pad-wrapper" class="new-user">
                            <div class="row-fluid header">
                                <h3>Edit Items</h3>
                            </div>
                            <div class="row-fluid form-wrapper">
                                <!-- left column -->
                                <div class="span12">
                                    
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
                                                echo '<div style="width:auto;margin-right:50px;overflow: auto;">';
                                                echo '<div id="form_success" class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a><i class="fa fa-check"></i> ';
                                                echo Session::get('form-success').'<br/> Redirect in 1 seconds';    
                                                echo '</div></div>';
                                                
                                                Session::delete('form-success');
                                                
                                                echo "<script>window.setTimeout(function(){window.location = 'items.php'},1000);</script>";
                                            }   
                                        ?>
                                    <div class="container">
                                        <form class="add_form inline-input" action="inventory.php?item=<?php echo Input::get('item') ?>&tkn=edit&inv=<?php echo md5('2')?>&edit=<?php echo md5('true') ?>" method="post" enctype="multipart/form-data">
                                            <div class="box-image" style="margin-bottom:20px;">
                                                <div style="width:150px;height:150px;margin:0 auto;" >
                                                    <img src="../getimg.php?id=<?php echo Crytion::encryt64(Crytion::encryt64(Crytion::decryt64(Input::get('item')))) ?>&jb=<?php echo Crytion::encryt64(Crytion::encryt64("item"))?>" class="dis-img" style="width:150px;height:150px"/>
                                                </div>
                                                <div class="dis-img" style="text-align:center;width:150px;margin:0 auto;">
                                                    <span class="btn btn-default btn-file" style="margin-top:10px">
                                                        Browse <input type="file" name="image" class="img-upload" id="img-upload"/>
                                                    </span>
                                                </div> 
            
                                            </div>
                                            <hr/>
                                            <?php
                                                if(Session::exists('no-cat')){
                                                    echo '<div class="field-box span12">';
                                                        echo '<label>New Category</label>';
                                                        echo '<input class="span4" name="category" type="text" />';
                                                        echo '<span style="margin-left:10px ;"><a href="setSession.php?set=nocat&return_url='.$current_url.'">Choose Category?</a></span>';
                                                    echo '</div>';
                                                }
                                                else
                                                {
                                                    echo '<div class="field-box span12">';
                                                        echo '<label>Category</label>';
                                                        echo '<select name="category" class="category span4">';
                                                            echo '<option></option>';
                                                                $cat = $con->query('Select * from tbl_goods');
                                                                $cat->execute();
                                                                if($cat->rowCount()>0){
                                                                    while($ct = $cat->fetch()){
                                                                        if($ct["goods_category"] == $row->goods_category)
                                                                            echo '<option value='.$ct["goods_category"].' selected>'.$ct["goods_category"].'</option>';
                                                                        else
                                                                            echo '<option value='.$ct["goods_category"].'>'.$ct["goods_category"].'</option>';
                                                                    }
                                                                }
                                                        echo '</select>';
                                                        echo '<span style="margin-left:10px ;"><a href="setSession.php?set=cat&return_url='.$current_url.'">New Category</a></span>';
                                                    echo '</div>';
                                                }
                                            ?>
                                            <div class="field-box span12">
                                                <label>Supplier</label>
                                                <select class="supplier span4" name="supplier">
                                                    <option></option>
                                                    <?php
                                                    $sup = $con->query('Select * from tbl_supplier');
                                                    $sup->execute();
                                                    if($sup->rowCount()>0){
                                                        while($sp = $sup->fetch()){
                                                            if(Session::exists('select-sup')){
                                                                if(Session::get('select-sup') == $sp['supplier_id'])
                                                                    echo '<option value='.$sp['supplier_id'].' selected>'.$sp['supplier_name'].'</option>';
                                                            }
                                                            else if($sp['supplier_id'] == $row->supplier_id)
                                                                echo '<option value='.$sp['supplier_id'].' selected>'.$sp['supplier_name'].'</option>';
                                                            else
                                                                echo '<option value='.$sp['supplier_id'].'>'.$sp['supplier_name'].'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <span style="margin-left:10px ;"><a href="new-supplier.php?return=<?php echo $current_url ?>">New Supplier?</a></span>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Item Code / Barcode:</label>
                                                <input class="span4 " name="goods_id" id="item_code" placeholder="Items Code" type="text" value="<?php echo $row->goods_id?>"/>
                                                <input class="btn-flat" id="generate_id" type="button" value="Generate New ID" data-toggle="tooltip" title="Item with no Code Only!">
                                            </div>                            
                                            <div class="field-box span12">
                                                <label>Item Name</label>
                                                <input class="span6" name="goods_name" type="text" value="<?php echo $row->goods_name ?>"/>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Quantity</label>
                                                <input class="span4" name="goods_qty" type="text" value="<?php echo $row->goods_qty?>"/>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Selling Price</label>
                                                <div class="predefined">
                                                    <span class="value">RM</span>
                                                    <input class="span4" name="selling_price" type="text" value="<?php echo $row->goods_price_per_unit ?>"/>
                                                </div>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Cost Price</label>
                                                <div class="predefined">
                                                    <span class="value">RM</span>
                                                    <input class="span4" name="cost_price" type="text" value="<?php echo $row->goods_cost_price_per_unit?>"/>
                                                </div>
                                            </div>
                                            <div class="field-box span12">
                                                <label>Discount</label>
                                                <div class="postdefined">
                                                    <input class="span2" name="goods_discount" type="text" value="<?php echo $row->goods_discount ?>"/>
                                                    <span class="value">%</span>
                                                </div>
                                            </div>
                                            <div class="span12 field-box textarea">
                                                <label>Notes:</label>
                                                <textarea class="span9" id="comment" name="comment"></textarea>
                                                <span class="charactersleft">Field limited to 100 characters</span>
                                            </div>
                                            
                                            <div class="span11 actions">
                                                <input type="submit" class="btn-glow primary" value="Save Item">
                                                <span>OR</span>
                                                <input type="reset" value="Cancel" class="reset">
                                            </div>
                                        </form>
                                    </div>
            
                                    
                                </div>
                            </div>                            
                        </div>
                        
                <?php
                    }
                    
                    else if(Input::get('item') && Input::get('tkn')== 'delete' && Input::get('inv') == md5('0')){
                            $valid = $inv->deleteitem(Crytion::decryt64(Input::get('item')));
                            
                            if($valid){
                                Echo "<script>alert('Items Deleted');</script>";
                                echo "<script>window.setTimeout(function(){window.location = 'items.php'},1);</script>";
                            }
                            else{
                                Echo "<script>alert('Deleted Failed');</script>";
                                echo "<script>window.setTimeout(function(){window.location = 'items.php'},1);</script>";
                            }
                    }
                    else{
                        Redirect::to(404);
                    }
                ?>
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
        });
        
        $('#generate_id').click(function(){
            var $num = Math.floor(Math.random() * 9999999999999999) + 111111111111111;
            $('#item_code').val($num);
        })
        
        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.add_form");

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
            
        });
        
        $(".category").select2({
            placeholder: "Select A Category"
        });
        
        $(".supplier").select2({
            placeholder: "Select Supplier"
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
                    $('.category').removeClass('category').addClass('ui-elements');
                    $('.supplier').removeClass('supplier').addClass('ui-elements');
                    mobile = true;
                }
            }

            if(mobile == false){
                $('.category').removeClass('ui-elements').addClass('category');
                $('.supplier').removeClass('ui-elements').addClass('supplier');
            }
            
        }
    </script>
    
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