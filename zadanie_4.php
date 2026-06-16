<?php
$imie = $_POST['imie'];
$data_urodzenia = $_POST['data_urodzenia'];
$kolor = $_POST['kolor'];
$zadowolenie = $_POST['zadowolenie'];
$opinia = $_POST['opinia'];

echo "<table>
    <tr>
        <th>imie</th>
        <th>data_urodzenia</th>
        <th>kolor</th>
        <th>zadowolenie</th>
        <th>opinia</th>
    </tr>
    <td>
        <th>$imie</th>
        <th>$data_urodzenia</th>
        <th>$kolor</th>
        <th>$zadowolenie</th>
        <th>$opinia</th>
    </td>
</table>";


?>