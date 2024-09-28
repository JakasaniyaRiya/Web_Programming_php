<?php
    $fruits=array("apple","mango","banana","chreery","pineapple"); 
	
	$fruits[5]="orange";
	$fruits[6]="graps";
	unset($fruits[0]);
	print_r($fruits);
?>