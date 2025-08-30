<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
$id=$_SESSION['id'];
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
                        <h3>Operation complete!</h3>
                    </div>
                    <?php } ?>
            <!-- Students -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permissions</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <a href="teacher_permission.php" class="btn btn-info mb-2" style="float: right;"> + Request Permission</a>
                            <table class="table verticle-middle table-responsive-md table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Requested Date</th>
                                        <th>Reason</th>
                                        <th>Return Date</th>
                                        <th>Approval</th>
                                        <th>Print</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $count = 0;
                                    $fetch = mysqli_query($con, "SELECT * FROM staffpermissions WHERE teacher='{$id}'");
                                    if (mysqli_num_rows($fetch)>0) {
                                        while ($row = mysqli_fetch_assoc($fetch)) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
                                        <td><?php echo $row['depatureDate'] ?></td>
                                        <td><?php echo $row['reason'] ?></td>
                                        <td><?php echo $row['arrivalDate'] ?></td>
                                        <td>
                                            <?php  
                                            $approved = $row['approved'];
                                            if (empty($approved)) {
                                                echo "<span class='badge badge-warning'>Pending...</span>";
                                            }elseif ($approved == 'Yes') {
                                                echo "<span class='badge badge-success'>Approved</span>";
                                            }elseif ($approved == 'No') {
                                                echo "<span class='badge badge-danger'>Rejected</span>";
                                            }
                                            ?>
                                        </td>
                                        <td align="center"><a href="teacher_print_permission.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-download"></i></a></td>
                                        <td align="center"><a href="teacher_permissions_del.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-x-lg"></i></a></td>
                                    </tr>
                                <?php }}else{echo "<tr> <td colspan='6' align='center'>No permissions requested</td> </tr>";} ?>
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