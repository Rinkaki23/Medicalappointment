<?php
session_start();
    ob_start();
    if ( !isset($_SESSION['admin'])) {
        header("Location: index.php");
        exit;
    }
?>
<?php require_once '../config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Patient_list</title> 
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="../assets/css/containers.css">  
  <script src="../assets/bootstrap/js/jquery.js"></script> 
  <script src="../assets/bootstrap/js/bootstrap.js"></script> 
</head> 
 
<body class="backgroundimage">
 
<?php include ('nav.php'); ?>

<div style="margin-top:190px" class="col-md-12 iframecont">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:20px;margin-right:20px;margin-left:20px;height:auto;">
                <!-- SENT MESSAGE FROM ADMIN-->
<?php
if(isset($_POST['sendtopatient'])):

$selected_patient = $_POST['selected_patient'];
$selected_message = $_POST['selected_message'];
$appointment_name = $_POST['appointment_name'];
// $appointment_doctor_assigned = $_POST['appointment_doctor_assigned'];
$doc_id = $_POST['appointment_doctor_assigned'];
// $date_suggestion = $_POST['date_suggestion'];

if($selected_message==''){
    Print '<script>alert("Empty Message!");</script>'; //Prompts the user
    Print '<script>window.location.assign("appointments.php");</script>'; // redirects to appointments.php}
    exit;
}
else if($appointment_name==''){
    Print '<script>alert("Please Enter an Appointment!");</script>'; //Prompts the user
    Print '<script>window.location.assign("appointments.php");</script>'; // redirects to appointments.php}
    exit;
}
$getDoctor = mysqli_query($mysqli, "SELECT * FROM tbldoctor WHERE id = ".$doc_id);
while($row = mysqli_fetch_array($getDoctor)){
    $doctor_name = 'Dr. '.$row['fname'].' '.$row['mname'].' '.$row['lname'];
}

// $available_appointment = mysqli_query($mysqli, "SELECT * FROM appointment 
// WHERE doc_id = ".$doc_id." AND app_date = ".$date_suggestion." AND status = 'ACCEPTED'");

$resappointment = mysqli_query($mysqli,"UPDATE `appointment` SET doc_id='$doc_id', appointment='$appointment_name', assigned_doctor = '$doctor_name', status='ACCEPTED' WHERE fullname='$selected_patient' AND message='$selected_message'") or die(mysqli_error());
Print '<script>alert("Message Sent!");</script>'; //Prompts the user
Print '<script>window.location.assign("appointments.php");</script>'; // redirects to appointments.php}

endif;
?>

                      <h1 class="text-center modal-title">Schedule Appointment</h1><br>
                    <form data-toggle="validator" method="post" role="form">

                <label>Set Appointment to:</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select class="form-control" name="selected_patient">
                    <?php
                    $r = mysqli_query($mysqli,"select * from tblpatient"); 
                    while($row = mysqli_fetch_array($r)){
                         echo '<option>'.$row['fullname'].'</option>';
                    }
                 

                                         

                    if(isset($_POST['see_messages'])):
                        echo '<optgroup label="Recently Selected:"></optgroup>';
                        echo '<option selected>'.$_POST['selected_patient'].'</option>';
                        endif;
                         if(isset($_POST['see_dtsug'])):
                        echo '<optgroup label="Recently Selected:"></optgroup>';
                        echo '<option selected>'.$_POST['selected_patient'].'</option>';
                        endif;

                    ?>
                </select></div><br>
                <button class="btn btn-success btn-sm" name="see_messages" type="submit">Click to see request/s</button><br><br>

                <label>Select Requested Appointment</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <select class="form-control" name="selected_message">
                    <?php
                        if(isset($_POST['see_messages'])){
                            $patientselectd = $_POST['selected_patient'];
                            $getstatus = mysqli_query($mysqli,"SELECT * FROM appointment WHERE fullname='$patientselectd'");
                            while($status = mysqli_fetch_array($getstatus)){
                                if($status['status']=='N/A'){
                                    echo '<option>'.$status['message'].'</option>';
                                }
                            }   
      
      
      mysqli_free_result($getstatus);
      
      
      
      
                            echo '<optgroup label="-----End of Message/s-----"></optgroup>';
                        }
                        if(isset($_POST['see_dtsug'])){
                        $patientselectd = $_POST['selected_patient'];
                        $getstatus = mysqli_query($mysqli,"SELECT * FROM appointment WHERE fullname='$patientselectd'");
                        while($status = mysqli_fetch_array($getstatus)){
                            if($status['status']=='N/A'){
                                echo '<option>'.$status['message'].'</option>';
                                }
                            }
                        }

                    ?>
                </select></div><br>

                <button class="btn btn-success btn-sm" name="see_dtsug" type="submit">See date and time suggestion</button><br><br>

                <?php

                    if(isset($_POST['see_dtsug']) && isset($_POST['selected_message']))
                    {

                            $getdate = mysqli_query($mysqli,"SELECT * FROM appointment WHERE fullname='".$_POST['selected_patient']."' AND message='".$_POST['selected_message']."'");
                            $datefetched = mysqli_fetch_array($getdate);
                        
                            echo '<label>Date</label>';
                            echo '<input type="text" class="form-control" disabled="true" name="date_suggestion" value="'.$datefetched['app_date'].'" />';
                            echo '<label>Time</label>';
                            echo '<input type="text" class="form-control" disabled="true" name="time_suggestion" value="'.$datefetched['time'].'" /><br>';
                        }     
                ?>
               
                <label>Appointment</label>
                <div class="input-group"><span class="input-group-addon"></span>
                <input type="text" class="form-control" name="appointment_name" />
                </div>

                <label>Doctor Assigned</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select class="form-control" name="appointment_doctor_assigned">
            <?php
            if(isset($datefetched)){

                $r = mysqli_query($mysqli,"SELECT * FROM tbldoctor WHERE schedule='".$datefetched['time']."'");
            while($row = mysqli_fetch_array($r)){
                 echo '<option value="'.$row['id'].'">'.'Dr. '.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</option>';
            }
                                
                                
                                mysqli_free_result($r);
            }                  
            ?>
                </select></div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success waves-effect btn-sm" name="sendtopatient" >SEND</button>
								<a href="appointment_request.php" class="btn btn-primary btn-danger btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </a>
                            </div>
                    </form>
                </div>
        </div>



 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>