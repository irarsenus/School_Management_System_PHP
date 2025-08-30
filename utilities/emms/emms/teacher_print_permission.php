<?php  
include 'include/connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = mysqli_query($con, "SELECT * FROM staffpermissions WHERE id='{$id}'");
    $select = mysqli_fetch_assoc($select);
    $userId = $select['teacher'];
    $department = $select['department'];
    $reason = $select['reason'];
    $depature = $select['depatureDate'];
    $arrival = $select['arrivalDate'];
    $approval = $select['approved'];

    $name = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$userId}'");
    $name = mysqli_fetch_assoc($name);
    $name = $name['firstName'].' '.$name['lastName'];
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
            <P>Approval: <span style="border-bottom: 3px dotted black;"><?php 

            if (empty($approval)) {
                echo "Pending";
            }elseif ($approval == 'Yes') {
                echo "approved";
            }elseif ($approval == 'No'){
                echo "rejected";
            }
            ?></P>
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
    window.location.assign("teacher_list_permissions.php?succ");
</script>
</body>
</html>
<?php }else{header("location: login.php");} ?>
