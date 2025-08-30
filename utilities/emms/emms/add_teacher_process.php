<?php  

include 'include/connect.php';

if (isset($_POST['assign'])) {

	$idNumber = mysqli_real_escape_string($con, $_POST['idNumber']);

	if ($idNumber == 0) {

		$idNumber = rand();

	}

	$fname = strtoupper(mysqli_real_escape_string($con, $_POST['fname']));

	$lname = mysqli_real_escape_string($con, $_POST['lname']);

	$email = mysqli_real_escape_string($con, $_POST['email']);

	$phone = mysqli_real_escape_string($con, $_POST['number']);

	$year = mysqli_real_escape_string($con, $_POST['joinYear']);

	$pswd = rand(100, 1000).strtolower($lname).'ESSA@'.$year;

	$diploma = mysqli_real_escape_string($con, $_POST['diploma']);

	$gender = mysqli_real_escape_string($con, $_POST['gender']);

	$department = mysqli_real_escape_string($con, $_POST['department']);

	

	if ($gender == 'Male') {

		$insert = mysqli_query($con, "INSERT INTO staff(userId, firstName, lastName, email, password, phone, year, diploma, gender, department, img) values('{$idNumber}', '{$fname}', '{$lname}', '{$email}', '{$pswd}', '$phone', '{$year}', '{$diploma}', '{$gender}', '{$department}', 'default.png')");

	}elseif($gender == 'Female'){

		$insert = mysqli_query($con, "INSERT INTO staff(userId, firstName, lastName, email, password, phone, year, diploma, gender, department, img) values('{$idNumber}', '{$fname}', '{$lname}', '{$email}', '{$pswd}', '$phone', '{$year}', '{$diploma}', '{$gender}', '{$department}', 'default2.png')");

	}

	if ($insert) {

		header("location: add_teacher.php?succ&te=$idNumber");

	}else{

		header("location: add_teachers.php?err");

	}

}else{

	header("location: teachers.php");

}

?>