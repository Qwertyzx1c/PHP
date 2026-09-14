<?php

$row = ["name" => "Jakub"];
var_dump($row);
echo $row;

$text = "Usuń to wszystko - Jezus tak powiedział ";

echo strlen($text);

echo strtoupper($text);
echo strtolower($text);

echo strpos($text, "World");
echo str_replace("World", "PHP", $text);
echo str_repeat("Ha", 3);


echo substr($text, 0, 5);
echo substr($text, 6);


$words = explode(" ", $text);
echo implode("-", $words); 


echo trim("  tekst  ");
