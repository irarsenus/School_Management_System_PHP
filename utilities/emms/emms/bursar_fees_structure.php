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

                        <h4>School fees updated!</h4>

                    </div>

                    <?php } ?>

                </div>

                <div class="d-flex justify-content-between">
                    <h3 class="text-muted">School Fees Structure</h3>
                </div>

                <hr>

                <div class="row">
                    <!-- Form to Update Fees -->
                    <div class="col-md-6">
                        <div class="card shadow rounded-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-2 text-white">Update School Fees</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="level" class="form-label">Select Level</label>
                                        <select class="form-select" name="division" id="level" required>
                                            <option value="" disabled selected>-- Choose Level --</option>
                                            <option value="ol">O'Level</option>
                                            <option value="al">A'Level</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Fees Amount (RWF)</label>
                                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter amount" required>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" name="update" class="btn btn-success">Update Fees</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Current Fee Structure Display -->
                    <div class="col-md-6">
                        <div class="card shadow rounded-3">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-2">Current Fees Structure</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                // Fetch current fees from database
                                $fees_query = mysqli_query($con, "SELECT * FROM fees_structure");
                                if (mysqli_num_rows($fees_query) > 0) {
                                    echo '<ul class="list-group">';
                                    while ($row = mysqli_fetch_assoc($fees_query)) {
                                        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                                        echo strtoupper($row['division'] == "ol" ? "O'Level" : "A'Level");
                                        echo '<span class="badge bg-success rounded-pill">' . number_format($row['amount']) . ' RWF</span>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '<p class="text-muted">No fees set yet.</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                

            </div>

    </div>

    <?php include_once 'include/scripts.php'; ?>

</body>

</html>

<?php 
if (isset($_POST['update'])){
    $division = $_POST['division'];
    $amount = $_POST['amount'];

    $update = mysqli_query($con, "UPDATE fees_structure SET amount='{$amount}' WHERE division='{$division}'");

    if ($update){
        // header("location: bursar_fees_structure.php?succ");
        echo "<script>window.location.assign('bursar_fees_structure.php?succ')</script>";
    }else{
        echo "<script>window.location.assign('bursar_fees_structure.php?err')</script>";
        // header("location: bursar_fees_structure.php?err");
    }
}
?>

<?php }else{header("location: admin.php");} ?>