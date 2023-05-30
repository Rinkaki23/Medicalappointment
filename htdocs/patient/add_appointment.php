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
<?php
if(isset($_POST['messagesent'])):

    $res=mysqli_query($mysqli,"SELECT * FROM tblpatient where id=".$_SESSION['patient']);

    $userRow=mysqli_fetch_array($res);

    $id=$userRow['id'];
    $fullname=$userRow['fullname'];

    //time sent
    
    $time_sent = date('h:i:s A');
        //date sent
    $date_sent = date("Y/m/d");
    $date_time_sent = $date_sent.' '.$time_sent;

    $search_all=mysqli_query($mysqli,"SELECT * FROM appointment WHERE cancel='N/A'");


    $message = $_POST['message'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    
    while($searched = mysqli_fetch_array($search_all)){

    if($appointment_date == $searched['app_date']){
        if($appointment_time == $searched['time']){
            Print '<script>alert("There is an existing appointment!");</script>'; //Prompts the user
            Print '<script>window.location.assign("index.php");</script>'; // redirects to patient.php
            exit;
            }
        }

    }mysqli_free_result($search_all);

    $result = mysqli_query($mysqli,"INSERT INTO `appointment` values(NULL,'$date_time_sent','$fullname','$message','N/A','$appointment_date','$appointment_time','N/A','N/A','N/A')") or die(mysqli_error());
    Print '<script>alert("Message Sent!");</script>'; //Prompts the user
    Print '<script>window.location.assign("index.php");</script>'; // redirects to patient.php
    
endif;
?>

        <div style="margin-top:190px;" class="col-lg-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:auto;">
                <h2 align="center">ADD APPOINTMENT</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12" style="padding-right:40px;padding-left:40px;">
            <section id="content">
            <form data-toggle="validator" method="post" role="form">

                        <div class="form-group">
                          <label>Date</label>
                              <input class="form-control" type="date" placeholder="When" required="required" name="appointment_date">
                        </div>

                        <label>Time</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        <select class="form-control" name="appointment_time">
                            <option>8:00 A.M. - 9:00 A.M.</option>
                            <option>9:00 A.M. - 10:00 A.M.</option>
                            <option>10:00 A.M. - 11:00 A.M.</option>
                            <option>11:00 A.M. - 12:00 P.M.</option>
                            <option>1:00 P.M. - 2:00 P.M.</option>
                            <option>2:00 P.M. - 3:00 P.M.</option>
                            <option>3:00 P.M. - 4:00 P.M.</option>
                            <option>4:00 P.M. - 5:00 P.M.</option>
                        </select></div><br>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea  rows="5" class="form-control" placeholder="Compose Message..." required="required" name="message"></textarea>
                        </div><br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">cancel</button>
                                        <button type="submit" class="btn btn-success waves-effect btn-sm" name="messagesent" onclick="return confirm('Warning: You cannot cancel an appointment a day before the date you set. Are you sure to continue?');">SEND</button>
                                    </div>
                      </form>
</section>     
</div>
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
 
 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>