<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="get-post.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit" name="" id="">
    </form>
    <?php
        echo $_POST["password"] //prevennts display of info in the url
    ?>
</body>
</html>