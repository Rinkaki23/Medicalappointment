<?php
// Include config file
require_once '../../config.php';
$get_id=$_GET['id'];

// Prepare a delete statement
$sql = "DELETE FROM medicine WHERE id = ?";

if($stmt = $mysqli->prepare($sql)){

// Bind variables to the prepared statement as parameters
$stmt->bind_param("s", $param_id);

// Set parameters
$param_id = $get_id;

// Attempt to execute the prepared statement
if($stmt->execute()){

// Records deleted successfully. Redirect to landing page
header("location: ../medicine_list.php");
exit();
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
}
?>



