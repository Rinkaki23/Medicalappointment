<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$name = $address = $salary = $position= $loc ="";
$name_err = $address_err = $salary_err =$position_err= "";

// Processing form data when form is submitted
if(isset($_POST['addannouncement'])){

    // Validate name
    $what = trim($_POST["what"]);
    
    
    // Validate position
    $when = trim($_POST["when"]);
    
        
    // Validate address
    $where = trim($_POST["where"]);
   
    // Validate salary
    $description = trim($_POST["description"]);
    
    
  
        // Prepare an insert statement
        $sql = "INSERT INTO announcement (what, whens, wheres, description) VALUES (?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss",$param_name, $param_position, $param_address, $param_salary);
            
            // Set parameters 
            $param_name = $what;
            $param_position = $when;
            $param_address = $where;
            $param_salary = $description;
           
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully created!</center></h2> ";
 echo ' <center><a href="admin.php"><button class="btn btn-success btn-sm  waves-effect"> Ok</button></a></center>';
 echo" </div>  ";
 echo" </div>  ";
echo" </div> ";

echo" <script type='text/javascript'>  ";
echo"  $(document).ready(function()  ";
echo"  {  ";
echo"   $('#addPatient').modal('show');  ";
echo"  });  ";
echo" </script>  ";
                exit();
            }else{
                echo "Something went wrong. Please try again later.";
            }
        
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>



<div class="modal fade" role="dialog" tabindex="-1" id="addannouncement_modal">
    <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body logincontainer">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <h1 class="text-center modal-title"><i class="glyphicon glyphicon-volume-up"></i></h1>
                      <p class="text-center modal-title">Announcement</p><br>
                    <form method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
                <div class="form-group">
                  <label>What</label>
                      <input type="text" class="form-control" placeholder="What" required="required" name="what">
                </div>
                <div class="form-group">
                  <label>When</label>
                      <input class="form-control" type="date" placeholder="When" required="required" name="when">
                </div>

                <div class="form-group">
                  <label>Where</label>
                      <input type="text" class="form-control" placeholder="Where" required="required" name="where">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea  rows="5" class="form-control" placeholder="Description of the activity..." required="required" name="description"></textarea>
                </div><br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">cancel</button>
                                <button type="submit" class="btn btn-success waves-effect btn-sm" name="addannouncement" >add</button>
                            </div>
                      </form>
                </div>
          </div>
    </div>
</div>

