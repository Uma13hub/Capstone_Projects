<?php 
require 'functions.php';
session_start();

// Check whether user is logged on or not
if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}

?>

<?php
if(isset($_GET['id']) && $_GET['id'] != $_SESSION['user_id']) {
    $current_id = $_GET['id'];
    $flag = 1;
} else {
    $current_id = $_SESSION['user_id'];
    $flag = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <style>
    .post{
        margin-right: 50px;
        float: right;
        margin-bottom: 18px;
    }
    .profile{
        margin-left: 50px;
        background-color: white;
        box-shadow: 0 0 5px #4267b2;
        width: 220px;
        padding: 20px;
    }
    input[type="file"]{
        display: none;
    }
    label.upload{
        cursor: pointer;
        color: white;
        background-color: #4267b2;
        padding: 8px 12px;
        display: inline-block;
        max-width: 80px;
        overflow: auto;
    }
    label.upload:hover{
        background-color: #23385f;
    }
    .changeprofile{
        color: #23385f;
        font-family: Fontin SmallCaps;
    }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'external/nav.php'; ?>
        <h1>Profile</h1>
        <?php
        $conn = connect();
        $postsql;
        // Your Own Profile       
            $postsql = "SELECT posts.post_caption, posts.post_time, users.user_email, users.user_firstname, users.user_lastname,
                                 users.user_id, users.user_gender, users.user_nickname,
                                users.user_birthdate, users.user_hometown, users.user_status, users.user_about, 
                                posts.post_id,posts.post_status,posts.post_count
                        FROM posts
                        JOIN users
                        ON users.user_id = posts.post_by
                        WHERE posts.post_by = $current_id
                        ORDER BY posts.post_time DESC";
            $profilesql = "SELECT users.user_id, users.user_gender,users.user_email,  users.user_hometown, users.user_status, users.user_birthdate,
                                 users.user_firstname, users.user_lastname
                          FROM users
                          WHERE users.user_id = $current_id";
            $profilequery = mysqli_query($conn, $profilesql);
            $pr= mysqli_fetch_assoc($profilequery);
        
        echo '
        <div style="margin-left:81.4%">
            <button type="button" data-toggle="modal" class=" btn btn-warning text-center" data-target="#Modal">Edit</button>
        </div>
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog mt-5">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="profile">
							<div class="p-3">
								<form id="updateForm" method="post">
                                    <h2>Fill the following details</h2>
                                    <hr>
                                    
                                    <label>First Name<span>*</span></label><br>
                                    <input class="form-control"  type="text" name="userfirstname" id="userfirstname">
                                    <div class="required"></div>
                                    <br>
                                
                                    <label>Last Name<span>*</span></label><br>
                                    <input class="form-control"  type="text" name="userlastname" id="userlastname">
                                    <div class="required"></div>
                                    <br>
                                    <label>Email<span>*</span></label><br>
                                    <input  class="form-control" type="text" name="useremail" id="useremail">
                                    <div class="required"></div>
                                    <br>
                            
                                    <label>Date of Birth</label>
                                    <input name="dob" type="date"></input> 
                                    <br><br>
                                    <label>Gender</label>
                                    <br>
                                    <input type="radio" name="usergender" value="M" id="malegender" class="usergender">
                                    <label>Male</label>
                                    <input type="radio" name="usergender" value="F" id="femalegender" class="usergender">
                                    <label>Female</label>
                                    <div class="required"></div>
                                    <br>
                                    <label>City</label><br>
                                    <input class="form-control" type="text" name="userhometown" id="userhometown">
                                    <br>
                                    <button type="submit" name="editPr" value="'. $_SESSION['user_id'] .'" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div>
            <img src=""/>
            <p><span style="font-weight:bold">Name : </span>'. $pr['user_firstname'] ." ". $pr['user_lastname'] .'</p>
            <p><span style="font-weight:bold">Email : </span>' . $pr['user_email'] . '</p>
            <p><span style="font-weight:bold">Birth Date  :</span>' . $pr['user_birthdate'] . '</p>
            <p><span style="font-weight:bold">Gender : </span>' . $pr['user_gender'] . '</p>
            <p><span style="font-weight:bold">Place : </span>' . $pr['user_hometown'] . '</p>
        </div>
        ';
        $postquery = mysqli_query($conn, $postsql);    
        if($postquery){
            // Posts
            $width = '40px'; 
            $height = '40px';
            if(mysqli_num_rows($postquery) == 0){ // No Posts
                if($flag == 0){ // Message shown if it's your own profile
                    echo '<div class="post">';
                    echo 'You don\'t have any posts yet';
                    echo '</div>';
                } else { // Message shown if it's another profile other than you.
                    echo '<div class="post">';
                    echo 'There is no public posts to show.';
                    echo '</div>';
                }
                
            } else {
                while($row = mysqli_fetch_assoc($postquery)){
                    include 'mang_profile.php';
                }
                // Profile Info
                
                ?>
                <br>
                <?php } ?>
                <?php
            }
        ?>
    </div>
</body>

</html>
<?php //include 'functions/upload.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // A form is posted
     if (isset($_POST['editPr'])) { // Register process
        // Retrieve Data
        $user=$_POST['editPr'];
        $userfirstname = $_POST['userfirstname'];
        $userlastname = $_POST['userlastname'];
        $useremail = $_POST['useremail'];
        $userbirthdate = $_POST['dob'];
        $usergender = $_POST['usergender'];
        $userhometown = $_POST['userhometown'];
        
        $query = mysqli_query($conn, "UPDATE `users` SET `user_firstname`='$userfirstname',`user_lastname`='$userlastname',`user_email`='$useremail',`user_gender`='$usergender',`user_birthdate`='$userbirthdate',`user_hometown`='$userhometown' WHERE `user_id`='$user'");
    }
    if (isset($_POST['editPr'])) { // Login process
        $user_id = $_POST['editPr'];
        $v="DELETE FROM posts where post_id='$post_id'";
        $query = mysqli_query($conn, $v);
        ?><meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/profile.php" />
    <?php }
    if (isset($_POST['del'])) { // Login process
        $post_id = $_POST['postid'];
        $v="DELETE FROM posts where post_id='$post_id'";
        $query = mysqli_query($conn, $v);
        ?><meta http-equiv = "refresh" content = "0; url =http://localhost/public_news/profile.php" />
   <?php }
}
?>
