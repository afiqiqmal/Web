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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'wall'); 
                        ?>
                    </div>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </aside>
               
            <!-- Right Sidebar -->
            <aside id="rightbar" class="pull-right">
                <div class="sidebar-container">
                     
                    <!-- Picture Album -->
                    <div class="shadowed p-album">
                         <h3 class="title">Picture Album</h3>
                         <div class="p-album-body text-center">
                              <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/1.jpg" alt="">
                              </a>
                              <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/2.jpg" alt="">
                              </a>
                              <a href="img/gallery/3.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/3.jpg" alt="">
                              </a>
                              <a href="img/gallery/4.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/4.jpg" alt="">
                              </a>
                              <a href="img/gallery/5.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/5.jpg" alt="">
                              </a>
                              <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                <img src="img/gallery/thumbs/2.jpg" alt="">
                              </a>
                              
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
                    
                    <!-- Line Chart -->
                    <div class="shadowed states">
                         <h3 class="title">Line Chart</h3>
                         <div class="side-border">
                              <div id="side-line" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line2" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 2</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line3" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 3</small>
                         </div>
                    </div>
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content">
                <header class="p-header">
                    <h2 class="p-title">Social Wall</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn btn-gr-gray select btn-sm" data-toggle="dropdown" href="#">All Events&nbsp; <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                    </div>
                </header>
                
                <!-- Post Area -->
                <div class="post-area">
                    <ul class="post-menu list-inline">
                        <li><a class="active" href="#"><i class="fa fa-comments"></i> <span>Post</span></a></li>
                        <li><a href="#"><i class="fa fa-justify"></i> <span>Poll</span></a></li>
                        <li><a href="#"><i class="fa fa-globe"></i> <span>News</span></a></li>
                        <li><a href="#"><i class="fa fa-pencil"></i> <span>Task</span></a></li>
                    </ul>
                    <div class="posting">
                        <textarea class="text-post" placeholder="Write something..."></textarea>
                        <div class="post-options">
                            <a href="#" data-toggle="tooltip" data-original-title="Image" class="ttips"><i class="fa fa-image"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Link" class="ttips"><i class="fa fa-link"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Quote" class="ttips"><i class="fa fa-quote-right"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Calendar" class="ttips"><i class="fa fa-calendar"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="File" class="ttips"><i class="fa fa-copy"></i></a>
                        </div>
                        
                        <div class="share-to">
                            <div class="to">
                                <i class="fa fa-arrow-right"></i> To 
                            </div>
                            <select data-placeholder="Select Users..." class="tag-select" multiple tabindex="4">
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
                            
                            <button class="btn btn-warning wall-post">POST</button>
                        </div>
                    </div>
                </div>
                
                <hr class="divider" />
                
                <!-- Postings -->
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Malinda Hollaway</a>
                                    <span class="postfor">
                                        <i class="fa fa-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p>Suspendisse rutrum in tellus sit amet imperdiet. In et augue dignissim, mattis velit nec, mattis diam. Ut laoreet risus urna, eu blandit urna malesuada dapibus. Duis pellentesque ipsum at faucibus malesuada. Sed nec accumsan est, quis imperdiet ipsum. Donec condimentum elit elit, at tempor enim rutrum vel. Nunc et nisi vitae nisi aliquet luctus vitae quis risus.</p>
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="fa fa-comments"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="fa fa-star"></i>
                                    10 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="fa fa-clock-o"></i>
                                    20 June 8.50 pm
                                </span>
                            </div>
                          
                            <!-- Comments -->
                            <div class="comments">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/2.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">David Villa</a>
                                            </span>
                                        </div>
                                        <p>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                                <i class="fa fa-clock-o"></i>
                                                22 June 2.50 pm
                                            </span>
                                            <a href="#" class="post-like">
                                                <i class="fa fa-star"></i>
                                                15 Likes
                                            </a>
                                            <a href="" class="post-reply">
                                                <i class="fa fa-comments"></i>
                                                Reply
                                            </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/3.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jason Kingston</a>
                                            </span>
                                        </div>
                                        <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                            <i class="fa fa-clock-o"></i>
                                            22 June 1.10 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="fa fa-star"></i>
                                            08 Likes
                                        </a>
                                        <a href="" class="post-reply">
                                            <i class="fa fa-comments"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/4.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jhon Morrison</a>
                                            </span>
                                        </div>
                                        <p>Morbi ut urna velit. Curabitur elit massa, pretium et dolor ut, tincidunt feugiat elit. Nam interdum lectus id arcu pulvinar, sed luctus neque lobortis. Nam non consectetur ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet velit non sapien mattis adipiscing. Vivamus eu ultrices purus.</p>
                                        <span class="post-time">
                                            <i class="fa fa-clock-o"></i>
                                            20 June 2.00 am
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="fa fa-star"></i>
                                            01 Likes
                                        </a>
                                        <a href="" class="post-reply">
                                            <i class="fa fa-comments"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media add-comment col-lg-12">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/4.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Jhon Morrison </a>
                                    <span class="postfor">
                                        <i class="fa fa-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Nunc iaculis quam et augue elementum scelerisque. Ut leo felis, volutpat eget eros vitae, viverra venenatis libero. Pellentesque ac mauris tellus. In faucibus, enim a euismod tristique, tortor quam vestibulum metus, quis egestas massa risus non elit. Integer vestibulum quam eu dapibus sollicitudin. Proin egestas congue nunc a molestie. Etiam in sapien at enim commodo placerat vel in elit. Mauris sit amet pulvinar erat.</p>
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="fa fa-comments"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="fa fa-star"></i>
                                    10 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="fa fa-clock-o"></i>
                                    18 June 12.50 pm
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/3.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Jason Kingston</a>
                                    <span class="postfor">
                                        <i class="fa fa-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Hay guyz... check this out from my new album.</p>
                            <div class="album-post">
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                    <img src="img/gallery/thumbs/1.jpg" alt="" />
                                </a>
                                <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Sed ultrices orci iaculis augue tincidunt gravida">
                                    <img src="img/gallery/thumbs/2.jpg" alt="" />
                                </a>
                                <a href="img/gallery/3.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Donec ullamcorper malesuada magna mollis pellentesque">
                                    <img src="img/gallery/thumbs/3.jpg" alt="" />
                                </a>
                                <a href="img/gallery/4.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Aliquam tincidunt auctor nibh non convallis">
                                    <img src="img/gallery/thumbs/4.jpg" alt="" />
                                </a>
                                <a href="img/gallery/5.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Quelorem venenatis aliquet enim non venenatis">
                                    <img src="img/gallery/thumbs/5.jpg" alt="" />
                                </a>
                            </div>
                            
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="fa fa-comments"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="fa fa-star"></i>
                                    02 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="fa fa-clock-o"></i>
                                    16 June 4.27 am
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">David Villa</a>
                                    <span class="postfor">
                                        <i class="fa fa-angle-right"></i> 
                                        Jason Kingston, Jhon Morrison and Me
                                    </span>
                                </span>
                            </div>
                            <p>Maecenas sed mi sit amet lorem sollicitudin cursus at ac nisl. Vestibulum a convallis metus. Quisque lectus nulla, bibendum a sem et, placerat dignissim enim.</p> 
                        
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="fa fa-comments"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="fa fa-star"></i>
                                    34 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="fa fa-clock-o"></i>
                                    16 June 3.50 am
                                </span>
                            </div>
                            
                            <!-- Comments -->
                            <div class="comments">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/3.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jason Kingston</a>
                                            </span>
                                        </div>
                                        <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                            <i class="fa fa-clock-o"></i>
                                            17 June 1.00 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="fa fa-star"></i>
                                            03 Likes
                                        </a>
                                        <a href="" class="post-reply">
                                            <i class="fa fa-comments"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/4.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jhon Morrison</a>
                                            </span>
                                        </div>
                                        <p>Morbi ut urna velit. Curabitur elit massa, pretium et dolor ut, tincidunt feugiat elit. Nam interdum lectus id arcu pulvinar, sed luctus neque lobortis. Nam non consectetur ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet velit non sapien mattis adipiscing. Vivamus eu ultrices purus.</p>
                                        <span class="post-time">
                                            <i class="fa fa-clock-o"></i>
                                            17 June 2.02 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="fa fa-star"></i>
                                            19 Likes
                                        </a>
                                        <a href="" class="post-reply">
                                            <i class="fa fa-comments"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media add-comment col-lg-12">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Malinda Hollaway </a>
                                    <span class="postfor">
                                        <i class="fa fa-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Malinda Hollaway shared a picture from her album with All Staffs</p>
                            <a href="img/gallery/6.jpg" data-rel="shadowbox" class="img-popup" title="Lovely evening in Noreway">
                                <img class="image-post" src="img/gallery/6.jpg" alt="" />
                            </a>
                            
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="fa fa-comments"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="fa fa-star"></i>
                                    56 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="fa fa-clock-o"></i>
                                    14 June 3.44 am
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <div class="clearfix"></div>
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
        