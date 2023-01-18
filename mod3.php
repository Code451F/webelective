<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $name ="Asif";
        echo "<h1>welcome to PHP programming</h1>";
        $name = 'john';
        $age = 10;
        $pi = 3.14;

        echo "Name:" .$name."<br>";
        echo "Age:" .$age."<br>";
        echo "Pi:" .$pi."<br>";

        echo gettype($name);

        echo "<br>";
        $a = 10;
        $b = 6;
        $result = $a/$b;
        echo "Result: ". $result;

        echo "<br>";

        $a = 10;
        $b = 5;
        $result = (int)($a/$b);
        echo "Result: ". $result;

        define('pi',3.14);

        $radius = 5;
        $area = pi* $radius**2;
        echo "<br>";
        echo $area;

        $a=10;
        $b=4;
        $c=3;
        echo "<br>";
        echo ($a>$b) || ($b<$c);

        $firstname='John';
        $secondname="Nolan";
        echo "<br>";
        echo $firstname." ".$secondname;

        $a=10;
        $b=4;
        $result=$a>$b ? $a : $c;
        echo "<br>";
        echo $result;

        $t=10;
        echo "<br>";
        if($t < "20"){
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        $favcolor = "red";
        echo "<br>";
        switch($favcolor){
            case "red":
                echo "your favourite color is red!";
                break;
            case "blue":
                echo "your favourite color is blue!";
                break;
            case "green":
                echo "your favourite color is green!";
                break;
            default:
                echo "your favourite color is niether red, blue, nor green!";
        }

        echo "<br>";
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        // $age['Peter']="35";
        // $age['Ben']="37";
        // $age['Joe']="43";

        foreach($age as $x=>$x_value){
            echo "Key=".$x.",Value=".$x_value;
            echo "<br>";
        }

        function printline($txt){
            echo $txt."<br>";
        }
        printline("This is a line");
        printline("This is a new line");
        printline("This is yet another line");

        $life=42;
        function meanlife(){
            global $life;
            echo "menaing of life is". $life;
        }
        meanlife();

        class CAR { 
            public $color = "Blue";
            public $make = "Jeep";
            public $model = "Renegade";
        }
        $car = new CAR();
        echo "<br>";
        echo "I drive a ".$car->color." ".$car->make." ".$car->model;

        class talky{
            public function sayHello(){
                echo "<br>";
                echo "Hello !";
            }
        }
        $user = new talky();
        $user->sayHello();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 3</title>
</head>
<body>
    <h1><?php print("Welcome to PHP, $name"); ?></h1>
</body>
</html>