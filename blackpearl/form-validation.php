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
            .validation-clear { margin-left: 2px; }
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
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'form-open-validation'); 
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
                    <h2 class="p-title">Form Validation</h2>
                </header>
                
                <!-- Required Feilds -->
                <div class="c-block" id="required">
                    <h3 class="block-title">Required Feilds</h3>
                    <form role="form" class="form-validation-1">
                        <div class="form-group">
                            <label>Text feild</label>
                            <input type="text" class="input-sm validate[required] form-control" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="input-sm validate[required] form-control" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>Select</label>
                            <select name="sport" class="form-control input-sm validate[required]">
                                <option value="">Choose a sport</option>
                                <option value="option1">Tennis</option>
                                <option value="option2">Football</option>
                                <option value="option3">Golf</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="input-sm validate[required] form-control" placeholder="..."></textarea>
                        </div>
                        <input class="btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Invalid Feilds -->
                <div class="c-block" id="invalid">
                    <h3 class="block-title">Invalid Feilds</h3>
                    <form role="form" class="form-validation-2">
                        <!-- Telephone -->
                        <div class="form-group">
                            <label>
                                Telephone - Valid Entries (+103-304-340-4300-043) /
                                (+1 305 768 23 34 ext 23) / 
                                (+1 (305) 768-2334 extension 703) / 
                                (+1 (305) 768-2334 x703) / 
                                (04312 / 777 777) / 
                                (01-47.34/32 56) / 
                                ((01865)  123456)
                            </label>
                            <input type="text" class="input-sm validate[required,custom[phone]] form-control" placeholder="...">
                        </div>
                        
                        <!-- URL -->
                        <div class="form-group">
                            <label>URL (Begin with http:// https:// or ftp:// )</label>
                            <input value="http://" class="input-sm form-control validate[required,custom[url]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- IP Address -->
                        <div class="form-group">
                            <label>IP Address</label>
                            <input class="form-control input-sm validate[required,custom[ipv4]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date - ISO 8601 dates only YYYY-mm-dd</label>
                            <input class="form-control input-sm validate[required,custom[date]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Number -->
                        <div class="form-group">
                            <label>Number - A signed floating number, ie: -3849.354, 38.00, 38, .77 </label>
                            <input class="form-control input-sm validate[required,custom[number]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Integer -->
                        <div class="form-group">
                            <label>Integer - An signed integer: ie +34, 34 or -1 </label>
                            <input class="form-control input-sm validate[required,custom[integer]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Only Letter/Number -->
                        <div class="form-group">
                            <label>Only Letter/Number - Only [0-9a-zA-Z]</label>
                            <input class="form-control input-sm validate[required,custom[onlyLetterNumber]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Only Number -->
                        <div class="form-group">
                            <label>Only Number(Char) - Only [0-9] and space</label>
                            <input class="form-control input-sm validate[required,custom[onlyNumberSp]]" type="text" placeholder="...">
                        </div>
                        
                        <!-- Only Letter -->
                        <div class="form-group">
                            <label>Only Letter - Only ascii letters, space and '</label>
                            <input class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="text" placeholder="...">
                        </div>
                        
                        <input class="btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Equals -->
                <div class="c-block" id="equals">
                    <h3 class="block-title">Equals</h3>
                    <form role="form" class="form-validation-3">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="input-sm validate[required] form-control" name="password" id="password" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="input-sm validate[required,equals[password]] form-control" placeholder="...">
                        </div>
                        
                        <input class="btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Conditional required -->
                <div class="c-block" id="conditional">
                    <h3 class="block-title">Conditional Required</h3>
                    <form role="form" class="form-validation-5">
                        <!-- Default -->
                        <div class="form-group">
                            <label>Depending field (1)</label>
                            <input type="text" class="input-sm form-control" name="dep" id="dep1" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>This field is required if above field has a value</label>
                            <input type="text" class="input-sm validate[condRequired[dep1]] form-control" name="dep1" id="dep-a" placeholder="...">
                        </div>
                        <br />
                        <strong>OR with 2 depending fields</strong>
                        <br /><br />
                        <!-- 2 Dependant -->
                        <div class="form-group">
                            <label>Depending field (1A)</label>
                            <input type="text" class="input-sm form-control" name="dep1a" id="dep1a" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>Depending field (1B)</label>
                            <input type="text" class="input-sm form-control" name="dep1b" id="dep1b" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>This field is required if any of above fields has a value</label>
                            <input type="text" class="input-sm validate[condRequired[dep1a,dep1b]] form-control" name="dep1b" id="dep1c" placeholder="...">
                        </div>
                        
                        <a href="#" class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</a>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Group required -->
                <div class="c-block" id="group-required">
                    <h3 class="block-title">Group Required</h3>
                    <p>Check at least one input is filled</p>
                    <form role="form" class="form-validation-6">
                        <div class="form-group">
                            <label>Payee Name</label>
                            <input type="text" class="input-sm validate[groupRequired[payments],custom[onlyLetterSp]] form-control" name="grouped" placeholder="...">
                        </div>
                        <strong>OR</strong>
                        <div class="form-group">
                            <label>Payee Email</label>
                            <input type="text" class="input-sm validate[groupRequired[payments],custom[email]] form-control" name="grouped" placeholder="...">
                        </div>
                        <strong>OR</strong>
                        <div class="form-group">
                            <label>Payee Account Number</label>
                            <input type="text" class="input-sm validate[groupRequired[payments],custom[integer],max[50]] form-control" name="grouped" placeholder="...">
                        </div>
                        <strong>OR</strong>
                        <div class="form-group">
                            <select class="validate[groupRequired[payments]] form-control" name="bank2" id="bank2">
                                <option value="">Choose a payment option</option>
                                <option value="Paypal">Paypal</option>
                                <option value="Bank">Bank account</option>
                            </select>
                        </div> 
                        
                        <input class="btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Min/Max -->
                <div class="c-block" id="minmax">
                    <h3 class="block-title">Min/Max (Size)</h3>
                    <form role="form" class="form-validation-7">
                        <!-- Minimum Character -->
                        <div class="form-group">
                            <label>Minimum Characters (Set to 6) </label>
                            <input type="text" class="input-sm validate[required,minSize[6]] form-control" placeholder="...">
                        </div>
                        
                        <!-- Maximum Character -->
                        <div class="form-group">
                            <label>Maximum Characters (Set to 6) </label>
                            <input type="text" class="input-sm validate[required,maxSize[6]] form-control" placeholder="...">
                        </div>
                        
                        <!-- Minimum Integer -->
                        <div class="form-group">
                            <label>Minimum Integer Value - Integer &gt;= 5 </label>
                            <input type="text" class="input-sm validate[required,custom[integer],min[5]] form-control" placeholder="...">
                        </div>
                        
                        <!-- Maximum Integer -->
                        <div class="form-group">
                            <label>Maximum Integer Value - Integer &lt;= 50 </label>
                            <input type="text" class="input-sm validate[required,custom[integer],max[50]] form-control" placeholder="...">
                        </div>
                        
                        <input class="btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Date/Time -->
                <div class="c-block" id="datetime">
                    <h3 class="block-title">Date/Time</h3>
                    <form role="form" class="form-validation-8">
                        <!-- Past -->
                        <div class="form-group">
                            <label>Past - Date should ealier than 2013/05/10</label>
                            <input type="text" class="input-sm validate[custom[date],past[2013/05/10]] form-control" placeholder="...">
                        </div>
                        
                        <!-- Future -->
                        <div class="form-group">
                            <label>Future - Date should older than today's date</label>
                            <input type="text" class="input-sm validate[custom[date],future[NOW]] form-control" placeholder="...">
                        </div>
                        
                        <!-- Date Range -->
                        <p>Date Range - Checks that the start date is before the end date. Please enter an end date ealier than the start date</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="input-sm validate[dateRange[grp1]] form-control" name="date-range" placeholder="Start Date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="input-sm validate[dateRange[grp1]] form-control" name="date-range" placeholder="End Date">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</a>
                    </form>
                </div>
                
                <div class="divider"></div>
                
                <!-- Checkbox/Radio -->
                <div class="c-block" id="checkboxradio">
                    <h3 class="block-title">Checkbox/Radio</h3>
                    <form role="form" class="form-validation-9">
                        <p>Minimum 2 checkbox</p>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[minCheckbox[2]]" name="group[group]" id="inlineCheckbox1" value="option1"> 1
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[minCheckbox[2]]" name="group[group]" id="inlineCheckbox2" value="option2"> 2
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[minCheckbox[2]]" name="group[group]" id="inlineCheckbox3" value="option3"> 3
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[minCheckbox[2]]" name="group[group]" id="inlineCheckbox4" value="option4"> 4
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[minCheckbox[2]]" name="group[group]" id="inlineCheckbox5" value="option5"> 5
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <p>Maximum 3 checkbox</p>   
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[maxCheckbox[3]]" name="group[group2]" id="inlineCheckbox6" value="option6"> 6
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[maxCheckbox[3]]" name="group[group2]" id="inlineCheckbox7" value="option7"> 7
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[maxCheckbox[3]]" name="group[group2]" id="inlineCheckbox8" value="option8"> 8
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[maxCheckbox[3]]" name="group[group2]" id="inlineCheckbox9" value="option9"> 9
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="validate[maxCheckbox[3]]" name="group[group2]" id="inlineCheckbox10" value="option10"> 10
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <p>Select an option</p>
                            <label class="radio-inline">
                                <input type="radio" class="validate[required]" name="group[group3]" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="validate[required]" name="group[group3]" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="validate[required]" name="group[group3]" value="option3"> 3
                            </label>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label class="checkbox">
                                <input class="validate[required]" name="agree" type="checkbox" value=""> I have read and accepted.
                            </label>
                        </div>
                        <input class="submit btn btn-info btn-xs" type="submit" value="VALIDATE">
                        <button class="btn btn-info btn-xs validation-clear">CLOSE PROMPTS</button>
                    </form>
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
        