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
				<a class="navbar-brand" href="./index.php">
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
							<a class="nav-link" aria-current="page" href="./index.php">Home</a>
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
						<button class="btn btn-outline-light"><a class="nav-link" href="login.php">Login</a></button>
					</form>

				</div>
			</div>
		</nav>
	</header>

	<main>