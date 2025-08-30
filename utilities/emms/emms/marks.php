<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['post']) {
$term=$_GET['term'];

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
    <?php if(isset($_GET['class'])){ ?>
    <div id="main-wrapper">
        <?php include 'dashboard/dos_header.php'; ?>
        <div class="content-body">
            <div class="container-fluid">
                <div class="container-fluid">
                    <?php if(isset($_GET['err'])){ ?>
                    <div class="alert alert-danger text-center">
                        <h4>Operation Failed</h4>
                    </div>
                    <?php }elseif(isset($_GET['succ'])){ ?>
                    <div class="alert alert-success text-center">
                        <h4>Operation Completed Successfully!</h4>
                    </div>
                    <?php } ?>
                </div>
                <h3 class="text-muted">
                    <?php echo $_GET['class'] ?>
                    <a href="validate.php?class=<?php echo$_GET['class'] ?>&level=<?php echo $_GET['level'] ?>&term=1" class="btn btn-outline-primary">Term 1</a>
                    <a href="validate.php?class=<?php echo$_GET['class'] ?>&level=<?php echo $_GET['level'] ?>&term=2" class="btn btn-outline-primary">Term 2</a>
                    <a href="validate.php?class=<?php echo$_GET['class'] ?>&level=<?php echo $_GET['level'] ?>&term=3" class="btn btn-outline-primary">Term 3</a>
                </h3>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-muted">Term <?php echo $_GET['term']; ?></h3>
                                <a href="report_all_<?php echo $term ?>.php?class=<?php echo $_GET['class'] ?>&level=<?php echo $_GET['level'] ?>&term=<?php echo $term ?>" class="btn btn-primary bi bi-printer float-start"></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <?php  
                                                $class = $_GET['class'];
                                                $level = $_GET['level']; 
                                                $subjects=mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='{$term}'");
                                                while($th = mysqli_fetch_assoc($subjects)){
                                                ?>
                                                <th style="width:10px"><?php echo $th['abr'].' CAT'?></th>
                                                <th style="width:10px;"><?php echo $th['abr'].' EX'?></th>
                                                <th style="width:10px;border-right: 2px dashed;"><?php echo $th['abr'].' TOT'?></th>
                                                 <?php } ?>
                                                <th style="width:10px">Report</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $availabe = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='{$term}'");
                                            $num = mysqli_num_rows($availabe);
                                            if ($num>0) {
                                            $count=0; 
                                            $select = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}'");
                                            if (mysqli_num_rows($select)>0) {
                                            while($row = mysqli_fetch_assoc($select)){
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['firstName']; ?></td>
                                                <td><?php echo $row['lastName']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <?php  
                                                $studentId=$row['studentId'];
                                                $sub = mysqli_query($con, "SELECT * FROM modules WHERE class='{$class}' AND term='{$term}'");
                                                    while($abr = mysqli_fetch_assoc($sub)){
                                                    $marks = mysqli_query($con, "SELECT * FROM $level WHERE class='{$class}' AND studentId='{$studentId}'");
                                                    while ($td=mysqli_fetch_assoc($marks)) {
                                                ?>
                                                <td><?php echo $td[$abr['abr'].'_cat_'.$term] ?></td>
                                                <td><?php echo $td[$abr['abr'].'_ex_'.$term] ?></td>
                                                <td style="border-right: 2px dashed;"><?php echo $td[$abr['abr'].'_tot_'.$term] ?></td>
                                                <?php }} ?>
                                                <td>
                                                    <a href="report_<?php echo $term ?>.php?id=<?php echo $row['studentId'] ?>&level=<?php echo $level ?>&class=<?php echo $class ?>&term=<?php echo $term ?>" class="btn btn-primary bi bi-journals"></a>
                                                </td>
                                            </tr>
                                        <?php }}else{
                                            echo "<td colspan='8' class='text-center'><h3>No Students registered</h3></td>";
                                        }}else{
                                            echo "<h3 class='text-danger'>No marks entered in this term</h3>";
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
    </div>
<?php }else{header("location: students_select.php");} ?>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>