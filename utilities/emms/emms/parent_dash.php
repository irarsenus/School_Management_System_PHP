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

                <!-- row -->
                <div class="row">
                    <a href="parent_id.php" class="col-lg-4 h-100">
                        <div class="card">
                            <div class="card-body p-5 btn btn-primary">
                                <h1 class="text-white p-5 bi-journal-bookmark-fill" style="font-size: 70px;"></h1>
                                <h1 class="text-white">Marks</h1>
                            </div>
                        </div>
                    </a>

                    <a href="parent_forum.php" class="col-lg-4 h-100">
                        <div class="card">
                            <div class="card-body p-5 btn btn-secondary">
                                <h1 class="text-white p-5 bi-wechat" style="font-size: 70px;"></h1>
                                <h1 class="text-white">Forum</h1>
                            </div>
                        </div>
                    </a>

                    <a href="parent_id_fees.php" class="col-lg-4 h-100">
                        <div class="card">
                            <div class="card-body p-5 btn btn-primary">
                                <h1 class="text-white p-5 bi-coin" style="font-size: 70px;"></h1>
                                <h1 class="text-white">School Fees</h1>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'dashboard/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <?php include 'include/scripts.php' ?>		
</body>

</html>