<?php  
include 'include/connect.php';
session_start();
if (isset($_GET['id'])) {

$id = $_GET['id'];

$select = mysqli_query($con, "SELECT * FROM stdpermissions WHERE id='{$id}'");
$data = mysqli_fetch_assoc($select);

$fname = $data['firstName']; 
$lname = $data['lastName']; 
$reason = $data['reason']; 
$class = $data['class']; 
$returnDate = $data['returnDate']; 
$depatureDate = $data['depatureDate']; 
$provider = $data['provider']; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $fname.' '.$lname ?>  •  <?php echo $reason ?>  Permission</title>
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
    
    <h1 align="center"><u> STUDENT'S PERMISSION</u></h1>
    <div class="container">
        <div class="identity">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <P>Provider: <span style="border-bottom: 3px dotted black;"><?php echo $data['provider'] ?></span></P>
            <P>Student's name: <span style="border-bottom: 3px dotted black;"><?php echo $fname.' '.$lname ?></span></P>
            <P>Class: <span style="border-bottom: 3px dotted black;"><?php echo $class ?></span></P>
            <P>Reason: <span style="border-bottom: 3px dotted black;"><?php echo $reason ?></P>
            <P>Date of departure: <span style="border-bottom: 3px dotted black;"><?php echo $depatureDate ?></span></P>
            <P>Date of return: <span style="border-bottom: 3px dotted black;"><?php echo $returnDate ?></P>
        </div>
        <div class="stamp">
            <p>STAMP & SIGNATURE</p>
        </div>
    </div>
    </center>
    </fieldset>

<script>
    print();
    window.location.assign("patron_permissions.php");
</script>
</body>
</html>
<?php }else{header("location: login.php");} ?>
