<?php require_once("cabecalho.php"); 

$produto = new Produto();
$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$produto->setId($_POST['id']);
$produto->setNome($_POST['nome']);
$produto->setPreco($_POST['preco']);
$produto->setDescricao($_POST['descricao']);
$produto->setCategoria($categoria);
if(array_key_exists('usado', $_POST)){
    $produto->setUsado("true");
} else{
    $produto->setUsado("false");
}

$produtoDao = new ProdutoDao($conexao);

if ($produtoDao->alteraProduto($produto)) {
    ?>
    <p class="text-success">
        O produto <?= $produto->getNome() ?> foi alterado com sucesso!
    </p>
<?php } else { 
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">
        O produto nao foi alterado! Error <?= $msg ?>
    </p>
<?php
}
?>

<?php include("rodape.php"); ?>