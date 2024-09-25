<?php

function calculateAreaOfCircle($radius) {
    return pi() * pow($radius, 2);
}
$radius = 7; 

$area = calculateAreaOfCircle($radius);

echo "The area of the circle with radius " . $radius . " is: " . $area . " square units.";
?>