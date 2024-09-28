<?php
	$country=array("india"=>"new delhi","bhutan"=>"thimphu","maldives"=>"male","qatar"=>"doha","fiji"=>"suva");
    $country["italy"]="rome";
	$country["italy"]="rajkot";
	foreach($country as $key=>$value)
    {
	    echo $key. " => " .$value;
	    echo"<br>";
    }
?>