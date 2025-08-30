<?php  
include 'include/connect.php';

session_start();
if ($_SESSION['id']) {
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
        <?php include 'dashboard/teacher_header.php'; ?>

        <div class="container mt-5">
        	<h3 class="text-muted">Forum</h3>
        	<div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active">Posts</a></li>
                                        </ul>
                                        <div class="tab-content">
											<div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                    
                                                	<?php  
                                                    $select = mysqli_query($con, "SELECT * FROM forum");
                                                    if (mysqli_num_rows($select)>0) {
                                                        while($post=mysqli_fetch_assoc($select)){
                                                            $img = $post['posterImg'];
                                                            $name = $post['poster'];
                                                            $pDate = $post['postDate'];
                                                            $post = $post['post'];
                                                    ?>
                                                    <div class="card p-2 rounded">
                                                    	<div class="card-header">
                                                    		<span><img src="profiles/<?php echo $img ?>" style="width: 50px;height: 50px;" class="rounded-circle"> <?php echo $name; ?></span>
                                                    		<span><?php echo $pDate ?></span>
                                                    	</div>
                                                    	<hr>
	                                                    <div class="card-body profile-uoloaded-post border-bottom-1 pb-5">
	                                                        <p><?php echo $post ?></p>
	                                                    </div>
                                                	</div>
                                                	<?php }}else{
                                                        echo "<h1>No available posts at this moment...</h1>";
                                                    } ?>

                                                	<form name="post" method="POST" action="teacher_post.php">
	                                                	<div class="post-input">
	                                                        <textarea name="post" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Tell us what is on your mind..." maxlength="250" required></textarea>
                                                            <span class="text-muted">Max: 250 words</span>
                                                            <hr>
                                                            <input type="button" class="btn btn-primary" value="Post" onclick="return validate()">
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
    <script>
    	function validate() {
    		var allow = confirm("This post will be visible to anyone including parents and your fellow teachers.\nDo you wish to continue?");
    		if (allow) {
                post.submit();
            }else{
                return false;
                document.post.textarea.focus();
            }
    	}
    </script>    
    <?php include 'dashboard/footer.php'; ?>
    <?php include_once 'include/scripts.php'; ?>
</body>
</html>

<?php 
}else{
	header("location: login.php");
}
?>