<?php

include 'connect.php';

$day = $_GET["day"];

$sql = "SELECT `timetable`.`$day`, `image`.`$day` from timetable JOIN image on timetable.itemNo=image.itemNo";

$res = mysqli_query($conn,$sql);

$arr = [];
while($row = mysqli_fetch_array($res)){
    array_push($arr,array($row[0],$row[1]));
}

$data = json_encode($arr);

echo $data;

?>