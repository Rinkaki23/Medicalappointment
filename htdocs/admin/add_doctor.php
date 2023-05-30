<?php
session_start();
    ob_start();
    if ( !isset($_SESSION['admin'])) {
        header("Location: unauthorizedaccess.html");
        exit;
    }
?>


<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Admin</title> 

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="../assets/css/containers.css">  
  
  <script src="../assets/bootstrap/js/jquery.js"></script> 
  <script src="../assets/bootstrap/js/bootstrap.js"></script> 
<style>
.dashboard{
	border-radius:5px;
	width:100%;
	height:150px;
	color:#fff;
}
.c1{
	background-color:rgb(23,163,184);
}
.c2{
	background-color:rgb(40,167,69);
}
.c3{
	background-color:rgb(255,193,7);
}
.c4{
	background-color:rgb(220,53,69);
}
</style>
</head> 
 
<body class="backgroundimage">

<?php include ('nav.php'); ?>
<?php
// Include config file
require_once '../config.php';
 
// Define variables and initialize with empty values
$name = $address = $salary = $position= $loc ="";
$name_err = $address_err = $salary_err =$position_err= "";

// Processing form data when form is submitted
if(isset($_POST['add_doctor'])){

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

        <div style="margin-top:190px;" class="col-lg-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:850px;">
                <h2 align="center">ADD DOCTOR</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12" style="padding-right:40px;padding-left:40px;">
            <section id="content">
            <form method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
                        <div>
                        	<div class="row">
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="fn" placeholder="Firstname" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="mn" placeholder="Middlename" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="ln" placeholder="Lastname" required autofocus class="form-control" />
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
                                <input type="text" name="address" placeholder="Address" required autofocus class="form-control" />
                            </div></div>
                        		<div class="col-sm-4">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="number" name="contact" placeholder="Contact no." required autofocus class="form-control" />
                            </div></div></div>
                            <br>

                        	<div class="row">
                        		<div class="col-sm-6">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="spec" placeholder="Specialization" required autofocus class="form-control" />
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
                                <input type="text" name="uname" placeholder="Username" required autofocus class="form-control" />
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pwd" placeholder="Password" required class="form-control" />
                        </div>
                      <br>
                       
                    
                        <div class="modal-footer">
                        <button class="btn btn-primary btn-success btn-sm" value="save" type="submit" name="add_doctor" ><i class="glyphicon glyphicon-log-in"></i> Submit </button>
                        <a href="doctor_list.php" class="btn btn-primary btn-danger btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </a>
                            </div>
                    </form>
</section>     
</div>
</div> 
  </div> 
                </div>
              </div>
          </div>
                </div>
            </div>
        </div>

     <footer style="margin-right:-2px" class="container footercontainer">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation logoicon">
                <h3 align="center"><a href="#"><img src="../assets/img/logo.jpg" width="66" height="50" class="img-circle"/></a> Holy Trinity Multispecialty Clinic</h3>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                    <p align="center">089 Crispo St.. Ligao, City +639979477370 </p>
                    <p align="center"> support@company.com</p>
                      <p class="company-name" align="center">Copyright © 2017</p>
            </div>
              
            
        </div>
    </footer>


 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>