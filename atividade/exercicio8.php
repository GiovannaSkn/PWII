<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa para calcular o bônus que um vendedor irá ganhar. O programa irá perguntar o Nome do Vendedor, Valor das Vendas, e calcular o bônus de acordo com a tabela:

- Vendas abaixo de 1000 não tem bônus
- Vendas acima de 1000 acrescentar um bônus de 30%
- Vendas acima de 2000 acrescentar um bônus de 20%
- Vendas acima de 5000 acrescentar um bônus de 10% -->

<form action="exercicio8.php" method="get">

<fieldset>
    <legend>Adicional ao Salario</legend>
    <label for="nome">Digite o seu nome </label>
    <input type="text" name="nome" id="nome" placeholder="Exemplo: João">
    
    <br>

    <label for="valor">Digite o seu total em vendas: </label>
    <input type="text" name="valor" id="valor" placeholder="0">

    <input type="submit" name="calcular" value="calcular">
</fieldset>
    
</form>

<?php

if (isset($_GET['nome'])) {
if (empty($_GET['nome'])) {
echo 'O nome é obrigatório!';
    exit();}
} else {
    exit();
}
if (isset($_GET['valor'])) {
    if (empty($_GET['valor'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}

$nome = $_GET['nome'];
$valor = $_GET['valor'];

$nao = $valor <= 1000;
$trinta = $valor > 1000 && $valor <= 2000;
$vinte = $valor > 2000 && $valor <= 5000;
$dez = $valor > 5000 && $valor <= 10000;

$bvinte = ($valor * 0.20 + $valor); 
$btrinta = ($valor * 0.30  + $valor); 
$bdez = ($valor * 0.10  + $valor);

if ($trinta){
echo "Vendedor: $nome. <br>";
echo "#############################################";
echo "Total de vendas: $valor. <br>";
echo "Bonus: 30%.<br>";
echo "Total a Receber: $btrinta.<br>";
echo "#############################################";}

if ($vinte){
echo "Vendedor: $nome. <br>";
echo "#############################################";
echo "Total de vendas: $valor. <br>";
echo "Bonus: 20%.<br>";
echo "Total a Receber: $vinte.<br>";
echo "#############################################";}

if ($dez){
echo "Vendedor: $nome. <br>";
echo "#############################################";
echo "Total de vendas: $valor. <br>";
echo "Bonus: 10%.<br>";
echo "Total Receber: $bdez.<br>";
echo "#############################################";}


if ($nao){
echo "Vendedor: $nome. <br>";
echo "#############################################";
echo "Total de vendas: $valor. <br>";
echo "Bonus: Sem bonus.<br>";
echo "Total a Receber: $valor.<br>";
echo "#############################################";}

    
?>

</body>
</html>
