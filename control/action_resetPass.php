<?php 

include "./../model/db_conn.php";
include "form_valid.php";
include "./../model/pass_reset.php";

if (isset($_POST['email']) && isset($_POST['psw'])) {
    //Check if username and password is empty
    if (empty($_POST['email']) && empty($_POST['psw'])) {
        header("location: ../view/reset_password.php?uname_error=Username cannot be empty.&pass_error=Password cannot be empty.");
        exit;
    }else{
        $email = email_validation(validate($_POST['email']));

        $pass = password_validation(validate($_POST['psw']));

        $res = resetPassword($email,$pass);

        if($res === true){
            header("location: ./../view/index.php");
        }
    }

}

?>
