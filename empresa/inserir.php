<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

<?php 

include "conexao.php";

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES 
('$nome','$endereco','$telefone','$email','$data_nascimento')";

if (mysqli_query($conn, $sql)) {
    mensagem("$nome cadastrado com sucesso!",'success');
}

else {
    mensagem("$nome não foi cadastrado",'danger');
}

?>
    
<a href="index.php" class="btn btn-primary">Retornar para o ínicio</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>