<?php



function resetPassword($email, $pass)
{

    include "db_conn.php";

    $sql = "UPDATE users SET password = '$pass' WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if ($result === true) {

        return true;
    } else {
        return false;
    }
}

?>