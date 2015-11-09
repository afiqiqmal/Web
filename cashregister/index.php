<?php 
	require "core/init.php";
?>
<html>
<head>
	<title>POS System</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Retail POS Sytem">
	<meta name="keywords" content="POS System">
	<meta name="author" content="Hafiq iqmal">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">


	<style type="text/css">
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 99;
			background-color:rgb(249,249,249);
			color:#DA2929;
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
        <?php
        
            if(Input::exists()){
                    $user_id = Input::get('scan-id-check');            
                    $user = DB::getInstance()->get("tbl_employee",array("user_id","=",$user_id));
                    if($user->error()){
                        Session::put('error','System error occur.Please Refresh or Contact the Administrator');
                    }
                    else
                    if($user->count() == 1){                     
                        $id = Crytion::encryt64(Crytion::encryt64($user->result()->user_id));
                        $jb = Crytion::encryt64(Crytion::encryt64("employee"));
                        
                        Session::put('id',$id);
                        Session::put('jb',$jb);
                        
                        header("Location:login.php");
                        
                    } 
                    else
                        Session::put('error','ID Not Recognize. Please Make Sure You Have the Right ID');

            }
            
            
        ?>

		<div class="loader">
			<div id="scan-text">
			  	<div class="vertical-centered">
                    <?php
                        if(Session::exists('error'))
                            echo '<label style="display:block;font-size:11;color:red; id="error">'.Session::get('error').'</label>';
                        Session::delete('error');
				   	?>
                    <label style="display:block;" id="label1" class="label1">Scan Your Matrix Card</label>
				   	<div id="form-c"><img src="images/ajax-loader.gif">
				   	<label style="display:block;font-size:9" id="label2" class="label2">*You must have barcode scanner in your device that is connect to this pc</label></div>
				   	<label><input type="text" name="" value=""></label>
				   	<input type="" name="">
				   	
			    </div>
			</div>
		</div>

	<div id="scan-box">

	</div>


	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/JavaScript"> // script for mobile
		window.onLoad = detect();
		function detect() 
		{
		    var uagent = navigator.userAgent.toLowerCase();
		    var mobile = false;
		    var search_strings = [
		        "iphone",
		        "ipod",
		        "ipad",
		        "series60",
		        "symbian",
		        "android",
		        "windows ce",
		        "windows7phone",
		        "w7p",
		        "blackberry",
		        "palm"
		    ];
		    for (i in search_strings) {
		        if (uagent.search(search_strings[i]) > -1)
		        { 
			       	alert("You are using "+search_strings[i]);
			       	document.getElementById("form-c").innerHTML ='<form id="form1" method="post" action="">'+
					'<input id ="scan-id-check" class="form-control" name="scan-id-check" type="text" autofocus maxlength="10" autocomplete="off"/><input type="hidden" name="token" value="<?php echo Token::generate(); ?>"></form>';
			       	document.getElementById("label1").innerHTML = 'Type in Your Card Number';
			       	mobile = true;
		        }
		    }

		    if(mobile == false){
		    	document.getElementById("scan-box").innerHTML ='<form id="form1" method="post" action="">'+
					'<input id ="scan-id-check" class="form-control" name="scan-id-check" type="text" autofocus maxlength="10" autocomplete="off"/><input type="hidden" name="token" value="<?php echo Token::generate(); ?>"></form>';
		    }
		    
	   	}

	   	

	</script>
	<script>
		$(document).keyup(function() {
			if($("#scan-id-check").val()!="")
			{
				if($("#scan-id-check").val().length == 10)
				{	
					$(".label1").html("Scanning...");
					$(".label2").html("Please Wait...");
					$("#form1").submit();
				}
			}
			else{
				$(".loader").fadeIn("fast");
			}
		})
	</script>


	<script> //testing autofocus
		function testAttribute(element, attribute) 
		{
		   var test = document.createElement(element);
		   if (attribute in test) 
		   {	return true;}
		   else 
		   		return false;
		}

		window.onload = function() 
		{
		  	if (!testAttribute('input', 'autofocus'))
			  	document.getElementById('scan-id-check').focus(); 
			//for browser has no autofocus support
		}
	</script> 

	<script type='text/javascript'> // permenantly focus
		$(document).ready(function () {  //short hand for window.onLoad or $(document).ready()
		    $('html').on('mousedown', function (event) {
		       // left click
		       // all browsers except IE before version 9        // Internet Explorer before version 9
		       if ((('which' in event) && (event.which == 1)) || (('button' in event) && (event.button == 1))) {
		           document.getElementById('scan-id-check').focus();
		           return false; //prevent bubbling and default action
		       } 
		       // right click
		       else if ((('which' in event) && (event.which == 2)) || (('button' in event) && (event.button == 2))){
		           document.getElementById('scan-id-check').focus();
		           alert("right click forbidden");
		           return false;   
		       }
		    });
		});

	</script>

	<script>
		$(document).ready(function() { //short hand for window.onLoad or $(document).ready()
		    $("#scan-id-check").keydown(function (e) {
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 17, 116, 110]) !== -1 ||
		             // Allow: Ctrl+A
		            (e.keyCode == 65 && e.ctrlKey === true) ||

		            (e.keyCode == 116 && e.ctrlKey === true) ||

		            (e.keyCode == 86 && e.ctrlKey === true) || 
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });
		});
	</script>


	

</body>


</html>'