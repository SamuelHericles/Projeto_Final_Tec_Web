<?php
    require_once 'cabecalho.php';
?>

<body id="login">
    
    <div class="container">
    
        <form action="">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome Completo">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="exemplo@exemplo.com">
            </div>
            <div class="form-group">
            <div class="form-row">
                <div class = "col">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" class="form-control">
                </div >
                <div class="col">
                    <label for="c-senha">Confirme a senha</label>
                    <input id="c-senha" type="password" name="c-senha" class="form-control">
                </div>
            </div>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Finalizar</button>
            </div>
        </form>
    </div>
    
</body>

<?php
    require_once 'footer.php'
?>