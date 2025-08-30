<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
    if (isset($_GET['search'])) {
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

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php include_once 'dashboard/teacher_header.php'; ?>

        <div class="container-fluid mt-5">
            <div class="container-fluid">
                <?php if(isset($_GET['err'])){ ?>
                    <div class="alert alert-danger text-center">
                        <h3>Operation failed</h3>
                    </div>
                    <?php }elseif (isset($_GET['succ'])) {?>
                    <div class="alert alert-success text-center">
                        <h3>Marks entered successfully!</h3>
                    </div>
                    <?php } ?>
            <!-- Students -->
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><u>
                            <?php
                            $search = $_GET['search'];
                            $module = $_GET['subject'];
                            $sub = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$module}'");
                            $sub = mysqli_fetch_assoc($sub);
                            $abr=$sub['abr'];
                            echo $sub['module'];

                            ?>
                        </u>(<b>
                            <?php  
                            $select = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$module}'");
                            $row = mysqli_fetch_assoc($select);
                            echo $row['class'];
                            ?>
                        </b>)</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <form method="POST" action="teacher_marks_process.php">
                                <input type="hidden" name="subject" value="<?php echo $_GET['subject'] ?>">
                                <input type="hidden" name="term" value="<?php echo $_GET['term'] ?>">
                            <button type="submit" name="upd" class="btn btn-success mb-2" style="float: right;"> + Insert all</button>
                            <a href="marks_print.php?subject=<?php echo $_GET['subject'] ?>&term=<?php echo $_GET['term'] ?>" class="btn btn-primary bi bi-printer-fill"></a>
                            <table class="table verticle-middle table-responsive-md table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>CAT <b>/40</b></td>
                                        <td>EXAM <b>/60</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=0;
                                    $num=1;
                                    $level = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$module}'");
                                    $level = mysqli_fetch_assoc($level);
                                    $class = $level['class'];
                                    $level = $level['level'];
                                    $term = $_GET['term'];
                                    $exist = mysqli_query($con, "SELECT * FROM modules WHERE moduleId='{$module}' AND term='{$term}'");
                                    if (mysqli_num_rows($exist)>0) {
                                    $select = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' AND firstName='{$search}'");
                                    while ($row = mysqli_fetch_assoc($select)) {
                                    ?>
                                    <tr>
                                    <input type="hidden" value="<?php echo $row['studentId'] ?>" name="<?php echo $num."student" ?>">
                                    <input type="hidden" value="<?php echo mysqli_num_rows($select) ?>" name="num">
                                        <td><?php echo ++$count ?></td>
                                        <td><?php echo $row['firstName'] ?></td>
                                        <td><?php echo $row['lastName']; ?></td>
                                        <td>
                                            <input style="text-align: right;" type="text" maxlength="4" onkeyup="if (Number(this.value)>40) {this.style.background='red'}else{this.style.background=''}" class="form-control" name="<?php echo $num."cat" ?>" value="<?php echo $row[$abr.'_cat_'.$term]; ?>">
                                        </td>
                                        <td><input style="text-align: right;" type="text" maxlength="4" onkeyup="if (Number(this.value)>60) {this.style.background='red'}else{this.style.background=''}" class="form-control" name="<?php echo $num."ex" ?>" value="<?php echo $row[$abr.'_ex_'.$term]; ?>"></td>
                                        <?php ++$num; ?>
                                    </tr>
                                    <?php }}else{ ?>
                                        <tr><td colspan="6" align="center"><h3>No Entry for that subject in this term</h3></td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
<?php }}else{header("location: login.php");} ?>