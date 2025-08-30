<?php  
include 'include/connect.php';
session_start();
$user =$_SESSION['id'];
if ($_SESSION['id']) {
	if (isset($_POST['update'])) {
		// $profile = mysqli_real_escape_string($con, $_POST['profile']);
		$fname = mysqli_real_escape_string($con, $_POST['fname']);
		$lname = mysqli_real_escape_string($con, $_POST['lname']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pswd = mysqli_real_escape_string($con, $_POST['pswd']);
		$year = mysqli_real_escape_string($con, $_POST['joinYear']);
		$number = mysqli_real_escape_string($con, $_POST['number']);
		$id = mysqli_real_escape_string($con, $_POST['idNumber']);
		$diploma = mysqli_real_escape_string($con, $_POST['diploma']);
		$gender = mysqli_real_escape_string($con, $_POST['gender']);
		$department = mysqli_real_escape_string($con, $_POST['department']);

		$imageName = $_FILES['profile']['name'];
		if (!empty($imageName)) {
			$imageType = $_FILES['profile']['type'];
			$ext = explode(".", $imageName);
			$ext = strtolower(end($ext));
			$formats = array('jpg', 'png', 'gif', 'jpeg');
			if (in_array($ext, $formats)) {
				if (empty($id)) {
					$img = rand().'.'.$ext;
				}else{
					$img = $id.'.'.$ext;
				}
				unlink($img);
				move_uploaded_file($_FILES['profile']['tmp_name'], "profiles/$img");

				$update = mysqli_query($con, "UPDATE staff SET firstName='{$fname}', lastName='{$lname}', email='{$email}', year='{$year}', phone='{$number}', diploma='{$diploma}', department='{$department}', gender='{$gender}', userId='{$id}', password='{$pswd}', img='{$img}' WHERE userId='{$user}'");
				if ($update) {
					$_SESSION['profile']=$img;
					header("location: dash_teacher.php?succ");
				}else{
					header("location: dash_teacher.php?err");
				}
			}else{	
				header("location: dash_teacher.php?succ");
			}
		}else{
			$update = mysqli_query($con, "UPDATE staff SET firstName='{$fname}', lastName='{$lname}', email='{$email}', year='{$year}', phone='{$number}', diploma='{$diploma}', department='{$department}', gender='{$gender}', userId='{$id}', password='{$pswd}' WHERE userId='{$user}'");
			$module = mysqli_query($con, "UPDATE modules SET teacher='{$id}' WHERE userId='{$user}'");
			if ($update) {
				header("location: dash_teacher.php?succ");
			}else{
				header("location: dash_teacher.php?err");
			}
		}
	}
}else{
	header("location: login.php");
}

?>