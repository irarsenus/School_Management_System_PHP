<?php  
session_start();

session_unset();
$logout = session_destroy();
if ($logout) {
	header("location: index.php");
}else{
	echo "<script>alert('Failed to sign out')</script>";
	echo "<script>window.location.assign('subject_select.php')</script>";
}

?>