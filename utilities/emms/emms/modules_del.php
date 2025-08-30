<?php 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$data = mysqli_query($con, "SELECT * FROM modules WHERE id='{$id}'");
		$row = mysqli_fetch_assoc($data);
		$moduleId = $row['moduleId'];
		$level = $row['level'];
		$abr=$row['abr'];
		$term=$row['term'];
		$cat = mysqli_query($con, "ALTER TABLE $level DROP COLUMN ".$abr."_cat_$term");
		$ex = mysqli_query($con, "ALTER TABLE $level DROP COLUMN ".$abr."_ex_$term");
		$tot = mysqli_query($con, "ALTER TABLE $level DROP COLUMN ".$abr."_tot_$term");
		$del = mysqli_query($con, "DELETE FROM modules WHERE id='{$id}'");
		$del = mysqli_query($con, "DELETE FROM marks WHERE moduleId='{$moduleId}'");
        $verify = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$moduleId}'");
        if(mysqli_num_rows($verify)<=0){
            $select = mysqli_query($con, "SELECT * FROM lstsubjects WHERE moduleId='{$moduleId}'");
            $id = mysqli_fetch_assoc($select);
            $id = $id['id'];
            $del = mysqli_query($con, "DELETE FROM lstsubjects WHERE id='{$id}'");
			echo mysqli_num_rows($verify);
        }
		if ($del) {
			header("location: modules.php?succ");            
		}else{
			header("location: modules.php?err");
		}
	} 
}
?>