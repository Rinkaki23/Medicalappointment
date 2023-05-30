<div class="modal" role="dialog" tabindex="-1" id="patient_requests">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                    <div class="modal-body logincontainer">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <a href="appointments.php"><button type="submit" class="btn btn-primary waves-success btn-sm" > Set Appointment</button></a>
<!-- Display the data on the table-->
  <center><h3>List of Appointments</h3></center>
                        <div class="table-responsive" style="margin-top:20px;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Date Sent</center></th>
                                        <th><center>Name</center></th>
                                        <th><center>Message</center></th>
                                        <th><center>Status</center></th>
                                         <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <?php $result = mysqli_query($mysqli,"select * from appointment where cancel='N/A' ORDER BY `appointment`.`date_sent` DESC") or die(mysqli_error());
                                 while($rows = mysqli_fetch_array($result)):
                                 $appointment_id= $rows['id'];?>
                                <tbody>
                                    <tr>
                                    <td><?php echo $rows['date_sent'];?></td>
                                    <td><?php echo $rows['fullname'];?></td>
                                    <td><?php echo $rows['message'];?></td>
                                    <td><?php echo $rows['status'];?></td>
                                    <td><center>
                                        <a href="#delappointment<?php echo $appointment_id; ?>" data-target ="#delappointment<?php echo $appointment_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                    </center></td><?php include 'delete_modal.php'; ?>
                                    </tr>  
                                   <?php endwhile; ?>
               
                                </tbody>
                            </table>
                        </div>

                    </div>
            </div>
        </div>

    </div>

   