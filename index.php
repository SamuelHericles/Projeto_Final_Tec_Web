<?php
  include "Views/Cabecalho.php"
?>

  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>    
      <div class="carousel-inner">  
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#191970"/></svg>
          <img class="card-img-top"src="Imagens/Web-design.jpg">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1 >Manutenção de Computadores</h1>
              <p >Realizamos manutenção em cada componente do seu computador ou outro dispositivo de hardware pelo preço mais acessivel do mercado.</p>
              <p><a class="btn btn-lg btn-primary" href="Views/Servico.php" role="button">Faça um orçamento</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#0000FF"/></svg>
          <img class="card-img-top" src="../Imagens/Keyboard.jpg" >
          <div class="container">
            <div class="carousel-caption">
              <h1 class="colortextcar">Uma empresa diferenciada</h1>
              <p class="colortextcar">Venha nos conhecer e saber um pouco mais sobre a gente.</p>
              <p><a class="btn btn-lg btn-primary" href="../Views/Diferenciais.php" role="button">Fazemos diferente</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
          <img class="card-img-top" src="../Imagens/Aerial.jpg">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1 >Vamos conversar! ;)</h1>
              <p >Tire suas dúvidas através do contato, temos um equipe sempre à diposição para lhe atender.</p>
              <p><a class="btn btn-lg btn-primary" href="../Views/Contato.php" role="button">Fale conosco</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img src="../Imagens/Missao.png" width="140" height="140">
          <h2>Missão</h2>
          <p>Contribuir para um país mais forte por meio de empresas mais fortes, concertando equipamento.</p>
        </div>
        <div class="col-lg-4">
          <img src="../Imagens/Valores.png" width="140" height="140">
          <h2>Valor</h2>
          <p>Serem claros e objetivos, permitindo a compreensão de todos.
            Serem públicos para toda a organização, clientes e sociedade.
            Serem obrigatórios, todos os sócios e colaboradores devem seguir à risca.</p>
        </div>
        <div class="col-lg-4">
          <img src="../Imagens/Visao.png" width="140" height="140">
          <h2>Visão</h2>
          <p>Ser a melhor empresa de Assistência técnica do Brasil </p>
        </div>
      </div>
  </main>

<?php
  include "Views/Footer.php"
?>