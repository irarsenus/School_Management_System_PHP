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
        <?php include_once 'dashboard/bursar_header.php'; ?>

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
                                    <span class="mr-4">
                                        <i class="bi bi-person-check mt-2"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Full paid</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $paidOl = mysqli_query($con, "SELECT * FROM ol WHERE paid='yes'");
                                            $paidAl = mysqli_query($con, "SELECT * FROM al WHERE paid='yes'");
                                            echo mysqli_num_rows($paidOl)+mysqli_num_rows($paidAl);
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
                                        <i class="bi bi-person-dash"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Not Paid</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $N_paidOl = mysqli_query($con, "SELECT * FROM ol WHERE paid!='yes'");
                                            $N_paidAl = mysqli_query($con, "SELECT * FROM al WHERE paid!='yes'");
                                            echo mysqli_num_rows($N_paidOl)+mysqli_num_rows($N_paidAl);
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
                                        <i class="bi bi-cash-stack"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Paid school fees</p>
                                        <h3 class="text-white">
                                            <?php  
                                            $fees = mysqli_query($con, "SELECT SUM(amount) FROM schoolfees");
                                            $fees = mysqli_fetch_assoc($fees);

                                            echo number_format($fees['SUM(amount)']);
                                            ?>
                                             RWF
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
                        <h4 class="card-title">ESMMS Pay</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Student</th>
                                        <!-- <th scope="col">Parent's Name</th> -->
                                        <!-- <th scope="col">Parent's Contact</th> -->
                                        <th scope="col">Paid Date</th>
                                        <th scope="col">Bank Slip Number</th>
                                        <th scope="col">Fees Amount</th>
                                        <th scope="col">Paid amount</th>
                                        <th scope="col">Remaining Amount</th>
                                         <th scope="col">Term</th>    
                                        <th scope="col">Evidence</th>
                                        <th scope="col">Confirm</th>
                                        <th scope="col">Reject</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php  
                                    $count=0;
                                    $select = mysqli_query($con, "SELECT * FROM fees");
                                    if (mysqli_num_rows($select)>0) {
                                        while ($row = mysqli_fetch_assoc($select)){
                                    ?>
                                    <tr>
                                        <!-- <td><?php echo ++$count; ?></td> -->
                                        <td>
                                            <?php  
                                            $id = $row['student'];
                                            $name = mysqli_query($con, "SELECT * FROM ol WHERE studentId='{$id}'");
                                            if (mysqli_num_rows($name)>0) {
                                                $data = mysqli_fetch_assoc($name);
                                                echo $data['firstName'].' '.$data['lastName'];
                                            }else{
                                                $name = mysqli_query($con, "SELECT * FROM al WHERE studentId='{$id}'");
                                                $data = mysqli_fetch_assoc($name);
                                                echo $data['firstName'].' '.$data['lastName'];
                                            }
                                            ?>
                                        </td>
                                        <!-- <td><?php echo $row['parentName'] ?></td> -->
                                        <!-- <td><?php echo $row['parentContact'] ?></td> -->
                                        <td><?php echo $row['transactionDate'] ?></td>
                                        <td><?php echo $row['bank_sl_num'] ?></td>
                                        <td><?php 
                                            $std_class = $data['class'];
                                            $sql = "";
                                            if ($std_class == "S1" || $std_class == "S2" || $std_class == "S3"){
                                                $sql = "SELECT amount FROM fees_structure WHERE division='ol'";
                                            }else{
                                                $sql = "SELECT amount FROM fees_structure WHERE division='al'";
                                            }

                                            $default_fees = mysqli_fetch_assoc(mysqli_query($con, $sql))['amount']; 
                                            
                                            echo number_format($default_fees);
                                         ?> RWF</td>
                                        <td class="text-success">- <?php echo number_format($row['amount']) ?> RWF</td>
                                        <td class="text-danger"><?php echo number_format($default_fees - $row['amount']) ?> RWF</td>
                                        <td><?php echo $row['term'] ?></td>
                                        <td><a href="payment/<?php echo $row['evidence'] ?>" target="_blank"><img src="payment/<?php echo $row['evidence'] ?>" alt="Receipt" style="width: 70px; height: 70px"></a></td>
                                        <td align="center">

                                            <?php  
                                            $id = $row['student'];
                                            $name = mysqli_query($con, "SELECT * FROM ol WHERE studentId='{$id}'");
                                            if (mysqli_num_rows($name)>0) {
                                                $data = mysqli_fetch_assoc($name);
                                                $class = $data['class'];
                                                $amount = $row['amount'];
                                                echo "<a href='bursar_fees.php?class=$class&level=ol&std=$id&term=1&paid=$amount' class='bi bi-check-lg btn btn-success'></a>";
                                            }else{
                                                $name = mysqli_query($con, "SELECT * FROM al WHERE studentId='{$id}'");
                                                $data = mysqli_fetch_assoc($name);
                                                $class = $data['class'];
                                                $term = $row['term'];
                                                echo "<a href='bursar_fees.php?class=$class&level=al&term=$term&std=$id' class='bi bi-check-lg btn btn-success'></a>";
                                            }
                                            ?>

                                        </td>
                                        <td align="center"><a href="fees_del.php?id=<?php echo $row['id']; ?>" class="bi bi-trash btn btn-danger"></a></td>
                                    </tr>
                                    <?php }}else{echo "<tr><td colspan='8' align='center'>No recent paid school fees</td></tr>"; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Applying Teachers -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Stock changes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Stock Id</th>
                                        <th scope="col">Activity</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col" align="center">Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>00011001</td>
                                        <td>Purchasing</td>
                                        <td>Water</td>
                                        <td>500000 RWF</td>
                                        <td>2023-05-23</td>
                                        <td align="center"><a href="" class="bi bi-printer-fill btn btn-success"></a></td>
                                    </tr>
                                </tbody>
                            </table>
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