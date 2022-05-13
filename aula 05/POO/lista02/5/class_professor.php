<?php
abstract class Professor{
    private $matricula;
    private $nome;
    private $salario;
    private $cargaHoraria;

    public function setMatricula ($matricula){
        $this->matricula = $matricula;
    }
    public function setNome ($nome){
        $this->nome = $nome;
    }
    abstract function setSalario($salario);
    abstract function setCargaHoraria($horas = null);

    public function getMatricula (){
        return $this->matricula;
    }
    public function getNome (){
        return $this->nome;
    }
    public function getSalario(){
        return $this->salario;
    }
}