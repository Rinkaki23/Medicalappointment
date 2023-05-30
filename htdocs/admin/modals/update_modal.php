
<!--Retrieve data and display it to update modal -->
<?php
$sql = "SELECT * FROM tbldoctor";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
<!--Update Doctor modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="update_doc<?php echo $rows['id']; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body logincontainer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center modal-title"> <img class="img-circle" src="../icons/nurse-icon.png" width="100" height="100"></h4>
                    <p align="center">Update Doctor Profile</p>
                    <br>
                    <form method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
                        
                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                    <div>
                        	<div class="row">
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="fn" placeholder="Firstname" required autofocus class="form-control" value="<?php echo $rows['fname']; ?>"/>
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="mn" placeholder="Middlename" required autofocus class="form-control" value="<?php echo $rows['mname']; ?>"/>
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="ln" placeholder="Lastname" required autofocus class="form-control" value="<?php echo $rows['lname']; ?>"/>
                            </div></div></div>
                            <br>

                        	<div class="row">
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <select class="form-control" name="gen">
                                <option>Male</option>
                                <option>Female</option>
                            </select></div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="address" placeholder="Address" required autofocus class="form-control" value="<?php echo $rows['contact']; ?>"/>
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="contact" placeholder="Contact no." required autofocus class="form-control" value="<?php echo $rows['address']; ?>"/>
                            </div></div></div>
                            <br>

                        	<div class="row">
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="spec" placeholder="Specialization" required autofocus class="form-control" value="<?php echo $rows['specialization']; ?>"/>
                            </div></div>
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <select class="form-control" name="sched">
                                <option>8:00 A.M. - 9:00 A.M.</option>
                                <option>9:00 A.M. - 10:00 A.M.</option>
                                <option>10:00 A.M. - 11:00 A.M.</option>
                                <option>11:00 A.M. - 12:00 P.M.</option>
                                <option>1:00 P.M. - 2:00 P.M.</option>
                                <option>2:00 P.M. - 3:00 P.M.</option>
                                <option>3:00 P.M. - 4:00 P.M.</option>
                                <option>4:00 P.M. - 5:00 P.M.</option>
                            </select></div></div></div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="uname" placeholder="Username" required autofocus class="form-control" value="<?php echo $rows['username']; ?>"/>
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pwd" placeholder="Password" required class="form-control" value="<?php echo $rows['password']; ?>"/>
                        </div>
                      <br>
                       
                      <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
                                    <button type="submit" class="btn btn-success waves-effect btn-sm" name="update_button_doctor">SAVE CHANGES</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }}} ?>
<?php
            if(isset($_POST['update_button_doctor'])):
                $user_id = $_POST['id'];
                $fn = $_POST['fn'];
                $mn = $_POST['mn'];
                $ln = $_POST['ln'];
                $gender = $_POST['gen'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $spec = $_POST['spec'];
                $sched = $_POST['sched'];
                $uname = $_POST['uname'];
                $pass = $_POST['pwd'];
                mysqli_query($mysqli,"UPDATE tbldoctor set fname = '$fn', mname = '$mn', lname = '$ln', gender = '$gender', contact = '$contact', address = '$address', specialization = '$spec', schedule = '$sched', username = '$uname', password = '$pass' WHERE id ='$user_id'") or die(mysqli_error());
            echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully Updated!</center></h2> ";
 echo ' <center><a href="doctor_list.php"><button class="btn btn-success btn-sm  waves-effect"> Ok</button></a></center>';
 echo" </div>  ";
 echo" </div>  ";
echo" </div> ";

echo" <script type='text/javascript'>  ";
echo"  $(document).ready(function()  ";
echo"  {  ";
echo"   $('#addPatient').modal('show');  ";
echo"  });  ";
echo" </script>  ";
            endif;

            ?>


<!--Retrieve data and display it to update modal -->
<?php
$sql = "SELECT * FROM medicine";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
<!--Update Medicine modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="update_med<?php echo $rows['id']; ?>">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body logincontainer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center modal-title"> <img class="img-circle" src="../icons/medicines.png" width="100" height="100"></h4>
                    <p align="center">Update Medicines</p>
                    <br>
                    <form data-toggle="validator" method="post" role="form">
                        
                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <div class="form-group">
                  <label>Name of Medicine</label>
                      <input type="text" class="form-control" required="required" name="medicine" value="<?php echo $rows['medicine_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Quantity</label>
                      <input class="form-control" type="number" required="required" name="quantity" value="<?php echo $rows['medicine_quantity']; ?>">
                </div>

                <div class="form-group">
                  <label>Price</label>
                      <input type="number" class="form-control" required="required" name="price" value="<?php echo $rows['medicine_price']; ?>">
                </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect btn-sm" name="update_btn" ><i class="glyphicon glyphicon-log-in"></i> SAVE CHANGES</button>
                            <a href="medicine_list.php" class="btn btn-primary btn-danger btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CANCEL </a>
                            </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
<?php }}} ?>
<?php
            if(isset($_POST['update_btn'])):
                $med_id = $_POST['id'];
                $name = $_POST['medicine'];
                $qty = $_POST['quantity'];
                $prc = $_POST['price'];
                mysqli_query($mysqli,"UPDATE medicine set medicine_name = '$name', medicine_quantity = '$qty', medicine_price = '$prc' WHERE id ='$med_id'") or die(mysqli_error());
            echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully Updated!</center></h2> ";
 echo ' <center><a href="medicine_list.php"><button class="btn btn-success btn-sm  waves-effect"> Ok</button></a></center>';
 echo" </div>  ";
 echo" </div>  ";
echo" </div> ";

echo" <script type='text/javascript'>  ";
echo"  $(document).ready(function()  ";
echo"  {  ";
echo"   $('#addPatient').modal('show');  ";
echo"  });  ";
echo" </script>  ";
            endif;

            ?>



<!--Retrieve data and display it to update modal -->
<?php
$sql = "SELECT * FROM tbladmin";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
<!--Update modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="update_account">
        <div class="modal-dialog modal-" role="document">
            <div class="modal-content">
                <div class="modal-body logincontainer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center modal-title"> <img class="img-circle" src="../assets/img/avatar_2x.png" width="100" height="100"></h4>
                    <p align="center">Update your Account</p>
                    <br>
                        <form role="form" method="post">
                        <div>       
                            <input type="hidden" name="id" value="<?php echo $rows['user_id']; ?>">
                            
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="username" placeholder="Change Username" required autofocus class="form-control"  value="<?php echo $rows['user_name']; ?>" />
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="text" name="password" placeholder="Change Password" required class="form-control"  value="<?php echo $rows['user_pass']; ?>" />
                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
                                    <button type="submit" class="btn btn-success waves-effect btn-sm" name="update_button_admin">SAVE CHANGES</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }}} ?>
<?php
if(isset($_POST['update_button_admin'])) {
    $user_id = $_POST['id'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "UPDATE tbladmin SET user_name = '$uname', user_pass = '$pass' WHERE user_id ='$user_id'";
    $result = mysqli_query($mysqli, $query);
    
    if ($result) {
        echo '<div id="addPatient" class="modal fade">';
        echo '    <div class="modal-dialog">';
        echo '        <div class="modal-header alert alert-success">';
        echo '            <h2 class="modal-title"><center>Successfully Updated!</center></h2>';
        echo '            <center><a href="admin.php" class="btn btn-success btn-sm waves-effect">Ok</a></center>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';

        echo '<script type="text/javascript">';
        echo '    $(document).ready(function() {';
        echo '        $("#addPatient").modal("show");';
        echo '    });';
        echo '</script>';
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>





<!--Retrieve data and display it to update modal -->
<?php
$sql = "SELECT * FROM tblpatient";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
<!--Update patient account -->
    <div class="modal fade" role="dialog" tabindex="-1" id="update_patient_account">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body logincontainer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center modal-title"> <img class="img-circle" src="assets/img/avatar_2x.png" width="100" height="100"></h4>
                    <p align="center">Update your Account</p>
                    <br>
                        <form role="form" method="post">
                        <div>       
                            <input type="hidden" name="patient_id" value="<?php echo $rows['id']; ?>">
                              <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" value="<?php echo $rows['fullname']; ?>" name="patient_name">                         
    </div>
    

    <div class="form-group">
    <label>Age</label>
    <input type="number" class="form-control" value="<?php echo $rows['age']; ?>" name="patient_age">                         
    </div>
    
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" value="<?php echo $rows['address']; ?>" name="patient_address">                         
    </div>

    <div class="form-group">
    <label>Contact Number</label>
    <input type="number" class="form-control" value="<?php echo $rows['contact']; ?>" name="patient_contact">                         
    </div>

    <div class="form-group">
    <label>E-mail</label>
    <input type="text" class="form-control" value="<?php echo $rows['email']; ?>" name="patient_email">                         
    </div>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="patient_username" placeholder="Change Username" required autofocus class="form-control"  value="<?php echo $rows['username']; ?>"/>
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="text" name="patient_password" placeholder="Change Password" required class="form-control"  value="<?php echo $rows['password']; ?>"/>
                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
                                    <button type="submit" class="btn btn-success waves-effect btn-sm" name="update_button_patient">SAVE CHANGES</button>
                                </div>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }}} ?>
<?php
            if(isset($_POST['update_button_patient'])):
                $user_id = $_POST['patient_id'];
              $patient_name = $_POST['patient_name'];
              $patient_age = $_POST['patient_age'];
              $patient_address = $_POST['patient_address'];
              $patient_contact = $_POST['patient_contact'];
              $patient_email = $_POST['patient_email'];
                $uname = $_POST['patient_username'];
                $pass = $_POST['patient_password'];
                mysqli_query($mysqli,"UPDATE tblpatient set fullname = '$patient_name',age = '$patient_age',address = '$patient_address',contact = '$patient_contact',email = '$patient_email', username = '$uname', password = '$pass' WHERE id ='$user_id'") or die(mysqli_error());
            echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully Updated!</center></h2> ";
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
            endif;

            ?>


<!--Retrieve announcement data -->
<?php
$sql = "SELECT * FROM tbldoctor";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
           
<!--Update announcement account -->
 <div id="update_announcement<?php echo $rows['id'];?>" class="modal fade">
  <div class="modal-dialog">
  <div class="well">
    <div class="content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Announcement</h4>
      </div>
      <div class="modal-body">
        
        <form role="form" method="post">

    <input type="hidden" name="appointment_id" value="<?php echo $rows['id']; ?>">
      
    <div class="form-group">
    <label>What</label>
    <input type="text" class="form-control" value="<?php echo $rows['name']; ?>" name="what">                         
    </div>
    
    <div class="form-group">
    <label>When</label>
    <input type="date"  class="form-control" value="<?php echo $rows['position']; ?>" name="when">                         
    </div>
    
    <div class="form-group">
    <label>Where</label>
    <input type="text" class="form-control" value="<?php echo $rows['address']; ?>" name="where">                         
    </div>
  
    <div class="form-group">
    <label>Description</label>
    <textarea type="text" class="form-control" cols="30" rows="5" name="description"><?php echo $rows['salary']; ?></textarea>
    </div> 
    
        <div class="modal-footer">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect btn-sm" data-dismiss="modal">cancel</button>
                                <button type="submit" class="btn btn-success waves-effect btn-sm" name="update_appointment" >Update</button>
                            </div>
      </form>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
<?php }}} ?>
<?php
            if(isset($_POST['update_appointment'])):
                $user_id = $_POST['appointment_id'];
                $what = $_POST['what'];
                $when = $_POST['when'];
    $where = $_POST['where'];
    $desc = $_POST['description'];
                mysqli_query($mysqli,"UPDATE employees set name = '$what', position = '$when', address = '$where', salary = '$desc' WHERE id ='$user_id'") or die(mysqli_error());
            echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully Updated!</center></h2> ";
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
            endif;

            ?>


  <!--Cancel Appointment-->
<div class="modal fade" id="cancel_appointment<?php echo $cancelapp_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                       
                                       <div class="alert alert-warning"><h3 class="modal-title" ><center>Cancel Appointment </center></h3><br>
             Are you Sure you Want to <strong>Cancel&nbsp;</strong> this appointment?
             <br>
             <center>
                                      <a class="btn btn-danger" href="../admin/delete/cancelappointment.php<?php echo '?id=' . $cancelapp_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
 <center><br></div>
 </div>
 </div>
 