<?php

class Cliente
{
    private $nome;
    private $email;
    private $endereco;
    private $telefone;

    public function __construct($nome, $email, $endereco)
    {
        $this->setNome($nome);
        $this->setEmail($email);
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
            $this->nome = "Erro no nome";
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (!empty($email)) {
            $this->email = $email;
        } else {
            $this->email = "Erro no email";
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
            $this->endereco = "Erro no endereço";
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
            $this->telefone = "Erro no telefone";
        }
    }
}