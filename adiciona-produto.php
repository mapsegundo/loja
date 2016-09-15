<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); 


$nome = $_GET["nome"];
$preco = $_GET["preco"];

if (insereProduto($conexao, $nome, $preco)) {
    ?>
    <p class="text-success">
        Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
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