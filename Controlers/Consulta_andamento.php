<?php

  include('Conexao.php');
  $consulta = "SELECT v.id as venda, c.nome, p.nome as produto, v.andamento FROM cliente c INNER JOIN venda v ON c.id=v.id_cliente INNER JOIN produtos p ON v.id_produto=p.id";
  $result_hist = mysqli_query($con,$consulta);
    
?>
