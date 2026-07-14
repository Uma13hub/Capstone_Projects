
<?php
include "connect.php";
    $today=date("D");
    echo "$today\n";
    // $monday=array("Idli","Rice","Thotakurapappu","AluFry","Rasam","TomatoChutney","VankayabattaniCurry","Sambar","Curd");
    // $tuesday=array("EggRice","Rice","TomatoPappu","DondakayaFry","Rasam","GongureChutney","Ravvakesari","AluDumFry","Sambar","Curd");
    // $wednesday=array("Vada","Rice","PalakuraPappu","Rasam","Pickle","VegPalav","CapiscumPanner","ChickenCurry","Curd");
    // $thursday=array("Upma","Rice","SorakayapesaraPappu","Vankaya Chutney","GoruchukuduFry","Rasam","Laddu","Sambar","Curd");
    // $friday=array("Idli","Rice","PalakDal","MixedVegetable","Rasam","KandhiPacchadhi","EggCurry","CarrotFry","Curd");
    // $saturday=array("Chapathi","Rice","DosakayaPappu","BeansCurry","Rasam","DondakayaChutney","ChakkaraPongali","LemonRice","Curd");
    // $sunday=array("Uthappam","Rice","PannerButterMasala","VegPalav","ChickenCurry","Rasam","DosakayaChutney","Sambar","Curd");



    $str="INSERT INTO feedback(`";
    if($today=="Mon"){
        echo $monday;
    }
    else if($today=="Tue"){
        $arr=[];
        $c=0;
        $que="SELECT tuesday FROM timetable";
        $sql=mysqli_query($conn, $que);
        if($sql){
            while($row=mysqli_fetch_array($sql)){
                array_push($arr,$row[0]);
            }
        }
        print_r ($arr);

        // $query=join("`,`",$arr);
        // $query=$str. $query ."`) VALUES (";
        // $b=str_repeat("?,",count($arr)-1);
        // $b.="?)";
        // $query.=$b;
        // $str=str_repeat("s",count($arr));
        // for($i=0; $i<count($arr); $i++){
        //     $array[$arr[$i]]=$_POST[$arr[$i]];
        // }
        
        // foreach($array as $key => &$val){

        // }
    }
    else if($today=="Wed"){
        $arr=$wednesday;
    }
    else if($today=="Thu"){
        //$query="INSERT INTO feedback($thursday[0],$thursday[1],$thursday[2],$thursday[3],$thursday[4],$thursday[5],$thursday[6],$thursday[7],$thursday[8]) VALUES( $_POST['$thursday[0]'],$_POST['$thursday[1]'],$_POST['$thursday[2]'],$_POST['$thursday[3]'],$_POST['$thursday[4]'],$_POST['$thursday[5]'],$_POST['$thursday[6]'],$_POST['$thursday[7]'],$_POST['$thursday[8]'])";
    }
    else if($today=="Fri"){
        $arr=$friday;
    }
    else if($today=="Sat"){
        $arr=$saturday;
    }
    else{
        $arr=$sunday;
    }
    //$sql=mysqli_query($conn,$query);
    /*if($sql) {
        echo '<script>alert("Feedback Submitted Successfully")</script>';
        echo "<script>window.location='./feedback.html';</script>";
    }else{
        echo '<script>alert("Registration Failed try again")</script>';
        echo "<script>window.location='./feedback.html';</script>";
    }*/
?>