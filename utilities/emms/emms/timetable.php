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

    <?php include_once 'include/style.php'; ?>

</head>

<body>

	<a href="dos_timetables.php" class="bi bi-x-lg btn btn-danger"></a>

	<center>

		<img src="images/logo.png" style="width: 40%;height: 150px;width =50%" class="mt-3">

	</center>

	<div class="container mt-3">

		<h4>Class: <span style="border-bottom: 3px dotted black;"><b>L3SOD</b></span></h4>

		<h4>Academic Year: <span style="border-bottom: 3px dotted black;"><b><?php echo date("Y") ?></b></span></h4>

		<h4>Term: <u><b><?php echo $term ?></b></u></h4>

		<div align="center">

			<a href="timetable.php?class=<?php echo $class ?>&term=1" class="btn btn-primary">Term 1</a>

			<a href="timetable.php?class=<?php echo $class ?>&term=2" class="btn btn-primary">Term 2</a>

			<a href="timetable.php?class=<?php echo $class ?>&term=3" class="btn btn-primary">Term 3</a>

		</div>

		<a href="timetable_print.php?class=<?php echo $class ?>&term=<?php echo $term ?>" class="btn btn-primary bi bi-printer-fill"> Print</a>

		<a href="timetable_edit.php?class=<?php echo $class ?>&term=<?php echo $term ?>" class="btn btn-secondary bi bi-pencil-square" style="float: right;"> Re-assign</a>

		<table class="ttable mt-2">

			<tr>

				<td>PERIOD</td>

				<td>MON</td>

				<td>TUE</td>

				<td>WED</td>

				<td>THUR</td>

				<td>FRI</td>

			</tr>



			<?php  

			$select = mysqli_query($con, "SELECT * FROM timetable WHERE class='{$class}' AND term='{$term}'");

			if (mysqli_num_rows($select)>0) {

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

			<?php }}else{echo "<tr><td colspan='6' align='center'>No subjects added to this term</td></tr>";} ?>



		</table>

	</div>

</body>

</html>

<?php }}else{header("location: admin.php");} ?>