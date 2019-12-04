<?php

    include('./Conexao.php');
    include('./Consulta_vendas.php');
    $dadosv = $result_vend->fetch_array();
    $iv = $dadosv['id_cliente'];
    $result_hist = mysqli_query($con,"SELECT p.id, p.nome,p.categoria, p.descricao, v.andamento, p.preco FROM venda v INNER JOIN cliente c ON c.id = v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id WHERE v.id_cliente = '$iv' ");

?>