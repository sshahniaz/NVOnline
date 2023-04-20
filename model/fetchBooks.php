<?php

//Psudo API for books.

//Chaps and stuff from here Link: https://wecanreaditforyouwholesale.com/2010-and-after/the-three-body-problem-cixin-liu/ [Last Accessed: 20/Apr/2023]
//Rehydrate:https://rehydrate.space/reading-list/ [Last Accessed: 20/Apr/2023]
//Goodreads:https://www.bookstldr.com/book/deaths_end [Last Accessed: 20/Apr/2023]
function getAllBooks() {
	include "db_conn.php";
	$sql = "SELECT * FROM books";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$row = mysqli_fetch_all( $result, MYSQLI_ASSOC );
		mysqli_close( $conn );

		return $row;

	} else {
		echo "Not Found or Failed";
		mysqli_close( $conn );
		exit();
	}
}

function searchBooks( $sBook ) {
	include "db_conn.php";
	$sql = "SELECT * FROM books WHERE title LIKE '%$sBook%'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$row = mysqli_fetch_all( $result, MYSQLI_ASSOC );
		mysqli_close( $conn );

		return $row;

	} else {
		echo "Not Found or Failed";
		mysqli_close( $conn );
		exit();
	}
}

function getBookbyID( $pID ) {
	include "db_conn.php";
	$pID = intval( $pID );
	//echo $pID;
	$sql = "SELECT * FROM books WHERE id = $pID";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$row = mysqli_fetch_all( $result, MYSQLI_ASSOC );
		mysqli_close( $conn );

		return $row;

	} else {
		echo "Not Found or Failed";
		mysqli_close( $conn );
		exit();
	}
}

function getChapsListByID( $pID ) {
	include "db_conn.php";
	$pID = intval( $pID );
	//echo $pID;
	$sql = "SELECT * FROM bookchapters WHERE book_id = $pID";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$row = mysqli_fetch_all( $result, MYSQLI_ASSOC );
		mysqli_close( $conn );

		return $row;

	} else {
		echo "Not Found or Failed";
		mysqli_close( $conn );
		exit();
	}
}

function getContentByIDandChapNum( $pID, $chNum ) {
	include "db_conn.php";
	$pID = intval( $pID );
	//echo $pID;
	$sql = "SELECT * FROM bookchapters WHERE book_id = $pID and chapter_num= $chNum";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$row = mysqli_fetch_all( $result, MYSQLI_ASSOC );
		mysqli_close( $conn );

		return $row;

	} else {
		echo "Not Found or Failed";
		mysqli_close( $conn );
		exit();
	}
}