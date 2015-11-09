<?php
    require 'core/init.php';
    $receipt = new Receipt();
    require '../config/config.php';
    $set = new Sales();
    $total =0;
    $final_total=0;
    $srv_tax = $set->service_tax();
    $govn_tax = $set->government_tax();
    $pay = 0;
?>
<html>
<head>
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

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="../detail/receipt.css">
    
    <link href='../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>
</head>
<body>
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
            <li  class="active">
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
    <?php 
        $sql = ("SELECT sale_id,fname,cust_fname,receipt_id
                                        FROM tbl_receipt a,tbl_cust b,tbl_employee c ,tbl_sales d
                                        WHERE a.cust_id = b.cust_id
                                        AND a.user_id = c.user_id
                                        AND a.sale_id = d.sales_id 
                                        AND a.sale_id =?
                                        AND a.cust_id =?
                                        AND d.sale_time =?");
        $query = $con->prepare($sql);
        $query->execute(array(Input::get('sale'),Crytion::decryt64(Input::get('view')),Input::get('time')));
        if($query->rowCount()>0){
            $r = $query->fetch(PDO::FETCH_NUM);
        }                                
    ?>
    <!-- end sidebar -->
    <div class="content">
    <div class="container-fluid" id="receipt">
        <div class="receipt-header row-fluid">
            <?php echo $receipt->drawheader();?>
        </div>
        <div class="receipt-body">
            <?php
                echo '<div class="user">';
                echo '<table class="">';
                echo "<tr><td>";
                    echo "Receipt#"." : ".$r[3];
                echo "</td></tr>";
                echo "<tr><td>";
                    echo "Server"." : ".$r[1];
                echo "</td></tr>";
                echo "<tr><td>";
                    echo "Customer"." : ".$r[2];
                echo "</td></tr>";
                echo "<tr><td>";
                    echo "Sales#"." : ".$r[0];
                echo "</td></tr>";
                echo '</table>';
                echo '</div>';
            ?>
            <div class="list">
                <table class="item-list table">
                <thead>
                    <tr>
                        <th class="span4">Item Name</th>
                        <th class="span3">Price Unit (discount)</th>
                        <th class="span2">Quantity</th>
                        <th class="span3">Total RM</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql2 = ("Select a.goods_name,b.unit_price,b.goods_qty,b.goods_discount
                                from tbl_goods a,tbl_sales_item b,tbl_sales c
                                Where a.goods_id = b.goods_id
                                AND c.sales_id = b.sales_id
                                AND c.sale_time = ?
                                AND c.cust_id = ?
                                AND c.sales_id = ?");
                    $query2 = $con->prepare($sql2);
                    $query2->execute(array(Input::get('time'),Crytion::decryt64(Input::get('view')),Input::get('sale')));
                    if($query2->rowCount()>0){
                        while($row = $query2->fetch(PDO::FETCH_NUM)){
                            echo "<tr>";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]." (".$row[3]."%)</td>";
                            echo "<td>".$row[2]."</td>";
                            echo "<td>".($row[1]-($row[1]*$row[3]/100))."</td>";
                            echo "</tr>";
                                            
                            $discountprice = $row[1]-($row[1]*$row[3]/100);   
                            $subtotal = $discountprice*$row[2];
                            $total = ($total + $subtotal);
                        }
                                        
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr class="first">
                        <td colspan="3">Subtotal</td>
                        <td class="bold"><?php echo $total?></td>
                    </tr>
                    <tr class="first">
                        <td colspan="3">Sev Tax (<?php echo ($srv_tax * 100 )?>%)</td>
                        <td class="bold"><?php echo $a = number_format(($total * $srv_tax),2); ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Gov Tax (<?php echo ($govn_tax * 100 )?>%)</td>
                        <td class="bold"><?php echo $b = number_format(($total * $govn_tax),2); ?></td>
                    </tr>
                    <tr class="first">
                        <td colspan="3">TOTAL</td>
                        <td class="bold"><?php echo number_format($final_total = ($total+$a+$b),2); ?></td>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
        <div class="receipt-footer" style="margin-top: 100px">
            <div style="text-align:center;margin:0 auto">
                <img src='../barcode_img.php?num=<?php echo $r[3]; ?>&type=code128&imgtype=png'>
            </div>
        </div>
    </div>
    <div style="width: 300px;text-align:center;margin:0 auto">
        <button class="btn btn-info" id="print">Print</button>
    </div>
    </div>
    
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
    <!-- call all plugins -->
    <script src="../detail/js/theme.js"></script>
    
    <script>
        $(document).ready(function(){
           $('#print').trigger('click'); 
        });
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