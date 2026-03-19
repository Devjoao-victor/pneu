<?php

$conexao = new mysqli("localhost","root","","loja");

$nome = $_POST['nome'];
$quantidade_vendas = $_POST['quantidade_vendas'];

$sql = "INSERT INTO vendedor (nome,quantidade_vendas)
VALUES ('$nome','$quantidade_vendas')";

$conexao->query($sql);

echo "Vendedor cadastrado com sucesso!";

?>