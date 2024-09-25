<?php

function calculateSquareRoot($number) {
    return sqrt($number);
}

$number = 25; 

$squareRoot = calculateSquareRoot($number);

echo "The square root of " . $number . " is: " . $squareRoot;
?>