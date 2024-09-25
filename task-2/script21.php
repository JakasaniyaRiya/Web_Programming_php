<?php

function isPalindrome($number) 
{
    $originalNumber = strval($number);

    $reversedNumber = strrev($originalNumber);

    if ($originalNumber == $reversedNumber) {
        return true;
    } else {
        return false;
    }
}
$number = 121; 

if (isPalindrome($number)) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>