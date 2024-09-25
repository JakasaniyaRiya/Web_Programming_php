<?php

function concatenateStrings($string1, $string2) {
    return $string1 . $string2; 
}

$string1 = "Hello, ";
$string2 = "World!";

$combinedString = concatenateStrings($string1, $string2);

echo "The concatenated string is: " . $combinedString;
?>