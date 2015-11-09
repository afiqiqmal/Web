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
            
        <!-- custom pag css -->
        <style type="text/css">
            .c-block { margin-bottom: 30px; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'typo'); 
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
                    
                    <!-- News Feeds -->
                    <div class="shadowed news-feed">
                        <h3 class="title">News Feeds</h3>
                        <div id="news-feed" class="overflow"></div>
                    </div>
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="fa fa-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content">
                <header class="p-header">
                    <h2>Typography</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn select btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="caret"></span></a>
                        <ul class="dropdown-menu pull-right text-right" role="menu">
                            <li><a href="#paragraph">Paragraph</a></li>
                            <li><a href="#heading">Heading</a></li>
                            <li><a href="#dropcaps">Dropcaps</a></li>
                            <li><a href="#alignmentClasses">Alignment Classes</a></li>
                            <li><a href="#emphasisClasses">Emphasis classes</a></li>
                            <li><a href="#abbreviations">Abbreviations</a></li>
                            <li><a href="#addresses">Addresses</a></li>
                            <li><a href="#blockquote">Blockquote</a></li>
                            <li><a href="#orderedList">Ordered List</a></li>
                            <li><a href="#unorderedList">Unordered List</a></li>
                        </ul>
                    </div>
                </header>
                
                <!-- Paragraph -->
                <article id="paragraph" class="c-block">
                    <h3 class="block-title">Paragraph</h3>
                    <p>Pellentesque lacinia sagittis libero et feugiat. Etiam volutpat adipiscing tortor non luctus. Vivamus venenatis vitae metus et aliquet. Praesent vitae justo purus. In hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est sit amet, lacinia euismod nunc. Aenean nec nibh velit. Fusce quis ante in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.</p>
                    <p>Integer eu lectus sollicitudin, hendrerit est ac, sollicitudin nisl. Quisque viverra sodales lectus nec ultrices. Fusce elit dolor, dignissim a nunc id, varius suscipit turpis. Cras porttitor turpis vitae leo accumsan molestie. Morbi vitae luctus leo. Sed nec scelerisque magna, et adipiscing est. Proin lobortis lectus eu sem ullamcorper, commodo malesuada quam fringilla. Curabitur ac nunc dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis enim eu est lacinia, ut egestas ligula imperdiet.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Headings -->
                <article id="heading" class="c-block">
                    <h3 class="block-title">Headings</h3>
                    <h1>This is a Heading 1</h1>
                    <p>Suspendisse vel quam malesuada, aliquet sem sit amet, fringilla elit. Morbi tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien nec, varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros hendrerit est consequat posuere et at velit.</p>
                    <h2>This is a Heading 2</h2>
                    <p>In nec rhoncus eros. Vestibulum eu mattis nisl. Quisque viverra viverra magna nec pulvinar. Maecenas pellentesque porta augue, consectetur facilisis diam porttitor sed. Suspendisse tempor est sodales augue rutrum tincidunt. Quisque a malesuada purus.</p>
                    <h3>This is a Heading 3</h3>
                    <p>Vestibulum auctor tincidunt semper. Phasellus ut vulputate lacus. Suspendisse ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in tellus.</p>
                    <h4>This is a Heading 4</h4>
                    <p>Nulla et mattis nunc. Curabitur scelerisque commodo condimentum. Mauris blandit, velit a consectetur egestas, diam arcu fermentum justo, eget ultrices arcu eros vel erat.</p>
                    <h5>This is a Heading 5</h5>
                    <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio. Vivamus pretium nec odio cursus elementum. Suspendisse molestie ullamcorper ornare.</p>
                    <h6>This is a Heading 6</h6>
                    <p>Donec ultricies, lacus id tempor condimentum, orci leo faucibus sem, a molestie libero lectus ac justo. ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in tellus.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Dropcaps -->
                <article id="dropcaps" class="c-block">
                    <h3 class="block-title">Dropcaps</h3>
                    <p><span class="dropcap">D</span>uis quam libero, tincidunt a urna vel, fringilla rhoncus ipsum. Phasellus aliquam erat ipsum, molestie laoreet dolor tincidunt a. Sed blandit vel justo eu tempus. Morbi et lorem sem. Curabitur vel urna eu velit feugiat laoreet sit amet eu lorem. Quisque tincidunt purus non dui laoreet, dictum consequat ante imperdiet. Nullam vel urna pharetra, porttitor massa nec, luctus purus. Vestibulum et iaculis justo. Morbi interdum semper metus et egestas. Aliquam a commodo orci. Sed aliquam hendrerit odio vel rutrum. Nullam ac molestie eros. Sed quis feugiat tortor. Curabitur tincidunt iaculis dolor, quis consequat eros cursus ut.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Alignment Classes -->
                <article id="alignmentClasses" class="c-block">
                    <h3 class="block-title">Alignment Classes</h3>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget lacus mauris. Ut tempus pellentesque lorem et pulvinar. Aliquam mollis tellus nec nibh ultrices tempor. Duis vehicula arcu a magna venenatis, at interdum nisi dignissim. Curabitur ac nulla.</p>
                    
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget lacus mauris. Ut tempus pellentesque lorem et pulvinar. Aliquam mollis tellus nec nibh ultrices tempor. Duis vehicula arcu a magna venenatis, at interdum nisi dignissim. Curabitur ac nulla.</p>
                
                    <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget lacus mauris. Ut tempus pellentesque lorem et pulvinar. Aliquam mollis tellus nec nibh ultrices tempor. Duis vehicula arcu a magna venenatis, at interdum nisi dignissim. Curabitur ac nulla.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Emphasis classes -->
                <article class="c-block" id="emphasisClasses">
                    <h3 class="block-title">Emphasis Classes</h3>
                    <p class="text-muted">Nam interdum massa ut elit volutpat, vel elementum neque interdum. Nulla facilisi. Nulla aliquet hendrerit orci. Maecenas sed arcu eu eros vestibulum gravida. Quisque placerat tristique fermentum.</p>
                    <p class="text-primary">Cras vehicula vitae dui eget fermentum. Nunc eros urna, varius eu pretium sed, pulvinar at sapien. Mauris vel commodo odio. Phasellus neque ligula, posuere at volutpat non, placerat vel metus.</p>
                    <p class="text-success">Suspendisse non tristique orci. Vivamus mattis id erat nec venenatis. Sed enim dui, suscipit nec gravida at, tristique sit amet est. Duis sollicitudin est in lobortis adipiscing. Pellentesque egestas orci et orci iaculis egestas. </p>
                    <p class="text-info">Sed odio dolor, posuere eget molestie quis, sollicitudin in massa. Sed tempus porta tempor. Praesent auctor ligula adipiscing sollicitudin blandit.</p>
                    <p class="text-warning">Suspendisse eleifend sapien ac enim imperdiet mollis. Mauris ut iaculis tortor. Suspendisse gravida augue at semper euismod. Vestibulum at fermentum dolor.</p>
                    <p class="text-danger">Wesras vehicula vitae dui eget fermentum. Nunc eros urna, varius eu pretium sed, pulvinar at sapien. Mauris vel commodo odio. Phasellus neque ligula, posuere at volutpat non, placerat vel metus.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Abbreviations -->
                <article class="c-block" id="abbreviations">
                    <h3 class="block-title">Abbreviations</h3>
                    <p>Consequat ligula Donec <abbr title="attribute">attr</abbr> elementum faucibus nulla, at dignissim arcu iaculis vitae. <abbr title="another attribute">Seingvill</abbr> Nunc vel augue a risus viverra consequat congue a leo. Curabitur ac fermentum enim. Suspendisse <abbr title="Onemore">goos</abbr> non nulla pretium, ultrices nisl feugiat, commodo odio. In <abbr title="consectetur">consectetur</abbr> mi sed vestibulum posuere.</p>
                </article>
                
                <div class="divider"></div>
                
                <!-- Addresses -->
                <article class="c-block" id="addresses">
                    <h3 class="block-title">Addresses</h3>
                    <address>
                        <strong>Lebaze Templates, Inc.</strong><br>
                        4890/a Silicon Avanue, Mark 900,<br>
                        Dubai, UAE<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </article>
                
                <div class="divider"></div>
                
                <!-- Blockquote  -->
                <article class="c-block" id="blockquote">
                    <h3 class="block-title">Blockquotes - 1</h3>
                    <blockquote class="blockquote">
                        <img class="poster-pic" src="img/profile-pics/4.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante a risus viverra consequat congue a leo. Curabitur ac fermentum enim. Lipsum posuere erat a ante a risus viverra  Integer posuere erat a ante a risus viverra consequat congue a leo. Curabitur ac fermentum enim. consequat congue a leo. Curabitur ac fermentum enim.</p>
                        <small>Someone who did quote</small>
                    </blockquote>
                </article>
                
                <article class="c-block">
                    <h3 class="block-title">Blockquotes - 2</h3>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante a risus viverra consequat congue a leo. Curabitur ac fermentum enim.</p>
                        <i class="icon-quote-right"></i>
                    </blockquote>
                </article>
                
                <article class="c-block">
                    <h3 class="block-title">Blockquotes - 3</h3>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante a risus viverra consequat congue a leo. Curabitur ac fermentum enim.</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                        <i class="icon-quote-right"></i>
                    </blockquote>
                </article>
                
                <div class="divider"></div>
                
                <!-- Ordered List -->
                <article class="row">
                    <div class="c-block col-lg-6" id="orderedList">
                        <h3 class="block-title">Ordered List</h3>
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                    
                    <div class="c-block col-lg-6">
                        <h3 class="block-title">Ordered List - Roman</h3>
                        <ol type="i">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                </article>
                
                <div class="divider"></div>
                
                <!-- Unordered List -->
                <article class="row">
                    <div class="c-block col-lg-6" id="unorderedList">
                        <h3 class="block-title">Unordered List - Default</h3>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                              <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                              </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                    
                    <div class="c-block col-lg-6">
                        <h3 class="block-title">Unordered List - 1</h3>
                        <ul class="lists-star">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
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
        