<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$name = $address = $salary = $position= $loc ="";
$name_err = $address_err = $salary_err =$position_err= "";

// Processing form data when form is submitted
if(isset($_POST['add_doctor'])):

    $fname = trim($_POST["fn"]);
     $mname = trim($_POST["mn"]);
     $lname = trim($_POST["ln"]);
   $gender = trim($_POST["gen"]);
    $address = trim($_POST["address"]);
       $contact = trim($_POST["contact"]);
     $spec = trim($_POST["spec"]);
     $sched = trim($_POST["sched"]);
   $uname = trim($_POST["uname"]);
    $pass = trim($_POST["pwd"]);
    
        // Prepare an insert statement
        $sql = "INSERT INTO tbldoctor (fname, mname, lname, gender, contact, address, specialization, schedule, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssssss",$param_fname, $param_mname,$param_lname,$param_gen,$param_address,$param_contact,$param_spec,$param_sched,$param_uname,$param_pass);
            
            // Set parameters 
            $param_fname = $fname;
             $param_mname = $mname;
            $param_lname = $lname;
             $param_gen = $gender;
              $param_address = $address;
              $param_contact = $contact;
             $param_spec = $spec;
            $param_sched = $sched;
             $param_uname = $uname;
              $param_pass = $pass;
              
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully Added!</center></h2> ";
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


<!--ADD DOCTOR-->
    <div class="modal fade" role="dialog" tabindex="-1" id="add_doctor">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center modal-title"> <img class="img-circle" src="assets/img/avatar_2x.png" width="100" height="100"></h4>
                        <p class="text-center modal-title">Doctor</p>
                        <br>
                        <form method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
                        <div>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="fn" placeholder="Firstname" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="mn" placeholder="Middlename" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="ln" placeholder="Lastname" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <select class="form-control" name="gen">
                                <option>Male</option>
                                <option>Female</option>
                            </select></div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="address" placeholder="Address" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="contact" placeholder="Contact no." required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="spec" placeholder="Specialization" required autofocus class="form-control" />
                            </div>
                            <br>
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
                            </select></div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="uname" placeholder="Username" required autofocus class="form-control" />
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pwd" placeholder="Password" required class="form-control" />
                        </div>
                      <br>
                        <button class="btn btn-primary btn-success btn-block btn-sm" value="save" type="submit" name="add_doctor"><i class="glyphicon glyphicon-log-in"></i> save </button>
                        <br><button class="btn btn-primary btn-danger btn-block btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </button>
                    </form>
                    </div>
            </div>
        </div>
    </div>






<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$name = $address = $salary = $position= $loc ="";
$name_err = $address_err = $salary_err =$position_err= "";

// Processing form data when form is submitted
if(isset($_POST['addannouncement'])):

    // Validate name
    $name = trim($_POST["what"]);
    
    
    // Validate position
    $position = trim($_POST["when"]);
    
        
    // Validate address
    $address = trim($_POST["where"]);
   
    // Validate salary
    $salary = trim($_POST["description"]);
    
    
  
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, position, address, salary) VALUES (?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss",$param_name, $param_position, $param_address, $param_salary);
            
            // Set parameters 
            $param_name = $name;
            $param_position = $position;
            $param_address = $address;
            $param_salary = $salary;
           
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
                    <form data-toggle="validator" method="post" role="form">
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



<!--Add Patient  -->
<?php
// Include config file
require_once 'config.php';
 
// Processing form data when form is submitted

if(isset($_POST['addpatient'])){
    // Validate name
    $input_fn = trim($_POST["fn"]);
    $input_mn = trim($_POST["mn"]);
    $input_ln = trim($_POST["ln"]);
    $input_age = trim($_POST["age"]);
    $input_gen = trim($_POST["gen"]);
    $input_address = trim($_POST["address"]);
    $input_contact = trim($_POST["contact"]);
    $input_email = trim($_POST["email"]);
    $input_uname = trim($_POST["uname"]);
    $input_pwd = trim($_POST["pwd"]);
    $input_fullname = $input_fn.' '.$input_mn.' '.$input_ln;
        // Prepare an insert statement
        $sql = "INSERT INTO tblpatient (fullname, age, gender, address, contact, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssss", $param_fullname,$param_age, $param_gender, $param_address, $param_contact, $param_email, $param_username, $param_password);
            
            // Set parameters 
            $param_fullname = $input_fullname;
            $param_age = $input_age;
            $param_gender = $input_gen;
            $param_address = $input_address;
            $param_contact = $input_contact;
            $param_email = $input_email;
            $param_username = $input_uname;
            $param_password = $input_pwd;
           
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Succesfully registered!</center></h2> ";
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

<!-- ADD PATIENT-->
<div class="modal fade" role="dialog" tabindex="-1" id="addpatient_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center modal-title"> <img class="img-circle" src="assets/img/avatar_2x.png" width="100" height="100"></h4>
                        <p class="text-center modal-title">Patient Sign up</p>
                        <br>
                        <form data-toggle="validator" method="post" role="form">
                        <div>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="fn" placeholder="Firstname" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="mn" placeholder="Middlename" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="ln" placeholder="Lastname" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="number" name="age" placeholder="Age" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <select class="form-control" name="gen">
                                <option>Male</option>
                                <option>Female</option>
                            </select></div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="address" placeholder="Address" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="contact" placeholder="Contact no." required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" placeholder="E-mail" required autofocus class="form-control" />
                            </div>
                            <br>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="uname" placeholder="Username" required autofocus class="form-control" />
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pwd" placeholder="Password" required class="form-control" />
                        </div>
                        <br>
                        <button class="btn btn-primary btn-success btn-block btn-sm" value="save" type="submit" name="addpatient" ><i class="glyphicon glyphicon-log-in"></i> Register </button>
                        <br><button class="btn btn-primary btn-danger btn-block btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
