<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="register-style.css">
	<!-- <script type="module" src="./js/form_valid.js" async></script> -->
</head>

<body>


	<section class="vh-80" style="background-color: #eee;">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-lg-12 col-xl-11">
					<div class="card text-black" style="border-radius: 25px;">
						<div class="card-body p-md-5">
							<div class="row justify-content-center">
								<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

									<form class="mx-1 mx-md-4" action="./../control/action_register.php" method="post">

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fa fa-user fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="uname">Your Username</label>
												<input type="text" id="uname" class="form-control" name="uname" />
												<?php if ( isset( $_GET['uname_error'] ) ) { ?>

													<p class="error">
														<?php echo $_GET['uname_error']; ?>
													</p>

												<?php } ?>
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="email">Your Email</label>
												<input type="email" id="psw" class="form-control" name="email" />
												<?php if ( isset( $_GET['email_error'] ) ) { ?>

													<p class="error">
														<?php echo $_GET['email_error']; ?>
													</p>

												<?php } ?>
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fa fa-lock fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="psw">Password</label>
												<input type="password" id="psw" class="form-control" name="psw" />
												<?php if ( isset( $_GET['pass_error'] ) ) { ?>

													<p class="error">
														<?php echo $_GET['pass_error']; ?>
													</p>

												<?php } ?>
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fa fa-key fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<label class="form-label" for="psw-repeat">Repeat your password</label>
												<input type="password" id="psw-repeat" class="form-control"
													name="psw-repear" />
											</div>
										</div>

										<div class="form-check d-flex justify-content-center mb-5">
											<label class="form-check-label" for="form2Example3">
												<input class="form-check-input me-2" type="checkbox" value=""
													id="form2Example3c" />
												I agree all statements in <a href="#!">Terms of service</a>
											</label>
										</div>

										<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
											<button type="submit" class="btn btn-primary btn-lg">Register</button>
										</div>

									</form>

								</div>
								<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

									<img src="./../imgs/3bodyart.webp" class="img-fluid" alt="Sample image">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer class="container">
		<p class="float-end"><a href="#">Back to top</a></p>
		<p>&copy; 2023 NVOnline.. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</footer>
	</main>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>