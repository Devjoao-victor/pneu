<?php

$conexao = new mysqli("localhost","root","","loja");

$cliente = $_POST['cliente'];
$cpf = $_POST['cpf'];

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$sql_cliente = "INSERT INTO cliente (cliente,cpf)
VALUES ('$cliente','$cpf')";

$conexao->query($sql_cliente);

$cliente_id = $conexao->insert_id;

$sql_endereco = "INSERT INTO endereco_cliente (rua,bairro,numero,complemento,cliente_id)
VALUES ('$rua','$bairro','$numero','$complemento','$cliente_id')";

$conexao->query($sql_endereco);

echo "Cliente cadastrado com sucesso!";

?>