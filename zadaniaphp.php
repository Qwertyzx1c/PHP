1.
$name = "Paweł";
$age = 20;
$country = "Polska";
echo "Nazywam się $name mam  $age lat i mieszkam w  $country";

2.
$width = 8;
$height = 5;
echo $width * $height;

3.
$liczba = 10
echo $liczba + 1;

4.
$isMember = "false";
var_dump($isMember);

5.
$liczba1 = 10;
$liczba2 = 20;
echo $liczba1 + $liczba2;
echo $liczba1 - $liczba2;
echo $liczba1 * $liczba2;
echo $liczba1 / $liczba2;


1.
$wiek = 20;

if ($wiek >= 18) {
    echo "Możesz głosować";
} else {
    echo "Nie możesz głosować";
}

2.
$temperature = 20;
if ($temperature  > 0) {
    echo "Temperatura jest dodatnia";
} elseif ($temperature < 0) {
    echo "Temperatura jest ujemna";
} elseif ($temperature = 0) {
    echo "Temperatura jjest zerowa";
}

3.
$color = 2;
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

4.
$grade = 51;
if ($grade >= 50) {
    echo "Zdane";
} else {
    echo "Nie zdane";
}

5.
