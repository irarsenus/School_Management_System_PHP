<?php  
include 'include/connect.php';
session_start();

if ($_SESSION['id']) {
	if (isset($_POST['submit'])) {

		$id = mysqli_real_escape_string($con, $_POST['id']);
		$reason = mysqli_real_escape_string($con, $_POST['reason']);
		$depature = date("Y-m-d");
		$return = mysqli_real_escape_string($con, $_POST['return']);

		$select = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$id}'");
		$teacher = mysqli_fetch_assoc($select);
		$name = $teacher['userId'];
		$department = $teacher['department'];
		$contact = $teacher['phone'];
		
		$verify = mysqli_query($con, "SELECT * FROM staffpermissions WHERE teacher='{$name}' AND reason='{$reason}' AND depatureDate='{$depature}'");
		if (mysqli_num_rows($verify)>0) {
			header("location: subject_select.php?err=Permission is already requested");
		}else{
			$insert = mysqli_query($con, "INSERT INTO staffpermissions(teacher, department, reason, depatureDate, arrivalDate) VALUES('{$name}', '{$department}', '{$reason}', '{$depature}', '{$return}')");
		}
		if ($insert) {
			header("location: teacher_permission_print.php?date=$return&teacher=$name");
		}else{
			header("location: subject_select.php?err=Failed to request permission");
		}
	}
}else{
	header("location: login.php");
}
?>