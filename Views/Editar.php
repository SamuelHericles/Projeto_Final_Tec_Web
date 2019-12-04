<?php 
    include('../Controlers/Conexao.php');
    include('../Controlers/Consulta_produtos_pelo_id.php');
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
            <li class="nav-item active"><a class="nav-link" href="Admin.php">Menu</a></li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="POST" action="../Controlers/Login.php">
            <input type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-blue" value="Sair">
          </form>
        </div>
      </nav>
    </header>
    <div class="Cadastro_prod">
      <form class="form-signin" method = "post" action ="../Controlers/Editar_db.php" >
        <input type="hidden" name="id" value="<?php echo $dado['id']; ?>">
        <p>Nome do produto:</p>
        <input type="text" name ="nome" class="form-control" required="" value="<?php echo $dado['nome']; ?>">
        <p>Preço</p>
        <input  type="number" name="preco" class="form-control"  required="" value="<?php echo $dado['preco']; ?>">
        <p>Quantidade</p>
        <input  type="number" name="qt" class="form-control"  required="" value="<?php echo $dado['quantidade']; ?>">  
        <p>Categoria</p>
        <input  type="text" name="cat" class="form-control"  required="" value="<?php echo $dado['categoria']; ?>">
        <p>Descrição</p>
        <input  type="text" name="desc" class="form-control"   required="" value="<?php echo $dado['descricao']; ?>">
        <input  type="submit"  name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Editar">
      </form>
    </div>
  </body>       
</html>