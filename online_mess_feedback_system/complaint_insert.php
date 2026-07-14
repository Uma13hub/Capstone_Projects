<?php
$name = filter_input(INPUT_POST, 'name');
$id = filter_input(INPUT_POST, 'id');
$date= filter_input(INPUT_POST, 'date');
$complaint = filter_input(INPUT_POST, 'complaint');
if(!empty($name) && !empty($id) && !empty($date) && !empty($complaint)){
    include "connect.php";

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO complaints (stdname, stdid, date,comp) VALUES ('$name', '$id', '$date','$complaint')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Complaint raised successfully')</script>";
    echo "<script>window.location='complaint.html';</script>";
  } 

  mysqli_close($conn);
}
else{
  echo "<script>alert('Enter all details properly')</script>";
	echo "<script>window.location='complaint.html';</script>";
}
?>