<?php  
include_once 'include/connect.php';
if (isset($_POST['email'])) {
    $email=mysqli_real_escape_string($con, $_POST['email']);
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Forgot password </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.css">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <?php  

                                    $select = mysqli_query($con, "SELECT * FROM staff WHERE email='{$email}'");
                                    if (mysqli_num_rows($select)>0) {
                                    ?>
                                    <h4 class="text-center mb-4">Dear Teacher,</h4>
                                    <p>If you forgot your recent password to login your ESMMS account, we kindly advise you to contact the Dean Of Studies(DOS) for password recovery in <code>teachers > options > password recovery</code>. We try to protect your credentials with this method.</p>
                                    <center><p style="border: 2px solid; width: 10%; border-radius: 100%;">or</p></center>
                                    <p>You can also try this method below but <b class="text-danger bi bi-exclamation-diamond"> Do it at your own risk</b>:</p>
                                    <center><button class="btn btn-danger" id="btn" onclick="rec()">Take Risk and Recover password</button></center>
                                        <hr>
                                        <hr>
                                    <div class="form-group rounded p-1" id="recover" style="display: none;box-shadow: 0 0 10px 0.5px black;">
                                        <form method="post">
                                            <label>Personal Identification Number: </label>
                                            <input type="hidden" name="email" placeholder="Enter your id number to recover your password" class="form-control" value="<?php echo $email; ?>">
                                            <input type="text" name="id" placeholder="Enter your id number to recover your password" class="form-control" autofocus>
                                            <center><input type="submit" name="submit" class="btn btn-success form-control mt-2" style="width: 50%" value="Recover"></center>
                                        </form>
                                    </div>
                                    <?php }else{echo "<h1 class='text-danger bi bi-exclamation-diamond-fill text-center'>Invalid Email</h1>";} ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
    if (isset($_POST['id'])) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $verify = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$id}' AND email='{$email}'");
        if (mysqli_num_rows($verify)<=0) {
            echo "<script>alert('Invalid Identification Number')</script>";
        }else{
            $data = mysqli_fetch_assoc($verify);
            $pass = $data['password'];
            $name = $data['firstName'].' '.$data['lastName'];
            echo "<script>alert('$name , You requested for a password recovery and the process was success fully with your password: $pass');window.location.assign('index.php')</script>";
        }
    }
    ?>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script>
        var box = document.getElementById('recover');
        var button = document.getElementById('btn');
        function rec(){
            button.style.display='none';
            box.style.display='';
        }
    </script>
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>
<?php } ?>