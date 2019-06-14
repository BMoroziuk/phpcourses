<?php
$bmw=[
    "model"=>"x5",
    "speed"=>120,
    "doors"=>5,
    "year"=>"2006"
];
$toyota=[
    "model"=>"Carina",
    "speed"=>130,
    "doors"=>4,
    "year"=>"2007"
];
$opel=[
    "model"=>"Corsa",
    "speed"=>130,
    "doors"=>4,
    "year"=>"2007"
];
function vyvod($car){
   return " - ".$car["model"]." - ".$car["speed"]." - ".$car["doors"]." - ".$car["year"];
}
echo "BMW".vyvod($bmw)."<br>";
echo "Toyota".vyvod($toyota)."<br>";
echo "Opel".vyvod($opel)."<br>";