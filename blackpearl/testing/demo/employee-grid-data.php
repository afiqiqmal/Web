<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fp_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'food_id', 
	1 => 'food_name',
	2 => 'food_type',
	3 => 'food_price'
);




// getting total number records without any search
$sql = "SELECT food_id,food_name,food_type,food_price ";
$sql.=" FROM food_tbl";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.




$sql = "SELECT food_id,food_name,food_type,food_price ";
$sql.=" FROM food_tbl WHERE 1=1 ";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) ){   //name
	$sql.=" AND food_id LIKE '%".$requestData['columns'][0]['search']['value']."%' ";
}
else if( !empty($requestData['columns'][1]['search']['value']) ){   //name
	$sql.=" AND food_name LIKE '%".$requestData['columns'][1]['search']['value']."%' ";
}
else if( !empty($requestData['columns'][2]['search']['value']) ){  //salary
	$sql.=" AND food_type LIKE '%".$requestData['columns'][2]['search']['value']."%' ";
}
else if( !empty($requestData['columns'][3]['search']['value']) ){ //age
	$rangeArray = explode("-",$requestData['columns'][3]['search']['value']);
	$minRange = $rangeArray[0];
	$maxRange = $rangeArray[1];
	$sql.=" AND ( food_price >= '".$minRange."' AND  food_price <= '".$maxRange."' ) ";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
	
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql);

	


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["food_id"];
	$nestedData[] = $row["food_name"];
	$nestedData[] = $row["food_type"];
	$nestedData[] = $row["food_price"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
