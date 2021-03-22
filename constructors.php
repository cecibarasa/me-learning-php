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
        class Book { //class is a blueprint
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPges)
            {
                $this -> title = $aTitle; //$this- referring to the current object
                $this -> author = $aAuthor;
                $this -> pages = $aPges;
            }
        }

        $book1 = new Book ("Jazzlas Jazz", "The origin of the mixed breed", 4000);
        $book2 = new Book ("Jvune Jvunnes", "Innit", 700);

        echo $book2 -> author;
        //constructor is a function that's called whenever you create an object of a class
        // $book1 = new Book("Mike");
        // //storing variables & creating objects eg book 1 is an object
        // $book1 -> title = "Jazzy Jazz";
        // $book1 -> author = "Jazz";
        // $book1 -> pages = 400;

        // $book2 = new Book("Tom");
        // $book2 -> title = "Jvunnessssss";
        // $book2 -> author = "Jvune";
        // $book2 -> pages = 700;
    ?>
</body>
</html>