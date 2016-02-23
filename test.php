<?php
echo "Hello.\n";

$x = 5;

function myTest() {
  $y = 10;
  echo "test var in function: \n";
  echo "var x is: $x\n";
  echo "var y is: $y\n";
}
myTest();

echo "test var out function: \n";
echo "var x is: $x\n";
echo "var y is: $y\n";
?>
