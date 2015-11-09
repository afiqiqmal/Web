<?php require "control/core/init.php";?>
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

                          <!-- Main Menu -->
                          <?php
                            Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'tables'); 
                          ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>
               
               <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
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
                         
                         <!-- Progress bar -->
                         <div class="shadowed side-progress">
                              <h3 class="title">Progress Bar</h3>
                              <div class="side-border">
                                   Joomla Website Development
                                   <div class="progress">
                                        <a href="#" data-toggle="tooltip" title="60%" class="yellow progress-bar ttips" style="width: 60%;">
                                             <span class="sr-only">60% Complete</span>
                                        </a>
                                   </div>
                              </div>
                              <div class="side-border">
                                   Opencart E-Commerce Website
                                   <div class="progress">
                                        <a href="#" data-toggle="tooltip" title="43%" class="green ttips progress-bar" style="width: 43%;">
                                             <span class="sr-only">43% Complete</span>
                                        </a>
                                   </div>
                              </div>
                              <div class="side-border">
                                   Social Media API
                                   <div class="progress">
                                        <a href="#" data-toggle="tooltip" title="81%" class="blue ttips progress-bar" style="width: 81%;">
                                             <span class="sr-only">81% Complete</span>
                                        </a>
                                   </div>
                              </div>
                              <div class="side-border">
                                   VB.Net Software Package
                                   <div class="progress">
                                        <a href="#" data-toggle="tooltip" title="10%" class="yellow ttips progress-bar" style="width: 10%;">
                                             <span class="sr-only">10% Complete</span>
                                        </a>
                                   </div>
                              </div>
                              <div class="side-border">
                                   Chrome Extension
                                   <div class="progress">
                                        <a href="#" data-toggle="tooltip" title="95%" class="ttips progress-bar red" style="width: 95%;">
                                             <span class="sr-only">95% Complete</span>
                                        </a>
                                   </div>
                              </div>
                         </div>
                       
                         <!-- Counts -->
                         <ul class="counts shadowed">
                              <li>
                                  <span class="big-text">23500+</span>
                                  <span class="sub-text">Facebook Likes</span>
                              </li>
                              <li>
                                  <span class="big-text">125600+</span>
                                  <span class="sub-text">Twitter Followers</span>
                              </li>
                              <li>
                                  <span class="big-text">362</span>
                                  <span class="sub-text">Support Tickets</span>
                              </li>
                         </ul>
                    </div>
                    
                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="fa fa-angle-left"></i>
                    </span>
               </aside>

            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Tables</h2>
                </header>
                
               

                <!-- Default Table -->
                <div class="c-block" id="defaultStyle">
                    <h3 class="block-title">Default Style</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jhon </td>
                                <td>Makinton </td>
                                <td>@makinton</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Malinda</td>
                                <td>Hollaway</td>
                                <td>@hollway</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Wayn</td>
                                <td>Parnel</td>
                                <td>@wayne123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Responsive Style -->
                <div class="c-block" id="responsiveTable">
                    <h3 class="block-title">Responsive Table</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                    <td>123@makinton</td>
                                    <td>mak@live.com</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                    <td>hollaway@mal</td>
                                    <td>holla@asianet.ch</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                    <td>wayn@3rt</td>
                                    <td>wayne-parn@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Bordered -->
                <div class="c-block" id="tableBordered">
                    <h3 class="block-title">Table Bordered</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                </div>
                
                <!-- Table Hover -->
                <div class="c-block" id="tableHover">
                    <h3 class="block-title">Table with Hover Style</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Table Condensed -->
                <div class="c-block" id="tableCondensed">
                    <h3 class="block-title">Table Condensed</h3>
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Table Striped -->
                <div class="c-block" id="tableStriped">
                    <h3 class="block-title">Table Striped</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>TB - Monthly</td>
                                    <td>05/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>TB - Monthly</td>
                                    <td>06/04/2012</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>TB - Monthly</td>
                                    <td>07/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>TB - Monthly</td>
                                    <td>08/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>TB - Monthly</td>
                                    <td>09/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Optional Row Classes -->
                <div class="c-block" id="tableColored">
                    <h3 class="block-title">Table with optional Row Classes</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Product</th>
                                    <th>Payment Taken</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>1</td>
                                    <td>TB - Monthly</td>
                                    <td>01/04/2012</td>
                                    <td>Approved</td>
                                </tr>
                                <tr class="success">
                                    <td>2</td>
                                    <td>TB - Monthly</td>
                                    <td>02/04/2012</td>
                                    <td>Declined</td>
                                </tr>
                                <tr class="warning">
                                    <td>3</td>
                                    <td>TB - Monthly</td>
                                    <td>03/04/2012</td>
                                    <td>Pending</td>
                                </tr>
                                <tr class="danger">
                                    <td>4</td>
                                    <td>TB - Monthly</td>
                                    <td>04/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr class="red">
                                    <td>5</td>
                                    <td>TB - Monthly</td>
                                    <td>05/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr class="green">
                                    <td>6</td>
                                    <td>TB - Monthly</td>
                                    <td>06/04/2012</td>
                                    <td>Pending</td>
                                </tr>
                                <tr class="blue">
                                    <td>7</td>
                                    <td>TB - Monthly</td>
                                    <td>07/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr class="yellow">
                                    <td>8</td>
                                    <td>TB - Monthly</td>
                                    <td>08/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                <tr class="dark">
                                    <td>9</td>
                                    <td>TB - Monthly</td>
                                    <td>09/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
        