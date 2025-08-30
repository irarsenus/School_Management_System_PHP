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
<body class="h-100">
        <?php include_once 'dashboard/teacher_header.php'; ?>
    
    <div class="authincation h-100 mt-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4">Select a subject</h2>
                                    <form action="teacher_exercise_create.php" method="GET">
                                        <div class="form-group">
                                            <select class="form-control" name="module">
                                                <?php  
                                                $id=$_SESSION['id'];
                                                $select = mysqli_query($con, "SELECT * FROM modules WHERE teacher='$id'");
                                                while ($row = mysqli_fetch_assoc($select)) {
                                                ?>
                                                <option value="<?php echo $row['moduleId'] ?>"><?php echo $row['module'] ?>(<?php echo $row['class'] ?>)</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Number of questions</label>
                                            <input type="text" name="num" class="form-control">
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" name="proceed" value="1" class="btn btn-primary btn-block">Proceed</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'include/scripts.php' ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>