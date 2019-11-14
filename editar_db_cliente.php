<?php 
        
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $c_senha = $_POST['c_senha'];
    echo "<script> console.log('$id') </script>";
    $con  = mysqli_connect("127.0.0.1:3306","root","1234","emp");
    if($senha==$c_senha){

        $result_cliente = mysqli_query($con,"UPDATE cliente SET nome='$nome', email ='$email', senha='$senha' WHERE id =".$id );
        header("location:acess.php");
    } else{
        header('location:cliente.php');
    }
?>