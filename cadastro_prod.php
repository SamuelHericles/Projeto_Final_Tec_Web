<?php 
    // session_start inicia a sessão
    session_start();

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qt = $_POST['qt'];
    $cat = $_POST['cat'];
    $desc = $_POST['desc'];

    $con = mysqli_connect("127.0.0.1:3306","root","1234","emp");

    $result_cliente = mysqli_query($con,"INSERT INTO produtos(nome,preco,quantidade,categoria,descricao) VALUES ('$nome','$preco','$qt','$cat','$desc')");
    header('location:admin.php');

    
?>