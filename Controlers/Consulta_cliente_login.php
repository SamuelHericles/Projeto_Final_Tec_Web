<?php
    session_start();

    include('Conexao.php');

    $login = $_SESSION['login'];
    $result_cliente = mysqli_query($con,"SELECT * FROM cliente WHERE email = '$login' ");
    $dado = $result_cliente->fetch_array();
?>