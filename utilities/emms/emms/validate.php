<?php  

include 'include/connect.php';



$class = $_GET['class'];

$level = $_GET['level'];

$term = $_GET['term'];

$tot = 0;

$ranking = 1;

$students = mysqli_query($con, "SELECT * FROM $level WHERE class='$class'");

while ($stdRow=mysqli_fetch_assoc($students)) {

	$student = $stdRow['studentId'];

	$marks = mysqli_query($con, "SELECT SUM(tot) FROM marks WHERE studentId='{$student}' AND term='{$term}'");

	$mrkRow=mysqli_fetch_assoc($marks);

	$tot = $mrkRow['SUM(tot)'];	

	// $update = mysqli_query($con, "UPDATE $level SET total_$term='{$tot}' WHERE studentId='{$student}'");

}

if (!empty($tot)) {

	$position=mysqli_query($con, "SELECT * FROM $level WHERE class='$class'");

	while ($posRow = mysqli_fetch_assoc($position)){

		$pos = $posRow['studentId'];

		$rank = mysqli_query($con, "UPDATE $level SET position_$term='$ranking' WHERE studentId='{$pos}' AND class='{$class}'");

		$ranking++;

	}

}



?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Validating positions</title>

	<?php include 'include/style.php'; ?>

</head>

<body onload="move()" class="bg-dark">

 <style>

.center {

	margin-top: 200px;

  display: flex;

  justify-content: center;

  align-items: center;

  height: 200px;

/*  border: 3px solid green;*/

}

#myProgress {

  width: 90vw;

  background-color: grey;

}



#myBar {

  width: 1%;

  height: 30px;

  background-color: orange;

}

</style>



<div class="container center">

  <div class="vertical-center mt-5">

  	<?php if ($rank) { ?>

  	<div id="myProgress">

	  <div id="myBar"></div>

	</div>

	<b class="text-white" style="float: right;" id="count">0%</b>

    <p align="center" class="text-white mt-3">Positioning students in <b><?php echo $class ?></b> (Term <?php echo $term ?>)</p>

	<?php }else{ ?>

	<h1 class="text-danger"><i class="bi-emoji-frown" class="text-center"></i> Positioning error<br>Sorry Positioning sequence didn't complete successfully!</h1>

	<br>

	<a href="marks.php?class=<?php echo $class; ?>&level=<?php echo $level ?>&term=<?php echo $term ?>" class="btn btn-warning" style="float: right;">Continue anyway</a>

	<?php } ?>

  </div>

</div>

<script type="text/javascript">

	var i = 0;

function move() {

  if (i == 0) {

    i = 1;

    var elem = document.getElementById("myBar");

    var count =document.getElementById('count');

    var width = 1;

    var id = setInterval(frame, 30);

    function frame() {

      if (width >= 100) {

        clearInterval(id);

        window.location.assign("marks.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=<?php echo $term ?>");

        i = 0;

      } else {

        width++;

        elem.style.width = width + "%";

      	count.innerHTML=width + "%";

      }

    }

  }

} 

</script>

</body>

</html>

