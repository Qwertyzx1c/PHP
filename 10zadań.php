1.
$conn = mysqli_connect("localhost", "root", "", "zadaniasqli");
    if ($conn -> connect_error) {
      echo "Połączenie się nie powiodło";
 }  else {
    echo "Połączenie sie powiodło";
 }

2.
$sql = "SELECT id, nazwa, email FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['nazwa'];
    $email = $row['email'];
    echo "<p> Id: $id - Imię: $name - Email: $email </p>";
}

3.
<form action='index.php' method='POST'>
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
        <input type='text' name='email' placeholder='Podaj email...'/>
        <input type='text' name='haslo' placeholder='Podaj haslo...'/>
    <button>Dodaj</button>
</form>
<?php
if (isset($_POST['insert'])){

    $nazwa = $_POST['nazwa'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $sql = "INSERT INTO uzytkownicy (nazwa, email, haslo) VALUES ('$nazwa', '$email', '$haslo')";
    mysqli_query($conn, $sql);
    echo 'wykonane';
    
}
?>

4.
<form action='index.php' method='POST'>
        <input type='text' name='id' placeholder='Podaj id...'/>
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
        <input type='text' name='email' placeholder='Podaj email...'/>
    <button>Dodaj</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $email = $_POST['email'];
        
        $sql = "UPDATE uzytkownicy SET nazwa = '$nazwa', email = '$email' WHERE id = $id";
        mysqli_query($conn, $sql);
        echo "dodano";
    }

5.
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = $_POST['id'];
        
        $sql = "DELETE FROM uzytkownicy WHERE id = $id";
        
        mysqli_query($conn, $sql);

        echo "Usunięto";
    }

6.
$sql = "SELECT id, nazwa, cena FROM produkty WHERE dostepnosc = 1";
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

7.
  <form action='index.php' method='POST'>
        <input type='text' name='id' placeholder='Podaj id...'/>
        <input type='text' name='nazwa' placeholder='Podaj nazwę...'/>
        <input type='text' name='cena' placeholder='Podaj cena...'/>
    <button>Dodaj</button>
</form>
<?php
if (isset($_POST['insert'])){

    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];

    $sql = "INSERT INTO produkty (id, nazwa, cena) VALUES ('$id', '$nazwa', '$cena')";
    mysqli_query($conn, $sql);
    echo 'wykonane';
    
}

8.
  <form action='index.php' method='POST'>
        <input type='text' name='id' placeholder='Podaj id...'/>
        <input type='text' name='cena' placeholder='Podaj cene...'/>
    <button>Dodaj</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id = $_POST['id'];
        $cena = $_POST['cena'];
        
        $sql = "UPDATE produkty SET cena = '$cena' WHERE id = $id";
        mysqli_query($conn, $sql);
        echo "dodano";
    }

9.
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

10.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    $id = $_POST['id'];
        
    $sql = "DELETE FROM koszyk WHERE id_koszyka = $id";
        
    mysqli_query($conn, $sql);

    echo "Usunięto";
}
