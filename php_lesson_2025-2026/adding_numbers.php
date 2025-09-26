<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations in PHP</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label>Enter First Number:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>

        
        <br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $aadition= $num1+$num2;
          

        echo "<h3>Result: $aadition</h3>";
    }
    ?>
</body>
</html>
