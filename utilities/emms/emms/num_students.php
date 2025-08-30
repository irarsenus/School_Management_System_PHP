<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['post']) {
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
<body class="h-100">
    <div class="authincation h-100 mt-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <?php if (isset($_GET['class'])) {
                                    ?>
                                    <h1 class="text-center"><?php echo $_GET['class'] ?></h1>
                                    <?php } ?>
                                    <h4 class="text-center mb-4">Number of students to add</h4>
                                    <form action="students_add.php">
                                        <div class="form-group">
                                            <?php  
                                            if (isset($_GET['class'])) {
                                            ?>
                                            <input type="hidden" class="form-control" name="class" value="<?php echo $_GET['class']; ?>">
                                        <?php }else{ ?>
                                            <select class="form-control" name="class">
                                                    <option>--Classes--</option>
                                                    <?php  
                                                    $select = mysqli_query($con, "SELECT * FROM classes ORDER BY division DESC");
                                                    if (mysqli_num_rows($select)>0) {
                                                        while ($row = mysqli_fetch_assoc($select)) {
                                                    ?>
                                                    <option value="<?php echo $row['class'] ?>"><?php echo $row['class'] ?></option>
                                                    <?php }}else{echo "<option disabled>Empty list</option>";} ?>
                                                </select>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="num">
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
    <?php include_once 'include/scripts.php' ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>