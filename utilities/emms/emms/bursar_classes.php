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
        <?php include 'dashboard/bursar_header.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <div class="container-fluid">
                    <?php if(isset($_GET['err'])){ ?>
                    <div class="alert alert-danger text-center">
                        <h4>Operation Failed</h4>
                    </div>
                    <?php }elseif(isset($_GET['succ'])){ ?>
                    <div class="alert alert-success text-center">
                        <h4>Operation completed successfully</h4>
                    </div>
                    <?php } ?>
                </div>
                <h3 class="text-muted">Classes</h3>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">classes List</h4>
                                <a href="classes_print.php" class="btn btn-primary bi bi-printer float-start"></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Class</th>
                                                <th>Division</th>
                                                <th>students</th>
                                                <th>Class Teacher</th>
                                                <th>Class Monitor</th>
                                                <th>Class Monitress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                            $count=0;
                                            $select = mysqli_query($con, "SELECT * FROM classes ORDER BY division DESC");
                                            if (mysqli_num_rows($select)>0) {
                                                while ($row=mysqli_fetch_assoc($select)) {
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['class'] ?></td>
                                                <td><?php echo $row['division'] ?></td>
                                                <td>
                                                    <?php
                                                    $class = $row['class'];  
                                                    if ($class == 'S1' || $class == 'S2' || $class == 'S3') {
                                                        $num = mysqli_query($con, "SELECT * FROM ol WHERE class='{$class}'");
                                                        echo mysqli_num_rows($num);
                                                    }else{
                                                        $num = mysqli_query($con, "SELECT * FROM al WHERE class='{$class}'");
                                                        echo mysqli_num_rows($num);
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $row['teacher'] ?></td>
                                                <td><?php echo $row['monitor'] ?></td>
                                                <td><?php echo $row['monitress'] ?></td>
                                            </tr>
                                        <?php }}else{echo "<td colspan='8' class='text-center'><h4>No available classes</h4></td>'";} ?>
                                        </tbody>
                                    </table>
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
<?php }else{header("location: admin.php");} ?>