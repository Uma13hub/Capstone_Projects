<?php
$name=$_GET['name'];
echo $name;
include "connect.php";
if($name!="deleteall"){
    $sql = "DELETE FROM complaints WHERE stdname='$name'";
    $result = mysqli_query($conn,$sql);
    if($result){
    echo "  <script>alert('Deleted Successfully')</script> ";
        ?>
        
        <meta http-equiv = "refresh" content = "0; url =http://localhost/mess_feedback_project/raised_complaint_print.php" />
        
        <?php
    }
}
else{
    $sql = "TRUNCATE TABLE complaints";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "  <script>alert('All deleted Successfully')</script> ";
            ?>
            
            <meta http-equiv = "refresh" content = "0; url =http://localhost/mess_feedback_project/raised_complaint_print.php" />
            
            <?php
    }
}
?>