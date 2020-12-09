<?php

/* Functions:

function functionName() {
  code to be executed;
} */

function testOne() {
    for ($i=0 ; $i<10 ; $i++){
        echo $i.'<br>';
    }
}

testOne(); "<br>";

echo "<b>PHP Function Arguments</b><br>";

function familyNmae($familyName){
  echo "$familyName valo na <br>";
}

familyNmae("Tui");
familyNmae("Ami");
familyNmae("Tomra");
familyNmae("Apnara");

function twoArguments($familyName, $bday){
  echo "$familyName valo na $bday <br>";
}

twoArguments("Tui" , 1952);
twoArguments("Ami" , 2010);
twoArguments("Tomra" , 2013);
twoArguments("Apnara" , 2014);