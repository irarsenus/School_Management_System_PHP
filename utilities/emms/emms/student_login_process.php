<?php  
include 'include/connect.php';
session_start();
if (isset($_POST['id'])) {
	$student = mysqli_real_escape_string($con, $_POST['id']);

	$ol = mysqli_query($con, "SELECT * FROM ol WHERE studentId='{$student}'");
	if (mysqli_num_rows($ol)>0) {
		$_SESSION['level']='ol';
		$_SESSION['studentId']=$student;
		header("location: student_dash.php?level=ol");
	}else{
		$al = mysqli_query($con, "SELECT * FROM al WHERE studentId='{$student}'");
		if (mysqli_num_rows($al)>0) {
			$_SESSION['studentId']=$student;
			$_SESSION['level']='al';
			header("location: student_dash.php?level=al");
		}else{
			header("location: student_login.php?err");
		}
	}
}
?>