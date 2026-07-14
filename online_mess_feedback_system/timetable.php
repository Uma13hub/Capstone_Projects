<?php

include "connect.php";

$day = $_GET["day"];

    $arr = array();
    $que="select `$day` from timetable";
    $sql=mysqli_query($conn , $que);
    while($row = mysqli_fetch_array($sql)){
        if($row[0]!=null){
            array_push($arr,$row[0]);
        }
    }

    $data = json_encode($arr);

    echo $data;

?>