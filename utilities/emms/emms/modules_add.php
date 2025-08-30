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
    <?php if (isset($_GET['num'])){$num=$_GET['num']; ?>
    <div id="main-wrapper">
        <?php include 'dashboard/dos_header.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <h3 class="text-muted">Adding a modules</h3>
                <hr>
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="add_modules_process.php" method="post">

                                        <?php  
                                        for ($i=1; $i <= $_GET['num']; $i++) {
                                        ?>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="text-muted"><u>Module <?php echo $i ?></u></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Module Name</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'mname' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Module Abbreviation</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'abr' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Assigned Teacher</label>
                                                <select class="form-control" name="<?php echo $i.'teacher' ?>">
                                                    <?php  
                                                    $teacher = mysqli_query($con, "SELECT * FROM staff");
                                                    while ($row = mysqli_fetch_assoc($teacher)) {
                                                    ?>
                                                    <option value="<?php echo $row['userId'] ?>"><?php echo $row['firstName'].' '.$row['lastName'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class</label>
                                                <select class="form-control" name="<?php echo $i.'class' ?>">
                                                    <?php  
                                                    $class = mysqli_query($con, "SELECT * FROM classes ORDER BY division DESC");
                                                    while ($row = mysqli_fetch_assoc($class)) {
                                                    ?>
                                                    <option value="<?php echo $row['class'] ?>"><?php echo $row['class'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Module Hours</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'hours' ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Term: </label>
                                                <select name="<?php echo $i.'term' ?>">
                                                    <option value="1">1<sup>st</sup> Term</option>
                                                    <option value="2">2<sup>nd</sup> Term</option>
                                                    <option value="3">3<sup>rd</sup> Term</option>
                                                </select>
                                            </div>
                                            <input type="hidden" class="form-control" name="num" value="<?php echo $num ?>">
                                        </div>
                                    </div>
                                        <br><hr><br>
                                        <?php } ?>
                                            <button type="submit" name="add" class="btn btn-primary form-control text-white">Add modules</button>
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