<?php 
    require "core/init.php";
?>
<html>
    <head>
        <title>Retail Mobile System By MHI Corparation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<!-- FontAwesome - http://fortawesome.github.io/Font-Awesome/ -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- jQueryMobileCSS - original without styling -->
		<link rel="stylesheet" href="css/jquery.mobile-1.4.4.css" />

		<!-- nativeDroid core CSS -->
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.css" />

		<!-- nativeDroid: Light/Dark -->
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />

		<!-- nativeDroid: Color Schemes -->
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
        
        <!-- custom layout css -->
        <link rel="stylesheet" href="css/custom-layout/login.css" type="text/css"/>  

        <style type="text/css">
        	#overlay {
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                right: 0;
                background: #000;
                opacity: 0.8;
                filter: alpha(opacity=80);
            }
            #loading {
                width: 50px;
                height: 57px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -28px 0 0 -25px;
            }
        </style>      
		

    </head>
    <body>
    <!--
   	<div id="overlay">
       <img id="loading" src="../images/loading.gif">
    </div>
    -->
    
    <?php
        if(Input::exists()){
            if(Input::get('token'))
            {
                if(Token::check(Input::get('token'))){
                    $user = new User();
                    $check = $user->login(Input::get('username'),Input::get('password'),'customer');
                    if($check){
                        $field = (is_numeric(Input::get('username')))? 'cust_tel' : 'cust_uname';
                        $getid = DB::getInstance()->get('tbl_cust',array($field,'=',Input::get('username')));
                        Session::put('user',Crytion::encryt64($getid->result()->cust_id));
                        Redirect::to('main/');
                    }
                    else{
                        Session::put('error','Wrong Password Or Username');
                    }
                }
            }
            else
            {
                $validate = new Validate();
                $validation = $validate->check($_POST,array(
                    'fname' => array(
                        'name' => 'First Name',
                        'required' => true,
                        'min' => 2
                    ),
                    'lname' => array(
                        'name' => 'Last Name',
                        'required' => true,
                        'min' => 2
                    ),
                    'password'=>array(
                        'name' => 'Password',
                        'required' => true,
                        'min' => 8
                    ),
                    'cpassword'=>array(
                        'name' => 'Retype Password',
                        'required' => true,
                        'matches' => 'password'
                    ),
                    'cust_tel'=>array(
                        'name' => 'Tel Number',
                        'required' => true,
                        'unique' => 'tbl_cust'
                    )
                ));
                
                if($validation->passed()){
                    $user = new User();
                    $id = $user->generateid('customer');
                    $fname=Input::get('fname');
                    $lname=Input::get('lname');
        			$pass=Crytion::generatehash(Input::get('password'));
        			$tel=Input::get('cust_tel');
                    
                    $create = $user->create('tbl_cust',array(
                        'cust_id' => $id,
                        'cust_tel' => $tel,
                        'cust_fname' => $fname,
                        'cust_lname' => $lname,
                        'cust_pass' => $pass
                    ));
                    
                    if($create){
                        Session::put('success','You Can Log In Now!');
                        Session::put('count','1');
                        Redirect::to('#');
                    }
                    else
                        Session::put('error','Failed To Create Your Account. Try Again!');   
                }
                else
                    Session::put('validate-error',$validation->errors());
           }  
        }
    ?>
    
    
    <div data-role="page" data-theme='b' id="main-page">
        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <h1>Retail Mobile System</h1>
            <a href="#" data-ajax='false' target='_blank'><i class='fa fa-shopping-cart'></i></a>
        </div>
        
        <div data-role="content">        	
			<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
	            <li data-role="list-divider">Login</li>
	        </ul>
            <ul data-role="content" id="login-form">
				<?php 
					
					if(Session::exists('error'))
					{
						echo"<li class='message error'>";
						echo"<i class='fa fa-exclamation'></i>";
		 				echo"<p>".Session::get('error')."</p>";
						echo"</li>";

						Session::delete('error');

					}
                    else if(Session::exists('success'))
					{
						echo"<li class='message success'>";
						echo"<i class='fa fa-check'></i>";
						echo"<p>".Session::get('success')."</p>";
						echo"</li>";
                        
                        if(Session::get('count') == 2){
						  Session::delete('success');
                          Session::delete('count');
                        }
                        else
                          Session::put('count',Session::get('count')+1);

					}
				?>
                <form name="login-form" id="login-form" method="post" action="" data-ajax="false">
                <li data-role="fieldcontain">
                  <label for="textinput">Username:</label>
                  <input type="text" name="username" id="username" value="" data-clear-btn="true" placeholder="Username/Tel no">
                </li>
                <li data-role="fieldcontain">
                  <label for="passwordinput">Password:</label>
                  <input type="password" name="password" id="password" value="" data-clear-btn="true" placeholder="Password"/>
                </li>
                <li>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                <button class="ui-btn btn-glow-green">Submit</button>	
                </li>
                </form>
   			</ul> 
            <div data-role="content" style="margin-top:20px;text-align:center">
            	<label style="font-size:13px;">
                	<a href='#fgt-pwd' data-rel='popup' data-position-to='window'  data-icon='external-link' data-transition='pop' data-inline='true'>Forget Password?</a> | <a href="#register">First Time Login?</a>
                </label>
                <div data-role='popup' id='fgt-pwd' data-theme='b' style="max-width:400px;padding-bottom:10px;">
                    <div data-role="header" data-theme="b">
                       <h1>Forget Your Password?</h1>
                    </div>
                    <div role="main" class="ui-content" style="">
                       <h3 class="ui-title">We will send you reset link to your email</h3>
                       <input type="email" name="email-reset" id="email-reset" placeholder="Enter your Email"/>
                       <a href='#' data-rel='back' data-icon='check' class="btn-glow-green" data-iconpos='left' data-role='button' data-inline='true'>Send</a>
					   <a href='#' data-rel='back' data-icon='delete' class="btn-glow-green" data-iconpos='left' data-role='button' data-inline='true'>Cancel</a>
                    </div>
               </div>
            </div>           	
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
    
    <div data-role="page" id="register" data-theme='b'>
      <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <h1>Retail Mobile System</h1>
            <a href="#" data-ajax='false' target='_blank'><i class='fa fa-shopping-cart'></i></a>
            <a href="#main-page"><i class='fa fa-arrow-left'></i></a>
      </div>
      <div data-role="content">
      		<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
	            <li data-role="list-divider">Fast Registeration</li>
	        </ul>

            <form name="reg-form" id="reg-form" method="post" action="" data-ajax="false">
            <ul data-role="content" id="register-form">
                <?php
                        	if(Session::exists('validate-error')){
                        	    echo '<li style="text-align:center" data-role="fieldcontain" id="message" class="message warning">';
                                echo '<i class="fa fa-warning"></i>';
                            }
                            else{
                                echo '<li style="text-align:center" id="message" class="message">';
                                echo '<i class=""></i>';
                            }
                                
                            echo '<p id="match_pwd">';
                            if(Session::exists('validate-error')){
                                foreach(Session::get('validate-error') as $error)
                                    echo $error;
                            }
                            echo '</p>';
                            echo '</li>';
                            Session::delete('validate-error');
                ?>
                <li data-role="fieldcontain">
                  <label for="textinput">First Name:</label>
                  <input type="text" name="fname" id="fname" data-clear-btn="true" placeholder="First Name" value="<?php echo Input::get('fname')?>">
                </li>
                <li data-role="fieldcontain">
                  <label for="textinput">Last Name:</label>
                  <input type="text" name="lname" id="lname" data-clear-btn="true" placeholder="Last Name" value="<?php echo Input::get('lname')?>">
                </li>
                <li data-role="fieldcontain">
                  <label for="textinput">No tel:</label>
                  <input type="text" name="cust_tel" id="tel" data-clear-btn="true" placeholder="Tel no" >
                </li>
                <li data-role="fieldcontain">
                  <label for="passwordinput">Password:</label>
                  <input type="password" name="password" id="rpass" data-clear-btn="true" placeholder="Password"/>
                </li>
                <li data-role="fieldcontain">
                  <label for="passwordinput">Confirm Password:</label>
                  <input type="password" name="cpassword" id="cpass" data-clear-btn="true" placeholder="Retype Password"/>
                </li>
                <li>
                <button type="submit" name="submit-reg" id="submit-reg" class="ui-btn btn-glow-green">Submit</button>	
                </li>
   			</ul>
            </form>
      </div>
      <div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme='b' style="text-align:center;">
        	<label for="copyright" style="margin-top:10px">&copy; <?php 
			$copyYear = 2014; 
			$curYear = date('Y'); 
			echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
			?> Mobile Dev. By MHI Freelancer</label>
       </div>
    </div>

    
    	<!-- jQuery / jQueryMobile Scripts -->
		<script src="js/jquery-2.1.0.js"></script>
        <script src="js/jquery.mobile-1.4.4.js"></script>
        <script src="js/jquery.maskedinput.js"></script>
        
        <script>
            $(function($){
               $("#tel").mask("9999999999",{placeholder:""});
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

        <script>
			$(document).ready(function(){
				$pass = $("#cpass");
				$pass = $("#cpass");
				$tel=$("#tel");
				$fname=$("#fname");
				$pflag=false;
				$pass.keyup(function()
				{
					$p = $("#rpass").val();
					if($pass.val()=="" || $p==""){
						$("#match_pwd").html("");
						$("#message").removeClass("warning").removeClass("success");
						$("#message i").removeClass("fa fa-warning").removeClass("fa fa-check");
						$pflag=false;
					}
					else
					{
						if($p != $pass.val())
						{
							$("#match_pwd").html("Password not match");
							$("#message").removeClass("success").addClass("warning");
							$("#message i").removeClass("fa fa-check").addClass("fa fa-warning");
							$pflag=false;
						}
						else if($p == $pass.val()){
							$("#match_pwd").html("Password Match");
							$("#message").removeClass("warning").addClass("success");
							$("#message i").removeClass("fa fa-warning").addClass("fa fa-check");
							$pflag=true;
						}
						else{
							$("#match_pwd").html("");
							$("#message").removeClass("warning").removeClass("success");
							$("#message i").removeClass("fa fa-warning").removeClass("fa fa-check");
							$pflag=false;
						}
							
					}
				});
				
				$("#reg-form").submit(function(){
					if($fname.val()=="" || $tel.val() == "" || $pflag == false){
						$("#match_pwd").html("Please Make Sure Everything is Correct before submit");
						$("#message").addClass("warning");
						$("#message i").addClass("fa fa-warning");
						return false;
					}
					else{
						var over = '<div id="overlay">' +
				            '<img id="loading" src="images/loading.gif">' +
				            '</div>';
				        $(over).appendTo('body');
						return true;
					}
					
				});
			});
			
			
        </script>
        
        <script>
	
			$(document).ready(function(){
			$("#tel").change(function() {
					var tel = $("#tel").val();						
						if(tel != "")
						{
							$("#match_pwd").html('<img src="images/ajax-loader.gif" style="width:15px;height:15px;">&nbsp;Checking availability...');
							jQuery.ajax({  
							   type: "POST",  
							   url: "check.php" ,
							   data: "tel="+tel,  
							   success: function(data)
							   {
									if(data==1)
									{
										$("#match_pwd").html("Phone No "+tel+" already use!");
										$("#message").removeClass("success").addClass("warning");
                                        $("#message i").removeClass("fa fa-check").addClass("fa fa-warning");
										$("#tel").val('');
									}
									else
									{
										$("#match_pwd").html("Phone No "+tel+" is Available!");
										$("#message").removeClass("warning").addClass("success");
                                        $("#message i").removeClass("fa fa-warning").addClass("fa fa-check");
									}
										 
							   }
							});
						}
				 });
	
			});
	
		</script>
    </body>
</html>
