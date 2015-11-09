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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'sample-open-list'); 
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
                         <h4>Ahmad Jalani</h4>
                         <small>Class: A | Grade Two</small>
                         <a class="btn btn-gr-gray btn-sm" href="#">View Student Profile</a>
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
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                
                <div class="listview">
                    
                    <header class="media listview-header">
                        <label class="pull-left">
                             <input class="check-all" type="checkbox" value="">
                        </label>
                        <a href="#" class="btn btn-sm btn-gr-gray">
                            Add New
                        </a>
                        <a href="#" class="btn btn-sm btn-gr-gray list-delete-all">
                            Delete
                        </a>
                        
                        <div class="input-group list-view-search">
                            <input type="text" class="form-control input-sm">
                            
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-gr-gray btn-sm">
                                    <i class="icon-search"></i>
                                </button>
                            </div>    

                        </div>
                        <div class="clearfix"></div>
                    </header>

                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Nulla vel metus scelerisque ante sollicitudin commodo purus odio
                            <div class="list-options">
                                <button class="btn btn-gr-gray btn-sm">Delete</button>
                                <button class="btn btn-gr-gray btn-sm">View</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                            <div class="block attrs">
                                Date Created: 09/06/1988
                            </div>
                            <div class="block attrs">
                                Members: 78954
                            </div>
                            <div class="block attrs">
                                Published: No
                            </div>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                            <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small><br/>
                            <div class="block attrs">
                                Date Created: 25/12/2012
                            </div>
                            <div class="block attrs">
                                Members: 3978
                            </div>
                            <div class="block attrs">
                                Published: Yes
                            </div>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Inermis patrioque temporibus at ius, eos ei case partem blandit<br/>
                            <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Eam utamur ceteros ei, per no feugiat saperet omittantur. Qui et erant nonumes abhorreant, eirmod omnium.<br/>
                            <small>Lorem ipsum dolor sit amet, per cu solet docendi</small>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            Nulla vel metus scelerisque ante sollicitudin commodo purus odio.<br/>
                            <small>Lorem ipsum dolor sit amet, per cu solet docendi</small>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam, te vix ipsum quando facilisis, admodum eleifend quaerendum sed cu. Sale aperiam oportere has an, mea et commodo alterum perpetua, vim ea invidunt efficiendi. Copiosae definitiones est ex, no oportere urbanitas elaboraret qui, et dicit sadipscing vel.
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                        </a>
                        <div class="media-body">
                            Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                            <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small><br/>
                            <div class="block attrs">
                                Date Created: 01/01/2013
                            </div>
                            <div class="block attrs">
                                Members: 17580
                            </div>
                            <div class="block attrs">
                                Published: Yes
                            </div>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Wel ea elit iuvaret. Mea labitur definitiones ex, id atqui accusata vix, vim nibh mandamus ad<br/>
                            <small>Wendy create ipsum dolor sit amet, per cu solet docendi ntoenstion</small>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    
                    <div class="media">
                        <label class="pull-left">
                              <input class="check-all" type="checkbox" value="">
                        </label>
                        <div class="media-body">
                            Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                            <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small><br/>
                            <div class="block attrs">
                                Date Created: 18/06/2013
                            </div>
                            <div class="block attrs">
                                Members: 610
                            </div>
                            <div class="block attrs">
                                Published: No
                            </div>
                        </div>
                        <div class="list-options">
                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                            <button class="btn btn-gr-gray btn-sm">View</button>
                        </div>
                    </div>
                    <p></p>
                    <ul class="pagination pull-right">
                        <li><a href="#"><i class="icon-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="icon-angle-right"></i></a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
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
        