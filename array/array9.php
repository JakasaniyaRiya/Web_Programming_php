<?php
$countries = array(
    "india"=>"new delhi",
    "bhutan"=>"thimphu",
    "maldives"=>"male",
    "qatar"=>"doha",
    "fiji"=>"suva"
);

ksort($countries);
echo "array sorted by countries(keys) i ascending order:<br>";
foreach($countries as $country => $capital){
    echo "the capital of ". $country . "  is  " . $capital . ".<br>";

}

echo "<br>";

arsort($countries);
echo "array sorted by capitals (values) in descending order:<br>";
foreach($countries as $country => $capital){

    echo "the capital of " . $country . "  is  " . $capital . ".<br>";
    
}
?>