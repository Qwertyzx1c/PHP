<?php
// Składnia i zmienne

// 1.
$name = "Paweł";
$age = 20;
$country = "Polska";
echo "Nazywam się $name mam  $age lat i mieszkam w  $country";
echo "<br>";

// 2.
$width = 8;
$height = 5;
echo $width * $height;
echo "<br>";

// 3.
$liczba = 10;
echo $liczba + 1;
echo "<br>";

// 4.
$isMember = "false";
var_dump($isMember);
echo "<br>";

// 5.
$liczba1 = 10;
$liczba2 = 20;
echo $liczba1 + $liczba2;
echo $liczba1 - $liczba2;
echo $liczba1 * $liczba2;
echo $liczba1 / $liczba2;
echo "<br>";

//Instrukcje warunkowe

echo "<br>";
echo "<br>";
echo "<br>";

// 1.
$wiek = mt_rand(1, 100);

if ($wiek >= 18) {
    echo "Możesz głosować";
} else {
    echo "Nie możesz głosować";
}
echo "<br>";

// 2.
$temperature = mt_rand(-15, 30);
if ($temperature  > 0) {
    echo "Temperatura jest dodatnia";
} elseif ($temperature < 0) {
    echo "Temperatura jest ujemna";
} elseif ($temperature = 0) {
    echo "Temperatura jjest zerowa";
}
echo "<br>";

// 3.
$color = mt_rand(0,3);
switch ($color) {
    case 1:
        echo "czerwony";
        break;
    case 2:
        echo "zielony";
        break;
    case 3:
        echo "niebieski";
        break;
    default:
        echo "Inny kolor";
}
echo "<br>";

// 4.
$grade = mt_rand(1, 100);
if ($grade >= 50) {
    echo "Zdane";
} else {
    echo "Nie zdane";
}
echo "<br>";

// 5.
$username = " ";
if ($username == " " || $username = " ") {
    $username = "guest";
    echo $username;
} else {
    echo $username;
}
echo "<br>";

//Pętle

echo "<br>";
echo "<br>";
echo "<br>";
// 1.
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

// 2.
$number = 1;
while ($number <= 10) {
    echo $number * 2 . " ";
    $number++;
}
echo "<br>";

// 3.
$list = ["SAMochud", "SAMochody", "SAMchodzisz", "SAMochudy", "SAMchud"];
foreach ($list as $list) {
    echo $list . "\n";
}
echo "<br>";

// 4.
$sink = 1;
do {
    echo "SAMochud ma mniej niż 10 koni";
} while ($sink = 1 > 4);
echo "<br>";

// 5.
$sume = 0;  
for ($i = 1; $i <= 100; $i++) {
    $sume += $i;
    echo $sume . "\n";
}
echo "<br>";

//Tablice

echo "<br>";
echo "<br>";
echo "<br>";

// 1.
$color = ["red","green","blue"];
echo $color[mt_rand(0, 2)];
echo "<br>";

// 2.
$product = [
    'name' => 'Janek',
    'price' => 20,
    'in_stock' => 77,
    'title' => 'Srebrnoręki'
];
echo $product['name'];
echo "<br>";

// 3.
$numbers = [1, 2, 3, 4];
array_push($numbers, 5, 6);
echo $numbers[mt_rand(0,3)];
echo "<br>";

// 4.
$fruits = ["Orange", "Apple", "Banan", "Ananas"];
if (in_array("Banan", $fruits)){
    echo "Banan jest";
} else {
    echo "Nie ma bananananananananananananananananananananananananananananananananananananana";
}
echo "<br>";

// 5.
$user = [
    'name' => 'Johnny',
    'last_name' => 'Silverhand',
    'age' => 2077,
];

print_r(array_keys($user));
