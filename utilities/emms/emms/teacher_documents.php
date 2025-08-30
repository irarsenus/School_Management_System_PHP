<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
$id=$_SESSION['id'];
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
                        <h3>Operation complete!</h3>
                    </div>
                <?php } ?>

                <a href="document_upload.php" class="btn btn-success" style="float: right;"> <i class="bi bi-upload"></i> Upload </a>
                <div class="row">

                    <?php  
                    $select = mysqli_query($con, "SELECT * FROM documents");

                    if (mysqli_num_rows($select)) {
                        while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="text-center p-3 overlay-box" style="">
                                <div class="profile-photo">
                                    <img src="documents/img/<?php echo $row['image'] ?>" width="100" class="img-fluid rounded-circle" alt="">
                                </div>
                                <h3 class="mt-3 mb-1 text-white"><?php echo strtoupper($row['docName']) ?>
                                <p class="text-white mb-0"><?php echo $row['uploader'] ?></p>
                            </h3></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Type </span> <strong class="text-muted"><?php echo $row['type']; ?>   </strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Upload Date</span>      <strong class="text-muted"><?php echo $row['uploadDate']; ?> </strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Description: &nbsp;&nbsp;&nbsp; </span> <strong class="text-muted"> <?php echo $row['description']; ?></strong></li>

                            </ul>
                            <div class="card-footer border-0 mt-0">                              
                                <a href="documents/<?php echo $row['document'] ?>" target="_blank" class="btn btn-primary btn-lg btn-block" download="<?php echo $row['docName']; ?>">
                                    <h4 class="m-0 text-white"><i class="bi bi-download"></i></h4>                         
                                </a>       
                            </div>
                        </div>
                    </div>
                    <?php }}else{echo "No documents available...";} ?>
                </div>
        </div>
    </div>
</div>

<?php include_once 'include/scripts.php'; ?>

</body>
</html>
<?php }else{header("location: login.php");} ?>