<?php  
include 'include/connect.php';

session_start();
if (isset($_SESSION['post'])) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$evid = mysqli_query($con, "SELECT * FROM fees WHERE id='$id'");
		$evid = mysqli_fetch_assoc($evid);
		unlink("payment/".$evid['evidence']);
		$del = mysqli_query($con, "DELETE FROM fees WHERE id='$id'");
		if ($del) {
			header("location: admin_dash_bursar.php");
		}else{
			header("location: admin_dash_bursar.php");
		}
	}
}
?>