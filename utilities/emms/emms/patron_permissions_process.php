<?php  
include 'include/connect.php';
session_start();

if ($_SESSION['post']) {
	if (isset($_POST['submit'])) {

		$provider = $_SESSION['post'];
		$id = mysqli_real_escape_string($con, $_POST['student']);
		$reason = mysqli_real_escape_string($con, $_POST['reason']);
		$depature = date("Y-m-d");
		$return = mysqli_real_escape_string($con, $_POST['return']);

		$selectOl = mysqli_query($con, "SELECT * FROM ol WHERE studentId='{$id}'");
		if (mysqli_num_rows($selectOl)>0) {
			$fetchOl = mysqli_fetch_assoc($selectOl);
			$fname = $fetchOl['firstName'];
			$lname = $fetchOl['lastName'];
			$class = $fetchOl['class'];
		}else{
			$selectAl = mysqli_query($con, "SELECT * FROM al WHERE studentId='{$id}'");
			$fetchAl = mysqli_fetch_assoc($selectAl);
			$fname = $fetchAl['firstName'];
			$lname = $fetchAl['lastName'];
			$class = $fetchAl['class'];	
		}
		$insert = mysqli_query($con, "INSERT INTO stdpermissions(studentId, firstName, lastName, reason, depatureDate, returnDate, provider, class) VALUES('{$id}', '{$fname}', '{$lname}', '{$reason}', '{$depature}', '{$return}', '{$provider}', '{$class}')");
		if ($insert) {
			header("location: patron_permissions.php?succ");
		}else{
			header("location: patron_permissions.php?err");
		}
	}
}else{
	header("location: admin.php");
}
?>