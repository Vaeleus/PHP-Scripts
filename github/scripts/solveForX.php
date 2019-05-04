<?php
  include("acEquation.php");
  $x = new acEquation(random_int(-10, 10));
  $xSave = $x->variable;
  $x->applyOperator(random_int(1, 2), random_int(-3, 3), random_int(-10, 10))."<br>";
  echo $x->retEquation()." = ".$x->variable;
  echo "<br>".$xSave;
?>
