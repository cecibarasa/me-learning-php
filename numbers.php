<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        //arithmetic functions
        echo 5 + 9; 
        echo "<br>";
        echo 5.7 * 9;
        echo "<br>";
        echo 10 % 6; //modulus
        echo "<br>";
        echo 4 + 5 * 10; //order of operation basically BODMAS
        $num = 10;
        echo "<br>";
        echo $num;
        $num ++; //increment
        echo "<br>";
        echo $num;
        $num --; //decrement
        echo "<br>";
        echo $num;
        echo "<br>";
        $num += 25; //adding to the original value
        echo $num;
        echo "<br>";
        $num -= 25; //subtract from the original value
        echo $num;
        echo "<br>";
        $num *= 25; //multiply to the original value
        echo $num;
        echo "<br>";
        $num /= 25; //divide the original value
        echo $num;
        echo "<br>";
        echo abs(-100); //finding the absolute value basicaly if neg or pos it'll give pos
        echo "<br>"; 
        echo pow(2, 4);//to the power
        echo "<br>";
        echo sqrt(144); //squareoot
        echo "<br>";
        echo max(2, 10); //compare numbers
        echo "<br>";
        echo min(2, 10); 
        echo "<br>";
        echo round(3.417); //round off
        echo "<br>";
        echo ceil(3.3); //round up
        echo "<br>";
        echo floor(3.3); //round down
    ?>
</body>
</html>