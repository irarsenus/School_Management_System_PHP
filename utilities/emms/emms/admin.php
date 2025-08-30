<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ADMNISTRATION  •  Login</title>
    <!-- Favicon icon -->
    <?php include_once 'include/style.php' ?>
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
                                    <center>
                                        <img src="profiles/default.png" class="rounded-circle" style="width: 200px;">
                                    </center>
                                    <h2 class="text-center mb-4">Administration</h2>
                                    <form action="admin_process.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Post</strong></label>
                                            <select class="form-control" name="post">
                                                <option value=""> Role </option>
                                                <option value="MASTER">HEAD MASTER</option>
                                                <option value="DOS">DOS</option>
                                                <option value="PATRON">DEAN OF DISCIPLINE</option>
                                                <option value="BURSAR">BURSAR</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="pswd" placeholder="Password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
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
    <!-- #/ container -->
    <!-- Common JS -->
    <?php include_once 'include/scripts.php'; ?>
</body>

</html>