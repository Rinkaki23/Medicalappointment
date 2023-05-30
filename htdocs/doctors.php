
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
 
<body style="background-image: url(icons/Bkg2.jpg);">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" style="width:100%; " src="icons/banner3.1.jpg"  height="249"/> 
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
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:auto;text-align: justify;">
                <div class="row">
                	<div class="col-md-6">
                		<h1>Welcome!</h1>
                    <p>Welcome to our medical appointment website! We understand that your health is a top priority, and we are here to help you conveniently schedule and manage your medical appointments with ease. Our user-friendly platform is designed to provide a seamless and efficient experience for patients seeking medical care.</p>
                		<h1>Founded on Faith. Focused on Family.</h1>
                    <p>We are among the most established multi-specialty hospital that provides a complete range of medical services. We are known for our commitment to offer excellent customer service. We are always here to assist you in every way. From infants to elderly, degenerative diseases, heart or hormonal diseases, we are the right people to help you.
</p>
<p>We are dedicated to providing you with easy access to the best in healthcare. Our doctors and medical team prioritise patient care and are well supported by warm and caring clinic staff. Our clinicians genuinely care about you and your health concerns.
</p>
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

        <?php include ('admin/modals/update_modal.php'); ?>
        <?php include ('admin/modals/admin_login_modal.php'); ?>
        <?php include ('admin/modals/add_patient_modal.php'); ?>
    
 <script src="assets/bootstrap/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body> 
 
</html>