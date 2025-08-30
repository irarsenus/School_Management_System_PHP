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

    <title>EMMS  •  Parent</title>

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

        <?php include_once 'dashboard/parent_header.php'; ?>



        <div class="container-fluid mt-5">

            <div class="container-fluid">

            <!-- Students -->

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <center><h2>Payment form</h2></center>

                    <div class="card-header">

                        <h4 class="card-title">Paid Fees: <b> 

                            <?php 

                            $fetch = mysqli_query($con, "SELECT * FROM schoolfees WHERE student='{$id}' AND term='{$ter}'");

                            if (mysqli_num_rows($fetch)>0) {

                                $fees = mysqli_fetch_assoc($fetch);

                                if (empty($fees['amount'])) {

                                    echo "0";

                                }else{

                                    echo $fees['amount'];

                                }

                            }else{

                                echo "0";

                            }

                            ?>

                            </b>

                         RWF</h4>

                    </div>

                    <div class="card-body">

                                <form action="fees_process.php" method="post" enctype="multipart/form-data">



                                    <input type="hidden" name="level" value="<?php echo $level; ?>">

                                    <input type="hidden" name="student" value="<?php echo $id; ?>">

                                    <div class="text-center mb-4 wrapper">

                                        <p style="text-align: center;" class="image profile-photo mb-2">

                                            <img src="payment/bursar_sample.jpg" style="width: 200px; height: 200px;" class="img img-fluid rounded-circle" alt="">

                                        </p>

                                        <div class="content" hidden>

                                           <div class="icon">

                                              <i class="fas fa-cloud-upload-alt"></i>

                                           </div>

                                           <div class="text" hidden>

                                              No file chosen, yet!

                                           </div>

                                        </div>

                                        <div id="cancel-btn" hidden>

                                           <i class="fas fa-times"></i>

                                        </div>

                                        <div class="file-name" hidden>

                                           File name here

                                        </div>

                                        <input type="button" onclick="defaultBtnActive()" id="custom-btn" class="btn btn-warning form-control" value="Click to provide receipt evidence">

                                         <input id="default-btn" type="file" name="evidence" hidden> 

                                    </div>





                                    <div class="row mt-5">

                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Parent's Name</label>

                                                <input type="text" class="form-control" name="pname" value="">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Parent's Contact</label>

                                                <input type="text" class="form-control" name="pcontact" value="">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Amount paid</label>

                                                <input type="text" class="form-control" name="amount" placeholder="90000" value="<?php echo $fees['amount']; ?>">

                                            </div>

                                        </div>

                                        

                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Bank paid from</label>

                                                <input type="text" class="form-control" name="bank" placeholder="Bank of Kigali">

                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Bank Reference Number</label>

                                                <input type="text" class="form-control" name="slip_nm" placeholder="  ">

                                            </div>

                                        </div>

                                        

                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Date</label>

                                                <input type="date" name="date" class="datepicker-default form-control" id="datepicker" value="" placeholder="2023-05-22">

                                            </div>

                                        </div>



                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">

                                                <label class="form-label">Term</label>

                                                <input type="text" class="form-control" name="term" value="<?php echo $ter ?>" readonly>

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                            <center><button type="submit" name="pay" class="btn btn-primary" style="width: 60%"> Pay </button></center>

                                        </div>

                                    </div>

                                </form>

                            </div>

                </div>

            </div>

            </div>

        </div>

    </div>

    <?php include 'dashboard/footer.php' ?>

    </div>

    <?php include_once 'include/scripts.php'; ?>

<script>

   

         const wrapper = document.querySelector(".wrapper");

         const fileName = document.querySelector(".file-name");

         const defaultBtn = document.querySelector("#default-btn");

         const customBtn = document.querySelector("#custom-btn");

         const cancelBtn = document.querySelector("#cancel-btn i");

         const img = document.querySelector(".img");

         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

         function defaultBtnActive(){

           defaultBtn.click();

         }

         defaultBtn.addEventListener("change", function(){

           const file = this.files[0];

           if(file){

             const reader = new FileReader();

             reader.onload = function(){

               const result = reader.result;

               img.src = result;

               wrapper.classList.add("active");

             }

             cancelBtn.addEventListener("click", function(){

               img.src = "";

               wrapper.classList.remove("active");

             })

             reader.readAsDataURL(file);

           }

           if(this.value){

             let valueStore = this.value.match(regExp);

             fileName.textContent = valueStore;

           }

         });

 

</script>

</body>

</html>

<?php }}else{header("location: login.php");} ?>