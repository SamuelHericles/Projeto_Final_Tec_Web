<?php 
    $nome = $_POST['nome'];
    include('conexao.php');
    /*$con  = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qt = $_POST['qt'];
    $cat = $_POST['cat'];
    $desc = $_POST['desc'];

    $result_cliente = mysqli_query($con,"UPDATE produtos SET nome='$nome', preco ='$preco', quantidade='$qt', categoria='$cat', descricao='$desc' WHERE nome = '$nome' ");
    header('location:admin.php');
?>