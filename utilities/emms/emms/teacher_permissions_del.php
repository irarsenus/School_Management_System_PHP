<?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$del = mysqli_query($con, "DELETE FROM staffpermissions WHERE id='{$id}'");
	if ($del) {
		header("location: teacher_list_permissions.php?succ");
	}else{
		header("location: teacher_list_permissions.php?err");
	}
}
?><?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$del = mysqli_query($con, "DELETE FROM staffpermissions WHERE id='{$id}'");
	if ($del) {
		header("location: teacher_list_permissions.php?succ");
	}else{
		header("location: teacher_list_permissions.php?err");
	}
}
?><?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$del = mysqli_query($con, "DELETE FROM staffpermissions WHERE id='{$id}'");
	if ($del) {
		header("location: teacher_list_permissions.php?succ");
	}else{
		header("location: teacher_list_permissions.php?err");
	}
}
?>