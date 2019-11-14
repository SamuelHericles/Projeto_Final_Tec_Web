<?php 
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $c_senha = $_POST['c_senha'];

    $con  = mysqli_connect("127.0.0.1:3306","root","1234","emp");
    /*if($senha==$c_senha){*/
        $result_cliente = mysqli_query($con,"UPDATE cliente SET nome='$nome', email ='$email', senha='$senha' WHERE nome = '$nome' ");
    /*} else{
        header('location:cliente.php');
    }
?>