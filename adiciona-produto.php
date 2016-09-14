<?php include("cabecalho.php"); ?>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');

$query = "insert into produtos(nome, preco) values ('{$nome}', {$preco})";
	if(mysqli_query($conexao, $query)){ ?>
		<p class="alert alert-success">
		<strong>Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</strong>
		</p>
	<?php } else{ ?>
		<p class="alert alert-danger">
		<strong>O produto não foi adicionado!</strong>
		</p>
	<?php };
mysqli_close($conexao);


?>

<?php include("rodape.php"); ?>