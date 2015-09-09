<?php
session_start();
require 'modal/conn.php';//Connection to Database
require 'modal/function.php';//To Call Path Func
    if(isset($_GET['id'])){
	$id=$_GET['id'];
	$username= $_GET['user'];
	$query=Query("select `file_path`,`file_name` from `cs_file_$username` where F_ID=$id ",$conn);
	$result= $query->fetchObject();
	$filepath=$result->file_path;
	$filename=$result->file_name;
	
	header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($filepath) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    readfile($filepath); //showing the path to the server where the file is to be download
    exit; 
}
 ?>