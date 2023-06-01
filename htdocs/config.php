<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'kaboom';

/* Attempt to connect to MySQL database */
$mysqli = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if ($mysqli->connect_errno) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>