<?php require_once("cabecalho.php"); 
require_once ("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId(1);

$produto = new Produto();
$produto->setCategoria($categoria);

$categoriaDao = new CategoriaDao($conexao);
$categorias = $categoriaDao->listaCategorias();

?> 
	<h1>Formulario de Cadastro</h1>
        <form action="adiciona-produto.php" method="post">
                    <table class="table">
                        
                        <?php include("produto-formulario-base.php"); ?>
                        
                        <tr>
                            <td> <input class="btn btn-primary" type="submit" value="Cadastrar"/> </td>
                        </tr>
                    </table>
			
		</form>
<?php include("rodape.php"); 