<?php
class Usuario {
    private $nome;
    private $sobrenome;

    public function hello(){
        echo "Olá usuário: $this->nome;";
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome){
        $this->nome = $sobrenome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
}