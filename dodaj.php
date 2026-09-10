<?php
$conn = mysqli_connect('localhost', 'root', '', 'przerzut');
$id = $_POST['id_zlecenia'];
$query = "INSERT INTO zlecenia WHERE id_zlecenia = $id";

mysqli_query($conn, $query);

header("location: przerzut.php");