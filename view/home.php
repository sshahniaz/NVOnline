<?php

session_start();

if ( isset( $_SESSION['id'] ) && isset( $_SESSION['user_name'] ) ) {
	include "./../model/fetchBooks.php";
	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NVOnline</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


		<!-- Favicons -->
		<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
		<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
		<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
		<meta name="theme-color" content="#712cf9">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="main-style.css">
		<link href="carousel.css" rel="stylesheet">
	</head>

	<body>


		<header>
			<nav class="navbar navbar-expand-md fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="./../imgs/Nvonline.svg" style="width:5rem" alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
						aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="" role="button"><i class="fa fa-bars" aria-hidden="true"
								style="color:#e6e6ff"></i></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Library</a>
							</li>
							<li class="nav-item">
								<a class="nav-link">Request</a>
							</li>
						</ul>
						<form class="d-flex" role="search" action="./../control/action_search.php" method="POST">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
								name="search">
							<input class="btn btn-outline-light me-1" type="submit" value="Submit">
							<button class="btn btn-outline-light"><a class="nav-link" href="logout.php">Logout</a></button>
						</form>

					</div>
				</div>
			</nav>
		</header>

		<main>

			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
						aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="./../imgs/welcome.jpg" alt="">
						<div class="container">
							<div class="carousel-caption text-start">
								<h1>Welcome,
									<?php echo $_SESSION['name']; ?>
								</h1>
								<p>Placeholder</p>
								<!-- <p><a class="btn btn-lg btn-outline-light" href="register.php">Sign up today</a></p> -->
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="./../imgs/scp.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<h1>SCP Foundation</h1>
								<p>Some representative placeholder content for the second slide of the carousel.</p>
								<p><a class="btn btn-lg btn-outline-light" href="#">Read</a></p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="./../imgs/3bodyart.webp" alt="">
						<div class="container">
							<div class="carousel-caption text-end">
								<h1>The Three Body Problem</h1>
								<p>Some representative placeholder content for the third slide of this carousel.</p>
								<p><a class="btn btn-lg btn-outline-light" href="./bookDetails.php?pId=1">Read</a></p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>


			<!-- BOOKS CONTENT -->
			<!-- Wrap the rest of the page in another container to center all the content. -->


			<?php
			//Fetching data from DB;
			$row = getAllBooks();
			//var_dump( $row );
		
			foreach ( $row as $r ) {


				?>
				<hr class="featurette-divider">
				<div class="wrapper">

					<div class="row featurette">

						<div class="col-md-7">

							<h2 class="featurette-heading fw-normal lh-1">
								<?php echo $r['title']; ?>
							</h2>
							<p class="lead">
								<?php echo $r['book_desc']; ?>
							</p>
						</div>
						<div class="col-md-5">
							<?php echo '<a href="./bookDetails.php?pId=' . $r['id'] . '">' ?>

							<?php echo ' <img src="./../' . $r['image_link'] . '" class="img500" alt="">' ?>


							</a>
						</div>
					</div>
				</div><!-- /.container -->

				<?php
			}
			?>
			<hr class="featurette-divider">






			<!-- FOOTER -->
			<footer class="container">
				<p class="float-end"><a href="#">Back to top</a></p>
				<p>&copy; "2023 NVOnline.". &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</footer>
		</main>



		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
			crossorigin="anonymous"></script>
	</body>

	</html>

	<?php


} else {
	include "./logout.php";
	header( "Location: index.php" );

	exit();

}
?>
<!-- <body>

 <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

 <a href="logout.php">Logout</a>

</body>

</html> -->