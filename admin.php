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
          <?php?>
      </div>


      <!--<div class="container"><h1> Cadastro</h1><div class="linha"></div></div>-->
        <div class="Cadastro_prod">
          <form class="form-signin" method = "post" action ="cadastro_prod.php" >
                    <p>Nome do produto:</p>
                    <input type="text" name ="nome" class="form-control" required="" >

                    <p>Preço</p>
                    <input  type="number" name="preco" class="form-control"  required="">

                    <p>Quantidade</p>
                    <input  type="number" name="qt" class="form-control"  required="">

                    <p>Categoria</p>
                    <input  type="text" name="cat" class="form-control"  required="">

                    <p>Descrição</p>
                    <textarea class="form-control" name="desc" placeholder="Digite sua mensgem aqui" rows="5"></textarea>

                    <input  type="submit"  name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-green" value="Cadastrar">
          </form>
        </div>
       




      <div class="Cadastro">
              <div class="row">
                  <div class="col-md-12">
                      <h2>Produtos</h2>
                  </div>
              </div>

          <div class="row">
              <div class="col-md-4">
                  <a href="#" class="btn btn-info btn-block">Crair Novo Produto</a>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <table class="table">
                      <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nome</th>
                          <th>Preço</th>
                          <th>Quantidade</th>
                          <th>Categoria</th>
                          <th class="acao">Editar</th>
                          <th class="acao">Excluir</th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>O Senhor dos Aneis</td>
                              <td>R$ 80,55</td>
                              <td>2</td>
                              <td>Livros</td>
                              <td><a href="#" class="btn btn-info">Editar</a></td>
                              <td><a href="#" class="btn btn-danger">Excluir</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
         </div>
       </main>



</body>

</html>