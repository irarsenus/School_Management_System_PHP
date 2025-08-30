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
            <h3 class="text-muted">LeaderBoard</h3>
            <hr>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Marks</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php  
                                            $count = 0;
                                            $std = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}'");
                                            while ($row = mysqli_fetch_assoc($std)) {
                                            ?>

                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['firstName'] ?></td>
                                                <td><?php echo $row['lastName'] ?></td>
                                                <td>
                                                    <?php 
                                                    $student = $row['studentId']; 
                                                    $markSelect = mysqli_query($con, "SELECT SUM(marks) FROM leaderboard WHERE student='{$student}'");
                                                    $marks = mysqli_fetch_assoc($markSelect);
                                                    echo $marks['SUM(marks)'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'dashboard/footer.php'; ?>
    </div>
    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>