<?php 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$user=$_GET['id'];
		$select = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$user}'");
		$row = mysqli_fetch_assoc($select);
		$name = $row['firstName'];
		$del = mysqli_query($con, "DELETE FROM staff WHERE userId='{$user}'");
		$permDel = mysqli_query($con, "DELETE FROM staffpermissions WHERE teacher='{$user}'");
		$forumDel = mysqli_query($con, "DELETE FROM forum WHERE posterId='{$user}'");
		if ($del) {
			header("location: teachers.php?succ=$name");
		}else{
			header("location: teachers.php?err");
		}
	} 
}
?>