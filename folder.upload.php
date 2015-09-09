<?php
    if (isset($_POST['submit'])&&!empty($_POST['submit'])){
    	$fldr=$_POST['fldr'];
    	$username=$_SESSION['username'];
    	$fldr_path='uploads/'.$_SESSION['id'].'/'.$_POST['fldr'];
    	$query=Query("insert into `cs_folder_$username` values('','".$fldr_path."','0',
    		   '".$fldr."')",$conn);
    	$dest='/CloudStorage/uploads/'.$_SESSION['id'].'/'.$_POST['fldr'];
    	mkdir($_SERVER['DOCUMENT_ROOT'].$dest,0777,true);
    	$query1=Query("select `S_ID` from `cs_folder_$username` where `folder_name`='".$fldr."'"
    		,$conn);
    	$rslt=$query1->fetchObject();
    	$sid=$rslt->S_ID;
    foreach ($_FILES['files']['name'] as $i => $name) {
    	    $path='uploads/'.$_SESSION['id'].'/'.$_POST['fldr'].'/'.$name;
            move_uploaded_file($_FILES['files']['tmp_name'][$i],$path);
            $query2=Query("insert into `cs_file_$username` values('','".$path."','".$sid."',
            	    '".$name."')",$conn);
            } 
    } 
?>
    