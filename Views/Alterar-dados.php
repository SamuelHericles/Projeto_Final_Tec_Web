<?php
    session_start();

    include('../Controlers/Conexao.php');
    include('../Controlers/Consulta_cliente_login.php');

    /*$s1 = $dado['id'];
    $result_vend = mysqli_query($con,"SELECT * FROM venda WHERE id_cliente = $s1");
    $dadosv = $result_vend->fetch_array();
    $iv = $dadosv['id_cliente'];
    $result_hist = mysqli_query($con,"SELECT p.id, p.nome,p.categoria, p.descricao, v.andamento, p.preco FROM venda v INNER JOIN cliente c ON c.id = v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id WHERE v.id_cliente = '$iv' ");*/
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
      <div id="ADados" class="ADados">
        <div class="container">
          <h1>Alterar Dados Pessoais</h1>
            <form method="post" action="../Controlers/Editar_db_cliente.php" >
              <input type="hidden" name="id" value="<?php echo $dado['id']?>">
              <div class="form-group">
                <label for="nome">Novo nome</label>
                <input id="nome" name="nome" type="text" class="form-control" value="<?php echo $dado['nome']?>" >
              </div>
              <div class="form-group">
                <label for="email">Novo E-Mail</label>
                <input id="email" name="email" type="email" class="form-control" value="<?php echo $dado['email']?>">
              </div>
              <div class="form-group">
                <div class="form-row">
                    <div class = "col">
                      <label for="senha">Nova Senha</label>
                     <input id="senha" type="password" name="senha" class="form-control" value="<?php echo $dado['senha']?>">
                   </div >
                  <div class="col">
                    <label for="c-senha">Confirme a nova senha</label>
                    <input id="c-senha" type="password" name="c_senha" class="form-control">
                  </div>
                </div>
              </div>
              <input  type="submit"  name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Finalizar">        
            </form>
        </div>    
      </div>
    </main>
  </body>
</html>