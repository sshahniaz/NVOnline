<?php

session_start();
//include all the required modules
include "./../model/db_conn.php";
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
        if ($uname[0] === false) {
            header("Location: login.php?uname_error=".$uname[1]);
            exit();
        } elseif ($pass[0] === false) {
            header("Location: login.php?error=".$pass[1]);
            exit();
        } else {
            //Search table for userdata.
            include "./../model/fetch_login.php";
                

            

        }
    }



} else {
    mysqli_close($conn);

    header("Location: login.php");

    exit();

}