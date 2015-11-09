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
               .body-switch {
                    position: fixed;
                    bottom: 0;
                    right: 35px;
                    background: #000;
                    background: rgba(0,0,0,0.9);
                    width: 154px;
                    z-index: 10000;
                    border: 2px solid #B6B6B6;
                    border-bottom: 0;
                    border-radius: 1px;
                    box-shadow: 0 0 10px #000;
                    height: 0;
               }
               
               .body-switch i {
                    font-size: 30px;
                    position: absolute;
                    color: #000;
                    top: -46px;
                    left: 49px;
                    padding: 10px 10px 4px 10px;
                    border-radius: 100% 100% 0 0;
                    background: #fff;
                    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #FFFFFF),color-stop(1, #B6B6B6));
                    background-image: -o-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -moz-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -webkit-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -ms-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: linear-gradient(to bottom, #FFFFFF 0%, #B6B6B6 100%);
               }
               
               .body-switch i:hover {
                    cursor: pointer;
                    color: #3748d4;
               }
               
               .body-switch ul {
                    list-style: none;
                    float: left;
                    margin: 10px 0 10px 20px;
                    padding: 0;
               }
               
               .body-switch ul li {
                    width: 45px;
                    height: 30px;
                    overflow: hidden;
                    margin-bottom: 2px;
               }

               .body-switch ul li img{
                    width: 100px;
                    height: 100px;
               }
               
               .body-switch ul li:hover {
                    cursor: pointer;
                    opacity: 0.8;
               }       
          </style>
    </head>
    <body>
          <div id="overlay"><img id="loading" src="img/loader.gif"></div>
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
                              <div class="dropdown-menu">
                                   <div class="updates-header">
                                        <span class="pull-left">Inbox <a href="#">(45)</a></span>
                                        <span class="pull-right"><a href="">Send new</a></span>
                                        <div class="clearfix"></div>
                                   </div>
                                   <div class="listview overflow">
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 David Villa <span class="date">2 Hrs ago</span><br>
                                                 <span class="shortline">Lorem ipsum dolor sit amet, per cu sole...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Jason Statom <span class="date">5 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Vandy come to ipsum seen tuooth ya so...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Lilly Jackson <span class="date">9 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Far schools wen smoothness prope soom...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Vin Diesal <span class="date">06 Nov</span><br>
                                                 <span class="shortline" class="shortline">Dolor boom with your cool sindims to the...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Jason Statom <span class="date">5 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Vandy come to ipsum seen tuooth ya so...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Lilly Jackson <span class="date">9 Hrs ago</span><br>
                                                 <span class="shortline" class="shortline">Far schools wen smoothness prope soom...</span>
                                             </div>
                                        </a>
                                        <a class="media" href="">
                                             <img class="media-object pull-left" src="img/profile-pics/1.jpg" alt="">
                                             <div class="media-body">
                                                 Vin Diesal <span class="date">06 Nov</span><br>
                                                 <span class="shortline" class="shortline">Dolor boom with your cool sindims to the...</span>
                                             </div>
                                        </a>
                                   </div>

                                   <div class="updates-footer">
                                        <a href="">See All</a>
                                   </div>
                              </div>
                         </li>
                         <li class="dropdown">
                              <a href="" class="notifications ttips" data-toggle="dropdown" title="Notifications" data-placement="bottom">
                                   <img src="img/updates.png" alt="">
                              </a>
                              <div class="dropdown-menu">
                                   <div class="updates-header">
                                        <span class="pull-left">Notifications</span>
                                        <span class="pull-right"><a href="">Settings</a></span>
                                        <div class="clearfix"></div>
                                   </div>
                                   
                                   <!-- noti here -->
                              </div>
                         </li>
                    </ul>
               </div>
               
          </header>
          
          <section id="main" role="main">
               
               <!-- Left Sidebar -->
               <aside id="leftbar" class="pull-left">
                    <div class="sidebar-container">
                         <!-- Profile -->
                         <div class="shadowed side-profile text-center">
                            <div class="banner">
                                <img src="img/profile-bg.jpg" alt="" class="banner-img">
                                <a href="#" class="profile-pic">
                                  <img src="img/profile-pics/6.jpg" alt="" class="img-circle">
                                </a>
                            </div>
                            <h4>Hafiq Iqmal</h4>
                            <small>Class: A | Grade Two</small>
                            <div>
                              <a class="btn btn-gr-gray btn-sm" href="#">View Profile</a>
                            </div>
                         </div>

                          <!-- Main Menu -->
                          <?php
                            Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'index'); 
                          ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>
               
               <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
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
                         
                         <!-- Calendar -->
                         <div class="shadowed side-calendar">
                              <div id="sidebar-calendar"></div>
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
                       
                         <!-- Counts -->
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
                    </div>
                    
                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="fa fa-angle-left"></i>
                    </span>
               </aside>
               
               <!-- Content -->
               <section id="content" class="container">
                    <!-- Shortcuts -->
                    <div class="shortcut-area sortable ">
                         <a class="shortcut" href="sales.php">
                              <i class="fa fa-shopping-cart"></i>
                              <span class="title">Sales</span>
                         </a>
                         <a class="shortcut">
                              <i class="fa fa-play"></i>
                              <span class="title">Videos</span>
                         </a> 
                         <a class="shortcut">
                              <i class="fa fa-calendar"></i>
                              <span class="title">Events</span>
                              <span class="s-counts blue">60</span>
                         </a>
                         <a class="shortcut">
                              <i class="fa fa-edit"></i>
                              <span class="title">Reports</span>
                         </a>
                         <a class="shortcut">
                              <i class="fa fa-image"></i>
                              <span class="title">Images</span>
                         </a>
                         <a class="shortcut">
                              <i class="fa fa-rss"></i>
                              <span class="title">Connections</span>
                              <span class="s-counts green">99</span>
                         </a>
                         <a class="shortcut" >
                              <i class="fa fa-user"></i>
                              <span class="title">Profile</span>
                         </a>
                         <a class="shortcut add visible-lg">
                              <i class="fa fa-plus"></i>
                              <span class="title">Add Shortcut</span>
                         </a>
                    </div>
                    <div class="shortcut-area " id="showItem" style="display:none">
                        <header class="p-header" style="border-top:1px dashed #B1B1B1">
                          <h2 style="font-size:15px;text-align:center">Drag and Drop below shortcut </h2>
                        </header>
                         <a class="shortcut draggable">
                              <i class="fa fa-clock-o"></i>
                              <span class="title">Sales</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-pause"></i>
                              <span class="title">Videos</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-upload"></i>
                              <span class="title">Downloads</span>
                              <span class="s-counts red">14</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-facebook"></i>
                              <span class="title">Events</span>
                              <span class="s-counts blue">60</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-pencil"></i>
                              <span class="title">Reports</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-building"></i>
                              <span class="title">Images</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-wifi"></i>
                              <span class="title">Connections</span>
                              <span class="s-counts green">99</span>
                         </a>
                         <a class="shortcut draggable">
                              <i class="fa fa-users"></i>
                              <span class="title">Profile</span>
                         </a>
                    </div>
                    
                    <!-- Main Graph -->
                    <div class="block">
                         <h2>Traffic Statistics</h2>
                         <div class="config">                        
                              <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                   <i class="fa fa-refresh"></i>
                              </a>
                              
                              <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                   <i class="fa fa-wrench"></i>
                              </a>
                         </div>
                         <div class="media">
                              <div class="pull-left sub-graph hidden-xs">
                                   <div class="sub-item">
                                        <div id="site-impressions" class="tiny-charts"></div>
                                        <small class="small">Site Impressions</small>
                                   </div>
                                   
                                   <div class="sub-item">
                                        <div id="site-bandwith" class="tiny-charts"></div>
                                        <small class="small">Site Bandwith(mb)</small>
                                   </div>
                                   
                                   <div class="sub-item">
                                        <div id="side-pie2" class="tiny-charts side-pie-tiny"></div>
                                        <div id="side-pie3" class="tiny-charts side-pie-tiny"></div>
                                        <small class="small">Percentage difference</small>
                                   </div>
                              </div>
                              <div id="columnChart" class="main-graph media-body"></div>
    
                         </div>
                         
                    </div>
                    
                    <div class="row m-container">
                         <!-- Today's Activity -->
                         <div class="col-md-6 masonry listview-block">
                              <div class="block">
                                   <h2>Today's Activity</h2>
                                   <div class="config">                        
                                        <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                             <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                             <i class="fa fa-wrench"></i>
                                        </a>
                                   </div>
                                  
                                   <div class="listview activity">
                                        <div class="media">
                                             <div class="number red pull-left">640</div>
                                             <div class="media-body">
                                                 <span>Facebook Likes</span>
                                             </div>
                                        </div>

                                        <div class="media">
                                             <div class="number green pull-left">101</div>
                                             <div class="media-body">
                                                 <span>Twitter Followers</span>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <div class="number blue pull-left">12K</div>
                                             <div class="media-body">
                                                 <span>Page Impressions</span>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <div class="number yellow pull-left">20K</div>
                                             <div class="media-body">
                                                 <span>Youtube Views</span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    
                         <!-- Recent Posts -->
                         <div class="col-md-6 masonry listview-block">
                              <div class="block">
                                   <h2>Latest Blog Posts</h2>
                                   <div class="config">                        
                                        <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                             <i class="fa fa-refresh"></i>
                                        </a>
                                      
                                        <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                             <i class="fa fa-wrench"></i>
                                        </a>
                                   </div>
                                   
                                   <div class="listview">
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img src="img/profile-pics/1.jpg" alt="" class="poster-pic">
                                             </a>
                                             <div class="media-body">
                                                  <small>2 Hours before by <a href="#">Jhon Beeber</a></small>
                                                  <a href="#" class="post-title">Lorem ipsum dolor sit amet, consectetur adip...</a>
                                                  <div class="btn-group controls">
                                                       <a href="#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-pencil"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-close"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-arrow-right"></i></a> 
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img src="img/profile-pics/2.jpg" alt="" class="poster-pic">
                                             </a>
                                             <div class="media-body">
                                                  <small>4 Hours before by <a href="#">David Melon</a></small>
                                                  <a href="#" class="post-title">Sed scelerisque sapien dapibus sollicitudin...</a>
                                                  <div class="btn-group controls">
                                                       <a href="#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-pencil"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-close"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-arrow-right"></i></a> 
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img src="img/profile-pics/3.jpg" alt="" class="poster-pic">
                                             </a>
                                             <div class="media-body">
                                                  <small>2 Days ago by <a href="#">Stathon Max</a></small>
                                                  <a href="#" class="post-title">Fusce eros turpis, ultrices aliquam aliquet eget...</a>
                                                  <div class="btn-group controls">
                                                       <a href="#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-pencil"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-close"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-arrow-right"></i></a> 
                                                  </div>
                                             </div>
                                        </div>
                                        
                                        <div class="media">
                                             <a class="pull-left" href="#">
                                                  <img src="img/profile-pics/4.jpg" alt="" class="poster-pic">
                                             </a>
                                             <div class="media-body">
                                                  <small>5 Days ago by <a href="#">Malinda Hollaway</a></small>
                                                  <a href="#" class="post-title">Vivamus interdum massa diam, sit amet posuere...</a>
                                                  <div class="btn-group controls">
                                                       <a href="#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-pencil"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-close"></i></a>
                                                       <a href="#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs"><i class="fa fa-arrow-right"></i></a> 
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         
                         <!-- Quick Post -->
                         <div class="col-md-6 masonry">
                              <div class="block">
                                   <h2>Post an Article</h2>
                                   <div class="config">                        
                                        <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                             <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                             <i class="fa fa-wrench"></i>
                                        </a>
                                   </div>
                                   <form id="quick-post" class="block-body form-validation">
                                        <div class="form-group">
                                             <label for="articleTitle">Article Title</label>
                                             <input type="text" class="form-control input-sm validate[required] input-sm" id="articleTitle" placeholder="eg: My first post">
                                        </div>
                                        
                                        <div class="form-group">
                                             <label>Alias</label>
                                             <input type="text" class="form-control input-sm validate[required] input-sm" placeholder="eg: My-first-post">
                                        </div>
                                          
                                        <div class="form-group">
                                             <label>Category</label><br/>
                                             <select class="select" data-style="btn-gr-gray">
                                                  <option>Category 1</option>
                                                  <option>Category 2</option>
                                                  <option>Category 3</option>
                                                  <option>Category 4</option>
                                                  <option>Category 5</option>
                                                  <option>Category 6</option>
                                             </select>
                                        </div>
                                        
                                        <div class="form-group">
                                             <label for="post">Post</label>
                                             <textarea class="form-control input-sm validate[required] input-sm" id="post" placeholder="eg. Lorem ipsum dolor sit amet, consectetur adipiscing elit..."></textarea>
                                        </div>
     
                                        <input type="submit" class="btn btn-primary btn-xs" value="PUBLISH">
                                        <input type="submit" class="btn btn-success btn-xs" value="SAVE">
                                          
                                   </form>
                              </div>
                         </div>
                             
                         <!-- Todo List -->
                         <div class="col-md-6 masonry">
                              <div class="block">
                                   <h2>Todo Lists</h2>
                                   <div class="config">
                                        <a href="" data-original-title="Add&nbsp;New" class="ttips" data-toggle="modal" data-target="#addNew-todo">
                                            <i class="fa fa-plus add-new-todo"></i>
                                        </a>
                                        <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                   </div>
                                   <div class="listview todo-list">
                                        <div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="" checked>
                                             </label>
                                             <div class="media-body">
                                                 Nulla vel metus scelerisque ante sollicitudin commodo purus
                                                  <div class="list-options">
                                                      <button class="btn btn-gr-gray btn-sm">Delete</button>
                                                  </div>
                                             </div>
                                        </div>
       
                                       <div class="media">
                                             <label class="pull-left">
                                                   <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <div class="media-body">
                                                 Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                                                 <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small><br/>
                                             </div>
                                             <div class="list-options">
                                                 <button class="btn btn-gr-gray btn-sm">Delete</button>
                                             </div>
                                       </div>
                                       
                                       <div class="media">
                                             <label class="pull-left">
                                                   <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <div class="media-body">
                                                 Inermis patrioque temporibus at ius, eos ei case partem blandit<br/>
                                                 <small>Sumo doming delicata in cum. Eos at augue viderer principes</small>
                                             </div>
                                             <div class="list-options">
                                                 <button class="btn btn-gr-gray btn-sm">Delete</button>
                                             </div>
                                       </div>
                                       
                                       <div class="media">
                                             <label class="pull-left">
                                                   <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <div class="media-body">
                                                 Billa vel metus scelerisque ante sollicitudin commodo<br/>
                                                 <small>Lorem ipsum dolor sit amet, per cu solet docendi</small>
                                             </div>
                                             <div class="list-options">
                                                 <button class="btn btn-gr-gray btn-sm">Delete</button>
                                             </div>
                                       </div>
                                       
                                       <div class="media">
                                             <label class="pull-left">
                                                   <input class="check-all" type="checkbox" value="">
                                             </label>
         
                                             <div class="media-body">
                                                 Per an urbanitas elaboraret qui, et dicit sadipscing vel
                                             </div>
                                             <div class="list-options">
                                                 <button class="btn btn-gr-gray btn-sm">Delete</button>
                                             </div>
                                       </div>
                                       
                                       <div class="media">
                                             <label class="pull-left">
                                                   <input class="check-all" type="checkbox" value="">
                                             </label>
                                             <div class="media-body">
                                                 Per an error perpetua, fierent fastidii recteque ad pro<br/>
                                                 <small> An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small><br/>
                                             </div>
                                             <div class="list-options">
                                                 <button class="btn btn-gr-gray btn-sm">Delete</button>
                                             </div>
                                       </div>
                                   </div>
                              </div>
                              
                              <!-- Add new todo list modal -->
                              <div class="modal fade" id="addNew-todo">
                                   <div class="modal-dialog modal-narrow">
                                        <div class="modal-content">
                                             <div class="modal-header">
                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                 <h4 class="modal-title">Add New Todo List</h4>
                                             </div>
                                             <form class="form-horizontal form-validation" role="form">
                                                  <div class="modal-body"> 
                                                      <div class="form-group">
                                                            <label class="col-md-2 control-label">Name</label>
                                                            <div class="col-md-10">
                                                                 <input type="text" class="form-control validate[required] input-sm" placeholder="...">
                                                            </div>
                                                      </div>
          
                                                      <div class="form-group">
                                                            <label class="col-md-2 control-label">Detail</label>
                                                            <div class="col-md-10">
                                                                 <textarea class="form-control auto-size input-sm" placeholder="Optional"></textarea>
                                                            </div>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                       <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
                                                       <input type="submit" class="btn btn-sm" value="Add">
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                          </div>

                         
                    </div>
               </section>
          </section>
          
          <!-- Template skin customize-->
          <div class="body-switch hidden-xs">
               <i class="fa fa-cogs" id="tc-toggle"></i>
               <ul data-elem="body">
                    <li class="header">Body</li>
                    <li><img src="img/body-bg/cloth.png" alt=""></li>
                    <li><img src="img/body-bg/stripes.png" alt=""></li>
                    <li><img src="img/body-bg/bluetec.png" alt=""></li>
                    <li><img src="img/body-bg/cement.png" alt=""></li>
                    <li><img src="img/body-bg/fabric.png" alt=""></li>
                    <li><img src="img/body-bg/fabric-2.png" alt=""></li>
                    <li><img src="img/body-bg/floor.png" alt=""></li>
                    <li><img src="img/body-bg/leather.png" alt=""></li>
                    <li><img src="img/body-bg/pixel.png" alt=""></li>
                    <li><img src="img/body-bg/tactile.png" alt=""></li>
                    <li><img src="img/body-bg/steel.png" alt=""></li>
               </ul>
               <ul data-elem="content">
                    <li class="header">Content</li>
                    <li><img src="img/content-bg/content-bg.jpg" alt=""></li>
                    <li><img src="img/content-bg/lines.png" alt=""></li>
                    <li><img src="img/content-bg/cloth.png" alt=""></li>
                    <li><img src="img/content-bg/grid.png" alt=""></li>
                    <li><img src="img/content-bg/gray-leather.png" alt=""></li>
                    <li><img src="img/content-bg/jean.png" alt=""></li>
                    <li><img src="img/content-bg/light.png" alt=""></li>
                    <li><img src="img/content-bg/subtle.png" alt=""></li>
               </ul>
          </div>
          
          <!-- Older IE Message -->
          <!--[if lt IE 9]>
               <div class="ie-block">
                   <h1 class="Ops">Ooops!</h1>
                   <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                   <ul class="browsers">
                       <li>
                           <a href="https://www.google.com/intl/en/chrome/browser/">
                               <img src="img/browsers/chrome.png" alt="">
                               <div>Google Chrome</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://www.mozilla.org/en-US/firefox/new/">
                               <img src="img/browsers/firefox.png" alt="">
                               <div>Mozilla Firefox</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://www.opera.com/computer/windows">
                               <img src="img/browsers/opera.png" alt="">
                               <div>Opera</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://safari.en.softonic.com/">
                               <img src="img/browsers/safari.png" alt="">
                               <div>Safari</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                               <img src="img/browsers/ie.png" alt="">
                               <div>Internet Explorer(New)</div>
                           </a>
                       </li>
                   </ul>
                   <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
               </div>   
          <![endif]-->

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

              // body switch 
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

                    $('.body-switch ul li').click(function(){
                         var getElem = $(this).closest('ul').attr('data-elem');

                         if(getElem == "body"){
                            var src = $(this).find('img').attr('src');
                            var bg = 'url('+src+')';
                            $('body, #leftbar, #rightbar').css('background', bg);

                            $.ajax({
                                type: 'POST',
                                url: 'switchbg.php',
                                data: {bodybg: 'body, #leftbar, #rightbar' ,bodycss: bg}
                            });
                         
                         }else{
                            var src = $(this).find('img').attr('src');
                            var bg = 'url('+src+')';
                            $('#content').css('background', bg);

                            $.ajax({
                                type: 'POST',
                                url: 'switchbg.php',
                                data: {contbg: '#content' ,contcss: bg}
                            });

                         }
                    });
                    
                    $('#tc-toggle').click(function(){
                        var container = $('.body-switch');
                        if(container.height()>0)
                          container.css('height',0);
                        else
                          container.css('height','auto');
                    });
               });
               
               // Column Chart 
               $(function () {
                    $('#columnChart').highcharts({
                         chart: {
                              type: 'column',
                              backgroundColor:'rgba(255, 255, 255, 0.01)',
                              height: 300
                         },
                         title: {
                              text: 'Traffic Rates'
                         },
                         subtitle: {
                              text: ''
                         },
                         xAxis: {
                              categories: [
                                  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                              ],

                         },
                         yAxis: {
                              min: 0,
                              max: 200,
                             
                              title: {
                                   text: ''
                              },
                              tickInterval: 40,
                              gridLineWidth: 1,
                              gridLineColor: '#eaeaea'
                              
                         },
                         tooltip: {
                              headerFormat: '<span style="font-size:10px; font-family:inherit">{point.key}</span><table>',
                              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                   '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                              footerFormat: '</table>',
                              shared: true,
                              useHTML: true
                         },
                         legend: {
                              borderRadius: 0,
                              borderColor: '#e3e3e3'
                         },
                         plotOptions: {
                              column: {
                                   pointPadding: 0.2,
                                   borderWidth: 0
                              }
                         },
                         credits: {
                              enabled: false
                         },
                         exporting: {
                              enabled: false    
                         },
                         series: [
                              {
                                   name: 'Google',
                                   data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 160.2, 194.1, 95.6, 54.4]
                              }, {
                                   name: 'Yahoo',
                                   data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
                              }, {
                                   name: 'Bing',
                                   data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
                              }, {
                                   name: 'Other',
                                   data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
                              }
                         ],
                         colors: [
                              '#e33e3e', 
                              '#0671c7', 
                              '#049025', 
                              '#FFA206', 
                         ]
                    });
               });
     
               //Masonry plugin for content,wigdet arragement
               $(window).load(function(){
                    $('.m-container').masonry({
                         itemSelector: '.masonry'
                    });  
               });

               /* --------------------------------------------------------
                      Drag, Drop and Sort
                  -----------------------------------------------------------*/

              $(function() {

                  $('.sortable .add').click(function(){
                      $(this).find('i').toggleClass('fa-plus fa-minus');
                      
                      var get = $('.sortable .add .title');
                      (get.text()=="Add Shortcut")? get.text('Minimize'): get.text('Add Shortcut');

                      $("#showItem").slideToggle("slow");
                  });

                  function checksort(){
                      var get = $(".sortable a");

                      if(!$(".sortable .add").is(":last-child")){
                           var temp = $(".sortable .add")[0].outerHTML;
                           $(".sortable .add").detach();
                           $(".sortable").append(temp);
                      }
                  }

                  checksort();

                  $(".sortable").sortable({
                      revert: true,
                      items : 'a:not(.add)',
                      placeholder: 'sortable-placeholder',
                      receive: function( event, ui ) {
                          checksort();
                      }

                  }).disableSelection();
                  
                  $(".draggable").draggable({
                      connectToSortable: ".sortable",
                      revert: "invalid",
                      helper: "clone"
                  });

                  $(".sortable").droppable({
                      out: function(event, ui) {
                          var self = ui;
                          ui.helper.off('mouseup').on('mouseup', function() {
                              $(this).remove();
                              self.draggable.remove();
                          });
                      }
                  });

              });
            
          </script>
     </body>
</html>
               