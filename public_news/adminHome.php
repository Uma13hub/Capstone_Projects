<?php 
require 'functions.php';
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
    <nav class="shadow navbar navbar-expand-lg navbar-dark fixed-top h-21" style="background-image:linear-gradient(to bottom, #07d8e3,#7cc4ee) !important;">
        <a style="color:black; font-weight:bold;" class="navbar-brand" href="#">
            Admin
        </a>
        <button class="navbar-toggler bg-warning shadow" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a style="color:black" class="nav-link link  active " href="adminHome.php">
                    Home <i class="fa-solid fa-house-user"></i>
                </a>
                <a style="color:black" class="nav-link link" href="index.php"</a>
                    Logout
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div>
    </nav>
        
        <h1 style="color:black" class="title ">Uploaded posts</h1>
        
        <?php 
        
        $sql = "SELECT posts.post_caption, posts.post_time, users.user_firstname,
                        users.user_lastname, users.user_id, users.user_gender, posts.post_id,posts.post_count,post_status,posts.reports_count,posts.comments
                FROM posts
                JOIN users
                ON posts.post_by = users.user_id
                ORDER BY post_time DESC";
        $query = mysqli_query($conn, $sql);
        if(!$query){
            echo mysqli_error($conn);
        }
        if(mysqli_num_rows($query) == 0){
            echo '<div class="post">';
            echo 'There are no posts yet to show.';
            echo '</div>';
        }
        else{
            while($row = mysqli_fetch_assoc($query)){
                include 'mangpost.php';
                echo '<br>';
            }
        }
        ?>
        <br><br><br>
        <?php
            $sqlq="SELECT post_count FROM posts";
            $q = mysqli_query($conn, $sqlq);
            if(!$q){
                echo mysqli_error($conn);
            }
        ?>
    </div>
    <script src="comment.js"></script>
    <script src="main.js"></script>
    <script src="jquery.js"></script>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') { // Form is Posted
    
    if (isset($_POST['st'])) {
        $pstid=$_POST['postid'];
        $stat="Verified";
        $s = "UPDATE posts
                SET post_status= '$stat' where post_id= '$pstid'";

        $quee = mysqli_query($conn, $s);
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/adminHome.php" />
        <?php
    }
    if (isset($_POST['del'])) {
        $pstid=$_POST['postid'];
        $s = "DELETE FROM posts
                where post_id= '$pstid'";

        $quee = mysqli_query($conn, $s);
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/adminHome.php" />
        <?php
    }
}
?>