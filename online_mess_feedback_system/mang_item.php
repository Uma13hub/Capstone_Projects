<?php
include "connect.php";
$day=$_POST['day'];
$itemName=$_POST['itemName'];
$itemLink=$_POST['itemLink'];
$rName=$_POST['rName'];
if(!empty($day) and !empty($itemName) and !empty($itemLink)){
    $query1="INSERT INTO timetable(`$day`) VALUES('$itemName')";
    $sql1=mysqli_query($conn, $query1);
    $query2="INSERT INTO image(`$day`) VALUES('$itemLink')";
    $sql2=mysqli_query($conn, $query2);
    $query="ALTER TABLE `feedback` ADD `$itemName` INT(2) NULL AFTER `Curd`";
    $sql=mysqli_query($conn, $query);
    echo "<script>alert('Item added successfully')</script>";
    echo "<script>window.location='mang_item.html';</script>";
}

else if(!empty($day) and !empty($rName)){
    $query2="UPDATE `image` SET `$day`=NULL WHERE `itemNo`=(SELECT `itemNo` FROM `timetable` WHERE `$day`='$rName')";
    $sql2=mysqli_query($conn, $query2);
    $query1="UPDATE `timetable` SET `$day`=NULL WHERE `$day`='$rName'";
    $sql1=mysqli_query($conn, $query1);
    $query="ALTER TABLE `feedback` DROP `$rName`";
    $sql=mysqli_query($conn, $query);
    echo "<script>alert('Item removed successfully')</script>";
    echo "<script>window.location='mang_item.html';</script>";
}
else{
    echo "<script>alert('Provide the details properly')</script>";
    echo "<script>window.location='mang_item.html';</script>";
}

?>
