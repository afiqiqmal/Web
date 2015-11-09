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
        <!-- custom page css-->
        <style type="text/css">
            .c-block { display: inline-block; width: 100%; }
            .make-switch { margin-right: 10px; margin-bottom: 5px; vertical-align: bottom; }
            .datetime-pick { margin-bottom: 10px; }
            
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'form-open-component'); 
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
                    <h2 class="p-title">Form Components</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="icon-angle-down"></span></a>
                        <ul class="dropdown-menu pull-right text-right" role="menu">
                            <li><a href="#custom-select">Custom Select</a></li>
                            <li><a href="#tag-select">Tag Selection</a></li>
                            <li><a href="#toggle-switch">Toggle Switch</a></li>
                            <li><a href="#button">Button Checkbox & Radio</a></li>
                            <li><a href="#date-time">Date Time Picker</a></li>
                            <li><a href="#color-picker">Color Picker</a></li>
                            <li><a href="#slider">Input Slider</a></li>
                            <li><a href="#upload">File Upload</a></li>
                        </ul>
                    </div>
                </header>
                
                <!-- Custom Select -->
                <div class="c-block" id="custom-select">
                    <h3 class="block-title">Custom Select</h3>
                    
                    <p>Custom Select boxes based on Bootstrap Dropdowns</p>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="select">
                                <option>Default</option>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <select class="select">
                                <optgroup label="Toyota">
                                    <option>Grouped</option>
                                    <option>Toyota Avalon</option>
                                    <option>Toyota Crown</option>
                                    <option>Toyota FT86 </option>
                                </optgroup>
                                 <optgroup label="Lexus">
                                    <option>Lexus LS600</option>
                                    <option>Lexus LFA</option>
                                    <option>Lexus LX570</option>
                                </optgroup>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <select class="select">
                                <option>Divider</option>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Toyota FT86 </option>
                                <option data-divider="true">&nbsp;</option>
                                <option>Lexus LS600</option>
                                <option>Lexus LFA</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <select class="select">
                                <option>Option Disabled</option>
                                <option>Toyota Avalon</option>
                                <option disabled="disabled">Toyota Crown</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <select class="select">
                                <option data-icon="fa fa-comment">With Icon</option>
                                <option data-icon="fa fa-flickr">Toyota FT86</option>
                                <option data-icon="fa fa-heart">Toyota Crown</option>
                                <option data-icon="fa fa-star">Lexus LX570</option>
                            </select>
                        </div>
                    </div>
                    
                    <p>Multiple Selects</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="select" multiple>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Toyota FT86 </option>
                                <option>Lexus LS600</option>
                                <option>Lexus LFA</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <select class="select" multiple data-selected-text-format="count>3">
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Toyota FT86 </option>
                                <option>Lexus LS600</option>
                                <option>Lexus LFA</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                    </div>
                    
                    <p>Skinned Selects</p>
                    <div class="row">
                        <div class="col-md-2">
                            <select class="select" data-style="btn-warning">
                                <option>Toyota Avalon</option>
                                <option>Lexus LS600hl</option>
                                <option>Toyota Crown</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2">
                            <select class="select" data-style="btn-success">
                                <option>Lexus LX570</option>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Lexus LS600hl</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2">
                            <select class="select" data-style="btn-info">
                                <option>Toyota Crown</option>
                                <option>Lexus LS600hl</option>
                                <option>Toyota Avalon</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2">
                            <select class="select" data-style="btn-danger">
                                <option>Lexus LS600hl</option>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2">
                            <select class="select" data-style="btn-dark">
                                <option>Honda Accord</option>
                                <option>Toyota Avalon</option>
                                <option>Toyota Crown</option>
                                <option>Lexus LX570</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Tag Selection -->
                <div class="c-block" id="tag-select">
                    <h3 class="block-title">Tag Selection</h3>
                    <p>Default Tag selector</p>
                    <select data-placeholder="Select Users..." class="tag-select" multiple>
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
                        <option value="Henry Hadson">Henry Hadson</option> 
                        <option value="Joshep Fernandez">Joshep Fernandez</option> 
                        <option value="Armani Jens">Armani Jens</option> 
                        <option value="Wen Diopal">Wen Diopal</option> 
                        <option value="Aura Moringson">Aura Moringson</option> 
                        <option value="Peter Robinson">Peter Robinson</option> 
                        <option value="Dave Watmore">Dave Watmore</option> 
                        <option value="Jordan Orlendo">Jordan Orlendo</option> 
                        <option value="Christopher Nolen">Christopher Nolen</option> 
                    </select>
                    <p></p>
                    <p>Disabled Options</p>
                    <select data-placeholder="Select Users..." class="tag-select" multiple>
                        <option value="David Becham" disabled>David Becham</option> 
                        <option value="Christian Bale">Christian Bale</option> 
                        <option value="Malinda Hollaway" disabled>Malinda Hollaway</option> 
                        <option value="Jason Stathom" disabled>Jason Stathom</option> 
                        <option value="Wen De Soza">Wen De Soza</option> 
                        <option value="Jhon Morrison">Jhon Morrison</option> 
                        <option value="William Gale">William Gale</option> 
                        <option value="Mark Hakngtosh" disabled>Mark Hakngtosh</option> 
                        <option value="Angola Jenolia" disabled>Angola Jenolia</option> 
                        <option value="William Jansen">William Jansen</option>
                        <option value="Kat Steven">Kat Steven</option> 
                        <option value="Henry Hadson">Henry Hadson</option> 
                        <option value="Joshep Fernandez" disabled>Joshep Fernandez</option> 
                        <option value="Armani Jens" disabled>Armani Jens</option> 
                        <option value="Wen Diopal">Wen Diopal</option> 
                        <option value="Aura Moringson">Aura Moringson</option> 
                        <option value="Peter Robinson">Peter Robinson</option> 
                        <option value="Dave Watmore">Dave Watmore</option> 
                        <option value="Jordan Orlendo" disabled>Jordan Orlendo</option> 
                        <option value="Christopher Nolen">Christopher Nolen</option> 
                    </select>
                    <p></p>
                    <p>Limit Selected Options(Set to 5)</p>
                    <select data-placeholder="Select Users..." class="tag-select-limited" multiple>
                        <option value="">&nbsp;</option> 
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
                        <option value="Henry Hadson">Henry Hadson</option> 
                        <option value="Joshep Fernandez">Joshep Fernandez</option> 
                        <option value="Armani Jens" >Armani Jens</option> 
                        <option value="Wen Diopal">Wen Diopal</option> 
                        <option value="Aura Moringson">Aura Moringson</option> 
                        <option value="Peter Robinson">Peter Robinson</option> 
                        <option value="Dave Watmore">Dave Watmore</option> 
                        <option value="Jordan Orlendo">Jordan Orlendo</option> 
                        <option value="Christopher Nolen">Christopher Nolen</option> 
                    </select>
                </div>
                
                <div class="divider"></div>
                
                <!-- Toggler -->
                <div class="c-block" id="toggle-switch">
                    <h3 class="block-title">Toggle Switch</h3>
                    <p>Default Tag selector</p>
                    <div class="make-switch switch-large" data-on="info" data-off="success">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch switch-small">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch switch-mini">
                        <input type="checkbox">
                    </div>
                    
                    <p></p>
                    <p>Custom Text Labels</p>
                    <div class="make-switch" data-text-label="TV">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch" data-text-label="MT">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch" data-text-label="ab">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch" data-text-label="Zr">
                        <input type="checkbox">
                    </div>
                    
                    <p></p>
                    <p>With Icons</p>
                    <div class="make-switch" data-label-icon="fa fa-phone" data-on-label="<i class='fa fa-check'></i>" data-off-label="<i class='fa fa-close'></i>">
                        <input type="checkbox">
                    </div>
                     
                    <div class="make-switch" data-label-icon="fa fa-facebook" data-on-label="<i class='fa fa-thumbs-up'></i>" data-off-label="<i class='fa fa-thumbs-down'></i>">
                        <input type="checkbox">
                    </div>
                     
                    <div class="make-switch" data-label-icon="fa fa-globe" data-on-label="<i class='fa fa-angle-left'></i>" data-off-label="<i class='fa fa-angle-right'></i>">
                        <input type="checkbox">
                    </div>
                    
                    <div class="make-switch" data-label-icon="fa fa-comment" data-on-label="<i class='fa fa-undo'></i>" data-off-label="<i class='fa fa-repeat'></i>">
                        <input type="checkbox">
                    </div>
                    
                    <p></p>
                    <p>Disabled</p>
                    <div class="make-switch switch-large" data-on="info" data-off="success">
                        <input type="checkbox" checked disabled>
                    </div>
                    
                    <div class="make-switch">
                        <input type="checkbox" checked disabled>
                    </div>
                    
                    <div class="make-switch switch-small">
                        <input type="checkbox" checked disabled>
                    </div>
                    
                    <div class="make-switch switch-mini">
                        <input type="checkbox" checked disabled>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Buttons -->
                <div class="c-block" id="button">
                    <h3 class="block-title">Button Checkbox and Radio</h3>
                    <p>Checkbox</p>
        
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="checkbox" /> Option 1
                        </label>
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="checkbox" /> Option 2
                        </label>
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="checkbox" /> Option 3
                        </label>
                    </div>
                    
                    <p></p>
                    <p>Radio</p>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="radio" name="options" id="option1" /> Option 1
                        </label>
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="radio" name="options" id="option2" /> Option 2
                        </label>
                        <label class="btn btn-gr-gray btn-sm">
                            <input type="radio" name="options" id="option3" /> Option 3
                        </label>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Date Time Picker -->
                <div class="c-block" id="date-time">
                    <h3 class="block-title">Date Time Picker</h3>
                    <p>Use Grid Classes to resize the column sizes.</p>
                    <p>Date Picker</p>
                    <div class="input-icon datetime-pick date-only">
                        <input data-format="dd/MM/yyyy" type="text" class="form-control" />
                        <span class="add-on">
                              <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                    
                    <p></p>
                    <p>24hr Time Picker</p>
                    <div class="input-icon datetime-pick time-only">
                        <input data-format="hh:mm:ss" type="text" class="form-control" />
                        <span class="add-on">
                            <i class="fa fa-clock-o"></i>
                        </span>
                    </div>
                    
                    <p></p>
                    <p>12hr Time Picker</p>
                    <div class="input-icon datetime-pick time-only-12">
                        <input data-format="hh:mm:ss" type="text" class="form-control" />
                        <span class="add-on">
                            <i class="fa fa-clock-o"></i>
                        </span>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Color Picker -->
                <div class="c-block" id="color-picker">
                    <h3 class="block-title">Color Picker</h3>
                    <p>Default - hex</p>
                    <div class="color-pick input-icon">
                        <input class="form-control color-picker" type="text" />
                        <span class="color-preview"></span>
                        <span class="add-on">
                            <i class="fa fa-eyedropper"></i>
                        </span>
                    </div>
                    
                    
                    <p></p>
                    <p>RGB</p>
                    <div class="color-pick input-icon">
                        <input class="form-control color-picker-rgb" type="text" />
                        <span class="color-preview"></span>
                        <span class="add-on">
                            <i class="fa fa-eyedropper"></i>
                        </span>
                    </div>
                    
                    <p></p>
                    <p>RGBA</p>
                    <div class="color-pick input-icon">
                        <input class="form-control color-picker-rgba" type="text" />
                        <span class="color-preview"></span>
                        <span class="add-on">
                            <i class="fa fa-eyedropper"></i>
                        </span>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Slider -->
                <div class="c-block" id="slider">
                    <h3 class="block-title">Input Slider</h3>
                    <p>Defaul Input Slidert</p>
                    <input type="text" class="input-slider">
                    <p></p>
                    
                    <p>Advanced - Orientation, Min Value, Max Value, Default Value, Increment Step and Slider Selection</p>
                    <input type="text" class="input-slider" data-slider-min="-20" data-slider-max="20" data-slider-step="1" data-slider-value="-14" data-slider-orientation="horizontal" data-slider-selection="after">
                    <p></p>
                    
                    <p>Range Selector</p>
                    <input type="text" class="input-slider" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]">
                    <p></p>
                    
                    <p>No Tooltip</p>
                    <input type="text" class="input-slider" data-slider-tooltip="hide">
                    <p></p>
                    
                    <p>Out put value to a text box</p>
                    <div class="slider-container">
                        <input type="text" class="input-slider" data-slider-min="0" data-slider-max="2000" data-slider-value="800">
                        <p></p>
                        
                        <div class="row">
                            <div class="col-md-2 pull-right">
                                <input type="text" value="800" class="form-control input-sm slider-value">
                            </div>
                        </div>
                    </div>
                    <p></p>
                    
                    <p>Vertical Slider</p>
                    <input type="text" class="input-slider" value="" data-slider-min="-20" data-slider-max="20" data-slider-value="-15" data-slider-orientation="vertical" data-slider-selection="after">
                    <input type="text" class="input-slider" value="" data-slider-min="-20" data-slider-max="20" data-slider-value="14" data-slider-orientation="vertical" data-slider-selection="after">
                    <input type="text" class="input-slider" value="" data-slider-min="-20" data-slider-max="20" data-slider-value="-2" data-slider-orientation="vertical" data-slider-selection="after">
                    <input type="text" class="input-slider" value="" data-slider-min="-20" data-slider-max="20" data-slider-value="-11" data-slider-orientation="vertical" data-slider-selection="after">
                    <input type="text" class="input-slider" value="" data-slider-min="-20" data-slider-max="20" data-slider-value="8" data-slider-orientation="vertical" data-slider-selection="after">
                </div>
                
                <div class="divider"></div>
                
                <!-- File Upload -->
                <div class="c-block" id="upload">
                    <h3 class="block-title">Simple File Upload</h3>
                    <p>Default with button only</p>
                    
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-file btn-gr-gray btn-sm">
                            <span class="fileupload-new">Select file</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" />
                        </span>
                        <span class="fileupload-preview"></span>
                        <a href="#" class="close close-pic fileupload-exists" data-dismiss="fileupload">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                    
                    <p></p>
                    <p>With remove button</p>
                    <div class="fileupload fileupload-new row" data-provides="fileupload">
                        <div class="input-group col-md-6">
                            <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            <div class="input-group-btn">
                                <span class="btn btn-file btn-gr-gray btn-sm">
                                <span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" />
                            </span>
                            </div>

                            <a href="#" class="btn btn-sm btn-gr-gray fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                    <p></p>
                    
                    <p>Image Preview</p>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail"></div>
                        
                        <div>
                            <span class="btn btn-file btn-sm btn-gr-gray">
                                <span class="fileupload-new">Select image</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" />
                            </span>
                            <a href="#" class="btn fileupload-exists btn-sm btn-gr-gray" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                    
                    <p></p>
                    <p>Another preview option</p>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail small"></div>
                        <div class="fileupload-preview fileupload-exists thumbnail small"></div>
                        <span class="btn btn-file btn-sm btn-gr-gray">
                            <span class="fileupload-new">Select image</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" />
                        </span>
                        <a href="#" class="btn-sm btn-gr-gray btn fileupload-exists" data-dismiss="fileupload">Remove</a>
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
                /* Tag Select */
                (function(){
                    /* Limited */
                    $(".tag-select-limited").chosen({
                        max_selected_options: 5
                    });
                })();
                
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
        