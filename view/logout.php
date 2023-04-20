<?php 

include "./../model/db_conn.php";

session_start();

mysqli_close($conn);
echo("database connection close");

session_unset();

session_destroy();

header("Location: index.php");

?>