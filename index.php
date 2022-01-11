<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo "Nombre d'élément dans le tableau" . " " . count($fruits) . "<br>";

//Deuxieme ligne

echo $fruits[1];

$age = array("Peter" =>"35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " . $age["Ben"] . " years old.<br><br>";

foreach ($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y . "<br><br>";
}

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
echo print_r($colors) . "<br><br>";

// Quatrieme ligne

rsort($colors);
echo print_r($colors) . "<br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach ($age as $key => $value) {
    echo $value . "<br>";
}







