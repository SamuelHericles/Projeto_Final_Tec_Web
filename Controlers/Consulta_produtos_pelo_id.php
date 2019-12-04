<?php 
    include('../Controlers/Conexao.php');

    $id = $_GET['id'];
    $result_cliente = mysqli_query($con,"SELECT * FROM produtos WHERE id = '$id'");
    $dado = $result_cliente->fetch_array();
?>
