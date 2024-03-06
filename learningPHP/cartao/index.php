<?php

date_default_timezone_set('America/Sao_Paulo');

require_once "Cliente.php";
require_once "Banco.php";
require_once "CartaoCredito.php";

$cliente1 = new Cliente("João", "joao@email.com", "Av. Campus, 123");
$banco1 = new Banco("BankYou", "Av. Central, 555");

$cc1 = new CartaoCredito($cliente1, $banco1 , "Visa", 2500);

$rc1 = $cc1->comprar(1000);

if ($rc1) {
    echo "Compra realizada com sucesso no valor de {$rc1}<br>";
    $cc1->extrato();
}

$rc2 = $cc1->comprar(1500);

if ($rc2) {
    echo "Compra realizada com sucesso no valor de {$rc2}<br>";
    $cc1->extrato();
}

$rc3 = $cc1->comprar(1);

if ($rc3) {
    echo "Compra realizada com sucesso no valor de {$rc3}<br>";
    $cc1->extrato();
} else {
    echo "Compra negada<br>Libere seu limite<br>";
}