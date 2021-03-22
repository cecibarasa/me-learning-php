<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="switch-statements.php" method="post">
        What is your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case 'A':
                echo "You did a splendid job! :)";
                break;
            
            case 'B':
                echo "You did pretty good! :)";
                break;
            case 'C':
                echo "You did pretty okay! :)";
                break;    
            case 'D':
                echo "You did tried! :)";
                break;
            case 'E':
                echo "I belive you can do better! :)";
                break;  
            case 'F':
                echo "You failed :(";
                break; 
            default:
                echo "Invalid Grade";         
        }
    ?>
</body>
</html>