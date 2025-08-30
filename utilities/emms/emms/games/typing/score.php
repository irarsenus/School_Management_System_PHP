<?php  
include '../../include/connect.php';
session_start();

if ($_SESSION['userId']) {
	if (isset($_POST['submit'])) {
		$score = $_POST['score'];
		if (empty($score)) {
			$score = 0;
		}else{
			$sql = mysqli_query($con, "SELECT * FROM users WHERE userId={$_SESSION['userId']}");
			$row = mysqli_fetch_assoc($sql);
			if ($row['typing_speed'] > $score) {
				echo "<script>alert'(You last score was ".$row['typing_speed']." and now you scored $score');alert('Better luck next time');</script>";
			}else{
				$score_update = mysqli_query($con, "UPDATE users SET typing_speed='$score' WHERE userId={$_SESSION['userId']}");
				if ($score_update) {
					echo "<script>alert('Congrats your score has improved to $score from ".$row['typing_speed']."');window.location.assign('../../tools.php')</script>";					
				}
			}

		}
	}
}else{
	header("location: login.php");
}
?>