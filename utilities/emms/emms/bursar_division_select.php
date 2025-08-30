<?php  

include_once 'include/connect.php';

session_start();

if ($_SESSION['post']) {

?>

<!DOCTYPE html>

<html lang="en">

<head>

    

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>EMMS  •  <?php echo $_SESSION['post']; ?></title>

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

        <?php include 'dashboard/bursar_header.php'; ?>

        <div class="content-body">

            <div class="container-fluid">

                <div class="container-fluid">

                    <?php if(isset($_GET['err'])){ ?>

                    <div class="alert alert-danger text-center">

                        <h4>Operation Failed</h4>

                    </div>

                    <?php }elseif(isset($_GET['succ'])){ ?>

                    <div class="alert alert-success text-center">

                        <h4><?php echo $_GET['succ']; ?> has been removed!</h4>

                    </div>

                    <?php } ?>

                </div>

                <div class="d-flex justify-content-between">
                    <h3 class="text-muted">Divisions</h3>
                </div>

                <hr>

                <div class="d-flex">


                    <a href="bursar_fees_all.php?level=al&term=1" style="width: 100%; margin: 10px">

                        <div class="widget-stat card bg-primary">

                            <div class="card-body">

                                <div class="media">

                                    <div class="media-body text-white">

                                        <h1 class="mb-1 text-white text-center">Advanced Level</h1>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>
                    <a href="bursar_fees_all.php?level=ol&term=1" style="width: 100%; margin: 10px">

                        <div class="widget-stat card bg-primary">

                            <div class="card-body">

                                <div class="media">

                                    <div class="media-body text-white">

                                        <h1 class="mb-1 text-white text-center">Ordinary Level</h1>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>
                

            </div>

    </div>

    <?php include_once 'include/scripts.php'; ?>

</body>

</html>

<?php }else{header("location: admin.php");} ?>