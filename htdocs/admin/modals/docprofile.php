<?php include 'config.php'; ?>
<link rel="stylesheet" href="assets/css/login.css"> 
<!--Admin Login modal -->
    <div class="modal animate" role="dialog" tabindex="-1" id="docprofile">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center modal-title"> <img class="img-circle" src="icons/doctor.png" width="100" height="100"></h4>
                        <p class="text-center modal-title">Profile</p>
                        <br>
                        <div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                 
                                    <tr>
                               
                                        <th><center>Name</center></th>
                                        <th><center>Contact no.</center></th>
                                        <th><center>Address</center></th>
                                        <th><center>Schedule</center></th>
                                        <th><center>Specialization</center></th>
                                    </tr>

                                </thead>

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
                                        ?>
                                    <tr>
                   
                    <td><?php echo $rows['fname'];?> 
                     <td><?php echo $rows['contact'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['schedule'];?></td>
                    <td><?php echo $rows['specialization'];?></td>
                  
                                    </tr>
                                   <?php }}} ?>
                                </tbody>
                                </tbody>
                            </table>
                        <br>
                        <br><button class="btn btn-primary btn-success btn-block btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Ok </button>
                    </div>
            </div>
        </div>
    </div>