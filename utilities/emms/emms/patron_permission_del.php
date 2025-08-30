<?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$del = mysqli_query($con, "DELETE FROM stdpermissions WHERE id='{$id}'");
	if ($del) {
		header("location: patron_permissions.php?succ");
	}else{
		header("location: patron_permissions.php?err");
	}
}
?>