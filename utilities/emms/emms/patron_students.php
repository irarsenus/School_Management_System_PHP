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
        <?php include_once 'dashboard/patron_header.php'; ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="container-fluid">
                    <?php if(isset($_GET['err'])){ ?>
                    <div class="alert alert-danger text-center">
                        <h4>Operation Failed</h4>
                    </div>
                    <?php }elseif(isset($_GET['succ'])){ ?>
                    <div class="alert alert-success text-center">
                        <h4>Operation Completed Successfully!</h4>
                    </div>
                    <?php } ?>
                </div>
                <h3 class="text-muted"><?php echo $_GET['class'] ?></h3>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">students List</h4>
                                <?php  
                                if ($_GET['class'] == 'S1' || $_GET['class'] == 'S2' || $_GET['class'] == 'S3') {
                                ?>
                                    <a href="patron_students_print.php?class=<?php echo $_GET['class'] ?>&level=ol" class="btn btn-primary bi bi-printer float-start"></a>
                                <?php }else{ ?>
                                    <a href="patron_students_print.php?class=<?php echo $_GET['class'] ?>&level=al" class="btn btn-primary bi bi-printer float-start"></a>
                                <?php } ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Home Town</th>
                                                <th>Gender</th>
                                                <th>Parents' Contact</th>
                                                <th>Admission Year</th>
                                                <th>Conduct</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=0; 
                                            $class = $_GET['class'];
                                            $level = $_GET['level']; 
                                            $select = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' ORDER BY firstName ASC");
                                            if (mysqli_num_rows($select)>0) {
                                                while($row = mysqli_fetch_assoc($select)){
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['firstName']; ?></td>
                                                <td><?php echo $row['lastName']; ?></td>
                                                <td><?php echo $row['homeTown']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['admission']; ?></td>
                                                <td><?php echo $row['conduct']; ?></td>
                                                <td>
                                                    <a href="students_conduct.php?id=<?php echo $row['studentId'] ?>&level=<?php echo $level ?>&increase&class=<?php echo $class ?>" class="btn btn-warning bi bi-person-plus"></a>
                                                    <a href="students_conduct.php?id=<?php echo $row['studentId'] ?>&level=<?php echo $level ?>&decrease&class=<?php echo $class ?>" class="btn btn-primary bi bi-person-dash"></a>
                                                </td>
                                            </tr>
                                        <?php }}else{
                                            echo "<td colspan='8' class='text-center'><h3>No Students registered</h3></td>";
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
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
<?php }else{header("location: admin.php");} ?>