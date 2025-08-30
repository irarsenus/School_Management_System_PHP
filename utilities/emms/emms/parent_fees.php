<?php  

include 'include/connect.php';

error_reporting(0);



if (isset($_GET['id'])) {

	$id = mysqli_real_escape_string($con, $_GET['id']);

	$level = $_GET['level'];

	$ter = $_GET['term'];

	$select = mysqli_query($con, "SELECT * FROM $level WHERE studentId='{$id}'");

	if (mysqli_num_rows($select)>0) {

		$select = mysqli_fetch_assoc($select);

		$fname = $select['firstName'];

		$lname = $select['lastName'];

		$class = $select['class'];

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>ESMMS  •  Parent</title>

    <?php include 'include/style.php' ?>

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

        <?php include 'dashboard/parent_header.php' ?>



            <div class="container mt-5">

                <?php if(isset($_GET['err'])){ ?>

                    <div class="alert alert-danger text-center">

                        <h3><?php echo $_GET['err']; ?></h3>

                    </div>

                    <?php }elseif (isset($_GET['succ'])) {?>

                    <div class="alert alert-success text-center">

                        <h3>Money Sent successfully!</h3>

                        <h6>Amount: <b><?php echo number_format($_GET['amount']) ?>RWF</b></h6>

                        <h6>Transaction Id: <b><?php echo $_GET['succ'] ?></b></h6>

                    </div>

                    <?php } ?>

                <h3 class="text-muted">School fees  ||  Term <?php echo $ter ?></h3>

                <a href="parent_fees.php?id=<?php echo $id; ?>&level=<?php echo $level ?>&term=1" class="btn btn-outline-secondary">Term 1</a>

                <a href="parent_fees.php?id=<?php echo $id; ?>&level=<?php echo $level ?>&term=2" class="btn btn-outline-secondary">Term 2</a>

                <a href="parent_fees.php?id=<?php echo $id; ?>&level=<?php echo $level ?>&term=3" class="btn btn-outline-secondary">Term 3</a>

                <br><br>

                <div class="card">

                    <div class="card-body">

                        <p><b>Student's Id:</b> <?php echo $id; ?></p>

                        <p><b>Student's Name:</b> <?php echo $fname.' '.$lname; ?></p>

                        <p><b>Division:</b> 

                            <?php  

                            if ($level == 'ol') {

                                echo "O'LEVEL";

                            }else{

                                echo "A'LEVEL";

                            }

                            ?>

                        </p>

                        <p><b>Class:</b> <?php echo $class ?></p>

                        <p><b>Year:</b> <?php echo date('Y') ?></p>
                        <p><b>School Fees:</b> <?php 
                            $fees_structure = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM fees_structure WHERE division='$level'"));
                            echo number_format($fees_structure['amount']);
                         ?> RWF</p>
                        
                        <p><b>Paid Fees: </b>-
                        <?php 

                            $fetch = mysqli_query($con, "SELECT * FROM schoolfees WHERE student='{$id}' AND term='$ter'");

                            if (mysqli_num_rows($fetch)>0) {

                                $fees = mysqli_fetch_assoc($fetch);

                                if (empty($fees['amount'])) {

                                    echo "0";

                                }else{

                                    // echo $fees['amount'];
                                echo number_format($fees['amount']);


                                }

                            }else{

                                echo "0";

                                echo number_format($fees['amount']);

                            }

                            ?>
                            RWF
                            </p>
                        

                    </div>



                    <div class="card-footer">

                        <h2>Remaining Fees: 
                            <?php 
                            echo number_format($fees_structure['amount'] - $fees['amount']);
                            ?>
                            
                         RWF</h2>

                        <br>

                        <a href="pay.php?id=<?php echo $id ?>&level=<?php echo $level ?>&term=<?php echo $ter ?>" class="btn btn-success" style="width: 100%;">Pay School fees</a>

                    </div>

                </div>

            </div>

        <?php include 'dashboard/footer.php'; ?>

        

    </div>

    <?php include 'include/scripts.php' ?>		

</body>



</html>		





<?php 

	}else{

		header("location: parent_id.php?err");

	}



}else{

	header("parent_id.php");

}

?>