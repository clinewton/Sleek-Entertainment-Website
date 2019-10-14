<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up - Sleek Entertainment Media</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">

</head>
<body>
<div class="login-form">
	<div class="form-header">
		<center><h1>Register</h1></center>
	</div><br>
	<form action="<?php echo base_url('user/signUp') ?>" method="post">
		<?php if($error = $this->session->flashdata('response')):?>
		<div class="form-group">
			<?php echo $error; ?>
		</div>
		<?php endif; ?>
		<fieldset>
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input name="firstname" class="form-control" id="firstname" type="text" placeholder="Enter First Name">
			</div>
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input name="lastname" class="form-control" id="lastname" type="text" placeholder="Enter Last Name">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input name="username" class="form-control" id="username" type="text" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label for="email">Email address</label>
				<input name="email" class="form-control" id="email" aria-describedby="emailHelp" type="email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input name="phone" class="form-control" id="phone" type="number" placeholder="Enter Phone Number">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input name="password" class="form-control" id="password" type="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="conf_password">Confirm Password</label>
				<input name="conf_password" class="form-control" id="conf_password" type="password" placeholder="Confirm Password">
			</div>

			<button class="btn btn-primary" type="submit">Register</button>
		</fieldset>
	</form>
</div>

</body>
</html>
