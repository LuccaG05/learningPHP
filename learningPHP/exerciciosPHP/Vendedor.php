<?php 

class Vendedor {
    private $nome;
    private $email;
    private $salarioBase;
    private $porcentagemComissao;
    private $totalVendido = 0;

    public function __construct($nomeVendedor, $emailVendedor, $salarioBaseVendedor, $porcentagemComissaoVendedor) {
        $this->setNome($nomeVendedor);
        $this->setEmail($emailVendedor);
        $this->setSalarioBase($salarioBaseVendedor);
        $this->setPorcentagemComissao($porcentagemComissaoVendedor);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nomeVendedor) {
        $this->nome = $nomeVendedor;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($emailVendedor) {
        $this->email = $emailVendedor;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBaseVendedor) {
        $this->salarioBase = $salarioBaseVendedor;
    }

    public function getPorcentagemComissao() {
        return $this->porcentagemComissao;
    }

    public function setPorcentagemComissao($porcentagemComissaoVendedor) {
        $this->porcentagemComissao = $porcentagemComissaoVendedor;
    }

    public function fazerVenda($valorVenda) {
        if ($valorVenda > 0) {
            $this->totalVendido += $valorVenda;
            return true;
        } else {
            return false;
        }
    }

    public function salarioTotal() {
        $comissao = ($this->porcentagemComissao / 100) * $this->totalVendido;
        $salarioTotal = $this->salarioBase + $comissao;
        return $salarioTotal;
    }
}


$vendedor1 = new Vendedor("Lucca", "luccagoncalves00@gmail.com", 1000, 5);
$vendedor2 = new Vendedor("Lucas Simoes", "lkthefaculdade@gmail.com", 1200, 10);

$vendedor1->fazerVenda(1000);
$vendedor1->fazerVenda(200);
echo "Salário total de {$vendedor1->getNome()} é: {$vendedor1->salarioTotal()}";
echo "</br>";
echo "Email {$vendedor1->getNome()}: {$vendedor1->getEmail()}";
echo "</br>";
echo "Salario base {$vendedor1->getNome()}: {$vendedor1->getSalarioBase()}";

echo "</br>";
echo "</br>";
$vendedor2->fazerVenda(2000);
echo "Salário total de {$vendedor2->getNome()} é: {$vendedor2->salarioTotal()} e sua porcentagem de comissão é {$vendedor2->getPorcentagemComissao()}";
echo "</br>";
echo "Email {$vendedor2->getNome()}: {$vendedor2->getEmail()}";
echo "</br>";
echo "Salario base {$vendedor2->getNome()}: {$vendedor2->getSalarioBase()}";

