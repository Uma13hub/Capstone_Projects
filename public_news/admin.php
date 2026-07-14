<?php
require 'functions.php';
?>
<head>
<head>
<title>Social Network</title>
</head>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
        
        .content {
            text-align:left !important;
            width:50%;
            padding: 30px;
        }
		body{
            background-size: cover;
            background-position: center;
        }
    </style>
<body>
    <center>
    <h1 class="title">Admin Login</h1>
    <div class="content">
        <div class="admin-login" id="login">
            <a style="margin-left:95% !important;" href="index.php">User</a>
            <form method="post" onsubmit="return adminValidate()">
                <label>Email<span>*</span></label><br>
                <input class="form-control" type="text" name="username" id="loginuseremail">
                <div class="required"></div>
                <br>
                <label>Password<span>*</span></label><br>
                <input class="form-control" type="password" name="userpass" id="loginuserpass">
                <div class="required"></div>
                <br><br>
                <input type="submit" value="Login" name="login">
            </form>
        </div>
    </div>
    </center>
    <script src="main.js"></script>
</body>
</html>
<?php
$conn = connect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    
    if (isset($_POST['login'])) { // Login process
        $username = $_POST['username'];
        $flag=1;
        $userpass = md5($_POST['userpass']);
        echo $username. $userpass;
        $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$userpass'");
        if($query){
            if(mysqli_num_rows($query) == 1) {
                echo "success";
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['username'];
                header("location:adminHome.php");
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
}
    ?>