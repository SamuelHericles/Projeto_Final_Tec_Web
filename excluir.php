<?php
    $nome = $_GET['nome'];
    include('conexao.php');
    /*$con      = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    $consulta = "SELECT * FROM produtos";
    $result_cliente = mysqli_query($con,"DELETE FROM produtos WHERE nome = '$nome'");
    header('location:admin.php');
?>