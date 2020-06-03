<?php
    session_start();
    ini_set('default_charset', 'UTF8');
    include('../Controlers/Conexao.php');
    include('../Controlers/Consulta_produtos.php');
    include('../Controlers/Consulta_historico_id.php');

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
    <link rel="stylesheet" href="../Models/Earousel.css">
    <link rel="stylesheet" href="../Models/Estilo.css">
    <title>SisTec - Assistência Técnica</title>
  </head>

  <body>
    <header>
    <?php
          $a = $_GET['a'];
          if ($a==1) {
            echo "<script>
              window.alert('Seja bem-vindo !');
          </script>";
        } ?>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="./Alterar-dados.php">Alterar Dados</a>
        </div>
        </div>
        <form class="form-inline mt-2 mt-md-0" method="post" action="../Controlers/Logout.php">
          <input type="submit" name="BTSair" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
        </form>
      </nav>
    </header>
    <main>
      <div class="Historico">
        <div class="container">
        <?php
          $v = $_GET['v'];
          if ($v==1) {
            echo "<script>
            window.alert('Pedido feito com sucesso!');
          </script>";
        } ?>
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
      <div class="container"><div class="linha"></div></div>
      <div class="container">
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
                    <th>Pedir</th>
                  </tr>
                </thead> 
                <tbody>
                  <?php while($dados = $result_cliente->fetch_array()){?>
                    <?php if($dados['quantidade']>0){ ?>
                    <tr>
                      <td><?php echo $dados['nome']; ?></td>
                      <td> R$ <?php echo $dados['preco']; ?></td>
                      <td><?php echo $dados['quantidade']; ?></td>
                      <td><?php echo $dados['categoria']; ?></td>
                      <td><?php echo $dados['descricao']; ?></td>
                      <td><a id="pedir" class="text-primary" href="../Controlers/Pedir.php?id=<?php echo $dados['id'];?>&id_cliente=<?php echo $dado['id'];?>&qtd=<?php echo $dados['quantidade'];?>">Pedir</a></td>
                    </tr>
                  <?php } } ?>
                </tbody>   
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html> 