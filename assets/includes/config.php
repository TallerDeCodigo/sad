<?php 
$DB_HOST = 'localhost';
$DB_USER = 'adminNiss';
$DB_PASS = '(B=(8b=l55Lju7/';
$DB_NAME = 'nissan_sad';


$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
