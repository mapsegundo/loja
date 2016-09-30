<?php require_once("cabecalho.php"); 
require_once("logica-usuario.php");

verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$produto->setNome($_POST["nome"]);
$produto->setPreco($_POST["preco"]);
$produto->setDescricao($_POST["descricao"]);
$produto->setCategoria($categoria);
if(array_key_exists('usado', $_POST)){
    $produto->setUsado("true");
} else{
    $produto->setUsado("false");
}

$produtoDao = new ProdutoDao($conexao);

if ($produtoDao->insereProduto($produto)) {
    ?>
    <p class="text-success">
        Produto <?= $produto->getNome() ?> adicionado com sucesso!
    </p>
<?php } else { 
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">
        O produto nao foi adicionado! Error <?= $msg ?>
    </p>
<?php
}
?>

<?php include("rodape.php"); ?>