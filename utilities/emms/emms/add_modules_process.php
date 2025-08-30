<?php  
error_reporting(0);
include 'include/connect.php';
session_start();
$id='';
if (isset($_SESSION['post'])) {
	if ($_POST['num']) {
		$num = $_POST['num'];
		for ($i=1; $i <= $num; $i++) { 
			$name = strtoupper(mysqli_real_escape_string($con, $_POST[$i.'mname']));
			$abr = strtoupper(mysqli_real_escape_string($con, $_POST[$i.'abr']));
			$teacher = mysqli_real_escape_string($con, $_POST[$i.'teacher']);
			$class = mysqli_real_escape_string($con, $_POST[$i.'class']);
			$hours = mysqli_real_escape_string($con, $_POST[$i.'hours']);
			$term = mysqli_real_escape_string($con, $_POST[$i.'term']);
			// $idVerify = mysqli_query($con, "SELECT * FROM modules WHERE abr='{$abr}'");
			$id=rand(10,50).$abr.rand(100,1000);

			if ($class == 'S1' || $class == 'S2' || $class == 'S3') {
				$cat = mysqli_query($con, "ALTER TABLE ol ADD ".$abr."_cat_$term int(255) NOT NULL");
				$ex = mysqli_query($con, "ALTER TABLE ol ADD ".$abr."_ex_$term int(255) NOT NULL");
				$tot = mysqli_query($con, "ALTER TABLE ol ADD ".$abr."_tot_$term int(255) NOT NULL");
				$insert = mysqli_query($con, "INSERT INTO modules(moduleId, module,abr, class, teacher, level, moduleHours, term) VALUES('{$id}', '{$name}', '{$abr}', '{$class}', '{$teacher}', 'ol', '{$hours}', '{$term}')");
                $lst = mysqli_query($con, "INSERT INTO lstsubjects(moduleId, module, abr, class, level, teacher) VALUES('{$id}', '{$name}', '{$abr}', '{$class}', 'ol', '{$teacher}')");
				if ($insert) {
					header("location: modules.php?succ=$num");
				}else{
					header("location: modules.php?err");
				}
			}else{
				$cat = mysqli_query($con, "ALTER TABLE al ADD ".$abr."_cat_$term int(255) NOT NULL");
				$ex = mysqli_query($con, "ALTER TABLE al ADD ".$abr."_ex_$term int(255) NOT NULL");
				$tot = mysqli_query($con, "ALTER TABLE al ADD ".$abr."_tot_$term int(255) NOT NULL");
				$insert = mysqli_query($con, "INSERT INTO modules(moduleId, module,abr, class, teacher, level, moduleHours, term) VALUES('{$id}', '{$name}', '{$abr}', '{$class}', '{$teacher}', 'al', '{$hours}', '{$term}')");
				$lst = mysqli_query($con, "INSERT INTO lstsubjects(moduleId, module, abr, class, level, teacher) VALUES('{$id}', '{$name}', '{$abr}', '{$class}', 'al', '{$teacher}')");

				if ($insert) {
					header("location: modules.php?succ=$num");
				}else{
					header("location: modules.php?err");
				}
			}
		}
	}
}else{
	header("location: login.php");
}
?>