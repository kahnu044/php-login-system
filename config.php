<?php 
error_reporting(0);
$server = "localhost";
$user = "root";
$pass = "";
$database = "php_login_system";

$conn = mysqli_connect($server,$user,$pass,$database);
if (!$conn) {
	die("connection Filed Due To -".mysqli_connect_error($conn));
}
//echo "Connection Successfull";
?>