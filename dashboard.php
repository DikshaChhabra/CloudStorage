<?php 
session_start();
require 'modal/function.php';//To Call Path Func
require 'modal/conn.php';//Connection to Database

if(!isset($_SESSION['email'])){
	header('location:index.php');
}
include 'file.upload.php';
include 'folder.upload.php';
$username=$_SESSION['username'];
//queries to select file and folder info from database
$file_info=Query("select * from cs_file_$username where `S_ID`=0 ",$conn);
$folder_info=Query("select * from cs_folder_$username where `R_ID`=0 ",$conn);

//function to call layout
path('dashboard.view.php',[
	'file_info'=>$file_info,
	'folder_info'=>$folder_info,
	'username'=>$username
	]);
?>