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
    <?php if(isset($_GET['id'])){ ?>
    <div id="main-wrapper">
        <?php include 'dashboard/dos_header.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <h3 class="text-muted">Editing a students</h3>
                <hr>
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="edit_student_process.php" method="post">
                                    <div class="row">
                                        <?php  
                                        $level = $_GET['level'];
                                        $id=$_GET['id'];
                                        $select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
                                        $row = mysqli_fetch_assoc($select);
                                        ?>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="text-muted"><u>Editing Student <?php echo $row['firstName'].' '.$row['lastName']; ?></u></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="fname" value="<?php echo $row['firstName'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input name="lname" value="<?php echo $row['lastName'] ?>" class="datepicker-default form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class</label>
                                                <input type="text" class="form-control" name="class" value="<?php echo $row['class'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Home Town</label>
                                                <input type="text" class="form-control" name="town" value="<?php echo $row['homeTown'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Contacts</label>
                                                <input type="number" class="form-control" name="contact" value="<?php echo $row['contact'] ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Admission Year</label>
                                                <input type="text" class="form-control" name="year" value="<?php echo $row['admission'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="level" value="<?php echo $_GET['level']; ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id']; ?>">

                                    <?php } ?>
                                            <button type="submit" name="edit" class="btn btn-primary form-control text-white">Edit student</button>
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
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>