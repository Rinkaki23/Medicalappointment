<!--Delete patient-->
<div class="modal fade" id="delpatient<?php echo $patient_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove Patient </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> this record?
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deletepatient.php<?php echo '?id=' . $patient_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 
<!--Delete announcement-->
<div class="modal fade" id="delactivity<?php echo $activity_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove Announcement </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> this record?
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deleteactivity.php<?php echo '?id=' . $activity_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 
<!--Delete doctor-->
<div class="modal fade" id="deldoctor<?php echo $doctor_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove Doctor </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> <?php echo $rows['fname']; ?>
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deletedoctor.php<?php echo '?id=' . $doctor_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 
 <!--Delete appointment>-->
<div class="modal fade" id="delappointment<?php echo $appointment_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove appointment </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> this record?
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deleteappointment.php<?php echo '?id=' . $appointment_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 
  <!--Delete medicine>-->
<div class="modal fade" id="delmedicine<?php echo $medicine_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove Medicine </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> this record?
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deletemedicine.php<?php echo '?id=' . $medicine_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 
   <!--Delete medicine>-->
<div class="modal fade" id="delcancel<?php echo $cancel_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-danger"><h3 class="modal-title" ><center>Remove Cancelled Appointment </center></h3><br>
             Are you Sure you Want to <strong>Delete&nbsp;</strong> this appointment?
             <br>
             <center>
                                      <a class="btn btn-danger" href="delete/deletecancel.php<?php echo '?id=' . $cancel_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
              
              