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
        $luckyNumbers = array(4, 8, 16, 14, 23, 45);
        
        for ($i=0; $i < count($luckyNumbers); $i++) { //assignment; condition; increment
            echo "$luckyNumbers[$i] <br>";
        }
    ?>
</body>
</html>