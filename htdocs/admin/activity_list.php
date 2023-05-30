<?php require_once 'config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Patient_list</title> 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="assets/css/containers.css">  
  <script src="assets/bootstrap/js/jquery.js"></script> 
  <script src="assets/bootstrap/js/bootstrap.js"></script> 
</head> 
 
<body class="backgroundimage">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" src="icons/banner3.jpg" width="1400" height="249"/> 
      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="nav navbar-nav"> 
          <li><a href="index.php" style="font-size:15px;"><strong><img src="icons/Apps-Home-icon.png" style="max-height:30px;"/> HOME </strong></a></li> 
          <li><a href="#" data-target="#services_offered" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/services-offered.png" style="max-height:30px;"/> Services Offered</strong></a></li>
          <li><a href="#" data-target="#reports" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/requested-appointments.png" style="max-height:30px;"/> Sales Report</strong></a></li>
          <li><a href="#" data-target="#cancelledApp_modal" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/requested-appointments.png" style="max-height:30px;"/> Cancelled Appointments</strong></a></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:15px;">
              <img src="icons/Manage.png" style="max-height:30px;"/><strong> Manage </strong> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#announcement_modal" data-target="#announcement_modal" data-toggle="modal" style="font-size:15px;"><i class="glyphicon glyphicon-exclamation-sign" style="font-size:30px;color:green;"></i> Announcement</a></li>
                <li><a href="#" data-target="#admin_doctor_profile" data-toggle="modal" style="font-size:15px;"><img src="icons/nurse-icon.png" style="max-height:30px;"/> Doctor's Profile</a></li>
                <li><a href="#" data-target="#patient_requests" data-toggle="modal" style="font-size:15px;"><img src="icons/requested-appointments.png" style="max-height:30px;"/> Requested Appointments</a></li>
                <li><a href="#" data-target="#medicines" data-toggle="modal" style="font-size:15px;"><img src="icons/medicines.png" style="max-height:30px;"/> Medicines</a></li>
                <li><a href="patient_list.php" style="font-size:15px;"><img src="icons/patient-list.png" style="max-height:30px;"/> Patient List</a></li>
        </ul> 
        
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:15px;">
			  <img src="icons/admin.png" style="max-height:30px;"/> Administrator<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#update_account" data-target="#update_account" data-toggle="modal" style="font-size:15px;"><img src="icons/Manage.png" style="max-height:30px;"/> Settings</a></li>
                <li><a href="logout.php" style="font-size:15px;"><img src="icons/sign-out.png" style="max-height:30px;"/> Sign Out</a></li>
          </ul>
      </div> 
  </nav> 

                        <div style="margin-top:190px" class="table-responsive">
                          <button data-target="#addannouncement_modal" data-toggle="modal" data-dismiss="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="glyphicon glyphicon-plus"></i> Add Announcement</button>
                          <a href="activity_list.php"><button class="btn btn-primary btn-sm  waves-effect"> <i class="glyphicon glyphicon-plus"></i> Refresh </button></a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>What</center></th>
                                        <th><center>When</center></th>
                                        <th><center>Where</center></th>
                                        <th><center>Description</center></th>                                             <th><center>Action</center></th>   
                                  
                                    </tr>
                                </thead>
                            
                                <tbody>
    <?php
    $sql = "SELECT * FROM employees";
    if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
       while($rows = $result->fetch_array()){
         $activity_id=$rows['id'];                                  
    ?>
                                    <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['position'];?></td>
                    <td><?php echo $rows['address'];?></td>
                  <td><?php echo $rows['salary'];?></td>
                     <td><center>
                        <a  href="#delpatient<?php echo $patient_id ?>"  data-toggle="modal" data-dismiss="modal"  class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                                                  <a href="#delactivity<?php echo $activity_id; ?>" data-target ="#delactivity<?php echo $activity_id;?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-trash"></i></a>              
                    </center>
                    </td>
                                    </tr>
                                 <?php include ('modals/delete_modal.php'); ?>
                                </tbody>
                                <?php }}} ?>
                            </table>
                        </div>



 
 
  <footer class="container footercontainer">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation logoicon">
                <h3 align="center"><a href="#"><img src="assets/img/logo.jpg" width="66" height="50" /></a> Holy Trinity Multispecialty Clinic</h3>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                    <p align="center">089 Crispo St.. Ligao, City +639979477370 </p>
                    <p align="center"> support@company.com</p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <p class="company-name" align="center">Copyright © BSIS - IV 2017</p>
                <h4 align="center"><a href="#" data-target="#developer_modal" data-toggle="modal">Developers </a></h4>
            </div>
        </div>
    </footer>

<?php include ('modals/announcement_modal.php'); ?>
<?php include ('modals/doctorprofile_modal.php'); ?>
<?php include ('modals/update_modal.php'); ?>
<?php include ('modals/services_offered_modal.php'); ?>

 <script src="assets/bootstrap/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/jquery.js"></script> 
 <script src="assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>