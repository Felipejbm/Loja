<?php
require 'conexao.php';

$id = $_GET['id'];
$nomeNovo = $_POST['nomeNovo'];
$precoNovo = $_POST['precoNovo'];
$quantidadeNovo = $_POST['quantidadeNovo'];

$sql = "UPDATE produtos SET nome = :nomeNovo, preco = :precoNovo, quantidade = :quantidadeNovo WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nomeNovo', $nomeNovo);
$stmt->bindParam(':precoNovo', $precoNovo);
$stmt->bindParam(':quantidadeNovo', $quantidadeNovo);

if ($stmt->execute()) {
    echo "<script>
    alert('Produto atualizado com sucesso!');
    </script>";
    header("location: index.php");
} else {
    echo "Erro ao atualizar produto.";
}
