<?php
  include "cabecalho.php"
?>     


      <main >
    
        <div class="container"> 
          <h1 class="h1page">Formulário para contato</h1>

          <form class="formone" method="POST" action="email.php">

                  
                      <div class="form-group">
                      <label>Nome completo:</label>
                      <input type="text" class="form-control" name="nome-email" placeholder="Francisco João da Silva">
                      </div>
                  

                  
                      <div class="form-group">
                          <label>Email completo:</label>
                          <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com">
                      </div>
                  

                  
                      <div class="form-group">
                          <label>Telefone:</label>
                          <input type="tel" class="form-control" name="telefone" placeholder="(00)0.0000-0000">
                          </div>
                

                  
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Mensagem:</label>
                          <textarea class="form-control" name="mesage" placeholder="Digite sua mensgem aqui..." rows="5"></textarea>
                      </div>
                  
                      <div class="form-group">
                  <input id="btnEnviaContato" type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-dark" value="Enviar">
                      </div>
          </form>
          
          
                      
          
          
          <div class="wpp">
                  <a href="https://wa.me/5588997502676?text=Gostei%20do%20seu%20blog" target="_blank">
                  <i style="margin-top:16px" class="fa fa-whatsapp"></i>
          </div>
      </div>
      </main>

      <footer class="footercont page-footer font-small mt-2 font-weight-light text-white-50 bg-dark footer-copyright text-center py-2 mb-0">
          <p>&copy; 2014-2019 Sistec Company SA.</p>
    </footer>    

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>

</body>

</html>