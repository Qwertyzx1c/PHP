1.
<?php

$wiek = 24;

if ($wiek >= 1) {
    echo "Dodatnia";
} elseif ($wiek <= -1) {
    echo "Ujemna";
} elseif ($wiek == 0) {
    echo "Równa zero";
}

?>

2.
<?php

$liczba = 3;

if ($liczba % 2 === 0) {
    echo "Parzysta";
} else {
    echo "Nie Parzysta";
}

?>

3.
<?php

$liczba = 3;
$liczba2 = 2;

if ($liczba < $liczba2) {
    echo "$liczba2";
} elseif ($liczba > $liczba2) {
    echo "$liczba";
}

?>

4.
<?php

$liczba = 19;

if ($liczba >= 18) {
    echo "Jesteś pełnoletni.";
} else {
    echo "Nie jesteś jeszcze pełnoletni.";
}

?>

5.
<?php

$liczba = 9;

if ($liczba == 14) {
    echo "6";
} elseif ($liczba == 13) {
    echo "5";
}
elseif ($liczba == 9) {
    echo "4";
}
elseif ($liczba == 7) {
    echo "3";
}
elseif ($liczba == 4) {
    echo "2";
}
elseif ($liczba <= 4) {
    echo "1";
}

?>

6.
<?php

$liczba = 2024;

if ($liczba % 4 == 0) {
    echo "Rok przestępny";
} else {
    echo "Nie rok przestępny";
}

?>

7.
<?php


function kalk($a, $znak, $b){
    if ($znak == "+") {
        $c = $a + $b;
    } elseif ($znak == "-"){
        $c = $a - $b;
    } elseif ($znak == "/"){
        $c = $a / $b;
    } elseif ($znak == "*"){
        $c = $a * $b;
    }
    echo "znak: " . $znak . "wynik: " . $c;
}
    kalk(3, "+", 3)
?>

8.
