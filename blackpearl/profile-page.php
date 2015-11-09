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
    </head>
    
    <body>
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
                         <?php
                        //Main Menu bar
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'sample-open-profile'); 
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
                    <!-- News Feeds -->
                    <div class="shadowed news-feed">
                        <h3 class="title">News Feeds</h3>
                        <div id="news-feed" class="overflow"></div>
                    </div>
                    
                    <!-- Form -->
                    <div class="shadowed side-form">
                         <h3 class="title">Admin Contact</h3>
                         <form id="side-form" action="/">
                              <div class="form-group">
                                   <input type="text" class="input-sm form-control" placeholder="Name">
                              </div>
                              <div class="form-group">
                                   <input type="email" class="input-sm form-control" placeholder="Email Address">
                              </div>
                              
                              <div class="form-group">    
                                   <textarea class="input-sm form-control"></textarea>
                              </div>
                              
                              <input type="submit" class="btn btn-warning btn-block btn-xs" value="SEND">
                         </form>
                    </div>
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content">

                <div class="cover">
                    <img class="banner-img" src="img/cover-bg.jpg" alt="" />
                    <img class="profile-pic" src="img/profile-pics/profile-page.jpg" alt="" />
                    
                    <div class="profile-btn">
                        <span>Ahmad Jalani</span>
                        <a class="setting" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                          <i class=" fa fa-cog"></i>
                        </a>
                    </div>
                </div>
                
                <div class="row m-container">
                    
                    <!-- About me -->
                    <div class="col-md-6 simple-list masonry">	      
                        <div class="block">          
                            <h2><a href="#">About me</a></h2>
                            <div class="config">                        
                                <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                     <i class="fa fa-wrench"></i>
                                </a>
	                          </div>           
                            
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="media">
                                        <i class="fa fa-briefcase pull-left"></i> 
                                        <div class="media-body">
                                            Software Developer at Google Inc.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <i class="fa fa-building pull-left"></i>
                                        <div class="media-body">
                                            Studied at Teknology Mara University
                                        </div>
                                    </div> 
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <i class="fa fa-home pull-left"></i>
                                        <div class="media-body">
                                            Lives in Selangor, MY
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <i class="fa fa-compass pull-left"></i>
                                        <div class="media-body">
                                            From Klang
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                      </div>
                  
                    
                  </div>
                </div>			
            </section>
        </section>
        
        <!-- Javascipt -->
        <script src="js/jquery-1.11.3.js"></script>
        <script src='js/jquery-ui-1.11.4.min.js'></script>
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
            //Masonry
            $(window).load(function(){
               $('.m-container').masonry({
                    itemSelector: '.masonry'
               });  
            });

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
        