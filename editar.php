<?php 
    $nome = $_GET['nome'];
    $con      = mysqli_connect("127.0.0.1:3306","root","1234","emp");
    $result_cliente = mysqli_query($con,"SELECT * FROM produtos WHERE nome = '$nome'");
    $dado = $result_cliente->fetch_array();
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

<div class="Cadastro_prod">
          <form class="form-signin" method = "post" action ="editar_db.php" >
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