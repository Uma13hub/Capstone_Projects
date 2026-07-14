<?php
include "connect.php";

$username = $_POST['username'];

$password = $_POST['password'];


  $query1="INSERT INTO account VALUES('$username','$password')";
        $sql1=mysqli_query($conn, $query1);
        echo "<script>alert('Registration successfully')</script>";
        echo "<script>window.location='index.html';</script>";
    ?>
