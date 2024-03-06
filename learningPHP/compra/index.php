<?php

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'Compra.php';

echo "<h2>Sistema de vendas</h2>";

// ter um cliente
$cliente1 = new Cliente("João", "(14)98801-0203");
// ter um produto
$produto1 = new Produto("Monitor", 596.99);
// criar a venda
$compraMonitor = new Compra();
$compraMonitor->fazerCompra($cliente1, $produto1, 2);
$compraMonitor->detalhes();

