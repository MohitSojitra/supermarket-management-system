<?php
session_start();

require_once("./config.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$cPassword = $_POST['cPassword'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];




$query = "SELECT * FROM `users` WHERE `userid`='$userid'";

$result = mysqli_query($conn , $query);

if($result)
{
    if(mysqli_num_rows($result) === 0)
    {
        $query =" INSERT INTO `users`(`firstname`, `lastname`, `userid`, `password`, `email`, `mobile`) VALUES ('$firstname' , '$lastname' , '$userid' , '$password' , '$email' , '$mobile')";
        $result = mysqli_query($conn , $query);

        if($result)
        {
            echo "run it fire";
            $_SESSION['signup'] = TRUE;
            header("Location: http://localhost/wt/loginhtml.php"); 
        }
    }
    else{
        echo "alredy exist username";
    }
}



?>