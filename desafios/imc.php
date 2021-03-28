<?php

$peso = 68;
$altura = 1.83;

$imc = $peso/($altura**2);

$controle;

if($imc < 20) {
    $controle = "abaixo";
}
elseif ($imc < 24.9) {
    $controle = "dentro";
}
elseif ($imc > 24.9) {
    $controle = "dentro";
}

echo "Seu IMC é $imc.";
echo "Seu IMC está $controle do recomendado." .PHP_EOL;