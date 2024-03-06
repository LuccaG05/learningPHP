<?php

class CartaoCredito
{
    private $banco;
    private $cliente;
    private $bandeira;
    private $limite;
    private $vencimento;
    private array $compras;

    public function __construct($cliente, $banco, $bandeira, $limite)
    {
        $this->setCliente($cliente);
        $this->setBanco($banco);
        $this->setBandeira($bandeira);
        $this->setLimite($limite);
        $this->setVencimento(date('d/m'));
        $this->compras = [];
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getBandeira()
    {
        return $this->bandeira;
    }

    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    public function getVencimento()
    {
        return $this->vencimento;
    }

    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }

    public function getCompra()
    {
        return $this->compras;
    }

    public function total()
    {
        // return array_sum($this->compras);
        $total = 0;
        foreach ($this->compras as $compra)
        {
            $total += $compra;
        }

        return $total;
    }

    public function comprar(float $valor)
    {
        $limiteAtual = $this->limite - $this->total();
        if (
            is_numeric($valor) and 
            $valor > 0 and 
            $valor <= $limiteAtual
        ) {
            array_push($this->compras, $valor);
            return $valor;
        } 

        return false;
    }

    public function extrato()
    {
        echo "<strong>Extrato:</strong><br>";
        echo "<ul>";
        foreach($this->compras as $compra) {
            echo "<li>{$compra}</li>";
        }
        echo "</ul>";
    }

}