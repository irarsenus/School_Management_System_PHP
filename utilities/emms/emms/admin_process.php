<?php  
include_once 'include/connect.php';;
if (isset($_POST['login'])) {
	$post = mysqli_real_escape_string($con, $_POST['post']);
	$pswd = mysqli_real_escape_string($con, $_POST['pswd']);

	$role =strtolower($post);

	$select = mysqli_query($con, "SELECT * FROM admnistration WHERE post='{$post}'");
	if (mysqli_num_rows($select) > 0) {
		$row = mysqli_fetch_assoc($select);
		if ($post==$row['post'] && $pswd==$row['password']) {
			header("location: admin_session.php?role=$role");
		}else{
			header("location: admin.php?err");
		}
	}else{
        header("location: admin.php?err");
    }
}

?>