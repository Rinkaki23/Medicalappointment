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
  
        <div style="margin-top:190px;" class="col-lg-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:auto;">
                <h2 align="center">MEDICINES</h2>
                <div class="row">
                <div class="panel-body">
   <div class="row" style="margin-right:-15px;margin-left:-15px;" >
        <div class="col-md-12">
            <section id="content">
            <a href="add_medicine.php" class="btn btn-primary btn-sm  waves-effect"> <i class="glyphicon glyphicon-plus"></i> Add Medicine</a><br><br>
            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Name of Medicine</center></th>
                                        <th><center>Quantity</center></th>
                                        <th><center>Price</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>

                            <?php
                            
                    require_once '../config.php';
                    
                    $result = mysqli_query($mysqli,"SELECT * FROM medicine") or die(mysqli_error());
                            while($rows = mysqli_fetch_array($result)):
$medicine_id = $rows['id'];
?>

                                <tbody>
                                    <tr>
                                        <td><?php echo $rows['medicine_name'];?></td>
                                        <td><?php echo $rows['medicine_quantity'];?></td>
                                        <td><?php echo $rows['medicine_price'];?></td>
                                        <td><center>
                                        <a  href="#update_med<?php echo $rows['id']; ?>"  data-target="#update_med<?php echo $rows['id']; ?>" data-toggle="modal"  class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#delmedicine<?php echo $medicine_id; ?>" data-target ="#delmedicine<?php echo $medicine_id;?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a> 
                                        </center>
                                    </tr>
                                        <?php include 'modals/delete_modal.php'; ?>
                                   <?php endwhile;?>
                                </tbody>
                            </table>

    </div>
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

     <footer style="margin-right:auto" class="container footercontainer">
        <div class="row">
            <div style="margin-top:1px" class="col-md-4 col-sm-6 footer-navigation logoicon">
                <h3 align="center"><a href="#"><img src="../assets/img/logo1.jpg" width="67" height="67" class="img-circle"/></a> Medical Appointment System</h3>
            </div>
            <div style="margin-top:20px" class="col-md-4 col-sm-6 footer-contacts">
                    <p align="center">New Era, Quezon City </p>
                    <p align="center"> support@company.com</p>
                      <p class="company-name" align="center"></p>
            </div>
              
            
        </div>
    </footer>
    
    <?php include ('modals/update_modal.php'); ?>

 <script src="../assets/bootstrap/js/jquery.min.js"></script>
 <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery.js"></script> 
 <script src="../assets/bootstrap/js/bootstrap.js"></script>
  
</body> 
 
</html>