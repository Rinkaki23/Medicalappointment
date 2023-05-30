<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_server = 'sql313.epizy.com';
$db_username = 'epiz_34264836';
$db_password = '6FGLYQDKvsjGl';
$db_name = 'epiz_34264836_db_clinic';

/* Attempt to connect to MySQL database */
$mysqli = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if ($mysqli->connect_errno) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
