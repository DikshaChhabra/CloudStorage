<?php 
//validation of Sign Up Form
if(isset($_POST["signup"])&&!empty($_POST["signup"])){
    //check whether username already exists or not
    $qury=Query("select `username` from `cs_user` where username='".$_POST['usr']."'",$conn);
    $qury1=$qury->fetchObject();
    $email=$qury1->username;
    if($email){
        echo '<div class="bg-danger pswrd" >
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Oops!!</strong>Username Already Exists...
              </div>';
    }
    else{
    $query=Query("insert into `cs_user` values ('','".$_POST['fname']."','".$_POST['lname']."',
    	        '".$_POST['usr']."','".$_POST['mail']."','".crypt($_POST['pass'],'$2y$')."')"
                ,$conn);

    $query1=Query("select `id`,`username` from `cs_user` where `email`='".$_POST['mail']."'"
    	    ,$conn);

    $query2=$query1->fetchObject();
    $id=$query2->id;
    $username=$query2->username;

    $fldr="/CloudStorage/uploads/".$id;
    mkdir($_SERVER['DOCUMENT_ROOT'].$fldr,0777,true);//make directory
   
    $query3=Query("create TABLE cs_file_$username(F_ID INT AUTO_INCREMENT PRIMARY 
    	     KEY ,file_path VARCHAR(100), S_ID INT ,file_name VARCHAR(100))",$conn);

    $query4=Query("create TABLE cs_folder_$username(S_ID INT AUTO_INCREMENT PRIMARY 
    	     KEY ,folder_path VARCHAR(100), R_ID INT ,folder_name VARCHAR(100))",$conn);

    echo '<div class="bg-success pswrd" >
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong>Congrats!</strong> You Are Successfully Signed Up.
          </div>';
}
}
?>