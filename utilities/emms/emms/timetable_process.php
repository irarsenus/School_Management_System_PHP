<?php  
include 'include/connect.php';
session_start();

if ($_SESSION['post']) {
	if (isset($_POST['num'])) {
		$num = $_POST['num'];
		$class = $_POST['class'];
		$term = $_POST['term'];

		for ($i=1; $i <= $num; $i++) { 
			$stime = mysqli_real_escape_string($con, $_POST[$i.'stime']);
			$etime = mysqli_real_escape_string($con, $_POST[$i.'etime']);
			$mon = mysqli_real_escape_string($con, $_POST[$i.'mon']);
			$tue = mysqli_real_escape_string($con, $_POST[$i.'tue']);
			$wed = mysqli_real_escape_string($con, $_POST[$i.'wed']);
			$thur = mysqli_real_escape_string($con, $_POST[$i.'thur']);
			$fri = mysqli_real_escape_string($con, $_POST[$i.'fri']);

			$verify = mysqli_query($con, "SELECT * FROM timetable WHERE stime='{$stime}' AND class = '{$class}'");
			if (mysqli_num_rows($verify)>0) {
				$update = mysqli_query($con, "UPDATE timetable SET mon='{$mon}', tue='{$tue}', wed='{$wed}', thur='{$thur}', fri='{$fri}' WHERE stime='{$stime}' AND class='{$class}'");
				if ($update) {
					header("location: dos_timetables.php?succ");
				}else{
					header("location: dos_timetables.php?err");
				}
			}else{
				$insert = mysqli_query($con, "INSERT INTO timetable(stime, etime, term, class, mon, tue, wed, thur, fri) VALUES('$stime', '$etime', '$term', '$class', '$mon', '$tue', '$wed', '$thur', '$fri')");
				if ($insert) {
					header("location: dos_timetables.php?succ");
				}else{
					header("location: dos_timetables.php?err");
				}
			}
		}
	}
}
?><?php  
include 'include/connect.php';
session_start();

if ($_SESSION['post']) {
	if (isset($_POST['num'])) {
		$num = $_POST['num'];
		$class = $_POST['class'];
		$term = $_POST['term'];

		for ($i=1; $i <= $num; $i++) { 
			$stime = mysqli_real_escape_string($con, $_POST[$i.'stime']);
			$etime = mysqli_real_escape_string($con, $_POST[$i.'etime']);
			$mon = mysqli_real_escape_string($con, $_POST[$i.'mon']);
			$tue = mysqli_real_escape_string($con, $_POST[$i.'tue']);
			$wed = mysqli_real_escape_string($con, $_POST[$i.'wed']);
			$thur = mysqli_real_escape_string($con, $_POST[$i.'thur']);
			$fri = mysqli_real_escape_string($con, $_POST[$i.'fri']);

			$verify = mysqli_query($con, "SELECT * FROM timetable WHERE stime='{$stime}' AND class = '{$class}'");
			if (mysqli_num_rows($verify)>0) {
				$update = mysqli_query($con, "UPDATE timetable SET mon='{$mon}', tue='{$tue}', wed='{$wed}', thur='{$thur}', fri='{$fri}' WHERE stime='{$stime}' AND class='{$class}'");
				if ($update) {
					header("location: dos_timetables.php?succ");
				}else{
					header("location: dos_timetables.php?err");
				}
			}else{
				$insert = mysqli_query($con, "INSERT INTO timetable(stime, etime, term, class, mon, tue, wed, thur, fri) VALUES('$stime', '$etime', '$term', '$class', '$mon', '$tue', '$wed', '$thur', '$fri')");
				if ($insert) {
					header("location: dos_timetables.php?succ");
				}else{
					header("location: dos_timetables.php?err");
				}
			}
		}
	}
}
?>