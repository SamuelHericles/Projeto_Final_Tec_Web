<?php
    include('Conexao.php');

    $nome= $_POST['nome'];
    echo $nome;
    $result_cliente = mysqli_query($con,"DELETE FROM venda WHERE id= '$nome'");
    
    header('location:../Views/Andamento-servicos.php');
?>