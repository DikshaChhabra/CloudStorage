<?php
require 'config.php';

//function to connect database
function connect(){
try{
	$conn=new PDO('mysql:host=localhost;dbname=cloudstorage'
		 		 ,'root'
		 		 ,'design');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
}	
catch(Exception $e){
	echo $e->getMessage();
}
}
//function to execute simple query or query method
function Query($query,$conn){
	$result=$conn->query($query);
	return $result;
}
//function to execute complex query or prepare method
function Prepare($query,$bindings,$conn){
	$stmt= $conn->prepare($query);
	$stmt->execute($bindings);
	return $stmt;
}
?>