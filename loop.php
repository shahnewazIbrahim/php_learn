<?php
/*While Loop
Note : The while loop executes a block of code as long as the specified condition is true.
code writing process :
 while (condition is true) {
     code to be executed;
   }
*/
echo "<b>While Loop</b> <br>";
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x++;
  $x+=10;
}
echo "<br>";

/* For Loop
Note : The for loop is used when you know in advance how many times the script should run.
code writing process: 
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value
} */

echo "<b>For Loop</b><br>";

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "<br>";

/* Foreach Loop
Note : The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
code writing process: 
foreach ($array as $value) {
  code to be executed;
}
Parameters:

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element. */

echo "<b>Foreach Loop</b><br>";
$array = array('green', 'black' , 'yellow' , 'white' , 'red');

foreach ($array as $arr) {
  echo "The color is: $arr <br>";
}
echo "<br>";


/* PHP Break
Note : You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.
*/

echo "<b>PHP Break</b><br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo "<br>";


/* PHP Continue
Note : The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
*/

echo "<b>PHP Continue</b><br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<br>";

