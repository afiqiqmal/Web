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
            
        <!-- custom page css -->
        <style type="text/css">
            .c-block { margin-bottom: 10px; display: inline-block; width: 100%; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'ui-open-media'); 
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
                <header class="p-header">
                    <h2 class="p-title">Components</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="icon-angle-down"></span></a>
                        <ul class="dropdown-menu pull-right text-right" role="menu">
                            <li><a href="#lightbox">Lightbox</a></li>
                            <li><a href="#media-player">Media Player</a></li>
                        </ul>
                    </div>
                </header>		
                
                <!-- Lightbox -->
                <div class="c-block" id="lightbox">
                    <h3 class="block-title">Lightbox</h3>
                    
                    <p>Lightbox is used to open Images without refreshing the page as a popup.</p>
                    <p>Single Image (Click to open)</p>
                    <a href="img/gallery/1.jpg" data-rel="shadowbox" class="img-popup" title="Lovely evening in Noreway">
                        <i class="icon-expand"></i>
                        <img src="img/gallery/thumbs/1.jpg" alt="" width="150">
                    </a>
                    
                    <br /><br />
                    
                    <p>Image Album (Click to open)</p>
                    <div class="album-post">
                        <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                            <i class="icon-expand"></i>
                            <img src="img/gallery/thumbs/1.jpg" alt="">
                        </a>
                        <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Sed ultrices orci iaculis augue tincidunt gravida">
                            <i class="icon-expand"></i>
                            <img src="img/gallery/thumbs/2.jpg" alt="">
                        </a>
                        <a href="img/gallery/3.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Donec ullamcorper malesuada magna mollis pellentesque">
                            <i class="icon-expand"></i>
                            <img src="img/gallery/thumbs/3.jpg" alt="">
                        </a>
                        <a href="img/gallery/4.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Aliquam tincidunt auctor nibh non convallis">
                            <i class="icon-expand"></i>
                            <img src="img/gallery/thumbs/4.jpg" alt="">
                        </a>
                        <a href="img/gallery/5.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Quelorem venenatis aliquet enim non venenatis">
                            <i class="icon-expand"></i>
                            <img src="img/gallery/thumbs/5.jpg" alt="">
                        </a>
                    </div>   
                </div>
                
                <div class="divider"></div>
                
                <!-- Media Player -->
                <div class="c-block" id="media-player">
                    <h3 class="block-title">Media Player</h3>
                    
                    <!-- Video -->
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Multi-Codec with no JavaScript fallback player - Cross Browser</p>
                            <video  width="100%" height="100%" id="player1" poster="img/media-player/media-player-poster.jpg" controls="controls" preload="none">
                              <!-- MP4 source must come first for iOS -->
                              <source type="video/mp4" src="media/echohereweare.mp4" />
                              <!-- WebM for Firefox 4 and Opera -->
                              <source type="video/webm" src="media/echohereweare.webm" />
                              <!-- OGG for Firefox 3 -->
                              <source type="video/ogg" src="media/echohereweare.ogv" />
                              <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                              <object width="100%" height="100%" type="application/x-shockwave-flash" data="media/flashmediaelement.swf">    
                                <param name="movie" value="media/flashmediaelement.swf" /> 
                                <param name="flashvars" value="controls=true&amp;file=media/echohereweare.mp4" />     
                                <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                                <img src="img/media-player/media-player-poster.jpg" width="100%" height="100%" alt="Here we are" title="No video playback capabilities" />
                              </object>   
                            </video>
                        </div>
                        
                        <div class="col-lg-6">
                            <p>Youtube Video</p>
                            <video id="youtube1" width="100%" height="100%" width="600" height="400">
                                <source src="https://www.youtube.com/watch?v=JunisJEHDxQ" type="video/youtube" >
                            </video>
                        </div>
                    </div>
                        
                    <br /><br />
                    <p>Audio Player</p>
                    <!-- Audio -->
                    <div class="row">
                        <div class="col-lg-6">
                            <audio id="player2" src="media/rucka-rucka-ali.mp3" type="audio/mp3" controls="controls"></audio>
                        </div>
                    </div>
                </div>
                    
                <div class="divider"></div>
                
                <!-- Carousel -->
                <div class="c-block" id="carousel">
                    <h3 class="block-title">Carousel</h3>
                    <p>The slideshow below shows a generic plugin and component for cycling through elements like a carousel.</p>
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/carousel/c-1.jpg" alt="Slide-1">
                            </div>
                            <div class="item">
                                <img src="img/carousel/c-2.jpg" alt="Slide-2">
                                <div class="carousel-caption">
                                    <h3>This is a Caption</h3>
                                    <p>Sample detail text here</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/carousel/c-3.jpg" alt="Slide-3">
                                <div class="carousel-caption">
                                    <h3>This is a Caption</h3>
                                    <p>Sample detail text here</p>
                                </div>
                            </div>
                        </div>
                      
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
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
        <script src='js/datatables.min.js'></script>
        <script src="js/jquery.vticker.js"></script>
        <script src="js/functions.js"></script>

        <script>
            $('.carousel').carousel({
                interval: 3000
            })

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

                $('video').mediaelementplayer({
                  videoWidth: '100%',
                  videoHeight: '100%',
                  enableAutosize: true,
                  plugins: ['flash'],
                  pluginPath: '/swf/',
                  flashName: 'flashmediaelement.swf'
                });
            });


        </script>
    </body>
</html>
        