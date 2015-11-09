<?php 
    require "core/init.php";
    $hidtel="";
    $hidmail="";
?>
<html>
    <head>
        <title>Retail Mobile System By MHI Corparation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <link rel="stylesheet" href="../../css/font-awesome.min.css" />

		<link rel="stylesheet" href="../../css/jquery.mobile-1.4.4.css" />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.css" />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />

        <link rel="stylesheet" href="../../css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
    	
        <link rel="stylesheet" href="../../css/jquery.mobile.datepicker.css" />
    	
        <link rel="stylesheet" href="../../css/jquery.mobile.datepicker.theme.css" />
        
        <link rel="stylesheet" href="../../css/custom-layout/login.css" type="text/css"/>  
    </head>
    <body onload="scrlsts()">
        
        <?php        
            $user = new User();
            $user->checkLoggedin(array('user'));
            if($user->isLoggedin()){
                $get = DB::getInstance()->get('tbl_cust',array('cust_id','=',Crytion::decryt64(Session::get('user'))));
                $result = $get->result();    
        ?>  
        <div data-role="page" data-theme='b' id="main-page">
            <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
                <h1>Retail Mobile System</h1>
                <a href="#" target='_blank'><i class='fa fa-shopping-cart'></i></a>
                <a href="../"><i class='fa fa-arrow-left'></i></a>
            </div>
            
            <div data-role="content">        	
    			<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
                    <li data-role="list-divider">Welcome <?php echo $result->cust_fname ?>!</li>
                </ul>
                <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
   	                <li data-role="list-divider">ACCOUNT SETTING</li>
       	        </ul>
                <ul data-role="content" class="">
                    <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
                        <?php
                            
                            if(Input::exists()){
                                $validate = new Validate();
                                
                                $validation = $validate->check($_POST,array(
                                    'cust_fname' => array(
                                        'name' => 'First Name',
                                        'required' => true
                                    ),
                                    'cust_lname' => array(
                                        'name' => 'Last Name',
                                        'required' => true
                                    ),
                                    'cust_email' => array(
                                        'name' => 'Email',
                                        'email' => 'cust_email'
                                    ),
                                    'cust_tel' => array(
                                        'name' => 'Tel Number',
                                        'required' => true
                                    ),
                                    'ccust_pass' => array(
                                        'name' => 'Current Password',
                                        'required' => true,
                                        'samepassword' => 'tbl_cust'
                                    )
                                ));
                                
                                if($validation->passed()){
                                    $update = new Customer();
                                    $address= new Address();
                                    $img = new Image();
                                    $img->checkimage('image','update','tbl_cust',array('cust_id','=',$result->cust_id));
                                    $pwd = $update->updatepass($result->cust_id,'new_pass');
                                    
                                    try{
                                        $update->updatecust($result->cust_id,array(
                                            'cust_fname' => Input::get('cust_fname'),
                                            'cust_lname' => Input::get('cust_lname'),
                                            'cust_dob' => Input::get('cust_dob'),
                                            'image' => $img->getimage(),
                                            'image_name' => $img->getimagename(),
                                            'image_type' => $img->getimagetype(),
                                            'cust_email' => Input::get('cust_email'),
                                            'cust_tel' => Input::get('cust_tel'),
                                            'cust_gender' => Input::get('cust_gender'),
                                            'cust_pass' => $pwd,
                                            'date_update' => date('d-m-Y H:i:s')
                                        ));
                                        $update->passed();
                                        
                                        $address->setAddress($result->cust_id,array(
                                            'add_street' => Input::get('add_street'),
                                            'add_city' => Input::get('add_city'),
                                            'add_state' => Input::get('add_state'),
                                            'add_post' => Input::get('add_post'),
                                            'country_id' => Input::get('country')
                                        ));
                                        
                                        $address->passed();
                                        
                                    }
                                    catch(Exception $e){
                                        die($e->getMessage());
                                    }
                                    
                                    if($update && $address){
                                        Session::put('updated','Account Successfully update!');
                                    }
                                    
                                }
                                else{
                                    Session::put('error-update',$validation->errors());
                                }
                            }
                            
                            if(Input::get('update')==md5('true'))
                            {
                                $sql = DB::getInstance()->query('Select * from tbl_cust a,tbl_add b,tbl_countries c 
                                                                  where b.country_id = c.country_code
                                                                  AND a.cust_id = b.person_id
                                                                  AND a.cust_id = ?',array($result->cust_id));
                                                                     
                                ?>
                                
                                <form name="setting-form" id="setting-form" method="post" action="" data-ajax="false" enctype='multipart/form-data'>
                                    <?php
                                    if(Session::exists('error-update')){
                                        echo '<li style="text-align:center" data-role="fieldcontain" id="message" class="message warning">';
                                            echo '<i class="fa fa-warning"></i>';
                                            $x=0;
                                            $set='';
                                            foreach(Session::get('error-update') as $error){
                                                $set .= $error;
                                                    if($x<count(Session::get('error-update')))
                                                        $set .="<br>";
                                            }
                                            echo $set;
                                        echo '</li>';
                                        Session::delete('error-update'); 
                                    }
                                    else if(Session::exists('updated')){
                                        echo '<li style="text-align:center;" data-role="fieldcontain" id="message" class="message success">';
                                            echo '<i class="fa fa-check"></i>';
                                            echo '<p id="update">'.Session::get('updated').'</p>';
                                        echo '</li>';
                                        Session::delete('updated'); 
                                    }
                                    else{
                                        echo '<li style="text-align:center;display:none" data-role="fieldcontain" id="message" class="message warning">';
                                            echo '<i class="fa fa-warning"></i>';
                                            echo '<p id="error-msg"></p>';
                                        echo '</li>'; 
                                    }
                                    ?>
                                    <li data-role="fieldcontain">
                                        <div class="box-image" style="margin-bottom:20px;">
                                            <div style="border:1px solid #000;width:150px;height:150px;margin:0 auto;" >
                                                <img src="getimg.php?id=<?php echo Crytion::encryt64(Crytion::encryt64($result->cust_id)) ?>&jb=<?php echo Crytion::encryt64(Crytion::encryt64("cust"))?>" class="dis-img" style="width:150px;height:150px">
                                            </div>
                                            <div class="dis-img" style="text-align:center;width:135px;margin:0 auto;">
                                                <div class="btn btn-default btn-file" style="margin-top:10px;">
                                                    <input type="file" name="image" class="img-upload" id="img-upload" style="margin:0 auto;" />
                                                </div>
                                            </div> 
                                        </div>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>First name</label>
                                        <input type="text" value="<?php echo $sql->result()->cust_fname?>" name="cust_fname"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Last name</label>
                                        <input type="text" value="<?php echo $sql->result()->cust_lname?>" name="cust_lname"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Email</label>
                                        <input type="text" value="<?php echo $sql->result()->cust_email?>" id="email" name="cust_email"/>
                                        <?php $hidmail = $sql->result()->cust_email; ?>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Tel</label>
                                        <input type="text" id="tel" value="<?php echo $sql->result()->cust_tel?>" name="cust_tel"/>
                                        <?php $hidtel = $sql->result()->cust_tel; ?>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Date of Birth</label>
                                        <input type="text" value="<?php echo $sql->result()->cust_dob?>" data-role='date' data-date-format="dd/mm/yy" name="cust_dob"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Gender</label>
                                        <select name="cust_gender">
                                            <option>Select Gender</option>
                                            <option <?php echo ($sql->result()->cust_gender == 'male')? "selected" :"" ?> value="male">Male</option>
                                            <option <?php echo ($sql->result()->cust_gender == 'female')? "selected" :""?> value="female">Female</option>
                                        </select>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Address</label>
                                        <textarea name="add_street"><?php echo $sql->result()->add_street?></textarea>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>City</label>
                                        <input name="add_city" value="<?php echo $sql->result()->add_city?>"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Postcode</label>
                                        <input name="add_city" value="<?php echo $sql->result()->add_post?>"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>State</label>
                                        <input name="add_city" value="<?php echo $sql->result()->add_state?>"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Country</label>
                                        <select name="country">
                                            <option>Select Country</option>
                                            <?php
                                                include('../../config/config.php');
                                                $cty = "Select * from tbl_countries";
                                                $query = $con->query($cty);
                                                $query->execute();
                                                While($r= $query->fetch())
                                                {
                                                    if($r['country_code'] == $sql->result()->country_id)
                                                        echo "<option selected value=".$r['country_code'].">".$r['country_name']."</option>";
                                                    else
                                                        echo "<option value=".$r['country_code'].">".$r['country_name']."</option>";
                                                }
                                                $con=null;
                                            ?>
                                        </select>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>New Password</label>
                                        <input name="new_pass" type="password" placeholder="New Password"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Confirm Password</label>
                                        <input name="cnew_pass" type="password" placeholder="Confirm New Password"/>
                                    </li>
                                    <li data-role="fieldcontain">
                                        <label>Password</label>
                                        <input name="ccust_pass" type="password" placeholder="Enter Current Password Before Submit"/>
                                    </li>
                                    <li>
                                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                        <button class="ui-btn btn-glow-green">Update</button>	
                                    </li>
                                </form>
                            <?php
                            }
                            else
                            {
                            ?>
                                <form name="setting-form" id="setting-form" method="post" action="" data-ajax="false">
                                    <li>
                                        <a href="../account/?update=<?php echo md5('true');?>" class="ui-btn btn-glow-green">Edit Profile</a>	
                                    </li> 
                                    <table class="ui-responsive table-stroke setting-table" >
                                        <?php
                                            $sql = DB::getInstance()->query('Select * from tbl_cust a,tbl_add b,tbl_countries c 
                                                                  where b.country_id = c.country_code
                                                                  AND a.cust_id = b.person_id
                                                                  AND a.cust_id = ?',array($result->cust_id));
                                            if($sql->count()>0){    
                                                echo '<tbody>';
                                                echo '<tr>';
                                                    echo '<td>First Name</td>';
                                                    echo '<td>'.$sql->result()->cust_fname.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Last Name</td>';
                                                    echo '<td>'.$sql->result()->cust_lname.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Email</td>';
                                                    echo '<td>'.$sql->result()->cust_email.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Tel</td>';
                                                    echo '<td>'.$sql->result()->cust_tel.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Dob</td>';
                                                    echo '<td>'.$sql->result()->cust_dob.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Gender</td>';
                                                    echo '<td>'.$sql->result()->cust_gender.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Address</td>';
                                                    echo '<td>'.$sql->result()->add_street.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Postcode</td>';
                                                    echo '<td>'.$sql->result()->add_post.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>City</td>';
                                                    echo '<td>'.$sql->result()->add_city.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>State</td>';
                                                    echo '<td>'.$sql->result()->add_state.'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Country</td>';
                                                    echo '<td>'.$sql->result()->country_name.'</td>';
                                                echo '</tr>';
                                                echo '</tbody>';
                                            }
                                        ?>
                                    </table>
                                </form>
                            <?php
                            }
                        ?>
                    </ul>
       			</ul>           	
            </div>
            <div data-role="footer" data-position="fixed" data-theme='b' data-tap-toggle="false" style="text-align:center;">
            	<label for="copyright" style="margin-top:10px">&copy; 
                <?php 
                    $copyYear = 2014; 
                    $curYear = date('Y'); 
                    echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                ?> Mobile Dev. By MHI Freelancer</label>
            </div>
        </div>
        
        <script src="../../js/jquery-2.1.0.js"></script>
        <script src="../../js/jquery.mobile-1.4.4.js"></script>
        <script src="../../js/jquery.maskedinput.js"></script>
        <script src="../../js/datepicker.js"></script>
    	<script src="../../js/jquery.mobile.datepicker.js"></script>
        
        <script>
            $(function($){
               $("#tel").mask("9999999999",{placeholder:""});
            });
        </script>
        
        <script>
            function validateEmail(email) {
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              if( !emailReg.test( email ) ) {
                return false;
              } else {
                return true;
              }
            }
    
            $(document).ready(function(){
    	        $("#email").change(function() {
                    $("#error-msg").empty();
    	                var usr = $("#email").val(); 
    	                    if(usr != null && usr != "<?php echo $hidmail ?>"){
    	                        if(validateEmail(usr)){    
    	                            $("#error-msg").html('<img src="../../images/ajax-loader.gif" style="width:15px;height:15px;">&nbsp;Checking availability...');
    	                            $.ajax({  
    	                               type: "POST",  
    	                               url: "check.php" ,
    	                               data: "email="+usr,  
    	                               success: function(data){
    	                                        if(data == 1){ 
    	                                            $("#message").css('display','block');
            										$("#error-msg").html("Email "+usr+" is Available!");
            										$("#message").removeClass("warning").addClass("success");
                                                    $("#message i").removeClass("fa fa-warning").addClass("fa fa-check"); 
    	                                        }  
    	                                        else{  
    	                                            $("#message").css('display','block');
            										$("#error-msg").html("Email "+usr+" already use!");
            										$("#message").removeClass("success").addClass("warning");
                                                    $("#message i").removeClass("fa fa-check").addClass("fa fa-warning");
            										$("#email").val('');
    	                                        }  
    
    	                                    }
    	                            });
    	                        }
    	                        else{
    	                            $("#message").css('display','none');
				                    $("#email").val('<?php echo $hidmail ?>');
    	                        }
    	                    }
                            else
                                $("#message").css('display','none');  
    	             });
                 
    			     $("#tel").change(function() {
    					var tel = $("#tel").val();						
    						if(tel != "" && tel!=<?php echo $hidtel ?>)
    						{
    							$("#error-msg").html('<img src="../../images/ajax-loader.gif" style="width:15px;height:15px;">&nbsp;Checking availability...');
    							jQuery.ajax({  
    							   type: "POST",  
    							   url: "check.php" ,
    							   data: "tel="+tel,  
    							   success: function(data)
    							   {
    									if(data==1)
    									{
    									    $("#message").css('display','block');
    										$("#error-msg").html("Phone No "+tel+" already use!");
    										$("#message").removeClass("success").addClass("warning");
                                            $("#message i").removeClass("fa fa-check").addClass("fa fa-warning");
    										$("#tel").val('');
    									}
    									else
    									{
    		                                $("#message").css('display','block');
    										$("#error-msg").html("Phone No "+tel+" is Available!");
    										$("#message").removeClass("warning").addClass("success");
                                            $("#message i").removeClass("fa fa-warning").addClass("fa fa-check");
    									}		 
    							   }
    							});
    						}
                            else
                            $("#message").css('display','none');    
    				 });
    	
    			});
	
		</script>
        
        
        <script>
        	$(document).on('swipeleft', '[data-role="page"]', function(event){    
			    if(event.handled !== true) // This will prevent event triggering more then once
			    {    
			        var nextpage = $(this).next('[data-role="page"]');
			        // swipe using id of next page if exists
			        if (nextpage.length > 0) {
			            $.mobile.changePage(nextpage, {transition: "slide", reverse: false}, true, true);
			        }
			        event.handled = true;
			    }
			    return false;         
			});

			$(document).on('swiperight', '[data-role="page"]', function(event){   
			    if(event.handled !== true) // This will prevent event triggering more then once
			    {      
			        var prevpage = $(this).prev('[data-role="page"]');
			        if (prevpage.length > 0) {
			            $.mobile.changePage(prevpage, {transition: "slide", reverse: true}, true, true);
			        }
			        event.handled = true;
			    }
			    return false;            
			});

        </script>
        <script type="text/javascript">
        $(document).ready(function () {
            //for image validation

            $("#img-upload").change(function () {
                // Get the file upload control file extension
                var ext = $(this).val().split('.').pop().toLowerCase();
                // Create array with the files extensions to upload
                var fileListToUpload = new Array('jpg','png','gif');
                //Check the file extension is in the array.               
                var isValidFile = $.inArray(ext, fileListToUpload); 
                // isValidFile gets the value -1 if the file extension is not in the list.  
                if (isValidFile == -1) {
                    alert('Please select a valid image of type jpg/png/gif');
                   $(this).val('');
                }
                else {
                    // Restrict the file size to 10 MB.
                    if ($(this).get(0).files[0].size > (1024 * 1024 * 10)) {
                        ShowMessage('File size should not exceed 10MB.', 'error');
                        $(this).val('');
                    }
                    else
                    {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('.dis-img').attr('src', e.target.result);
                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                        else{
                            $('.dis-img').attr('src','../../images/default-pic.jpg');
                        }
                    }
                }
            });
        });
 
    </script>
        <SCRIPT LANGUAGE="JavaScript">
            var scrl = " POS Sytem Mobile Version 1.0 ";
            function scrlsts() {
             scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
             document.title = scrl;
             setTimeout("scrlsts()", 300);
             }
        </script>
    </body>
</html>
<?php    
            }
            else{
                Redirect::to('../../');
            }
        ?>