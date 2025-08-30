<?php  
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$status = $_GET['status'];
		$id = $_GET['id'];
			$confirm = mysqli_query($con, "UPDATE staffpermissions SET approved='{$status}' WHERE id='{$id}'");
			if ($confirm) {
				header("location: admin_dash_dos.php");
			}else{
				header("location: admin_dash_dos.php");
			}
	}
}else{
	header("location: admin.php");
}
?><?php  
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$status = $_GET['status'];
		$id = $_GET['id'];
			$confirm = mysqli_query($con, "UPDATE staffpermissions SET approved='{$status}' WHERE id='{$id}'");
			if ($confirm) {
				header("location: admin_dash_dos.php");
			}else{
				header("location: admin_dash_dos.php");
			}
	}
}else{
	header("location: admin.php");
}
?><?php  
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$status = $_GET['status'];
		$id = $_GET['id'];
			$confirm = mysqli_query($con, "UPDATE staffpermissions SET approved='{$status}' WHERE id='{$id}'");
			if ($confirm) {
				header("location: admin_dash_dos.php");
			}else{
				header("location: admin_dash_dos.php");
			}
	}
}else{
	header("location: admin.php");
}
?>