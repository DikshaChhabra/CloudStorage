<?php 
//upload files
if(!empty($_FILES)){
	$name=$_FILES['file']['name'];
	$tmp_name =$_FILES['file']['tmp_name'];
	$dest='uploads/'.$_SESSION['id'].'/'.$name;
	move_uploaded_file($tmp_name, $dest);
	$username=$_SESSION['username'];
	if($name!=''){
	$query=Query("insert into `cs_file_$username` values('','".$dest."','0','".$name."')",$conn);
}
}
?>