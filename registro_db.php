<?php 
    // session_start inicia a sessão
    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_c = $_POST['c-senha'];

    $con = mysqli_connect("127.0.0.1:3306","root","1234","emp");

    if($senha == $senha_c){
        $result_cliente = mysqli_query($con,"INSERT INTO cliente(nome,email,senha) VALUES ('$nome','$email','$senha')");
        session_destroy();
        header('location:cliente.php');
    } else{
        session_destroy();
        header('location:cliente.php');
    }
    
?>