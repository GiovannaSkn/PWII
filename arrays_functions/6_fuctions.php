<?php
$GLOBALS['resultado'] = 0;
$valor1 = 10;
$valor2 = 20;
$operador = '+';

calcular(10, 20, '+');

calcular($valor1, $valor2, $operador);

function calcular($valor1, $valor2, $operador){
    if ($operador == '+')
    $GLOBALS['resultado'] = somar($valor1, $valor2);

    if ($operador == '-')
    $GLOBALS['resultado'] = subtrair($valor1, $valor2);

    if ($operador == '/')
    $GLOBALS['resultado'] = dividir($valor1, $valor2);

    if ($operador == '*')
    $GLOBALS['resultado'] = multiplicar($valor1, $valor2);
}

function somar($valor1, $valor2){
    return $valor1 + $valor2;
}
function subtrair($valor1, $valor2){
    return $valor1 - $valor2;
}
function dividir($valor1, $valor2){
    return $valor1 / $valor2;
}
function multiplicar($valor1, $valor2){
    return $valor1 * $valor2;
}

echo $valor1 . $operador . $valor2 . '=' . $GLOBALS['resultado']
?>