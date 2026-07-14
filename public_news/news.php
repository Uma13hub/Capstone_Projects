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
        <h1 style="color:black" class="title ">Recent Posts</h1>
        
        <?php 
        // Public Posts Union Friends' Private Posts
        $sql = "SELECT posts.post_caption, posts.post_time, users.user_email, users.user_firstname, users.user_lastname,
                                 users.user_id, users.user_gender, users.user_nickname,
                                users.user_birthdate, users.user_hometown, users.user_status, users.user_about, 
                                posts.post_id,posts.post_status,posts.post_count,posts.comments,posts.reports_count
                        FROM posts
                        JOIN users
                        ON users.user_id = posts.post_by
                        where users.user_hometown='$loc'
                        ORDER BY posts.post_time DESC";
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
                include 'post.php';
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
    <script src="jquery.js"></script>
    <script>
        // Invoke preview when an image file is choosen.
        $(document).ready(function(){
            $('#imagefile').change(function(){
                preview(this);
            });
        });
        // Preview function
        function preview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (event){
                    $('#preview').attr('src', event.target.result);
                    $('#preview').css('display', 'initial');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Form Validation
        function validatePost(){
            var required = document.getElementsByClassName("required");
            var caption = document.getElementsByTagName("textarea")[0].value;
            required[0].style.display = "none";
            if(caption == ""){
                required[0].style.display = "initial";
                return false;
            }
            return true;
        }
    </script>
    <script>
        let repBtn=document.getElementById("report");
        repBtn.onclick=function(){
            alert("Report has been raised");
        }
</script>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Form is Posted
     if (isset($_POST['rep'])) {
        $postid= $_POST['rep'];
        $user = $_SESSION['user_id'];
        $q1 = "SELECT post_id, user_id FROM user_rep where user_id='$user' and post_id='$postid'";
        $vj= mysqli_query($conn, $q1);
        if(!mysqli_num_rows($vj) > 0){
            $mysq= "SELECT reports_count FROM posts where post_id='$postid'";
            $vv= mysqli_query($conn, $mysq);
            if(mysqli_num_rows($vv) > 0){
                $rr= mysqli_fetch_assoc($vv);
                $c= (int)$rr['reports_count'];
                $sql = "UPDATE posts SET reports_count=$c+1 where post_id='$postid'";
                $query = mysqli_query($conn, $sql);
                $q2= "INSERT INTO user_rep VALUES('$user','$postid')";
                $j= mysqli_query($conn, $q2);
            }
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/news.php" />
        <?php
    }
    if (isset($_POST['comm'])) {
        $postid= $_POST['comm'];
        $user = $_SESSION['user_id'];
        $comment= $_POST['comment'];
        $q1 = "SELECT post_id FROM posts where post_id='$postid'";
        $vj= mysqli_query($conn, $q1);
        if(mysqli_num_rows($vj) > 0){
            $mysq= "SELECT comments FROM posts where post_id='$postid'";
            $vv= mysqli_query($conn, $mysq);
            if(mysqli_num_rows($vv) > 0){
                $rr= mysqli_fetch_assoc($vv);
                if($rr['comments']==""){
                    $c= "->".$comment."*";
                }
                else{
                    $c= $rr['comments']."->".$comment."*";
                }
                echo $c;
                $sql = "UPDATE `posts` SET `comments`='$c' where `post_id`='$postid'";
                $query = mysqli_query($conn, $sql);
            }
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/news.php" />
        <?php
    }
    if (isset($_POST['like'])) {
        $postid= $_POST['like'];
        $user = $_SESSION['user_id'];
        $q1 = "SELECT post_id, user_id FROM user_post where user_id='$user' and post_id='$postid'";
        $vj= mysqli_query($conn, $q1);
        if(!mysqli_num_rows($vj) > 0){
            $mysq= "SELECT post_count FROM posts where post_id='$postid'";
            $vv= mysqli_query($conn, $mysq);
            if(mysqli_num_rows($vv) > 0){
                $rr= mysqli_fetch_assoc($vv);
                $c= (int)$rr['post_count'];
                $sql = "UPDATE posts SET post_count=$c+1 where post_id='$postid'";
                $query = mysqli_query($conn, $sql);
                $q2= "INSERT INTO user_post VALUES('$user','$postid')";
                $j= mysqli_query($conn, $q2);
            }
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/news.php" />
        <?php
        
    }
    if (isset($_POST['dislike'])) {
        $postid= $_POST['dislike'];
        $user = $_SESSION['user_id'];
        $q1 = "SELECT post_id, user_id FROM user_post where user_id='$user' and post_id='$postid'";
        $vj= mysqli_query($conn, $q1);
        if(mysqli_num_rows($vj) > 0){
            $mysq= "SELECT post_count FROM posts where post_id='$postid'";
            $vv= mysqli_query($conn, $mysq);
            if(mysqli_num_rows($vv) > 0){
                $rr= mysqli_fetch_assoc($vv);
                $c= (int)$rr['post_count'];
                $sql = "UPDATE posts SET post_count=$c-1 where post_id='$postid'";
                $query = mysqli_query($conn, $sql);
                $q2= "DELETE FROM user_post WHERE post_id='$postid' and user_id='$user'";
                $j= mysqli_query($conn, $q2);
            }
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/news.php" />
        <?php
        
    }
    
}

?>