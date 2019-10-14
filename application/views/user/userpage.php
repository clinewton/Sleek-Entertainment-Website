<!DOCTYPE html>
<html lang="en">
<head>	
	<title>User Page</title>
	<script src="https://kit.fontawesome.com/13946cb9d3.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<?php include ('application/views/common/user_header.php')?>
	<div class="tabContainer">
		<div class="buttonContainer">
			<button onclick="showPanel(0)">Previous Purchases</button>
			<button onclick="showPanel(1)">Movies</button>
			<button onclick="showPanel(2)">Series</button>
		</div>
		<div class="tabPanel">
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th>Genre</th>
						<th>Date</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Avengers: Endgame</td>
						<td>Action</td>
						<td>Aug 5th 2019</td>
						<td>Ksh 50</td>
					</tr>
					<tr>
						<td>Anabelle</td>
						<td>Horror</td>
						<td>Aug 1st 2019</td>
						<td>Ksh 50</td>
					</tr>
					<tr>
						<td>Brooklyn Nine-Nine</td>
						<td>Comedy</td>
						<td>Jul 8th 2019</td>
						<td>Ksh 100</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tabPanel">
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th>Genre</th>
						<th>Description</th>
						<th>Release Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Avengers: Endgame</td>
						<td>Action</td>
						<td>A Marvel comics movie</td>
						<td>Aug 2019</td>
					</tr>
					<tr>
						<td>Anabelle</td>
						<td>Horror</td>
						<td>Tales of a haunted doll</td>
						<td>jun 2017</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tabPanel">
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th>Genre</th>
						<th>Description</th>
						<th>Seasons</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Brooklyn Nine-Nine</td>
						<td>Comedy</td>
						<td>Making life worth it working in the Brooklyn precint</td>
						<td>7</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<footer class="footer">
		<p>Questions? Call +254-729-374-092</p>
		<div class="footer-cols">
			<ul>
				<header style="font-size: 30px">Social</header>
				<li><a href="facebook.com/SlekEntertainment"><i class="fab fa-facebook-square fa-3x" style="color: white"></i> Facebook</a></li>
				<li><a href="twitter.com/SleekEntertainment"><i class="fab fa-twitter-square fa-3x" style="color: white"></i> Twitter</a></li>
				<li><a href="instagram.com/SleekEntertainment"><i class="fab fa-instagram fa-3x " style="color: white"></i> Instagram</a></li>
			</ul>
			<ul>
				<header style="font-size: 30px">Location</header>
				<li>Lang'ata Road</li>
				<li>T-Mall</li>
				<li>First floor</li>
			</ul>
		</div>
	</footer>

	<script src="../assets/js/main.js"></script>
</body>
</html>
