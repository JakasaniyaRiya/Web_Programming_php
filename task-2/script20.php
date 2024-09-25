<?php

function calculateFactorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}


$number = 5; 

$factorial = calculateFactorial($number);

echo "The factorial of " . $number . " is: " . $factorial;
?>