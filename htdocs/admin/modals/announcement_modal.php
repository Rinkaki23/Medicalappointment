
<div class="modal" role="dialog" tabindex="-1" id="announcement_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="block-header">
                 <button data-target="#addannouncement_modal" data-toggle="modal" data-dismiss="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="glyphicon glyphicon-plus"></i> Add Announcement</button>
                        
                    </div>
<!-- Display the data on the table-->
                    <center><h3>List of Activities</h3></center>
                        <div class="table-responsive">
                          <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><center>WHAT</center></th>
                                        <th><center>WHEN</center></th>
                                        <th><center>WHERE</center></th>
                                        <th><center>DESCRIPTION</center></th>
                                        <th><center>Actions</center></th>
                                    </tr>
                                </thead>
                            
                                <tbody>
   <?php
                    // Include config file
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM announcement";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                                while($rows = $result->fetch_array()){
					$activity_id = $rows['activity_id'];
                                        ?>
                                    <tr>
                    <td><?php echo $rows['what'];?></td>
                    <td><?php echo $rows['when'];?></td>
                    <td><?php echo $rows['where'];?></td>
                    <td><?php echo $rows['description'];?></td>
                    <td><center>
                        <a  href="#update_announcement<?php echo $activity_id ?>"  data-toggle="modal" data-dismiss="modal"  class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                                                  <a href="#delactivity<?php echo $activity_id; ?>" data-target ="#delactivity<?php echo $activity_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>                                
                    </center>
                    </td>
                    <?php include 'delete_modal.php'; ?>
                    <?php }}} ?>
                                    </tr>
                            
                                </tbody>
                              
                            </table>
                        </div>

                    </div>
            </div>
        </div>

    </div>
