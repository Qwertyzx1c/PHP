<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<img src="Firefly.png" alt="żabka">
<h1>Oznajmnia połączenie: (1 zad)</h1>
<div id="jeden">
<?php
$conn = mysqli_connect("localhost", "root", "", "zadaniasqli");
if ($conn -> connect_error) {
    echo "<h4>Połączenie się nie powiodło</h4>";
}  else {
    echo "<h4>Połączenie się powiodło</h4>";
}
?>
</div>
<h1>SELECT: (2 zad)</h1>
<div id='dwa'>
<?php
$sql = "SELECT id, nazwa, email FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['nazwa'];
    $email = $row['email'];
    echo "<p> Id: $id - Imię: $name - Email: $email </p>";
}
?>
</div>
<h1>INSERT: (3 zad)</h1>
<div id='trzy'>
    <form action='index.php' method='POST'>
    <label for="nazwa">
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
    </label>
    <label for="email">
        <input type='text' name='email' placeholder='Podaj email...'/>
    </label>
    <label for="haslo">
        <input type='text' name='haslo' placeholder='Podaj haslo...'/>
    </label>
        <button >Dodaj</button>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["insert"])){
    
    $nazwa = $_POST['nazwa'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    
    $sql = "INSERT INTO uzytkownicy (nazwa, email, haslo) VALUES ('$nazwa', '$email', '$haslo')";
    mysqli_query($conn, $sql);
    echo 'wykonane';
    
}
?>
</div>
<h1>UPDATE: (4 zad)</h1>
<div id='cztery'>
    <form action='index.php' method='POST'>
    <label for="id">
        <input type='text' name='id' placeholder='Podaj id...'/>
    </label>
    <label for="nazwa">
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
    </label>
    <label for="email">
        <input type='text' name='email' placeholder='Podaj email...'/>
    </label>
        <button>Ustaw</button>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["update"])){
        
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $email = $_POST['email'];
        
        $sql = "UPDATE uzytkownicy SET nazwa = '$nazwa', email = '$email' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        echo "zaktualizowano";
    }
    ?>
</div>
<h1>DELETE: (5 zad)</h1>
<div id='piec'>
    <form action='index.php' method='POST'>
    <label for="id">
        <input type='text' name='id' placeholder='Podaj id...'/>
    </label>
        <button>Usuń</button>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["delete"])){
        
        $id = $_POST['id'];
        
        $sql = "DELETE FROM uzytkownicy WHERE id = '$id'";
        
        mysqli_query($conn, $sql);
        
        echo "Usunięto";
    }
    ?>
</div>
<img src="Firefly (1).png" alt="Dante">

<h1>SELECT: (6 zad)</h1>
<div id='szesc'>
<?php
$sql = "SELECT id, nazwa, cena FROM produkty WHERE dostępność = 1";
$result = mysqli_query($conn, $sql);
echo ("<table>
<tr> 
<th>id</th>
<th>nazwa</th>  
<th>cena</th>
</tr>");
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $nazwa = $row['nazwa'];
    $cena = $row['cena'];
    echo ("
    <tr> 
    <td>$id</td>
    <td>$nazwa</td>
    <td>$cena</td>
    </tr>
    ");
}
echo "</table>";
?>
</div>

<h1>INSERT: (7 zad)</h1>
<div id='siedem'>
    <form action='index.php' method='POST'>
    <label for="id">
        <input type='text' name='id' placeholder='Podaj id...'/>
    </label>
    <label for="nazwa">
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
    </label>
    <label for="cena">
        <input type='text' name='cena' placeholder='Podaj cena...'/>
    </label>
        <button>Dodaj</button>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["insert"])){

    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];
    
    $sql = "INSERT INTO produkty (id, nazwa, cena) VALUES ('$id', '$nazwa', '$cena')";
    mysqli_query($conn, $sql);
    echo 'wykonane';
    
}
?>
</div>

<h1>UPDATE: (8 zad)</h1>
<div id='osiem'>
    <form action='index.php' method='POST'>
    <label for="id">
        <input type='text' name='id' placeholder='Podaj id...'/>
    </label>
    <label for="cena">
        <input type='text' name='cena' placeholder='Podaj cene...'/>
    </label>
        <button>Zaktualizuj</button>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["update"])){
        
        $id = $_POST['id'];
        $cena = $_POST['cena'];
        
        $sql = "UPDATE produkty SET cena = '$cena' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        echo "Zaktualizowano";
    }
    ?>
</div>

<h1>SELECT: (9 zad)</h1>
<div id='dziewiec'>
<?php
    $conn = mysqli_connect("localhost", "root", "", "zadaniasqli");
    $sql = "SELECT koszyk.id_uzytkownika, nazwa, cena, kategoria FROM produkty INNER JOIN koszyk ON produkty.id = koszyk.id_produktu";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id_uzytkownika'];
        $nazwa = $row['nazwa'];
        $cena = $row['cena'];
        $kategoria = $row['kategoria'];
        echo "<p> ID: $id - Nazwa: $nazwa - Cena: $cena - Kategoria: $kategoria </p>";
    }
?>
</div>

<h1>DELETE: (10 zad)</h1>
<div id='dziesiec'>
<form action='index.php' method='POST'>
    <input type='text' name='id' placeholder='Podaj id...'/>
    <button>Usuń</button>
</form>
<?php    
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["delete"])){
    
    $id = $_POST['id'];
    
    $sql = "DELETE FROM koszyk WHERE id_koszyka = '$id'";
    
    mysqli_query($conn, $sql);
    
    echo "Usunięto";
}
?>
</div>
<img src="Firefly (2).png" alt="Jotaro vs Dio">

<div id="triplebakasquad">
    <img src="{AB7E4BC2-4459-4BC3-9453-F2E75740D1D6}.png" alt="Excuse me sir" class="tripleaura">
    <img src="{38E05A8F-D302-48B7-B627-4B9BE652BE58}.png" alt="Happy birthday daniel" class="tripleaura">
    <img src="{ADBF5F29-5953-4F7A-BBF5-84B99DB63C89}.png" alt="Everyone lets get into the car, OH NO ITS NOT THE CAR , ITS THE FENCE, OHHHH HERMIT PURPLE" class="tripleaura">
</div>
</body>
</html>