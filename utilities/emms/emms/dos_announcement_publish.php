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

                <!-- row -->
                <form action="dos_announcement_process.php" name="announce" method="POST">
                <div class="row mt-5">
                    <div class="col-xl-12 col-xxl-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Publishing an announcement</h4>
                            </div>

                            <div class="card-body">
                                <div class="summernote"></div>
                            </div>

                            <div>
                                <textarea name="announcement" id="field" hidden></textarea>
                                <button type="button" name="announce" class="btn btn-primary" style="width: 100%" onclick="ann()">Announce</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php include_once 'include/scripts.php'; ?>
    <script>
        function ann() {
            let announcement = document.querySelector('.note-editable').innerHTML;
            field.value=announcement;
            if (field.value=announcement) {
                announce.submit();
            }
        }
    </script>
</body>
</html>
<?php }else{header("location: admin.php");} ?>