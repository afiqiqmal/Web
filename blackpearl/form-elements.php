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
            
        <!--custom page css-->
        <style type="text/css">
            .c-block { margin-bottom: 0; display: inline-block; width: 100%; }
            #content .form-control { margin-bottom: 10px; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'form-open-element'); 
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

                    <!-- Form -->
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
                    
                    <!-- Information -->
                    <div class="shadowed information">
                         <h3 class="title">Information</h3>
                         <p class="info-body overflow"><i class="icon-info"></i>Nulla tempor dolor dolor, eu lacinia tellus ultricies vel. Mauris arcu lorem, tincidunt id eros at, interdum tempor lorem. Vestibulum nec lectus vehicula, pellentesque risus ac, facilisis dolor. Duis elementum nisi ipsum, at consectetur sapien ultricies vitae. Mauris non cursus risus. Donec adipiscing, nibh quis mollis vulputate, arcu nisi scelerisque diam, nec pellentesque nunc magna sed risus. Quisque a magna porttitor justo sagittis vehicula. Duis vitae adipiscing nunc, a ullamcorper neque.
                         </p>
                    </div>
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Form Elements</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-right text-right" role="menu">
                            <li><a href="#text-input">Text Input</a></li>
                            <li><a href="#textarea">Textarea</a></li>
                            <li><a href="#select">Select</a></li>
                            <li><a href="#check">Checkbox and Radio</a></li>
                        </ul>
                    </div>
                </header>
                
                <!-- Text Input -->
                <div class="c-block" id="text-input">
                    <h3 class="block-title">Text Input</h3>
                    <p>Text Inputs with different sizes by height and column.</p>
                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                    <input type="text" class="form-control" placeholder="Default">
                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                        
                    <div class="row">
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder=".col-lg-2">
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder=".col-lg-3">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder=".col-lg-4">
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" placeholder=".col-lg-5">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder=".col-lg-6">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p></p>
                    <p>Input focus</p>
                    <input class="form-control input-focused" type="text" value="This is focused...">
                    <p></p>
                    <p>Disabled</p>
                    <input class="form-control" type="text" value="This is disabled..." disabled>
                </div>
                
                <div class="divider"></div>
                
                <!-- Textarea -->
                <div class="c-block" id="textarea">
                    <h3 class="block-title">Textarea</h3>
                    <p>Form control which supports multiple lines of text. Change 'rows' attribute as necessary.</p>
                    <textarea class="form-control" rows="3" placeholder="This is a default Textarea..."></textarea>
                    <p></p>
                    <p>Textarea with auto-grow height</p>
                    <textarea class="form-control auto-size" placeholder="This is an auto sizing Textarea..."></textarea>
                    <p>Textarea Disabled</p>
                    <textarea class="form-control" placeholder="This is disabled" disabled></textarea>
                </div>
                
                <div class="divider"></div>
                
                <!-- Select -->
                <div class="c-block" id="select">
                    <h3 class="block-title">Select</h3>
                    <p>Use Grid classes to adjust column sizes</p>
                    <select class="form-control input-lg">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <select class="form-control input-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    
                    <p></p>
                    <p>Disabled</p>
                    <select class="form-control" disabled>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                
                <div class="divider"></div>
                
                <!-- Checkbox -->
                <div class="c-block" id="check">
                    <h3 class="block-title">Checkbox + Radio</h3>
                    <p>Default Checkbox</p>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    
                    <p>Inline Checkboxes</p>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                    </label>
                    <p></p>
                    <p>Radio</p>
                    <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
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
        