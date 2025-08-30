<?php  

include 'include/connect.php';



session_start();

if ($_SESSION['post']) {

	if (isset($_POST['sub'])) {

		$num = $_POST['num'];

		$term = $_POST['term'];

		$class = $_POST['class'];

		$level = $_POST['level'];

		for ($i=1; $i <= $num; $i++) { 

			$student = mysqli_real_escape_string($con, $_POST[$i.'id']);

			$amount = str_replace(',', '', $_POST[$i . 'amount']);
			$amount = mysqli_real_escape_string($con, $amount);


			$paid = '';

			if (isset($_POST[$i.'paid'])) {

				$paid = 'yes';

				$fullPaid = mysqli_query($con, "UPDATE $level SET paid='{$paid}' WHERE studentId='{$student}'");

			}else{

				$paid='';

				$fullPaid = mysqli_query($con, "UPDATE $level SET paid='{$paid}' WHERE studentId='{$student}'");

			}



			$exist = mysqli_query($con, "SELECT * FROM schoolfees WHERE student='{$student}' AND term='{$term}'");

			if (mysqli_num_rows($exist)<=0) {

				$insert = mysqli_query($con, "INSERT INTO schoolfees(student, amount, term) VALUES('{$student}', '{$amount}', '{$term}')");

				if ($insert) {

					header("location: bursar_fees.php?class=$class&level=$level&term=$term&succ");

				}else{

					header("location: bursar_fees.php?class=$class&level=$level&term=$term&err=Failed to insert new fees for $student");

				}

			}else{

				$update = mysqli_query($con, "UPDATE schoolfees SET amount='{$amount}' WHERE student='{$student}' AND term='{$term}'");

				if ($update) {

					header("location: bursar_fees.php?class=$class&level=$level&term=$term&succ");

				}else{

					header("location: bursar_fees.php?class=$class&level=$level&term=$term&err=Failed to update new fees for $student");

				}

			}

		}

	}

}

?>