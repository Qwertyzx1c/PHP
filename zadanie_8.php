<?php
$id = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];
$wiek = $_POST['wiek'];
$id_klasy = $_POST['id_klasy'];
    
echo "<table>
    <tr>
        <th>id</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>email</th>
        <th>wiek</th>
        <th>id_klasy</th>
    </tr>
    <td>
        <th>$id</th>
        <th>$imie</th>
        <th>$nazwisko</th>
        <th>$email</th>
        <th>$wiek</th>
        <th>$id_klasy</th>
    </td>
</table>";



    $sql = "INSERT INTO uzytkownicy";
    echo "Dodano";
?>