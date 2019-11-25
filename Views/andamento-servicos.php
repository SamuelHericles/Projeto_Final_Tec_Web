<?php

  include('../Controlers/Conexao.php');
  $consulta = "SELECT v.id as venda, c.nome, p.nome as produto, v.andamento FROM cliente c INNER JOIN venda v ON c.id=v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id";
  $result_hist = mysqli_query($con,$consulta);
    
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../Models/reset.css">
      <link rel="stylesheet" href="../Models/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Models/css/bootstrap.css">
      <link rel="stylesheet" href="../Models/Carousel.css">
      <link rel="stylesheet" href="../Models/Estilo.css">
      <title>SisTec - Assistência Técnica</title>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Controle de estoque</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Cadastra de produtos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="andamento-servicos.php">Andamento de Serviços</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="POST" action="../Controlers/Login.php">
            <input type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
          </form>
        </div>
      </nav>
    </header>
    <div class="Historico">
        <div class="container">
        <h1>Histórico</h1>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Código da Venda</th>
                  <th>Nome do Cliente</th>
                  <th>Nome do Produto</th>  
                  <th>Andamamento</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                <?php while($hist = $result_hist->fetch_array()) { ?>
                  <tr>
                    <td><?php echo $hist['venda']; ?></td>
                    <td><?php echo $hist['nome']; ?></td>
                    <td><?php echo $hist['produto']; ?></td>
                    <td>
                    <form action="../Controlers/Atualiza-andamento.php" method="GET">
                    <div class="form-group">
                     <select class="form-control" id="exampleFormControlSelect1" name="andamento">
                        <option value="<?php echo $hist['andamento'] ?>" selected><?php echo $hist['andamento']; ?></option>
                        <option value="Requerido">Requerido</option>
                        <option value="Instalando">Instalando</option>
                        <option value="Concluido">Concluído</option>
                        <option value="Entregue">Entregue</option>
                        </select>
                        <input type="hidden" value="<?php echo $hist['venda']?>" name="id">
                    </div>
                    
                    </td>
                    <td><button type="submit" class="btn btn-primary">Atualizar</button></form></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
    </body>
    </html>



