<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "dentalclinic";

$conn = mysqli_connect($host, $usuario, $senha, $db);

if ($conn) {
    //echo"Conexão realizada com sucesso";
} else {
    echo "Falha na conexão: " . mysqli_connect_error();
}
?>