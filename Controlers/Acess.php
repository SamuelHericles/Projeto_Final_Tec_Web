<?php 
    session_start();
    
    include('../Controlers/Conexao.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $result_cliente = mysqli_query($con,"SELECT * FROM cliente WHERE email = '$login' AND senha= '$senha'");
    $result_funcionario = mysqli_query($con,"SELECT * FROM funcionario WHERE email = '$login' AND senha= '$senha'");

    if(mysqli_num_rows($result_cliente) > 0 ){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:../Views/Cliente.php');
    } else {
        if(mysqli_num_rows($result_funcionario) > 0 ){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:../Views/Admin.php');
        }
        else
            header('location:./Login.php');
    }

?>