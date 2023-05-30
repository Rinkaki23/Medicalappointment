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
if(isset($_POST['addmedicine'])){

    $medicine= trim($_POST["medicine"]);
     $quantity = trim($_POST["quantity"]);
     $price = trim($_POST["price"]);

    
        // Prepare an insert statement
        $sql = "INSERT INTO medicine (medicine_name, medicine_quantity, medicine_price) VALUES (?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sii",$param_medicine,$param_quantity,$param_price);
            
            // Set parameters 
            $param_medicine = $medicine;
             $param_quantity = $quantity;
            $param_price = $price;
          
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                echo " <div id='addPatient' class='modal fade'> ";
 echo" <div class='modal-dialog'> ";
   echo" <div class='modal-header alert alert-success'> ";
    echo" <h2 class='modal-title'><center>Medicine Succesfully Added!</center></h2> ";
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
                <h2 align="center">ADD MEDICINE</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12" style="padding-right:40px;padding-left:40px;">
            <section id="content">
            <form data-toggle="validator" method="post" role="form">
                <div class="form-group">
                  <label>Name of Medicine</label>
                      <input type="text" class="form-control" placeholder="Enter Name of Medicine" required="required" name="medicine">
                </div>
                <div class="form-group">
                  <label>Quantity</label>
                      <input class="form-control" type="number" placeholder="Enter Quantity" required="required" name="quantity">
                </div>

                <div class="form-group">
                  <label>Price</label>
                      <input type="number" class="form-control" placeholder="Enter Price" required="required" name="price">
                </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect btn-sm" name="addmedicine" ><i class="glyphicon glyphicon-log-in"></i> Submit</button>
                            <a href="medicine_list.php" class="btn btn-primary btn-danger btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </a>
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