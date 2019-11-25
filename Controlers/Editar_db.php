<?php 
    include('./Conexao.php');
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qt = $_POST['qt'];
    $cat = $_POST['cat'];
    $desc = $_POST['desc'];

    $result_cliente = mysqli_query($con,"UPDATE produtos SET nome='$nome', preco ='$preco', quantidade='$qt', categoria='$cat', descricao='$desc' WHERE id = '$id' ");
    header('location:../Views/Admin.php');
?>