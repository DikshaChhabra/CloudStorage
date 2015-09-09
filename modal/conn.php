<?php 
require 'query.php';
//connection to database
$conn=connect();

if(empty($conn)){
	echo "Some error occurs";
}
?>