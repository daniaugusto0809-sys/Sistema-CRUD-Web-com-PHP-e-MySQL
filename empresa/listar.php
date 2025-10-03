<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

<?php 

include "conexao.php";

$pesquisa = $_POST['busca'] ?? '';

$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'"

//$data = mysqli_query($conn, $sql);

//while ($linha = mysqli_fetch_assoc($data) ) {
  //foreach ($linha as $key => $value) {
   // echo "$key: $value<br>";
 // }
//}
?>

<h1>Pesquisar</h1>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
    
<a href="index.php" class="btn btn-primary">Retornar para o ínicio</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>


<!-- 

include "conexao.php";
$sql = 'SELECT * FROM `pessoas` ORDER BY cod_pessoa';

foreach ($conn->query($sql) as $row) {
    print $row['cod_pessoa'] . "\t";  
    print $row['nome'] . "\t";
    print $row['endereco'] . "\t";
    print $row['telefone'] . "\t";
    print $row['email'] . "\t";
    print $row['data_nascimento'] . "\n";

    header('Content-Type: application/json');

    echo json_encode($row);
    
}

-->