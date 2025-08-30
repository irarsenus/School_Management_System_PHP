<?php  
include 'include/connect.php';
session_start();
if (isset($_SESSION['post'])) {
	if ($_POST['class']) {
		$id = $_POST['id'];
		$orgName = mysqli_real_escape_string($con, $_POST['orgName']);
		$class = strtoupper(mysqli_real_escape_string($con, $_POST['class']));
		$lev = $_POST['division'];
		$division = mysqli_real_escape_string($con, $_POST['division']);
		$teacher = mysqli_real_escape_string($con, $_POST['teacher']);
		$monitor = mysqli_real_escape_string($con, $_POST['monitor']);
		$monitress = mysqli_real_escape_string($con, $_POST['monitress']);

		$update = mysqli_query($con, "UPDATE classes SET class='{$class}', division='{$division}', teacher='{$teacher}', monitor='{$monitor}', monitress='{$monitress}' WHERE id='{$id}'");
		if ($lev == "A'LEVEL") {
			$std = mysqli_query($con, "UPDATE al SET class='{$class}' WHERE class='{$orgName}'");
		}else{
			$std = mysqli_query($con, "UPDATE ol SET class='{$class}' WHERE class='{$orgName}'");
		}
		if ($update) {
			header("location: classes.php?succ=$class");
		}else{
			header("location: classes.php?err");
		}
	}else{
		header("location: classes.php");
	}
}else{
	header("location: admin.php");
}
?>