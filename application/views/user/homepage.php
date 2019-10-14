<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>

	<script src="https://kit.fontawesome.com/13946cb9d3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
<?php include ('application/views/common/user_header.php')?>
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="">About</a>
	<a href="">Services</a>
	<a href="">Clients</a>
	<a href="">Contact</a>
</div>
<section class="movie">
<div class="container">
	<div class="wrap-item">
		<div class="mv-group">
			<?php
			$query = $this->db->query("SELECT * FROM movie ORDER BY upload_date DESC LIMIT 10");
			foreach ($query->result_array() as $row) {
				echo '
				<div class="mv-item">
				<div class="mv-item-inner">
					<a href="">
						<div class="mv-item-img">
							<img src="'. base_url("assets/movie-images/".$row['photo'] . "") .'">
						</div>
					</a>
				</div>
				<div class="mv-item-info">
					<a href=""> ' . $row['title'] . '</a>
				</div>
			</div>
				';
			}
			?>

		</div>
	</div>
</div>
</section>
<?php include ('application/views/common/user_footer.php')?>
</body>
</html>
