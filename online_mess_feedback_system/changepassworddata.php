<?PHP 
 session_start();
 if(!isset($_SESSION['student'])){
  header('location:logout.php');
 }
 $host = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "university";
 $conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);
 		$username=$_SESSION['student'];
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];	
		$confirmpassword=$_POST['confirmpassword'];	
		$query="SELECT * FROM `account`  WHERE `username`='$username'";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		if($row['password']==$oldpassword){

			if($newpassword==$confirmpassword)
			{
				$query="UPDATE `account` SET `password`='$newpassword' WHERE `username`='$username' ";
				$sql=mysqli_query($conn,$query);
				if($sql)
				{	
					echo "<script>alert('Password Updated(Login again)');</script>";
					echo "<script>window.location='login.html';</script>";
				}else{
					echo "<script>alert('Password Can't Update')</script>";
					echo "<script>window.location='changepassword.php';</script>";
				}	
			}else{
				echo "<script>alert(' New Password And Confirm Password should be same')</script>";
					echo "<script>window.location='changepassword.php';</script>";
			}
			
		}
	
?>