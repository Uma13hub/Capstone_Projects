<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
	<script src="myscript.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/db8157b2f3.js" crossorigin="anonymous"></script>
<style>
    th {
        color: black;
        font-size: 15px;
    }

    .box{
        border-radius: 10px;
        border-collapse: collapse;
        border-style: none;
        padding :5px;
        width:absolute;
    }
</style>
</head>

<body>	
    <div id="sectionComp">
    <nav class="shadow navbar navbar-expand-lg navbar-dark fixed-top h-21" style="background-image:linear-gradient(to bottom, #a6e9af,#7cc4ee) !important;">
                <a class="navbar-brand" href="#">
                   
                    <span style="font-size:20px;font-weight:bold; color:black !important;">ONLINE MESS FEEDBACK SYSTEM</span>
                </a>
		    <button class="navbar-toggler bg-warning shadow" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
						<a class="nav-link link " href="yestreport.php">Reports 
							<i class="fa-solid fa-chart-area"></i>
						</a>
						<a class="nav-link link " href="monthreport.html">Month Report 
							<i class="fa-solid fa-chart-column"></i>
						</a>
						<a class="nav-link link" href="raised_complaint_print.php">Complaints 
							<i class="fa-solid fa-circle-exclamation"></i></a>
						<a class="nav-link link active" href="mang_item.html">Manage Items 
							<i class="fa-solid fa-bars-progress"></i>
						</a>
                        <a class="nav-link link " href="mang_std.html">Manage students 
							<i class="fa-solid fa-user-group"></i>
						</a>
						<a class="nav-link link" href="#logoutModal" data-toggle="modal" data-target="#logoutModal"</a>
                            Logout
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
					</div>
		    </div>
	        </nav>
	        <div class="container mt-5">
		        <div class="row">
		         <h1 class="mt-5 col-12 text-danger text-center">Complaints</h1>
                 <br>
                 <div class="col-12 text-right"><button class="shadow btn btn-danger"><a href="delete_complaint.php?name=deleteall" class='text-white'>Delete all</a></button></div>
                 <?php
                 include "connect.php";
                 $sql = "SELECT * FROM complaints";
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                 while($row = mysqli_fetch_assoc($result)) {
                        echo"<hl>
                        <div id='raisedCompCon' class='col-12 shadow bg-light box mt-4'>
                            <div class=' p-3 d-flex flex-row'>
                                <div class='mt-3 mr-5'>
                                    <h6><span style='border-radius: 5px' class=' text-primary text-white  p-1'>Name </span>:  "   . $row['stdname'] . " </h6>
                                    <h6><span style='border-radius: 5px' class='mr-3 text-primary text-white  p-1'>ID </span>:  "     . $row['stdid'] . "</h6>
                                    <h6><span style='border-radius: 5px' class='mr-2 text-primary text-white p-1'>Date </span>:   "     . $row['date'] . " </h6>
                                </div>
                                <b><vr></b>
                                <div class='ml-2'>
                                    <p><h6><span style='border-radius: 5px' class='bg-danger text-white shadow p-1'>Complaint:</span><br><br> " . $row['comp'] . "<h6></p>
                                </div>
                            </div>
                            <div class='text-right mr-3'><button class='shadow btn btn-danger'><a href='delete_complaint.php?name=$row[stdname]' class='text-white'>delete</a></button></div>
                        </div><b><hr></b>";}}
                        else{
                            echo "<br>
                                <div class='text-center'><h2 class='text-danger'>No complaints raised..!</h2></div>
                            <br>";}
                        ?>  
		         </div>
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
										<form action="raised_complaint_print.php" method="post">
										<button type="submit" class="btn btn-success">No</button>
										</form>
									</div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
	 </div>
</body>
</html>
