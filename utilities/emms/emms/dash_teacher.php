<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMMS  •  <?php echo $_SESSION['fname']; ?></title>
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
    <?php include_once 'dashboard/teacher_header.php' ?>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <div class="container-fluid mt-5">
            <div class="container-fluid">
                <div class="row">

                    <a href="teacher_list_permissions.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Permissions</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-p-square text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="teacher_documents.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Documents</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-folder2 text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subject_select.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Marks Entry</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-journal-arrow-down text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="teacher_profile.php" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Profile</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-person-badge-fill text-white"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="teacher_exercise_select.php" style="width: 100%;">
                        <div class="widget-stat card bg-warning overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Exercises</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-file-earmark-text text-white" style="font-size: 60px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="teacher_forum.php" style="width: 100%;">
                        <div class="widget-stat card bg-secondary overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title text-white">Forum</h3>
                                <h5 class="text-white mb-0"></h5>
                            </div>
                            <div class="card-body text-center mt-3">
                                <div class="ico-sparkline">
                                    <h1 class="bi bi-wechat text-white" style="font-size: 60px;"></h1>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="card container">
                        <div class="card-header">
                            <h2>Announcements</h2>
                        </div>

                        <?php  
                        $announcements = mysqli_query($con, "SELECT * FROM announcements");
                        if (mysqli_num_rows($announcements)>0) {
                            while ($ann = mysqli_fetch_assoc($announcements)) {
                        ?>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <span class="text-muted"><b><?php echo $ann['announcer'] ?></b></span>
                                    <span class="text-muted" style="float: right;"><?php echo $ann['postDate'] ?></span>
                                </div>
                                
                                <hr>

                                <div class="card-body">
                                    <p><?php echo $ann['content'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php }}else{ ?>
                        <hr>
                        <h2 class="text-danger"> No recent announcements <i class="bi-megaphone"></i></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>