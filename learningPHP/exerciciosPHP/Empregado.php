<?php 

class Empregado{

    private $nome;
    private $sobrenome;
    private $setor;
    private $salarioMensal;

    public function __construct($nomeEmpregado, $sobrenomeEmpregado, $setorEmpregado)
    {
        $this->setNome($nomeEmpregado);
        $this->setSobrenome($sobrenomeEmpregado);
        $this->setSetor($setorEmpregado);
    }

    public function setNome($nomeEmpregado)
    {
        if (empty($nomeEmpregado)){
            $this->nome = "Vazio";
        } else{
            $this->nome = $nomeEmpregado;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setSobrenome($sobrenomeEmpregado)
    {
        if (empty($sobrenomeEmpregado)){
            $this->sobrenome = "-";
        } else {
            $this->sobrenome = $sobrenomeEmpregado;
        }
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSetor($setorEmpregado)
    {
        if (empty($setorEmpregado)){
            $this->setor = "-";
        } else {
            $this->setor = $setorEmpregado;
        }
    }
    
    public function getSetor()
    {
        return $this->setor;
    }

    public function setSalarioMensal($salarioMensalEmpregado)
    {
        if ($salarioMensalEmpregado < 0){
            $this->salarioMensal = 0;
        } else {
            $this->salarioMensal = $salarioMensalEmpregado;
        }
            
    }   

    public function getSalarioMensal()
    {
        return $this->salarioMensal;
    }

    public function salarioAnual()
    {
        return $this->salarioMensal * 12;
    }
}

$empregado1 = new Empregado("Luccao", "Cachorrao", "Desenvolvimento");
$empregado2 = new Empregado("Eduarda", "", "Marketing");

$empregado1->setSalarioMensal(1500);
$empregado2->setSalarioMensal(-100);

echo "Nome: {$empregado1->getNome()} </br>";
echo "Sobrenome: {$empregado1->getSobrenome()} </br>";
echo "Setor: {$empregado1->getSetor()} </br>";
echo "Salário Mensal: R$ {$empregado1->getSalarioMensal()} </br>";
echo "Salário Anual: R$ {$empregado1->salarioAnual()} </br>";

echo "</br>"; 

echo "Nome: {$empregado2->getNome()} </br>";
echo "Sobrenome: {$empregado2->getSobrenome()} </br>";
echo "Setor: {$empregado2->getSetor()} </br>";
echo "Salário Mensal: R$ {$empregado2->getSalarioMensal()} </br>";
echo "Salário Anual: {$empregado2->salarioAnual()} </br>";