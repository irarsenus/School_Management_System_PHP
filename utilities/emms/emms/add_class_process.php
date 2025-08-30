<?php  

include 'include/connect.php';

session_start();

if (isset($_SESSION['post'])) {

	if ($_POST['class']) {

		$class = strtoupper(mysqli_real_escape_string($con, $_POST['class']));

		$division = mysqli_real_escape_string($con, $_POST['division']);

		$teacher = mysqli_real_escape_string($con, $_POST['teacher']);

		$monitor = mysqli_real_escape_string($con, $_POST['monitor']);

		$monitress = mysqli_real_escape_string($con, $_POST['monitress']);

		$monitress = mysqli_real_escape_string($con, $_POST['monitress']);
		



		$insert = mysqli_query($con, "INSERT INTO classes(class, division, teacher, monitor, monitress) VALUES('{$class}', '{$division}', '{$teacher}', '{$monitor}', '{$monitress}')");

		if ($insert) {

			header("location: add_class.php?succ=$class");

		}else{

			header("location: add_class.php?err");

		}

	}else{

		header("location: add_class.php");

	}

}else{

	header("location: admin.php");

}

?>