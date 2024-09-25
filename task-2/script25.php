<?php

function swapNumbers(&$a, &$b) {
    $a = $a + $b; 
    $b = $a - $b;
    $a = $a - $b; 
}
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b\n";

swapNumbers($a, $b);

echo "After swapping: a = $a, b = $b";
?>