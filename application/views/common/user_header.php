<header>
	<div class="header-title">
		<h1>SLEEK ENTERTAINMENT MEDIA</h1><br>
		<h3>Welcome <?php $user = $this->session->userdata('username'); echo ucfirst($user); ?> !</h3>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<button class="navbar-toggler" aria-expanded="false" aria-controls="navbarColor01" aria-label="Toggle navigation" type="button">
			<span onclick="openNav()">&#9776;</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="" data-toggle="collapse" data-target="#genre">Genre</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Movies</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Series</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="" data-toggle="dropdown"><i class="fas fa-user-circle fa-2x"></i></a>
			<div class="dropdown-menu" style="right: 0px; top: 0px; position: absolute; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start">
				<a class="dropdown-item" href="#">Profile</a>
				<a class="dropdown-item" href="#">Userpage</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="" data-toggle="modal" data-target="#signoutModal">Sign Out</a>
			</div>
		</li>
	</nav>
	<div id="genre" class="collapse">
		<div class="genre-content">
			<ul>
				<li><a href="">Action</a></li>
				<li><a href="">Adventure</a></li>
				<li><a href="">Animation</a></li>
				<li><a href="">Comedy</a></li>
				<li><a href="">Crime</a></li>
			</ul>
			<ul>
				<li><a href="">Documentary</a></li>
				<li><a href="">Drama</a></li>
				<li><a href="">Family</a></li>
				<li><a href="">Horror</a></li>
				<li><a href="">Kids</a></li>
			</ul>
			<ul>
				<li><a href="">Musical</a></li>
				<li><a href="">Reality</a></li>
				<li><a href="">Romance</a></li>
				<li><a href="">Science Fiction</a></li>
				<li><a href="">Thriller</a></li>
			</ul>
		</div>
	</div>
</header>
