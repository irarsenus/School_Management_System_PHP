<?php  
include 'include/connect.php';
session_start();
if ($_SESSION['id']) {
$id = $_SESSION['id'];
$select = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$id}'");
$teacher = mysqli_fetch_assoc($select);
$name = $teacher['firstName'].' '.$teacher['lastName'];
$department = $teacher['department'];
$phone = $teacher['phone'];
$depature = date("D, d M Y");

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    
    <h1 align="center"><u> TEACHER'S PERMISSION</u></h1>
    <div class="container">
        <div class="identity">
            <form method="post" action="teacher_permission_process.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <P>Teacher's name: <span style="border-bottom: 3px dotted black;"><?php echo $name ?></span></P>
            <P>Department: <span style="border-bottom: 3px dotted black;"><?php echo $department ?></span></P>
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
<?php }else{header("location: login.php");} ?>
