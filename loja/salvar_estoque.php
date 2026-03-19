<?php

$conexao = new mysqli("localhost","root","","loja");

$quantidade_calcas = $_POST['quantidade_calcas'];
$preco_venda = $_POST['preco_venda'];
$vendedor_id = $_POST['vendedor_id'];

$sql = "INSERT INTO estoque (quantidade_calcas,preco_venda,vendedor_id)
VALUES ('$quantidade_calcas','$preco_venda','$vendedor_id')";

$conexao->query($sql);

echo "Estoque cadastrado com sucesso!";

?>