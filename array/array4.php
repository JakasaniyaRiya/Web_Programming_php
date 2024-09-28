<?php
	$fruits=array("apple","mango","banana","chreery","pineapple"); 
	
	print_r($fruits);
	echo"<br>";
	
	$asc = $fruits;
	sort ($asc);

    $dese = $fruits;
    rsort ($dese);

    echo "<br> fruits in ascending :<br>";
    foreach ($asc as $fruits)
	{
		echo $fruits ."<br>";
	} 

    echo "<br> fruits in desending :<br> ";
    foreach ($dese as $fruits)
	{
		echo $fruits ."<br>";
	} 		
	
	
	
?>