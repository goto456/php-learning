<?php
function myTest() {
  static $x = 0;
  echo "x is: $x\n";
  $x++;
}
myTest();
myTest();
myTest();
?>
