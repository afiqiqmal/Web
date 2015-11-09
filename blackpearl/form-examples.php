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
            .c-block { display: inline-block; width: 100%; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'form-open-example'); 
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
                    
                    <!-- Collapse -->
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
                         </div>
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
                    <h2 class="p-title">Form Examples</h2>
                </header>
                
                <!-- Basic -->
                <div class="c-block" id="basic">
                    <h3 class="block-title">Basic Example</h3>
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-gr-gray btn-sm">Login</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Inline -->
                <div class="c-block" id="inline">
                    <h3 class="block-title">Inline Form</h3>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-sm btn-gr-gray">Sign in</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Horizontal -->
                <div class="c-block" id="horizontal">
                    <h3 class="block-title">Horizontal Form</h3>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputName1" class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="inputName1" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-md-2 control-label">Email Address</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="inputEmail1" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage" class="col-md-2 control-label">Message</label>
                            <div class="col-md-10">
                                <textarea class="form-control auto-size" id="inputMessage" placeholder="..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-info btn-xs">SUBMIT FORM</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Static Control -->
                <div class="c-block" id="static-control">
                    <h3 class="block-title">Static Control</h3>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <p class="form-control-static">David Aleam</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <p class="form-control-static">email@example.com</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-warning btn-xs">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Multi Column -->
                <div class="c-block" id="multi-column">
                    <h3 class="block-title">Multi Column</h3>
                    <form class="row form-columned" role="form">
                        <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="Username">
                        </div>
                        <div class="col-md-4">
                            <select class="select" data-style="btn-gr-gray">
                                <option>Country</option>
                                <option>Japan</option>
                                <option>Korea</option>
                                <option>China</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <input type="tel" class="form-control input-sm" placeholder="Contact Number">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="City">
                        </div>
                        <div class="col-md-4">
                            <input type="password" class="form-control input-sm" placeholder="Password">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-gr-gray btn-sm">Save Profile</button>
                        </div>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Custom -->
                <div class="c-block" id="custom">
                    <h3 class="block-title">Custom Forms</h3>
                    <p>Form in Dropdown</p>
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#">Dropdown - Login</a>
                        <div class="dropdown-menu flat dropdown-form" role="menu">
                            <header class="flat-header">
                                <h4 class="flat-title">Form Header</h4>
                            </header>
                            <div class="flat-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control input-sm" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                         <label>Password</label>
                                        <input type="password" class="form-control input-sm" placeholder="Password">
                                    </div>
                                </form>
                            </div>
                            <div class="flat-footer">
                                <button type="submit" class="btn btn-gr-gray btn-sm">Login to Backend</button>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <p>Form in Modal</p>
                    <p><a data-toggle="modal" href="#form-modal">Open Modal</a></p>
           
                    <!-- Modal -->
                    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputName4" class="col-md-2 control-label">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control input-sm" id="inputName4" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control input-sm" id="inputEmail4" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage3" class="col-md-2 control-label">Message</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control auto-size input-sm" id="inputMessage3" placeholder="..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm">Save changes</button>
                                    <button type="button" class="btn btn-sm" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
        <script src='js/slider.min.js'></script>
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
        