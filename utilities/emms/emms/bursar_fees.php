<?php  

include_once 'include/connect.php';

session_start();

if ($_SESSION['post']) {

    $term = $_GET['term']; 

    $class = $_GET['class'];
    $std = $_GET['std'] ?? '';
    $level = $_GET['level'];
    $paid = $_GET['paid'] ?? '0';

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

    <style>

        <?php  

        if (isset($_GET['std'])) {

            $row = $_GET['std'];

            echo "#row".$row.'{background: #d0cece;}'; 

        }

        ?>

    </style>

    <!--**********************************

        Main wrapper start

    ***********************************-->

    <?php if(isset($_GET['class'])){ ?>

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

                        <h4>Operation Completed Successfully!</h4>

                    </div>

                    <?php } ?>

                </div>

                <h3 class="text-muted"><?php echo $_GET['class'] ?>  || Term <?php echo $term ?></h3>

                <a href="bursar_fees.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=1" class="btn btn-outline-primary">Term 1</a>

                <a href="bursar_fees.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=2" class="btn btn-outline-primary">Term 2</a>

                <a href="bursar_fees.php?class=<?php echo $class ?>&level=<?php echo $level ?>&term=3" class="btn btn-outline-primary">Term 3</a>

                <hr>

                <form method="post" action="bursar_fees_process.php">

                <input type="hidden" name="term" value="<?php echo $term ?>">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header">

                                <h4 class="card-title">students List</h4>

                                <?php  

                                if ($_GET['class'] == 'S1' || $_GET['class'] == 'S2' || $_GET['class'] == 'S3') {

                                ?>

                                    <a href="bursar_fees_print.php?class=<?php echo $_GET['class'] ?>&level=ol" class="btn btn-primary bi bi-printer float-start"></a>

                                <?php }else{ ?>

                                    <a href="bursar_fees_print.php?class=<?php echo $_GET['class'] ?>&level=al" class="btn btn-primary bi bi-printer float-start"></a>

                                <?php } ?>

                                <button type="submit" name="sub" class="btn btn-info"> <i class="bi bi-pencil-square"></i> Update Fees </button>

                            </div>

                            <div class="card-header d-flex justify-content-start">
                                <div class="d-flex">
                                    <h5>Paid: 
                                        <?php  
                                            $tot_paid = mysqli_query($con, "SELECT * FROM $level WHERE paid='yes'");
                                            echo mysqli_num_rows($tot_paid);
                                        ?>
                                    </h5>
                                </div>
                                    &nbsp;&nbsp;&nbsp;
                                <div class="d-flex">
                                    <h5>Not Paid: 
                                        <?php  
                                            $tot_unpaid = mysqli_query($con, "SELECT * FROM $level WHERE paid!='yes'");
                                            echo mysqli_num_rows($tot_unpaid);
                                        ?>
                                    </h5>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">

                                        <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Student Id</th>
                                                <th>First Name</th>

                                                <th>Last Name</th>

                                                <th>Amount</th>

                                                <th style="text-align: center;">Full Paid</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php

                                            $count=1; 

                                            $select = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' ORDER BY firstName ASC");

                                            if (mysqli_num_rows($select)>0) {

                                                while($row = mysqli_fetch_assoc($select)){

                                            ?>

                                            <tr id="row<?php echo $row['studentId']; ?>">

                                                <input type="hidden" name="<?php echo $count.'id' ?>" value="<?php echo $row['studentId'] ?>">

                                                <input type="hidden" name="num" value="<?php echo mysqli_num_rows($select); ?>">

                                                <input type="hidden" name="class" value="<?php echo $row['class']; ?>">

                                                <input type="hidden" name="level" value="<?php echo $level; ?>">

                                                <td><?php echo $count; ?></td>

                                                <td><?php echo $row['studentId']; ?></td>
                                                <td><?php echo $row['firstName']; ?></td>

                                                <td><?php echo $row['lastName']; ?></td>

                                                <?php 
                                                    $student = $row['studentId']; 
                                                    $fee = mysqli_query($con, "SELECT * FROM schoolfees WHERE student='{$student}' AND term='{$term}'"); 

                                                    $fin = "0";
                                                    
                                                    if(mysqli_num_rows($fee)>0){
                                                        $value = mysqli_fetch_assoc($fee); 
                                                        if ($value['amount']=='') { 
                                                            $fin = "0"; 
                                                        }else{ 
                                                            $fin = $value['amount']; 
                                                        }
                                                    }else{
                                                        $fin = "0";
                                                    }
                                                ?>
                                                <td align="center"><input name="<?php echo $count.'amount' ?>" style="text-align: center;" value="<?php echo $std == $row['studentId'] ? number_format( $paid) : number_format($fin) ?>"> RWF</td>

                                                <td align="center">

                                                    <?php  

                                                    if (empty($row['paid']) || $row['paid']=='no') {

                                                    ?>

                                                    <input type="checkbox" class="form-control" name="<?php echo $count.'paid' ?>">

                                                    <?php }else{ ?>

                                                    <input type="checkbox" class="form-control" name="<?php echo $count.'paid' ?>" checked>

                                                    <?php } ?>

                                                </td>

                                                <?php $count++; ?>

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

                </form>

            </div>

    </div>

<?php }else{header("location: students_select.php");} ?>

    <?php include_once 'include/scripts.php'; ?>

</body>

</html>

<?php }else{header("location: admin.php");} ?>