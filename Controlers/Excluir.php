<?php
    include('./Conexao.php');

    $id= $_GET['id'];

    $result_cliente = mysqli_query($con,"DELETE FROM produtos WHERE id = '$id'");
    
    header('location:../Views/Admin.php?v=1');
?>