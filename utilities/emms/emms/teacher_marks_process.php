<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'include/connect.php';  
session_start();
if ($_SESSION['id']) {
	if (isset($_POST['upd'])) {
		$num = mysqli_real_escape_string($con, $_POST['num']);
		$subjectId = mysqli_real_escape_string($con, $_POST['subject']);
		$term = mysqli_real_escape_string($con, $_POST['term']);

		$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subjectId}'");
		$subject = mysqli_fetch_assoc($subject);
		$level = $subject['level'];
		$subId = $subject['moduleId'];
		$subject = $subject['abr'];

		for ($i=1; $i <= $num; $i++) { 
			$student = mysqli_real_escape_string($con, $_POST[$i.'student']);
			$cat = mysqli_real_escape_string($con, $_POST[$i.'cat']);
			$ex = mysqli_real_escape_string($con, $_POST[$i.'ex']);
			
			$evidence = $_FILES[$i.'evidence']['name'];
			$ext = strtolower(pathinfo($evidence,PATHINFO_EXTENSION));
			$name = rand(100, 1000).$ext.rand(10, 100).'.'.$ext;
			$upload = move_uploaded_file($_FILES[$i.'evidence']['tmp_name'] , "marks/$name");

			// echo $evidence;
			// echo "<br>";
			
			$tot = $cat+$ex;
			if ($cat > 40 || $ex > 60) {
				echo "<script>alert('The marks you entered exceed the expacted ones for $student');</script>";
			}else{

			$evidence_sql = empty($evidence) ? "NULL" : "'$name'";

			$update = mysqli_query($con, "UPDATE $level SET $subject"."_cat"."_$term='{$cat}', $subject"."_ex"."_$term='{$ex}', $subject"."_tot"."_$term='{$tot}' WHERE studentId='{$student}'");
			$update = mysqli_query($con, "UPDATE marks SET evidence = IFNULL($evidence_sql, evidence) WHERE studentId='{$student}' AND moduleId='{$subId}'");
			echo mysqli_error($con);

			
			$verify = mysqli_query($con, "SELECT * FROM marks WHERE studentId='{$student}' AND moduleId='{$subId}' AND tot='{$tot}'");
			
			if (mysqli_num_rows($verify)<=0) {
				$verify2 = mysqli_query($con, "SELECT * FROM marks WHERE studentId='{$student}' AND moduleId='{$subId}'");
				if (mysqli_num_rows($verify2)==0) {
					$insert = mysqli_query($con, "INSERT INTO marks(studentId, moduleId, level, term, tot, evidence) VALUES('{$student}', '{$subId}', '{$level}', '{$term}','{$tot}', '{$name}')");
					// header("location: teacher_dash.php?subject=$subId&term=$term&succ");
				}else{
					$insert = mysqli_query($con, "UPDATE marks SET tot='$tot' WHERE studentId='{$student}' AND moduleId='{$subId}'");
				}
			}
			
			if ($update) {
				header("location: teacher_dash.php?subject=$subId&term=$term&succ");
			}else{
				// header("location: teacher_dash.php?subject=$subId&term=$term&err");
			}
		}
	}
	}
}else{
	header("location: login.php");
}
?>