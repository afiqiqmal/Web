<?php 
  require "control/core/init.php";

  $current_url = Cryption::encryt64($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  
  Session::put('current_url',$current_url);

  $total = 0;
  $total_item =0 ;
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="">
         <meta name="keywords" content="">
         <meta charset="UTF-8">
         
         <!-- CSS -->
         <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
         <link href="css/calendar.min.css" rel="stylesheet">
         <link href="css/media-player.min.css" rel="stylesheet">
         <link href="css/form.min.css" rel="stylesheet">
         <link href="css/style.min.css" rel="stylesheet">
         <!-- CSS font -->
         <link href="css/icomoon.min.css" rel="stylesheet">
         <link href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
         

         <link rel="stylesheet" type="text/css" href="css/sales.css">

          <style type="text/css">
            .dataTables_length{
              display: none;
            }
            .dataTables_empty{
              text-align: center;
            }
          </style>

    </head>
    
    <body>
        <div id="overlay"><img id="loading" src="img/loader.gif"></div>
        <!-- Header -->
          <header id="header" class="clearfix">
               <!-- Logo -->
               <a href="index.php" class="logo shadowed">MHI ADMIN V1.0 BETA</a>
               
               <div class="dropdown profile-menu shadowed">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <img src="img/profile-pics/profile-pic.png" alt="" class="profile-pic">
                    </a>
                    <ul class="dropdown-menu pull-right text-right">
                         <li><a href="">Update Profile</a></li>
                         <li><a href="">Notifications & Updates</a></li>
                         <li><a href="">Settings</a></li>
                         <li class="divider"></li>
                         <li><a href="">Sign-Out</a></li>
                    </ul>
               </div>
               
               <ul class="nav nav-pills pull-right shadowed" id="top-menu">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<b class="caret"></b></a>
                         <ul class="dropdown-menu">
                              <li><a href="">Action</a></li>
                              <li><a href="">Another action</a></li>
                              <li><a href="">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a></li>
                         </ul>
                    </li>
                    <li><a href="#">Users</a></li>
               </ul>
               
               <form class="form-inline top-search shadowed">
                    <input type="text" class="form-control" placeholder="Search for anything...">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
               
               <div class="updates shadowed pull-right">
                    <ul class="list-unstyled list-inline">
                         <li class="dropdown">
                              <a href="" data-toggle="dropdown" class="messages ttips" title="Messages" data-placement="bottom">
                                   <img src="img/message.png" alt="">
                              </a>
                         </li>
                         <li class="dropdown">
                              <a href="" class="notifications ttips" data-toggle="dropdown" title="Notifications" data-placement="bottom">
                                   <img src="img/updates.png" alt="">
                              </a>
                         </li>
                    </ul>
               </div>
               
          </header>
          
          <section id="main" role="main">
               
               <!-- Left Sidebar -->
               <aside id="leftbar" class="pull-left">
                    <div class="sidebar-container">
                          <!-- Main Menu -->
                          <?php
                            Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'sample-open-sales'); 
                          ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs visible-lg sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>
               

            <!-- Content -->
            <section id="content" class="container" style="min-height:600px">
                <header class="p-header">
                    <h2 class="p-title">Sales</h2>
                </header>
                <?php
                if(Session::exists('select_stud')){
                ?>
                <!-- MENU BROWSE BAR-->
                <div class="menu-top hidden-xs">
                  <div class="topbar-container container">
                    <div class="browse">
                      <div class="title">Choose Category</div>
                      <label class="main" id="drink">
                        <div class="thumb">
                          <img src="img/sales/sirap.jpg">
                        </div>
                        <span>Drink</span>
                      </label>
                      <label class="main" id="food">
                        <div class="thumb">
                          <img src="img/sales/nlemak.jpg">
                        </div>
                        <span>Food</span>
                      </label>
                      <label class="main" id="junk">
                        <div class="thumb">
                          <img src="img/sales/junk.jpg">
                        </div>
                        <span>Junk</span>
                      </label>
                    </div>
                  </div>
                  <span id="topbar-toggle" class="top-toggle">
                    <label><i class="fa fa-arrow-down"></i> <span>BROWSE FOOD </span><i class="fa fa-arrow-down"></i></label>
                  </span>
                </div>

                <style type="text/css">

                </style>
                <!-- Cart List Table-->
                <div class="c-block row" >
                    <div class="col-lg-8 col-xs-12 table-responsive" style="overflow-y:hidden!important">
                      <form class="form" style="margin-bottom:30px" action="cart.php" method="post">
                        <div class="form-group col-xs-4 col-lg-6" style="padding:0px;">
                          <input type="text" class="form-control" id="search-item" placeholder="Search Item" name="s-item" autocomplete="off">
                        </div>
                        <div class="form-group col-xs-8 col-lg-6" style="padding:0px;">
                          <a class="btn btn-primary pull-right">Close Register</a>
                          <a href="cart.php?detachcart=1" class="btn btn-warning pull-right">Clear Cart List</a>
                          <a href="cart.php?detachall=1" class="btn btn-danger pull-right">Cancel Sales</a>
                        </div>
                      </form>
                      <div class="search-dis" style="width:400px">
                        
                      </div>
                      <table class="table table-hover table-bordered table-item">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Item ID</th>
                                <th class="col-lg-5">Item Name</th>
                                <th class="col-lg-1">Quanity</th>
                                <th>Price (RM)</th>
                                <th>Total Price (RM)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(Session::exists('products')){
                              foreach (Session::get('products') as $cart_itm) {
                                echo '<tr class="row-close">';
                                  echo '<td><a class="fa fa-close" href="cart.php?removep='.$cart_itm["item_id"].'&bac=item"></a></td>';
                                  echo '<td>'.$cart_itm['item_id'].'</td>';
                                  echo '<td>'.$cart_itm['item_name'].'</td>';
                                  echo '<td class="editfield">'.$cart_itm['item_qty'].'</td>';
                                  echo '<td>'.$cart_itm['item_price'].'</td>';
                                  echo '<td>'.number_format((float)$cart_itm['item_total'], 2, '.', '').'</td>';
                                echo '</tr>';

                                $total_item += $cart_itm['item_qty'];
                                $total += $cart_itm['item_total'];
                              }
                            }
                        ?>
                        </tbody>
                      </table>
                      
                      <div>* double click on quantity to modify value 
                        <span class="pull-right key-shortcut">
                          <i class="fa fa-keyboard-o"></i> Shortcut
                        </span>
                      </div>

                      <!--history -->
                      <?php
                      if(Session::exists('select_stud')){
                        $sql = "";
                      ?>
                        <div class="content-history visible-lg visible-md">
                          <h3 class="block-title">Student History</h3>
                          <div class="pull-right">
                            <label>Filter Output By:</label>
                            <input type="button" class="btn btn-default data-all" value="All" data-column="0">
                            <input type="button" class="btn btn-default data-today" value="Today" data-column="0">
                            <a class="btn btn-default data-month">Range</a>
                              <div class="input-icon datetime-pick date-only range pull-right" style="display:none;">
                                  <input data-format="dd/MM/yyyy" type="text" class="form-control input-sm" id="range-to" placeholder="TO"/>
                                  <span class="add-on">
                                        <i class="fa fa-calendar"></i>
                                  </span>
                              </div>
                              <div class="input-icon datetime-pick date-only range pull-right" style="padding-left:5px;display:none;">
                                  <input data-format="dd/MM/yyyy" type="text" class="form-control input-sm" id="range-from" placeholder="FROM"/>
                                  <span class="add-on">
                                        <i class="fa fa-calendar"></i>
                                  </span>
                              </div>
                          </div>
                          
                          <table class="table table-bordered table-history">
                            <thead>
                                <tr>
                                    <th class="col-lg-2">Date Purchase</th>
                                    <th>Purchase ID</th>
                                    <th class="col-lg-2">Price Total (RM)</th>
                                    <th class="col-lg-2">Status</th>
                                </tr>
                            </thead>
                            
                          </table>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                    <!-- Sidebar cartlist -->
                    <div class="col-lg-4 sidebar-item">
                      <!-- Person detail block -->
                      <div class="col-lg-12 col-xs-12 col-md-6">
                        <div class="block">
                          <h2>Customer Detail</h2>
                          <div class="config">                        
                            <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a href="cart.php?removes=1" data-toggle="tooltip" data-original-title="Remove this" class="ttips">
                                <i class="fa fa-close"></i>
                            </a>
                          </div>
                          <?php
                            $obj = Session::get('select_stud');
                            echo '<div class="block-body">';
                            echo '<div class="col-xs-8 detail" style="padding:0px;">';
                              echo '<table style="border:0px!important;margin-bottom:10px">';
                                echo '<tr>';
                                  echo '<td>Name</td>';
                                  echo '<td>'.$obj[0]->stud_fname.'</td>';
                                echo '</tr>';
                                echo '<tr>';
                                  echo '<td>Grade</td>';
                                  echo '<td>'.$obj[0]->stud_grade.'</td>';
                                echo '</tr>';
                                echo '<tr>';
                                  echo '<td>Class</td>';
                                  echo '<td>'.$obj[0]->class_name.'</td>';
                                echo '</tr>';
                                echo '<tr>';
                                  echo '<td>Contact</td>';
                                  echo '<td>'.$obj[0]->p1_phone.'</td>';
                                echo '</tr>';
                              echo '</table>';
                            echo '</div>';
                          ?>
                          <div class="col-xs-4 pic" style="padding:0px;">
                            <a href="img/profile-pics/student/<?php echo $obj[0]->dp_name ?>" data-rel="shadowbox[album]" class="img-popup" title="<?php echo $obj[0]->stud_fname ?>">
                              <i class="icon-expand"></i>
                              <img class="block" src="data:image;base64,<?php echo $obj[0]->stud_dp ?>" alt="">
                            </a>
                          </div>
                        </div>
                        </div>
                      </div>

                      <!-- Total block for total price display -->
                      <?php
                      if(Session::exists('products') && Session::get('products') != null){

                        $get_sales = new Sales();
                        $sub = $get_sales->sub_price();
                        $gst = $get_sales->sub_tax();
                        $pay = $get_sales->calc_total();
                      ?>
                        <div class="col-lg-12 col-xs-12 col-md-6">
                          <div class="block">
                            <h2>Total</h2>
                            <div class="block-body">
                              <div style="border-bottom:1px solid gray">
                                <label>Item in Cart</label>
                                <span class="pull-right"><?php echo $total_item?></span>
                              </div>
                              <div>
                                <label>Sub Price</label>
                                <span class="pull-right">RM <?php echo $sub ?></span>
                              </div>
                              <div>
                                <label>Service Tax 10%</label>
                                <span class="pull-right">RM <?php echo $gst?></span>
                              </div>
                              <?php
                                if(!$get_sales->validatePurchase($pay,$obj[0]->stud_id)){
                                  Session::put('exceed_price','Maximum purchase of today');
                                  echo '<div style="border:2px dashed red;font-weight:bold;font-size:15px;color:red;padding:2px">
                                          <span>Total Price</span>
                                          <span class="pull-right"><i class="fa fa-close"></i>  RM '.$pay.'</span>
                                        </div>';
                                  echo "<script>alert('".Session::get('exceed_price')."');</script>";
                                }
                                else{
                                  Session::delete('exceed_price');
                                  echo '<div style="border:2px dashed gray;font-weight:bold;font-size:15px;padding:2px">
                                          <span>Total Price</span>
                                          <span class="pull-right"><i class="fa fa-arrow-right"></i>  RM '.$pay.'</span>
                                        </div>';
                                  Session::put('pay-cart',$pay);
                                }
                              
                              if(!Session::exists('exceed_price')){
                                echo '<div style="margin-top:30px;">';
                                  echo '<a href="cart.php?" class="btn btn-success btn-block" style="font-size:15px;">Finish Transaction?</a>';
                                echo '</div>';
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                      
                    </div>
                  </div>
                </div>
                <?php
                }
                else{
                ?>
                  <div class="content" style="max-width:400px;margin:0 auto;text-align:center">
                    <?php
                      if(Session::exists('verify_error')){
                        echo '<div class="alert alert-danger alert-dismissable fade in">';
                            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                          echo Session::get('verify_error');
                        echo '</div>';
                      }
                    ?>
                    <form method="post" action="cart.php?sel=1" class="form-validation" role="form">
                     <input type="text" class="input-sm form-control validate[required]" name="scan-stud">
                     <button type="submit" class="btn btn-primary">Scan FingerPrint</button>
                    </form>
                  
                  </div>
                <?php
                }
                ?>
            </section>
        </section>
        
        <!-- Javascipt -->
          <script src="js/jquery-1.11.3.js"></script>
          <script src='js/jquery-ui-1.11.4.min.js'></script>
          <script src="js/chart/highcharts.js"></script>
          <script src="js/chart/modules/exporting.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/feeds.js"></script>
          <script src="js/chosen.js"></script>
          <script src="js/shadowbox.js"></script>
          <script src="js/sparkline.min.js"></script>
          <script src="js/masonry.min.js"></script>
          <script src="js/enscroll.min.js"></script>
          <script src='js/calendar.min.js'></script>
          <script src='js/datatables.min.js'></script>
          <script src='js/autosize.min.js'></script>
          <script src='js/select.min.js'></script>
          <script src="js/toggler.min.js"></script>
          <script src="js/datetimepicker.min.js"></script>
          <script src="js/colorpicker.min.js"></script>
          <script src="js/fileupload.min.js"></script>
          <script src="js/media-player.js"></script>
          <script src="js/validation/validate.min.js"></script>
          <script src="js/validation/validationEngine.min.js"></script>
          <script src="js/jquery.vticker.js"></script>
          <script src="js/sales.js"></script>
          <script src="js/functions.js"></script>
          
          <script type="text/javascript">

             $(window).load(function(){
                $('.m-container').masonry({
                  itemSelector: '.masonry'
                });
              });
              // body switch 
               $(document).ready(function(){
                    
                    <?php
                      if(Session::exists('bodybg') && Session::exists('bodycss')){
                        echo "$('".Session::get('bodybg')."').css('background','".Session::get('bodycss')."');";
                        echo "$('#leftbar-toggle,#rightbar-toggle').css('background','".Session::get('bodycss')."');";
                      }
                      if(Session::exists('contbg') && Session::exists('contcss')){
                        echo "$('".Session::get('contbg')."').css('background','".Session::get('contcss')."');";
                      }
                    ?>
               });       
        </script>
    </body>
</html>
        