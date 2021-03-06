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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'form-open-wizard'); 
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
                    <h2 class="p-title">Form Wizard</h2>
                </header>
                
                <!-- Horizontal -->
                <div class="c-block">
                    <h3 class="block-title">Horizontal Menu Wizard</h3>
                    
                    <div class="block">
                        <div class="form-wizard">
                            <ul class="list-inline wizard-nav">
                                <li class="active">
                                    <a href="#agreement">
                                        <span class="wizard-number">1</span>
                                        First
                                    </a>
                                </li>
                                <li>
                                    <a href="#introduction">
                                        <span class="wizard-number">2</span>
                                        Second
                                    </a>
                                </li>
                                <li>
                                    <a href="#details">
                                        <span class="wizard-number">3</span>
                                        Third
                                    </a>
                                </li>
                                <li>
                                    <a href="#thankyou">
                                        <span class="wizard-number">4</span>
                                        Fourth
                                    </a>
                                </li>
                            </ul>
                              
                            <div class="tab-content wizard">
                                <div class="tab-pane active" id="agreement">
                                    <h3>Agreement</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed leo id magna auctor venenatis quis eu turpis. Quisque nec tempor nisl. Sed vestibulum mauris luctus, mattis risus ac, eleifend nibh. Curabitur suscipit facilisis lacinia. Donec scelerisque, nunc rutrum ultrices porta, nisi massa faucibus purus, ut faucibus nunc orci ut libero.</p>
                                    <p>Sed blandit magna volutpat dictum congue. Ut ornare odio sed vulputate lacinia. Donec at blandit arcu. Sed tincidunt mattis ipsum, et consectetur eros cursus in. Pellentesque id condimentum magna.</p>
                                    <p>Nunc mollis nisl in turpis pellentesque, vitae elementum lorem congue. Praesent pretium velit sit amet sapien semper, a venenatis sem venenatis. Proin non lorem tellus. Maecenas quis mattis purus. Suspendisse potenti. Morbi ac orci non elit pellentesque elementum at sed nisi. Ut mi dolor, viverra non nisl sed, commodo molestie dolor.</p>
                                    <div class="clearfix"></div>
                                    <form class="form-validation" role="form">
                                        <label class="checkbox">
                                            <input class="validate[required]" name="agree" type="checkbox" value=""> I have read and accepted.
                                        </label>
                                    </form>
                                </div>
                                <div class="tab-pane" id="introduction">
                                    <div class="wizard-banner">
                                        <img src="img/wizard-side.jpg" alt="">
                                    </div>
                                    <h3>Introduction with Banner</h3>
                                    <div class="overflow" style="height: 150px;">
                                        <p>Sed blandit magna volutpat dictum congue. Ut ornare odio sed vulputate lacinia. Donec at blandit arcu. Sed tincidunt mattis ipsum, et consectetur eros cursus in. Pellentesque id condimentum magna.</p>
                                        <p>Nunc mollis nisl in turpis pellentesque, vitae elementum lorem congue. Praesent pretium velit sit pellentesque sapien semper, pellentesque venenatis sem venenatis. pellentesque pellentesque lorem tellus. Maecenas quis mattis purus. Suspendisse potenti. Morbi ac orci non elit pellentesque elementum at sed nisi. Ut mi dolor, viverra non nisl sed, commodo molestie dolor.</p>
                                        <p>Sed viverra, ligula eu condimentum dignissim, risus metus iaculis est, cursus fringilla ante quam sed dolor. Vivamus molestie augue id magna gravida, pellentesque placerat arcu malesuada. Etiam urna dui, faucibus non bibendum at, adipiscing ut mi. Proin scelerisque orci sit amet turpis venenatis, feugiat euismod enim posuere. Pellentesque eget consectetur lorem. Vivamus lobortis iaculis lorem, id consequat lacus posuere id. In vel ligula mattis, aliquam lacus pellentesque, tincidunt felis.</p>
                                        <p>Donec tristique vitae risus in blandit. Cras leo sem, pellentesque quis ornare pellentesque, malesuada sit amet mauris. Nam augue nisl, tincidunt sed pellentesquepellentesque vitae, pretium sit amet est. Suspendisse non nibh sed mauris ultrices hendrerit a sed nibh. Ut a aliquet nisl. Nullam posuere pulvinar metus, sit amet interdum turpis sagittis sit amet. Vivamus accumsan lectus ac massa malesuada, quis mollis dolor gravida. Proin volutpat molestie velit at rhoncus. Donec ut arcu a est pellentesque tempor. Duis faucibus neque et leo sodales, ut dignissim enim tincidunt.</p>
                                        <p>Praesent consequat eu diam ac pellentesque. Aenean venenatis pretium neque, a varius velit mattis auctor. Donec ac lectus pharetra, pellentesque nisi eu, commodo leo. Fusce porta ipsum eu augue luctus sollicitudin. Suspendisse ornare mi sit amet erat mattis dapibus. In hac habitasse platea dictumst. Curabitur non nibh a dolor elementum scelerisque a gravida velit. Suspendisse odio lacus, commodo vitae nunc eget, feugiat volutpat orci.</p>
                                        <p>Sed blandit magna volutpat dictum congue. Ut ornare odio sed vulputate lacinia. Donec at blandit arcu. Sed tincidunt mattis ipsum, et consectetur eros cursus in. Pellentesque id condimentum magna.</p>
                                        <p>Nunc mollis nisl in turpis pellentesque, vitae elementum lorem congue. Praesent pretium velit sit pellentesque sapien semper, pellentesque venenatis sem venenatis. pellentesque pellentesque lorem tellus. Maecenas quis mattis purus. Suspendisse potenti. Morbi ac orci non elit pellentesque elementum at sed nisi. Ut mi dolor, viverra non nisl sed, commodo molestie dolor.</p>
                                        <p>Sed viverra, ligula eu condimentum dignissim, risus metus iaculis est, cursus fringilla ante quam sed dolor. Vivamus molestie augue id magna gravida, pellentesque placerat arcu malesuada. Etiam urna dui, faucibus non bibendum at, adipiscing ut mi. Proin scelerisque orci sit amet turpis venenatis, feugiat euismod enim posuere. Pellentesque eget consectetur lorem. Vivamus lobortis iaculis lorem, id consequat lacus posuere id. In vel ligula mattis, aliquam lacus pellentesque, tincidunt felis.</p>
                                        <p>Donec tristique vitae risus in blandit. Cras leo sem, pellentesque quis ornare pellentesque, malesuada sit amet mauris. Nam augue nisl, tincidunt sed pellentesquepellentesque vitae, pretium sit amet est. Suspendisse non nibh sed mauris ultrices hendrerit a sed nibh. Ut a aliquet nisl. Nullam posuere pulvinar metus, sit amet interdum turpis sagittis sit amet. Vivamus accumsan lectus ac massa malesuada, quis mollis dolor gravida. Proin volutpat molestie velit at rhoncus. Donec ut arcu a est pellentesque tempor. Duis faucibus neque et leo sodales, ut dignissim enim tincidunt.</p>
                                        <p>Praesent consequat eu diam ac pellentesque. Aenean venenatis pretium neque, a varius velit mattis auctor. Donec ac lectus pharetra, pellentesque nisi eu, commodo leo. Fusce porta ipsum eu augue luctus sollicitudin. Suspendisse ornare mi sit amet erat mattis dapibus. In hac habitasse platea dictumst. Curabitur non nibh a dolor elementum scelerisque a gravida velit. Suspendisse odio lacus, commodo vitae nunc eget, feugiat volutpat orci.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="details">
                                    <h3>Form in Wizard</h3>
                                    <p>Sed blandit magna volutpat dictum congue. Ut ornare odio sed vulputate lacinia. Donec at blandit arcu. Sed tincidunt mattis ipsum, et consectetur eros cursus in. Pellentesque id condimentum magna.</p>
    
                                    <form class="form-horizontal form-validation" role="form">
                                        <div class="form-group">
                                            <label for="inputName1" class="col-md-2 control-label">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="input-sm validate[required] form-control" id="inputName1" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail1" class="col-md-2 control-label">Email Address</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control input-sm validate[required,custom[email]]" id="inputEmail1" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputContact" class="col-md-2 control-label">Contact Number</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control input-sm validate[required,custom[phone]]" id="inputContact" placeholder="eg: 04312 777 777">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="aboutYou" class="col-md-2 control-label">About you</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control auto-size input-sm" id="aboutYou" placeholder="..." style="overflow: hidden; word-wrap: break-word; resize: none; height: 60px;"></textarea>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="tab-pane" id="thankyou">
                                    <h3>Thank you</h3>
                                    <p>Sed blandit magna volutpat dictum congue. Ut ornare odio sed vulputate lacinia. Donec at blandit arcu. Sed tincidunt mattis ipsum, et consectetur eros cursus in. Pellentesque id condimentum magna.</p>
                                    <p>Nunc mollis nisl in turpis pellentesque, vitae elementum lorem congue. Praesent pretium velit sit pellentesque sapien semper, pellentesque venenatis sem venenatis. pellentesque pellentesque lorem tellus. Maecenas quis mattis purus. Suspendisse potenti. Morbi ac orci non elit pellentesque elementum at sed nisi. Ut mi dolor, viverra non nisl sed, commodo molestie dolor.</p>
                                    <p>Sed viverra, ligula eu condimentum dignissim, risus metus iaculis est, cursus fringilla ante quam sed dolor. Vivamus molestie augue id magna gravida, pellentesque placerat arcu malesuada. Etiam urna dui, faucibus non bibendum at, adipiscing ut mi. Proin scelerisque orci sit amet turpis venenatis, feugiat euismod enim posuere. Pellentesque eget consectetur lorem. Vivamus lobortis iaculis lorem, id consequat lacus posuere id. In vel ligula mattis, aliquam lacus pellentesque, tincidunt felis.</p> 
                                </div>
                            </div>
                            
                            <div class="wizard-footer text-right">
                                <button class="btn btn-sm btn-gr-gray pull-left">Help</button>
                                <button class="btn btn-sm btn-gr-gray wizard-prev">Previous</button>
                                <button class="btn btn-sm btn-gr-gray wizard-next">Next</button>
                                <button class="btn btn-sm btn-gr-gray wizard-finish">Finish</button>
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
        