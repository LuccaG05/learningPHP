<?php

class Cliente
{
    private $nome;
    private $endereco;
    private $celular;

    public function __construct($nome, $celular) 
    {
        $this->setNome($nome);
        $this->setCelular($celular);
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco()
    {
        $this->endereco = $endereco;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
}