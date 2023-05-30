<?php
// Include config file
require_once '../../config.php';
$get_id=$_GET['id'];

// Prepare a delete statement
$sql = "UPDATE appointment SET cancel = 'CANCELLED' WHERE id = ?";

if($stmt = $mysqli->prepare($sql)){

// Bind variables to the prepared statement as parameters
$stmt->bind_param("s", $param_id);

// Set parameters
$param_id = $get_id;

// Attempt to execute the prepared statement
if($stmt->execute()){

// Records deleted successfully. Redirect to landing page
header("location: ../../patient");
exit();
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
}
?>



