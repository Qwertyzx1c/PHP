<?php
$imie_nazwisko = $_POST['imie_nazwisko']
$login = $_POST['login']
$haslo = $_POST['haslo']
$wiek = $_POST['wiek']
$kraj = $_POST['kraj']

echo "<table>
    <tr>
        <th>imie</th>
        <th>login</th>
        <th>haslo</th>
        <th>wiek</th>
        <th>kraj</th>
    </tr>
    <td>
        <th>$imie_nazwisko</th>
        <th>$login</th>
        <th>$haslo</th>
        <th>$wiek</th>
        <th>$kraj</th>
    </td>
</table>"


?>