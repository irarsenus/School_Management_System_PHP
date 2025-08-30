<?php include_once 'include/connect.php' ?>
<?php if(isset($_GET['class'])){$level=$_GET['level'] ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_GET['class'] ?></title>
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
	print("class_del.php");
	setTimeout(mellow, 3000);
	function mellow(){
		window.location.assign("students.php?class=<?php echo $_GET['class'] ?>&level=<?php echo $level ?>")
	}
	</script>
	<div class="container-fluid mt-5">
	<img src="images/poster.jpg" style="width: 100%">
	<h3 align="center"><u>List of students in <?php echo $_GET['class'] ?></u></h3>
	<b>M: </b><span>
		<?php  
		$class = $_GET['class'];
		$male = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' AND gender='Male'");
		echo mysqli_num_rows($male);
		?>
		&nbsp;&nbsp;
		<b>F: </b><span>
		<?php  
		$class = $_GET['class'];
		$female = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' AND gender='Female'");
		echo mysqli_num_rows($female);
		?>
	</span>
	</span>
	<table id="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Student Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
				<th style="width: 3%"></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$class=$_GET['class'];
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
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?php } ?>
		</tbody>	
	</table>
	</div>
</body>
</html>
<?php }else{header("location: students_select.php");} ?>