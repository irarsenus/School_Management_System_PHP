<?php 
if (isset($_POST['update'])){
    $division = $_POST['division'];
    $amount = $_POST['amount'];

    
    $update = mysqli_query($con, "UPDATE fees_structure SET amount='{$amount}' WHERE division='{$division}'");

    if ($update){
        header("location: bursar_fees_structure.php?succ");
    }else{
        // header("location: bursar_fees_structure.php?err");
    }
}
?>