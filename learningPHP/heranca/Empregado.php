<?php

class Empregado
{
    private $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function salarioAnual()
    {
        return $this->salario * 12;
    }
}