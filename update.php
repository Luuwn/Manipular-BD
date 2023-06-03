<?php

$id = $_POST['id'];
$novoValor = $_POST['novo_valor'];

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bancotest');

mysqli_query($conn, "UPDATE nomes SET pessoa = '$novoValor' WHERE id = '$id'");

mysqli_close($conn);
header("Location: dados.html");

?>