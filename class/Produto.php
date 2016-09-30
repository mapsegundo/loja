<?php

class Produto{
    
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $categoria;
    private $usado;
    
    public function precoComDesconto($valor=0.1){
        if($valor > 0 && $valor <= 0.5){
            $this->preco-=$this->preco*$valor;
        } 
        return $this->preco;
    }
    
    function getPreco() {
        return $this->preco;
    }

    function setPreco($preco) {
        if($preco > 0){
            $this->preco = $preco;
        }
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getUsado() {
        return $this->usado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setUsado($usado) {
        $this->usado = $usado;
    }




    
}