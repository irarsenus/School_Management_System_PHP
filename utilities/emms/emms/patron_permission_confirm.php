<?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$conf = mysqli_query($con, "UPDATE stdpermissions SET returned='yes' WHERE id='{$id}'");
	if ($conf) {
		header("location: patron_permissions.php?succ");
	}else{
		header("location: patron_permissions.php?err");
	}
}
?>