<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open('users/register')?>
<!--<form action="<?php echo base_url();?>users/register" method="post"> -->
<div class="form-group">
				<label>First Name*</label>
				<input type="text" class="form-control" name="first_name" placeholder="Please enter your First Name">
			</div>
			<div class="form-group">
				<label>Last Name*</label>
				<input type="text" class="form-control" name="last_name" placeholder="Please enter your Last Name">
			</div>
			<div class="form-group">
				<label>Email-Address*</label>
				<input type="email" class="form-control" name="email" placeholder="Please enter your Email Address Name">
			</div>
			<div class="form-group">
				<label>Choose Username</label>
				<input type="text" class="form-control" name="username" placeholder="Please choose your Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Please enter your desired password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password2" class="form-control" name="cpassword" placeholder="Please confirm your password">
			</div>
			
			<button name="submit" type="submit" class="btn btn-primary">Register</button>
<!--</form>-->