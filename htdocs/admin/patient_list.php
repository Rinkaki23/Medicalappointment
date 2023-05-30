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
                <h2 align="center">PATIENTS</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12" style="padding-right:40px;padding-left:40px;">
            <section id="content">
          
                    <table id="datatable-fixed-header" class="table table-bordered">
                      <thead>
                        <tr>
                            <tr>
                                <th><div align="center"> Name </div></th>      
                                <th><div align="center"> Age </div></th>                       <th><div align="center"> Address </div></th>         <th><div align="center"> Contact </div></th>      <th><div align="center"> Email </div></th>                       <th><div align="center"> Action </div></th>                             </tr>
                      </thead>
                        <tbody>
                     <?php
                            include('../config.php');
                            $result = mysqli_query($mysqli,"SELECT * FROM tblpatient");
                            while($row = mysqli_fetch_array($result))
                                {
                                $patient_id = $row["id"];
                                    echo '<tr>';
                                    echo '<td><div align="center">'.$row['fullname'].'</div></td>';
                                    echo '<td><div align="center">'.$row['age'].'</div></td>';
                                    echo '<td><div align="center">'.$row['address'].'</div></td>';
     echo '<td><div align="center">'.$row['contact'].'</div></td>';echo '<td><div align="center">'.$row['email'].'</div></td>';
                                     ?>
                                      <td><center>
                                  <a href="#delpatient<?php echo $patient_id; ?>" data-target ="#delpatient<?php echo $patient_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>              
                    </center>
                    </td>
                                    <?php include 'modals/delete_modal.php';
                                                      echo '</tr>';
                                }
?> 
                         
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
<?php include ('modals/update_modal.php'); ?>	
<?php include ('modals/announcement_modal.php'); ?>  
<?php include ('modals/doctorprofile_modal.php'); ?>    
<?php include ('modals/patient_requests_modal.php'); ?>    
<?php include ('modals/medicines_modal.php'); ?>
<?php include ('modals/add_medicine_modal.php'); ?>
<?php include ('modals/add_doctor_modal.php'); ?>
<?php include ('modals/add_announcement_modal.php'); ?>
<?php include ('modals/cancelled_modal.php'); ?>

 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>