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
<hr>

<?php 
// SUPERGLOBAL
// added variable on url- m4/notes/?name=Toto
echo "<a href='?name=Toto'>name</a>";
echo "<div>My name is {$_GET['name']}</div>";
echo "<div>My age is {$_GET['age']}</div>";
echo "<a href='?name=Toto&type=textarea'>type</a> <br>";

echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
?>
<hr>

<?php 
// ARRAY


$colors = array("red","green","blue");
echo $colors[2];
echo "
<br>$colors[0]
<br>$colors[1]
<br>$colors[2]
<br>
";

echo count($colors);
?>

<div style="color:<?=$colors[0]?>">This text is red</div>

<hr>

<?php 
// Associative Array

$colorsAssociative = [
    "red" => "#f00",
    "green" => "#0f0",
    "blue" => "#00f",
];

echo $colorsAssociative['green'];
?>
<hr>

<?php 
// Casting

$c = "$a";
$d = $c*1;

$colorsObject=(object)$colorsAssociative;

echo "<hr>";

// Array Index Notation
echo $colors[2]."<br>";
echo $colorsAssociative['blue']."<br>";
echo $colorsAssociative[$colors[2]]."<br>";

// Object Property Notation
echo $colorsObject->blue."<br>";
echo $colorsObject->{$colors[2]}."<br>";

?>

<?php 
print_r($colors); 
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";

// Funtion
function print_p($v){
    echo "<pre>",print_r($v),"</pre>";
}
print_p($_GET);

?>

</body>
</html>