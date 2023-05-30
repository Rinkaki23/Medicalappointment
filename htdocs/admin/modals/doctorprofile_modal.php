
<div class="modal" role="dialog" tabindex="-1" id="doctor_profile">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

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

                    </div>
            </div>
        </div>

    </div>