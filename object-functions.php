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
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __constructor($name, $major, $gpa){
                $this -> name = $name;
                $this -> major = $major;
                $this -> gpa = $gpa;
            }

            function hasHonors(){
                if ($this -> gpa >= 3.0) {
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student ("Jazz", "Telecomunications Engineer", 3.8);
        $student2 = new Student ("Jvune", "Art", 2.7);

        echo $student1 -> hasHonors();
    ?>
</body>
</html>