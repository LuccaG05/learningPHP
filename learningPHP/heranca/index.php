<?php

require_once "Empregado.php";
require_once "Gerente.php";

$empregado = new Empregado("José", 2500);
echo $empregado->getNome() . " " .  $empregado->salarioAnual() . "<br>";

$gerente = new Gerente("Marcio", 3500, "Comercial");
$gerente->setBonus(2000);
echo $gerente->getNome() . " " . $gerente->salarioAnual() . "<br>";
echo $gerente->getDepartamento();