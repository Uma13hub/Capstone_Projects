<?php 
require 'functions.php';
session_start();
// Check whether user is logged on or not
if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}
$temp = $_SESSION['user_id'];
$loc=$_SESSION['user_hometown'];
session_destroy();
session_start();
$_SESSION['user_id'] = $temp;
$_SESSION['user_hometown']=$loc;
ob_start(); 
// Establish Database Connection
$conn = connect();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/db8157b2f3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php include 'external/nav.php'; ?>
        <br>
        <div class="createpost">
            <form method="post" action="" onsubmit="return validatePost()" enctype="multipart/form-data">
                <div class="text-center"><h2 class="title">Create your Post</h2></div>
                <p style="color:black !important; font-size:17px; margin-bottom:0px !important; margin-top:20px !important;"> Please mention your issue here.</p><br>
                <textarea class="form-control" rows="6" name="caption"></textarea>
                <center><img src="" id="preview" style="max-width:580px; display:none;"></center>
                <div class="createpostbuttons">
                    <label class="mr-3" >
                        <div>
                           IMAGE
                        </div>
                        <i class="ml-3 fa-lg fa-solid fa-image"></i>
                        <input class="form-control" type="file" name="fileUpload" id="imagefile">
                    </label>
                    <input type="submit" value="Post" name="post">
                </div>
            </form>
        </div>
        <hr class="mt-5">
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') { // Form is Posted
    if (isset($_POST['post'])) {
        $caption = $_POST['caption'];
        
        $poster = $_SESSION['user_id'];
        // Apply Insertion Query
        $sql = "INSERT INTO posts (post_caption, post_time, post_by)
                VALUES ('$caption',  NOW(), $poster)";
        $query = mysqli_query($conn, $sql);
        // Action on Successful Query
        if($query){
            // Upload Post Image If a file was choosen
            if (!empty($_FILES['fileUpload']['name'])) {
                echo 'FUUUQ';
                // Retrieve Post ID
                $last_id = mysqli_insert_id($conn);
                include 'upload.php';
            }
            header("location: home.php");
        }
    }
}
?>