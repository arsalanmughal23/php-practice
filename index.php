<?php

$a = 15;
$b = 27;
$c = 30;
 
// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number a =".$a.", b=".$b." and c=".$c."</br>";

// $temp = $a;
// $a = $b;
// $b = $temp;
list($a, $b, $c) = array($c, $a, $b);

echo "\nThe number after swapping is: \n";
echo "Number a =".$a.", b=".$b." and c=".$c."</br>";
// echo "Number a =".$a." and b=".$b."\n";

?>