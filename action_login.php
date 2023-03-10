<?php

session_start();
//include all the required modules
include "db_conn.php";
include "form_valid.php";

if (isset($_POST['uname']) && isset($_POST['psw'])) {
    //Check if username and password is empty
    if (empty($_POST['uname']) && empty($_POST['psw'])) {
        header("location: login.php?uname_error=Username cannot be empty.&pass_error=Password cannot be empty.");
        exit;
    } else {
        //validate the username and password.
        $uname = username_validation(validate($_POST['uname']));

        $pass = password_validation(validate($_POST['psw']));

        //Check if the username or password entered is correct.
        if ($cUname[0] === false) {
            header("Location: login.php?uname_error=".$cUname[1]);
            exit();
        } elseif ($cPass[0] === false) {
            header("Location: login.php?error=".$cPass[1]);
            exit();
        } else {
            //Search table for userdata.
            $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);

                if ($row['user_name'] === $uname && $row['password'] === $pass) {
                    //Create session for the user.
                    echo "Logged in!";

                    $_SESSION['user_name'] = $row['user_name'];

                    $_SESSION['name'] = $row['user_name'];

                    $_SESSION['id'] = $row['id'];

                    header("Location: home.php");
                    mysqli_close($conn);
                    exit();

                } else {

                    header("Location: login.php?uname_error=Username is incorrect.&pass_error=Password is incorrect.");
                    mysqli_close($conn);
                    exit();

                }

            } else {

                header("Location: login.php?uname_error=Username is incorrect.&pass_error=Password is incorrect.");
                mysqli_close($conn);
                exit();

            }

        }
    }



} else {
    mysqli_close($conn);

    header("Location: login.php");

    exit();

}