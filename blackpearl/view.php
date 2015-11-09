<?php 
  require "control/core/init.php";
  $current_url = Cryption::encryt64($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  
  Session::put('current_url',$current_url);
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

        <style type="text/css">
            .c-block { margin-bottom: 40px; }
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
                              <div class="dropdown-menu">
                                   <div class="updates-header">
                                        <span class="pull-left">Inbox <a href="#">(45)</a></span>
                                        <span class="pull-right"><a href="">Send new</a></span>
                                        <div class="clearfix"></div>
                                   </div>
                                   <div class="listview overflow">
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 David Villa <span class="date">2 Hrs ago</span><br>
                                                 <span class="shortline">Lorem ipsum dolor sit amet, per cu sole...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Jason Statom <span class="date">5 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Vandy come to ipsum seen tuooth ya so...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Lilly Jackson <span class="date">9 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Far schools wen smoothness prope soom...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Vin Diesal <span class="date">06 Nov</span><br>
                                                 <span class="shortline" class="shortline">Dolor boom with your cool sindims to the...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Jason Statom <span class="date">5 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Vandy come to ipsum seen tuooth ya so...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Lilly Jackson <span class="date">9 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Far schools wen smoothness prope soom...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Vin Diesal <span class="date">06 Nov</span><br>
                                                 <span class="shortline" class="shortline">Dolor boom with your cool sindims to the...</span>
                                             </div>
                                        </a>
                                   </div>

                                   <div class="updates-footer">
                                        <a href="">See All</a>
                                   </div>
                              </div>
                         </li>
                         <li class="dropdown">
                              <a href="" class="notifications ttips" data-toggle="dropdown" title="Notifications" data-placement="bottom">
                                   <img src="img/updates.png" alt="">
                              </a>
                              <div class="dropdown-menu">
                                   <div class="updates-header">
                                        <span class="pull-left">Notifications</span>
                                        <span class="pull-right"><a href="">Settings</a></span>
                                        <div class="clearfix"></div>
                                   </div>
                                   
                                   <!-- noti here -->
                              </div>
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
                            Editor::navbar(array('index','typo','socialwall','widget','table','form',
                              'UI','chart','photo','sample'),'tables'); 
                          ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>
               
               <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
                        <!-- Profile -->
                         <div class="shadowed side-profile text-center">
                            <div class="banner">
                                <img src="img/profile-bg.jpg" alt="" class="banner-img">
                                <a href="#" class="profile-pic">
                                  <img src="img/profile-pics/6.jpg" alt="" class="img-circle">
                                </a>
                            </div>
                            <h4>Hafiq Iqmal</h4>
                            <small>Class: A | Grade Two</small>
                            <div>
                              <a class="btn btn-gr-gray btn-sm" href="#">View Profile</a>
                            </div>
                         </div>
                         <!-- Date + Clock -->
                         <div class="clock shadowed">
                              <div id="date"></div>
                              <div id="time">
                                   <span id="hours"></span>
                                   :
                                   <span id="min"></span>
                                   :
                                   <span id="sec"></span>
                              </div>
                         </div>
                         
                         <!-- Calendar -->
                         <div class="shadowed side-calendar">
                              <div id="sidebar-calendar"></div>
                         </div>
                         
                         
                    </div>
                    
                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="fa fa-angle-left"></i>
                    </span>
               </aside>

            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Student List</h2>
                </header>
                
                <div class="row">
                    <?php 
                      if(Token::check(Input::get('tid')) && Input::get('sid')){
                         
                         $id = Cryption::decryt64(Input::get('sid'));

                         
                      }
                      else{
                    ?>
                    <div class="col-lg-12 col-xs-12 search-div" style="margin-bottom:10px">
                      <div class="col-xs-12 form-inline">
                        <input type="text" data-column="0" id="search-person" class="form-control col-xs-12" style="max-width:400px" placeholder='Search Student....'>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="col-xs-12 search-dis">
                        <div class="block">
                            <h2 style="margin:0px" class="resultc">Result Found:</h2>
                            <div class="config">
                              View By:
                              <a id="show-list" data-toggle="tooltip" data-original-title="List" class="ttips active">
                                  <i class="fa fa-list"></i>
                              </a>
                              <a id="show-table" data-toggle="tooltip" data-original-title="Tables" class="ttips">
                                  <i class="fa fa-table"></i>
                              </a>
                            </div>

                            <div class="listview search1">
                                
                                
                              
                            </div>
                            <div class="search2" style="display:none">
                              <table class="table table-bordered search-table" style="border:0px;margin-bottom:0px">
                                <thead>
                                  <tr>
                                    <th>Student ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Grade</th>
                                    <th>Birth Cert</th>
                                    <th style="width:47px">Picture</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  

                                </tbody>
                              </table>
                            </div>
                        </div> <!-- end Block -->
                      </div> <!-- end search-dis -->
                    </div>
                    <div class="col-lg-6 right-content" style="display:none" >
                      <div class="col-xs-12 col-lg-12">
                        <div class="block" style="padding-bottom:15px">
                          <h2>Student Detail</h2>
                          <div class="config">
                            <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a href="" data-toggle="tooltip" data-original-title="Close" class="ttips">
                                <i class="fa fa-close"></i>
                            </a>
                          </div>
                          <div class="block-body display-detail">
                            
                          </div>
                        </div>
                        <div class="block" style="padding-bottom:15px">
                          <h2 style="margin-bottom:0px">Purchase Detail</h2>
                          <div class="config">
                            <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a href="" data-toggle="tooltip" data-original-title="Close" class="ttips">
                                <i class="fa fa-close"></i>
                            </a>
                          </div>
                          <div class="block-body" style="padding:0">
                            <style type="text/css">
                              .cart-detail tbody td{ font-size: 11px}
                            </style>
                            <table class="table table-bordered cart-detail" style="border:0px;margin-bottom:0px">
                              <thead>
                                <tr>
                                  <th class="col-xs-3">Date</th>
                                  <th class="col-xs-3">Purchase ID</th>
                                  <th class="col-xs-2">Total</th>
                                  <th class="col-xs-4">Status</th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div><!-- right-content -->
                    <?php
                      } 
                    ?>
                </div> <!-- end row -->
                
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
          <script src="js/functions.js"></script>
          <script src="js/studentview.js"></script>
          
          <script type="text/javascript">
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
        