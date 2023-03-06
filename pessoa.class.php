<?php

class pessoa{
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    public function getNome(){
        return $this->nome;

    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereço(){
        return $this->endereço;

    }

    public function setEndereço($endereço){
        $this->endereço = $endereço;

    }
}

?>