<?php
include "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];

    $query="SELECT * FROM `account` WHERE `username` = '$username'and `password`='$password' ";
    $result = mysqli_query($conn,$query);
    $check=0;
    while ($row = mysqli_fetch_row($result)) {
        $check++;
    }
    if($check==1){   
        session_start();
        $_SESSION['student']=$username;
        header('location:home.html');
    }
    else{
        echo "<script>alert('Login Failed.Enter Correct Details')</script>";
        echo "<script>window.location='./index.html';</script>";
    }
    ?>

