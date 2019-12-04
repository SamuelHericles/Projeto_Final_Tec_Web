<?php 
    include('./Conexao.php');

    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_c = $_POST['c-senha'];

    $lista_email_sql = mysqli_query($con, "SELECT * FROM cliente");
    
    $cont = 0;
    while ($lista_email = $lista_email_sql->fetch_array()) {
        echo $lista_email['email'];
        if ($email == $lista_email['email']) {
            $cont = $cont + 1;
        }
    }
    echo $cont;
    if($cont == 0){
        if($senha == $senha_c){
            $result_cliente = mysqli_query($con,"INSERT INTO cliente(nome,email,senha) VALUES ('$nome','$email','$senha')");
            session_destroy();
            header('location:./Views/Login.php?r=3');
        } else{
            session_destroy();
            header('location:./Views/Login.php?v=2?r=2');
        }
    }else{
        header('location:./Views/Login.php?v=1');
    }
?>