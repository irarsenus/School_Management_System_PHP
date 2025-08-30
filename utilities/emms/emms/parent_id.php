<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ESMMS  •  Marks</title>
    <?php include_once 'include/style.php' ?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
             <?php  
        if (isset($_GET['err'])) {
        ?>
        <div class="container">
            <div class="alert alert-danger text-dark text-center">
                <h3>Invalid identification number! </h3>
            </div>
        </div>
        <?php } ?>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Marks authentication</h4>
                                    <form action="parent_marks.php" method="GET">
                                        <div class="form-group">
                                            <label>Student Id</label>
                                            <input type="hidden" name="term" value="1">
                                            <input type="text" name="id" class="form-control" placeholder="000L3SOD000" maxlength="15" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Division</label>
                                            <select class="form-control" name="level">
                                                <option value="al">A'Level</option>
                                                <option value="ol">O'Level</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="proceed" class="btn btn-primary btn-block">Proceed</button>
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
    <?php include_once 'include/scripts.php'; ?> 
</body>

</html>