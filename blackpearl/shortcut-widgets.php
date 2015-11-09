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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'widget-open-shortcut'); 
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
                    
                    <!-- Quick Menu -->
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

                    <!-- Picture Album -->
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

                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Shortcuts Widgets</h2>
                </header>
                
                <!-- Shortcut Widgets -->
                <a class="shortcut" href="">
                    <i class="fa fa-calendar"></i>
                    <span class="title">Events</span>
                    <span class="s-counts blue">60</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-download"></i>
                    <span class="title">Downloads</span>
                    <span class="s-counts red">14</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-rss"></i>
                    <span class="title">Connections</span>
                    <span class="s-counts green">99</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Sales</span>
                    <span class="s-counts yellow">07</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-play"></i>
                    <span class="title">Videos</span>
                    <span class="s-counts dark">54</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-copy"></i>
                    <span class="title">Reports</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-image"></i>
                    <span class="title">Images</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-home"></i>
                    <span class="title">Home</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-pencil"></i>
                    <span class="title">Edit / Write</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-paint-brush"></i>
                    <span class="title">Paint Format</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-camera"></i>
                    <span class="title">Camera</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-music"></i>
                    <span class="title">Music</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-book"></i>
                    <span class="title">Library</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file"></i>
                    <span class="title">File</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-reorder"></i>
                    <span class="title">Stack</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-folder"></i>
                    <span class="title">Folder</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-wifi"></i>
                    <span class="title">Wifi</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-barcode"></i>
                    <span class="title">Barcode</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-qrcode"></i>
                    <span class="title">QR Code</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-cart-plus"></i>
                    <span class="title">Cart</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Credit Card</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-calculator"></i>
                    <span class="title">Calculator</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-support"></i>
                    <span class="title">Support</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-phone"></i>
                    <span class="title">Phone</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-book"></i>
                    <span class="title">Address Book</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-clock-o"></i>
                    <span class="title">Clock</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-volume-up"></i>
                    <span class="title">Alarm</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-calendar"></i>
                    <span class="title">Calendar</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-print"></i>
                    <span class="title">Print</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-upload"></i>
                    <span class="title">Upload</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-undo"></i>
                    <span class="title">Undo</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-repeat"></i>
                    <span class="title">Redo</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-comments"></i>
                    <span class="title">Bubbles</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-user"></i>
                    <span class="title">User</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-search"></i>
                    <span class="title">Search</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Settings</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-bars"></i>
                    <span class="title">Bars</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-trash"></i>
                    <span class="title">Trash</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-tree"></i>
                    <span class="title">Tree</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-globe"></i>
                    <span class="title">Globe</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-link"></i>
                    <span class="title">Link</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file"></i>
                    <span class="title">Attachement</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-heart"></i>
                    <span class="title">Heart</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-star"></i>
                    <span class="title">Star</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="title">Thumbs Up</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-thumbs-down"></i>
                    <span class="title">Thumb Down</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-smile-o"></i>
                    <span class="title">Smiley</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-question"></i>
                    <span class="title">Question</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-info"></i>
                    <span class="title">Information</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-play"></i>
                    <span class="title">Play</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-pause"></i>
                    <span class="title">Pause</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Arrow Left</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-arrow-right"></i>
                    <span class="title">Arrow Right</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-arrow-down"></i>
                    <span class="title">Arrow Down</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-arrow-up"></i>
                    <span class="title">Arrow Up</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-code"></i>
                    <span class="title">Code</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-share"></i>
                    <span class="title">Share</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-google-plus"></i>
                    <span class="title">Google Plus</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-twitter"></i>
                    <span class="title">Twitter</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-rss"></i>
                    <span class="title">RSS</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-flickr"></i>
                    <span class="title">Flickr</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-vimeo-square"></i>
                    <span class="title">Vimeo</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-youtube"></i>
                    <span class="title">Youtube</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-dribbble"></i>
                    <span class="title">Dribbble</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-tumblr"></i>
                    <span class="title">Tumblr</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-yahoo"></i>
                    <span class="title">Yahoo</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-linkedin"></i>
                    <span class="title">Linkedin</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-stumbleupon"></i>
                    <span class="title">Stumbleupon</span>
                </a>              
                <a class="shortcut" href="">
                    <i class="fa fa-pinterest"></i>
                    <span class="title">Pinterest</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-paypal"></i>
                    <span class="title">Paypal</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-facebook"></i>
                    <span class="title">Facebook</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-instagram"></i>
                    <span class="title">Instagram</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file-pdf-o"></i>
                    <span class="title">PDF</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file-word-o"></i>
                    <span class="title">Word</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file-excel-o"></i>
                    <span class="title">Excel</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-file-zip-o"></i>
                    <span class="title">Zip</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-angle-right"></i>
                    <span class="title">Right</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-angle-left"></i>
                    <span class="title">Left</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-angle-up"></i>
                    <span class="title">Top</span>
                </a>
                <a class="shortcut" href="">
                    <i class="fa fa-angle-down"></i>
                    <span class="title">Bottom</span>
                </a>
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
        