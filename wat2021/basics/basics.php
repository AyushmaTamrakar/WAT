<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<body>
    <?php 
    // My first PHP!!
    echo "Name: Ayushma Tamrakar";
    echo "<br>Student Id: 77261187";
    echo "<br> \"most programmers say it’s better to use ‘echo’ rather than ‘print’\" says who?";
   
    $name = "Ayushma";
    $age = 19;
    echo "<br><br> Hi my name is ".$name." and I am ".$age." years old.";
    echo "<br>Mi nombre es $name y tengo $age anos de edad.";

    //3
    //gettype() returns...
    echo"<hr>";
    echo "<h2>Function</h2>";
    echo gettype ($name);
    echo "<br>";
    //strlen() returns...
    echo strlen($name);
    echo "<br/>";
    //strtoUpper() returns.. 
    echo strtoUpper($name);
    echo"<hr>";

    //4
    echo "<h2>Arithmetic</h2>";
    $num1 = 9;
    $num2 = 12;
    $multiply = $num1 * $num2;
    $percentage = ($num1/$num2)*100;
    $divide = $num2/$num1;
    $floor = number_format($divide);
    $rem = $num2%$num1;
    echo "num1 = $num1";
    echo "<br>num2 = $num2";
    echo "<br>num1 x num2 = $multiply";
    echo "<br>num1 as a percentage of num2 = $percentage%";
    echo "<br>num2 divided by num1 = $floor remainder $rem";
    
    echo"<hr>";
    echo "<h4>Extension Exercise</h4>";
    $inch_height = 70 ;
    $name1 = "David";
    $age1 = 12;
    $meter_height = ($inch_height * 2.54) /100;
    $feet_height = $inch_height / 12;
    $feet_inch = $inch_height % 12;
    echo " Name: ".$name1;
    echo "<br>Age: ".$age1;
    echo "<br>Height in Meters: ". number_format($meter_height,1);
    echo "<br>Height in Feet and inches: " . floor($feet_height)."ft " . $feet_inch."ins";

?><br>
<a href="../watIndex.php">Home</a>
</body>
</html>