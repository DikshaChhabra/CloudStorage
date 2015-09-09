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
					    <li role="presentation"><a role="menuitem"  href="#"><i class="fa fa-cog"></i> Settings</a></li>
					    <li role="presentation"><a role="menuitem"  href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
	                </ul>
	            </li>  
            </ul>
        </div>
    </div>
</div>
<!-- navbar end -->