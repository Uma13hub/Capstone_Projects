
<?php
include "connect.php";
session_start();
$monday=array('Idli','Rice','Thotakurapappu','AluFry','Rasam','TomatoChutney','VankayabattaniCurry','Sambar','Curd','timeliness','quality','quantity','neatness','behaviour');
    $tuesday=array('EggRice','Rice','TomatoPappu','DondakayaFry','Rasam','GongureChutney','Ravvakesari','AluDumFry','Sambar','Curd','timeliness','quality','quantity','neatness','behaviour');
    $wednesday=array('Vada','Rice','PalakuraPappu','Rasam','Pickle','VegPalav','CapiscumPanner','ChickenCurry','Curd','timeliness','quality','quantity','neatness','behaviour');
    $thursday=array('Upma','Rice','SorakayapesaraPappu','VankayaChutney','GoruchukuduFry','Rasam','Laddu','Sambar','Curd','timeliness','quality','quantity','neatness','behaviour');
    $friday=array('Idli','Rice','PalakDal','MixedVegetable','Rasam','KandhiPacchadhi','EggCurry','CarrotFry','Curd','timeliness','quality','quantity','neatness','behaviour');
    $saturday=array('Chapathi','Rice','DosakayaPappu','BeansCurry','Rasam','DondakayaChutney','ChakkaraPongali','LemonRice','Curd','timeliness','quality','quantity','neatness','behaviour');
    $sunday=array('Uthappam','Rice','PannerButterMasala','VegPalav','ChickenCurry','Rasam','DosakayaChutney','Sambar','Curd','timeliness','quality','quantity','neatness','behaviour');

    $today=date("D");
    
    
    

    if($today=="Mon"){
        $Idli=$_POST['Idli'];
        $Rice=$_POST['Rice'];
        $Thotakurapappu=$_POST['Thotakurapappu'];
        $AluFry=$_POST['Alu Fry'];
        $Rasam=$_POST['Rasam'];
        $TomatoChutney=$_POST['Tomato Chutney'];
        $VankayabattaniCurry=$_POST['Vankayabattani Curry'];
        $Sambar=$_POST['Sambar'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Idli`,`Rice`,`Thotakurapappu`,`Alu Fry`,`Rasam`,`Tomato Chutney`,`Vankayabattani Curry`,`Sambar`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Idli','$Rice','$Thotakurapappu','$AluFry','$Rasam','$TomatoChutney','$VankayabattaniCurry','$Sambar','$Curd')";
    }
    else if($today=="Tue"){
        
        $query="INSERT INTO feedback(`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`EggRice`,`Rice`,`TomatoPappu`,`DondakayaFry`,`Rasam`,`GongureChutney`,`Ravvakesari`,`AluDumFry`,`Sambar`,`Curd`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        echo $query;
        if($stmt=$conn->prepare($query)){
            $stmt->bind_param('sssssssssssssss',$_POST['timeliness'] ,$_POST['quality'] ,$_POST['quantity'] ,$_POST['neatness'] ,$_POST['behaviour'] ,$_POST['EggRice'] ,$_POST['Rice'] ,$_POST['TomatoPappu'] ,$_POST['DondakayaFry'] ,$_POST['Rasam'] ,$_POST['GongureChutney'] ,$_POST['Ravvakesari'] ,$_POST['AluDumFry'] ,$_POST['Sambar'] ,$_POST['Curd']);
            if($stmt->execute()){
                echo "success";
            }
        }
    }/*
    else if($today=="Wed"){
        $Vada=$_POST['Vada'];
        $Rice=$_POST['Rice'];
        $PalakuraPappu=$_POST['Palakura Pappu'];
        $Rasam=$_POST['Rasam'];
        $DondakayaFry=$_POST['Pickle'];
        $VegPalav=$_POST['VegPalav'];
        $CapiscumPanner=$_POST['Capiscum Panner'];
        $ChickenCurry=$_POST['Chicken Curry'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`studentid`,`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Vada`,`Rice`,`Palakura Pappu`,`Rasam`,`Pickle`,`VegPalav`,`Capiscum Panner`,`Chicken Curry`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Vada','$Rice','$PalakuraPappu','$Rasam','$Pickle','$VegPalav','$CapiscumPanner','$ChickenCurry','$Curd')";
    }
    else if($today=="Thu"){
        $Upma=$_POST['Upma'];
        $Rice=$_POST['Rice'];
        $SorakayapesaraPappu=$_POST['Sorakayapesara Pappu'];
        $VankayaChutney=$_POST['Vankaya Chutney'];
        $Rasam=$_POST['Rasam'];
        $GoruchukuduFry=$_POST['Goruchukudu Fry'];
        $Laddu=$_POST['Laddu'];
        $Sambar=$_POST['Sambar'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`studentid`,`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Upma`,`Rice`,`Sorakayapesara Pappu`,`Vankaya Chutney`,`Goruchukudu Fry`,`Rasam`,`Laddu`,`Sambar`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Upma','$Rice','$SorakayapesaraPappu','$VankayaChutney','$GoruchukuduFry','$Rasam','$Laddu','$Sambar','$Curd')";
    }
    else if($today=="Fri"){
        $Idli=$_POST['Idli'];
        $Rice=$_POST['Rice'];
        $PalakDal=$_POST['Palak Dal'];
        $MixedVegetable=$_POST['Mixed Vegetable'];
        $Rasam=$_POST['Rasam'];
        $KandhiPacchadhi=$_POST['Kandhi Pacchadhi'];
        $EggCurry=$_POST['Egg Curry'];
        $CarrotFry=$_POST['Carrot Fry'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`studentid`,`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Idli`,`Rice`,`Palak Dal`,`Mixed Vegetable`,`Rasam`,`Kandhi Pacchadhi`,`Egg Curry`,`Carrot Fry`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Idli','$Rice','$PalakDal','$MixedVegetable','$Rasam','$KandhiPacchadhi','$EggCurry','$CarrotFry','$Curd')";
    }
    else if($today=="Sat"){
        $Upma=$_POST['Chapathi'];
        $Rice=$_POST['Rice'];
        $SDosakayaPappu=$_POST['Dosakaya Pappu'];
        $BeansCurry=$_POST['Beans Curry'];
        $Rasam=$_POST['Rasam'];
        $DondakayaChutney=$_POST['Dondakaya Chutney'];
        $ChakkaraPongali=$_POST['Chakkara Pongali'];
        $LemonRice=$_POST['Lemon Rice'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`studentid`,`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Chapathi`,`Rice`,`Dosakaya Pappu`,`Beans Curry`,`Rasam`,`Dondakaya Chutney`,`Chakkara Pongali`,`Lemon Rice`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Chapathi','$Rice','$DosakayaPappu','$BeansCurry','$Rasam','$DondakayaChutney','$ChakkaraPongali','$LemonRice','$Curd')";
    }
    else{
        $Upma=$_POST['Uthappam'];
        $Rice=$_POST['Rice'];
        $PannerButterMasala=$_POST['Panner ButterMasala'];
        $VegPalav=$_POST['VegPalav'];
        $ChickenCurry=$_POST['Chicken Curry'];
        $GoruchukuduFry=$_POST['Dosakaya Chutney'];
        $Rasam=$_POST['Rasam'];
        $Sambar=$_POST['Sambar'];
        $Curd=$_POST['Curd'];
        $query="INSERT INTO feedback(`studentid`,`timeliness`,`quality`,`quantity`,`neatness`,`behaviour`,`Uthappam`,`Rice`,`Panner ButterMasala`,`VegPalav`,`Chicken Curry`,`Rasam`,`Dosakaya Chutney`,`Sambar`,`Curd`) VALUES('$studentid','$timeliness','$quality','$quantity','$neatness','$behaviour','$Uthappam','$Rice','$PannerButterMasala','$VegPalav','$ChickenCurry','$Rasam','$DosakayaChutney','$Sambar','$Curd')";
    }
    $sql=mysqli_query($conn,$query);
    if($sql) {
        echo '<script>alert("Feedback Submitted Successfully")</script>';
        echo "<script>window.location='./feedback.html';</script>";
    }*/

?>


