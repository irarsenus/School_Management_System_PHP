<?php include_once 'include/connect.php' ?>
<?php if(isset($_GET['subject'])){ ?>
<?php  
$subject=$_GET['subject'];
$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subject}'");
$subject = mysqli_fetch_assoc($subject);
$class = $subject['class'];
$abr = $subject['abr'];
$subId = $subject['moduleId'];
$level = $subject['level'];
$term = $subject['term'];
$subject = $subject['module'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $class.' • '. $subject ?></title>
	<?php include_once 'include/style.php'; ?>
	<style type="text/css">
		table{
			width: 100%;
		}
		#table, td, th{
			border: 2px solid black;
		}
		th{
			font-size: 20px;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
	print();
	setTimeout(mellow, 3000);
	function mellow(){
		window.location.assign("teacher_dash.php?subject=<?php echo $subId ?>&term=<?php echo $term ?>");
	}
	</script>
	<div class="container-fluid mt-5">
	<img src="images/poster.jpg" style="width: 100%">
	<h3 align="center"><u>Term <?php echo $term ?> <b><?php echo $subject ?></b>( <?php echo $class ?> )</u></h3>
	<table id="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Student Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>CAT <b> /40</b></th>
				<th>EXAM <b> /60</b></th>
				<th>TOTAL <b> /100</b></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$count = 0; 
			$select = mysqli_query($con, "SELECT * FROM $level WHERE class='$class' ORDER BY firstName ASC");
			while ($row = mysqli_fetch_assoc($select)) {
			?>
			<tr>
				<td><?php echo ++$count; ?></td>
				<td><?php echo $row['studentId'] ?></td>
				<td><?php echo $row['firstName'] ?></td>
				<td><?php echo $row['lastName'] ?></td>
				<td><?php echo $row['gender'] ?></td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_cat_'.$term];
					?>
				</td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_ex_'.$term];
					?>
				</td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_tot_'.$term];
					?>
				</td>
			</tr>
			<?php } ?>
		</tbody>	
	</table>
	</div>
</body>
</html>
<?php }else{header("location: subject_select.php");} ?><?php include_once 'include/connect.php' ?>
<?php if(isset($_GET['subject'])){ ?>
<?php  
$subject=$_GET['subject'];
$subject = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$subject}'");
$subject = mysqli_fetch_assoc($subject);
$class = $subject['class'];
$abr = $subject['abr'];
$subId = $subject['moduleId'];
$level = $subject['level'];
$term = $subject['term'];
$subject = $subject['module'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $class.' • '. $subject ?></title>
	<?php include_once 'include/style.php'; ?>
	<style type="text/css">
		table{
			width: 100%;
		}
		#table, td, th{
			border: 2px solid black;
		}
		th{
			font-size: 20px;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
	print();
	setTimeout(mellow, 3000);
	function mellow(){
		window.location.assign("teacher_dash.php?subject=<?php echo $subId ?>&term=<?php echo $term ?>");
	}
	</script>
	<div class="container-fluid mt-5">
	<img src="images/poster.jpg" style="width: 100%">
	<h3 align="center"><u>Term <?php echo $term ?> <b><?php echo $subject ?></b>( <?php echo $class ?> )</u></h3>
	<table id="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Student Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>CAT <b> /40</b></th>
				<th>EXAM <b> /60</b></th>
				<th>TOTAL <b> /100</b></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$count = 0; 
			$select = mysqli_query($con, "SELECT * FROM $level WHERE class='$class' ORDER BY firstName ASC");
			while ($row = mysqli_fetch_assoc($select)) {
			?>
			<tr>
				<td><?php echo ++$count; ?></td>
				<td><?php echo $row['studentId'] ?></td>
				<td><?php echo $row['firstName'] ?></td>
				<td><?php echo $row['lastName'] ?></td>
				<td><?php echo $row['gender'] ?></td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_cat_'.$term];
					?>
				</td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_ex_'.$term];
					?>
				</td>
				<td align="right" style="font-size: 20px;">
					<?php  
					echo $row[$abr.'_tot_'.$term];
					?>
				</td>
			</tr>
			<?php } ?>
		</tbody>	
	</table>
	</div>
</body>
</html>
<?php }else{header("location: subject_select.php");} ?>