<?php

session_start();
//Load all the required functions.

//Database connection
include "./../model/db_conn.php";
//Functions for validation
include "form_valid.php";

if ( isset( $_POST['uname'] ) && isset( $_POST['psw'] ) && isset( $_POST['email'] ) ) {

	if ( ( empty( $_POST['uname'] ) && empty( $_POST['psw'] ) && empty( $_POST['email'] ) ) ) {

		header( "location: register.php?uname_error= Username cannot be empty.&pass_error= Password cannot be empty.&email_error=Email cannot be empty." );

		exit();

	} else {
		//Validate all the entered credentials.
		$cUname = username_validation( validate( $_POST['uname'] ) );

		$cPass = password_validation( validate( $_POST['psw'] ) );

		$cEmail = email_validation( validate( $_POST['email'] ) );

		//Checking if they are not empty or if they have an error based on REGEX(check form_valid.php for more info).





		if ( $cUname[0] === false ) {
			header( "Location: register.php?uname_error=" . $cUname[1] . "." );
			exit();
		} elseif ( $cPass[0] === false ) {
			header( "Location: register.php?pass_error=" . $cPass[1] . "." );
			exit();
		} elseif ( $cEmail[0] === false ) {
			header( "Location: register.php?email_error=" . $cEmail[1] . "." );
			exit();
		} else {
			//Heshing password
			$heshPwd = password_hash( $cPass, PASSWORD_DEFAULT );
			//Check if user already exists.
			$user_check = "SELECT * FROM users WHERE user_name='$cUname' OR email = '$cEmail'";

			$user_check_res = mysqli_query( $conn, $user_check );

			if ( mysqli_num_rows( $user_check_res ) === 1 ) {

				$row = mysqli_fetch_assoc( $user_check_res );

				if ( $row['user_name'] === $cUname && $row['email'] === $cEmail ) {

					header( "Location: ./../view/register.php?error=User already exists." );
					mysqli_close( $conn );
					exit();
				}
			} else {
				//Insert data into the table and create a new user.
				$sql = "INSERT INTO `users` (`id`, `user_name`, `password`, `email`) VALUES (NULL, '$cUname', '$heshPwd', '$cEmail')";

				//mysqli_query($conn, $sql);

				if ( mysqli_query( $conn, $sql ) ) {
					echo "New record created successfully";
					//header("Location: home.php");
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
					//header("Location: index.php?error=Incorect User name or password");
				}

				//Redirect to home and login as the registered user.
				$sql = "SELECT * FROM users WHERE user_name='$cUname' AND password='$cPass'";
				$result = mysqli_query( $conn, $sql );

				if ( mysqli_num_rows( $result ) === 1 ) {

					$row = mysqli_fetch_assoc( $result );

					if ( $row['user_name'] === $cUname && $row['password'] === $cPass ) {
						//Create session
						echo "Logged in!";

						$_SESSION['user_name'] = $row['user_name'];

						$_SESSION['name'] = $row['user_name'];

						$_SESSION['id'] = $row['id'];

						header( "Location: ./../view/home.php" );
						mysqli_close( $conn );
						exit();

					} else {

						header( "Location: ./../view/register.php?error=Incorect User name or password" );
						mysqli_close( $conn );
						exit();

					}

				} else {

					header( "Location: ./../view/register.php?error=Incorect User name or password" );
					mysqli_close( $conn );
					exit();

				}

			}


		}
	}



} else {
	//
	mysqli_close( $conn );
	header( "Location: ./../view/register.php" );

	exit();

}