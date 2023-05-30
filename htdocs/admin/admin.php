<?php
session_start();
    ob_start();
    if ( !isset($_SESSION['admin'])) {
        header("Location: unauthorizedaccess.html");
        exit;
    }
?>
<?php include '../config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Admin</title> 

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="../assets/css/containers.css">  
  
  <script src="../assets/bootstrap/js/jquery.js"></script> 
  <script src="../assets/bootstrap/js/bootstrap.js"></script> 
<style>
.dashboard{
	border-radius:5px;
	width:100%;
	height:150px;
	color:#fff;
}
.c1{
	background-color:rgb(23,163,184);
}
.c2{
	background-color:rgb(40,167,69);
}
.c3{
	background-color:rgb(255,193,7);
}
.c4{
	background-color:rgb(220,53,69);
}
</style>
</head> 
 
<body class="backgroundimage">

<?php include ('nav.php'); ?>
  
        <div style="margin-top:190px;" class="col-lg-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:350px;">
                <h2 align="center">DASHBOARD</h2>
                <div class="row">
            <div class="col-sm-3">
            	<div class="dashboard c1">
            		<center><a href="doctor_list.php"><img src="../icons/doctor.png" style="max-height:60px;margin-top:10px"/></a>
            		<h1 style="margin-top:8px">
            			<?php
							$q = mysqli_query($mysqli,"SELECT * FROM tbldoctor");
        					echo mysqli_num_rows($q);?></h1>
            		<p>Doctors</p></center>
            	</div>
            </div>
            <div class="col-sm-3">
            	<div class="dashboard c4">
            		<center><a href="patient_list.php"><img src="../icons/patient.png" style="max-height:60px;margin-top:10px"/></a>
            		<h1 style="margin-top:8px"><?php
							$q = mysqli_query($mysqli,"SELECT * FROM tblpatient");
        					echo mysqli_num_rows($q);?></h1>
            		<p>Patients</p></center>
            	</div>
            </div>
            <div class="col-sm-3">
            	<div class="dashboard c2">
            		<center><a href="appointment_request.php"><img src="../icons/patient-list.png" style="max-height:60px;margin-top:10px"/></a>
            		<div class="row">
            <div class="col-sm-6"><h4>Accepted</h4><?php
							$q = mysqli_query($mysqli,"SELECT * FROM appointment WHERE status='ACCEPTED'");
        					echo mysqli_num_rows($q);?></div>
            <div class="col-sm-6"><h4>Cancelled</h4><?php
							$q = mysqli_query($mysqli,"SELECT * FROM appointment WHERE cancel='CANCELLED'");
        					echo mysqli_num_rows($q);?></div>
            		</div>

            		<p>Appointments</p></center>
            	</div>
            </div>
            <div class="col-sm-3">
            	<div class="dashboard c3">
            		<center><a href="medicine_list.php"><img src="../icons/medicines.png" style="max-height:60px;margin-top:10px"/></a>
            		<h1 style="margin-top:8px"><?php
							$q = mysqli_query($mysqli,"SELECT * FROM medicine");
        					echo mysqli_num_rows($q);?></h1>
            		<p>Medicines</p></center>
            	</div>
            </div>
        </div>
                      	</div>
                          <footer style="margin-right:auto" class="container footercontainer">
        <div class="row">
            <div style="margin-top:-2px" class="col-md-4 col-sm-6 footer-navigation logoicon">
                <h3 align="center"><a href="#"><img src="../assets/img/logo1.jpg" width="67" height="67" class="img-circle"/></a> Medical Appointment System</h3>
            </div>
            <div style="margin-top:20px" class="col-md-4 col-sm-6 footer-contacts">
                    <p align="center">New Era, Quezon City </p>
                    <p align="center"> support@company.com</p>
                      <p class="company-name" align="center"></p>
            </div>
              
            
        </div>
    </footer>
                      </div>
                      
                      
                      <?php if(isset($_GET['reset'])){
		                    Print '<script>window.location.assign("admin/admin.php");</script>'; // redirects to admin.php
		                    exit;
                      	}?>

                          
                </div>
                
            </div>
            
        </div>

     
	
<?php include ('modals/update_modal.php'); ?>
<?php include ('modals/services_offered_modal.php'); ?>


 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>