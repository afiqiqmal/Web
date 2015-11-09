<?php require "control/core/init.php";?>
<!DOCTYPE html>
<html>
     <head>
         <title>Black Pearl Responsive Admin Template</title>
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'calendar'); 
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
                         <!-- Information -->
                         <div class="shadowed information">
                              <h3 class="title">Information</h3>
                              <p class="info-body overflow"><i class="fa fa-info"></i>Nulla tempor dolor dolor, eu lacinia tellus ultricies vel. Mauris arcu lorem, tincidunt id eros at, interdum tempor lorem. Vestibulum nec lectus vehicula, pellentesque risus ac, facilisis dolor. Duis elementum nisi ipsum, at consectetur sapien ultricies vitae. Mauris non cursus risus. Donec adipiscing, nibh quis mollis vulputate, arcu nisi scelerisque diam, nec pellentesque nunc magna sed risus. Quisque a magna porttitor justo sagittis vehicula. Duis vitae adipiscing nunc, a ullamcorper neque.
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
                         <h2 class="p-title">Calendar</h2>
                         <div class="config">
                              <div class="calendar-actions btn-group">
                                   <span data-view="month" class="btn btn-gr-gray btn-sm">Month</span>
                                   <span data-view="agendaWeek" class="btn btn-gr-gray btn-sm">Week</span>
                                   <span data-view="agendaDay" class="btn btn-gr-gray btn-sm">Day</span>
                              </div>
                         </div>
                    </header>
                    
                    <div class="alert alert-icon alert-info alert-dismissable fade in">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="fa fa-info"></i>Click on a day to add event
                    </div>
                    
                    <div id="calendar"></div>
                    
                    <!-- Add event -->
                    <div class="modal fade" id="addNew-event">
                         <div class="modal-dialog">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Add an Event</h4>
                                   </div>
                                   <div class="modal-body">
                                        <form class="form-validation" role="form">
                                             <div class="form-group">
                                                  <label for="eventName">Event Name</label>
                                                  <input type="text" class="form-control validate[required]" id="eventName" placeholder="...">
                                             </div>
                                             
                                             <input type="hidden" id="getStart" />
                                             <input type="hidden" id="getEnd" />
                                        </form>
                                   </div>
                                   
                                   <div class="modal-footer">
                                        <input type="submit" class="btn btn-info btn-sm" id="addEvent" value="Add Event">
                                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
                    <!-- Modal Resize alert -->
                    <div class="modal fade" id="editEvent">
                         <div class="modal-dialog">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Edit Event</h4>
                                   </div>
                                   <div class="modal-body">
                                        <div id="eventInfo"></div>
                                   </div>
                                   
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Okay</button>
                                        <button type="button" class="btn btn-info btn-sm" id="editCancel" data-dismiss="modal">Cancel</button>
                                   </div>
                              </div>
                         </div>
                    </div>
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
               
               $(document).ready(function() {
                    $('#calendar').fullCalendar({
                         header: {
                              center: '',
                              left: 'title',
                              right: 'prev,today next'
                         },

                         
                         selectable: true,
                         selectHelper: true,
                         editable: true,
                         
                         //On Day Select

                         select: function(start, end, allDay) {
                              $('#addNew-event').modal('show');   
                              $('#getStart').val(start);
                              $('#getEnd').val(end);
                         },
                         
                         eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
                              $('#editEvent').modal('show');

                              var info =
                                  "The end date of " + event.title + "has been moved " +
                                  dayDelta + " days and " +
                                  minuteDelta + " minutes."
                              ;
                              
                              $('#eventInfo').html(info);
                      
                      
                              $('#editEvent #editCancel').click(function(){
                                   revertFunc();
                              }) 
                         }
                    });
                    
                    $('body').on('click', '#addEvent', function(){
                         var eventForm =  $(this).closest('.modal').find('.form-validation');
                         eventForm.validationEngine('validate');
                         
                         if (!(eventForm).find('.formErrorContent')[0]) {
                              
                              //Event Name
                              var eventName = $('#eventName').val();

                              //Render Event
                              $('#calendar').fullCalendar('renderEvent',{
                                   title: eventName,
                                   start: $('#getStart').val(),
                                   end:  $('#getEnd').val(),
                                   allDay: true,
                              },true ); //Stick the event
                              
                              $('#addNew-event form')[0].reset()
                              $('#addNew-event').modal('hide');
                         } 
                    });   
               });    
               
               //Calendar views
               $('body').on('click', '.calendar-actions span', function(){
                    var dataView = $(this).attr('data-view');
                    $('#calendar').fullCalendar('changeView', dataView);
               });                    
               
          </script>
     </body>
</html>
               