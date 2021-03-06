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
            [class*="img-"] { margin: 0 15px 15px 0; }
            #font-icons .col-md-3 { margin-bottom: 13px; width: 200px; display: inline-block; }
            #font-icons [class*="icon-"] { font-size: 25px; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'ui-open-imageicon'); 
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
                    <h2 class="p-title">Images and Icons</h2>
                </header>
                
                <!-- Images -->
                <div class="c-block" id="images">
                    <h3 class="block-title">Images</h3>
                    
                    <p>Rounded, Circle and Thumbnail</p>
                    <img src="img/images-doc/rounded.jpg" class="img-rounded" alt="">
                    <img src="img/images-doc/circle.jpg" class="img-circle" alt="">
                    <img src="img/images-doc/thumbnail.jpg" class="img-thumbnail" alt="">
                    <img src="img/images-doc/shadowed.jpg" class="img-circle img-shadowed" alt="">    
                </div>
                
                <div class="divider"></div>
                
                <!-- Icons -->
                <div class="c-block" id="icons">
                    <h3 class="block-title">Icons</h3>
                    
                    <p>Thank you <a target="_blank" href="http://icomoon.io/">Icomoon</a> to provide these awsome icons.</p>
                    
                    <p></p>
                    <div class="row sortable" id="font-icons">
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-home"></span>
                                &nbsp;icon-home
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-home-2"></span>
                                &nbsp;icon-home-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-office"></span>
                                &nbsp;icon-office
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pencil"></span>
                                &nbsp;icon-pencil
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pencil-2"></span>
                                &nbsp;icon-pencil-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-quill"></span>
                                &nbsp;icon-quill
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-droplet"></span>
                                &nbsp;icon-droplet
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paint-format"></span>
                                &nbsp;icon-paint-format
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-image"></span>
                                &nbsp;icon-image
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-images"></span>
                                &nbsp;icon-images
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-camera"></span>
                                &nbsp;icon-camera
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-music"></span>
                                &nbsp;icon-music
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-headphones"></span>
                                &nbsp;icon-headphones
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-play"></span>
                                &nbsp;icon-play
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-film"></span>
                                &nbsp;icon-film
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-camera-2"></span>
                                &nbsp;icon-camera-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spades"></span>
                                &nbsp;icon-spades
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-clubs"></span>
                                &nbsp;icon-clubs
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-connection"></span>
                                &nbsp;icon-connection
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-feed"></span>
                                &nbsp;icon-feed
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-book"></span>
                                &nbsp;icon-book
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-library"></span>
                                &nbsp;icon-library
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file"></span>
                                &nbsp;icon-file
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-2"></span>
                                &nbsp;icon-file-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-3"></span>
                                &nbsp;icon-file-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-copy"></span>
                                &nbsp;icon-copy
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-copy-2"></span>
                                &nbsp;icon-copy-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-copy-3"></span>
                                &nbsp;icon-copy-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-stack"></span>
                                &nbsp;icon-stack
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-folder"></span>
                                &nbsp;icon-folder
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-folder-open"></span>
                                &nbsp;icon-folder-open
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tag"></span>
                                &nbsp;icon-tag
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-barcode"></span>
                                &nbsp;icon-barcode
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-qrcode"></span>
                                &nbsp;icon-qrcode
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cart"></span>
                                &nbsp;icon-cart
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cart-2"></span>
                                &nbsp;icon-cart-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-coin"></span>
                                &nbsp;icon-coin
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-credit"></span>
                                &nbsp;icon-credit
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-calculate"></span>
                                &nbsp;icon-calculate
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-support"></span>
                                &nbsp;icon-support
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-phone"></span>
                                &nbsp;icon-phone
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-phone-hang-up"></span>
                                &nbsp;icon-phone-hang-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-address-book"></span>
                                &nbsp;icon-address-book
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-envelop"></span>
                                &nbsp;icon-envelop
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pushpin"></span>
                                &nbsp;icon-pushpin
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-location"></span>
                                &nbsp;icon-location
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-compass"></span>
                                &nbsp;icon-compass
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-map"></span>
                                &nbsp;icon-map
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-map-2"></span>
                                &nbsp;icon-map-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-clock"></span>
                                &nbsp;icon-clock
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-clock-2"></span>
                                &nbsp;icon-clock-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-alarm"></span>
                                &nbsp;icon-alarm
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bell"></span>
                                &nbsp;icon-bell
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-calendar"></span>
                                &nbsp;icon-calendar
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-calendar-2"></span>
                                &nbsp;icon-calendar-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-print"></span>
                                &nbsp;icon-print
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-keyboard"></span>
                                &nbsp;icon-keyboard
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-screen"></span>
                                &nbsp;icon-screen
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-laptop"></span>
                                &nbsp;icon-laptop
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-mobile"></span>
                                &nbsp;icon-mobile
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tv"></span>
                                &nbsp;icon-tv
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cabinet"></span>
                                &nbsp;icon-cabinet
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-box-add"></span>
                                &nbsp;icon-box-add
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-box-remove"></span>
                                &nbsp;icon-box-remove
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-download"></span>
                                &nbsp;icon-download
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-upload"></span>
                                &nbsp;icon-upload
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-disk"></span>
                                &nbsp;icon-disk
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-undo"></span>
                                &nbsp;icon-undo
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-redo"></span>
                                &nbsp;icon-redo
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flip"></span>
                                &nbsp;icon-flip
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flip-2"></span>
                                &nbsp;icon-flip-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-undo-2"></span>
                                &nbsp;icon-undo-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-redo-2"></span>
                                &nbsp;icon-redo-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-forward"></span>
                                &nbsp;icon-forward
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-reply"></span>
                                &nbsp;icon-reply
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubble"></span>
                                &nbsp;icon-bubble
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubbles"></span>
                                &nbsp;icon-bubbles
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-user"></span>
                                &nbsp;icon-user
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-users"></span>
                                &nbsp;icon-users
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-user-2"></span>
                                &nbsp;icon-user-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-user-3"></span>
                                &nbsp;icon-user-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-busy"></span>
                                &nbsp;icon-busy
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner"></span>
                                &nbsp;icon-spinner
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner-2"></span>
                                &nbsp;icon-spinner-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner-3"></span>
                                &nbsp;icon-spinner-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner-4"></span>
                                &nbsp;icon-spinner-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner-5"></span>
                                &nbsp;icon-spinner-5
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spinner-6"></span>
                                &nbsp;icon-spinner-6
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-binoculars"></span>
                                &nbsp;icon-binoculars
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-search"></span>
                                &nbsp;icon-search
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-zoom-in"></span>
                                &nbsp;icon-zoom-in
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-zoom-out"></span>
                                &nbsp;icon-zoom-out
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-expand"></span>
                                &nbsp;icon-expand
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-contract"></span>
                                &nbsp;icon-contract
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-expand-2"></span>
                                &nbsp;icon-expand-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-contract-2"></span>
                                &nbsp;icon-contract-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-key"></span>
                                &nbsp;icon-key
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-lock"></span>
                                &nbsp;icon-lock
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-unlocked"></span>
                                &nbsp;icon-unlocked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-settings"></span>
                                &nbsp;icon-settings
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-equalizer"></span>
                                &nbsp;icon-equalizer
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cogs"></span>
                                &nbsp;icon-cogs
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cog"></span>
                                &nbsp;icon-cog
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-hammer"></span>
                                &nbsp;icon-hammer
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-wand"></span>
                                &nbsp;icon-wand
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-aid"></span>
                                &nbsp;icon-aid
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pie"></span>
                                &nbsp;icon-pie
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-stats"></span>
                                &nbsp;icon-stats
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bars"></span>
                                &nbsp;icon-bars
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bars-2"></span>
                                &nbsp;icon-bars-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-gift"></span>
                                &nbsp;icon-gift
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-trophy"></span>
                                &nbsp;icon-trophy
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-glass"></span>
                                &nbsp;icon-glass
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-food"></span>
                                &nbsp;icon-food
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-leaf"></span>
                                &nbsp;icon-leaf
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-rocket"></span>
                                &nbsp;icon-rocket
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-meter"></span>
                                &nbsp;icon-meter
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-dashboard"></span>
                                &nbsp;icon-dashboard
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-fire"></span>
                                &nbsp;icon-fire
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-lab"></span>
                                &nbsp;icon-lab
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-magnet"></span>
                                &nbsp;icon-magnet
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-remove"></span>
                                &nbsp;icon-remove
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-remove-2"></span>
                                &nbsp;icon-remove-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-briefcase"></span>
                                &nbsp;icon-briefcase
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-airplane"></span>
                                &nbsp;icon-airplane
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-truck"></span>
                                &nbsp;icon-truck
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-road"></span>
                                &nbsp;icon-road
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-lightning"></span>
                                &nbsp;icon-lightning
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-switch"></span>
                                &nbsp;icon-switch
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-power-cord"></span>
                                &nbsp;icon-power-cord
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-signup"></span>
                                &nbsp;icon-signup
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-list"></span>
                                &nbsp;icon-list
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-list-2"></span>
                                &nbsp;icon-list-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-numbered-list"></span>
                                &nbsp;icon-numbered-list
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tree"></span>
                                &nbsp;icon-tree
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cloud"></span>
                                &nbsp;icon-cloud
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cloud-download"></span>
                                &nbsp;icon-cloud-download
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cloud-upload"></span>
                                &nbsp;icon-cloud-upload
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-download-2"></span>
                                &nbsp;icon-download-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-upload-2"></span>
                                &nbsp;icon-upload-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-download-3"></span>
                                &nbsp;icon-download-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-upload-3"></span>
                                &nbsp;icon-upload-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-globe"></span>
                                &nbsp;icon-globe
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-earth"></span>
                                &nbsp;icon-earth
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-link"></span>
                                &nbsp;icon-link
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flag"></span>
                                &nbsp;icon-flag
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-attachment"></span>
                                &nbsp;icon-attachment
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-eye"></span>
                                &nbsp;icon-eye
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-eye-blocked"></span>
                                &nbsp;icon-eye-blocked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-eye-2"></span>
                                &nbsp;icon-eye-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bookmark"></span>
                                &nbsp;icon-bookmark
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bookmarks"></span>
                                &nbsp;icon-bookmarks
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-brightness-medium"></span>
                                &nbsp;icon-brightness-medium
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-brightness-contrast"></span>
                                &nbsp;icon-brightness-contrast
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-contrast"></span>
                                &nbsp;icon-contrast
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-star"></span>
                                &nbsp;icon-star
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-star-2"></span>
                                &nbsp;icon-star-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-star-3"></span>
                                &nbsp;icon-star-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-heart"></span>
                                &nbsp;icon-heart
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-heart-2"></span>
                                &nbsp;icon-heart-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-heart-broken"></span>
                                &nbsp;icon-heart-broken
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-thumbs-up"></span>
                                &nbsp;icon-thumbs-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-thumbs-up-2"></span>
                                &nbsp;icon-thumbs-up-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-smiley"></span>
                                &nbsp;icon-smiley
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-smiley-2"></span>
                                &nbsp;icon-smiley-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cool"></span>
                                &nbsp;icon-cool
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-point-up"></span>
                                &nbsp;icon-point-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-point-right"></span>
                                &nbsp;icon-point-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-point-down"></span>
                                &nbsp;icon-point-down
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-point-left"></span>
                                &nbsp;icon-point-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-warning"></span>
                                &nbsp;icon-warning
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-notification"></span>
                                &nbsp;icon-notification
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-question"></span>
                                &nbsp;icon-question
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-info"></span>
                                &nbsp;icon-info
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-info-2"></span>
                                &nbsp;icon-info-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-blocked"></span>
                                &nbsp;icon-blocked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cancel-circle"></span>
                                &nbsp;icon-cancel-circle
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkmark-circle"></span>
                                &nbsp;icon-checkmark-circle
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spam"></span>
                                &nbsp;icon-spam
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-close"></span>
                                &nbsp;icon-close
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkmark"></span>
                                &nbsp;icon-checkmark
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkmark-2"></span>
                                &nbsp;icon-checkmark-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-spell-check"></span>
                                &nbsp;icon-spell-check
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-minus"></span>
                                &nbsp;icon-minus
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-plus"></span>
                                &nbsp;icon-plus
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-enter"></span>
                                &nbsp;icon-enter
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-exit"></span>
                                &nbsp;icon-exit
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-play-2"></span>
                                &nbsp;icon-play-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pause"></span>
                                &nbsp;icon-pause
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-stop"></span>
                                &nbsp;icon-stop
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-backward"></span>
                                &nbsp;icon-backward
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-forward-2"></span>
                                &nbsp;icon-forward-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-play-3"></span>
                                &nbsp;icon-play-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pause-2"></span>
                                &nbsp;icon-pause-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-stop-2"></span>
                                &nbsp;icon-stop-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-backward-2"></span>
                                &nbsp;icon-backward-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-forward-3"></span>
                                &nbsp;icon-forward-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-first"></span>
                                &nbsp;icon-first
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-last"></span>
                                &nbsp;icon-last
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-previous"></span>
                                &nbsp;icon-previous
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-next"></span>
                                &nbsp;icon-next
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-eject"></span>
                                &nbsp;icon-eject
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-high"></span>
                                &nbsp;icon-volume-high
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-medium"></span>
                                &nbsp;icon-volume-medium
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-low"></span>
                                &nbsp;icon-volume-low
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-mute"></span>
                                &nbsp;icon-volume-mute
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-mute-2"></span>
                                &nbsp;icon-volume-mute-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-increase"></span>
                                &nbsp;icon-volume-increase
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-volume-decrease"></span>
                                &nbsp;icon-volume-decrease
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-loop"></span>
                                &nbsp;icon-loop
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-loop-2"></span>
                                &nbsp;icon-loop-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-loop-3"></span>
                                &nbsp;icon-loop-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-shuffle"></span>
                                &nbsp;icon-shuffle
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-left"></span>
                                &nbsp;icon-arrow-up-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up"></span>
                                &nbsp;icon-arrow-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-right"></span>
                                &nbsp;icon-arrow-up-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-right"></span>
                                &nbsp;icon-arrow-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-right"></span>
                                &nbsp;icon-arrow-down-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down"></span>
                                &nbsp;icon-arrow-down
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-left"></span>
                                &nbsp;icon-arrow-down-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-left"></span>
                                &nbsp;icon-arrow-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-left-2"></span>
                                &nbsp;icon-arrow-up-left-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-2"></span>
                                &nbsp;icon-arrow-up-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-right-2"></span>
                                &nbsp;icon-arrow-up-right-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-right-2"></span>
                                &nbsp;icon-arrow-right-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-right-2"></span>
                                &nbsp;icon-arrow-down-right-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-2"></span>
                                &nbsp;icon-arrow-down-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-left-2"></span>
                                &nbsp;icon-arrow-down-left-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-left-2"></span>
                                &nbsp;icon-arrow-left-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-left-3"></span>
                                &nbsp;icon-arrow-up-left-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-3"></span>
                                &nbsp;icon-arrow-up-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-up-right-3"></span>
                                &nbsp;icon-arrow-up-right-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-right-3"></span>
                                &nbsp;icon-arrow-right-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-right-3"></span>
                                &nbsp;icon-arrow-down-right-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-3"></span>
                                &nbsp;icon-arrow-down-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-down-left-3"></span>
                                &nbsp;icon-arrow-down-left-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-arrow-left-3"></span>
                                &nbsp;icon-arrow-left-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tab"></span>
                                &nbsp;icon-tab
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkbox-checked"></span>
                                &nbsp;icon-checkbox-checked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkbox-unchecked"></span>
                                &nbsp;icon-checkbox-unchecked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-checkbox-partial"></span>
                                &nbsp;icon-checkbox-partial
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-radio-checked"></span>
                                &nbsp;icon-radio-checked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-radio-unchecked"></span>
                                &nbsp;icon-radio-unchecked
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-crop"></span>
                                &nbsp;icon-crop
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-scissors"></span>
                                &nbsp;icon-scissors
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-filter"></span>
                                &nbsp;icon-filter
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-filter-2"></span>
                                &nbsp;icon-filter-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-font"></span>
                                &nbsp;icon-font
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-text-height"></span>
                                &nbsp;icon-text-height
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-text-width"></span>
                                &nbsp;icon-text-width
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bold"></span>
                                &nbsp;icon-bold
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-underline"></span>
                                &nbsp;icon-underline
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-italic"></span>
                                &nbsp;icon-italic
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-strikethrough"></span>
                                &nbsp;icon-strikethrough
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-omega"></span>
                                &nbsp;icon-omega
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-sigma"></span>
                                &nbsp;icon-sigma
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-table"></span>
                                &nbsp;icon-table
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-table-2"></span>
                                &nbsp;icon-table-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pilcrow"></span>
                                &nbsp;icon-pilcrow
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-left-to-right"></span>
                                &nbsp;icon-left-to-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-right-to-left"></span>
                                &nbsp;icon-right-to-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-left"></span>
                                &nbsp;icon-paragraph-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-center"></span>
                                &nbsp;icon-paragraph-center
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-right"></span>
                                &nbsp;icon-paragraph-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-justify"></span>
                                &nbsp;icon-paragraph-justify
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-left-2"></span>
                                &nbsp;icon-paragraph-left-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-center-2"></span>
                                &nbsp;icon-paragraph-center-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-right-2"></span>
                                &nbsp;icon-paragraph-right-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paragraph-justify-2"></span>
                                &nbsp;icon-paragraph-justify-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-indent-increase"></span>
                                &nbsp;icon-indent-increase
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-indent-decrease"></span>
                                &nbsp;icon-indent-decrease
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-new-tab"></span>
                                &nbsp;icon-new-tab
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-embed"></span>
                                &nbsp;icon-embed
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-code"></span>
                                &nbsp;icon-code
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-console"></span>
                                &nbsp;icon-console
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-share"></span>
                                &nbsp;icon-share
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-google-plus"></span>
                                &nbsp;icon-google-plus
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-google-plus-2"></span>
                                &nbsp;icon-google-plus-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-instagram"></span>
                                &nbsp;icon-instagram
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-twitter"></span>
                                &nbsp;icon-twitter
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-twitter-2"></span>
                                &nbsp;icon-twitter-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-feed-2"></span>
                                &nbsp;icon-feed-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-feed-3"></span>
                                &nbsp;icon-feed-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-youtube"></span>
                                &nbsp;icon-youtube
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-youtube-2"></span>
                                &nbsp;icon-youtube-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-vimeo"></span>
                                &nbsp;icon-vimeo
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-vimeo2"></span>
                                &nbsp;icon-vimeo2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-vimeo-2"></span>
                                &nbsp;icon-vimeo-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-lanyrd"></span>
                                &nbsp;icon-lanyrd
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flickr"></span>
                                &nbsp;icon-flickr
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flickr-2"></span>
                                &nbsp;icon-flickr-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flickr-3"></span>
                                &nbsp;icon-flickr-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-flickr-4"></span>
                                &nbsp;icon-flickr-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-picassa"></span>
                                &nbsp;icon-picassa
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-dribbble"></span>
                                &nbsp;icon-dribbble
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-forrst"></span>
                                &nbsp;icon-forrst
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-steam"></span>
                                &nbsp;icon-steam
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tumblr"></span>
                                &nbsp;icon-tumblr
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-yahoo"></span>
                                &nbsp;icon-yahoo
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-linkedin"></span>
                                &nbsp;icon-linkedin
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-lastfm"></span>
                                &nbsp;icon-lastfm
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-stumbleupon"></span>
                                &nbsp;icon-stumbleupon
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-pinterest"></span>
                                &nbsp;icon-pinterest
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-paypal"></span>
                                &nbsp;icon-paypal
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-pdf"></span>
                                &nbsp;icon-file-pdf
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-openoffice"></span>
                                &nbsp;icon-file-openoffice
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-word"></span>
                                &nbsp;icon-file-word
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-excel"></span>
                                &nbsp;icon-file-excel
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-zip"></span>
                                &nbsp;icon-file-zip
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-xml"></span>
                                &nbsp;icon-file-xml
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-html5"></span>
                                &nbsp;icon-html5
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-html5-2"></span>
                                &nbsp;icon-html5-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-css3"></span>
                                &nbsp;icon-css3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-chrome"></span>
                                &nbsp;icon-chrome
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-firefox"></span>
                                &nbsp;icon-firefox
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-IE"></span>
                                &nbsp;icon-IE
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-opera"></span>
                                &nbsp;icon-opera
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-safari"></span>
                                &nbsp;icon-safari
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-IcoMoon"></span>
                                &nbsp;icon-IcoMoon
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-feed-4"></span>
                                &nbsp;icon-feed-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-twitter-3"></span>
                                &nbsp;icon-twitter-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-tumblr-2"></span>
                                &nbsp;icon-tumblr-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-facebook"></span>
                                &nbsp;icon-facebook
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-storage"></span>
                                &nbsp;icon-storage
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-wrench"></span>
                                &nbsp;icon-wrench
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-menu"></span>
                                &nbsp;icon-menu
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-notebook"></span>
                                &nbsp;icon-notebook
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubbles-2"></span>
                                &nbsp;icon-bubbles-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubble-2"></span>
                                &nbsp;icon-bubble-2
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubbles-3"></span>
                                &nbsp;icon-bubbles-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-bubbles-4"></span>
                                &nbsp;icon-bubbles-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-history"></span>
                                &nbsp;icon-history
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-file-4"></span>
                                &nbsp;icon-file-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-profile"></span>
                                &nbsp;icon-profile
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-cone"></span>
                                &nbsp;icon-cone
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-grid"></span>
                                &nbsp;icon-grid
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-angle-right"></span>
                                &nbsp;icon-angle-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-angle-left"></span>
                                &nbsp;icon-angle-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-angle-up"></span>
                                &nbsp;icon-angle-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-angle-down"></span>
                                &nbsp;icon-angle-down
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-double-angle-down"></span>
                                &nbsp;icon-double-angle-down
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-double-angle-up"></span>
                                &nbsp;icon-double-angle-up
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-double-angle-right"></span>
                                &nbsp;icon-double-angle-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-double-angle-left"></span>
                                &nbsp;icon-double-angle-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-quote-left"></span>
                                &nbsp;icon-quote-left
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-quote-right"></span>
                                &nbsp;icon-quote-right
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-google-plus-3"></span>
                                &nbsp;icon-google-plus-3
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-google-plus-4"></span>
                                &nbsp;icon-google-plus-4
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-reddit"></span>
                                &nbsp;icon-reddit
                        </span>
                        <span class="col-md-3">
                                <span aria-hidden="true" class="icon-delicious"></span>
                                &nbsp;icon-delicious
                        </span>
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

            $(function() {
                $( ".sortable" ).sortable({
                  revert: true
                });
                $( "#draggable" ).draggable({
                  connectToSortable: ".sortable",
                  revert: "invalid"
                });
            });
        </script>
    </body>
</html>
        