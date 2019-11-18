<?php ?>
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

<body id="login">

<div class="divregistrar">
    <div class="container">
        <form method = "post" action="registro_db.php">
            
            <div class="form-group">
                <label class="textregist" for="nome">Nome</label>
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome Completo">
            </div>
            
            <div class="form-group">
                <label class="textregist" for="email">E-Mail</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="exemplo@exemplo.com">
            </div>
            
            <div class="form-group">
                <div class="form-row">
                    <div class = "col">
                        <label class="textregist" for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" class="form-control" placeholder="********">
                    </div >
                    <div class="col">
                        <label class="textregist" for="c-senha">Confirme a senha</label>
                        <input id="c-senha" type="password" name="c-senha" class="form-control" placeholder="********">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input id="inputRegistrar" type="submit" class="btn btn-primary btn-lg btn-block btn-green" value="Registrar">
            </div>

        </form>
    </div>
</div>
    
</body>

