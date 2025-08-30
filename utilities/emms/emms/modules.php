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
        <?php include 'dashboard/dos_header.php'; ?>
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
                <h3 class="text-muted">Modules</h3>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Modules List</h4>
                                <a href="num_modules.php" class="btn btn-info"> + Add modules</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Module code</th>
                                                <th>Module Name</th>
                                                <th>class</th>
                                                <th>Teacher</th>
                                                <th>level</th>
                                                <th>Module Hours</th>
                                                <th>Term</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=0;  
                                            $select = mysqli_query($con, "SELECT * FROM modules ORDER BY class ASC");
                                            if (mysqli_num_rows($select)>0) {
                                                while($row = mysqli_fetch_assoc($select)){
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count ?></td>
                                                <td><?php echo $row['moduleId'] ?></td>
                                                <td><?php echo $row['module'] ?></td>
                                                <td><?php echo $row['class'] ?></td>
                                                <td>
                                                    <?php  
                                                    $tId=$row['teacher'];
                                                    $teacher = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$tId}'");
                                                    $t = mysqli_fetch_assoc($teacher);
                                                    echo $t['firstName'].' '.$t['lastName']
                                                    ?>
                                                </td>
                                                <td><?php echo $row['level'] ?></td>
                                                <td><?php echo $row['moduleHours'] ?></td>
                                                <td><?php echo $row['term'] ?></td>
                                                <td>
                                                    <a href="modules_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info bi-pencil-square"></a>
                                                </td>
                                                <td>
                                                    <a href="modules_del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger bi-trash"></a>
                                                </td>
                                            </tr>
                                        <?php }}else{
                                            echo "<td colspan='9' class='text-center'><h3>NO SUBJECTS AVAILABLE</h3></td>";
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
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>