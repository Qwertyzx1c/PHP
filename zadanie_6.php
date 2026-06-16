<?php
$telefon = $_POST['telefon'];
$strona = $_POST['strona'];

$upload = "./rozwiazania/obraz";
$filename = basename($_FILES['plik']['name']);
$file = $_FILES['plik'];
echo "<table>
    <tr>
        <th>telefon</th>
        <th>strona</th>
        <th>plik</th>
    </tr>
    <td>
        <th>$telefon</th>
        <th>$strona</th>
    </td>
</table>";


?>
