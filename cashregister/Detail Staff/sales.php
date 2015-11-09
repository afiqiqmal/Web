<?php
    require "core/init.php";
    include "../config/config.php";

    $current_url = Crytion::encryt64($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    //echo Crytion::encryt64("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    Session::put('current_url',$current_url);

    //global declare;
    
    $set = new Sales();
    $total =0;
    $final_total=0;
    $srv_tax = $set->service_tax();
    $govn_tax = $set->government_tax();
    $pay = 0;
?>
<html>
<head>
	<title>Staff - Sales</title>
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
    <link href="../detail/lib/uniform.default.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/select2.css" type="text/css" rel="stylesheet">
    <link href="../detail/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="../css/dataTable/dataTables.bootstrap.css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">
    <link rel="stylesheet" type="text/css" href="../detail/elements.css">
    <link rel="stylesheet" type="text/css" href="../detail/icons.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/index.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" href="../detail/new-user.css" type="text/css" media="screen" />  
    <link rel="stylesheet" href="../detail/sales.css" type="text/css" media="screen" />

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
                                    <i class="fa fa-envelope-o"></i> New message from Afiq iqmal
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
                                    <div class="name">afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, but the majority have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 13 min.</span>
                                </a>
                                <a href="index.php#" class="item">
                                    <img src="../images/default_pic.jpg" class="display" />
                                    <div class="name">afiq Iqmal</div>
                                    <div class="msg">
                                        There are many variations of available, have suffered alterations.
                                    </div>
                                    <span class="time"><i class="fa fa-clock-o"></i> 26 min.</span>
                                </a>
                                <a href="index.php#" class="item last">
                                    <img src="../images/default_pic.jpg" class="display" />
                                    <div class="name">afiq Iqmal</div>
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
            <li>
                <a href="report.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Report</span>
                </a>
            </li>
            <li>
                <a href="user-list.php">
                    <i class="fa fa-group"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>  
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
        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#shortcut" data-toggle="modal" class="skin first_nav selected">
                <span class="fa fa-align-justify"></span><span class="text">Keyboard Shortcut</span>
            </a>
        </div>
        <div class="container-fluid">
            <div id="pad-wrapper" style="margin-top:10px">
                <div class="row-fluid">
                    <div class="span9 register">
                        <div class="span12">
                            <h2 class="title" style="margin:0px 0px 10px 0px"><i class="fa fa-shopping-cart"></i> Sales Register</h2>
                            <div class="field-box">
                                <form action="updatecart.php" method="post" class="updatecart" style="display:inline-block;width:300px">
                                    <input class="span12" name="scan_item" id="scan_item" autocomplete="off" placeholder="Enter item code or scan barcode" type="text">
                                    <input type="hidden" name="return_url" value="<?php echo $current_url ?>"/>
                                    <input type="hidden" name="type" value="search"/>
                                </form>
                                <div style="clear:both;display:inline-block">
                                    <button class="btn btn-info" name="sell-voucher" id="sell-voucher">Sell Voucher Card</button>
                                    <button class="btn btn-warning" name="close-register" id="close-register">Close Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="span12 item-scan-list" style="margin-left:0px;">
                            <table class="table table-bordered" id="register-table" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th class="void span1"></th>
                                        <th class="item_id span2" >Item ID</th>
                                        <th class="item_name span5">Item</th>
                                        <th class="qty span1">Quantity</th>
                                        <th class="price span2">Price(unit)</th>
                                        <th class="discount span1">Discount%</th>
                                        <th class="update span1"></th>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">
                                    <?php
                                    
                                    if(Session::exists('products'))
                                    {
                                        
                                        foreach(Session::get('products') as $cart_itm){
                                            echo "<tr><form id='edit_row' action='updatecart.php' method='post'>";
                                                echo '<td><a href="updatecart.php?removep='.$cart_itm["goods_id"].'&return_url='.$current_url.'&bac=product"><i class="fa fa-trash fa-lg"></i></a></td>';
                                                echo "<td>".$cart_itm['goods_id']."</td>";
                                                echo "<td>".$cart_itm['goods_name']."</td>";
                                                echo "<td><input type='text' class='span12' name='goods_qty' id='qty' value='".$cart_itm['goods_qty']."'/></td>";
                                                echo "<td>$".$cart_itm['goods_price']."</td>";
                                                echo "<td><input type='text' class='span12' name='goods_discount' id='discount' value='".$cart_itm['goods_discount']."'/></td>";
                                                echo "<input type='hidden' name='return_url' value='".$current_url."' />";
                                                echo "<input type='hidden' name='type' value='update' />";
                                                echo "<input type='hidden' name='goods_id' value='".$cart_itm['goods_id']."' />";
                                                echo "<td><button type='submit' class='btn' name='submit'><i class='fa fa-edit'></i></button></td>";
                                            echo "</form></tr>";
                                            
                                            $discountprice = $cart_itm["goods_price"]-($cart_itm['goods_price']*$cart_itm['goods_discount']/100);   
                                            $subtotal = $discountprice*$cart_itm["goods_qty"];
                                            $total = ($total + $subtotal);
                                        }
                                        
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="7"> 
                                        <form name="g-discount" method="post" action="updatecart.php">
                                            <?php 
                                                if(Session::exists('sales_error')){
                                                    echo Session::get('sales_error');
                                                    Session::delete('sales_error');
                                                }
                                            ?>
                                                                                     
                                            <div class="total">
                                                <span >Global Discount </span>
                                                <input type="text" name="setglobald" id="setglobald" class="span3"/>
                                                <input type='hidden' name='return_url' value='<?php echo $current_url; ?>' />
                                                <input type='hidden' name='type' value='globaldiscount' />
                                                <button id="set-disc" class="btn btn-info">Set Disc%</button>
                                            </div>
                                        </form>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div id="shortcut" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                <h4 id="myModalLabel">Keyboard Shortcut</h4>
                              </div>
                              <div class="modal-body">
                                <table class="table" style="font-size: 13px;">
                                    <tr>
                                        <th>Keys</th>
                                        <th>Function</th>
                                    </tr>
                                    <tr>
                                        <td>F1</td>
                                        <td>Focus on Item Search Input</td>
                                    </tr>
                                    <tr>
                                        <td>F4</td>
                                        <td>Focus on Customer Selection</td>
                                    </tr>
                                    <tr>
                                        <td>Esc</td>
                                        <td>Close Register</td>
                                    </tr>
                                    <tr>
                                        <td>Del</td>
                                        <td>Cancel The Current Sales</td>
                                    </tr>
                                    <tr>
                                        <td>ALt+N</td>
                                        <td>New Customer</td>
                                    </tr>
                                    <tr>
                                        <td>Shift+backspace</td>
                                        <td>Complete Sales</td>
                                    </tr>
                                </table>
                              </div>
                            </div>
                        </div>
                        
                        <?php

                        if(Session::exists('select_cust') && Session::get('select_cust')!=null )
                        {
                            $results = DB::getInstance()->get('tbl_cust',array('cust_id','=',Session::get('select_cust')));
                            if($results){
                                echo '<h5 class="title" style="margin:0px 0px 10px 0px"><i class="fa fa-align-justify"></i> History Sale From '.ucwords($results->result()->cust_fname).'</h5>';
                                echo '<table class="table table-bordered dataTable" id="custhistory" style="font-size:13px">';
                                    echo '<thead>';
                                        echo '<tr><th class="span2">Date</th><th class="span3">Payment</th><th class="span3">Payment Type</th><th class="span2">Item Purchase</th><th class="span3">View Reciept</th></tr>';
                                    echo '</thead>';
                                    echo '<tbody>';
                                    $sql = 'SELECT sale_time,payment_amount,payment_type,SUM(goods_qty) 
                                            FROM tbl_sales_item a,tbl_sales b,tbl_sales_payment c 
                                            WHERE a.sales_id = b.sales_id 
                                            AND b.sales_id = c.sales_id 
                                            AND b.cust_id = ?
                                            Group by sale_time';
                                    $query = $con->prepare($sql);
                                    $query->execute(array(Session::get('select_cust')));
                                    if($query->rowCount()>0){
                                        while($r = $query->fetch(PDO::FETCH_NUM)){
                                            echo "<tr>";
                                                echo "<td>".$r[0]."</td>";
                                                echo "<td>RM ".$r[1]."</td>";
                                                echo "<td>".$r[2]."</td>";
                                                echo "<td>".$r[3]."</td>";
                                                echo "<td><a href='/receipt?view=".Crytion::encryt64(Session::get('select_cust'))."&time=".$r[0]."'>View Receipt</a></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    
                                    echo '</tbody>';
                                echo '</table>';
                            }
                        }


                        ?>
                    </div> 
                    <div class="span3 sidepanel">
                            <!-- BOX 1-->
                            <div class="panel panel-info">
                                <?php 
                                    if(Session::exists('products') && Session::get('products') != null)
                                    {
                                      echo '<div id="togglepanel"class="panel-heading" style="text-align:center">';
                                      echo '<a href="updatecart.php?detachall=1&return_url='.$current_url.'" class="btn btn-danger" name="cancel-sales" id="cancel-sales">Cancel Sales</a>';
                                      echo '</div>';
                                    }
                                ?>
                                <?php
                                    if(Session::exists('select_cust') && Session::get('select_cust')!=null )
                                    {
                                        $results = DB::getInstance()->get('tbl_cust',array('cust_id','=',Session::get('select_cust')));
                                        if($results){
                                            echo '<div class="panel-body">';
                                            echo '<label style="font-size: 13px;">Customer Infomation</label>';
                                            echo '<div style="margin-top:10px;"><a href="#cust-info" data-toggle="modal">'.ucwords($results->result()->cust_fname).' ('.$results->result()->cust_tel.')</a></div>';
                                            echo '<div>';
                                            echo ($results->result()->cust_email != null)? '<span><input style="margin:0" type="checkbox" name="email_receipt" value="1" id="email_receipt" class="checkbox">&nbsp;<b>Email Reciept :</b><i> '.$results->result()->cust_email.'</i></span>':'no email';
                                            echo '</div>';
                                            echo '</div>'; // panel body
                                            echo '<div class="panel-footer clearfix" style="text-align:center">';
                                            echo '<a href="#" class="btn btn-info" style="width:50px;margin-right:5px" id="edit-cust">Edit</a>';
                                            echo '<a href="updatecart.php?detach=1&return_url='.$current_url.'" class="btn btn-danger" style="width:50px;" id="detach-cust">Cancel</a>';
                                            echo '</div>';
                                        }
                                        
                                    }
                                    else
                                    {   
                                        echo '<div class="panel-body">';
                                        echo '<label style="font-size: 13px;">Select Customer(Optional)</label>';
                                        echo '<input type="text" class="span12" name="search-cust" id="search-cust" autocomplete="off"/>';
                                        echo '<div style="margin-top:10px;">';
                                        echo '<div id="results" class="list-group" style="max-height:200px; overflow:auto;">';
                                        echo '</div></div>';
                                        echo '<div style="margin-top:10px">';
                                        echo 'OR ';
                                        echo '<a class="btn btn-info" href="new-user.php?url='.$current_url.'&value=1" id="new-cust">New Customer</a>';
                                        echo '</div>';
                                        echo '</div>'; // panel body
                                    }
                                    
                                ?>
                                
                                
                          </div>

                            <!-- BOX 2-->
                                <div class="panel panel-success">
                                  <div class="panel-heading">
                                    ITEM PRICE     
                                    <div class="pull-right">
                                        <!-- <a href="#" data-perform="panel-dismiss" class="btn btn-info pull-right"><i class="fa fa-times"></i></a> -->
                                        <a href="#" data-perform="panel-collapse" class="btn btn-info pull-right"><i class="fa fa-minus"></i></a> 
                                    </div>
                                  </div>
                                  <div id="close" class="panel-wrapper collapse in">
                                      <div class="panel-body pull-right">
                                        <label id="subtotal" style="font-size: 13px;">RM <?php echo number_format($total,2); ?></label>
                                        <hr/>
                                        <label id="servtax" style="font-size: 13px;">RM <?php echo $a = number_format(($total * $srv_tax),2); ?></label>                                
                                        <label id="govtax" style="font-size: 13px;">RM <?php echo $b = number_format(($total * $govn_tax),2); ?></label>
                                      </div>
        
                                      <div class="panel-body" >
                                        <label for="subtotal" style="font-size: 13px;">Sub Total</label>
                                        <hr/>
                                        <label for="servtax" style="font-size: 13px;">Service Tax (<?php echo ($srv_tax * 100 )?>%)</label>                                
                                        <label for="govtax" style="font-size: 13px;">Govn Tax (<?php echo ($govn_tax * 100 )?>%)</label>
                                      </div>
                                      <div class="panel-footer">
                                            <?php ?>
                                            <label class="pull-right" id="total" style="font-weight:bold;">RM <?php echo number_format($final_total = ($total+$a+$b),2); ?></label>
                                            <label for="total" style="font-weight:bold;">TOTAL RM</label>
                                      </div>
                                  </div>
                                </div>
                            <?php
                              if($final_total != 0){
                                  echo '<div class="panel panel-info">';
                                        if(Session::exists('add-pay')){
                                            echo '<div class="panel-body pay-table">';
                                            echo '<table style="font-size: 13px;width:100%;" class="table table-bordered">';
                                            echo '<tr>';
                                                echo '<th>Delete</th>';
                                                echo '<th>Type</th>';
                                                echo '<th style="text-align:right">Amount</th>';
                                            echo '</tr>';
                                            foreach(Session::get('add-pay') as $payment){
                                                echo '<tr>';
                                                    echo '<td><a href="updatecart.php?removep='.$payment["type"].'&return_url='.$current_url.'&bac=payment"><i class="fa fa-trash"></i></a></td>';
                                                    echo '<td>'.$payment['type'].'</td>';
                                                    echo '<td style="text-align:right">RM '.$payment['amount'].'</td>';
                                                    $pay += $payment['amount'];
                                                echo '</tr>';
                                            }
                                            echo '</table>';
                                            echo '</div>';
                                        }
                                    echo '<div class="panel-heading" style="font-weight:bold;">';
                                      echo ($pay>$final_total)? 'BALANCE ':'AMOUNT DUE';
                                      echo '<div class="pull-right">RM '.(number_format($final_total-$pay,2)).'</div>';
                                    echo '</div>';
                                    echo '<div class="panel-body">';
                                    echo '<form name="pay-form" method="post" action="updatecart.php?return_url='.$current_url.'">';
                                      echo '<table><tr>';
                                      echo '<td><label style="font-size: 13px;">Payment Type</lable></td>';
                                      echo '<td><select name="pay-type" id="pay-type" class="span">';
                                      echo '<option value="cash">Cash</option>';
                                      echo '<option value="credit">Credit Card</option>';
                                      echo '<option value="paypal">Paypal</option>';
                                      echo '</select></td></tr>';
                                      echo '<tr><td><input type="text" class="span" name="amount" placeholder="Amount" value="'.(number_format($final_total-$pay,2)).'" ></td>';
                                      echo '<td><input type="submit" class="btn btn-success" value="Add Payment"></td></tr></table>';
                                    echo '</form>';
                                    echo '</div>';
                                  
                                  if($pay >= $final_total){
                                      Session::put('total_price',$final_total);
                                      Session::put('total_pay',$pay);
                                      echo '<div class="panel-footer" style="text-align:center">';
                                      echo '<form id="complete-form" method="post" action="updatecart.php?complete='.md5("complete").'">';
                                      echo '<input type="hidden" name="return_url" value="'.$current_url.'">';
                                      echo '<input type="hidden" name="bool-email" id="bool-email" value="no">';
                                      echo '<a id="pay-btn" class="btn btn-success" onClick="complete();">Complete Sales</a>';
                                      echo '</div>';
                                    echo '</div>';
                                  }
                                  else
                                    echo '</div>';
                              }
                              ?>
                            
                        </div>
                    </div> 
                </div>    
            </div>
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
    <script src="../js/dataTables/jquery.dataTables.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">

        $(window).load(function(){
            $(".loader").hide();
        });

        $(document).ready(function(){
            $("#menu-toggler2").click();
        });
        
        $(document).ready(function(){
            $('#scan_item').on("paste", function(){
                setTimeout(function(){$('.updatecart').submit()},200);
            });    
        });
        
        $(document).ready(function() {
            var timer;
            $("#scan_item").on('keyup', function() {
                clearInterval(timer); 
                timer = setTimeout(function() {
                    var srch = $('#scan_item').val();
                        $.ajax({
                            type: "POST",
                            url: "updatecart.php",
                            data: "check="+srch,
                            cache: false,
                            success: function(response){
                                if(response == 1)
                                    $('.updatecart').submit();
                            }
                        });
                }, 500);
            });
        });
        
        $(document).ready(function() {
            $("#email_receipt").change(function() {
                if(this.checked) {
                    $('#bool-email').val('yes');
                }
                else
                    $('#bool-email').val('no');
            });
        });
        
        //table
        $(document).ready(function() {
            var atable = $('#register-table').DataTable({
              "bSort" : false,
              "bFilter": false,
              "paging":   false,
              "ordering": false,
              "info":     false,
              "oLanguage": {
                "sEmptyTable" : "There is no item in the cart"}
            });

            var btable = $('#custhistory').DataTable({
              "bSort" : true,
              "bFilter": false,
              "paging":   false,
              "ordering": true,
              "info":     false,
              "oLanguage": {
                "sEmptyTable" : "There is no past record"}
            });

            $(".dataTables_empty").css("text-align","center");

            $(".dataTables_wrapper .row-fluid:first-child").remove();
            
        });
    </script>
    
    <script>
        $(document).ready(function() {
        	(function($, window, document){
        		var panelSelector = '[data-perform="panel-collapse"]';
        
        		$(panelSelector).each(function() {
        			var $this = $(this),
        			parent = $this.closest('.panel'),
        			wrapper = parent.find('.panel-wrapper'),
        			collapseOpts = {toggle: false};
        
        			if( ! wrapper.length) {
        				wrapper =
        				parent.children('.panel-heading').nextAll()
        				.wrapAll('<div/>')
        				.parent()
        				.addClass('panel-wrapper');
        				collapseOpts = {};
        			}
        			wrapper
        			.collapse(collapseOpts)
        			.on('hide.bs.collapse', function() {
        				$this.children('i').removeClass('fa-minus').addClass('fa-plus');
        			})
        			.on('show.bs.collapse', function() {
        				$this.children('i').removeClass('fa-plus').addClass('fa-minus');
        			});
        		});
        		$(document).on('click', panelSelector, function (e) {
        			e.preventDefault();
        			var parent = $(this).closest('.panel');
        			var wrapper = parent.find('.panel-wrapper');
        			wrapper.collapse('toggle');
        		});
        	}(jQuery, window, document));
        	(function($, window, document){
        		var panelSelector = '[data-perform="panel-dismiss"]';
        		$(document).on('click', panelSelector, function (e) {
        			e.preventDefault();
        			var parent = $(this).closest('.panel');
        			removeElement();
        
        			function removeElement() {
        				var col = parent.parent();
        				parent.remove();
        				col.filter(function() {
        					var el = $(this);
        					return (el.is('[class*="col-"]') && el.children('*').length === 0);
        				}).remove();
        			}
        		});
        	}(jQuery, window, document));
          
        });
        </script>

    <script> //testing autofocus
        function testAttribute(element, attribute) 
        {
           var test = document.createElement(element);
           if (attribute in test) 
           {    return true;}
           else 
                return false;
        }

        window.onload = function() 
        {
            if (!testAttribute('input', 'autofocus'))
                document.getElementById('scan_item').focus(); 
            else
                document.getElementById('scan_item').focus(); 
            //for browser has no autofocus support
        }
        
        
    </script> 
    
    <script type='text/javascript'> // shortcut keys
        $(document).ready(function () { 
            $('html').on('keydown', function (event) {
               // f1 keys for autofucos on item scan 
               // all browsers except IE before version 9        // Internet Explorer before version 9
               if ((('which' in event) && (event.which == 112)) || (('button' in event) && (event.button == 112))) {
                   document.getElementById('scan_item').focus();
                   return false; //prevent bubbling and default action
               }
               else // escape keys for close register
               if ((('which' in event) && (event.which == 27)) || (('button' in event) && (event.button == 27))) {
                   if(document.getElementById('close-register')){
                       if(confirm('Close Register?') == true)
                            $("#close-register").get(0).click();
                   }
                   return false; //prevent bubbling and default action
               }
               else // f4 keys for focus customer
               if ((('which' in event) && (event.which == 115)) || (('button' in event) && (event.button == 115))) {
                   document.getElementById('search-cust').focus();
                   return false; //prevent bubbling and default action
               }
               else // del keys for cancel sale
               if ((('which' in event) && (event.which == 46)) || (('button' in event) && (event.button == 46))) {
                    if(document.getElementById('cancel-sales')){
                       if(confirm('Cancel Sales?') == true)
                            $("#cancel-sales").get(0).click();
                    }
                   return false; //prevent bubbling and default action
               }
               else //shift+backspace to complete registration
               if (event.keyCode == 8 && event.shiftKey){
                    if(document.getElementById('pay-btn')){
                        if(confirm('Are you sure to complete this sales?. After this change cannot be revert') == true)
                            $("#pay-btn").get(0).click();
                    }
                    return false;
               }
               else //alt-N to new customer
               if (event.keyCode == 78 && event.altKey){
                    if(document.getElementById('new-cust'))
                        $("#new-cust").get(0).click();
                    return false;
               }
             
            });
        });

    </script>

    <script type="text/javascript"> // searching ajax customer              
            function search() {
                var srch = $('#search-cust').val()+"|<?php echo $current_url?>";
                if(srch !== ''){
                    $.ajax({
                        type: "POST",
                        url: "custcheck.php",
                        data: "data="+srch,
                        cache: false,
                        success: function(html){
                            $("#results").html(html);
                        }
                    });
                }return false;    
            }

            $("#search-cust").on("keyup", function(e) {
                // Set Timeout
                var search_string = $(this).val();
                if (search_string == '') {
                    $("#results").fadeOut();
                }else{
                    $("#results").fadeIn();
                    $(this).data('timer', setTimeout(search, 100));
                };
            });
    </script>
    
    <script type="text/javascript">
        function complete(){
            if(confirm("Change After This cannot be reverted. Are You Sure?") == true)
                $('#complete-form').submit();
        }
    </script>
</body>
</html>

<?php
            }
        }
    }
    else
        header("Refresh :0;url=../");
?>

