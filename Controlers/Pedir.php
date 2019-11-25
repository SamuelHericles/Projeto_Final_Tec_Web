<?php
    include 'Conexao.php';

    $id_cliente = $_GET['id_cliente'];
    $id_produto = $_GET['id'];

    $query = "INSERT INTO venda(id_cliente, id_produto, andamento) VALUES ('$id_cliente', '$id_produto', 'requerido')";
    mysqli_query($con,$query);

    header("Location: ../Views/Cliente.php");

?>