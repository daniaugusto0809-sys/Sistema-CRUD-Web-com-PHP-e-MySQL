<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "empresa";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
else {
    //echo("Conectado com sucesso");
}

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
   $texto 
</div>";
}

?>

