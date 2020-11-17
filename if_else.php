<?php

/*if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed*/

$t = date("H");

if ($t < "20") {
  echo "Have a good day!<br>";
}

if ($t < "20") {
    echo "Have a good day!<br>";
  } else {
    echo "Have a good night!<br>";
  }

if ($t < "10") {
echo "Have a good morning!<br>";
} elseif ($t < "20") {
echo "Have a good day!<br>";
} else {
echo "Have a good night!<br>";
}

$favcolor = "red";

switch ($favcolor) {
case "red":
echo "Your favorite color is red!<br>";
break;
case "blue":
echo "Your favorite color is blue!<br>";
break;
case "green":
echo "Your favorite color is green!<br>";
break;
default:
echo "Your favorite color is neither red, blue, nor green!<br>";
}