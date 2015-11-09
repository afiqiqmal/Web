<?php require "control/core/init.php";?>
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
          
          <!-- custom page css -->
          <style type="text/css">
               .sidebar { width: 230px; margin-bottom: 15px; }
          </style>
          
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
                         <li><a href="">Notifications &amp; Updates</a></li>
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
          
          <section id="main" role="main" class="container">
               <!--
                    Note:
                    Each widget is placed inside <aside> tags in order to dipict they are inside an actual sidebar.
                    When you are placing the sidebar widgets, you can place morethan 1 widgets in a single <aside>
               -->
               
               <!-- Main Menu -->
               <aside class="sidebar">
                        <?php
                        //Main Menu bar
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'widget-open-sidebar'); 
                        ?>
               </aside>
          
               <!-- Social Counts -->
               <aside class="sidebar">
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
               </aside>
               
               <!-- Notification -->
               <aside class="sidebar">
                    <div class="notification shadowed">
                         <ul class="tab">
                              <li class="active">
                                   <a href="#inbox"><i class="fa fa-circle"></i> Inbox</a>
                              </li>
                              <li>
                                   <a href="#notification"><i class="fa fa-globe"></i> Notifications</a>
                              </li>
                         </ul>
                            
                         <div class="tab-content">
                              <div class="tab-pane active" id="inbox">
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/5.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Hay I just talk to Wendy...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/2.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">We have something to do...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/4.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">How do you do...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">What's up buddy? I won't...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/3.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Just check this up for...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   
                                   <a class="show-more" href="#">See All</a>
                              </div>
                              <div class="tab-pane" id="notification">
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">David responded to you...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/2.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Wrndy like you post...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/3.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Jonathan completed the task...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/5.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Malinda responded to you...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img src="img/profile-pics/1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <a href="#">Henry poke you back...</a>
                                             <small>4 hours ago</small>
                                        </div>
                                   </div>
                                   <a class="show-more" href="#">See All</a>
                              </div>
                         </div>    
                    </div>
               </aside>
               
               <!-- Quick Menu -->
               <aside class="sidebar">
                    <ul class="side-menu shadowed">
                         <li class="title">Quick Menu</li>
                         <li><a href="#">Add New Article</a></li>
                         <li><a href="#">Media Manager</a></li>
                         <li><a href="#">User Manager</a></li>
                         <li><a href="#">Global Configuration</a></li>
                         <li><a href="#">External Links</a></li>
                         <li><a href="#">Support Desk</a></li>
                         <li><a href="#">Questions & Answers </a></li>
                    </ul>
               </aside>
               
               <!-- Date + Clock -->
               <aside class="sidebar">
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
               </aside>
               
               <!-- Search -->
               <aside class="sidebar">
                    <form class="form-inline top-search shadowed">
                         <input type="text" class="form-control" placeholder="Search for anything...">
                         <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
               </aside>
               
               <!-- News Feeds -->
               <aside class="sidebar">
                    <div class="shadowed news-feed">
                         <h3 class="title">News Feeds</h3>
                         <div id="news-feed" class="overflow"></div>
                    </div>
               </aside>
               
               <!-- Photo Slides -->
               <aside class="sidebar">
                    <div class="shadowed photo-slide">
                         <h3 class="title">Photo Slides</h3>
                         <div id="photoSlide" class="carousel slide">
                              <div class="carousel-inner">
                                <div class="active item"><img src="img/gallery/thumbs/1.jpg" alt=""/></div>
                                <div class="item"><img src="img/gallery/thumbs/2.jpg" alt=""/></div>
                                <div class="item"><img src="img/gallery/thumbs/3.jpg" alt=""/></div>
                              </div>
                              <!-- Carousel nav -->
                              <a class="carousel-control left" href="#photoSlide" data-slide="prev">
                                   <i class="icon-double-angle-left icon-prev"></i>
                              </a>
                              <a class="carousel-control right" href="#photoSlide" data-slide="next">
                                   <i class="icon-double-angle-right icon-next"></i>
                              </a>
                         </div>         
                    </div>
               </aside>
               
               <!-- States -->
               <aside class="sidebar">
                    <div class="shadowed states">
                         <h3 class="title">Bar Chart</h3>
                         <div class="side-border">
                              <div id="site-visits" class="tiny-charts"></div>
                              <small class="small">Site Daily Visits</small>
                         </div>
                         <div class="side-border">
                              <div id="site-impressions" class="tiny-charts"></div>
                              <small class="small">Site Impressions</small>
                         </div>
                         <div class="side-border">
                              <div id="site-bandwith" class="tiny-charts"></div>
                              <small class="small">Site Bandwith(mb)</small>
                         </div>
                    </div>
               </aside>
               
               <!-- Pie Chart -->
               <aside class="sidebar">
                    <div class="shadowed states">
                         <h3 class="title">Pie Chart</h3>
                         <div class="side-border text-center">
                              <div id="side-pie" class="tiny-charts side-pie-large shadowed"></div>
                              <small class="small">Pie Chart with 3 values</small>
                         </div>
                         <div class="side-border text-center">
                              <div id="side-pie2" class="tiny-charts side-pie-tiny shadowed"></div>
                              <div id="side-pie3" class="tiny-charts side-pie-tiny shadowed"></div>
                              <small class="small">Tiny Pie Charts</small>
                         </div>
                         
                    </div>
               </aside>
               
               <!-- Line Chart -->
               <aside class="sidebar">
                    <div class="shadowed states">
                         <h3 class="title">Line Chart</h3>
                         <div class="side-border">
                              <div id="side-line" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line2" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 2</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line3" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 3</small>
                         </div>
                    </div>
               </aside>
               
               <!-- Calendar -->
               <aside class="sidebar">
                    <div class="shadowed side-calendar">
                         <div id="sidebar-calendar"></div>
                    </div>
               </aside>
               
               <!-- Form -->
               <aside class="sidebar">
                    <div class="shadowed side-form">
                         <h3 class="title">Form</h3>
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
               </aside>
               
               <!-- Collapse -->
               <aside class="sidebar">
                    <div class="shadowed accordion side-collapse">
                         <h3 class="title">Collapse</h3>
                         <div class="panel-group" id="accordion">
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quote of the day</a>
                                        </h3>
                                   </div>
                                   <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Most popular Quote</a>
                                        </h3>
                                   </div>
                                   <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Quote the most viewed</a>
                                        </h3>
                                   </div>
                                   <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Quote the most viewed</a>
                                        </h3>
                                   </div>
                                   <div id="collapseFour" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </aside>
               
               <!-- Progress bar -->
               <aside class="sidebar">
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
               </aside>
               
               <!-- Information -->
               <aside class="sidebar">
                    <div class="shadowed information">
                         <h3 class="title">Information</h3>
                         <p class="info-body overflow"><i class="fa fa-info"></i>Nulla tempor dolor dolor, eu lacinia tellus ultricies vel. Mauris arcu lorem, tincidunt id eros at, interdum tempor lorem. Vestibulum nec lectus vehicula, pellentesque risus ac, facilisis dolor. Duis elementum nisi ipsum, at consectetur sapien ultricies vitae. Mauris non cursus risus. Donec adipiscing, nibh quis mollis vulputate, arcu nisi scelerisque diam, nec pellentesque nunc magna sed risus. Quisque a magna porttitor justo sagittis vehicula. Duis vitae adipiscing nunc, a ullamcorper neque.
                         </p>
                    </div>
               </aside>
               
               <!-- Picture Album -->
               <aside class="sidebar">
                    <div class="shadowed p-album">
                         <h3 class="title">Picture Album</h3>
                         <div class="p-album-body text-center">
                              <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/1.jpg" alt="">
                              </a>
                              <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/2.jpg" alt="">
                              </a>
                              <a href="img/gallery/3.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/3.jpg" alt="">
                              </a>
                              <a href="img/gallery/4.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/4.jpg" alt="">
                              </a>
                              <a href="img/gallery/5.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/5.jpg" alt="">
                              </a>
                              <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/2.jpg" alt="">
                              </a>
                              
                         </div>
                    </div>
               </aside>
                    
               <!-- Tristate Chart -->
               <aside class="sidebar">
                    <div class="shadowed side-tristate">
                         <h3 class="title">Tristate Chart</h3>
                         <div class="side-border">
                              <div id="side-tristate"></div>
                              <small class="small">Sample Tristate chart-1</small>
                         </div>
                         <div class="side-border">
                              <div id="side-tristate2"></div>
                              <small class="small">Sample Tristate chart-2</small>
                         </div>
                    </div>
               </aside>
               
               <!-- Profile -->
               <aside class="sidebar">
                    <div class="shadowed side-profile text-center">
                         <div class="banner">
                              <img src="img/profile-bg.jpg" alt="" class="banner-img">
                              <a href="#" class="profile-pic">
                                   <img src="img/profile-pics/6.jpg" alt="" class="img-circle">
                              </a>
                         </div>
                         <h4>Malinda Hollaway</h4>
                         <small>24 Followers | 38 Following</small>
                         <a class="btn btn-gr-gray btn-sm" href="#">Follow Malinda</a>
                    </div>
               </aside>    
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
               //Masonry for widgets
               $(window).load(function(){
                    $('.container').masonry({
                         columnWidth: 230,
                         itemSelector: '.sidebar'
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
               