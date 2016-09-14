<?php include("cabecalho.php"); ?>
	<h1>Formulario de Cadastro</h1>
		<form action="adiciona-produto.php">
			Nome: <input type="text" name="nome"/> <br />
			Preco: <input type="text" name ="preco"/> <br />
			<input type="submit" value="Cadastrar"/>
		</form>
<?php include("rodape.php"); ?>