<?php  
include 'include/connect.php';
session_start();

if (isset($_GET['marks'])) {
	$exercise = $_GET['exercise'];
	$marks = $_GET['marks'];
	$student = $_SESSION['studentId'];

	$verify = mysqli_query($con, "SELECT * FROM leaderboard WHERE exercise='{$exercise}' AND student ='{$student}'");
	if (mysqli_num_rows($verify)==0) {
		$insert = mysqli_query($con, "INSERT INTO leaderboard(exercise, student, marks) VALUES('{$exercise}', '{$student}', '{$marks}')");
		if ($insert) {
			header("location: student_list_exercises.php?succ");
		}else{
			header("location: student_list_exercises.php?err=Failed to Insert Marks");
		}
	}else{
		header("location: student_list_exercises.php?err=Exercise is already done. Try another");
	}
}else{
	header("location: student_list_exercises.php");
}

?>