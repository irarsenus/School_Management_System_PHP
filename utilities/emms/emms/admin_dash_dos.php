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
        <?php include_once 'dashboard/dos_header.php'; ?>

        <div class="content-body">
            <div class="container-fluid">
            <h3 class="text-muted">Overview</h3>
            <hr>
                    
                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Students</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $ol = mysqli_query($con, "SELECT * FROM ol");
                                            $al = mysqli_query($con, "SELECT * FROM al");
                                            echo mysqli_num_rows($ol)+mysqli_num_rows($al);
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-secondary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Modules</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $modules = mysqli_query($con, "SELECT * FROM lstsubjects");
                                            echo mysqli_num_rows($modules);
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-building"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Classes</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $classes = mysqli_query($con, "SELECT * FROM classes");
                                            echo mysqli_num_rows($classes);
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-warning">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Teachers</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $teachers = mysqli_query($con, "SELECT * FROM staff");
                                            echo mysqli_num_rows($teachers);
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End summary -->

            <!-- Applying Students -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permissions</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Teacher</th>
                                        <th scope="col">Requested Date</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Approval</th>
                                        <th scope="col">Confirm</th>
                                        <th scope="col">Reject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $count=0;
                                    $select = mysqli_query($con, "SELECT * FROM staffpermissions");
                                    if (mysqli_num_rows($select)>0) {
                                        while ($row = mysqli_fetch_assoc($select)) {
                                            $userId = $row['teacher'];
                                    ?>
                                    <tr>          
                                      <td><?php echo ++$count; ?></td>
                                      <td>
                                          <?php  
                                          $teacher = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$userId}'");
                                          $name = mysqli_fetch_assoc($teacher);
                                          echo $name['firstName'].' '.$name['lastName'];
                                          ?>
                                      </td>
                                      <td><?php echo $row['depatureDate']; ?></td>
                                      <td><?php echo $row['reason']; ?></td>
                                      <td><?php echo $row['arrivalDate']; ?></td>
                                      <td>
                                          <?php  
                                          $approval = $row['approved'];
                                          if (empty($approval)) {
                                                echo "<span class='badge badge-warning'>Pending...</span>";
                                          }elseif ($approval == 'Yes') {
                                                echo "<span class='badge badge-success'>Approved</span>";
                                          }elseif ($approval == 'No'){
                                                echo "<span class='badge badge-danger'>Rejected</span>";
                                          }
                                          ?>
                                      </td>
                                      <td align="center">
                                        <a href="confirm.php?id=<?php echo $row['id']; ?>&status=Yes" class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></a>
                                      </td>
                                      <td align="center">
                                        <a href="confirm.php?id=<?php echo $row['id'] ?>&status=No" class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></a>
                                          
                                      </td>                                            
                                    </tr>
                                    <?php }}else{echo "<tr><td colspan='8' align='center'> No Permissions requested </td></tr>";} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Applying Teachers -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                
            </div>
        </div>


        <?php include_once 'dashboard/footer.php'; ?>
    </div>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>