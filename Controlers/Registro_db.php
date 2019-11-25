<?php 
    include('./Conexao.php');

    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_c = $_POST['c-senha'];

    if($senha == $senha_c){
        $result_cliente = mysqli_query($con,"INSERT INTO cliente(nome,email,senha) VALUES ('$nome','$email','$senha')");
        session_destroy();
        header('location:./Login.php');
    } else{
        session_destroy();
        header('location:./Login.php');
    }
?>