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
        $phrase = "Giraffe Academy";
        $phrase[0] = "B"; //moify index
        echo strtolower($phrase); //convert string to lowercase
        echo "<br>";
        echo strtoupper($phrase); //to upper
        echo "<br>";
        echo strlen($phrase); //tell how many characters are in the string
        echo "<br>";
        echo $phrase[0]; //find what character in the string is like this one is G
        echo "<br>";
        echo str_replace("Biraffe", "Panda", $phrase); //replace a word in a string
        echo "<br>";
        echo substr($phrase, 8, 3); //grabbing characters in a string
    ?>
</body>
</html>