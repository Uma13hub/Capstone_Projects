<?php

include "connect.php";

    $arr = array();
    $que="select `monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`saturday`,`sunday` from `timetable`" ;
    $sql=mysqli_query($conn , $que);
    while($row = mysqli_fetch_array($sql)){
        array_push($arr,$row[0]);
        array_push($arr,$row[1]);
        array_push($arr,$row[2]);
        array_push($arr,$row[3]);
        array_push($arr,$row[4]);
        array_push($arr,$row[5]);
        array_push($arr,$row[6]);
    }
    $data = json_encode($arr); 

    echo $data;

?>