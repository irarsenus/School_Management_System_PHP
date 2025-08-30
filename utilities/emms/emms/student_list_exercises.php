<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['studentId']) {
    $id = $_SESSION['studentId'];
    $level = $_SESSION['level'];
    $select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");
    $data = mysqli_fetch_assoc($select);
    $fname = $data['firstName'];
    $lname = $data['lastName'];
    $class = $data['class'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMMS  •  <?php echo $fname; ?></title>
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
    <?php include_once 'dashboard/student_header.php' ?>
        <div class="container-fluid mt-5">
            <?php  
            if (isset($_GET['err'])) {
            ?>
            <div class="container">
                <div class="alert alert-danger text-dark text-center">
                    <h3><?php echo $_GET['err'] ?></h3>
                </div>
            </div>
            <?php }elseif (isset($_GET['succ'])) {?>
                <div class="container">
                <div class="alert alert-success text-dark text-center">
                    <h3>Marks for the exercise has been updated</h3>
                    <i>Check the Leaderboard</i>
                </div>
            </div>
            <?php } ?>
            <h3 class="text-muted">Exercises</h3>
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <?php  
                    $select = mysqli_query($con, "SELECT * FROM exercises");
                    if (mysqli_num_rows($select)) {
                        while ($row=mysqli_fetch_assoc($select)) {
                    ?>

                    <a href="exercise.php?exercise=<?php echo $row['exerciseId'] ?>" class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card btn btn-primary">
                            <div class="card-header">
                                <h3 class="mb-1 text-white text-center"><?php echo $row['subject'] ?></h3>   
                            </div>
                            <hr>
                            <div class="card-footer">
                                <h2 class="text-center text-white"><?php echo $row['teacher'] ?></h2>
                            </div>
                    </div>
                </a>
                <?php }}else{
                    echo "<h3>No available exercises</h3>";
                } ?>
                
            </div>
            </div>
        </div>
    </div>
    <?php include_once 'dashboard/footer.php'; ?>
    </div>
    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: index.php");} ?>