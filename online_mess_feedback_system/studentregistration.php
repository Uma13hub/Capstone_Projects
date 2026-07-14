<?PHP
 session_start();
 if(!isset($_SESSION['student'])){
  header('location:logout.php');
 }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<!--===============================================================================================-->

<style>
  html {
      position: relative;
      min-height: 100%;
  }
  
  body {
      padding-top: 4.5rem;
      margin-bottom: 4.5rem;
      background: radial-gradient( lightgrey  0%, white 100%);
  }
 
  </style>

<!--===============================================================================================-->
<body>
<!--===============================================================================================-->
<section>
<nav class="shadow navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="data:image/jpeg;base64,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" />
                </a>
                <button class="navbar-toggler bg-warning shadow" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link link " href="#">Home</a>
                        <a class="nav-link link" href="feedback.html">Feedback <span class="sr-only">(current)</span></a>
                        <a class="nav-link link" href="complaint.html">Complaint</a>
                        <a class="nav-link link active" href="studentregistration.php">Profile</a>
                        <a class="nav-link link" href="disp_timetable.php">Time Table</a>
                        <a class="nav-link link" href="changepassword.php">Change Password</a>
                        <a class="nav-link link" href="logout.php">Logout</a>
                    </div>
                </div>
  </nav>
    <main class="content-wrapper">
  <!--===================================================================================================================================================-->
  <!--===================================================================================================================================================-->
  <div class="container-fluid  " >
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-heading">
        </div>
  
        <div class="modal-body">
          <h2 class="text-center">Student Registration</h2>
          <form action="studentregistrationdata.php" role="form" method="POST">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
                </span>
                <input type="text"  name="studentname" class="form-control rounded-pill" placeholder="Student Name" required />
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="text" name="rollnumber" class="form-control rounded-pill" placeholder="Roll Number" required/>
  
              </div>
  
            </div>
            <div class="form-group">
              <label>  &nbsp&nbsp Date Of Birth</label>
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
      
                <input type="date" id="birthday" name="dateofbirth" class="form-control rounded-pill" placeholder="DateOfBirth" required/>
  
              </div>
  
            </div> 
            
                  <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
               
                <select id="cars"  name="strem" class="form-control rounded-pill"  required>
                  <option value=""> Select Stream</option>
                  <option value="b-tech">B-Tech</option>
                  <option value="puc">PUC</option>
                </select>
              </div>
  
            </div>  
             <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                
                <select id="cars" name="branch" class="form-control rounded-pill"  required>
                  <option value="">Select Branch</option>
                  <option value="cse">CSE</option>
                  <option value="ece">ECE</option>
                  <option value="eee">EEE</option>
                  <option value="it">IT</option>
                  <option value="mech">MECH</option>
                  <option value="civil">CIVIL</option>
                </select>
              </div>
              
  
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="text"  name="father_guardianname" class="form-control rounded-pill" placeholder="Father / Guardian Name"  required/>
  
              </div>
            
  
            </div>   
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="tel"  name="mobile_number" class="form-control rounded-pill" placeholder="Mobile Number" pattern="[0-9]{10}" required/>
  
              </div>
  
            </div>   
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="text"  name="address" class="form-control rounded-pill" placeholder="Address"  required/>
  
              </div>
            <br>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary rounded-pill ">Submit</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  
  </div>

</main>
  </section>
</body>

</html>