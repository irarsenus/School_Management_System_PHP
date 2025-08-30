<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ESMMS</title>
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

    <div id="main-wrapper">
        <?php include_once 'dashboard/home.php'; ?>

            <div class="mt-5 container">
                    <a href="login.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Teachers</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-person-badge text-white" style="font-size: 50px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="admin.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Admnistration</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-person-bounding-box text-white" style="font-size: 50px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="parent_dash.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Parents</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-people text-white" style="font-size: 50px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="student_login.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Student</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-person-workspace text-white" style="font-size: 50px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>                    
                </div>
                <?php include 'dashboard/footer.php'; ?>

    </div>
  <?php include 'include/scripts.php' ?>
</body>
</html>