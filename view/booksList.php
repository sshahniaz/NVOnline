<?php
require_once "./../model/fetchBooks.php";
include "./header.inc.php";

if ( isset( $_GET['pId'] ) ) {

	//echo $_GET['pId'];
	$row = getBookbyID( $_GET['pId'] );
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




	<?php
}
include "./footer.inc.php";
?>