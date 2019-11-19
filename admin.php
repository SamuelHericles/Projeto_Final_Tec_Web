<?php
  include('conexao.php');
  /*$con      = mysqli_connect("127.0.0.1:3306","root","0123456789","emp");*/
  $consulta = "SELECT * FROM produtos";
  $result_cliente = mysqli_query($con,"SELECT * FROM produtos");
    
  // $categoria = mysqli_query($con,"SELECT nome FROM categoria");
  
  // $categorias = $categoria->fetch_array();



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
                <a class="nav-link" href="#">Controle de estoque</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Cadastra de produtos</a>
              </li>

            </ul>

            <form class="form-inline mt-2 mt-md-0" method="POST" action="login.php">
              <input type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
            </form>
          
          </div>
        </nav>
    </header>

    <main>

      <!--<div class="container"> <h1>Controle</h1><div class="linha"></div></div>-->
      <div class="Controle">
          <?php ?>
      </div>


      <!--<div class="container"><h1> Cadastro</h1><div class="linha"></div></div>-->

        <div class="container">
        <h2>Produtos</h2>
          <div class="table-responsive">
              <table class="table table-striped table-bordered">
              <thead>
              <tr>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Quantidade</th>
                  <th>Categoria</th>
                  <th>Descrição</th>
                  <th>Editar/Excluir</th>
                </tr>
                </thead> 
                <tbody>
                <?php while($dado = $result_cliente->fetch_array()) { ?>
                    <tr>
                      <td><?php echo $dado['nome']; ?></td>
                      <td> R$ <?php echo $dado['preco']; ?></td>
                      <td><?php echo $dado['quantidade']; ?></td>
                      <td><?php echo $dado['categoria']; ?></td>
                      <td><?php echo $dado['descricao']; ?></td>
                      <td>
                        <a href="editar.php?nome=<?php echo $dado['nome']; ?>">Editar</a>
                        <a href="excluir.php?nome=<?php echo $dado['nome']; ?>">Excluir</a>
                      </td>
                     </tr>
                <?php } ?>
                </tbody>   
              </table>
          </div>
          <div class="row">
            <div class="col-md-4">
              <a href="categorias-criar.php" class="btn btn-info btn-block">Criar Nova Categoria</a>
            </div>
          </div>
        </div>
        
        <div class="container"><div class="linha"></div></div>
        <div class="container">
         <h2>Cadastro novo produto</h2>
         <form action="cadastro_prod.php" method="post">
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