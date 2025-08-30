<?php
include 'include/connect.php';  

session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$class = $_GET['class'];
		$id = $_GET['id'];
		$level = $_GET['level'];
		if (isset($_GET['increase'])) {
			$fetch = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
			$conduct = mysqli_fetch_assoc($fetch);

			$conduct = $conduct['conduct'];
			if ($conduct>=35) {
				echo "<script>alert('Maximum conduct reached');</script>";
				echo "<script>window.location.assign('patron_students.php?class=$class&level=$level');</script>";
			}else{
				$conduct += 5;
				$update = mysqli_query($con, "UPDATE $level SET conduct='{$conduct}' WHERE studentId='{$id}'");
				if ($update) {
					header("location: patron_students.php?class=$class&level=$level&succ");
				}else{
					header("location: patron_students.php?class=$class&level=$level&err");
				}
			}
		}else{
			$fetch = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
			$conduct = mysqli_fetch_assoc($fetch);

			$conduct = $conduct['conduct'];
			if ($conduct<=0) {
				echo "<script>alert('Minimum conduct reached');</script>";
				echo "<script>window.location.assign('patron_students.php?class=$class&level=$level');</script>";
			}else{
				$conduct -= 5;
				$update = mysqli_query($con, "UPDATE $level SET conduct='{$conduct}' WHERE studentId='{$id}'");
				if ($update) {
					header("location: patron_students.php?class=$class&level=$level&succ");
				}else{
					header("location: patron_students.php?class=$class&level=$level&err");
				}
			}
		}
	}
}else{
	header("location: admin.php");
}
?>