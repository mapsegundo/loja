<?php include("cabecalho.php");
include("logica-usuario.php");?>

<h1>Bem Vindo(a)</h1>
<?php $nome = "Marshall"; ?>
<h3><strong>a Loja do <?= $nome; ?></strong></h3>
                
<?php if(usuarioEstaLogado()){ ?>
    <p class="text-success">Voce esta logado como <?=  usuarioLogado()?> </p>
    <a class="btn btn-danger" href="logout.php">Deslogar</a>
<?php } else{ ?>
                
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <table class="table">
                    <tr>
                        <td>Email</td>
                        <td><input class="form-control" type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Senha</td>
                        <td><input class="form-control" type="password" name="senha"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Entrar</button></td>
                    </tr>
                </table>
                </form>
<?php } ?>
<?php include("rodape.php"); 