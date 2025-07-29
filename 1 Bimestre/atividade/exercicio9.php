<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que irá receber três valores inteiros, e exiba os valores em ordem crescente. -->
    <form action="exercicio9.php" method="get">

        <fieldset>
            <legend>Verificar Numero</legend>
            <label for="num1">Digite o primeiro numero</label>
            <input type="text" name="num1" id="num1" placeholder="0">
            
            <br>

            <label for="num2">Digite o segundo numero</label>
            <input type="text" name="num2" id="num2" placeholder="0">
            
            <br>

            <label for="num3">Digite o terceiro numero</label>
            <input type="text" name="num3" id="num3" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['num1'])) {
    if (empty($_GET['num1'])) {
        echo 'O numero é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num2'])) {
    if (empty($_GET['num2'])) {
        echo 'O numero é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num3'])) {
    if (empty($_GET['num3'])) {
        echo 'O numero é obrigatório!';
        exit();
    }
} else {
    exit();
}


    $num = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

     $um = $num < $num2 && $num < $num3 && $num2 < $num3;
     $umII = $num < $num2 && $num < $num3 && $num3 < $num2;

     $dois = $num > $num2 && $num > $num3 && $num2 < $num3;
     $doisII = $num > $num2 && $num2 < $num3 && $num < $num3;

     $tres = $num2 < $num && $num2 > $num3 && $num > $num3;
     $tresII =  $num2 > $num && $num2 > $num3 && $num > $num3;
    
     
     
    if ($um)
        echo "$num,$num2,$num3";
    if ($umII)
        echo "$num,$num3,$num2";

    if ($dois)
        echo "$num2,$num3,$num";
    if ($doisII)
        echo "$num2,$num,$num3";
    
    if ($tres)
        echo "$num3,$num2,$num";
    if ($tresII)
        echo "$num3,$num,$num2";


       
    ?>
    
</body>
</html>