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
                                <h4 class="card-title">Given Permissions</h4>
                                <a href="patron_publish_permission.php" class="btn btn-info"> + Provide permision</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Print</th>
                                        <th scope="col">Returned</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $count = 0;
                                    $select = mysqli_query($con, "SELECT * FROM stdpermissions ORDER BY depatureDate DESC");
                                    if (mysqli_num_rows($select)) {
                                        while ($row = mysqli_fetch_assoc($select)) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
                                        <td><?php echo $row['firstName'] ?></td>
                                        <td><?php echo $row['lastName'] ?></td>
                                        <td><?php echo $row['reason'] ?></td>
                                        <td>
                                            <?php  
                                            $returned = $row['returned'];
                                            if (empty($returned)) {
                                                echo "<span class='badge badge-warning'>Not returned</span>";
                                            }else{
                                                echo "<span class='badge badge-success'>Returned</span>";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $row['returnDate'] ?></td>
                                        <td align="center"><a href="patron_permission_print.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-printer-fill"></i></a></td>
                                        <td align="center"><a href="patron_permission_confirm.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="bi bi-check"></i></a></td>
                                        <td align="center"><a href="patron_permission_del.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    <?php }}else{echo "<tr><td colspan='7' align='center'> No permissions provided... </td></tr>";} ?>
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