<?php 
include 'include/connect.php';
session_start();

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$img = $_SESSION['profile'];

$posterId = $_SESSION['id'];
$poster = $fname.' '.$lname;
$date = date("Y-m-d");
if (isset($_POST['post'])) {
	$post = mysqli_real_escape_string($con, $_POST['post']);
	
	$insert = mysqli_query($con, "INSERT INTO forum(posterId, poster, postDate, post, posterImg) VALUES('{$posterId}', '{$poster}', '{$date}', '{$post}', '{$img}')");
	if ($insert) {
		header("location: teacher_forum.php?succ");
	}else{
		header("location: teacher_forum.php?err");
	}
}
?>