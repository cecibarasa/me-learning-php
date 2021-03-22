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
        class Movie{
            public $title; //feasibility modifier(public/private)
            private $rating;

            function __construct($title, $rating){
                $this -> title = $title;
                $this -> setRating($rating);
            }

            function getRating(){
                return $this -> rating;
            }

            function setRating($rating){
                if ($rating == "G" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this -> rating = $rating;
                } else {
                    $this -> rating = "NR";
                }
            }
        }

        $avengers = new Movie ("Avengers", "Dog");
        
        echo $avengers -> getRating();

    ?>
</body>
</html>