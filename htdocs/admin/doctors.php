<?php
    ob_start();
    session_start();

    if ( isset($_SESSION['admin'])!="" ) {
        header("Location: admin.php");
        exit;
    }
    if ( isset($_SESSION['doctor'])!="" ) {
        header("Location: doctor.php");
        exit;
    }
    if ( isset($_SESSION['patient'])!="" ) {
        header("Location: patient.php");
        exit;
    }
?>
<?php include 'config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Appointment System</title> 

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="assets/css/containers.css">  
  
  <script src="assets/bootstrap/js/jquery.js"></script> 
  <script src="assets/bootstrap/js/bootstrap.js"></script> 
<style>
 .imgframe img{
    	margin:15px;
    	height:200px;
    	width:200px;
    	border-radius:3px;
    	border:3px solid #ddd;
    }
</style>
</head> 
 
<body>
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" style="width:100%; " src="icons/banner3.jpg"  height="249"/> 
      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="nav navbar-nav"> 
          <li><a href="index.php" style="font-size:15px;"><strong><img src="icons/Apps-Home-icon.png" style="max-height:30px;"/> HOME </strong></a></li> 
          
          <li><a href="services.php" style="font-size:15px;"><strong><img src="icons/services-offered.png" style="max-height:30px;"/> Services </strong></a></li> 
          <li><a href="doctors.php" style="font-size:15px;"><strong><img src="icons/nurse-icon.png" style="max-height:30px;"/> Doctors </strong></a></li> 
        </ul> 
        <ul class="nav navbar-nav navbar-right" style="margin-right:auto"> 
                <li role="presentation"><a href="#login_modal" data-target="#login_modal" data-toggle="modal" style="font-size:15px;"><img src="icons/sign-in.png" style="max-height:30px;"/><strong> Sign In </strong></a></li>
                <li style="margin-right:-2px" role="presentation"><a href="#addpatient_modal" data-target="#addpatient_modal" data-toggle="modal" style="font-size:15px;"><img src="icons/sign-in.png" style="max-height:30px;"/><strong> Sign up </strong></a></li>
                
          </ul>
      </div> 
  </nav>
  
        <div style="margin-top:15%;" class="col-md-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:850px;">
                <div class="row">
                	<div class="col-md-6">
                		<h1>Welcome!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                		<h1>Doctors Appoinment...?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                	</div>
                	<div class="col-md-6">

                		<div class="modal-body logincontainer">

                            <table class="table table-bordered table-hover">
                                <tbody>
						
						<tbody>
                <?php
                    // Include config file
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM tbldoctor";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                                while($rows = $result->fetch_array()){

				$id = $rows["id"];
                                        ?>
                                    <tr>
                   <?php echo '<ul class="col-sm-6">';
					echo '
                          <div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<div class="caption">
					<a href=""><img src="icons/doctor.png" width="150" height="150" /></a>
					<h4 style="color:#000;">'.'Dr. '.''.$rows['fname'].'</h4>
					<p style="color:#000;">'.$rows['specialization'].'</p>
					<p style="color:#000;">'.$rows['schedule'].'</p>
					</div>
					</div>';		
					echo '</ul>'; ?>
                                    </tr>
                                   <?php }}} ?>
                                </tbody>
                                </tbody>
                            </table>

                    </div>
                	</div>
                </div>
            </div>
        </div>


<?php include ('modals/admin_login_modal.php'); ?>
<?php include ('modals/add_patient_modal.php'); ?>
    
 <script src="assets/bootstrap/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body> 
 
</html>