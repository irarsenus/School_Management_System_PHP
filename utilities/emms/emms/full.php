<form action="" method="post">
	Enter Names:<br>
	<?php 
	$num = $_GET['num'];

	for ($i=1; $i <= $num; $i++) { 
	?>
	<input type="text" name="<?php echo $i.'name' ?>"><br><br>
	<input type="hidden" name="num" value="<?php echo $num; ?>">
	<?php } ?>
	<input type="submit" name="ins" value="   save   ">
</form>
<?php  
if (isset($_POST['ins'])) {
	$con = mysqli_connect("localhost", "root", "", "test");

	$num = $_POST['num'];
	for ($i=1; $i <= $num; $i++) { 
		$name = $_POST[$i."name"];
		echo $name;
		echo "<br>";
		$ins = mysqli_query($con, "INSERT INTO names(users) VALUES('$name')");
		if ($ins) {
			echo "Students added successfully!";
		}else{
			echo "Operation failed";
		}
	}
}
?>