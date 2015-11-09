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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'photo-open-sort'); 
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
                         <!-- Photo Slides -->
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
                        <i class="icon-angle-left"></i>
                   </span>
               </aside>
               
               <!-- Content -->
               <section id="content" class="container">
                    <header class="p-header">
                         <h2 class="p-title">Photo Gallery - Sortable</h2>
                    </header>
                    
                    <div class="gallery-container">
                         <div class="gallery-sort">
                              <ul class="pager">
                                   <li><a class="active" href="#all">All</a></li>
                                   <li><a href="#technology">Technology</a></li>
                                   <li><a href="#science">Science</a></li>
                                   <li><a href="#fashion">Fashion</a></li>
                                   <li><a href="#gadgets">Gadgets</a></li>
                              </ul>
                         </div>
                         
                         <div class="thumbs-container">
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/1.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/10.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/9.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/8.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/2.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/3.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/11.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/12.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/13.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/14.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/4.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/5.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/6.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/15.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/16.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/17.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/18.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/19.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/20.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/21.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/22.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/23.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/24.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/25.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/26.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/27.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="science">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/28.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="fashion">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/29.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="gadgets">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/30.jpg" alt="">
                                   </a>
                              </article>
                              
                              <article class="gallery-thumb" data-category="technology">
                                   <a href="img/gallery/preview.jpg" data-rel="shadowbox[album]" class="img-popup" title="Image title goes here">
                                        <i class="icon-expand"></i>
                                        <img class="block thumbnail" src="img/gallery/thumbs/7.jpg" alt="">
                                   </a>
                              </article>
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
               //Masonry for Thumbnails
               $(window).load(function(){
                    $('.thumbs-container').masonry({
                         columnWidth: 165,
                         itemSelector: '.gallery-thumb',
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
               