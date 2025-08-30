<?php
include 'include/connect.php';  
session_start();
if ($_SESSION['post']) {
	if ($_POST['class']) {
		$level = mysqli_real_escape_string($con, $_POST['level']);
		$id = mysqli_real_escape_string($con, $_POST['id']);
		$fname = strtoupper(mysqli_real_escape_string($con, $_POST['fname']));
		$lname = mysqli_real_escape_string($con, $_POST['lname']);
		$class = mysqli_real_escape_string($con, $_POST['class']);
		$town = mysqli_real_escape_string($con, $_POST['town']);
		$contact = mysqli_real_escape_string($con, $_POST['contact']);
		$year = mysqli_real_escape_string($con, $_POST['year']);
		$gender = mysqli_real_escape_string($con, $_POST['gender']);

		$update = mysqli_query($con, "UPDATE $level SET firstName='{$fname}', lastName='{$lname}', class='{$class}', homeTown='{$town}', contact='{$contact}', admission='{$year}', gender='{$gender}' WHERE studentId='{$id}'");

		if ($update) {
			header("location: students.php?class=$class&level=$level&succ=$fname");
		}else{
			header("location: students.php?class=$class&level=$level&err");
		}
	}else{
		// header("location: students_select.php");
	}
}else{
	header("location: admin.php");
}
?>