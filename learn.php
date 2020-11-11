<?= str_replace("kaka","kutta","papa kehte hain bara nam karenga beta humara income karenga nehin to ye varwa mar hi jatenga logen kaka ki maki aakh ki kaka ki kaki ki naka ki naki ki papa ki papi ki <br> <br>"); ?>

<?php
    // This is an OOP
    class NagaPapa{
        public $motu;

        public $patlu;

        public function motu(){
            echo $this->motu;
        }

        public function patlu(){
            echo $this->patlu;
        }
    }
 
    $object = new NagaPapa;

    $object->motu = "This is motu <br>";

    $object->motu();

    $object->patlu ="This is patlu <br>";

    $patlu=$object->patlu();

    // This is for word length

    echo strlen ("TukTuk");

    echo "<br>";

    // This is for word count

    echo str_word_count ("TukTuk");

    echo "<br>";

    // This is for word character reverse

    echo strrev ("TukTuk");

    echo "<br>";

    // This is for  find position of a sentence or word

    echo strpos ("Hell world!", "world");

    echo "<br>";

    // This is for random number generate

    echo rand (1,9);

    echo "<br>";

    // This is minimum of a collection of numbers

    echo ( min (0,-2,3,4,52,123,44)."<br>");

    // This is maximum of a collection of numbers

    echo ( max (10,20,30,50,60)."<br>");

    // This is root over of an number 

    echo ( sqrt (64)."<br>");

    // This is converting negative to positive of an number 

    echo ( abs (-128)."<br>");

    // This is for rounding the floating numbers 

    echo ( round (7.7)."<br>");

    // Define method

    define("YOYO" , "This is yo yo mama kaka" , true);

    echo yoyo."<br>";

    define('def',["one", "two" , "three" , "four"]);

    echo def[0]."<br>";

    define ("func","This is a function <br>");

    function myFunction(){
        echo func;
    }

    echo myFunction();



?>