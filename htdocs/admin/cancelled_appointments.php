<?php
session_start();
    ob_start();
    if ( !isset($_SESSION['admin'])) {
        header("Location: unauthorizedaccess.html");
        exit;
    }
?>
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
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:auto;">
                <h2 align="center">CANCELLED APPOINTMENTS</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12" style="padding-right:40px;padding-left:40px;">
            <section id="content">
            
            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Patient</center></th>
                                        <th><center>Doctor Assigned</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                <?php
                 include '../config.php';
                 
                 $result = mysqli_query($mysqli,"select * from appointment where cancel='CANCELLED'") or die(mysqli_error());
                 while($rows = mysqli_fetch_array($result)):
                 $cancel_id = $rows['id'];
                 ?>
                                <tbody>
                                    <tr>
                    <td><?php echo $rows['fullname'];?></td>
                    <td><?php echo $rows['assigned_doctor'];?></td>
                    <td><center>
                   <a href="#delcancel<?php echo $cancel_id; ?>" data-target ="#delcancel<?php echo $cancel_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>  
                    </center></td>
                </td>
                                    </tr> 
                                    <?php include 'modals/delete_modal.php'; ?>
                                   <?php endwhile;?>
                                </tbody>
                            </table>

    </div>
</section>     
</div>
</div> 
  </div> 
                </div>
              </div>
          </div>
                </div>
            </div>
        </div>
<footer style="margin-right:auto" class="container footercontainer">
        <div class="row">
            <div style="margin-top:1px" class="col-md-4 col-sm-6 footer-navigation logoicon">
                <h3 align="center"><a href="#"><img src="../assets/img/logo1.jpg" width="67" height="67" class="img-circle"/></a> Medical Appointment System</h3>
            </div>
            <div style="margin-top:20px" class="col-md-4 col-sm-6 footer-contacts">
                    <p align="center">New Era, Quezon City </p>
                    <p align="center"> support@company.com</p>
                      <p class="company-name" align="center"></p>
            </div>
              
            
        </div>
    </footer>

<?php include ('modals/services_offered_modal.php'); ?>
<?php include ('modals/announcement_modal.php'); ?>  
<?php include ('modals/doctorprofile_modal.php'); ?>    
<?php include ('modals/patient_requests_modal.php'); ?>    
<?php include ('modals/medicines_modal.php'); ?>
<?php include ('modals/add_medicine_modal.php'); ?>
<?php include ('modals/add_doctor_modal.php'); ?>
<?php include ('modals/add_announcement_modal.php'); ?>
<?php include ('modals/update_modal.php'); ?>
<?php include ('modals/cancelled_modal.php'); ?>

 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>