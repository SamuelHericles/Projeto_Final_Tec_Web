<?php
    include('./Conexao.php');

    $id_cliente = $_GET['id_cliente'];
    $id_produto = $_GET['id'];
    $quantidade = $_GET['qtd'];
    $quantidade-=1;
    $query = "INSERT INTO venda(id_cliente, id_produto, andamento) VALUES ('$id_cliente', '$id_produto', 'requerido')";
    mysqli_query($con,$query);
    mysqli_query($con, "UPDATE produtos SET quantidade='".$quantidade."' WHERE id= $id_produto");

    header("Location:../Views/Cliente.php?v=1");

?>