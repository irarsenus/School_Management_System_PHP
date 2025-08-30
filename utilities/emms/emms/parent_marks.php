<?php  

include 'include/connect.php';

error_reporting(0);



if (isset($_GET['id'])) {

	$id = mysqli_real_escape_string($con, $_GET['id']);

	$level = $_GET['level'];

	$ter = $_GET['term'];

	$select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");

	if (mysqli_num_rows($select)>0) {

		$select = mysqli_fetch_assoc($select);

		$fname = $select['firstName'];

		$lname = $select['lastName'];

		$class = $select['class'];

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>ESMMS  •  Parent</title>

    <?php include 'include/style.php' ?>

</head>



<body>



    <!--*******************

        Preloader start

    ********************-->

    <div id="preloader">

        <div class="sk-three-bounce">

            <div class="sk-child sk-bounce1"></div>

            <div class="sk-child sk-bounce2"></div>

            <div class="sk-child sk-bounce3"></div>

        </div>

    </div>

    <!--*******************

        Preloader end

    ********************-->





    <!--**********************************

        Main wrapper start

    ***********************************-->

    <div id="main-wrapper">

        <?php include 'dashboard/parent_header.php' ?>



            <div class="container-fluid mt-5">



            	<div class="col-lg-12">

						<a href="parent_marks.php?term=1&id=<?php echo $id ?>&level=<?php echo $level ?>" class="btn btn-outline-primary">Term1</a>

						<a href="parent_marks.php?term=2&id=<?php echo $id ?>&level=<?php echo $level ?>" class="btn btn-outline-primary">Term2</a>

						<a href="parent_marks.php?term=3&id=<?php echo $id ?>&level=<?php echo $level ?>" class="btn btn-outline-primary">Term3</a>

                        <div class="card">

                            <div class="card-header">

                            	<h4><?php echo $fname.' '.$lname ?></h4>

                            	<h4><?php echo $class ?>  ||  Term <?php echo $ter; ?></h4>

                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-striped table-responsive-sm">

                                        <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Subject</th>

                                                <th>Test <b> /40</b></th>

                                                <th>Exam <b> /60</b></th>

                                                <th>Total <b> /100</b></th>
                                                <th> EVIDENCE</b></th>

                                            </tr>

                                        </thead>

                                        <tbody>



                                        	<?php  

                                        	$count = 0;

                                        	$subjects = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='{$ter}'");

                                        	if (mysqli_num_rows($subjects)>0) {

                                        	while ($row = mysqli_fetch_assoc($subjects)) {

                                        		$abr = $row['abr'];

                                        	?>

                                        	<tr>

                                        		<td><?php echo ++$count; ?></td>

                                        		<td><?php echo $row['module'] ?></td>

                                        			<?php  

                                        			$marks = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");

													while ($term=mysqli_fetch_assoc($marks)){

                                        			?>

                                        		<td><?php echo $term[$abr.'_cat_'.$ter]  ?></td>

                                        		<td><?php echo $term[$abr.'_ex_'.$ter]  ?></td>

                                        		<td><?php echo $term[$abr.'_tot_'.$ter]  ?></td>
                                                <td>
                                                     <?php  
                                                        // $std_id = $row['studentId'];
                                                        $mod_id = $row['moduleId'];
                                                        // echo $mod_id;
                                                        $evidence = mysqli_query($con, "SELECT evidence from marks WHERE studentId='{$id}' AND moduleId='{$mod_id}'");
                                                        $evidence = mysqli_fetch_assoc($evidence);
                                                    ?>
                                                <a href="<?php echo empty($evidence['evidence']) ? "#" : "marks/".$evidence['evidence']; ?>" class="text-danger" style="font-size: 10px;">
                                                        <img src="marks/<?php echo $evidence['evidence'] ?>" alt="No evidence present" style="width: 100px; height: 70px; object-fit: cover;">
                                                    </a></td>

                                        		<?php } ?>
                                                

                                        	</tr>

                                        	<?php }}else{echo "<tr><td colspan='5' align='center'>No marks entered yet in this term</td></tr>";} ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div></div>

        <?php include 'dashboard/footer.php'; ?>

        

    </div>

    <?php include 'include/scripts.php' ?>		

</body>



</html>		





<?php 

	}else{

		header("location: parent_id.php?err");

	}



}else{

	header("parent_id.php");

}

?>