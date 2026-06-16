<?php
$poziom = $_POST['poziom'];
$zainteresowania = $_POST['zainteresowania'];
$kurs_miasto = $_POST['miasto'];
$kurs_uwagi = $_POST['uwagi'];
echo "<table>
    <tr>
        <th>poziom</th>
        <th>zainteresowania</th>
        <th>kurs-miasto</th>
        <th>kurs-uwagi</th>
    </tr>
    <td>
        <th>$poziom</th>
        <th>$zainteresowania</th>
        <th>$kurs_miasto</th>
        <th>$kurs_uwagi</th>
    </td>
</table>";


?>