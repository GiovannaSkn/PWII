<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa no qual o usuário irá informar dois valores, e será exibido somente o número maior. -->
    <form action="exercicio6.php" method="get">

        <fieldset>
            
            <legend>Verificar Valor</legend>
         <label for="num1">Digite o primeiro valor: </label>
            <input type="text" name="num1" id="num1" placeholder="0">
            
            <br>

            <label for="num2">Digite o segundo valor: </label>
            <input type="text" name="num2" id="num2" placeholder="0">

            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['num1'])) {
    if (empty($_GET['num1'])) {
        echo 'O valor é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num2'])) {
    if (empty($_GET['num2'])) {
        echo 'O valor é obrigatório!';
        exit();
    }
} else {
    exit();
}
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$maior = $num1 > $num2;
$menor = $num2 > $num1;
$igual = $num2 == $num1;

    if ($maior)
        echo ("O maior número é: $num1");

    if ($menor)
        echo ("O maior número é: $num2");

    if ($igual)
        echo ("Os números são iguais");

?>
    
</body>
</html>