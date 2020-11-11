<?php

$array=[89,9,10,12,14,55,34,76,5,3];

function bubbleSort($array){
    $lenght=count($array);
    $comparisons= 0;

    for($i=0;$i<$lenght;$i++){

        for($j=0;$j<$lenght-1;$j++){
            $comparisons++;

            if($array[$j]>$array[$j+1]){
                $tmp=$array[$j+1];
                $array[$j+1]= $array[$j];
                $array[$j]=$tmp;
            }
        }
    }

    echo '<h4>'.$comparisons.'Comparisons</h4>';
    return $array;
}



echo '<strong>Before Sorting</strong><br>'. implode(', ',$array). '<br>';
$sorted=bubbleSort($array);
echo '<strong>After Sorting</strong><br>'. implode(', ',$sorted);


$color= "green";
switch
 ($color) {
  
case
 "red":
    echo "Hello";
    break;
  
case
 "green":
    echo "Welcome";
    break;
}