<?php  
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
	<center>
		<img src="images/poster.jpg" style="width: 90%;height: 200px;" class="mt-3">
	</center>
	<div class="container mt-3">
		<h4>Class: <span style="border-bottom: 3px dotted black;"><b>L3SOD</b></span></h4>
		<h4>Academic Year: <span style="border-bottom: 3px dotted black;"><b><?php echo date("Y") ?></b></span></h4>
		<form method="post" action="timetable_process.php">
		<input type="hidden" name="class" value="<?php echo $class ?>">
		<input type="hidden" name="term" value="<?php echo $term ?>">
		<button type="submit" class="btn btn-secondary bi bi-upload" style="float: right;"> Submit</button>
		<br><br>
		<table class="ttable">
			<tr>
				<td style="width: 20%">PERIOD</td>
				<td>MON</td>
				<td>TUE</td>
				<td>WED</td>
				<td>THUR</td>
				<td>FRI</td>
			</tr>

			<?php  
			for ($i=1; $i <= 12; $i++) { 
			?>
			<input type="hidden" name="num" value="12">
			<tr>
				<td>
					<input type="time" name="<?php echo $i.'stime' ?>">  -  <input type="time" name="<?php echo $i.'etime' ?>">    
				</td>
				<td>
					<select name="<?php echo $i.'mon' ?>" class="form-control">
						<option value="">Subject</option>
						<option value="BREAK">BREAK</option>
						<option value="LUNCH">LUNCH</option>
						<?php 
						$select1 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term ='$term'");
						while ($mon = mysqli_fetch_assoc($select1)) {
						?>
						<option value="<?php echo $mon['moduleId'] ?>"><?php echo $mon['abr'] ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<select name="<?php echo $i.'tue' ?>" class="form-control">
						<option value="">Subject</option>
						<option value="BREAK">BREAK</option>
						<option value="LUNCH">LUNCH</option>
						<?php 
						$select2 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term ='$term'");
						while ($tue = mysqli_fetch_assoc($select2)) {
						?>
						<option value="<?php echo $tue['moduleId'] ?>"><?php echo $tue['abr'] ?></option>
						<?php } ?>
					</select>
				</td>

				<td>
					<select name="<?php echo $i.'wed' ?>" class="form-control">
						<option value="">Subject</option>
						<option value="BREAK">BREAK</option>
						<option value="LUNCH">LUNCH</option>
						<?php 
						$select3 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term ='$term'");
						while ($wed = mysqli_fetch_assoc($select3)) {
						?>
						<option value="<?php echo $wed['moduleId'] ?>"><?php echo $wed['abr'] ?></option>
						<?php } ?>
					</select>	
				</td>

				<td>
					<select name="<?php echo $i.'thur' ?>" class="form-control">
						<option value="">Subject</option>
						<option value="BREAK">BREAK</option>
						<option value="LUNCH">LUNCH</option>
						<?php 
						$select4 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term ='$term'");
						while ($thur = mysqli_fetch_assoc($select4)) {
						?>
						<option value="<?php echo $thur['moduleId'] ?>"><?php echo $thur['abr'] ?></option>
						<?php } ?>
					</select>
				</td>

				<td>
					<select name="<?php echo $i.'fri' ?>" class="form-control">
						<option value="">Subject</option>
						<option value="BREAK">BREAK</option>
						<option value="LUNCH">LUNCH</option>
						<?php 
						$select5 = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term ='$term'");
						while ($fri = mysqli_fetch_assoc($select5)) {
						?>
						<option value="<?php echo $fri['moduleId'] ?>"><?php echo $fri['abr'] ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<?php  
			}
			?>
		</table>
	</form>
	</div>
</body>
</html>
<?php }}else{header("location: admin.php");} ?>