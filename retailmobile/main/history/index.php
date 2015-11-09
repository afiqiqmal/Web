<?php 
    require "core/init.php";
    require "../../config/config.php";
?>
<html>
    <head>
        <title>Retail Mobile System By MHI Corparation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <link rel="stylesheet" href="../../css/font-awesome.min.css" />

		<link rel="stylesheet" href="../../css/jquery.mobile-1.4.4.css" />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.css" />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />

        <link rel="stylesheet" href="../../css/custom-layout/login.css" type="text/css"/>  
        
    </head>
    <body onload="scrlsts()">
        <?php        
            $user = new User();
            $user->checkLoggedin(array('user'));
            if($user->isLoggedin()){
                $get = DB::getInstance()->get('tbl_cust',array('cust_id','=',Crytion::decryt64(Session::get('user'))));
                $result = $get->result();    
        ?>       
            <div data-role="page" data-theme='b' id="main-page">
                <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
                    <h1>Retail Mobile System</h1>
                    <a href="#" target='_blank'><i class='fa fa-shopping-cart'></i></a>
                    <a href="../"><i class='fa fa-arrow-left'></i></a>
                </div>
                
                <div data-role="content">        	
        			<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
        	            <li data-role="list-divider">Welcome <?php echo $result->cust_fname ?>!</li>
        	        </ul>
                    <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
        	            <li data-role="list-divider">HISTORY</li>
        	        </ul>
                    <ul data-role="content" class="content-div">
                        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
                        <?php 
                            if(!Input::get('view_sales')){               
                        ?>
                            <ul data-role="fieldcontain" style="margin:0 auto;text-align:center">
                                <li data-role="fieldcontain" style="text-align:center">
                                    <?php
                                        $calcp = "SELECT SUM(a.payment_amount)
                                                    FROM tbl_sales_payment a,tbl_sales b
                                                    WHERE a.sales_id = b.sales_id
                                                    AND b.cust_id = ?";
                                        $pay = $con->prepare($calcp);
                                        $pay->execute(array($result->cust_id));
                                        $rpay = $pay->fetch(PDO::FETCH_NUM);
                                    ?>
                                    <div style="display: inline;border:1px solid #fff;margin-right:10px;" class="col">
                                        TOTAL SPEND : RM <?php echo $rpay[0]?>
                                    </div>
                                    
                                    <?php
                                        $calc = "SELECT SUM(goods_qty)
                                                FROM tbl_sales_item a,tbl_sales b,tbl_employee d
                                                WHERE a.sales_id = b.sales_id
                                                AND b.user_id = d.user_id
                                                AND b.cust_id = ?
                                                GROUP by sale_time";
                                        $qty = $con->prepare($calc);
                                        $qty->execute(array($result->cust_id));
                                        $rqty = $qty->fetch(PDO::FETCH_NUM);
                                    ?>
                                    <div style="display: inline;border:1px solid #fff;" class="col">
                                        TOTAL ITEMS : <?php echo $rqty[0]; ?>
                                    </div>
                                </li>
                            </ul>
                            
                            <table data-role='table' id='table-column-toggle' data-mode='columntoggle' class='ui-responsive table-stroke' data-ajax='false' style="">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th data-priority="1">Sales ID</th>
                                        <th data-priority="2">Amount </th>
                                        <th data-priority="1">Date of Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $list = "Select * from tbl_sales a,tbl_sales_item b,tbl_sales_payment c,tbl_goods d,tbl_employee e
                                        Where a.sales_id = b.sales_id
                                        AND a.sales_id = c.sales_id
                                        AND b.goods_id = d.goods_id
                                        AND a.cust_id = ?
                                        AND a.user_id = e.user_id
                                        Group By a.sales_id";
                                $query = $con->prepare($list);
                                $query->execute(array($result->cust_id));
                                
                                if($query->rowCount()>0){
                                    while($r = $query->fetch(PDO::FETCH_OBJ)){
                                        echo '<tr>';
                                            echo '<td style="text-align:center;line-height:20px;vertical-align:middle"><a href="../history/?view_sales='.Crytion::encryt64($r->sales_id).'"><span class="fa fa-eye"/></a></td>';
                                            echo '<td>'.$r->sales_id.'</td>';
                                            echo '<td>RM '.$r->payment_amount.'</td>';
                                            echo '<td>'.date('d F Y (h:m A)',strtotime($r->sale_time)).'</td>';
                                        echo '</tr>';
                                        
                                    }   
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                            }
                            else{
                                $sales_id = Crytion::decryt64(Input::get('view_sales'));
                                ?>
                                <li><label>Sales ID # <?php echo $sales_id ?></label></li>
                                <table data-role='table' id='table-column-toggle' data-mode='columntoggle' class='ui-responsive table-stroke' data-ajax='false'>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th data-priority="2">Goods ID</th>
                                            <th data-priority="1">Item Name</th>
                                            <th data-priority="2">Category</th>
                                            <th data-priority="3">Item purchased</th>
                                            <th data-priority="3">Price</th>
                                            <th data-priority="2">Discount</th>
                                            <th data-priority="1">After Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $list = 'SELECT a.goods_id,c.goods_name,c.goods_category,a.goods_qty,a.unit_price,a.goods_discount
                                                FROM tbl_sales_item a,tbl_sales b,tbl_goods c
                                                WHERE a.sales_id = b.sales_id
                                                AND a.goods_id = c.goods_id 
                                                AND b.cust_id = ?
                                                AND b.sales_id = ?';
                                            
                                    $query = $con->prepare($list);
                                    $query->execute(array($result->cust_id,$sales_id));
                                    
                                    if($query->rowCount()>0){
                                        while($r = $query->fetch(PDO::FETCH_NUM)){
                                            echo '<tr>';
                                                echo '<td style="text-align:center;line-height:20px;vertical-align:middle"><a href="../history/"><span class="fa fa-arrow-left"/></a></td>';
                                                echo '<td>'.$r[0].'</td>';
                                                echo '<td>'.$r[1].'</td>';
                                                echo '<td>'.$r[2].'</td>';
                                                echo '<td>'.$r[3].'</td>';
                                                echo '<td>RM '.$r[4].'</td>';
                                                echo '<td>'.$r[5].'%</td>';
                                                echo '<td>RM '.($r[4]-($r[4]*$r[5]/100)).'</td>';
                                            echo '</tr>';
                                            
                                        }   
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                            ?>
                        </ul>
           			</ul>
                            	
                </div>
                <div data-role="footer" data-position="fixed" data-theme='b' data-tap-toggle="false" style="text-align:center;">
                	<label for="copyright" style="margin-top:10px">&copy; 
                    <?php 
                        $copyYear = 2014; 
                        $curYear = date('Y'); 
                        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                    ?> Mobile Dev. By MHI Freelancer</label>
                </div>
            </div>
        
        
		<script src="../../js/jquery-2.1.0.js"></script>
        <script src="../../js/jquery.mobile-1.4.4.js"></script>
        <script src="../../js/jquery.maskedinput.js"></script>
        <script>
        	$(document).on('swipeleft', '[data-role="page"]', function(event){    
			    if(event.handled !== true) // This will prevent event triggering more then once
			    {    
			        var nextpage = $(this).next('[data-role="page"]');
			        // swipe using id of next page if exists
			        if (nextpage.length > 0) {
			            $.mobile.changePage(nextpage, {transition: "slide", reverse: false}, true, true);
			        }
			        event.handled = true;
			    }
			    return false;         
			});

			$(document).on('swiperight', '[data-role="page"]', function(event){   
			    if(event.handled !== true) // This will prevent event triggering more then once
			    {      
			        var prevpage = $(this).prev('[data-role="page"]');
			        if (prevpage.length > 0) {
			            $.mobile.changePage(prevpage, {transition: "slide", reverse: true}, true, true);
			        }
			        event.handled = true;
			    }
			    return false;            
			});

        </script>
        <SCRIPT LANGUAGE="JavaScript">
            var scrl = " POS Sytem Mobile Version 1.0 ";
            function scrlsts() {
             scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
             document.title = scrl;
             setTimeout("scrlsts()", 300);
             }
        </script>
        
    </body>
</html>
<?php    
            }
            else{
                Redirect::to('../../');
            }
        ?>