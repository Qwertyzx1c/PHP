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

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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
$username = " ";
if ($username == " " || $username = " ") {
    $username = "guest";
    echo $username;
} else {
    echo $username;
}

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

2.
$number = 1;
while ($number <= 10) {
    echo $number * 2 . " ";
    $number++;
}

3.
$list = ["SAMochud", "SAMochody", "SAMchodzisz", "SAMochudy", "SAMchud"];
foreach ($list as $list) {
    echo $list . "\n";
}

4.
$sink = 1;
do {
    echo "SAMochud ma mniej niż 10 koni";
} while ($sink = 1 > 4)

5.
$sume = 0;  
for ($i = 1; $i <= 100; $i++) {
    $sume += $i;
    echo $sume . "\n";
}
    
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
$color = ["red","green","blue"];
echo $color[0];

2.
$product = [
    'name' => 'Jan',
    'price' => 21,
    'in_stock' => 37
];
echo $product['name'];

3.
$numbers = [1, 2, 3, 4];
array_push($numbers, 5, 6);
echo $numbers[4];

4.
$fruits = ["Orange", "Apple", "Banan", "Ananas"];
if (in_array("Banan", $fruits)){
    echo "Banan jest";
} else {
    echo "Nie ma bananananananananananananananananananananananananananananananananananananana";
}

5.
$user = [
    'name' => 'Jan',
    'age' => 28,
    'city' => 'Warszawa'
];

print_r(array_keys($user));
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
function sayHello($name) {
    echo "Witaj!, $name";
}
sayHello($name = "Kapeć");

2.
function multiply($a, $b) {
    echo $a * $b;
}
multiply($a = 3, $b = 2,);

3.
function isEven($n) {
    if ($n * 2) {
        echo 'TRUE';
    } else {
        echo 'FALSE';
    }
}
isEven($n = 2);

4.
function formatPrice($price) {
    echo number_format($price, 2, ',', ' '); 
}
formatPrice($price = 20);

5.
function greetUser($name, $age) {
    echo "Mam na imie " . $name . " i mam " . $age . " lat "; 
}
greetUser($name = "Jan", $age = 28);

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
setcookie("username", "Jan", time() + (86400 * 7), "/");

if (isset($_COOKIE["username"])) {
    echo "Witaj, " . $_COOKIE["username"];
}

2.
if (isset($_COOKIE["username"])) {
    echo "Witaj, " . $_COOKIE["username"];
} else {
    echo "Nie ma username";
}

3.
setcookie("background-color", "lightblue", time() + (86400 * 7), "/");

4.
setcookie("session_id", "", time() - 3600, "/");

5.
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
session_start();
$_SESSION["user_id"] = 1;
$_SESSION["username"] = "Miku";
$_SESSION["email"] = "email@gmail.com";

if (isset($_SESSION["username"])) {
    echo "Zalogowany jako: " . $_SESSION["username"];
}

2.
if (isset($_SESSION["username"])) {
    echo "Zalogowany jako: " . $_SESSION["username"];
}

3.
session_start();
$_SESSION["user_id"] = 1;
$_SESSION["username"] = "Miku";
$_SESSION["email"] = "email@gmail.com";
unset($_SESSION["username"]);

4.
session_start();
$_SESSION["user_id"] = 1;
$_SESSION["username"] = "Miku";
$_SESSION["email"] = "email@gmail.com";
session_destroy();

5.
if (!isset($_SESSION['user_lang'])) {
    $_SESSION['user_lang'] = 'pl';
}

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.
function podzielLiczby($liczba1, $liczba2) {
    try {
        if ($liczba2 == 0) {
            throw new Exception("Nie można dzielić przez zero!");
        }
        $wynik = $liczba1 / $liczba2;
        return $wynik;
    } catch (Exception $e) {
        return "Wystąpił błąd: " . $e->getMessage();
    }

}
echo "". podzielliczby(2,1)

2.
function sprawdzEmail(string $email): void {
    if (strpos($email, '@') === false) {
        throw new InvalidArgumentException("Błąd: Adres e-mail musi zawierać znak '@'.");
    }
    
}

try {
    sprawdzEmail("kontakt@example.com");
    sprawdzEmail("bez-malpy.com");
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
   
3.
