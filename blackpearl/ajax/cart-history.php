<?php
require "../control/core/init.php";
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fp_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$stud_id = (empty($_GET['id']))?Session::get('select_stud')[0]->stud_id:$_GET['id'];
if(empty($stud_id)) header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/blackpearl');
$columns = array( 
// datatable column index  => database column name
	0 =>'date', 
	1 => 'purchase_id',
	2 => 'total',
	3 => 'status'
);




// getting total number records without any search
$sql = "SELECT date,purchase_id,total,status ";
$sql.=" FROM history_tbl WHERE stud_id ='".$stud_id."'";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT date,purchase_id,total,status ";
$sql.=" FROM history_tbl WHERE 1=1 ";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) && !(strpos($requestData['columns'][0]['search']['value'],'-'))){   //name
	$sql.=" AND date LIKE '%".$requestData['columns'][0]['search']['value']."%' ";
}
else if( !empty($requestData['columns'][0]['search']['value']) ){ //age
	$rangeArray = explode("-",$requestData['columns'][0]['search']['value']);
	$minRange = $rangeArray[0];
	$maxRange = $rangeArray[1];
	$sql.=" AND ( date >= '".$minRange."' AND  date <= '".$maxRange."' ) ";
}

$sql.=" AND stud_id ='".$stud_id."'";

$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
	
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql);

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["date"];
	$nestedData[] = $row["purchase_id"];
	$nestedData[] = $row["total"];
	$nestedData[] = $row["status"];
	
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
