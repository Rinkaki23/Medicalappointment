<?php
    ob_start();
    session_start();

    if ( !isset($_SESSION['doctor'])) {
        header("Location: index.php");
        exit;
    }
?>


<?php include ('config.php');
    $getuser=mysqli_query($mysqli,"SELECT * FROM tbldoctor where id=".$_SESSION['doctor']);
    $userRow1=mysqli_fetch_array($getuser);
    mysqli_free_result($getuser);
?> 
<?php require_once 'config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
 <title>Welcome! Dr. <?php echo $userRow1['lname']; ?></title>
  <link rel="stylesheet" href="assets/css/containers.css">  
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="assets/tables/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head> 
 
<body class="backgroundimage">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" src="icons/banner3.1.jpg" width="1400" height="249"/> 
      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="nav navbar-nav"> 
          <li><a href="doctor.php" style="font-size:15px;"><strong><img src="icons/Apps-Home-icon.png" style="max-height:30px;"/> HOME </strong></a></li> 
          <li><a href="#" data-target="#services_offered" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/services-offered.png" style="max-height:30px;"/> Services Offered</strong></a></li>
         
          <li><a href="#" data-target="#cancelledApp_modal" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/requested-appointments.png" style="max-height:30px;"/> Cancelled Appointments</strong></a></li>
        
              <ul class="nav navbar-nav navbar-right"> 
                     <li style="margin-right:100px" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:15px;">
			  <img src="icons/nurse-icon.png" style="max-height:30px;"/><strong> Hi, Dr. <?php echo $userRow1['lname']; ?></strong><span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                <li><a href="logout.php" style="font-size:15px;"><img src="icons/sign-out.png" style="max-height:30px;"/> Sign Out</a></li>
          </ul>
          </li>
          </ul>
      </div> 
  </nav> 
  
  <div style="margin-top:210px; margin-left:20px; margin-right:20px;" class="panel panel-default"> 
  <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-4" style="padding-right:40px;padding-left:40px;">
            <section id="content">
          
        <div class="col-md-8 carcolumn">
            <div class="container container2 table-responsive">
                <table id="datatable-fixed-header" class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center>Appointment Name</center></th>
                            <th><center>Date</center></th>
                            <th><center>Time</center></th>
                            <th><center>Patient</center></th>
                        </tr>
                    </thead>
<?php
                    echo '<tbody>';
                
                $fullname = 'Dr. '.$userRow1['fname'].' '.$userRow1['mname'].' '.$userRow1['lname'];
                $result = mysqli_query($mysqli,"SELECT * FROM appointment WHERE cancel = 'N/A' AND assigned_doctor = '$fullname' ORDER BY `appointment`.`app_date` ASC");
                while($row = mysqli_fetch_array($result))
                    {
                        echo '<tr class="record">';
                        echo '<td><div align="left">'.$row['appointment'].'</div></td>';
                        echo '<td><div align="right">'.$row['app_date'].'</div></td>';
                        echo '<td><div align="right">'.$row['time'].'</div></td>';
                        echo '<td><div align="right">'.$row['fullname'].'</div></td>';
                        echo '</tr>';
                    }
                
                    echo '</tbody>';
         mysqli_free_result($result);
   ?>                             
                </table>
            </div>
        </div>
        
    </div>
</section>     </div>
        

</div> 

  </div>
    
       
 
<?php include ('admin/modals/doctorprofile_modal.php'); ?>    
<?php include ('admin/modals/update_modal.php'); ?>
<?php include ('admin/modals/services_offered_modal.php'); ?>
<?php include ('admin/modals/cancelled_modal.php'); ?>
 <!-- jQuery -->
    <script src="assets/tables/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/tables/bootstrap/bootstrap.min.js"></script>
    
    <!-- Datatables -->
    <script src="assets/tables/jquery/jquery.dataTables.min.js"></script>
    <script src="assets/tables/bootstrap/dataTables.bootstrap.min.js"></script>
    <script src="assets/tables/js/dataTables.fixedHeader.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="assets/tables/js/custom.min.js"></script>

</body> 
 
</html>