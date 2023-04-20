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

					<?php echo ' <img src="./../' . $r['image_link'] . '" class="img500" alt="">' ?>


				</div>
			</div>
		</div><!-- /.container -->

		<?php
	}
}
?>
<hr class="featurette-divider">

<div class="wrapper">
	<h2 class="featurette-heading fw-normal lh-1">Chapter List</h2>
	<table class="table table-hover table-responsive">
		<thead>
			<tr>
				<th scope="col">Chapter Number</th>
				<th scope="col">Title</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//Get Chapter list with bookID 
			
			$chapList = getChapsListByID( $_GET['pId'] );
			//var_dump( $chapList );
			foreach ( $chapList as $rws ) {

				?>
				<tr>
					<td>
						<?php echo $rws['chapter_num']; ?>
					</td>
					<td>
						<?php echo '<a href="./bookReader.php?book_id=' . $_GET['pId'] . '&chap_num=' . $rws['chapter_num'] . '">'; ?>
						<?php echo $rws['chapter_title']; ?>
						</a>
					</td>
				</tr>

				<?php
			}
			?>
		</tbody>

	</table>


</div>

<hr class="featurette-divider">


<?php

include "./footer.inc.php";

?>