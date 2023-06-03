<?php

$id = $_POST['id'];
$novoValor = $_POST['new_valor'];

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bancotest');

mysqli_query($conn, "INSERT INTO nomes(id, pessoa) VALUES('$id', '$novoValor')");

mysqli_close($conn);
header("Location: dados.html")

?>
