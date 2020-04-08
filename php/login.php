<?php
session_start();

require_once("./config.php");

$userid = $_POST['userid'];
$password = $_POST['password'];





$query = "SELECT * FROM `users` WHERE `userid`='$userid' && `password`='$password'";

$result = mysqli_query($conn , $query);

if($result)
{
    if(mysqli_num_rows($result) != 0)
    {
        header("Location: http://localhost/wt/index.php"); 
    }
    else{
        $_SESSION['signup'] = FALSE;
        header("Location: http://localhost/wt/loginhtml.php"); 
    }
}



?>