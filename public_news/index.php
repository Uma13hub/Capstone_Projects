<?php 
require 'functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
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
    <style>
        .container{
            display: flex !important;
            justify-content:center !important;
            padding:50px;
            margin: auto;
            width: 100%;
        }
        .content {
            width:70%;
            padding: 30px;
            
        }
        .tab{
            margin-bottom:20px !important;
        }
        
		body{
            
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <h1>Hello! login to proceed</h1>
    <div class="container">
        
        <div class="content">
            <div style="display:flex !important; justify-content:space-between;">
                <div>
                    <button class="btn btn-primary but mr-2" onclick="openTab(event,'signin')" id="link1">Login</button>
                    <button class="btn btn-secondary but" onclick="openTab(event,'signup')" id="link2">Sign Up</button>
                </div>
                <div>
                    <a href="admin.php">Admin Login</a>
                </div>
            </div>
            <div class="mt-3 tabcontent" id="signin">
                <form method="post" onsubmit="return validateLogin()">
                    <label>Email<span>*</span></label><br>
                    <input class="form-control" type="text" name="useremail" id="loginuseremail">
                    <div class="required"></div>
                    <br>
                    <label>Password<span>*</span></label><br>
                    <input class="form-control" type="password" name="userpass" id="loginuserpass">
                    <div class="required"></div>
                    <br><br>
                    <input type="submit" value="Login" name="login">
                </form>
            </div>
            <div class="mt-3 tabcontent" id="signup">
                <form method="post" onsubmit="return validateRegister()">
                    
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
                  
                    <label>Password<span>*</span></label><br>
                    <input class="form-control"  type="password" name="userpass" id="userpass">
                    <div class="required"></div>
                    <br>
              
                    <label>Confirm Password<span>*</span></label><br>
                    <input class="form-control"  type="password" name="userpassconfirm" id="userpassconfirm">
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
 
                    <h2>Additional Info</h2>
                    <hr>
             
                    <input type="radio" name="userstatus" value="S" id="singlestatus">
                    <label>Single</label>

                    <input type="radio" name="userstatus" value="M" id="marriedstatus">
                    <label>Married</label>
                    <br><br>
          
                    <label>About you</label><br>
                    <textarea rows="12" name="userabout" id="userabout"></textarea>
                    <br><br>
                    <input class="form-control" type="submit" value="Create Account" name="register">
                </form>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>

<?php
$conn = connect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // 
    $flag=1;//A form is posted
    if (isset($_POST['login'])) { // Login process
        $useremail = $_POST['useremail'];
        
        $userpass = md5($_POST['userpass']);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '$useremail' AND user_password = '$userpass'");
        if($query){
            if(mysqli_num_rows($query) == 1) {
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_firstname'] . " " . $row['user_lastname'];
                $_SESSION['user_hometown'] = $row['user_hometown'];
                header("location:home.php");
            }
            else {
                ?> <script>
                    document.getElementsByClassName("required")[0].innerHTML = "Invalid Login Credentials.";
                    document.getElementsByClassName("required")[1].innerHTML = "Invalid Login Credentials.";
                </script> <?php
            }
        } else{
            echo mysqli_error($conn);
        }
    }
    if (isset($_POST['register'])) { // Register process
        // Retrieve Data
        $userfirstname = $_POST['userfirstname'];
        $userlastname = $_POST['userlastname'];
        $usernickname = $_POST['usernickname'];
        $userpassword = md5($_POST['userpass']);
        $useremail = $_POST['useremail'];
        echo $useremail;
        $userbirthdate = $_POST['dob'];
        $usergender = $_POST['usergender'];
        $userhometown = $_POST['userhometown'];
        $userabout = $_POST['userabout'];
        if (isset($_POST['userstatus'])){
            $userstatus = $_POST['userstatus'];
        }
        else{
            $userstatus = NULL;
        }
        // Check for Some Unique Constraints
        $query = mysqli_query($conn, "SELECT user_email FROM users WHERE user_email = '$useremail'");
        if(mysqli_num_rows($query) > 0){
            echo($row);
            echo $useremail;
            $row = mysqli_fetch_assoc($query);
            
            if($useremail == $row['user_email']){
                ?> <script>
                document.getElementsByClassName("required")[6].innerHTML = "This Email already exists.";
                </script> <?php
                $flag=0;
            }
        }
        // Insert Data
        if($flag==1){
            $sql = "INSERT INTO users(user_firstname, user_lastname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
                VALUES ('$userfirstname', '$userlastname','$userpassword', '$useremail', '$usergender', '$userbirthdate', '$userstatus', '$userabout', '$userhometown')";
            $query = mysqli_query($conn, $sql);
            if($query){
                $query = mysqli_query($conn, "SELECT user_id FROM users WHERE user_email = '$useremail'");
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_hometown']= $row['user_hometown'];
                header("location:home.php");
            }
        }
    }
}
?>