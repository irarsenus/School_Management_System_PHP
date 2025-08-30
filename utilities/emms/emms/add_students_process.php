<?php  

include 'include/connect.php';

session_start();

if (isset($_SESSION['post'])) {

	if ($_POST['num']) {

		$num = $_POST['num'];

		for ($i=1; $i <= $num; $i++) { 

			$fname = strtoupper(mysqli_real_escape_string($con, $_POST[$i.'fname']));

			$lname = mysqli_real_escape_string($con, $_POST[$i.'lname']);

			$class = mysqli_real_escape_string($con, $_POST[$i.'class']);

			$gender = mysqli_real_escape_string($con, $_POST[$i.'gender']);

			$id = rand(100, 1000).$class.date("Y");

			$home = mysqli_real_escape_string($con, $_POST[$i.'town']);

			$contact = mysqli_real_escape_string($con, $_POST[$i.'number']);

			$admission = mysqli_real_escape_string($con, $_POST[$i.'year']);



			if ($class == 'S1' || $class == 'S2' || $class == 'S3') {

				$insert = mysqli_query($con, "INSERT INTO ol(studentId,firstName, lastName, class, gender, homeTown, contact, admission, conduct) VALUES('{$id}', '{$fname}', '{$lname}', '{$class}', '{$gender}', '{$home}', '{$contact}', '{$admission}', '35')");

				if ($insert) {

					header("location: students.php?class=$class&level=ol&succ=$num");

				}else{

					header("location: students.php?class=$class&level=ol&err");

				}

			}else{

				$insert = mysqli_query($con, "INSERT INTO al(studentId,firstName, lastName, class, gender, homeTown, contact, admission, conduct) VALUES('{$id}', '{$fname}', '{$lname}', '{$class}', '{$gender}', '{$home}', '{$contact}', '{$admission}', '35')");

				if ($insert) {

					header("location: students.php?class=$class&level=al&succ=$num");

				}else{

					header("location: students.php?class=$class&level=al&err");

				}

			}

		}

	}

}else{

	header("location: login.php");

}

?>