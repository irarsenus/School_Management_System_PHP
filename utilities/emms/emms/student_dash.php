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
            <div class="container-fluid">
                <div class="row">

                    <a href="student_list_games.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Games</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-controller text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="student_list_exercises.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Exercises</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-file-earmark-text text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="student_marks.php?term=1" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Marks</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-journal-bookmark text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="student_leaderboard.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">LeaderBoard</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-bar-chart-line-fill text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="robo.php" style="width: 100%;">
                        <div class="widget-stat card bg-secondary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Chat Bot</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-robot text-white" style="font-size: 60px;"></h1>
                                </div>
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