<?php
class Tarefa{
    private $id;
    private $nome;
    private $descricao;
    private $prazo;
    private $status;
    
    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id=$id;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome=$nome;
    }
    function getDescricao(){
        return $this->descricao;
    }
    function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    function getPrazo(){
        return $this->prazo;
    }
    function setPrazo($prazo){
        $this->prazo=$prazo;
    }
    function getStatus(){
        return $this->status;
    }
    function setStatus($status){
        $this->status=$status;
    }
    
}




?>