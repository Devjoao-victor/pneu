<?php

$conexao = new mysqli("localhost","root","","loja");

$cliente_id = $_POST['cliente_id'];
$vendedor_id = $_POST['vendedor_id'];
$quantidade_vendas = $_POST['quantidade_vendas'];
$preco = $_POST['preco'];
$data = $_POST['data'];

$sql = "INSERT INTO vendas (cliente_id,vendedor_id,quantidade_vendas,preco,data)
VALUES ('$cliente_id','$vendedor_id','$quantidade_vendas','$preco','$data')";

$conexao->query($sql);

echo "Venda registrada com sucesso!";

?>