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
        <?php include_once 'dashboard/patron_header.php'; ?>

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
                <h3 class="text-muted">Custom tables</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tables</h4>
                                <a href="patron_table_ins.php" class="btn btn-info"> + New Table </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Table Name</th>
                                                <th>Label</th>
                                                <th>Rows</th>
                                                <th>Columns</th>
                                                <th>Description</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>List of new comers</td>
                                                <td align="center"><h2 class="bi-people-fill"></h2></td>
                                                <td>10</td>
                                                <td>20</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor</td>
                                                <td><a href="table_delete.php" class="bi-trash-fill btn btn-danger"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>


        <?php include_once 'dashboard/footer.php'; ?>
    </div>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>
<?php }else{header("location: admin.php");} ?>