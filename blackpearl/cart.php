<?php
	require "control/core/init.php";

	$inv = new Sales();

	//search clickable item
	if(Input::get('add_item') && Input::get('item') === 'add'){
		$product_code = Input::get('add_item');
		$current_url = Cryption::decryt64(Session::get("current_url")); 
		$inv->add_item($product_code);
		Redirect::to($current_url);
	}

	//search input item
	else if((Input::exists() && Input::get('s-item')) || Input::get('find-id')){
		$product_code 	= (Input::get('s-item')=="")?Input::get('find-id'):Input::get('s-item');
		$current_url = Cryption::decryt64(Session::get("current_url")); 
		$inv->add_item($product_code);
		Redirect::to($current_url);
	}

	//update item
	else if(Input::get('qty') && Session::exists('products')){
		$product_code = Input::get('update_item');
		$current_url = Cryption::decryt64(Session::get("current_url")); 
		$inv->update_item($product_code,Input::get('qty'));
		Redirect::to($current_url);
	}
	//delete item
	else if(Input::get('removep') && Session::exists('products')){
		$code 	= Input::get('removep');
		$current_url = Cryption::decryt64(Session::get("current_url"));
	    $inv->remove_item(Input::get('bac'),$code);	     
	    Redirect::to($current_url);
	}

	//empty cart
	else if(Input::get('detachcart')==1){
		$current_url = Cryption::decryt64(Session::get("current_url")); 
	    $inv->emptycart();
	    Redirect::to($current_url);
	}

	//cancel sales
	else if(Input::get('detachall')==1){
		$current_url = Cryption::decryt64(Session::get("current_url")); 
	    $inv->cancel_sale();
	    Redirect::to($current_url);
	}

	//select student
	else if(Input::get('scan-stud') && Input::get('sel')==1){
		$sql = 'Select * FROM student_tbl a,class_tbl b,parent_tbl c 
				where a.stud_id = b.stud_id 
				AND  a.stud_id = c.stud_id 
				AND a.stud_id = ?';

		$select = DB::getInstance()->query($sql,array(Input::get('scan-stud')));
        if($select && $select->count() > 0){
           Session::put('select_stud',$select->result());
           (Session::exists('verify_error'))? Session::delete('verify_error'): '';
        }
        else{
           Session::put('verify_error','Please Try Again');
        }
        $current_url = Cryption::decryt64(Session::get("current_url")); 
        Redirect::to($current_url);
	}
	
	//remove student
	else if(Input::get('removes')==1 && Session::exists('select_stud')){
		$current_url = Cryption::decryt64(Session::get("current_url")); 
	    $inv->remove_stud();
	    Redirect::to($current_url);
	}

	//Browse Menu Bars
	else if (Input::get('check')) {
	    $code = Input::get('check');

	    if($code == "back"){

	       $results = DB::getInstance()->query("Select food_type,food_image from food_tbl group by food_type");
	       $obj = $results->result(); 
	       echo "<div class='title'>Choose category</div>";
	       for ($i=0; $i < $results->count() ; $i++) { 
	          echo "<label class='main' id='".$obj[$i]->food_type."'>";
	            echo "<div class='thumb'>";
	                echo "<img src='".$obj[$i]->food_image."'>";
	            echo "</div>";
	            echo "<span>".$obj[$i]->food_type."</span>";
	          echo "</label>";
	       }
	       
	    }
	    else{
	      $results = DB::getInstance()->query("Select * from food_tbl where food_type=?",array($code));
	      $obj = $results->result();
	      echo "<label class='col-lg-2 col-xs-5 main back' id='back'>";
	        echo "<i class='fa fa-arrow-left'></i>";
	      echo "</label>";
	      
	      for ($i=0; $i < $results->count() ; $i++) { 
	        echo "<a class='col-lg-2 col-xs-5 bar-item' href='cart.php?add_item=".$obj[$i]->food_id."&item=add'>";
	         echo $obj[$i]->food_name;
	        echo "</a>";
	      }  
	    }
    
  	}
  	else if(Input::get('term')){
  		$input = addslashes(Input::get('term'));
  		$results = DB::getInstance()->query('SELECT * FROM food_tbl WHERE 
		food_id LIKE ? OR food_name LIKE ? OR food_type LIKE ? OR food_price LIKE ?',
		array('%'.$input.'%','%'.$input.'%','%'.$input.'%','%'.$input.'%'));
	    $obj = $results->result();
	    echo "<table class='table table-bordered table-fixed'><thead><tr><th class='col-xs-6'>Food_id</th><th class='col-xs-6'>Food Name</th></tr></thead><tbody>";
	    for ($i=0; $i < $results->count() ; $i++) { 
	    	echo "<tr>";
	    		echo "<td class='col-xs-6'><a href='cart.php?find-id=".$obj[$i]->food_id."'>".$obj[$i]->food_id."</a></td>";
	    		echo "<td class='col-xs-6'>".$obj[$i]->food_name."</td>";
	    	echo "</tr>";
	    }
	    echo "</tbody></table>";
  	}
  	else if(Input::exists() && Input::get('detail')){
  		$sql = 'Select * FROM student_tbl a,class_tbl b
				where a.stud_id = b.stud_id 
				AND a.stud_id = ?';

		$select = DB::getInstance()->query($sql,array(Input::get('detail')));
        $get = $select->result()[0];
        echo "<style>
        	.display-detail table tr{vertical-align:top}
        	.display-detail table td:first-child{width:30%;color:#FFA206}
        	</style>";
        echo '<div class="col-xs-8 ">';
        if($select->count()==1){
        	echo '<table>';
        	echo "<tr>";
        		echo "<td>Name</td>";
        		echo "<td>{$get->stud_fname}, {$get->stud_lname}</td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td>Age</td>";
        		echo "<td>{$get->stud_age}</td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td>Grade</td>";
        		echo "<td>{$get->stud_grade}</td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td>Class</td>";
        		echo "<td>{$get->class_name}</td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td>Gender</td>";
        		echo "<td>{$get->stud_gender}</td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td>DOB</td>";
        		echo "<td>{$get->stud_dob}</td>";
        	echo "</tr>";
        	echo "</table>";

        	echo '<div class="view-more">';
            echo '<a class="btn btn-primary" href="view.php?sid='.Cryption::encryt64(Input::get('detail')).'&tid='.Token::generate().'">View More..</a>';
            echo '</div>';
        }
        echo '</div>';
        echo '<div class="col-xs-4 pic" style="padding:0px;">';
              	echo '<a href="img/profile-pics/student/'.$get->dp_name.'" data-rel="shadowbox[album]" class="img-popup" title="'.$get->stud_fname.'">';
                	echo '<i class="icon-expand"></i>';
                	echo '<img class="block" src="data:image;base64,'.$get->stud_dp.'" alt="">';
                echo '</a>';
        echo '</div>';
  	}
  	else if(Input::exists() && Input::get('search-person')){
  		$code = addslashes(Input::get('search-person'));
  		$sql = "SELECT * FROM student_tbl WHERE stud_id LIKE ? OR stud_fname LIKE ? OR stud_lname LIKE ? OR stud_age LIKE ? OR stud_grade LIKE ? OR stud_birthcert LIKE ?";
	
		$results = DB::getInstance()->query($sql,array('%'.$code.'%','%'.$code.'%','%'.$code.'%','%'.$code.'%','%'.$code.'%','%'.$code.'%'));
		$obj = $results->result();

		if($results->count()){
			foreach ($obj as $val)
			{
				echo '<div class="media">';
		          echo '<a href="img/profile-pics/student/'.$val->dp_name.'" data-rel="shadowbox[album]" class="img-popup pull-left" title="'.$val->stud_fname.'">
                         	<i class="icon-expand"></i>
                           	<img class="media-object" src="data:image;base64,'.$val->stud_dp.'" alt="">
                        </a>';
			        echo '<div class="media-body">';
			            echo '<div>'.$val->stud_fname.', '.$val->stud_lname.'</div>';
			            
			            $gr = DB::getInstance()->query("Select SUM(total) as sum_total from history_tbl where stud_id = ?",array($val->stud_id));
			            $ogr = $gr->result();

			            $money = 0;
			            if($ogr[0]->sum_total != NULL)
			            	$money = $ogr[0]->sum_total; 
			            echo '<div class="block attrs">';
			                echo 'Overall Spend: RM '.$money;
			            echo '</div>';

			            $unpaid = DB::getInstance()->query("Select SUM(total) as sum_total from history_tbl where stud_id = ? and status = 'unpaid'",array($val->stud_id));
			            $opid = $unpaid->result();

			            if($opid[0]->sum_total != NULL) {
				            echo '<div class="block attrs attrs-red">';
				                echo 'Total Unpaid: RM '.$opid[0]->sum_total;
				            echo '</div>';
			        	}

			        echo '</div>';
			        echo '<div class="list-options">';
			            echo '<button class="btn btn-danger btn-sm">Delete</button>';
			            echo '<button class="btn btn-primary btn-sm viewdiv" view="'.$val->stud_id.'">View</button>';
			        echo '</div>';
		        echo '</div>';
			}
		}
  		
  	}
  	else{
  		$current_url = Cryption::decryt64(Session::get("current_url")); 
  		Redirect::to($current_url);
  	}	

?>