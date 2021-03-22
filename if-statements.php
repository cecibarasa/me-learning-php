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
        $isFemale = true;
        $isClassy = false;
        if ($isFemale && $isClassy){
            echo "You are a classy female";
        }elseif ($isFemale && !$isClassy) {
            echo "You are just a  female";
        }elseif (!$isFemale && $isClassy) {
            echo "You are an impostor but classy";
        } else {
            echo "You are an impostor";
        }
    ?>
</body>
</html>