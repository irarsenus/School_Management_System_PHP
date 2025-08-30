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
            <h3 class="text-muted">Games</h3>
            <hr>
            <div class="container-fluid">
                <div class="row">

                    <a href="games/typing/" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-body text-center mt-3">
                                <img src="games/img/ex1.jpg" style="width:100%" class="rounded">
                            </div>
                            <div class="card-footer">
                                <h3 class="card-title text-white">Typing speed</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                        </div>
                    </a>

                    <a href="games/word/" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-body text-center mt-3">
                                <img src="games/img/ex2.png" style="width:100%" class="rounded">
                            </div>
                            <div class="card-footer">
                                <h3 class="card-title text-white">Guess the mystery word</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                        </div>
                    </a>

                    <a href="games/snake" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-body text-center mt-3">
                                <img src="games/img/ex3.png" style="width:100%" class="rounded">
                            </div>
                            <div class="card-footer">
                                <h3 class="card-title text-white">Snake Game</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                        </div>
                    </a>

                    <a href="games/piano" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-body text-center mt-3">
                                <img src="games/img/ex4.png" style="width:100%" class="rounded">
                            </div>
                            <div class="card-footer">
                                <h3 class="card-title text-white">Digital Computer Piano</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'dashboard/footer.php'; ?>
    </div>
    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>