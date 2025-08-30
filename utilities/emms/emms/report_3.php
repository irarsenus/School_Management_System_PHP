<?php 
error_reporting(0); 
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
if ($_GET['id']) {
$studentId = $_GET['id'];
$level =$_GET['level'];
$select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
if (mysqli_num_rows($select)>0) {
$student=mysqli_fetch_assoc($select);	
$name = strtoupper($student['firstName']). ' '.$student['lastName'];	
$class= $student['class'];
$year = $student['admission'];
$level = $_GET['level'];
$term_1 = $student['position_1'];
$term_2 = $student['position_2'];
$term_3 = $student['position_3'];
$tot1 = $student['total_1'];
$tot2 = $student['total_2'];
$tot3 = $student['total_3'];
$students = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}'");
$total_students = mysqli_num_rows($students);
$conduct= $student['conduct'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $class ?>  •  <?php echo $name ?></title>
	<link rel="stylesheet" type="text/css" href="report.css">
	<link rel="icon" href="images/logo.png">
	<style>
		th, td {
  			border: 2px solid black;
  		}
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
				<img src="images/logo.png">
			</div>

			<div class="id">
				<p style="font-size: 15px; line-height: 10px;">Student Id: <b><?php echo $studentId ?></b></p>
				<p style="font-size: 15px; line-height: 10px;">NAMES: <b><?php echo $name ?></b></p>
				<p style="font-size: 15px; line-height: 10px;">Division: <b>A'level</b></p>
				<p style="font-size: 15px; line-height: 10px;">Class: <b><?php echo $class ?></b></p>
				<p style="font-size: 15px; line-height: 10px;">ACADEMIC YEAR: <b><?php echo $year ?></b></p>
			</div>
		</div>
		<center>
			<h1><b>STUDENT'S PROGRESSIVE SCHOOL REPORT</b></h1>
		</center>

		<table class="table">
			<tr>
				<th rowspan="2">MODULES NAME</th>
				<th colspan="3"><b>FIRST TERM</b></th>
				<th colspan="3"><b>SECOND TERM</b></th>
				<th colspan="3"><b>THIRD TERM</b></th>
				<th colspan="2"><b>ANNUAL DECISION</b></th>
			</tr>
			<tr>
				<td style="font-size: 12px;">TEST/40</td>
				<td style="font-size: 12px;">EXAM/60</td>
				<td style="font-size: 12px;">TOTAL</td>
				<td style="font-size: 12px;">TEST/40</td>
				<td style="font-size: 12px;">EXAM/60</td>
				<td style="font-size: 12px;">TOTAL</td>
				<td style="font-size: 12px;">TEST/40</td>
				<td style="font-size: 12px;">EXAM/60</td>
				<td style="font-size: 12px;">TOTAL</td>
				<td style="font-size: 12px;">ANNUAL</td>
				<td style="font-size: 12px;">GRADE</td>
			</tr>

			<?php  
			$select = mysqli_query($con, "SELECT * FROM lstsubjects WHERE class='{$class}'" );
			while ($row=mysqli_fetch_assoc($select)) {
				$abr=$row['abr'];
			?>
			<tr>
				<!-- module name -->
				<td><?php echo $row['module'] ?></td>

				<?php  
				$marks1 = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
				while ($term1=mysqli_fetch_assoc($marks1)){
				?>
				<!-- term 1 -->
				<td align="right"><?php echo $term1[$abr.'_cat_1'] ?></td>
				<td align="right"><?php echo $term1[$abr.'_ex_1'] ?></td>
				<td align="right"><?php echo $term1[$abr.'_tot_1'] ?></td>
				<?php }?>
				
				<!-- term 2 -->
				<?php  
				$marks2 = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
				while ($term2=mysqli_fetch_assoc($marks2)) {
				?>
				<td align="right"><?php echo $term2[$abr.'_cat_2'] ?></td>
				<td align="right"><?php echo $term2[$abr.'_ex_2'] ?></td>
				<td align="right"><?php echo $term2[$abr.'_tot_2'] ?></td>
				<?php } ?>

				<!-- term 3 -->
				<?php  
				$marks3 = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
				while ($term3=mysqli_fetch_assoc($marks3)) {
				?>
				<td align="right"><?php echo $term2[$abr.'_cat_3'] ?></td>
				<td align="right"><?php echo $term2[$abr.'_ex_3'] ?></td>
				<td align="right"><?php echo $term2[$abr.'_tot_3'] ?></td>
				<?php } ?>
				
				<!-- Annual -->
				<?php  
				$annualMarks = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$studentId}'");
				while ($annual=mysqli_fetch_assoc($annualMarks)) {
				?>
				<td align="right">
					<?php  
					$annualPer=$annual[$abr.'_tot_1']+$annual[$abr.'_tot_2']+$annual[$abr.'_tot_3']*100/300;
					echo round($annualPer, 2)."%"; 
					?>
				</td>
				<td align="right">
					<?php  
					if ($annualPer>=85) {
						echo "<b>A</b>";
					}elseif ($annualPer>=70) {
						echo "<b>B</b>";
					}elseif ($annualPer>65){
						echo "<b>C</b>";
					}elseif ($annualPer>50){
						echo "<b>D</b>";
					}else{
						echo "<b>F</b>";
					}
					?>
				</td>
				<?php } ?>	
			</tr>
			<?php } ?>
			<tr>
				<td><b>TOTAL</b></td>
				<!-- TERM 1 -->
				<td colspan="3" align="right">
					<?php
					if ($tot1>0) {
						echo $tot1;
					}
					?>
				</td>
				<td colspan="3" align="right">
					<?php
					if ($tot2>0) {
						echo $tot2;
					}
					?>
				</td>
				<td colspan="3" align="right">
					<?php
					if ($tot3>0) {
						echo $tot3;
					}
					?>
				</td>
				<td align="right" colspan="2"><?php echo $tot1+$tot2+$tot3 ?></td>	
			</tr>
			<tr>
				<td><b>PERCENTAGE</b></td>
				<td colspan="3" align="right">
					<?php
					$numOfSub1 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='1'");

					$numOfSub1 = mysqli_num_rows($numOfSub1);
					$sum1=$numOfSub1*100;
					$Per1=$tot1*100/$sum1;
					echo round($Per1, 2)."%";
					?>
				</td>
				<td colspan="3" align="right">
					<?php  
					$numOfSub2 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='2'");

					$numOfSub2 = mysqli_num_rows($numOfSub2);
					$sum2=$numOfSub2*100;
					if ($sum2!=0) {
						$Per2=$tot2*100/$sum2;
						echo round($Per2, 2)."%";
					}
					?>
				</td>
				<td colspan="3" align="right">
					<?php  
						$numOfSub3 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='3'");

					$numOfSub3 = mysqli_num_rows($numOfSub3);
					$sum3=$numOfSub3*100;
					if ($sum3!=0) {
						$Per3=$tot3*100/$sum3;
						echo round($Per3, 2)."%";
					}
					?>
				</td>
				<td align="right" colspan="2">
					<?php
					$numOfSubAnn = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}'") ;
					$ann = mysqli_num_rows($numOfSubAnn);
					$totTotal = $tot1+$tot2+$tot3; 
					echo $totTotal*100/($ann*100) .'%';
					?>
				</td>	
			</tr>
			<tr>
				<td><b>PLACE</b></td>
				<td colspan="3"><center><b><?php echo $term_1 ?></b> OUT OF <b><?php echo $total_students ?></b></center></td>
				<td colspan="3"><center>
					<?php  
					if (empty($term_2)) {				
					?>
					<b></b> OUT OF <b></b>
					<?php }else{ ?>
					<b><?php echo $term_2 ?></b> OUT OF <b><?php echo $total_students ?></b>
					<?php } ?>
				</center></td>
				<td colspan="3"><center>
					<?php  
					if (empty($term_3)) {				
					?>
					<b></b> OUT OF <b></b>
					<?php }else{ ?>
					<b><?php echo $term_3 ?></b> OUT OF <b><?php echo $total_students ?></b>
					<?php } ?>
				</center></td>

				<td></td>
				<td></td>
			</tr>
				<tr>
				<td><b>CONDUCT</b></td>
				<td colspan="3"><b><center><?php echo $conduct ?> / 40</center></b></td>
				<td colspan="3"><b><center><?php echo $conduct ?> / 40</center></b></td>
				<td colspan="3"><b><center><?php echo $conduct ?> / 40</center></b></td>
				<td align="center"><b><?php echo $conduct*3; ?></b></td>
				<td></td>
			</tr>
				<tr>
				<td><b>TEACHER'S COMMENT AND SIGNATURE</b></td>
				<td colspan="3"></td>
				<td colspan="3"></td>
				<td colspan="3"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<div class="container">
			<div class="decision">
				<p><b><u>SCHOOL DECISION</u></b></p>
				<p><b>PROMOTED</b> <span style="padding:4px 50px; border:3px solid; margin-left:20px;"></span></p>
				<p><b>REPEATED</b><span style="padding:4px 50px; border:3px solid; margin-left:29px;"></span></p>
				<p><b>EXPLASION</b><span style="padding:4px 50px; border:3px solid; margin-left:20px;"></span></p>
			</div>
			<div class="footer">
				<p style="margin-left: -50px;">ON <u><?php echo date("d") ?></u>/<u><?php echo date("m") ?></u>/<u><?php echo date("Y") ?></u></p>
				<p style="margin-left: -80px;"><b><u>HEAD TEACHER</u></b></p>
				<p style="margin-left: -60px;"><b>....................</b></p>
				<p style="margin-left: -70px;"><b>signature & stamp</b></p>
			</div>
		</div>
</fieldset>
<script>
print();
// window.location.assign("marks.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=<?php echo $term ?>");
</script>
</body>
</html>
<?php }else{header("location: admin_dash_dos.php");}}else{header("location: admin_dash_dos.php");}}else{header("location: admin.php");} ?>