<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="calculator.php" method="post">
        First Number: <input type="number" step="0.001" name="num1">
        <br>
        OP: <input type="text" name="op"><br> <!--operator -->
        Second Number: <input type="number" name="num2">
        <input type="submit">
    </form>
    Answer: 
    <?php  
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;
        } elseif ($op == "-") {
            echo $num1 - $num2;
        } elseif ($op == "/") {
            echo $num1 / $num2;
        } elseif ($op == "*") {
            echo $num1 * $num2;
        } else {
            echo "Invaid operator";
        }
    ?>
</body>
</html>