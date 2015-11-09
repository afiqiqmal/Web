<?php
    require "core/init.php";
    
    if(!Session::exists("msg")){
        Session::put("msg","");
    }
?>
    
<html>
	<head>
		<title>POS System</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Retail POS Sytem"/>
		<meta name="keywords" content="POS System"/>
		<meta name="author" content="Hafiq iqmal"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/getuser.css"/>
        <link rel="stylesheet" href="css/jquery.carousel.fullscreen.css" />

		<style type="text/css">
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 99;
			background-color:rgb(249,249,249);
		}

		#scan-text{height:100%;}
		.vertical-centered{
		   position: fixed;
		   text-align: center;	
		   width: 300px;
		   height: 300px;   
		   top: 50%;
		   left: 50%; 
		   margin-top: -10%;
		   margin-left: -150px;
		}
		</style>
	</head>    
    <body>
        <!-- Loader -->
        <div class="loader">
			<div id="scan-text">
			  	<div class="vertical-centered">
				   	<label style="display:block;">Searching.....</label>
				   	<img src="images/ajax-loader.gif"/>
			    </div>
			</div>
		</div>
        
        <?php
                if(Input::get('id-user')!=null){
                    $user = new User();
                    $id = Crytion::decryt64(Crytion::decryt64(Input::get('id-user')));
                    $login = $user->login($id,Input::get('pwd'),'employee');
                    if($login){
                        Session::put('msg','');
                        if($user->data()->job_id === 'AD')
            			{
                            Session::put("user_id",Crytion::encryt64($id));
                            Session::put("assign",Crytion::encryt64("AD"));
            				header("Location:detail%20admin");
            			}
            			else if($user->data()->job_id === 'SC')
            			{
            				Session::put("user_id",Crytion::encryt64($id));
                            Session::put("assign",Crytion::encryt64("ST_C"));
            				header("Location:detail%20staff");
            			}
            			else if($user->data()->job_id === 'SI')
            			{
            				Session::put("user_id",Crytion::encryt64($id));
                            Session::put("assign",Crytion::encryt64("ST_IN"));
            				header("Location:detail%20staffin");
            			}
                        
                    }
                    else{
                        Session::put('msg','Wrong Password! Make Sure The Combination Is Valid');
                    }
                }
        
            if(Session::exists('id')){
                $id = Session::get('id');                
                $jb = Session::get('jb');
                
                $user = DB::getInstance()->query('Select * from tbl_employee where user_id=?',array(Crytion::decryt64(Crytion::decryt64($id))));
                
                if(!$user->error()){
                    
        ?>
        
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" style="display:none">
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/bg/supermarket.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/bg/supermarket2.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/bg/blurred.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/bg/bg2.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="bar" style="display:none">
			<div>
			<!-- profile pic -->
			<div class='glass'>
				<img src='getimg.php?id=<?php echo $id ?>&jb=<?php echo $jb ?>' />
			</div>
			
			<!-- Password field -->
			<div class="user-name"><label for="username" style="color:#52cfeb;">Welcome, <?php echo $user->result()->fname ?></label></div>
			<form class="form-1" method="post" action="login.php">
				<input type="hidden" name="id-user" value="<?php echo $id; ?>"/>
				<p class="field">
					<input type="password" name="pwd" id="pwd" placeholder="Password" autofocus autocomplete="off"/>
					<i class="fa fa-eye fa-large" ></i>
				</p>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
				<p class="submit">
					<button type="submit" id="submit" name="submit" ><i class="fa fa-lock fa-large"></i></button>
				</p>
			</form>
			<label style="color:red;"><?php echo Session::flash('msg'); ?></label>
			<label><a href="index.php">Not you? Re-scan Your Card</a></label>
			<label><a href="/">Forgot Password?</a></label>
			</div>
		</div>
        
    </body>
    
    <script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.carousel.fullscreen.js"></script>
		


	<script type="text/javascript">
		$("#submit").hover(function() {
		   $(".fa-lock").toggleClass("fa-unlock");
		});
	</script>

	<script type="text/javascript">
        $(window).load(function(){
            $(".loader").hide();
            $(".bar").show();
            $(".carousel").show();
        });
    </script>

    <?php
            }
            else
                header("Location:index.php");
        }
        else
            header("Location:index.php");
    ?>
 
</html>