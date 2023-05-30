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
echo" </script>";

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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div>
                        	<div class="row">
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="fn" placeholder="Firstname" required autofocus class="form-control" />
                            </div>
                        </div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="mn" placeholder="Middlename" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="ln" placeholder="Lastname" required autofocus class="form-control" />
                            </div></div>
                        </div><br>
                        	<div class="row">
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="number" name="age" placeholder="Age" required autofocus class="form-control" />
                            </div>
                            </div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <select class="form-control" name="gen">
                                <option>Male</option>
                                <option>Female</option>
                            </select></div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="contact" placeholder="Contact no." required autofocus class="form-control" />
                            </div></div>
                            </div><br>

                        	<div class="row">
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="address" placeholder="Address" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" placeholder="E-mail" required autofocus class="form-control" />
                            </div></div>
                        </div><br>
                        	<div class="row">
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="uname" placeholder="Username" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-6">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pwd" placeholder="Password" required class="form-control" />
                        </div></div></div><br>
                        <button class="btn btn-primary btn-success btn-block btn-sm" value="save" type="submit" name="addpatient" ><i class="glyphicon glyphicon-log-in"></i> Register </button>
                        <br><button class="btn btn-primary btn-danger btn-block btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </button>
                    </form>
                    </div>
            </div>
        </div>
    </div>



