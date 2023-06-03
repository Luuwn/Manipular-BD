<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bancotest');

$resultado = mysqli_query($conn, "SELECT * FROM nomes ORDER BY pessoa");

if ($resultado->num_rows > 0) {
    echo "<h3>Registros:</h3>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row['id'] . ", Pessoa: " . $row['pessoa'] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

//echo "<br><br><a href = 'dados.html'>Voltar</a>";
echo "<br><button onclick=\"window.location.href='dados.html'\">Voltar</button>";
?>