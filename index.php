<?php
require './class/Clima.php';

use Classes\Clima;

$cli = new Clima();

$cli->temperatura = 1;
$cli->cidade = "Brusque";
$cli->codCidade  = 700;

echo $cli->getTemperaturaCelsius();

?>