<?php  
include "include/connect.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
	$mname = mysqli_real_escape_string($con, $_POST['mname']);
	$teacher = mysqli_real_escape_string($con, $_POST['teacher']);
	$mhour = mysqli_real_escape_string($con, $_POST['mhour']);

	$moduleIdFetch = mysqli_query($con, "SELECT * FROM modules WHERE id='{$id}'");
    $moduleId = mysqli_fetch_assoc($moduleIdFetch);
    echo $moduleId['teacher'].'<br>';
    $moduleId = $moduleId['moduleId'];

    echo $_POST['teacher'];
    $updateModules = mysqli_query($con, "UPDATE modules SET module='{$mname}', teacher='{$teacher}', moduleHours='{$mhour}' WHERE moduleId='{$moduleId}'");
    $updatelst = mysqli_query($con, "UPDATE lstsubjects SET module='{$mname}', teacher='{$teacher}' WHERE moduleId='{$moduleId}'");

    if ($updateModules && $updatelst){
        header("location: modules.php?succ");
    }else{
        header("location: modules.php?err");
    }
}
?>