<?php  
include 'include/connect.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$del = mysqli_query($con, "DELETE FROM announcements WHERE id='{$id}'");
	if ($del) {
		header("location: dos_announcements.php?succ");
	}else{
		header("location: dos_announcements.php?err");
	}
}
?>