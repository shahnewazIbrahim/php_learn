<?php

// PHP Arithmetic Operators

echo "<strong>PHP Arithmetic Operators</strong><br><br>";

$x = 10;
$y = 5;
echo($x + $y)." ===>Addition <br>";
echo($x - $y)." ===>Substraction <br>";
echo($x * $y)." ===>Multiplication <br>";
echo($x / $y)." ===>Division <br>";
echo($x % $y)." ===>Remainder <br>"; //remainder operators (modulus)
echo($x ** $y)." ===>Power of x of y'th <br><br>"; //power of x of y'th (10^5) 

// PHP Assignment Operators

echo "<strong>PHP Assignment Operators</strong><br><br>";

$x = 10;
$y = 5;
echo($x = $y)." ===>seting value <br>"; // left value is set as the value of right
echo($x += $y)." ===>Addition <br>"; // Addition
echo($x -= $y)." ===>Substraction <br>"; // Subtraction
echo($x *= $y)." ===>Multiplication <br>"; // Multiplication
echo($x /= $y)." ===>Division <br>"; // Division
echo($x %= $y)." ===>Remainder <br> <br>"; // Modulus

// PHP Comparison Operators

echo "<strong>PHP Comparison Operators</strong><br><br>";

$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

echo "<br><br>";

$x = 1;
$y = "1";

var_dump($x === $y); // returns true because values are same type

echo "<br><br>";

$x = 1;
$y = 1;

var_dump($x != $y); // returns false because values are equal

echo "<br><br>";

$x = 1;
$y = 10;

var_dump($x <> $y); // returns false because values are equal

echo "<br><br>";

$x = 1;
$y = 1;

var_dump($x !== $y); // returns false because values are equal

echo "<br><br>";

$x = 10;
$y = 1;

var_dump($x > $y); // returns true if x is greater than y

echo "<br><br>";

$x = 1;
$y = 10;

var_dump($x < $y); // returns true if x is less than y

echo "<br><br>";

$x = 10;
$y = 10;

var_dump($x >= $y); // returns true if $x is greater than or equal to $y

echo "<br><br>";

$x = 10;
$y = 10;

var_dump($x <= $y); // returns true if $x is less than or equal to $y

echo "<br><br>";

$x = 1;
$y = 10;

var_dump($x <=> $y); // returns true an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.where 0 is equal 1 is greater than an -1 is less than base on value of x.
echo "<br><br>";

// PHP Increment / Decrement Operators

echo "<strong>PHP Increment / Decrement Operators</strong><br><br>";

$x = 1;  
echo ++$x . "<br>"; //Increments $x by one, then returns $x

$x = 1;  
echo $x++ . "<br>"; //Returns $x, then increments $x by one

$x = 1;  
echo --$x . "<br>"; //Decrements $x by one, then returns $x

$x = 2;  
echo $x-- . "<br><br>"; //Returns $x, then decrements $x by one

// PHP Logical Operators

echo "<strong>PHP Logical Operators</strong><br><br>";

$x = 100;
$y = 50;

if ($x == 100 and $y == 80) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
} // True if both $x and $y are true

echo "<br><br>";

$x = 100;
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
}// True if either $x or $y is true

echo "<br><br>";

$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
}//	True if either $x or $y is true, but not both

echo "<br><br>";

$x = 100;
$y = 50;

if ($x == 100 && $y == 80) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
}//	True if both $x and $y are true

echo "<br><br>";

$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
}// True if either $x or $y is true

echo "<br><br>";

$x = 100;
$y = 50;

if ($x !== 90) {
    echo "Hello world!";
}
else{
    echo "Not ok" ;
}//	True if $x is not true

echo "<br><br>";

echo "<strong>PHP Conditional Assignment Operators</strong><br><br>";
echo "Ternary <br><br>";
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

echo "Null coalescing <br><br>";
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";

