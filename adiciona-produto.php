<?php require_once("cabecalho.php"); 
require_once("banco-produto.php"); 
require_once("logica-usuario.php");
require_once("class/Produto.php");

verificaUsuario();

$produto = new Produto();

$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
    $produto->usado = "true";
} else{
    $produto->usado = "false";
}

if (insereProduto($conexao, $produto)) {
    ?>
    <p class="text-success">
        Produto <?= $produto->nome; ?> adicionado com sucesso!
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