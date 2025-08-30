<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMMS  •  Login</title>
    <?php include_once 'include/style.php'; ?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
        <?php  
        if (isset($_GET['err'])) {
        ?>
        <div class="container-fluid" style="width: 40%">
            <div class="alert alert-danger text-dark text-center">
                <h3>Access Denied!</h3>
                <i>Wrong Credentials</i>
            </div>
        </div>
        <?php } ?>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="signin_process.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="mellow@example.com" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="mellow@123" id="pswd" name="pswd" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="pass" onclick="show()">
													<label class="custom-control-label" for="pass">Show password</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="forgot-password.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Request One!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include_once 'include/scripts.php'; ?>
    <script>
        var isShow = false;
        var pswd = document.getElementById('pswd');
        function show() {
            if (!isShow) {
                pswd.type='text';
                isShow=true;
            }else{
                pswd.type='password';
                isShow=false;
            }
        }
    </script>

</body>

</html>