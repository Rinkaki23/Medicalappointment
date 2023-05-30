<?php
    ob_start();
    session_start();

    if ( !isset($_SESSION['patient'])) {
        header("Location: ../index.php");
        exit;
    }
?>


<?php include ('../config.php');
    $getuser=mysqli_query($mysqli,"SELECT * FROM tblpatient where id=".$_SESSION['patient']);
    $userRow1=mysqli_fetch_array($getuser);
    mysqli_free_result($getuser);
?> 
<?php require_once '../config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
 <title>Welcome! <?php echo $userRow1['fullname']; ?></title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="../assets/css/containers.css">    
    <!-- Datatables -->
    <link href="../assets/tables/css/dataTables.bootstrap.min.css" rel="stylesheet">
   

</head> 
 
<body class="backgroundimage">

<?php include ('nav.php'); ?>
    
            <div style="margin-top:220px;" class="col-md-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:auto;">
                <div class="row">
                	<div style="text-align:" class="col-md-4">
                		<h1>Welcome!</h1>
                    <p>Welcome to our medical appointment website! We understand that your health is a top priority, and we are here to help you conveniently schedule and manage your medical appointments with ease. Our user-friendly platform is designed to provide a seamless and efficient experience for patients seeking medical care.</p>
                		<h1>Founded on Faith. Focused on Family.</h1>
                    <p>We are among the most established multi-specialty hospital that provides a complete range of medical services. We are known for our commitment to offer excellent customer service. We are always here to assist you in every way. From infants to elderly, degenerative diseases, heart or hormonal diseases, we are the right people to help you.
</p>
<p>We are dedicated to providing you with easy access to the best in healthcare. Our doctors and medical team prioritise patient care and are well supported by warm and caring clinic staff. Our clinicians genuinely care about you and your health concerns.
</p>
                	</div>
                	<div class="col-md-8">
                		<div style="padding:10px;border-radius:5px">
                		
                        <table id="" class="table table-bordered">
                <thead>
                        <tr>
                            <th><center>Appointment Name</center></th>
                            <th><center>Date</center></th>
                            <th><center>Time</center></th>
                            <th><center>Doctor Assigned</center></th>
                            <th><center>Status</center></th>
                            <th><center>Action</center></th>
                        </tr>
                    </thead>
               
                                <tbody>
                                <?php
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM appointment WHERE cancel = 'N/A' AND fullname = '".$userRow1['fullname']."'";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
					$cancelapp_id = $row['id'];
                                        ?>
                                    <tr>
                   
                                    <td><div align="center"><?php echo $row['appointment'];?></div></td>
                        <td><div align="center"><?php echo $row['app_date'];?></div></td>
                        <td><div align="center"><?php echo $row['time'];?></div></td>
                        <td><div align="center"><?php echo $row['assigned_doctor'];?></div></td>
                        <td><div align="center"><?php echo $row['status'];?></div></td>
                        <td><div align="center"><a href="#cancel_appointment<?php echo $cancelapp_id; ?>" data-target ="#cancel_appointment<?php echo $cancelapp_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-cross">Cancel</i></a>              </div></td>
                                    </tr>    

                                   <?php }}} ?>
                                </tbody>
                            </table>
                </div>
				
                	</div>
                </div>
				
            </div>
			<footer style="margin-right:auto; margin-top: auto;" class="container footercontainer">
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
	
        </div>
		
	<?php include ('../admin/modals/update_modal.php'); ?>
    

        
<!-- jQuery -->
    <script src="../assets/tables/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/tables/bootstrap/bootstrap.min.js"></script>
    
    <!-- Datatables -->
    <script src="../assets/tables/jquery/jquery.dataTables.min.js"></script>
    <script src="../assets/tables/bootstrap/dataTables.bootstrap.min.js"></script>
    <script src="../assets/tables/js/dataTables.fixedHeader.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../assets/tables/js/custom.min.js"></script>
	

</body> 
 
</html>