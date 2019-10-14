<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In - Sleek Entertainment Media</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
<div class="login-form">
	<div class="form-header">
		<center><h1>Log In</h1></center>
	</div><br>
	<form action="<?php echo base_url('user/signIn') ?>" method="post">
		<fieldset>
			<?php if($error = $this->session->flashdata('login_fail')):?>
				<div class="form-group" style="color: var(--red)">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="username">Username</label>
				<input name="username" class="form-control" id="username" type="text" placeholder="Enter username">
				<?php echo form_error('username')?>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input name="password" class="form-control" id="password" type="password" placeholder="Password">
				<?php echo form_error('password')?>
			</div>
			<button class="btn btn-primary" type="submit">Sign In</button>
			</fieldset>
	</form>
	<div style="text-align: center">
		<span>Do not have an account? <a href="<?php echo base_url('user/register')?>">Sign Up</a></span>
	</div>

</div>

<script src="<?php echo base_url('assets/js/bootstrap.js')?>" ></script>
</body>
</html>
