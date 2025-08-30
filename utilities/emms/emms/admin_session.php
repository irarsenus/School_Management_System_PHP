<?php
include_once 'include/connect.php';  
session_start();
if (isset($_GET['role'])) {
	$post = strtoupper($_GET['role']);

	$select = mysqli_query($con, "SELECT * FROM admnistration WHERE post = '$post'");
	$row = mysqli_fetch_assoc($select);

	$_SESSION['userName'] = $row['names'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['post'] = $row['post'];
	$post = strtolower($_SESSION['post']);
	header("location: admin_dash_$post.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Authenticating...</title>
	<?php include_once 'include/style.php'; ?>
</head>
<body>

</body>
</html>
<?php } ?>