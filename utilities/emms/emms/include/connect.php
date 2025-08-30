<?php  
$server = "localhost";
$username = "root";
$password = "";
$database = "academic";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
	echo "Connection Failed ".mysqli_connect_error();
}
?>