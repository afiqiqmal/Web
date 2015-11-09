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
               .c-block { margin-bottom: 10px; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'ui-open-other'); 
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
                         <h2 class="p-title">Other User Interface elements</h2>
                    </header>
                    
                    <!-- Jumbotron -->
                    <div class="c-block" id="jumbotron">
                         <h3 class="block-title">Jumbotron</h3>
                         <div class="jumbotron block">
                              <div class="container">
                                   <h1>Hello, world!</h1>
                                   <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                   <p><a class="btn btn-warning btn-lg">Learn more</a></p>
                              </div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Page Header -->
                    <div class="c-block" id="page-header">
                         <h3 class="block-title">Page Header</h3>
                         
                         <p>Default Page Header</p>
                         <header class="p-header">
                              <h2 class="p-title">This is a Page Header</h2>
                         </header>
                         
                         <br /><br />
                         
                         <p>Page Header with Sub text</p>
                         <header class="p-header">
                              <h2 class="p-title">This is a Page Header <small class="s-text">and this is a sub text</small></h2>
                         </header>
                         
                         <br /><br />
                         
                         <p>Page header with jump menu</p>
                         <header class="p-header">
                              <h2 class="p-title">Another Page Header</h2>
                              <div class="config dropdown">
                                   <a class="dropdown-toggle btn btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="icon-angle-down"></span></a>
                                   <ul class="dropdown-menu pull-right text-right" role="menu">
                                       <li><a href="#">Dropdown Item 1</a></li>
                                       <li><a href="#">Dropdown Item 2</a></li>
                                       <li><a href="#">Dropdown Item 3</a></li>
                                       <li><a href="#">Dropdown Item 4</a></li>
                                       <li class="divider"></li>
                                       <li><a href="#">Dropdown Item 5</a></li>
                                   </ul>
                              </div>
                         </header>     
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Content Boxes -->
                    <div class="c-block" id="content-boxes">
                         <h3 class="block-title">Content Boxes</h3>
                         
                         <div class="row">
                              <div class="col-sm-6 col-md-4">
                                   <div class="thumbnail block">
                                        <img src="img/gallery/1.jpg" alt="">
                                        <div class="caption">
                                             <h4>Thumbnail label</h4>
                                             <p>Nullam congue mauris at auctor pharetra. Phasellus dictum accumsan justo, sit amet mattis odio semper in. Nulla consectetur quam in dolor faucibus, ac facilisis nunc luctus. Etiam sapien arcu, scelerisque at mollis a, placerat non eros.</p>
                                             <p>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                              
                              <div class="col-sm-6 col-md-4">
                                   <div class="thumbnail block">
                                        <img src="img/gallery/3.jpg" alt="">
                                        <div class="caption">
                                             <h4>Thumbnail label</h4>
                                             <p>Nullam congue mauris at auctor pharetra. Phasellus dictum accumsan justo, sit amet mattis odio semper in. Nulla consectetur quam in dolor faucibus, ac facilisis nunc luctus. Etiam sapien arcu, scelerisque at mollis a, placerat non eros.</p>
                                             <p>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                              
                              <div class="col-sm-6 col-md-4">
                                   <div class="thumbnail block">
                                        <img src="img/gallery/5.jpg" alt="">
                                        <div class="caption">
                                             <h4>Thumbnail label</h4>
                                             <p>Nullam congue mauris at auctor pharetra. Phasellus dictum accumsan justo, sit amet mattis odio semper in. Nulla consectetur quam in dolor faucibus, ac facilisis nunc luctus. Etiam sapien arcu, scelerisque at mollis a, placerat non eros.</p>
                                             <p>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                                  <a href="#" class="btn btn-info btn-sm">Button</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Media Object -->
                    <div class="c-block" id="media-object">
                         <h3 class="block-title">Media Object</h3>
                         
                         <p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>
                         <br />
                         <div class="media">
                              <a class="pull-left" href="#">
                                   <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                              </a>
                              <div class="media-body">
                                   <h5 class="media-heading">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                              </div>
                         </div>
                         <div class="media">
                              <a class="pull-left" href="#">
                                   <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                              </a>
                              <div class="media-body">
                                   <h5 class="media-heading">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                   <div class="media">
                                        <a class="pull-left" href="#">
                                             <img class="media-object" src="img/profile-pics/3.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                             <h5 class="media-heading">Media heading</h5>
                                             Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                   </div>
                              </div>
                         </div>
                         
                         <br/><br/>
                         <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
                         <br />
                         <ul class="media-list">
                              <li class="media">
                                   <a class="pull-left" href="#">
                                        <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                                   </a> 
                                   <div class="media-body">
                                        <h5 class="media-heading">Media heading</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        <!-- Nested media object -->
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                                             </a>
                                             <div class="media-body">
                                                  <h5 class="media-heading">Nested media heading</h5>
                                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                  <!-- Nested media object -->
                                                  <div class="media">
                                                       <a class="pull-left" href="#">
                                                            <img class="media-object" src="img/profile-pics/3.jpg" alt="">
                                                       </a>
                                                       <div class="media-body">
                                                            <h5 class="media-heading">Nested media heading</h5>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   
                                        <!-- Nested media object -->
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img class="media-object" src="img/profile-pics/4.jpg" alt="">
                                             </a>
                                             <div class="media-body">
                                                  <h5 class="media-heading">Nested media heading</h5>
                                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                             </div>
                                        </div>
                                   </div>
                              </li>
                              <li class="media">
                                   <a class="pull-right" href="#">
                                        <img class="media-object" src="img/profile-pics/5.jpg" alt="">
                                   </a>
                                   <div class="media-body">
                                        <h5 class="media-heading">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                   </div>
                              </li>
                         </ul>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- List Groups -->
                    <div class="c-block" id="list-groups">
                         <h3 class="block-title">List Groups</h3>
                         
                         <p>Basic example</p>
                         <ul class="list-group block">
                              <li class="list-group-item">Cras justo odio</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                              <li class="list-group-item">Morbi leo risus</li>
                              <li class="list-group-item">Porta ac consectetur ac</li>
                              <li class="list-group-item">Vestibulum at eros</li>
                         </ul>
                         
                         <p>With Badges</p>
                         <ul class="list-group block">
                              <li class="list-group-item">Cras justo odio<span class="badge">14</span></li>
                              <li class="list-group-item">Dapibus ac facilisis in<span class="badge">23</span></li>
                              <li class="list-group-item">Morbi leo risus<span class="badge">9</span></li>
                              <li class="list-group-item">Porta ac consectetur ac<span class="badge">10</span></li>
                              <li class="list-group-item">Vestibulum at eros<span class="badge">2</span></li>
                         </ul>
                         
                         <p>With Links</p>
                         <div class="list-group block">
                              <a href="#" class="list-group-item active">Cras justo odio<span class="badge">14</span></a>
                              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                              <a href="#" class="list-group-item">Morbi leo risus</a>
                              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                              <a href="#" class="list-group-item">Vestibulum at eros</a>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Panel -->
                    <div class="c-block" id="Panel">
                         <h3 class="block-title">Panel</h3>
                         
                         <div class="panel panel-default block">
                              <div class="panel-heading">
                                   <h3 class="panel-title">Panel title</h3>
                              </div>
                              <div class="panel-body">
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                              </div>
                              <div class="panel-footer">Panel footer</div>
                         </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Well -->
                    <div class="c-block" id="well">
                         <h3 class="block-title">Well</h3>
                         <p>Use the well as a simple effect on an element to give it an inset effect.</p>
                         <div class="well block">
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
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
          <script src="js/validation/validate.min.js"></script>
          <script src="js/validation/validationEngine.min.js"></script>
          <script src="js/media-player.js"></script>
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
               