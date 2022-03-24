<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo " <div>Hello World</div> "; 
    echo " <div>Goodbye World</div> "; 

    //variables
    $a=5;
    echo $a;

    //String Interpolation
    echo " <div>I have $a things</div> "; 
    echo '<div>I have $a things</div>';  
   
    // Number / Integer
    $b=15;
    // Float
    $b=10;
    $b=0.576;
    echo $b;

    // String
    $name = "Toto";

    // Boolean
    $isOn = true;

       echo " <div>Is your name $name ?</div> ";
// Math
// PEMDAS

    echo (5 - 4) * 2;
    // Concatenation
    echo "<div>b + a" . "=c</div>";
    echo "<div> $b + $a = ".($a+$b)."</div>";

    ?>

<hr>
<div>This is my name</div>
<div>
<?php 
$firstname = "Nhien";
$lastname = "Dang";
$fullname = "$firstname     $lastname";
$wholename = $lastname . " " .$firstname;
echo $fullname;

echo $wholename;
?>

</div>


</body>
</html>