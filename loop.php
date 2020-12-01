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