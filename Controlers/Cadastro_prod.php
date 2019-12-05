<?php 
    session_start();

    include('Conexao.php');

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qt = $_POST['qt'];
    $cat = $_POST['cat'];
    $desc = $_POST['desc'];

    $result_cliente = mysqli_query($con,"INSERT INTO produtos(nome,preco,quantidade,categoria,descricao) VALUES ('$nome','$preco','$qt','$cat','$desc')");
    header('location:../Views/Admin.php');

?>