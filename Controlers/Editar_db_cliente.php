<?php 
    include('Conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $c_senha = $_POST['c_senha'];

    if($senha==$c_senha){
        $result_cliente = mysqli_query($con,"UPDATE cliente SET nome='$nome', email ='$email', senha='$senha' WHERE id =".$id );
        header("location:./Acess.php");
    } else {
        header('location:../Views/Cliente.php');
    }
?>