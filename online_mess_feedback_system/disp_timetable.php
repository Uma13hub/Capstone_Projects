<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/db8157b2f3.js" crossorigin="anonymous"></script>
</head>
<body>
<style>

.timetable {
    border-collapse:collapse !important;
    border-spacing: 15px !important;
    margin: top 35px !important;
    font-family:sans-serif !important;  
background-color:white !important;
box-shadow:10px 10px 10px #6082B6 !important;
text-align: left !important;
}
.thead{ 
background-color:	#ff69b4 !important;>
text-align:center !important;
color: black !important;
font-size: 20px !important;
letter-spacing:2px !important;
}
.timetable, .thead, .tdata {
  border: 0.5px solid black !important;
  border-radius:3px !important;
 padding:10px !important;
}
.trow:nth-child(even){
    background-color:#E0FFFF !important;
}
.trow:nth-child(odd){
    background-color:#AFEEEE !important;}
.hed{
    margin-top:100px !important;
    margin-right:40px;
    margin-left:40px;
    font-size:40px;
    font-weight:bold;
    box-shadow:10px 5px 10px #6082B6 !important; 
    background-color:	#e9967a !important}

</style>
<nav class="shadow navbar navbar-expand-lg navbar-dark fixed-top" style="background-image:linear-gradient(to bottom, #a6e9af,#7cc4ee) !important;">
                <a class="navbar-brand" href="#">
                    
                    <span style="font-size:20px;font-weight:bold; color:black !important;">ONLINE MESS FEEDBACK SYSTEM</span>
                </a>
                <button class="navbar-toggler bg-warning shadow" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link link " href="home.html">
                            Home <i class="fa-solid fa-house-user"></i>
                        </a>
                        <a class="nav-link link active" href="feedback.html">
                            Feedback
                            <i class="fa-solid fa-comments"></i>
                        </a>
                        <a class="nav-link link" href="complaint.html">
                            Complaint
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </a>
                        <a class="nav-link link" href="disp_timetable.php">
                            Time Table
                            <i class="fa-solid fa-table"></i>
                        </a>
                        <a class="nav-link link" href="changepassword.php">
                            Change Password
                            <i class="fa-solid fa-key"></i>
                        </a>
                        <a class="nav-link link" href="#logoutModal" data-toggle="modal" data-target="#logoutModal"</a>
                            Logout
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </div>
                </div>
            </nav>
        <div>
        <?php
        echo"<marquee class='hed mb-5 mt-5' align='center'>TIME TABLE</marquee>";
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "university";

        $conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        $sql = "SELECT * FROM timetable " ;
        $result = mysqli_query($conn, $sql);
        $arr=array("timeliness","quality","quantity","behaviour","neatness","");
        $a=1;

        if (mysqli_num_rows($result) > 0) {
            echo " <center><table class='timetable' cellspacing='7' width='85%'>
            <tr class='trow'>
            <th class='thead'>ITEM NO</th>
            <th class='thead'>MONDAY</th>
            <th class='thead'>TUESDAY</th>
            <th class='thead'>WEDNESDAY</th>
            <th class='thead'>THURSDAY</th>
            <th class='thead'>FRIDAY</th>
            <th class='thead'>SATURDAY</th>
            <th class='thead'>SUNDAY</th>
            </tr>";
            
            while($row = mysqli_fetch_assoc($result)) {
                $space=0;
                for ($x=0; $x <6; $x++) {
                            if($row['monday']== $arr[$x]){ $row['monday']=' '; $space++;}
                            if($row['tuesday']== $arr[$x]){ $row['tuesday']=' '; $space++;}
                            if($row['wednesday']== $arr[$x]){ $row['wednesday']=' '; $space++;}
                            if($row['thursday']== $arr[$x]){ $row['thursday']=' '; $space++;}
                            if($row['friday']== $arr[$x]){ $row['friday']=' '; $space++;}
                            if($row['saturday']== $arr[$x]){ $row['saturday']=' '; $space++;}
                            if($row['sunday']== $arr[$x]){ $row['sunday']=' '; $space++;}}             
                if($space<7){    
                echo "<tr class='trow'>
                <td class='tdata'>" . $a++ ."</td>
                <td class='tdata'>" . $row['monday'] . "</td>
                <td class='tdata'>" . $row['tuesday'] . "</td>
                <td class='tdata'>" . $row['wednesday'] . "</td>
                <td class='tdata'>" . $row['thursday'] . "</td>
                <td class='tdata'>" . $row['friday'] . "</td>
                <td class='tdata'>" . $row['saturday'] . "</td>
                <td class='tdata'>" . $row['sunday'] . "</td> 
                </tr>";}
            
            }
            echo "</table></center>";} 
            else{
                echo "<br>Zero Results<br>";
            }
        ?>   
    </div>
    <div style="width: 25% !important;margin-left:40% !important;" class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog mt-5">
					<div class="modal-content">
						<div class="modal-body text-center">
							<div id="student">
								<div class="pl-3 text-danger">
									<h3>LOGOUT</h3>
								</div>
								<p class="text-bold">Do you really want to logout?</p>
								<div class="d-flex flex-row justify-content-center">
									<form action="logout.php">
										<button type="submit" class="mr-3 btn btn-danger">Yes</button>
									</form>
									<form action="disp_timetable.php" method="post">
									<button type="submit" class="btn btn-success">No</button>
									</form>
								</div>
							</div>
						</div>
	
					</div>
				</div>
			</div>
</body>
</html>
