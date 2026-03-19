[<?php
$conexao = new mysqli("localhost","root","","loja");

// Dados do formulário
$nome_empresa = $_POST['nome_empresa'];
$cnpj = $_POST['cnpj'];
$produto_quantidade = $_POST['produto_quantidade'];
$preco = $_POST['preco'];

$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

// 1️⃣ Inserir endereço primeiro
$sql_endereco = "INSERT INTO endereco_fornecedor (rua,bairro,numero,complemento)
VALUES ('$rua','$bairro','$numero','$complemento')";
$conexao->query($sql_endereco);

// Pegar o ID do endereço recém-criado
$id_endereco = $conexao->insert_id;

// 2️⃣ Inserir fornecedor com id_endereco_fornecedor
$sql_fornecedor = "INSERT INTO fornecedor (nome_empresa,cnpj,produto_quantidade,preco,id_endereco_fornecedor)
VALUES ('$nome_empresa','$cnpj','$produto_quantidade','$preco','$id_endereco')";
$conexao->query($sql_fornecedor);

echo "Fornecedor cadastrado com sucesso!";
?>]