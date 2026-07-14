<?php
include "connect.php";

$today=date("D");
$str="SELECT `";


$arr = array();
    $que="select `monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`saturday`,`sunday` from `timetable`" ;
    $sql=mysqli_query($conn , $que);
    while($row = mysqli_fetch_array($sql)){
        if($row[0]!=null){
            array_push($arr,$row[0]);
        }
        if($row[1]!=null){
            array_push($arr,$row[1]);
        }
        if($row[2]!=null){
            array_push($arr,$row[2]);
        }
        if($row[3]!=null){
            array_push($arr,$row[3]);
        }
        if($row[4]!=null){
            array_push($arr,$row[4]);
        }
        if($row[5]!=null){
            array_push($arr,$row[5]);
        }
        if($row[6]!=null){
            array_push($arr,$row[6]);
        }
            
    }
    //remove duplicates
    $arr=array_unique($arr);
    //print_r($arr);
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM prevmonthreport WHERE ".$col;
    //echo $query;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
/*
if($today=="Tue"){
    $arr=[];
    $que="SELECT monday FROM timetable WHERE monday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else if($today=="Wed"){
    $arr=[];
    $que="SELECT tuesday FROM timetable WHERE tuesday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else if($today=="Thu"){
    
    $arr=[];
    $que="SELECT wednesday FROM timetable WHERE wednesday IS NOT NULL";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else if($today=="Fri"){
    $arr=[];
    $que="SELECT thursday FROM timetable WHERE thursday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else if($today=="Sat"){
    $arr=[];
    $que="SELECT friday FROM timetable WHERE friday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else if($today=="Sun"){
    $arr=[];
    $que="SELECT saturday FROM timetable WHERE saturday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            array_push($arr,$row[0]);
        }
    }
    print_r ($arr);
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
else{
    $arr=[];
    $que="SELECT sunday FROM timetable WHERE sunday is not null";
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            if($row[0]!=NULL){
                array_push($arr,$row[0]);
            }
        }
    }
    print_r ($arr);
    $sql=mysqli_query($conn, $que);
    if($sql){
        while($row=mysqli_fetch_array($sql)){
            array_push($arr,$row[0]);
        }
    }
    $query=join("`,`",$arr);
    $col="";
    $col.=join(" IS NOT NULL and ",$arr);
    $col.=" IS NOT NULL";
    $query=$str. $query ."` FROM yestreport WHERE ".$col;
    $sqll=mysqli_query($conn,$query);
    
    $data = array();
    while ($row = mysqli_fetch_object($sqll))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
}
*/
?>