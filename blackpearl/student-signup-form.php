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
            .c-block { display: inline-block; width: 100%; }
            .fileupload {margin: 0 auto !important; width: 150px !important;height: 150px !important;}
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
                        <!-- Main Menu -->
                        <?php
                        Editor::navbar(array('index','typo','socialwall','widget','table','form','UI','chart','photo','sample'),'sample-open-signup'); 
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
            
            <?php
              if(Input::exists()){
                $validate = new Validate();
                $validation = $validate->check($_POST,array(
                  'fname' => array(
                      'name' => 'First Name',
                      'required' => true,
                      'letter' => true
                  ),
                  'mname' => array(
                      'name' => 'Middle Name'
                  ),
                  'lname' => array(
                      'name' => 'Last Name',
                      'required' => true,
                      'letter'=> true
                  ),
                  'age' => array(
                    'name' => 'Age',
                    'required' => true,
                    'number' => true
                  ),
                  'icnum' => array(
                    'name' => 'IC Number',
                    'icNumber' => true
                  ),
                  'bcn' => array(
                    'name' => 'Birth Cert',
                    'required' => true,
                    'letterNumber' => true
                  ),
                  'address' => array(
                    'name' => 'Address',
                    'required' => true
                  ),
                  'pcode' => array(
                    'name' => 'Postcode',
                    'required' => true,
                    'number' => true
                  ),
                  'state' => array(
                    'name' => 'State',
                    'required' => true,
                    'letter' => true
                  ),
                  'ptname' => array(
                    'name' => 'Parent Name 1',
                    'required' => true,
                    'letter' => true
                  ),
                  'ptname2' => array(
                    'name' => 'Parent Name 2',
                    'letter' => true
                  ),
                  'ptaddress' => array(
                    'name' => 'Parent Address 1',
                    'required' => true
                  ),
                  'ptaddress2' => array(
                    'name' => 'Parent Address 2',
                  ),
                  'ptpcode'=> array(
                    'name' => 'Parent Address Postcode 1',
                    'required' => true,
                    'number' => true
                  ),
                  'ptpcode2'=> array(
                    'name' => 'Parent Address Postcode 2',
                    'number' => true
                  ),
                  'ptstate'=> array(
                    'name' => 'Parent Address State 1',
                    'required' => true,
                    'letter' => true
                  ),
                  'ptstate2'=> array(
                    'name' => 'Parent Address State 2',
                    'letter' => true
                  ),
                  'hphone' => array(
                    'name' => 'Parent Home 1',
                    'phone' => true
                  ),
                  'hphone2'=> array(
                    'name' => 'Parent Home 2',
                    'phone' => true
                  ),
                  'mphone'=> array(
                    'name' => 'Parent Mobile 1',
                    'required' => true,
                    'phone' => true
                  ),
                  'mphone2'=> array(
                    'name' => 'Parent Mobile 2',
                    'phone' => true
                  ),
                  'ptemail'=> array(
                    'name' => 'Parent Email 1',
                    'email' => true
                  ),
                  'ptemail2'=> array(
                    'name' => 'Parent Email 2',
                    'email' => true
                  )
                ));

                if($validation->passed()){
                    $register = new Student();
                    $stud_id = $register->generateID('student',Input::get('grade'));
                    $register->verifyImg('dp-image',$stud_id);
                    
                    try{
                        $register->registerStud(array(
                          'stud_id' => $stud_id,
                          'stud_fname' => Input::get('fname'),
                          'stud_mname' => Input::get('mname'),
                          'stud_lname' => Input::get('lname'),
                          'stud_dob' => Input::get('dob'),
                          'stud_dobplace' => Input::get('placebirth'),
                          'stud_age' => Input::get('age'),
                          'stud_birthcert' => Input::get('bcn'),
                          'stud_ic' => Input::get('icnum'),
                          'stud_gender' => Input::get('gender'),
                          'stud_address' => Input::get('address'),
                          'stud_pcode' => Input::get('pcode'), 
                          'stud_state' => Input::get('state'),
                          'stud_grade' => Input::get('grade'),
                          'dp_name'=> $register->getimagename(),
                          'stud_dp' => $register->getimage()
                          ),
                          array(
                            'class_name' => Input::get('grade').' '.Input::get('sclass'),
                            'stud_id' => $stud_id,
                            'teach_id' => 'T201500001'
                          ),
                          array(
                            'stud_id' => $stud_id,
                            'p1_name' => Input::get('ptname'),
                            'p1_address' => Input::get('ptaddress'),
                            'p1_pcode' => Input::get('ptpcode'),
                            'p1_state' => Input::get('ptstate'),
                            'p1_home' => Input::get('hphone'),
                            'p1_phone' => Input::get('mphone'),
                            'p1_email' => Input::get('ptemail'),
                            'p2_name' => Input::get('ptname2'),
                            'p2_address' => Input::get('ptaddress2'),
                            'p2_pcode' => Input::get('ptpcode2'),
                            'p2_state' => Input::get('ptstate2'),
                            'p2_home' => Input::get('hphone2'),
                            'p2_phone' => Input::get('mphone2'),
                            'p2_email' => Input::get('ptemail2')
                          )
                        );

                        if(!$register->passed()){
                          Session::put('form-error',$register->errors());
                        }
                    }
                    catch(Exception $e){
                        die($e->getMessage());
                    }
                }
                else{
                    Session::put('form-error',$validation->errors());
                }
              }

              if(Session::exists('form-error')){
              foreach (Session::get('form-error') as $value) {
                  echo $value."\n";
              }
            }
            ?>


            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Registration</h2>
                </header>
                <form role="form" method="post" class="form-validation" enctype="multipart/form-data">
                  <div class="c-block">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="img/profile-pics/avatar.png" /></div>
                      <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-file btn-sm btn-gr-gray">
                                <span class="fileupload-new">Select image</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="dp-image" />
                            </span>
                            <a href="#" class="btn fileupload-exists btn-sm btn-gr-gray" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                  </div>
                  <div class="divider"></div>
                  <div class="row m-container">
                    <div class="masonry col-md-6">
                        <div class="row">
                          <div class="col-lg-6">
                            <h3 class="block-title">Student Details</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="">First Name</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="fname" placeholder="First name" value="<?php echo Input::get('fname')?>">
                          </div>
                          <div class="form-group col-lg-12">
                              <label for="">Mid Name</label>
                              <input type="text" class="form-control input-sm validate[custom[onlyLetterSp]]" name="mname" placeholder="Mid Name (Optional)" value="<?php echo Input::get('mname')?>">
                          </div>
                          <div class="form-group col-lg-12">
                              <label for="">Last Name</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="lname" placeholder="Last Name" value="<?php echo Input::get('lname')?>">
                          </div>
                          <div class="form-group col-lg-6">
                            <label for="">Date of Birth</label>
                            <div class="input-icon datetime-pick date-only">
                                <input data-format="dd/MM/yyyy" type="text" class="form-control input-sm validate[required]" name="dob" id="dobdate" placeholder="ex: 31/12/1993" value="<?php echo Input::get('dob')?>"/>
                                <span class="add-on">
                                      <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">Place of Birth</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="placebirth" placeholder="Birth Place" value="<?php echo Input::get('placebirth')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">Age</label>
                              <input type="text" class="form-control input-sm validate[required,custom[integer]]" name="age"  placeholder="Age" value="<?php echo Input::get('age')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">Birth Certificate</label>
                              <input type="text" class="form-control input-sm validate[required]" name="bcn" placeholder="Birth Cert No" value="<?php echo Input::get('bcn')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">IC number</label>
                              <input type="text" class="form-control input-sm validate[custom[icNumber]]" name="icnum" placeholder="IC Numbber" value="<?php echo Input::get('icnum')?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Gender</label>
                            <select class="form-control input-sm validate[required]" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="masonry col-md-6">
                        <div class="row">
                          <div class="col-lg-6">
                            <h3 class="block-title">Student Details</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="address">Address</label>
                              <textarea class="form-control validate[required]" placeholder="Address" style="resize:none" id="address" name="address"><?php echo Input::get('address')?></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                              <label for="">Postcode</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyNumberSp]]" name="pcode" id="pcode" placeholder="Postcode" value="<?php echo Input::get('pcode')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">State</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="state" id="state" placeholder="State" value="<?php echo Input::get('state')?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Grade</label>
                            <select class="form-control input-sm validate[required]" name="grade" id="grade">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Class</label>
                            <select class="form-control input-sm validate[required]" name="sclass" id="sclass">
                                <option value="Alpha">Alpha</option>
                                <option value="Bravo">Bravo</option>
                                <option value="Charlie">Charlie</option>
                                <option value="Delta">Delta</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row m-container">
                      <div class="masonry col-md-6">
                        <div class="row">
                          <div class="col-lg-6">
                            <h3 class="block-title">Parent Details 1</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="">Parent Name</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="ptname" placeholder="Parent's Name" value="<?php echo Input::get('ptname')?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="address">Parent Address <input type="checkbox" value="0" id="ptcheckadd">Same as address above?</label>
                              <textarea class="form-control auto-size validate[required]" name="ptaddress" id="ptaddress" placeholder="Address"><?php echo Input::get('ptaddress')?></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                              <label for="">Postcode</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyNumberSp]]" name="ptpcode" id="ptpcode" placeholder="Postcode" value="<?php echo Input::get('ptpcode')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">State</label>
                              <input type="text" class="form-control input-sm validate[required,custom[onlyLetterSp]]" name="ptstate" id="ptstate" placeholder="State" value="<?php echo Input::get('ptstate')?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                              <label for="">Home Contact</label>
                              <input type="text" class="form-control input-sm validate[custom[phone]]" name="hphone" placeholder="ex:+032322323" value="<?php echo Input::get('hphone')?>">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">Phone Number</label>
                              <input type="text" class="form-control input-sm validate[required,custom[phone]]" name="mphone" placeholder="ex:+60142284542" value="<?php echo Input::get('mphone')?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="">Email (Optional)</label>
                              <input type="email" class="form-control input-sm validate[custom[email]]" name="ptemail" placeholder="Email" value="<?php echo Input::get('ptemail')?>">
                          </div>
                        </div>
                      </div>
                      <div class="masonry col-md-6">
                        <div class="row">
                          <div class="col-lg-6">
                            <h3 class="block-title">Parent Details 2 (Optional)</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="">Parent Name</label>
                              <input type="text" class="form-control input-sm validate[custom[onlyLetterSp]]" name="ptname2" placeholder="Parent's Name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="address">Parent Address <input type="checkbox" value="0" id="ptcheckadd2">Same as address above?</label>
                              <textarea class="form-control auto-size" name="ptaddress2" id="ptaddress2" placeholder="Address"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                              <label for="">Postcode</label>
                              <input type="text" class="form-control input-sm validate[custom[onlyNumberSp]]" name="ptpcode2" id="ptpcode2" placeholder="Postcode">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">State</label>
                              <input type="text" class="form-control input-sm validate[custom[onlyLetterSp]]" name="ptstate2" id="ptstate2" placeholder="State">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                              <label for="">Home Contact</label>
                              <input type="text" class="form-control input-sm validate[custom[phone]]" name="hphone2" placeholder="ex:+032322323">
                          </div>
                          <div class="form-group col-lg-6">
                              <label for="">Phone Number</label>
                              <input type="text" class="form-control input-sm validate[custom[phone]]" name="mphone2" placeholder="ex:+60142284542">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-12">
                              <label for="">Email (Optional)</label>
                              <input type="email" class="form-control input-sm validate[custom[email]]" name="ptemail2" placeholder="Email">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="c-block">
                      <div class="btn-group btn-group-justified">
                          <input type="submit" class="btn btn-primary btn-block" value="Done" name="submit">
                          <input type="reset" class="btn btn-warning btn-block" value="Reset" name="reset">
                      </div>
                    </div>
                  </form>
                  
                
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
        //Masonry plugin for content,wigdet arragement
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
        