<?php 
// error_reporting(0); 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
if ($_GET['id']) {
$studentId = $_GET['id'];
$level =$_GET['level'];
$term = $_GET['term'];
$select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
if (mysqli_num_rows($select)>0) {
$student=mysqli_fetch_assoc($select);	
$name = strtoupper($student['firstName']). ' '.$student['lastName'];	
$class= $student['class'];
$year = $student['admission'];
$level = $_GET['level'];
$position = $student['position_'.$term];
$total = $student['total_'.$term];
$students = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}'");
$total_students = mysqli_num_rows($students);
$conduct= $student['conduct'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $class ?>   •   <?php echo $name ?></title>
	<link rel="stylesheet" type="text/css" href="report.css">
	<style>
		th, td {
  border: 2px solid black;
	</style>
</head>
<body style="font-family: sans-serif;">
	<fieldset style="border: 2px solid black;">

		<div class="container">
			<div class="location">
				<p style="font-size: 12px; line-height: 10px;"><b>REPUBLIC OF RWANDA</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>MINEDUC</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>PROVINCE:KIGALI CITY</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>DISTRICT:KICUKIRO</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>SCHOOL NAME:COMFORT PRIMARY SCHOOL</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>P.O.BOX 3806</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>TEL:0784605269</b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>E-mail:20niyirindasteven@gmail.com</b></p>
			</div>

			<div class="logo">
				<img src="logo.png">
			</div>

			<div class="id">
				<p style="font-size: 12px; line-height: 10px;"><b>StudentId: <?php echo $studentId ?></b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>NAMES: <?php echo $name ?></b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>Class: <?php echo $class; ?></b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>Division: <?php 
				if ($level == 'al') {
					echo "A'Level";
				}else{
					echo "O'Level";

				}
				 ?></b></p>
				<p style="font-size: 12px; line-height: 10px;"><b>ACADEMIC YEAR: <?php echo date("Y") ?></b></p>
			</div>
		</div>
		<center>
			<h1><b>STUDENT'S PROGRESSIVE SCHOOL REPORT</b></h1>
		</center>

		<table class="table">
			<tr>
				<th rowspan="2">MODULES NAME</th>
				<th colspan="3"><b>FIRST TERM</b></th>
				<th colspan="2"> PERCENTAGE</th>
			</tr>
			<tr>
				<td style="font-size: 14px;">TEST/40</td>
				<td style="font-size: 14px;">EXAM/60</td>
				<td style="font-size: 14px;">TOTAL</td>
				<td style="width: 5%" align="center">%</td>
				<td style="width: 1px" align="center">GRADE</td>

			</tr>
			<?php  
			$modules = mysqli_query($con, "SELECT * FROM lstsubjects WHERE class='{$class}'");
			while ($row = mysqli_fetch_assoc($modules)) {
				$abr=$row['abr'];
				$marks = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
				$data = mysqli_fetch_assoc($marks);
			?>
			<tr>
				<td><?php echo $row['module'] ?></td>
				<td align="center">
					<?php
					if ($data[$abr.'_cat_'.$term] < 20) {
						echo "<u>".$data[$abr.'_cat_'.$term]."</u>";
					}else{
						echo $data[$abr.'_cat_'.$term];
					}
					?>
				</td>
				<td align="center">
					<?php
					if ($data[$abr.'_ex_'.$term] < 30) {
						echo "<u>".$data[$abr.'_ex_'.$term]."</u>";
					}else{
						echo $data[$abr.'_ex_'.$term];
					}
					?>
				</td>
				<td align="center">
					<?php  
					echo $data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term];
					?>
				</td>
				<td align="center">
					<?php
					if ($data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term] < 50) {
						echo "<u>".$data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term].'%</u>';
					}else{
						echo $data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term].'%';
					}  
					?>
				</td>
				<td align="center">
					<?php  
					$tot = $data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term];
					if ($tot >= 85) {
						echo "<b>A</b>";
					}elseif ($tot >= 75) {
						echo "<b>B</b>";
					}elseif ($tot >= 60) {
						echo "<b>C</b>";
					}elseif ($tot >= 50) {
						echo "<b>D</b>";
					}else{
						echo "<b>F</b>";
					}
					?>
				</td>
			</tr>
			<?php } ?>

			<tr>
				<td><b>TOTAL</b></td>
				<td colspan="5" align="center"><?php echo $total ?></td>
			</tr>
				<tr>
				<td><b>PERCENTAGE</b></td>
				<td colspan="3" align="center">
					<?php  
					$numOfSubjects = mysqli_query($con, "SELECT * FROM modules WHERE class ='{$class}' AND term='{$term}'");
					$num = mysqli_num_rows($numOfSubjects);
					$perc = $total * 100/($num*100);
					echo round($perc, 2).'%';
					?>
				</td>
				<td align="center" colspan="2">
					<?php  
					$tot = $data[$abr.'_cat_'.$term]+$data[$abr.'_ex_'.$term];
					if ($tot >= 80) {
						echo "<b>A</b>";
					}elseif ($tot >= 75) {
						echo "<b>B</b>";
					}elseif ($tot >= 60) {
						echo "<b>C</b>";
					}elseif ($tot >= 50) {
						echo "<b>D</b>";
					}else{
						echo "<b>F</b>";
					}
					?>
				</td>				
			</tr>
				<tr>
				<td><b>PLACE</b></td>
				<td colspan="3"><center><b><?php echo $position; ?></b> OUT OF <b><?php  
				$numOfStudents = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}'");
				echo mysqli_num_rows($numOfStudents);
			?></b></center></td>
				<td colspan="2" bgcolor="grey"></td>
			</tr>
				<tr>
				<td><b>CONDUCT</b></td>
				<td colspan="3"><b><center><?php echo $conduct ?> / 40</center></b></td>
				<td colspan="2" bgcolor="grey"></td>
				
				<tr>
				<td><b>TEACHER'S COMMENT AND SIGNATURE</b></td>
				<td colspan="3"></td>
				<td colspan="2" bgcolor="grey"></td>

				
			</tr>
		</table>
		<div class="container">
			<div class="footer">
				<p>ON <u><?php echo date("d") ?></u>/<u><?php echo date("m") ?></u>/<u><?php echo date("Y") ?></u></p>
				<p><b>HEAD TEACHER</b></p>
				<p><b>.............</b></p>
				<p><b>signature & stamp</b></p>
			</div>
		</div>
</fieldset>
<script>
print();
// window.location.assign("marks.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=<?php echo $term ?>");
</script>
</body>
</html>
<?php }}} ?>