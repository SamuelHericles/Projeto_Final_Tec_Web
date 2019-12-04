<?php
    include 'Conexao.php';

    $id = $_GET['id'];
    $andamento = $_GET['andamento'];

    mysqli_query($con,"UPDATE venda SET andamento='$andamento' WHERE id =".$id );

    header("Location: ../Views/Andamento-servicos.php?v=1");

?>