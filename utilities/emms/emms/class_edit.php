<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['post']) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $class = mysqli_query($con, "SELECT * FROM classes WHERE id='{$id}'");
        $data = mysqli_fetch_assoc($class);
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
                        <h3>Operation failed</h3>
                    </div>
                    <?php }elseif (isset($_GET['succ'])) {?>
                    <div class="alert alert-success text-center">
                        <h3><?php echo $_GET['succ'] ?> Class Added successfully!</h3>
                    </div>
                    <?php } ?>
                </div>
                <h3 class="text-muted">Editing class</h3>
                <hr>
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="edit_class_process.php" method="post">
                                    <input type="hidden" name="orgName" value="<?php echo $data['class'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class</label>
                                                <input type="text" class="form-control" name="class" value="<?php echo $data['class'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Divison</label>
                                                <select class="form-control" name="division">
                                                    <option>--DIVISION--</option>
                                                    <option value="O'LEVEL">O'LEVEL</option>
                                                    <option value="A'LEVEL">A'LEVEL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class Monitor</label>
                                                <input name="monitor" class="datepicker-default form-control" value="<?php echo $data['monitor'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class Monitress</label>
                                                <input type="text" class="form-control" name="monitress" value="<?php echo $data['monitress'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Class Teacher</label>
                                                <select class="form-control" name="teacher">
                                                    <option>--Teachers--</option>
                                                    <?php  
                                                    $select = mysqli_query($con, "SELECT * FROM staff");
                                                    if (mysqli_num_rows($select)>0) {
                                                        while ($row = mysqli_fetch_assoc($select)) {
                                                    ?>
                                                    <option value="<?php echo $row['firstName'].' '.$row['lastName'] ?>"><?php echo $row['firstName'].' '.$row['lastName'] ?></option>
                                                    <?php }}else{echo "<option disabled>Empty list</option>";} ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" name="add" class="btn btn-primary">Edit Class</button>
                                        </div>
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
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }}else{header("location: admin.php");} ?>