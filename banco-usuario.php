<?php

function buscaUsuario($conexao, $email, $senha){
    $senhaMD5 = md5($senha);
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMD5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

