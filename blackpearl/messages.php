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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'sample-open-message'); 
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
           
                    <header class="message-header">
                         <div class="dropdown pull-left compose-message">
                              <a data-toggle="dropdown" class="btn btn-danger" href="#">Compose Mail</a>

                              <div class="dropdown-menu dropdown-form flat" role="menu">
                                   <div class="flat-header">
                                        <select data-placeholder="To..." class="tag-select" multiple>
                                             <option value="David Becham">David Becham</option> 
                                             <option value="Christian Bale">Christian Bale</option> 
                                             <option value="Malinda Hollaway">Malinda Hollaway</option> 
                                             <option value="Jason Stathom">Jason Stathom</option> 
                                             <option value="Wen De Soza">Wen De Soza</option> 
                                             <option value="Jhon Morrison">Jhon Morrison</option> 
                                             <option value="William Gale">William Gale</option> 
                                             <option value="Mark Hakngtosh">Mark Hakngtosh</option> 
                                             <option value="Angola Jenolia">Angola Jenolia</option> 
                                             <option value="William Jansen">William Jansen</option> 
                                             <option value="Kat Steven">Kat Steven</option> 
                                        </select>
                                   </div>
                                   <div class="flat-body">    
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                             <textarea class="form-control input-sm" placeholder="Message"></textarea>  
                                        </div>
                                   </div>
                                   <div class="flat-footer">
                                       <button class="btn btn-sm">Send Message</button>
                                   </div>
                              </div>
                         </div>
                                             
                         <div class="input-group list-view-search">
                              <input type="text" placeholder="Type something..." class="form-control input-sm">
                                       
                              <div class="input-group-btn">
                                   <button type="button" class="btn btn-gr-gray btn-sm">
                                        <i class="fa fa-search"></i>
                                   </button>
                              </div>      
                         </div>
                    </header>
                    
                    <div class="block">
                         <div class="media messages">
                              <div class="pull-left message-menu">
                                   <i class="fa fa-angle-down message-menu-toggle visible-xs"></i>
                                   
                                   <div class="list-group">
                                        <a href="#" class="list-group-item active">Inbox<span class="badge">23</span></a>
                                        <a href="#" class="list-group-item">Important</a>
                                        <a href="#" class="list-group-item">Starred</a>
                                        <a href="#" class="list-group-item">Drafts</a>
                                        <a href="#" class="list-group-item">Sent Mail</a>
                                   </div>
                                   
                                   <div class="list-group">
                                        <a href="#" class="list-group-item"><span class="message-tag red"></span>Work</a>
                                        <a href="#" class="list-group-item"><span class="message-tag blue"></span>Personal</a>
                                        <a href="#" class="list-group-item"><span class="message-tag green"></span>Promotions</a>
                                        <a href="#" class="list-group-item"><span class="message-tag yellow"></span>Clients</a>
                                   </div>
                              </div>
                              
                              <div class="media-body message-body">
                                   <div class="listview">
                                        <header class="media listview-header">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <span class="pull-right message-pagin">
                                                  <a href="#" class="fa fa-angle-left"></a>
                                                  <a href="#" class="fa fa-angle-right"></a>
                                             </span>
                                             <a href="#" class="btn btn-xs btn-gr-gray">
                                                 Reload
                                             </a>
                                             <a href="#" class="btn btn-xs btn-gr-gray list-delete-all">
                                                 Delete
                                             </a>
                                             <div class="clearfix"></div>
                                             
                                        </header>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             
                                             <small class="pull-right message-time">6.30am</small>
                                             <div class="media-body">
                                                  Nulla vel metus scelerisque ante sollicitudin commodo purus odio<br/>
                                                  <small class="hidden-xs">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam vel quam magn...</small>
                                                  <div class="list-options">
                                                       <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                       <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                            
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">6.03am</small>
                                             <div class="media-body">
                                                  Morbi elementum auctor leo vel scelerisque Fusce quam magna and dooldhin<br/>
                                                  <small class="hidden-xs">Error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">02.24pm</small>
                                             <div class="media-body">
                                                  Saoling elementum auctor leo vel scelerisque Fusce quam magnaasia poor<br/>
                                                  <small class="hidden-xs">Cook for last perpetua, fierent fastidii recteque ad pro. Mei id brute barnell</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">20 Nov</small>
                                             <div class="media-body">
                                                  Toyobeem elementum auctor leo vel scelerisque Fusce quam magna seen in three for group<br/>
                                                  <small class="hidden-xs">Parapoo perpetua, fierent fastidii recteque ad pro. Mei id brute twitter</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">19 Nov</small>
                                             <div class="media-body">
                                                  Wnedy jeet elementum auctor leo vel scelerisque Fusce quam magna akon laa<br/>
                                                  <small class="hidden-xs">Few race perpetua, fierent fastidii recteque ad pro. Mei id brute tim beenbo val</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">19 Nov</small>
                                             <div class="media-body">
                                                  Augue sit amet velit facilisis, id feugiat sapien tempus. Phasellus nunc massa<br/>
                                                  <small class="hidden-xs">Werdf perpetua, fierent fastidii recteque ad pro. Mei id brute lorem Ipsum</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <small class="pull-right message-time">17 Nov</small>
                                             <div class="media-body">
                                                  Integer tincidunt turpis varius dolor congue fringilla. In rhoncus, risus a mattis imperdiet<br/>
                                                  <small class="hidden-xs">Amet ultricies neque ante ac Nulla id erat sed lectus bibendum faucibus sagittis id felis. Duis lacinia lectus</small>
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm"><i class="fa fa-star"></i></button>
                                                      <button class="btn btn-gr-gray btn-sm">View</button>
                                                  </div>
                                             </div>
                                        </div>
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
               