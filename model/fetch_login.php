<?php


$sql = "SELECT * FROM users WHERE user_name='$uname'";

$result = mysqli_query( $conn, $sql );

if ( mysqli_num_rows( $result ) > 0 ) {

	while ( $row = mysqli_fetch_assoc( $result ) ) {

		//Deheshing and verifying if password is valid using functio below.
		if ( password_verify( $pass, $row['password'] ) ) {
			//Create session for the user.
			echo "Logged in!";

			$_SESSION['user_name'] = $row['user_name'];

			$_SESSION['name'] = $row['user_name'];

			$_SESSION['id'] = $row['id'];

			header( "Location: ./../view/home.php" );
			mysqli_close( $conn );
			exit();

		} else {

			header( "Location: ./../view/login.php?uname_error=Username is incorrect.&pass_error=Password is incorrect." );
			mysqli_close( $conn );
			exit();

		}

	}

	// 

} else {

	header( "Location: login.php?uname_error=Username is incorrect.&pass_error=Password is incorrect." );
	mysqli_close( $conn );
	exit();

}


?>