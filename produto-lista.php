<?php include("cabecalho.php"); 
 include("conecta.php");
include("banco-produto.php"); ?>

<table class="table table-striped table-bordered">

    <?php 
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) :
        ?>
    <tr>
        <td><?= $produto['nome'] . "<br />"; ?></td>
        <td>R$ <?= $produto['preco'] . "<br />"; ?></td>
    </tr>

    <?php

    endforeach;
    
    ?>
    
</table>

<?php include("rodape.php"); ?>

