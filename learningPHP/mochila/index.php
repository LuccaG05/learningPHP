<?php

require_once 'Item.php';
require_once 'Mochila.php';

echo "<h2>Itens da Mochila</h2>";

$penDrive = new Item("Pen Drive");
$caderno = new Item("Caderno");

$mochila1 = new Mochila(5);
$mochila1->inserir($penDrive);
$mochila1->listar();
