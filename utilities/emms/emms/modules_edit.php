<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['post']) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $select = mysqli_query($con, "SELECT * FROM modules WHERE id='{$id}'");
        $data = mysqli_fetch_assoc($select);
        $moduleName = $data['module'];
        $teacher = $data['teacher'];
        $term = $data['term'];
        $moduleHour = $data['moduleHours'];
        $class = $data['class'];
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
                <h3 class="text-muted">Editing "<?php echo $moduleName; ?>" in <b><?php echo $class ?></b>  ||  Term <?php echo $term; ?></h3>
                <hr>
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="edit_modules_process.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="text-muted"><u></u></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Module Name</label>
                                                <input type="text" class="form-control" value="<?php echo $moduleName ?>" name="mname">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Assigned Teacher(<b>
                                                    <?php
                                                    $teacherSelect = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$teacher}'");
                                                    $teacherName = mysqli_fetch_assoc($teacherSelect);
                                                    echo $teacherName['firstName'].' '.$teacherName['lastName'];

                                                    ?>
                                                </b>)</label>
                                                <select class="form-control" name="teacher">
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
                                                <label class="form-label">Module Hours</label>
                                                <input type="text" class="form-control" value="<?php echo $moduleHour ?>" name="mhour">
                                            </div>
                                        </div>

                                    </div>
                                        <br><hr><br>
                                            <button type="submit" name="edit" class="btn btn-primary form-control text-white">Edit module</button>
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
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }}else{header("location: admin.php");} ?>