<?php include ("conecta.php");
 include ("banco-usuario.php");
 
 $usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
 //var_dump($usuario);
if($usuario == null){
    header("Location: index.php?login=");
} else{
    header("Location: index.php?login=true");
}
die();
