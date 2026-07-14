<?php
//include("connection.php");//
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "university";
// Create connection
$conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $query="SELECT * FROM account WHERE username = '$username'and password='$password' ";
    $result = mysqli_query($conn,$query);
    $check=0;
    while ($row = mysqli_fetch_row($result)) {
        $check++;
     }
   
    if($check>0){
        /*echo "login Successfully<br>";
        echo "welcome : $username <br>";*/
        session_start();
        $_SESSION['student']=$username;
        header('location:yestreport.php');
    }
    else{
        echo "<script>alert('Login Failed.Enter Correct Details')</script>";
        echo "<script>window.location='./index.html';</script>";
    }
    ?>

