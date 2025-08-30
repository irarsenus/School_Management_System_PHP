<?php  
include 'include/connect.php';
session_start();
if ($_SESSION['id']) {
	if (isset($_POST['upload'])) {
		$uploaderId = $_SESSION['id'];
		$documentId = rand();
		$description = mysqli_real_escape_string($con, $_POST['description']);
		$uploader = $_SESSION['fname'].' '.$_SESSION['lname'];
		$date = date("Y-m-d");

		$document = $_FILES['document']['name'];
		$ext = strtolower(pathinfo($document,PATHINFO_EXTENSION));
		
		$name = rand(100, 1000).$ext.rand(10, 100).'.'.$ext;
		$docName = $document;
		$allowed = array('pdf', 'docx', 'doc', 'txt', 'ppt', 'xlsx');
		echo "<h1>";
		echo $docName;
		echo "</h1>";
		if (in_array($ext, $allowed)) {

			$upload = move_uploaded_file($_FILES['document']['tmp_name'] , "documents/$name");
			if ($upload) {
				if ($ext == 'pdf') {
					$insert = mysqli_query($con, "INSERT INTO documents(documentId, uploader, docName, document, description, type, uploadDate, image) VALUES('$documentId', '$uploader', '$docName', '$name', '$description', '$ext', '$date', 'pdf.png')");
				}elseif ($ext == 'docx' || $ext == 'doc') {
					$insert = mysqli_query($con, "INSERT INTO documents(documentId, uploader, docName, document, description, type, uploadDate, image) VALUES('$documentId', '$uploader', '$docName', '$name', '$description', '$ext', '$date', 'docx.jpg')");
				}elseif ($ext == 'ppt') {
					$insert = mysqli_query($con, "INSERT INTO documents(documentId, uploader, docName, document, description, type, uploadDate, image) VALUES('$documentId', '$uploader', '$docName', '$name', '$description', '$ext', '$date', 'ppt.png')");
				}elseif ($ext == 'xlsx') {
					$insert = mysqli_query($con, "INSERT INTO documents(documentId, uploader, docName, document, description, type, uploadDate, image) VALUES('$documentId', '$uploader', '$docName', '$name', '$description', '$ext', '$date', 'xslx.png')");
				}else{
					$insert = mysqli_query($con, "INSERT INTO documents(documentId, uploader, docName, document, description, type, uploadDate, image) VALUES('$documentId', '$uploader', '$docName', '$name', '$description', '$ext', '$date', 'doc.png')");
				}
				if ($insert) {
					header("location: teacher_documents.php?succ");
				}else{
					header("location: teacher_documents.php?err");
				}
			}

		}else{
			header("location: teacher_documents.php?err");
		}

	}
}
?>