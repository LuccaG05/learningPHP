<?php 
class Cartao {

private $banco;
private $bandeira;
private $limite;
private $fatura = 0;

public function __construct($nomeBanco, $bandeiraCartao, $limiteCartao)
{
    $this->setBanco($nomeBanco);
    $this->setBandeira($bandeiraCartao);
    $this->setLimite($limiteCartao);
}    

public function setBanco($nomeBanco)
{
    $this->banco = $nomeBanco;
}

public function getBanco()
{
    return $this->banco;
}

public function setBandeira($bandeiraCartao)
{
    $this->bandeira = $bandeiraCartao;
}

public function getBandeira()
{
    return $this->bandeira;
}

public function setLimite($limiteCartao)
{
    $this->limite = $limiteCartao;
}

public function getLimite()
{
    return $this->limite;
}

public function fazerCompra($valorCompra)
{
    $limiteDisponivel = ($this->limite - $this->fatura);
    if ($valorCompra <= $limiteDisponivel) {
        $this->fatura += $valorCompra;
        echo "Compra  de $valorCompra aprovada </br>";
        return true;
    } else {
        echo "Compra negada no valor de R$ $valorCompra. </br>";
        return false;
    }
}

public function totalFatura()
{
    return $this->fatura;
}
}

$usuario1 = new Cartao("Bradesco", "MasterCard", 6000);
$usuario2 = new Cartao("Nubank", "MasterCard", 2000);


$usuario1->fazerCompra(3000);
echo "Fatura atual do usuário 1: " . $usuario1->totalFatura() . "</br>";
$usuario1->fazerCompra(3001);
echo "Fatura atual do usuário 1: " . $usuario1->totalFatura() . "</br>";

echo "</br>";

$usuario2->fazerCompra(3000);
echo "Fatura atual do usuário 1: " . $usuario2->totalFatura() . "</br>";
echo "Limite Disponivel: {$usuario2->getLimite()}";


