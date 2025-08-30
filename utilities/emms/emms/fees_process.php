<?php  

include 'include/connect.php';



if (isset($_POST['pay'])) {

	$transactionId = rand();

	$level = $_POST['level'];

	$student = mysqli_real_escape_string($con, $_POST['student']);

	$pname = mysqli_real_escape_string($con, $_POST['pname']);

	$pcontact = mysqli_real_escape_string($con, $_POST['pcontact']);

	$amount = mysqli_real_escape_string($con, $_POST['amount']);

	$bank = mysqli_real_escape_string($con, $_POST['bank']);

	$date = mysqli_real_escape_string($con, $_POST['date']);

	$term = mysqli_real_escape_string($con, $_POST['term']);

	$Slip_num = mysqli_real_escape_string($con, $_POST['slip_nm']);

		$evidence = $_FILES['evidence']['name'];

		if (!empty($evidence)) {

			$imageType = $_FILES['evidence']['type'];

			$ext = explode(".", $evidence);

			$ext = strtolower(end($ext));

			$formats = array('jpg', 'png', 'gif', 'jpeg');

			if (in_array($ext, $formats)) {

				$img = $transactionId.'.'.$ext;

				$upload = move_uploaded_file($_FILES['evidence']['tmp_name'], "payment/$img");

				if ($upload) {

					$verify = mysqli_query($con, "SELECT * FROM fees WHERE student='{$student}' AND term='{$term}'");

					if (mysqli_num_rows($verify)<=0) {

						$insert = mysqli_query($con, "INSERT INTO fees(transactionId, student, parentName, parentContact, transactionDate, amount, evidence, term, bank,bank_sl_num) VALUES('{$transactionId}', '{$student}', '{$pname}', '{$pcontact}', '{$date}', '{$amount}', '{$img}', '{$term}', '{$bank}','{$Slip_num}')");

						if ($insert) {

							header("location: parent_fees.php?id=$student&term=$term&level=$level&succ=$transactionId&amount=$amount");

						}else{

							header("location: parent_fees.php?id=$student&term=$term&level=$level&err=Failed to complete the operation");

						}

					}else{

						$update = mysqli_query($con, "UPDATE fees SET amount='{$amount}', transactionDate='{$date}', transactionId='{$transactionId}', parentName='{$pname}', parentContact='{$pcontact}' WHERE student='{$student}'");

						if ($update) {

							header("location: parent_fees.php?id=$student&term=$term&level=$level&succ=$transactionId&amount=$amount");

						}else{

							header("location: parent_fees.php?id=$student&term=$term&level=$level&err");

						}

					}

				}

			}else{

				header("location: parent_fees.php?id=$student&term=$term&level=$level&err=Unsupported image type use png, jpg, jpeg formats");

			}

		}else{

			header("location: parent_fees.php?id=$student&term=$term&level=$level&err=Payment Receipt not provided");

		}

}

?>