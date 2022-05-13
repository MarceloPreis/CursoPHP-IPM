<?php
include_once "class_cliente.php";

class ContaBancaria
{
    private $Cliente;
    public $dataCriacao;
    public $saldoInicial;
    public $saldoAtual;
    public $operacoes = [];

    public function sacar($valor)
    {
        $this->saldoAtual -= $valor;
        $nome = $this->getCliente()->getNome();
        array_push($this->operacoes, ["operacao" => "Saque", "valor" => $valor]);
        echo "Realizado saque    para o cliente $nome de R$ $valor. Saldo atual R$ $this->saldoAtual.  <br>";
    }

    public function deposito($valor)
    {
        $this->saldoAtual += $valor;
        $nome = $this->getCliente()->getNome();
        array_push($this->operacoes, ["operacao" => "Depósito", "valor" => $valor]);
        echo "Realizado depósito para o cliente $nome no valor de R$ $valor. Saldo atual R$ $this->saldoAtual.";
    }

    public function extrato()
    {
        echo "<table border=1px>
                <tr>
                    <th>Operação</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Sado Inicial</td>
                    <td>$this->saldoInicial</br>
                </tr>";
        foreach ($this->operacoes as $data) {
            echo "<tr>
                    <td>$data[operacao]</td>
                    <td> R$ $data[valor]</td>
                 </tr>";
        }
        echo "  <tr>
                    <td>Sado Atual</td>
                    <td>$this->saldoAtual</br>
                </tr>
            </table>";
    }

    public function exibeSaldo($valor)
    {
        $nome = $this->getCliente()->getNome();
        echo "“Saldo atual do cliente $nome R$ $this->saldoAtual.";
    }

    public function setCliente(Cliente $cliente)
    {
        $this->Cliente = $cliente;
    }

    public function getCliente()
    {
        return $this->Cliente;
    }
}
