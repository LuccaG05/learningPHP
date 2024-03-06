<?php

class Banco
{
    private $nome;
    private $endereco;
    private $telefone;
    private $gerente;

    public function __construct($nome, $endereco)
    {
        $this->setNome($nome);
        $this->setEndereco($endereco);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            $this->nome = "Erro ao inserir nome";
        }
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        if (!empty($endereco)) {
            $this->endereco = $endereco;
        } else {
            $this->endereco = "Erro ao inserir endereço";
        }
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        if (!empty($telefone)) {
            $this->telefone = $telefone;
        } else {
            $this->telefone = "Erro ao inserir telefone";
        }
    }

    public function getGerente()
    {
        return $this->gerente;
    }

    public function setGerente($gerente)
    {
        if (!empty($gerente)) {
            $this->gerente = $gerente;
        } else {
            $this->gerente = "Erro ao inserir gerente";
        }
    }
}