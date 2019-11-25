<?php
    session_start();
    
    include('./Conexao.php');

    $login = $_SESSION['login'];
    $result_vend = mysqli_query($con,"SELECT * FROM venda");
    $dadosv = $result_vend->fetch_array();
    $iv = $dadosv['id_cliente'];

    $result_hist = mysqli_query($con,"SELECT p.id, p.nome,p.categoria, p.descricao, v.andamento, p.preco FROM venda v INNER JOIN cliente c ON c.id = v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id WHERE v.id_cliente = '$iv' ");
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
                    <a class="nav-link" href="#">Meus pedidos</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Histórico</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#ADados">Alterar dados</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="post" action="./Logout.php">
                  <input type="submit" name="BTSair" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
                </form>
              </div>
            </nav>
        </header>

      <main>
        <div class="Historico">
          <div class="container">
            <h1>Histórico</h1>
            <div class="col-md-12">
              <table class="table">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Categoria</th>
                      <th>Descrição</th>
                      <th>Andamamento</th>
                      <th>Preço</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($hist = $result_hist->fetch_array()) { ?>
                      <tr>
                        <td><?php echo $hist['nome']; ?></td>
                        <td><?php echo $hist['categoria']; ?></td>
                        <td><?php echo $hist['descricao']; ?></td>
                        <td><?php echo $hist['andamento']; ?></td>
                        <td><?php echo $hist['preco']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
  </body>

</html>