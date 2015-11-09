<?php
	include("config/config.php");
	
	$id = addslashes($_GET['id']);
	$jb = addslashes($_GET['jb']);
	$id = base64_decode(base64_decode($id));

	if(base64_decode(base64_decode($jb)) == "employee")
		$sql = "SELECT * FROM tbl_employee WHERE user_id=?";
	else
	if(base64_decode(base64_decode($jb)) == "cust")
		$sql = "SELECT * FROM tbl_cust WHERE cust_id=?";
    else
    if(base64_decode(base64_decode($jb)) == "item")
		$sql = "SELECT * FROM tbl_goods WHERE goods_id=?";

	$query = $con->prepare($sql);
	$query->execute(array($id));
	
	$r = $query->fetch(PDO::FETCH_OBJ);

	if(!function_exists('mime_content_type')) 
	{
	    function mime_content_type($filename) {

	        $mime_types = array(

	            'txt' => 'text/plain',
	            'htm' => 'text/html',
	            'html' => 'text/html',
	            'php' => 'text/html',
	            'css' => 'text/css',
	            'js' => 'application/javascript',
	            'json' => 'application/json',
	            'xml' => 'application/xml',
	            'swf' => 'application/x-shockwave-flash',
	            'flv' => 'video/x-flv',

	            // images
	            'png' => 'image/png',
	            'jpe' => 'image/jpeg',
	            'jpeg' => 'image/jpeg',
	            'jpg' => 'image/jpeg',
	            'gif' => 'image/gif',
	            'bmp' => 'image/bmp',
	            'ico' => 'image/vnd.microsoft.icon',
	            'tiff' => 'image/tiff',
	            'tif' => 'image/tiff',
	            'svg' => 'image/svg+xml',
	            'svgz' => 'image/svg+xml',

	            // archives
	            'zip' => 'application/zip',
	            'rar' => 'application/x-rar-compressed',
	            'exe' => 'application/x-msdownload',
	            'msi' => 'application/x-msdownload',
	            'cab' => 'application/vnd.ms-cab-compressed',

	            // audio/video
	            'mp3' => 'audio/mpeg',
	            'mp4' => 'audio/mp4',
	            'avi' => 'audio/avi',
	            'qt' => 'video/quicktime',
	            'mov' => 'video/quicktime',

	            // adobe
	            'pdf' => 'application/pdf',
	            'psd' => 'image/vnd.adobe.photoshop',
	            'ai' => 'application/postscript',
	            'eps' => 'application/postscript',
	            'ps' => 'application/postscript',

	            // ms office
	            'doc' => 'application/msword',
	            'rtf' => 'application/rtf',
	            'xls' => 'application/vnd.ms-excel',
	            'ppt' => 'application/vnd.ms-powerpoint',

	            // open office
	            'odt' => 'application/vnd.oasis.opendocument.text',
	            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
	        );

	        $ext = strtolower(array_pop(explode('.',$filename)));
	        if (array_key_exists($ext, $mime_types)) {
	            return $mime_types[$ext];
	        }
	        elseif (function_exists('finfo_open')) {
	            $finfo = finfo_open(FILEINFO_MIME);
	            $mimetype = finfo_file($finfo, $filename);
	            finfo_close($finfo);
	            return $mimetype;
	        }
	        else {
	            return 'application/octet-stream';
	        }
	    }
	}

	$type="";
	if($r->image_type=='image/png')
		$type=".png";
	if($r->image_type=='image/gif')
		$type=".gif";
	if($r->image_type=='image/jpg')
		$type=".jpg";
	if($r->image_type=='image/jpeg')
		$type=".jpg";

	$imageData = base64_encode($r->image);

	$src = 'data: '.mime_content_type($type).';base64,'.$imageData;

	readfile($src);
?>