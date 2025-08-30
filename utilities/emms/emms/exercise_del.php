<?php  
include 'include/connect.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$del = mysqli_query($con, "DELETE FROM exercises WHERE exerciseId='{$id}'");
	if ($del) {
		unlink('questions/'.$id.'.js');
		header("location: teacher_exercise_select.php");
	}

}
?>