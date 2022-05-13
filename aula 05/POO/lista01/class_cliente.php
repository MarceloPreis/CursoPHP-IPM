<?php
class Cliente {
    private $nome;
    private $email;
    private $telefone;

    public function getNome (){
       return $this->nome;
    }
    public function getEmail (){
        return $this->email;
    }
    public function getTelefone (){
        return $this->telefone;
    }

    public function setNome ($nome){
        $this->nome = $nome;
    }
    public function setEmail ($email){
        $this->email = $email;
    }
    public function setTelefone ($telefone){
        $this->telefone = $telefone;
    }

    public function exibir(){
        echo "Nome: $this->nome - Email: $this->email - Telefone: $this->telefone";
    }
}
