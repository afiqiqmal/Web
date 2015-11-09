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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'widget-open-content'); 
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
                    
                    <!-- Search -->
                    <form class="form-inline top-search shadowed">
                         <input type="text" class="form-control" placeholder="Search for anything...">
                         <button type="submit"><i class="fa fa-search"></i></button>
                    </form>

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

                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2>Content Widgets</h2>
                </header>
                <p></p>

                <div class="alert alert-info alert-dismissable fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    For Chart Widgets, please refer the Chart section using the left menu.
                </div>
                
                <div class="row m-container">
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
                            <form id="quick-post" class="block-body">
                                <div class="form-group">
                                    <label>Article Title</label>
                                    <input type="text" class="form-control input-sm" id="articleTitle" placeholder="eg: My first post">
                                </div>
                                   
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" class="form-control input-sm" placeholder="eg: My-first-post">
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
                                    <label>Post</label>
                                    <textarea class="form-control input-sm" id="post" placeholder="eg. Lorem ipsum dolor sit amet, consectetur adipiscing elit..."></textarea>
                                </div>
    
                                <input type="submit" class="btn btn-primary btn-xs" value="PUBLISH">
                                <input type="submit" class="btn btn-success btn-xs" value="SAVE">  
                            </form>
                        </div>
                    </div>
                    
                    <!-- Pictures -->
                    <div class="col-md-6 masonry">
                        <div class="block">          
                            <h2>Pictures</h2>
                            <div class="config">                        
                                <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                    <i class="fa fa-wrench"></i>
                                </a>
                            </div>      
                            
                            <div class="box-view">
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/30.jpg" alt="">
                                </a>
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/1.jpg" alt="">
                                </a>
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/3.jpg" alt="">
                                </a>
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/4.jpg" alt="">
                                </a>
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/5.jpg" alt="">
                                </a>
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup box-item col-xs-4" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis"><i class="icon-expand"></i>
                                    <i class="icon-expand"></i>
                                    <img src="img/gallery/thumbs/2.jpg" alt="">
                                </a>
                            </div>
                            
                        </div>	
		            </div>
                    
                    <!-- Friends -->
                    <div class="col-md-6 masonry">
                        <div class="block">          
                            <h2><a href="#">Friends</a></h2>
                            <div class="config">                        
                                <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                     <i class="fa fa-wrench"></i>
                                </a>
                        </div>           
                            
                            <div class="box-view">
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/1.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/3.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/5.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/2.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/4.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/1.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/5.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/2.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/3.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/4.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/2.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/5.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/1.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/3.jpg" alt="" />
                                </a>
                                <a href="#" class="box-item">
                                    <img src="img/profile-pics/2.jpg" alt="" />
                                </a>
                            </div>
                            
                        </div>  
                    </div>

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
                    
                    <!-- List View -->
                    <div class="col-md-6 masonry">
                        <div class="block">
                            <h2>List View</h2>
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
                                    <div class="media-body">
                                        Nulla vel metus scelerisque ante sollicitudin commodo purus odio
                                        <div class="list-options">
                                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                                            <button class="btn btn-gr-gray btn-sm">View</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="media-body">
                                        Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam<br/>
                                        <div class="block attrs">
                                            Members: 78954
                                        </div>
                                        <div class="block attrs">
                                            Published: No
                                        </div>
                                    </div>
                                    <div class="list-options">
                                        <button class="btn btn-gr-gray btn-sm">Delete</button>
                                        <button class="btn btn-gr-gray btn-sm">View</button>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <a class="pull-left" href="#">
                                      <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        Nulla vel metus scelerisque ante sollicitudin commodo purus odio <br/>
                                        <small>Lorem ipsum dolor sit amet, per cu solet docendi</small>
                                    </div>
                                    <div class="list-options">
                                        <button class="btn btn-gr-gray btn-sm">Delete</button>
                                        <button class="btn btn-gr-gray btn-sm">View</button>
                                    </div>
                                </div>
                                 
                                <div class="media">
                                    <div class="media-body">
                                        Wel ea elit iuvaret. Mea labitur definitiones ex <br/>
                                        <small>Create ipsum dolor sit amet, per cu solet docendi ntoenstion</small>
                                        <div class="list-options">
                                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                                            <button class="btn btn-gr-gray btn-sm">View</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <div class="media-body">
                                        Ipsum sunthom win vallaus binto munso leberations
                                        <div class="list-options">
                                            <button class="btn btn-gr-gray btn-sm">Delete</button>
                                            <button class="btn btn-gr-gray btn-sm">View</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <a class="pull-left" href="#">
                                      <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        Lotem Ipsum kandy mnsoo wen deiasel boomerag <br/>
                                        <div class="block attrs">
                                            Members: 190
                                        </div>
                                        <div class="block attrs">
                                            Published: No
                                        </div>
                                    </div>
                                    <div class="list-options">
                                        <button class="btn btn-gr-gray btn-sm">Delete</button>
                                        <button class="btn btn-gr-gray btn-sm">View</button>
                                    </div>
                                </div>
                            </div>
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
                    
                    <!-- Text -->
                    <div class="col-md-6 masonry">
                        <div class="block">          
                            <h2>Text</h2>
                            <div class="config">                           
                                <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                    <i class="fa fa-wrench"></i>
                                </a>
                            </div>      
                            
                            <div class="block-body">
                                <div class="overflow" style="height: 300px;">
                                    <p>Vestibulum quis quam velit. Aenean id libero nisl. Nullam sed tristique tellus, in ultrices lacus. Nullam porttitor dapibus mauris sed hendrerit. Aliquam pretium convallis egestas. In a purus diam. Donec et est vitae mauris luctus scelerisque sit amet ut ipsum.</p>
                                    <p>Curabitur tincidunt facilisis tincidunt. Suspendisse pulvinar semper elit in pharetra. Integer at ligula quis lacus varius rutrum venenatis quis ipsum. Ut nulla nibh, elementum et pharetra volutpat, feugiat at orci. Sed nec semper urna. In at justo et velit molestie sollicitudin vitae ut diam. Fusce sit amet fringilla turpis. Ut felis turpis, aliquet a euismod id, interdum eget est. Praesent id elementum libero, in sagittis libero.</p>
                                    <p>Tincidunt facilisis tincidunt. Suspendisse pulvinar semper elit in pharetra. Integer at ligula quis lacus varius rutrum venenatis quis ipsum. Ut nulla nibh, elementum et pharetra volutpat, feugiat at orci. Sed nec semper urna. In at justo et velit molestie sollicitudin vitae ut diam. Fusce sit amet fringilla turpis. Ut felis turpis, aliquet a euismod id, interdum eget est. Praesent id elementum libero, in sagittis libero.</p>
                                    <p>Vestibulum quis quam velit. Aenean id libero nisl. Nullam sed tristique tellus, in ultrices lacus. Nullam porttitor dapibus mauris sed hendrerit. Aliquam pretium convallis egestas. In a purus diam. Donec et est vitae mauris luctus scelerisque sit amet ut ipsum.</p>
                                </div>
                            </div>
                            
                        </div>	
		    </div>

                    <!-- Calendar -->
                    <div class="col-md-6 masonry">
                        <div class="block">
                            <h2>Calendar</h2>
                            <div class="config">  
                                <a href="" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <a href="" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                
                            </div>
                            
                            <div class="calendar-widget">
                                <div id="calendar-widget"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
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
            //Masonry for widgets
            $(window).load(function(){
                $('.m-container').masonry({
                    itemSelector: '.masonry'
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
        