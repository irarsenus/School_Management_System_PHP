<?php 
include 'include/connect.php';
session_start();


if (isset($_POST['post'])) {
	$poster = mysqli_real_escape_string($con, $_POST['parent']);
	$posterId = rand();
	$date = date("Y-m-d");
	$post = mysqli_real_escape_string($con, $_POST['post']);
	
	$insert = mysqli_query($con, "INSERT INTO forum(posterId, poster, postDate, post, posterImg) VALUES('{$posterId}', '{$poster}', '{$date}', '{$post}', 'unkown.webp')");
	if ($insert) {
		header("location: parent_forum.php?succ");
	}else{
		header("location: parent_forum.php?err");
	}
}
?>