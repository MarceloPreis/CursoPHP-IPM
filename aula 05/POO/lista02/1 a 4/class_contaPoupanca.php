<?php 
class ContaPoupanca extends ContaBancaria {
    private $taxaDeJuros;

    public function __construct ($taxaDeJuros){
        $this->getTaxaDeJuros = $taxaDeJuros;
    }

    public function getTaxaDeJuros(){
        return $this->taxaDeJuros;
    }
}