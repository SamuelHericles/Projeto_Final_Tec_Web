<?php
    session_start();
    include('conexao.php');
    $login = $_SESSION['login'];
    /*$con  = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    echo "<script> console.log('$login') </script>";

    $result_cliente = mysqli_query($con,"SELECT * FROM cliente WHERE email = '$login' ");
    $dado = $result_cliente->fetch_array();
    
    $s1 = $dado['id'];

    $result_vend = mysqli_query($con,"SELECT * FROM venda WHERE id_cliente = $s1");
    
    $dadosv = $result_vend->fetch_array();

    $iv = $dadosv['id_cliente'];
    echo "<script> console.log('$iv') </script>";

    $result_hist = mysqli_query($con,"SELECT p.id, p.nome,p.categoria, p.descricao, v.andamento, p.preco FROM venda v INNER JOIN cliente c ON c.id = v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id WHERE v.id_cliente = '$iv' ");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="estilo.css">

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

            <form class="form-inline mt-2 mt-md-0" method="post" action="logout.php">
              <input type="submit" name="BTSair" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
            </form>
          
          </div>
        </nav>
    </header>


    <main>


    div class="Historico">
        <!-- Requer conexão com o banco -->
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


    <div id="ADados" class="ADados">
      <div class="container">
        <h1>Alterar Dados Pessoais</h1>
          <form method="post" action="editar_db_cliente.php" >
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