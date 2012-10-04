<?php

include_once('classes.php');

$veiculo = new picape;
$veiculo->nome('S10');
$veiculo->acelerar(150);

echo '<br/>';
$veiculo->transportar(700);

echo '<br/>';
$veiculo2 = new carro;
$veiculo2->nome('Siena');
$veiculo2->acelerar(100);