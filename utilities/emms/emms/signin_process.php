<?php  

include 'include/connect.php';

if (isset($_POST['login'])) {



	$email = mysqli_real_escape_string($con, $_POST['email']);;

	$pswd = mysqli_real_escape_string($con, $_POST['pswd']);



	$staff = mysqli_query($con, "SELECT * FROM staff WHERE email='{$email}'");

	if (mysqli_num_rows($staff) > 0) {

		$row = mysqli_fetch_assoc($staff);

		if ($pswd == $row['password']) {
			// echo "mellow";
			header("location: session.php?te=$email");
			
		}else{
			
			header("location: login.php?err");

		}

	}else{

		header("location: login.php?err");

	}

}else{

	header("location: login.php?err");

}

?>