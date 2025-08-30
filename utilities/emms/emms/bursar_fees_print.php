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

		window.history.back()

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

                <th>Amount</th>

                <th style="text-align: center;">Full Paid</th>

            </tr>

        </thead>

		<tbody>

            <?php

            $count=1; 

            $select = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' ORDER BY firstName ASC");

            if (mysqli_num_rows($select)>0) {

                while($row = mysqli_fetch_assoc($select)){

            ?>

            <tr id="row<?php echo $row['studentId']; ?>">

                <input type="hidden" name="<?php echo $count.'id' ?>" value="<?php echo $row['studentId'] ?>">

                <input type="hidden" name="num" value="<?php echo mysqli_num_rows($select); ?>">

                <input type="hidden" name="class" value="<?php echo $row['class']; ?>">

                <input type="hidden" name="level" value="<?php echo $level; ?>">

                <td><?php echo $count; ?></td>

                <td><?php echo $row['studentId']; ?></td>
                <td><?php echo $row['firstName']; ?></td>

                <td><?php echo $row['lastName']; ?></td>

                <?php 
                    $student = $row['studentId']; 
                    $fee = mysqli_query($con, "SELECT * FROM schoolfees WHERE student='{$student}' AND term='1'"); 
                    
                    $fin = "0";
                    
                    if(mysqli_num_rows($fee)>0){
                        $value = mysqli_fetch_assoc($fee); 
                        if ($value['amount']=='') { 
                            $fin = "0"; 
                        }else{ 
                            $fin = $value['amount']; 
                        }
                    }else{
                        $fin = "0";
                    }
                ?>
                <td align="right"><?php echo number_format($fin)  ?> RWF</td>

                <td align="center">

                    <?php  

                    if (empty($row['paid']) || $row['paid']=='no') {
                        echo "No";
                    }else{
                        echo "Yes";
                    } 
                    ?>

                </td>

                <?php $count++; ?>

            </tr>

        <?php }}else{

            echo "<td colspan='8' class='text-center'><h3>No Students registered</h3></td>";

        } ?>

        </tbody>	

	</table>

	</div>

</body>

</html>

<?php }else{header("location: students_select.php");} ?>