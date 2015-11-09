<?php
    session_start();
    include "config.php";
    $current_url = $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //echo Crytion::encryt64("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $_SESSION['current_url'] = base64_encode($current_url);

    $current_url = $_SESSION['current_url'];
    //global declare;
    
    $total =0;
    $final_total=0;
    $srv_tax = 0;
    $govn_tax = 0;
    $pay = 0;
?>
<html>
<head>
	<title>Admin - Sales</title>
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
    <link href="../css/dataTable/dataTables.bootstrap.css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="../detail/layout.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="../detail/index.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" href="../detail/sales.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='../fonts/googleapis-sans/googleapis.css' rel='stylesheet' type='text/css'>
    
    </head>
    <body>
        


    <?php
    if(isset($_SESSION['select_cust'])){

    ?>
	<!-- main container -->
    <div class="content" style="margin-left:0px;">
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
                                <form action="updatecart1.php" method="post" class="updatecart" style="display:inline-block;width:300px">
                                    <input class="span12" name="scan_item" id="scan_item" autocomplete="off" placeholder="Enter item code or scan barcode" type="text">
                                    <input type="hidden" name="return_url" value="<?php echo $current_url ?>"/>
                                    <input type="hidden" name="type" value="search"/>
                                </form>
                                <a href="#browsefood" data-toggle="modal" class="btn btn-info">Browse</a>
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
                                        <th class="update span1"></th>
                                    </tr>
                                </thead>
                                <tbody style="background-color:white">
                                    <?php
                                    
                                    if(isset($_SESSION['products']))
                                    {                                       
                                        foreach($_SESSION['products'] as $cart_itm){
                                            echo "<tr><form id='edit_row' action='updatecart1.php' method='post'>";
                                                echo '<td><a href="updatecart1.php?removep='.$cart_itm["food_id"].'&return_url='.$current_url.'&bac=product"><i class="fa fa-trash fa-lg"></i></a></td>';
                                                echo "<td>".$cart_itm['food_id']."</td>";
                                                echo "<td>".$cart_itm['food_name']."</td>";
                                                echo "<td><input type='text' class='span12' name='food_qty' id='qty' value='".$cart_itm['food_qty']."'/></td>";
                                                echo "<td>$".$cart_itm['food_price']."</td>";
                                                echo "<input type='hidden' name='return_url' value='".$current_url."' />";
                                                echo "<input type='hidden' name='type' value='update' />";
                                                echo "<input type='hidden' name='food_id' value='".$cart_itm['food_id']."' />";
                                                echo "<td><button type='submit' class='btn' name='submit'><i class='fa fa-edit'></i></button></td>";
                                            echo "</form></tr>";
                                            
                                            $subtotal = $cart_itm['food_price']*$cart_itm["food_qty"];
                                            $total = ($total + $subtotal);
                                        }
                                        
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6"> 
                                        <form name="g-discount" method="post" action="updatecart1.php">
                                            <?php 
                                                if(isset($_SESSION['sales_error'])){
                                                    echo $_SESSION['sales_error'];
                                                    
                                                }
                                            ?>                                           
                                        </form>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div id="browsefood" class="modal modal-lg hide fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                    <h4 id="myModalLabel">Food Browse</h4>
                                </div>
                                <div class="modal-body">
                                    <style>
                                        .btn-food .show-food a{
                                           width: 100px;
                                        }
                                        .btn-food a{
                                            text-decoration: none;
                                        }
                                        
                                        .food{
                                            margin-top: 10px;
                                        }
                                        .food a{
                                            line-height: 40px;
                                            height: 50px;
                                        }                                        
                                    </style>
                                    <div style="text-align:center" class="btn-food">
                                        <a class="switch-btn">Switch to Search Box</a>
                                        <div class="show-food visible">
                                            <a class="btn btn-info" id="food">Food</a>
                                            <a class="btn btn-info" id="drink">Drinks</a>
                                            <a class="btn btn-info" id="junk">Junk</a>
                                        </div>
                                        <div>
                                            <input type="text" name="search-food" placeholder="Search food" class="food-text span3 hidden">    
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="food">
                                    </div>
                                </div>
                            </div>
                            <div id="shortcut" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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

                        if(isset($_SESSION['select_cust']))
                        {
                            $id = $_SESSION['select_cust'];
                            $results = mysql_query("Select * from student_tbl where stud_id = '$id'") or die(mysql_error());

                            $results = mysql_fetch_array($results);
                            echo '<h5 class="title" style="margin:0px 0px 10px 0px"><i class="fa fa-align-justify"></i> History Sale From '.ucwords($results['stud_fname']).'</h5>';
                            echo '<table class="table table-bordered dataTable" id="custhistory" style="font-size:13px">';
                                echo '<thead>';
                                    echo '<tr>
                                            <th class="span2">Date</th>
                                            <th class="span3">Purchase ID</th>
                                            <th class="span3">Price Total (RM)</th>
                                            <th class="span2">Status</th>
                                         </tr>';
                                echo '</thead>';
                                echo '<tbody>';
                                    $sql = 'SELECT date,purchase_id,total,status
                                            FROM history_tbl WHERE stud_id ="'.$id.'"';
                                    $results = mysql_query($sql) or die(mysql_error());
                                    if(mysql_num_rows($results) > 0){
                                        while($r = mysql_fetch_array($results)){
                                            echo "<tr>";
                                                echo "<td>".$r[0]."</td>";
                                                echo "<td>".$r[1]."</td>";
                                                echo "<td>".$r[2]."</td>";
                                                echo "<td>".$r[3]."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    
                                echo '</tbody>';
                            echo '</table>';
                            
                        }


                        ?>
                    </div> 
                    <div class="span3 sidepanel">
                            <!-- BOX 1-->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Customer     
                                    <div class="pull-right">
                                        <!-- <a href="#" data-perform="panel-dismiss" class="btn btn-info pull-right"><i class="fa fa-times"></i></a> -->
                                        <a href="#" data-perform="panel-collapse" class="btn btn-info pull-right"><i class="fa fa-minus"></i></a> 
                                    </div>
                                </div> 
                                <?php
                                if(isset($_SESSION['select_cust']))
                                {
                                    $id = $_SESSION['select_cust'];
                                        $results = mysql_query("Select * from student_tbl where stud_id = '$id'") or die(mysql_error());

                                        $results = mysql_fetch_array($results);
                                echo '<div class="panel-body pull-right">';
                                    echo '<div style="max-width:60px;">';
                                        echo '<img class="block" src="data:image;base64,'.$results['stud_dp'].'" alt="">';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="panel-body">';
                                    echo '<div>';                                                                            
                                        echo '<label style="font-size: 13px;">'.$results["stud_id"].'</label>';
                                        echo '<label style="font-size: 13px;">'.$results["stud_fname"].'</label>';
                                        echo '<label style="font-size: 13px;">'.$results["stud_age"].' Years Old</label>';
                                        echo '<label style="font-size: 13px;">'.$results["stud_gender"].'</label>';                                       
                                    echo '</div>';
                                echo '</div>';
                                
                                }
                                ?>
                                <div id="togglepanel"class="panel-footer" style="text-align:center">
                                    <a href="<?php echo 'updatecart.php?detachall=1&return_url='.$current_url ?>" class="btn btn-danger" name="cancel-sales" id="cancel-sales">Cancel Sales</a>
                                </div>
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
                                            <?php 
                                                if(isset($_SESSION['sales_error'])){
                                                    echo '<label class="pull-right" id="total" style="font-weight:bold;color:red">RM'.number_format($final_total = ($total+$a+$b),2) .'</label>
                                                          <label for="total" style="font-weight:bold;color:red">TOTAL RM</label>';
                                                }
                                                else{
                                                    echo '<label class="pull-right" id="total" style="font-weight:bold;">RM'.number_format($final_total = ($total+$a+$b),2) .'</label>
                                                          <label for="total" style="font-weight:bold;">TOTAL RM</label>';   
                                                }
                                            ?>
                                      </div>
                                  </div>
                                </div>
                            <?php
                              if($final_total != 0){
                                  $today = date('Y').'/'.date('m').'/'.date('d');
                                  $id = $_SESSION['select_cust'];
                                  $results = mysql_query("Select * from history_tbl where stud_id='$id' and date = '$today'") or die(mysql_error());

                                  if(mysql_num_rows($results)>0){
                                        $row = mysql_fetch_array($results);

                                        $current_tot = $row['total'];

                                        $overall = $current_tot + $final_total;

                                        if($overall>10){
                                            $_SESSION['sales_error'] = '<label style="font-weight:bold;color:red">LIMIT PURCHASE OF TODAY</label>';
                                        }
                                        else{
                                            unset($_SESSION['sales_error']);
                                            echo '<div class="panel panel-info">';
                                                echo '<div class="panel-heading" style="font-weight:bold;">';
                                                  echo 'AMOUNT DUE';
                                                  echo '<div class="pull-right">RM '.(number_format($final_total-$pay,2)).'</div>';
                                                echo '</div>';
                                                echo '<div class="panel-body">';
                                                
                                                echo '</div>';
                                              
                                                echo '<div class="panel-footer" style="text-align:center">';
                                                  echo '<form id="complete-form" method="post" action="updatecart1.php?complete='.md5("complete").'">';
                                                  echo '<input type="hidden" name="return_url" value="'.$current_url.'">';
                                                  echo '<a id="pay-btn" class="btn btn-success">Complete Sales</a>';
                                                  echo '</form>';
                                                echo '</div>';
                                              echo '</div>';
                                        }
                                  }
                                  else{
                                       if($final_total>10){
                                            $_SESSION['sales_error'] = '<label style="font-weight:bold;color:red">LIMIT PURCHASE OF TODAY</label>';
                                       }
                                       else{
                                            unset($_SESSION['sales_error']);
                                            echo '<div class="panel panel-info">';
                                                echo '<div class="panel-heading" style="font-weight:bold;">';
                                                  echo 'AMOUNT DUE';
                                                  echo '<div class="pull-right">RM '.(number_format($final_total-$pay,2)).'</div>';
                                                echo '</div>';
                                                echo '<div class="panel-body">';
                                                
                                                echo '</div>';
                                              
                                                echo '<div class="panel-footer" style="text-align:center">';
                                                  echo '<form id="complete-form" method="post" action="updatecart1.php?complete='.md5("complete").'">';
                                                  echo '<input type="hidden" name="return_url" value="'.$current_url.'">';
                                                  echo '<a id="pay-btn" class="btn btn-success">Complete Sales</a>';
                                                  echo '</form>';
                                                echo '</div>';
                                              echo '</div>';
                                       }
                                  }
                              }
                              ?>
                            
                        </div>
                    </div> 
                </div>    
            </div>
        </div>
        <?php
            }
            else{
                ?>
                    <form class="form" action="updatecart1.php" method="post">
                        <label>Waiting for FingerPrint</label>
                        <input type="text" id="cust_check" class="" style="height:30px" placeholder="ID" name="stud_check">
                        <input type="hidden" name="return_url" value="<?php echo $current_url ?>"/>
                    </form>
                <?php
            }
        ?>

	<!-- scripts -->
    <script src="../detail/js/jquery-2.1.0.js"></script>
    <script src="../detail/js/bootstrap.min.js"></script>
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
                            url: "updatecart1.php",
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
        
        $(document).ready(function(){
           var pos = 1;
           $('.switch-btn').on('click', function(){
               if(pos == 1){
                   $(this).text('Switch to Button');
                   $('.show-food').removeClass('visible').addClass('hidden');
                   $('.food-text').removeClass('hidden').addClass('visible'); 
                   pos = 0;
               }
               else if(pos == 0){
                   $(this).text('Switch to Search Box');
                   $('.show-food').removeClass('hidden').addClass('visible');
                   $('.food-text').removeClass('visible').addClass('hidden');
                   pos = 1;
               }
           });
            
           $('.show-food a').on('click',function(){
              var name = $(this).attr('id');
              $.ajax({
                type: "POST",
                url: "updatecart1.php",
                data: "browse="+name+'|'+'<?php echo $current_url; ?>',
                cache: false,
                success: function(response){
                    $('.food').html(response);
                }
              }); 
           });
            
           var timera;
            $(".food-text").on('keyup', function() {
                clearInterval(timera); 
                timer = setTimeout(function() {
                    var name = $('.food-text').val();
                    if(name  == ""){
                        $('.food').html("");
                    }
                    else if(name.length>1){
                        $.ajax({
                            type: "POST",
                            url: "updatecart1.php",
                            data: "browsen="+name+'|'+'<?php echo $current_url; ?>',
                            cache: false,
                            success: function(response){
                                $('.food').html(response);
                            }
                        });
                    }   
                }, 500);
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
</body>
</html>