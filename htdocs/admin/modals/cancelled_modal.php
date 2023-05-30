<div class="modal" role="dialog" tabindex="-1" id="cancelledApp_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">

                    <div class="block-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><br>
                        <h3 align="center">CANCELLED APPOINTMENTS</h3>
                    </div>
<!-- Display the data on the table-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Patient</center></th>
                                        <th><center>Doctor Assigned</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                <?php $result = mysqli_query($mysqli,"select * from appointment where cancel='CANCELLED'") or die(mysqli_error());
                 while($rows = mysqli_fetch_array($result)):
                 $cancel_id = $rows['id'];
                 ?>
                                <tbody>
                                    <tr>
                    <td><?php echo $rows['fullname'];?></td>
                    <td><?php echo $rows['assigned_doctor'];?></td>
                    <td><center>
                   <a href="#delcancel<?php echo $cancel_id; ?>" data-target ="#delcancel<?php echo $cancel_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>  
                    </center></td>
                </td>
                                    </tr> 
                                    <?php include 'delete_modal.php'; ?>
                                   <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>

                    </div>
            </div>
        </div>

    </div>