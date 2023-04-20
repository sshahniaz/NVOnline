<?php

include "./../model/fetchBooks.php";
if ( isset( $_POST['search'] ) ) {

	$search = htmlspecialchars( $_POST['search'] );
	$result = searchBooks( $search );
	//echo $result[0]['id'];
	//var_dump( $result );
	header( "Location: ./../view/booksList.php?pId=" . $result[0]['id'] );



} else {
	echo "INvalid";
	header( "Location: ./../view/index.php?error='invalid search!'" );
}