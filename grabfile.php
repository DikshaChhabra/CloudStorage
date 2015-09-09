<?php
session_start();
require 'modal/conn.php';//Connection to Database
require 'modal/function.php';//To Call Path Func


if(isset($_GET['id'])){
	$id=$_GET['id'];
	$username= $_GET['username'];
	$query=Query("select `file_path`,`file_name` from `cs_file_$username` where F_ID=$id ",$conn);
	$result= $query->fetchObject();
	$filepath=$result->file_path;
	$filename=$result->file_name;
	$info = new SplFileInfo($filename);
    $ext = $info->getExtension();
    $img = array('png','jpg','jpeg','JPG','PNG','gif' );
    if (in_array($ext, $img)){
    		
    		echo "<img src='{$filepath}' class='img-responsive'/>";
    }
    else{
    	echo "<pre>".htmlentities(file_get_contents($filepath, true))."</pre>";
    	   } 
}
?>