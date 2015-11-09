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
            .c-block .btn { margin: 0 8px 8px 0; }
            .c-block .btn-group { margin-bottom: 10px; }
            .c-block .btn-group .btn { margin-bottom: 0; margin-right: 0; }
            .c-block .btn-group-vertical .btn, .c-block .btn-group-vertical .btn-group { margin-bottom: 0; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'ui-open-button'); 
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
                    <h2 class="p-title">Buttons</h2>
                </header>
                
                <!-- Buttons -->
                <div class="c-block" id="buttons">
                    <h3 class="block-title">Buttons</h3>
                    <div class="clearfix"></div>
                    <p>Large Size</p>
                    
                    <button class="btn btn-lg">Default</button>
                    <button class="btn btn-lg btn-primary">Primary</button>
                    <button class="btn btn-lg btn-info">Info</button>
                    <button class="btn btn-lg btn-success">Success</button>
                    <button class="btn btn-lg btn-warning">Warning</button>
                    <button class="btn btn-lg btn-danger">Danger</button>
                    <button class="btn btn-lg btn-dark">Dark</button>
                    
                    <br/><br/>
                    <p>Default Size</p>
                    
                    <button class="btn">Default</button>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-info">Info</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-danger">Danger</button>
                    <button class="btn btn-dark">Dark</button>
                    
                    <br/><br/>
                    <p>Small Size</p>
                    
                    <button class="btn btn-sm">Default</button>
                    <button class="btn btn-sm btn-primary">Primary</button>
                    <button class="btn btn-sm btn-info">Info</button>
                    <button class="btn btn-sm btn-success">Success</button>
                    <button class="btn btn-sm btn-warning">Warning</button>
                    <button class="btn btn-sm btn-danger">Danger</button>
                    <button class="btn btn-sm btn-dark">Dark</button>
                    
                    <br/><br/>
                    <p>Extra Small Size</p>
                    
                    <button class="btn btn-xs">Default</button>
                    <button class="btn btn-xs btn-primary">Primary</button>
                    <button class="btn btn-xs btn-info">Info</button>
                    <button class="btn btn-xs btn-success">Success</button>
                    <button class="btn btn-xs btn-warning">Warning</button>
                    <button class="btn btn-xs btn-danger">Danger</button>
                    <button class="btn btn-xs btn-dark">Dark</button>
                </div>
                
                <div class="divider"></div>
                
                <!-- Alternative -->
                <div class="c-block" id="alternative-buttons">
                    <h3 class="block-title">Alternative Button Style</h3>
                    <p>Custom Styled without Shadow - All 4 size</p>
                    <button class="btn btn-gr-gray btn-lg">Custom</button>
                    <button class="btn btn-gr-gray">Custom</button>
                    <button class="btn btn-gr-gray btn-sm">Custom</button>
                    <button class="btn btn-gr-gray btn-xs">Custom</button>
                </div>
                
                <div class="divider"></div>
                
                <!-- Block Level -->
                <div class="c-block" id="block-level">
                    <h3 class="block-title">Block Level</h3>
                    <p>Create block level buttons those that span the full width of a parent</p>
                    <button class="btn btn-primary btn-block">Block Level</button>
                    <button class="btn btn-block">Block Level</button>
                </div>
                
                <div class="divider"></div>
                
                <!-- Disabled State -->
                <div class="c-block" id="disable-state">
                    <h3 class="block-title">Disabled State</h3>
                    <p>Make buttons look unclickable by fading them back 50%.</p>
                    <button class="btn btn-primary" disabled="disabled">Disabled</button>
                    <button class="btn" disabled="disabled">Disabled</button>
                </div>
                
                <div class="divider"></div>
                
                <!-- Button Tags -->
                <div class="c-block" id="button-tags">
                    <h3 class="block-title">Button Tags</h3>
                    <p>Use the button classes on a, button, input, span Elements</p>
                    <a href="#" class="btn">Link</a>
                    <button class="btn">Button</button>
                    <input type="submit" value="Submit" class="btn">
                    <span class="btn">Span</span>
                </div>
                
                <div class="divider"></div>
                
                <!-- Button Groups -->
                <div class="c-block" id="button-groups">
                    <h3 class="block-title">Button Groups</h3>
                    <p>Basic example</p>
                    <div class="btn-group">
                        <button type="button" class="btn">Left</button>
                        <button type="button" class="btn">Middle</button>
                        <button type="button" class="btn">Right</button>
                    </div>
                    
                    <p>Button toolbar</p>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn">1</button>
                            <button type="button" class="btn">2</button>
                            <button type="button" class="btn">3</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn">4</button>
                            <button type="button" class="btn">5</button>
                            <button type="button" class="btn">6</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn">7</button>
                            <button type="button" class="btn">8</button>
                            <button type="button" class="btn">9</button>
                        </div>
                    </div>
                    
                    <p>Nesting</p>
                    <div class="btn-group">
                        <button type="button" class="btn">1</button>
                        <button type="button" class="btn">2</button>
                  
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <p>Vertical variation</p>
                    <div class="btn-group-vertical">
                        <button type="button" class="btn">1</button>
                        <button type="button" class="btn">2</button>
                  
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn">3</button>
                    </div>
                    <br/>
                    <p></p>
                    <p>Justified link variation</p>
                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn">Left</a>
                        <a href="#" class="btn">Middle</a>
                        <a href="#" class="btn">Right</a>
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
        