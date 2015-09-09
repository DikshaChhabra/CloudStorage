<?php
session_start();

$username=$_SESSION['username'];
if(isset($_POST['chngepswrd'])&&!empty($_POST['chngepswrd'])){
    $query1=Query("select `password` from cs_user where `username`=$username",$conn);
    $rslt=$query1->fetchObject();
    echo $currentpassword=$rslt->password;
    if(crypt($_POST['cpass'],'$2y$')==$currentpassword){
        if(crypt($_POST['npass'],'$2y$')==crypt($_POST['cnfrmpass'],'$2y$')){
            echo crypt($_POST['npass'],'$2y$');
            $query1=$conn->query("update `cs_user` set `password`='".crypt($_POST['npass'],'$2y$')."' where `username`=$username");
        }
        else{
            '<div class="bg-warning pswrd" >
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>password</strong>not confirmed...
              </div>';
        }
    }
    else{
        '<div class="bg-danger pswrd" >
         <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>Oops!!</strong>current password not correct...
         </div>';
    }
}
?>

<!-- navbar -->
<div class="navbar navbar-inverse navbar-fixed-top sid" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <i class="fa fa-cloud-upload fa-3x cloud"></i>
            <p class="hed">CLOUD STORAGE </p>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><i class="fa fa-user fa-2x usr"></i></li>
                <li class="dropdown">
					<a class="dropdown-toggle user" id="dropdownMenu1" data-toggle="dropdown" data-user="<?= $username?>" >
					<?php echo $_SESSION['fname'].' '.$_SESSION['lname']?>
					<span class="caret"></span>
					</a>
	                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    <li role="presentation"><a role="menuitem"  href="#"><i class=" fa fa-suitcase"></i> Profile</a></li>
					    <li role="presentation"><a role="menuitem"  href="#change_password" data-toggle="modal"><i class="fa fa-cog"></i> Settings</a></li>
					    <li role="presentation"><a role="menuitem"  href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
	                </ul>
	            </li>  
            </ul>
        </div>
    </div>
</div>
<!-- navbar end -->
<!-- Modal change pasword -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
            </div>
            <!--body-->
            <div class="modal-body data-modal">
                <form class="form-horizontal" role="form" action="dashboard.php" method="post">
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-2">Current Password</label>
                            <div class="col-md-5">
                                <input type="text" name="cpass" class="form-control log" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-2">New Password</label>
                            <div class="col-md-5">
                                <input type="text" name="npass" class="form-control log" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-2">Confirm Password</label>
                            <div class="col-md-5">
                                <input type="text" name="cnfrmpass" class="form-control log" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 col-md-offset-6">
                            <input type="submit" class="btn btn-primary" value="Change" name="chngepswrd">
                        </div>
                    </div>
                </form> 
            </div>
            <!-- footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        