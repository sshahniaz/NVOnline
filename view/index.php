<?php
require_once "./../model/fetchBooks.php";

include "./header.inc.php";
?>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
			aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./../imgs/welcome.jpg" alt="">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Welcome</h1>
					<p>Placeholder</p>
					<p><a class="btn btn-lg btn-outline-light" href="register.php">Sign up today</a></p>
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





<!-- START THE FEATURETTES -->



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

<!-- /END THE FEATURETTES -->

<?php
include "./footer.inc.php";

?>