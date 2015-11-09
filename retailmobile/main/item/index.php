<?php 
    require "core/init.php";
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
        	            <li data-role="list-divider">CHECK ITEM</li>
        	        </ul>
                    <ul data-role="content" class="content-div">
                        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
                        <?php
                            if(Input::exists()){
                                if(Token::check(Input::get('token'))){
                                    $check = new Inventory();
                                    $valid = $check->checkinv(Input::get('item_code'));
                                    if($valid){
                                        echo '<li>';  
                                            echo "<table data-role='table' class='ui-responsive table-stroke '>";
                                            echo "<thead>";
                                                echo "<tr>";
                                                    echo "<th>Item</th>";
                                                    echo "<th>Description</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                                $disp = DB::getInstance()->query('Select * from tbl_goods a,tbl_goods_stock b where a.goods_id = ?',array(Input::get('item_code')));
                                                echo "<tr>";
                                                    echo "<td>Item Code</td>";
                                                    echo "<td>".$disp->result()->goods_id."</td>";
                                                echo "</tr>";
                                                echo "<tr>";
                                                    echo "<td>Name</td>";
                                                    echo "<td>".$disp->result()->goods_name."</td>";
                                                echo "</tr>";
                                                echo "<tr>";
                                                    echo "<td>Price</td>";
                                                    echo "<td>RM ".$disp->result()->goods_price_per_unit."</td>";
                                                echo "</tr>";
                                                echo "<tr>";
                                                    echo "<td>Quantity Left</td>";
                                                    echo "<td>".$disp->result()->goods_qty."</td>";
                                                echo "</tr>";
                                                echo "<tr>";
                                                    echo "<td>Discount</td>";
                                                    echo "<td>".$disp->result()->goods_discount."%</td>";
                                                echo "</tr>";
                                                $discount = $disp->result()->goods_price_per_unit - $disp->result()->goods_price_per_unit*($disp->result()->goods_discount/100);
                                                echo "<tr>";
                                                    echo "<td>Price Discount</td>";
                                                    echo "<td>RM ".$discount."</td>";
                                                echo "</tr>";
                                            echo "</tbody>";
                                        echo "</table>";
                                        echo "</li>";
                                        echo "<li>";
                                            echo "<button class='ui-btn btn-glow-green' id='back'><a style='color:white' href='../item/' data-ajax='false'>Back</a></button>";
                                        echo "</li>";
                                    }
                                    else{
                                        Session::put('error-check-item','Not Available! Please Enter A Valid Item Code!');
                                        Redirect::to('../item/');
                                    }
                                }
                                else{
                                    echo '<li style="text-align:center" data-role="fieldcontain" id="message" class="message danger">';
                                        echo '<i class="fa fa-danger"></i>';
                                        echo '<p id="error-msg">Error Occur!. Please Refresh Page</p>';
                                    echo '</li>';
                                }
                            }
                            else{
                            ?>
                                <form name="price-check-form" id="price-check-form" method="post" action="" data-ajax="false">
                                    <?php
                                    if(Session::exists('error-check-item')){
                                        echo '<li style="text-align:center" data-role="fieldcontain" id="message" class="message warning">';
                                            echo '<i class="fa fa-warning"></i>';
                                            echo '<p id="error-msg">'.Session::get('error-check-item').'</p>';
                                        echo '</li>';
                                        Session::delete('error-check-item'); 
                                    }
                                    else{
                                        echo '<li style="text-align:center;display:none" data-role="fieldcontain" id="message" class="message warning">';
                                            echo '<i class="fa fa-warning"></i>';
                                            echo '<p id="error-msg"></p>';
                                        echo '</li>'; 
                                    }
                                        
                                    ?>
                                    <li data-role="fieldcontain">
                                      <label for="textinput">Item Code:</label>
                                      <input type="text" name="item_code" id="item_code" value="" data-clear-btn="true" placeholder="Enter Item Code/Item Barcode">
                                    </li>
                                    <li style="text-align: center;">
                                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                        <button style="display:inline-block" class="ui-btn btn-glow-green">Check</button>
                                        OR
                                        <button class="ui-btn btn-glow-green fileinput-button">
                                            <span>Upload</span>
                                            <input type="file" name="files" data-role="none"/>
                                        </button>	
                                    </li>
                                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                </form>
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
        <script>
        	$(document).ready(function() {
                var timer;
                $("#item_code").on('change', function() {
                    if($(this).val()!= ''){
                        clearInterval(timer); 
                        timer = setTimeout(function() {
                            var srch = $('#item_code').val();
                                $.ajax({
                                    type: "POST",
                                    url: "itemcheck.php",
                                    data: "checkitem="+srch,
                                    cache: false,
                                    success: function(response){
                                        if(response == 1){
                                            $('#error-msg').html('');
                                            $('.message').css('display','none');
                                            $('#price-check-form').submit();
                                        }
                                        else{
                                            $('.message').css('display','block');
                                            $('#error-msg').html('Not Available! Please Enter A Valid Item Code!');
                                            $('#item_code').val('');
                                        }
                                    }
                                });
                        }, 700);
                    }
                    else{
                        $('#error-msg').html('');
                        $('.message').css('display','none');
                    }
                });
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