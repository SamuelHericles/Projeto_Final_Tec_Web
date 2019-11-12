<?php
  include "cabecalho.php"
?>

      <main role="main">
    
        <div class="container">
          <h1>Formulário para contato</h1>

          <form class="formone" method="POST" action="email.php">

                  <fieldset>
                      <div class="form-group">
                      <label>Nome completo:</label>
                      <input type="text" class="form-control" name="nome-email" placeholder="Francisco João da Silva">
                      </div>
                  </fieldset>

                  <fieldset>
                      <div class="form-group">
                          <label>Email completo:</label>
                          <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com">
                      </div>
                  </fieldset>

                  <fieldset>
                      <div class="form-group">
                          <label>Telefone:</label>
                          <input type="tel" class="form-control" name="telefone" placeholder="(00)0.0000-0000">
                          </div>
                  </fieldset>

                  <fieldset>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Mensagem:</label>
                          <textarea class="form-control" name="mesage" placeholder="Digite sua mensgem aqui" rows="5"></textarea>
                      </div>
                  </fieldset>
                  
          </form>
          
          <fieldset>
                      <div class="form-group">
                  <input id="btnEnviaContato" type="submit" name="BTEnvia" class="btn btn-primary btn-lg btn-block btn-dark" value="Enviar">
                      </div>
          </fieldset>
          
          <div class="wpp">
                  <a href="https://wa.me/5588997502676?text=Gostei%20do%20seu%20blog" target="_blank">
                  <i style="margin-top:16px" class="fa fa-whatsapp"></i>
          </div>
      </div>
      </main>

<?php
  include "footer.php"
?>