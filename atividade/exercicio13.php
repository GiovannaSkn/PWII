<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um program que irá receber Nome, quatro notas (português, matemática, inglês, informática), total de frequência do aluno.
Exiba se o aluno:

- Aprovado se média for maior que 7 e frequência maior que 75%
- Reprovado se média for menor que 7.
- Reprovado se frequência for menor 75%. -->

<form action="exercicio13.php" method="get">

<fieldset>
    <legend>Adicional ao Salario</legend>
    <label for="nome">Digite o seu nome: </label>
    <input type="text" name="nome" id="nome" placeholder="Exemplo: João">
    
    <br>

    <label for="fre">Digite a sua frequência: </label>
    <input type="text" name="fre" id="fre" placeholder="0">

    <br>

    <label for="num1">Digite a sua nota em português: </label>
    <input type="text" name="num1" id="num1" placeholder="0">

    <br>

    <label for="num2">Digite a sua nota em matemática: </label>
    <input type="text" name="num2" id="num2" placeholder="0">

    <br>

    <label for="num3">Digite a sua nota em inglês: </label>
    <input type="text" name="num3" id="num3" placeholder="0">
    <br>

    <label for="num4">Digite a sua nota em informática: </label>
    <input type="text" name="num4" id="num4" placeholder="0">

    <br>
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
if (isset($_GET['fre'])) {
    if (empty($_GET['fre'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}
if (isset($_GET['num1'])) {
    if (empty($_GET['num1'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}
if (isset($_GET['num2'])) {
    if (empty($_GET['num2'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}
if (isset($_GET['num3'])) {
    if (empty($_GET['num3'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}
if (isset($_GET['num4'])) {
    if (empty($_GET['num4'])) {
    echo 'O valor é obrigatório!';
    exit();}
} else {
    exit();
}

$nome = $_GET['nome'];
$frequencia = $_GET['fre'];
$num = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];

$frequencia = $frequencia <= 100;
$media = (($num1 + $num2 + $num3 + $num4)/4);
$aprovado = $media >=8 && $frequencia > 75;
$reprovado = $media < 7 || $frequencia < 75;

if ($aprovado){
echo "Aluno: $nome. <br>";
echo "Nota Final: $media. <br>";
echo "Frequência: $frequencia.<br>";
echo "Situação: Aprovado";}

if ($reprovado){
 echo "Aluno: $nome. <br>";
 echo "Nota Final: $media. <br>";
echo "Frequência: $frequencia%.<br>";
echo "Situação: Aprovado";}
    
?>

</body>
</html>
