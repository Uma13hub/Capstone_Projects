<?php
include "connect.php";
session_start();
   
    $check= "SELECT * FROM feedback WHERE studentid='" .$_SESSION['student']. "'" ;
    $sqlcheck=mysqli_query($conn,$check);
    $count=0;
    while ($row = mysqli_fetch_row($sqlcheck)) {
        $count++;
     }
    if($count==1) {
        echo '<script>alert("You\'ve already submitted the feedback successfully")</script>';
        echo "<script>window.location='./feedback.html';</script>";
    }
    else{
        $today=date("D");
        $str="INSERT INTO feedback(`";

        if($today=="Mon"){
            $arr=['studentid'];
            $que="SELECT monday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($arr,$row[0]);
                    }
                }
            }
       
            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT monday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                        array_push($array,$_POST[$row[0]]);
                    }
                }
            }
            print_r($array);
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else if($today=="Tue"){
            $arr=['studentid'];
            $que="SELECT tuesday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($arr,$row[0]);
                    }
                }
            }
      

            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
           
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));

            $array=array($_SESSION['student']);
            $q="SELECT tuesday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($array,$_POST[$row[0]]);
                    }
                }
            }
       
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);
            
            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else if($today=="Wed"){
            $arr=['studentid'];
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
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT wednesday FROM timetable WHERE wednesday IS NOT NULL";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=NULL){
                        array_push($array,$_POST[$row[0]]);
                    }
                }
            }
          
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else if($today=="Thu"){
            $arr=['studentid'];
            $que="SELECT thursday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                        array_push($arr,$row[0]);
                    }
                    
                }
            }
           
            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT thursday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                        array_push($array,$_POST[$row[0]]);
                    }
                }
            }
        
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else if($today=="Fri"){
            $arr=['studentid'];
            $que="SELECT friday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                        array_push($arr,$row[0]);
                    }
                }
            }
           
            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT friday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                        array_push($array,$_POST[$row[0]]);
                    }
                }
            }
       
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else if($today=="Sat"){
            $arr=['studentid'];
            $que="SELECT saturday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($arr,$row[0]);
                    }
                }
            }
         
            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT saturday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($array,$_POST[$row[0]]);
                    }
                }
            }
      
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
        else{
            $arr=['studentid'];
            $que="SELECT sunday FROM timetable";
            $sql=mysqli_query($conn, $que);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($arr,$row[0]);
                    }
                }
            }
       
            $query=join("`,`",$arr);
            $query=$str. $query ."`) VALUES (";
            $b=str_repeat("?,",count($arr)-1);
            $b.="?)";
            $query.=$b;
            $str=str_repeat("s",count($arr));
            $array=array($_SESSION['student']);
            $q="SELECT sunday FROM timetable";
            $sql=mysqli_query($conn, $q);
            if($sql){
                while($row=mysqli_fetch_array($sql)){
                    if($row[0]!=null){
                    array_push($array,$_POST[$row[0]]);
                    }
                }
            }
   
            $stmt=$conn->prepare($query);
            $stmt->bind_param($str, ...$array);

            if($stmt->execute()){
                echo '<script>alert("Feedback Submitted Successfully")</script>';
                echo "<script>window.location='./feedback.html';</script>";
            }
        }
    }
    


