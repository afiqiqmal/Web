<?php 
    require "core/init.php";
?>
<html>
    <head>
        <title>nativeDroid - Theme for jQuery Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<!-- FontAwesome - http://fortawesome.github.io/Font-Awesome/ -->
        <link rel="stylesheet" href="../css/font-awesome.min.css" />

		<!-- jQueryMobileCSS - original without styling -->
		<link rel="stylesheet" href="../css/jquery.mobile-1.4.4.css" />

		<!-- nativeDroid core CSS -->
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.css" />

		<!-- nativeDroid: Light/Dark -->
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />

		<!-- nativeDroid: Color Schemes -->
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
        
        <!-- custom layout css -->
        <link rel="stylesheet" href="../css/custom-layout/login.css" type="text/css"/>  

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
    <body onload="scrlsts()">
        <?php
            
            if(Input::get('todo')=='out'){
                session_destroy();
                Redirect::to('../');
            }
            
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
                </div>
                
                <div data-role="content">        	
        			<ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
        	            <li data-role="list-divider">Welcome <?php echo $result->cust_fname ?>!</li>
        	        </ul>
                    <ul data-role="content" id="content-div">
                        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
                            <li data-role="list-divider">Selection</li>
                            <li><a href="item/" data-ajax="false">
                                <h2><i class="fa fa-dollar"></i> Check Item Price</h2>
                            </a></li>
                            <li><a href="cart/" data-ajax="false">
                                <h2><i class="fa fa-cog"></i> Cart (Under Maintanance)</h2>
                            </a></li>
                            <li data-role="list-divider">Account</li>
                            <li><a href="account/" data-ajax="false">
                                <h2><i class="fa fa-cog"></i> Setting </h2>
                            </a></li>
                            <li><a href="history/" data-ajax="false">
                                <h2><i class="fa fa-th"></i> History </h2>
                            </a></li>
                            <li data-role="list-divider">Sign Out</li>
                            <li><a href="logout.php" data-ajax="false">
                                <h2><i class="fa fa-share"></i> Sign out </h2>
                            </a></li>
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
        
        
        <!-- jQuery / jQueryMobile Scripts -->
		<script src="../js/jquery-2.1.0.js"></script>
        <script src="../js/jquery.mobile-1.4.4.js"></script>
        <script src="../js/jquery.maskedinput.js"></script>
        <SCRIPT LANGUAGE="JavaScript">
            var scrl = " Simple Mobile Retail By MHI Ver 1.0 ";
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
                Redirect::to('../');
            }
        ?>