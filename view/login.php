<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<section class="vh-100">
		<div class="container-fluid h-custom">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-md-9 col-lg-6 col-xl-5">
					<img src="./../imgs/signin.jpg" class="img-fluid" alt="Sample image">
				</div>
				<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
					<form action="./../control/action_login.php" method="post">
						<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
							<p class="lead fw-normal mb-0 me-3">Sign in with</p>
							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fa fa-facebook-f"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fa fa-twitter"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fa fa-google"></i>
							</button>
						</div>

						<div class="divider d-flex align-items-center my-4">
							<p class="text-center fw-bold mx-3 mb-0">Or</p>
						</div>

						<!-- Username input -->
						<div class="form-outline mb-4">
							<label class="form-label" for="uname">Username</label>
							<input type="text" class="form-control form-control-lg" placeholder="Username..." name="uname" />
							<?php if ( isset( $_GET['uname_error'] ) ) { ?>

								<p class="error">
									<?php echo $_GET['uname_error']; ?>
								</p>

							<?php } ?>
						</div>

						<!-- Password input -->
						<div class="form-outline mb-3">
							<label class="form-label" for="psw">Password</label>
							<input type="password" class="form-control form-control-lg" placeholder="Enter password" name="psw" />
							<?php if ( isset( $_GET['pass_error'] ) ) { ?>

								<p class="error">
									<?php echo $_GET['pass_error']; ?>
								</p>

							<?php } ?>
						</div>

						<div class="d-flex justify-content-between align-items-center">
							<!-- Checkbox -->
							<div class="form-check mb-0">
								<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
								<label class="form-check-label" for="form2Example3">
									Remember me
								</label>
							</div>
							<a href="reset_password.php" class="text-body">Forgot password?</a>
						</div>

						<div class="text-center text-lg-start mt-4 pt-2">
							<button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"
								type="submit">Login</button>
							<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
									class="link-danger">Register</a></p>
						</div>

					</form>
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