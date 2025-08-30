<?php 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$level = $_GET['level'];
		$data = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
		$row = mysqli_fetch_assoc($data);
		$class = $row['class'];
		$del = mysqli_query($con, "DELETE FROM $level WHERE studentId='{$id}'");
		$marksDel = mysqli_query($con, "DELETE FROM marks WHERE studentId='{$id}'");
		if ($del) {
			header("location: students.php?class=$class&level=$level&succ");
		}else{
			header("location: classes.php?err");
		}
	} 
}
?>