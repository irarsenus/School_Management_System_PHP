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

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php include_once 'dashboard/teacher_header.php'; ?>

        <div class="container-fluid mt-5">
            <div class="container-fluid">
                <?php if(isset($_GET['err'])){ ?>
                    <div class="alert alert-danger text-center">
                        <h3>Operation failed</h3>
                    </div>
                    <?php }elseif (isset($_GET['succ'])) {?>
                    <div class="alert alert-success text-center">
                        <h3>Exercise created successfully!</h3>
                    </div>
                    <?php } ?>
            <!-- Students -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-muted">Exercieses</h3>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <a href="teacher_exercise.php" class="btn btn-success mb-2" style="float: right;"> + New exercise</a>
                            <table class="table verticle-middle table-responsive-md table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Subject</td>
                                        <td>Questions</td>
                                        <td>Class</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $count = 0;
                                    $teacher = $_SESSION['fname'].' '.$_SESSION['lname'];
                                    $select = mysqli_query($con, "SELECT * FROM exercises WHERE teacher='{$teacher}'");
                                    if (mysqli_num_rows($select)>0) {
                                    while ($row = mysqli_fetch_assoc($select)){
                                    ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
                                        <td><?php echo $row['subject'] ?></td>
                                        <td><?php echo $row['questions'] ?> Questions</td>
                                        <td><?php echo $row['class'] ?></td>
                                        <td align="center"><a href="exercise_del.php?id=<?php echo $row['exerciseId'] ?>" class="btn btn-danger bi bi-trash"></a></td>
                                    </tr>
                                    <?php }}else{echo "<td colspan='5' align='center'>No exercises provided yet!</td>";} ?>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    </div>
    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>