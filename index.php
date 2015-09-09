<?php 
require 'modal/conn.php';//Connection to Database
require 'modal/function.php';//To Call Functions

include 'signin.php';//Sign In Form Validation
include 'signup.php';//Sign Up Form Validation

//function to call layout
path('index.view.php');
?>
