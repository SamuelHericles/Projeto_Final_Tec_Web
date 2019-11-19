<?php 
    // session_start inicia a sessão
    session_start();
    include('conexao.php');
    // as variáveis login e senha recebem os dados digitados na página anterior
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
    /*$con = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    /*$test = mysqli_query($con,"SELECT * FROM cliente");*/
    
    // A variavel $result pega as varias $login e $senha, faz uma 
    //pesquisa na tabela de usuarios
    $result_cliente = mysqli_query($con,"SELECT * FROM cliente WHERE email = '$login' AND senha= '$senha'");
    $result_funcionario = mysqli_query($con,"SELECT * FROM funcionario WHERE email = '$login' AND senha= '$senha'");
    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
    bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
    será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
    resultado ele redirecionará para a página site.php ou retornara  para a página 
    do formulário inicial para que se possa tentar novamente realizar o login */
    if(mysqli_num_rows($result_cliente) > 0 ){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:cliente.php');
    } else {
        if(mysqli_num_rows($result_funcionario) > 0 ){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:admin.php');
        }
        else
            header('location:login.php');
    }

?>