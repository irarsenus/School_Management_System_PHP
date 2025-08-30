<?php  
include_once 'include/connect.php';
session_start();
if ($_SESSION['id']) {
$id = $_SESSION['id'];
$select = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$id}'");
$data = mysqli_fetch_assoc($select);
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
                        <h4 class="card-title">Editing Profile</h4>
                    </div>
                    <div class="card-body">
                                <form action="teacher_edit_process.php" method="post" enctype="multipart/form-data">

                                    <div class="text-center mb-4 wrapper">
                                        <p style="text-align: center;" class="image profile-photo mb-2">
                                            <img src="profiles/<?php echo $data['img'] ?>" style="width: 200px; height: 200px;" class="img img-fluid rounded-circle" alt="">
                                        </p>
                                        <div class="content" hidden>
                                           <div class="icon">
                                              <i class="fas fa-cloud-upload-alt"></i>
                                           </div>
                                           <div class="text" hidden>
                                              No file chosen, yet!
                                           </div>
                                        </div>
                                        <div id="cancel-btn" hidden>
                                           <i class="fas fa-times"></i>
                                        </div>
                                        <div class="file-name" hidden>
                                           File name here
                                        </div>
                                        <input type="button" onclick="defaultBtnActive()" id="custom-btn" class="btn btn-warning form-control" value="Choose profile image">
                                         <input id="default-btn" type="file" name="profile" hidden> 
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="fname" value="<?php echo $data['firstName']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lname" value="<?php echo $data['lastName'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input name="pswd" class="datepicker-default form-control" id="datepicker" value="<?php echo $data['password']; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Joining Year</label>
                                                <input name="joinYear" class="datepicker-default form-control" id="datepicker" value="<?php echo $data['year']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" name="number" value="<?php echo $data['phone']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Id Number</label>
                                                <input name="idNumber" class="datepicker-default form-control" id="datepicker1" value="<?php echo $data['userId']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Diploma</label>
                                                <input type="text" class="form-control" name="diploma" value="<?php echo $data['diploma'] ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option value="Gender">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Department</label>
                                                <select class="form-control" name="department">
                                                    <option value="Department">Department</option>
                                                    <option value="ICT">ICT</option>
                                                    <option value="TOURISM">TOURISM & BOOKING</option>
                                                    <option value="CULINARY">FOOD & BEVAREGES</option>
                                                    <option value="SCIENCES">SCIENCES</option>
                                                    <option value="LANGUAGES">LANGUAGES</option>
                                                    <option value="HISTORY">HISTORY & CITIZENSHIP</option>
                                                    <option value="FIELD">FIELD STUDY</option>
                                                    <option value="COMMUNICATION">COMMUNICATION SKILLS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit"name="update" class="btn btn-primary"> Update </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    </div>
    <?php include_once 'include/scripts.php'; ?>
<script>
   
         const wrapper = document.querySelector(".wrapper");
         const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector(".img");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
         });
 
</script>
</body>
</html>
<?php }else{header("location: login.php");} ?>