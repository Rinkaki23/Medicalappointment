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
                <h2 align="center">DOCTORS</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12">
            <section id="content">
            <a href="add_doctor.php" class="btn btn-primary btn-sm  waves-effect"> <i class="glyphicon glyphicon-plus"></i> Add Doctor</a><br><br>
            <table class="table table-bordered table-hover">
                                <thead>
                                 
                                    <tr>
                            
                                        <th><center>Name</center></th>
                                        <th><center>Gender</center></th>
                                        <th><center>Contact no.</center></th>
                                        <th><center>Address</center></th>
                                        <th><center>Schedule</center></th>
                                        <th><center>Specialization</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
               
                                <tbody>
                                         <?php
                    // Include config file
                    require_once '../config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM tbldoctor";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                                while($rows = $result->fetch_array()){
					$doctor_id = $rows['id'];
                                        ?>
                                    <tr>
                   
                    <td><?php echo $rows['fname'];?> <?php echo $rows['mname'];?>. <?php echo $rows['lname'];?></td>
                    <td><?php echo $rows['gender'];?></td>
                    <td><?php echo $rows['contact'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['schedule'];?></td>
                    <td><?php echo $rows['specialization'];?></td>
                    <td><center>
                        <a  href="#update_doc<?php echo $rows['id']; ?>"  data-target="#update_doc<?php echo $rows['id']; ?>" data-toggle="modal"  class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#deldoctor<?php echo $doctor_id; ?>" data-target ="#deldoctor<?php echo $doctor_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>     
                    </center>
                    </td>
                                    </tr>    
                                    <?php include 'modals/delete_modal.php';?>

                                   <?php }}} ?>
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
    
<?php include ('modals/update_modal.php'); ?>
<?php include ('modals/services_offered_modal.php'); ?>

 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>