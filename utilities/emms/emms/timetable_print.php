<?php  
error_reporting(0);
include_once 'include/connect.php';
session_start();
if ($_SESSION['post']) {
	if (isset($_GET['class'])) {
		$class = $_GET['class'];
		$term = $_GET['term'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Timetable  •  Term <?php echo $term ?>  •  <?php echo $class; ?></title>
    <style>
    	table, th, td{
    		border: 2px solid;
    	}
    	.ttable{
    		width: 100%;
    		border-collapse: collapse;
    	}
    	.ttable td{
    		padding: 7px;
    	}
    </style>
</head>
<body>
	<center>
		<img src="images/poster.jpg" style="width: 90%;height: 200px;" class="mt-3">
	</center>
	<div class="container mt-3">
		<h4>Class: <span style="border-bottom: 3px dotted black;"><b>L3SOD</b></span></h4>
		<h4>Academic Year: <span style="border-bottom: 3px dotted black;"><b><?php echo date("Y") ?></b></span></h4>
		<h4>Term: <u><b><?php echo $term ?></b></u></h4>
		
		<table class="ttable" style="margin: 2px;">
			<tr>
				<td>PERIOD</td>
				<td>MON</td>
				<td>TUE</td>
				<td>WED</td>
				<td>THUR</td>
				<td>FRI</td>
			</tr>

			<?php  
			$select = mysqli_query($con, "SELECT * FROM timetable WHERE class='{$class}'");
			while ($row = mysqli_fetch_assoc($select)) {
			?>
			<tr>
				<td><?php echo $row['stime'] ?> - <?php echo $row['etime'] ?></td>	
				<td>
					<?php  
					$subId = $row['mon'];
					$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subId}'");
					$sub = mysqli_fetch_assoc($subject);
					echo $sub['abr'];
					$teachId = $sub['teacher'];
					$teach = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teachId}'");
					$teacher = mysqli_fetch_assoc($teach);
					$t = $teacher['firstName'].' '.$teacher['lastName'];
					echo "<span style='float: right;font-size: 10px'>$t</span>";
					?>
				</td>	
				<td>
					<?php  
					$subId = $row['tue'];
					$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subId}'");
					$sub = mysqli_fetch_assoc($subject);
					echo $sub['abr'];
					$teachId = $sub['teacher'];
					$teach = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teachId}'");
					$teacher = mysqli_fetch_assoc($teach);
					$t = $teacher['firstName'].' '.$teacher['lastName'];
					echo "<span style='float: right;font-size: 10px'>$t</span>";
					?>
				</td>	
				<td>
					<?php  
					$subId = $row['wed'];
					$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subId}'");
					$sub = mysqli_fetch_assoc($subject);
					echo $sub['abr'];
					$teachId = $sub['teacher'];
					$teach = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teachId}'");
					$teacher = mysqli_fetch_assoc($teach);
					$t = $teacher['firstName'].' '.$teacher['lastName'];
					echo "<span style='float: right;font-size: 10px'>$t</span>";
					?>
				</td>	
				<td>
					<?php  
					$subId = $row['thur'];
					$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subId}'");
					$sub = mysqli_fetch_assoc($subject);
					echo $sub['abr'];
					$teachId = $sub['teacher'];
					$teach = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teachId}'");
					$teacher = mysqli_fetch_assoc($teach);
					$t = $teacher['firstName'].' '.$teacher['lastName'];
					echo "<span style='float: right;font-size: 10px'>$t</span>";
					?>
				</td>	
				<td>
					<?php  
					$subId = $row['fri'];
					$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subId}'");
					$sub = mysqli_fetch_assoc($subject);
					echo $sub['abr'];
					$teachId = $sub['teacher'];
					$teach = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teachId}'");
					$teacher = mysqli_fetch_assoc($teach);
					$t = $teacher['firstName'].' '.$teacher['lastName'];
					echo "<span style='float: right;font-size: 10px'>$t</span>";
					?>
				</td>	
			</tr>
			<?php } ?>

		</table>
	</div>
	<script>
		print();
		window.location.assign("timetable.php?class=<?php echo $class ?>&term=<?php echo $term ?>")
	</script>
</body>
</html>
<?php }}else{header("location: admin.php");} ?>