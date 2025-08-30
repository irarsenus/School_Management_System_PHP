<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ESMMS  • student </title>
    <?php include 'include/style.php'; ?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <?php  
            if (isset($_GET['err'])) {
            ?>
            <div class="container">
                <div class="alert alert-danger text-dark text-center">
                    <h3>Access Denied!</h3>
                    <i>Invalid Student Id</i>
                </div>
            </div>
            <?php } ?>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Student Login</h4>
                                    <form action="student_login_process.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Student Id</strong></label>
                                            <input type="placeholder" maxlength="15" class="form-control" placeholder="000L3SOD0000" name="id">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/scripts.php'; ?>
</body>

</html>