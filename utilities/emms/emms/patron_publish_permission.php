<?php  
include 'include/connect.php';
session_start();
if ($_SESSION['post']) {
$post = $_SESSION['post'];
$select = mysqli_query($con, "SELECT * FROM admnistration WHERE post='{$post}'");
$depature = date("D, d M Y");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $post ?>  -  Permission</title>
    <link rel="stylesheet" type="text/css" href="permi.css">
</head>
<body>
    <fieldset>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="location">
                <p>ESSA NYARUGUNGA</p>
                <p>REPUBLIC OF RWANDA</p>
                <p>PROVINCE: KIGALI CITY</p>
                <p> DISTRICT: KICUKIRO</p>
                <p>P.O.BOX3806</p>
                <p>TEL:0788303811</p>
                <p>E-mail: essanyarugunga@yahoo.com</p>
            </div>
        </div>
    </header>
    
    <h1 align="center"><u> Student's permission</u></h1>
    <div class="container">
        <div class="identity">
            <form method="post" action="patron_permissions_process.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <P>Provider's name: <span style="border-bottom: 3px dotted black;"><?php echo $post ?></span></P>
            <P>student: <span style="border-bottom: 3px dotted black;">
                <select name="student">
                    <option disabled>A'level</option>
                    <?php  
                    $std = mysqli_query($con, "SELECT * FROM al ORDER BY firstName ASC");
                    while ($al=mysqli_fetch_assoc($std)) {
                    ?>
                    <option value="<?php echo $al['studentId'] ?>"><?php echo $al['firstName'].' '.$al['lastName'] ?></option>
                    <?php } ?>
                    <option disabled>O'Level</option>
                    <?php  
                    $std = mysqli_query($con, "SELECT * FROM ol ORDER BY firstName ASC");
                    while ($al=mysqli_fetch_assoc($std)) {
                    ?>
                    <option value="<?php echo $ol['studentId'] ?>"><?php echo $al['firstName'].' '.$al['lastName'] ?></option>
                    <?php } ?>
                </select>
            </span></P>
            <P>Reason: <input type="text" name="reason" style="border-bottom: 3px dotted black; width: 30%;"></P>
            <P>Date of departure: <span style="border-bottom: 3px dotted black;"><?php echo $depature ?></span></P>
            <P>Date of return: <input type="date" name="return" style="border-bottom: 3px dotted black;"></P>
        <input type="submit" value="Confirm" name="submit" class="submit">
        </form>
        </div>
        <div class="stamp">
            <p>STAMP & SIGNATURE</p>
        </div>
    </div>
    </center>
    </fieldset>

</body>
</html>
<?php }else{header("location: admin.php");} ?>
