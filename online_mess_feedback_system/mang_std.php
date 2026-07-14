<?php
include "connect.php";
$day=$_POST['day'];
$stdid=$_POST['stdId'];
$stdpass=$_POST['stdPass'];
$rmstd=$_POST['rStdId'];
if(!empty($stdid) and !empty($stdpass)){
    $que="SELECT * FROM `account` WHERE `username` = '$stdid' ";
    $result = mysqli_query($conn,$que);
    $check=0;
    while ($row = mysqli_fetch_row($result)) {
        $check++;
    }
    if($check==1){   
        echo "<script>alert('Student already exists!')</script>";
        echo "<script>window.location='mang_std.html';</script>";
    }
    else{
        $query1="INSERT INTO account(username,password) VALUES('$stdid','$stdpass')";
        $sql1=mysqli_query($conn, $query1);
        echo "<script>alert('Student added successfully')</script>";
        echo "<script>window.location='mang_std.html';</script>";
    }
}

else if(!empty($rmstd)){
    $query2="DELETE FROM account WHERE username='$rmstd'";
    $sql2=mysqli_query($conn, $query2);
    echo "<script>alert('Student removed successfully')</script>";
    echo "<script>window.location='mang_item.html';</script>";
}
else{
    echo "<script>alert('Provide the details properly')</script>";
    echo "<script>window.location='mang_std.html';</script>";
}

?>
