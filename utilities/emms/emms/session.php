<?php  

include 'include/connect.php';

session_start();

if (isset($_GET['te'])) {

	$te = $_GET['te'];

	$select = mysqli_query($con, "SELECT * FROM staff WHERE email='{$te}'");

	$row = mysqli_fetch_assoc($select);



	$_SESSION['id']=$row['userId'];

	$_SESSION['fname']=$row['firstName'];

	$_SESSION['lname']=$row['lastName'];

	$_SESSION['profile']=$row['img'];

	if ($_SESSION['id'] >= 0) {
		header("location: dash_teacher.php");
		
	}else{

		header("location: login.php");

	}

}else{

	header("location: login.php");

}

?>