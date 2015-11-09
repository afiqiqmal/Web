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

$columns = array( 
// datatable column index  => database column name
	0 => 'stud_id', 
	1 => 'stud_fname',
	2 => 'stud_lname',
	3 => 'stud_age',
	4 => 'stud_grade',
	5 => 'stud_birthcert',
	6 => 'stud_dp',
	7 => 'stud_id'
);

$sql = "SELECT * ";
$sql.=" FROM student_tbl WHERE ";

if( !empty($requestData['search']['value'])){
	// getting records as per search parameters
	$sql.=" stud_id LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR stud_fname LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR stud_lname LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR stud_age LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR stud_grade LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR stud_birthcert LIKE '%".$requestData['search']['value']."%' ";
}
else{
	$sql.=" stud_id ='".$requestData['search']['value']."' ";
}

$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;

$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql);

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["stud_id"];
	$nestedData[] = $row["stud_fname"];
	$nestedData[] = $row["stud_lname"];
	$nestedData[] = $row["stud_age"];
	$nestedData[] = $row["stud_grade"];
	$nestedData[] = $row["stud_birthcert"];
	$nestedData[] = $row["stud_dp"];
	$nestedData[] = $row["stud_id"];
	
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
