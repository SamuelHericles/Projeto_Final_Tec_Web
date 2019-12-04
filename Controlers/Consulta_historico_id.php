<?php    
    include('../Controlers/Conexao.php');
    $login = $_SESSION['login'];
    $result_cliente1 = mysqli_query($con,"SELECT * FROM cliente WHERE email = '$login' ");
    $dado = $result_cliente1->fetch_array();
    $s1 = $dado['id'];
    $result_vend = mysqli_query($con,"SELECT * FROM venda WHERE id_cliente = $s1");
    $dadosv = $result_vend->fetch_array();
    $iv = $dadosv['id_cliente'];

    $result_hist = mysqli_query($con,"SELECT p.id, p.nome,p.categoria, p.descricao, v.andamento, p.preco, p.quantidade FROM venda v INNER JOIN cliente c ON c.id = v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id WHERE v.id_cliente = '$iv' ");
?>