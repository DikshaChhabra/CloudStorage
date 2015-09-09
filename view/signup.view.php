<!--Link Trigger Model-->
<div class="form-group">
	<div class="col-md-1 col-md-offset-6 sign-up">or
	    <a  data-toggle="modal" href="#myModal" class="sign-up">Sign Up</a>
    </div>
</div>
<!--Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Modal Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">
                &times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="index.php" method="post">
					<div class="form-group">
						<label class="col-md-3 col-md-offset-2">First Name</label>
					        <div class="col-md-5">
						        <input type="text" name="fname" class="form-control log" required>
					        </div>
					</div>
					<div class="form-group">
						<label class="col-md-3 col-md-offset-2">Last Name</label>
							<div class="col-md-5">
								<input type="text" name="lname" class="form-control log" required>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 col-md-offset-2">User Name</label>
							<div class="col-md-5">
								<input type="text" name="usr" class="form-control log" required>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 col-md-offset-2">Email</label>
							<div class="col-md-5">
								<input type="email" name="mail" class="form-control log" required>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 col-md-offset-2">Password</label>
							<div class="col-md-5">
								<input type="password" name="pass" class="form-control log" required>
							</div>
					</div>
					<div class="form-group">
					    <div class="col-md-1 col-md-offset-6">
					        <input type="submit" class="btn btn-primary" value="Sign Up" name="signup">
					    </div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

