<?php

class Compra
{
    private $cliente;
    private $produto;
    private $qtdProduto;

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function getQuantidadeProduto()
    {
        return $this->qtdProduto;
    }

    public function setQuantidadeProduto($qtdProduto)
    {
        $this->qtdProduto = $qtdProduto;
    }

    public function fazerCompra($cliente, $produto, $qtd)
    {
        $this->setCliente($cliente);
        $this->setProduto($produto);
        $this->setQuantidadeProduto($qtd);
    }

    public function totalCompra()
    {
        return $this->produto->getPreco() * $this->qtdProduto;
    }

    public function detalhes()
    {
        echo "O {$this->cliente->getNome()} comprou {$this->qtdProduto} {$this->produto->getNome()} no total de R$ {$this->totalCompra()}";
    }
}