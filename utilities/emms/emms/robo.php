<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['studentId']) {
    $id = $_SESSION['studentId'];
    $level = $_SESSION['level'];
    $select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
    $data = mysqli_fetch_assoc($select);
    $fname = $data['firstName'];
    $lname = $data['lastName'];
    $class = $data['class'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMMS  •  <?php echo $fname; ?></title>
    <?php include_once 'include/style.php'; ?>
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
    <?php include_once 'dashboard/student_header.php' ?>

        <div class="container-fluid mt-5">
            <h3 class="text-muted">Powered By <b>Tidio <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="min-width: 32px; min-height: 32px;" class="css-0 e11k6mr30"><g fill="none"><path d="M20.63 0a11.343 11.343 0 00-11.2 9.42 12.517 12.517 0 00.003 0A11.394 11.394 0 000 20.643V32h11.384a11.37 11.37 0 0011.18-9.25h-2.5H32V11.358C31.985 5.085 26.901.007 20.63 0zM9.263 11.394a11.271 11.271 0 000 .003v-.003z" fill="#135EEB"></path><path d="M11.408 9.25a12.53 12.53 0 00-1.975.17c-.108.651-.165 1.31-.17 1.97a11.363 11.363 0 0011.37 11.36h1.94c.14-.706.208-1.424.205-2.144a11.34 11.34 0 00-11.37-11.357z" fill="#0A60EA"></path><path d="M20.654 22.75A11.37 11.37 0 019.263 11.398c.004-.66.061-1.32.17-1.97A11.39 11.39 0 000 20.642V32h11.384a11.37 11.37 0 0011.18-9.25h-1.91z" fill="#15C2FF"></path><path d="M20.63 0a11.343 11.343 0 00-11.2 9.42 12.524 12.524 0 011.974-.17 11.357 11.357 0 0111.166 13.5H32V11.358C31.985 5.085 26.901.007 20.63 0z" fill="#2C82FF"></path></g></svg></b></h3>
            <hr>
            <div class="container-fluid"></div>
        </div>
    </div>
    </div>
    <?php include_once 'include/scripts.php'; ?>
    <script src="//code.tidio.co/zczmxf8ivh8ouzqdsj9pgqwaugcgmqhq.js" async></script>
</body>
</html>
<?php }else{header("location: login.php");} ?>