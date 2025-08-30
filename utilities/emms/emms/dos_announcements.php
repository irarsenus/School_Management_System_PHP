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
                        <h4>Operation completed successfully</h4>
                    </div>
                    <?php } ?>
                </div>
                <h3 class="text-muted">Announcements</h3>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Published announcements</h4>
                                <a href="dos_announcement_publish.php" class="btn btn-info"> + Publish</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Announcer</th>
                                                <th>Date</th>
                                                <th>Announcement</th>
                                                <th>Print</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                            $count = 0;
                                            $select = mysqli_query($con, "SELECT * FROM announcements");
                                            if (mysqli_num_rows($select)>0) {
                                                while ($row = mysqli_fetch_assoc($select)) {
                                            ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['announcer'] ?></td>
                                                <td><?php echo $row['postDate'] ?></td>
                                                <td><?php echo $row['content'] ?></td>
                                                <td align="center"><a href="ann_print.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-printer-fill"></i></a></td>
                                                <td align="center"><a href="ann_del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                                            </tr>
                                        <?php }}else{echo "<tr><td colspan='6' align='center'> No recent announcements </td></tr>";} ?>
                                        </tbody>
                                    </table>
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
<?php }else{header("location: admin.php");} ?>