<?php

$id = $_POST['id'];

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bancotest');

mysqli_query($conn, "DELETE FROM nomes WHERE id = '$id'");

mysqli_close($conn);
header("Location: dados.html");

?> 