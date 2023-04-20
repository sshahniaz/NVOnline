<?php
require_once "./../model/fetchBooks.php";

include "./header.inc.php";


if ( isset( $_GET['book_id'] ) && isset( $_GET['chap_num'] ) ) {
	$result = getContentByIDandChapNum( $_GET['book_id'], $_GET['chap_num'] );

	$chapNum = $result[0]['chapter_num'];
	$prev = ( $chapNum - 1 );
	$next = ( $chapNum + 1 );
	?>
	<div class="bookNav">
		<div class="wrapper">
			<div class="container container-fluid">
				<div class="row">
					<!-- <div class="chapNavButtons"> -->
					<div class="col">
						<button class="btn btn-outline-light">
							<?php echo '<a class="nav-link" href="./bookReader.php?book_id=' . $_GET['book_id'] . '&chap_num=' . $prev . '">'; ?>Previous
							<?php echo "</a>"; ?>
						</button>
					</div>

					<div class="col">

						<div class="chapTitle">
							<?php echo $result[0]['chapter_title']; ?>
						</div>
					</div>
					<div class="col">

						<button class="btn btn-outline-light">
							<?php echo '<a class="nav-link" href="./bookReader.php?book_id=' . $_GET['book_id'] . '&chap_num=' . $next . '">'; ?>Next
							<?php echo "</a>"; ?>
						</button>
					</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>


	<!-- <hr class="featurette-divider"> -->
	<div class="wrapper">

		<section class="readerView">
			<?php //var_dump( $result ); ?>
			<?php echo nl2br( $result[0]['chapter_content'] ); ?>
		</section>
	</div>
	<hr class="featurette-divider">
	<?php
}
include "./footer.inc.php";

?>