<!--Top Bar-->
<div class="top">
	<p class="txt">CloudStorage</p>
</div>
<!--Sign In Form-->
<div class="container">
    <form class="form-horizontal" role="form" action="index.php" method="post">
        <div class="col-md-4 col-md-offset-4">
		    <div class="input-group mrgn">
			    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
		        <input name="mail" class="form-control log" type="email" placeholder="Email address"
		        required>
		    </div>
		</div>
		<div class="col-md-4 col-md-offset-4">
		    <div class="input-group mrgn">
                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				<input name="pass" class="form-control log" type="password" placeholder="Password"
				required>
			</div>
		</div>
		<div class="form-group">
		    <div class="col-md-1 col-md-offset-6">
		        <div class="input-group mrgn">
		        <input type="submit" class="btn btn-primary" value="Sign In" name="signin">
		        </div>
		    </div>
		</div>
	</form>
</div>

