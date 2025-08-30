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
        <?php include 'dashboard/dos_header.php'; ?>
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
                <h3 class="text-muted">Teachers & Trainners</h3>
                <hr>
                <div class="col-lg-12">
                    <div class="row">
                        
                        <?php  
                        $select = mysqli_query($con, "SELECT * FROM staff");
                        if (mysqli_num_rows($select)>0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="alert(`This teacher's password is <?php echo $row['password']; ?>`)">Recover Password</a>
                                                <a class="dropdown-item text-danger" href="teacher_del.php?id=<?php echo $row['userId'] ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="profiles/<?php echo $row['img'] ?>" width="100" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1"><?php echo $row['firstName']. ' '.$row['lastName'] ?></h3>
                                        <p class="text-muted"><?php echo $row['diploma'] ?></p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong><?php echo $row['gender'] ?></strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email :</span><strong><?php echo $row['email'] ?></strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Phone No. :</span><strong><?php echo $row['phone'] ?></strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                            <span class="mb-0">Starting Year:</span><strong><?php echo $row['year'] ?></strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Department:</span><strong><?php echo $row['department'] ?></strong></li>
                                            </ul>
                                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="resume.php?id=<?php echo $row['userId'] ?>">Resume</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }}else{echo "<h3>- No available teachers</h3>";} ?>
                    </div>
                </div>
        </div>
    </div>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>