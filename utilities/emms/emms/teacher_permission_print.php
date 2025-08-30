<?php  
include 'include/connect.php';
session_start();
if (isset($_GET['date'])) {
$date = $_GET['date'];
$teacher = $_GET['teacher'];

$select = mysqli_query($con, "SELECT * FROM staffpermissions WHERE arrivalDate='{$date}' AND teacher='{$teacher}'");
$teacher = mysqli_fetch_assoc($select);

$name = $teacher['teacher'];
$name = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$name}'");
$name = mysqli_fetch_assoc($name);
$name = $name['firstName'].' '.$name['lastName'];
$department = $teacher['department'];
$reason = $teacher['reason'];
$depature = $teacher['depatureDate'];
$arrival = $teacher['arrivalDate'];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name ?>  •  <?php echo $reason ?>  Permission</title>
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
            <P>Reason: <span style="border-bottom: 3px dotted black;"><?php echo $reason ?></P>
            <P>Date of departure: <span style="border-bottom: 3px dotted black;"><?php echo $depature ?></span></P>
            <P>Date of return: <span style="border-bottom: 3px dotted black;"><?php echo $arrival ?></P>
        </form>
        </div>
        <div class="stamp">
            <p>STAMP & SIGNATURE</p>
        </div>
    </div>
    </center>
    </fieldset>

<script>
    print();
    window.location.assign("teacher_list_permissions.php");
</script>
</body>
</html>
<?php }else{header("location: login.php");} ?>
