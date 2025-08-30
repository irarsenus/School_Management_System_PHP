<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
    $id = $_GET['module'];
    $select = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$id}'");
    $data = mysqli_fetch_assoc($select);
    $subject = $data['module'];
    $class = $data['class'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMMS  •  <?php echo $_SESSION['fname']; ?></title>
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
    <?php include_once 'dashboard/teacher_header.php' ?>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
            <div class="container-fluid">
                <div class="content-body">
                    <div class="container-fluid">
                <h3 class="text-muted">Exercises</h3>
                <hr>
                        <div class="row">
                            
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="teacher_exercise_process.php" method="post">
                                    <input type="hidden" name="class" value="<?php echo $class ?>">
                                    <input type="hidden" name="subject" value="<?php echo $subject ?>">
                                    <div class="row">
                                        <?php  
                                        for ($i=1; $i <= $_GET['num']; $i++) {
                                        ?>
                                        <input type="hidden" name="num" value="<?php echo $_GET['num'] ?>">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="text-muted"><u>Question <?php echo $i ?></u></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Question </label>
                                                <input type="text" class="form-control" name="<?php echo $i.'ques' ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Correct Answer</label>
                                                <select name="<?php echo $i.'opt' ?>" class="form-control">
                                                    <option value="">Correct Answer</option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Answers</label>
                                                <input type="text" class="form-control" name="<?php echo $i.'ans1' ?>" placeholder="Answer 1">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="<?php echo $i.'ans2' ?>" placeholder="Answer 2">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="<?php echo $i.'ans3' ?>" placeholder="Answer 3">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="<?php echo $i.'ans4' ?>" placeholder="Answer 4">
                                            </div>

                                        </div>

                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <br><hr><br>
                                        </div>
                                    <?php } ?>
                                            <button type="submit" name="add" class="btn btn-primary form-control text-white">Set questions</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                        </div>
                    </div>
                </div>
        <?php include_once 'dashboard/footer.php' ?>
    </div>
</div>

    <?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>