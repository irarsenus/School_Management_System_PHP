<?php  
include 'include/connect.php';
session_start();

if (isset($_POST['announcement'])) {
	$ann = $_POST['announcement'];
	$date = date("Y-m-d");
	$post = $_SESSION['post'];

	$insert = mysqli_query($con, "INSERT INTO announcements(announcer, postDate, content) VALUES('{$post}', '{$date}', '{$ann}')");
	if ($insert) {
		header("location: dos_announcements.php?succ");
	}else{
		header("location: dos_announcements.php?err");
	}
}
?>