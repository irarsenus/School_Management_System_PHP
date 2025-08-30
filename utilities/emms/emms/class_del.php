<?php 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$select = mysqli_query($con, "SELECT * FROM classes WHERE id='{$id}'");
		$row = mysqli_fetch_assoc($select);
		$class = $row['class'];
		$del = mysqli_query($con, "DELETE FROM classes WHERE class='{$class}'");
		if ($del) {
			header("location: classes.php?succ=$class");
		}else{
			header("location: classes.php?err");
		}
	} 
}
?>