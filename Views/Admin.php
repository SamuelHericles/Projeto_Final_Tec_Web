<?php

  include('../Controlers/Conexao.php');
  $consulta = "SELECT * FROM produtos";
  $result_cliente = mysqli_query($con,"SELECT * FROM produtos");
    
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
              <a class="nav-link" href="Admin.php">Menu</a>
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

    <main>
      <div class="Controle">
        <?php ?>
      </div>
      <div class="container">
      <?php
          $v = $_GET['v'];
          if ($v==1) {
            echo "<script>
            window.alert('Produto excluído com sucesso!');
          </script>";
        } ?>
        <h2>Produtos</h2>
          <div class="table-responsive">
            <div class="tabela_prod">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                  </tr>
                </thead> 
                <tbody>
                  <?php while($dado = $result_cliente->fetch_array()){?>
                    <tr>
                      <td><?php echo $dado['nome']; ?></td>
                      <td> R$ <?php echo $dado['preco']; ?></td>
                      <td><?php echo $dado['quantidade']; ?></td>
                      <td><?php echo $dado['categoria']; ?></td>
                      <td><?php echo $dado['descricao']; ?></td>
                      <td><a class="text-primary" href="./Editar.php?id=<?php echo $dado['id'];?>">Editar</a></td>
                      <td><a class="text-danger" href="../Controlers/Excluir.php?id=<?php echo $dado['id'];?>">Excluir</a></td>
                    </tr>
                  <?php } ?>
                </tbody>   
              </table>
            </div>
          </div>
        </div>
      </div>   

      <div class="container"><div class="linha"></div></div>
        <div class="container">
        <h2>Cadastro novo produto</h2>
        <form action="../Controlers/Cadastro_prod.php" method="post">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="preco">Preço</label>
            <input id="preco" name="preco" type="number" class="form-control">
          </div>
          <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input id="quantidade" name="qt" type="number" class="form-control">
          </div>
          <div class="form-group">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="cat" type="text" class="form-control">
              <option value="servico" >Serviço</option>
              <option value="produto">Produto</option>
            </select>
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="desc" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </main>
  </body>
</html>