<?php
session_start();
//validation of Sign In Form 
if(isset($_POST['signin'])&&!empty($_POST['signin'])){
    $_SESSION['email']=$_POST['mail'];
	$result=Query("select `email` from `cs_user` where email='".$_POST['mail']."'",$conn);

	if($result){
        $query1=Prepare("select * from `cs_user` where `email`=:ml",
        	    [':ml'=>$_POST['mail']],$conn);//select password corresponding to entered email

        $rslt=$query1->fetchObject();
        $paswrd=$rslt->password;//fetch password
        $id=$rslt->id;//fetch id
        $username=$rslt->username;
        $_SESSION['fname']=$rslt->fname;
        $_SESSION['lname']=$rslt->lname;
        $_SESSION['username']=$username;
        $_SESSION['id']=$id;
        if(crypt($_POST['pass'],'$2y$')===$paswrd){ //actual password compare with entered password
            header("location:dashboard.php");
        }
        else
            echo '<div class="bg-danger pswrd" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> wrong password.
            </div>';
        }
    }

?>