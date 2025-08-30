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
    <?php if(isset($_GET['class'])){ ?>
    <div id="main-wrapper">
        <?php include 'dashboard/dos_header.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <h3 class="text-muted">Adding a students</h3>
                <hr>
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="add_students_process.php" method="post">
                                    <div class="row">
                                        <?php  
                                        for ($i=1; $i <= $_GET['num']; $i++) {
                                        ?>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="text-muted"><u>Student <?php echo $i ?></u></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'fname' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input name="<?php echo $i.'lname' ?>" class="datepicker-default form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'class' ?>" value="<?php echo $_GET['class'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Home Town</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'town' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Contacts</label>
                                                <input type="number" class="form-control" name="<?php echo $i.'number' ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Admission Year</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'year' ?>" value="<?php echo date("Y"); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="<?php echo $i.'gender' ?>">
                                                    <option>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="num" value="<?php echo $_GET['num'] ?>">
                                            <br><hr><br>
                                        </div>
                                    <?php } ?>
                                            <button type="submit" name="add" class="btn btn-primary form-control text-white">Add students</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                        </div>
                    </div>
                </div>

        </div>
        <?php include_once 'dashboard/footer.php' ?>
    </div>
</div>
<?php } ?>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>