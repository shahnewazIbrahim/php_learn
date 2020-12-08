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

function familyNmae($familyName){
  echo "$familyName valo na <br>";
}

familyNmae("Tui");
familyNmae("Ami");
familyNmae("Tomra");
familyNmae("Apnara");

function doubleVar($familyName, $bday){
  echo "$familyName valo na $bday <br>";
}

doubleVar("Tui" , 1952);
doubleVar("Ami" , 2010);
doubleVar("Tomra" , 2013);
doubleVar("Apnara" , 2014);