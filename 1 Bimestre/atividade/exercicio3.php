<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Elabore um programa que irá receber um número inteiro, e exiba se o número é maior ou menor que 100. -->
    <form action="exercicio3.php" method="get">

        <fieldset>
            <legend>Verificar Numero</legend>
            <label for="num">Digite um numero inteiro</label>
            <input type="text" name="num" id="num" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['num'])) {
    if (empty($_GET['num'])) {
        echo 'O numero é obrigatório!';
        exit();
    }
} else {
    exit();
}


    $num = $_GET['num'];

     $menor = $num < 100;
     $igual = $num == 100;
     $maior = $num > 100;

    if ($menor)
         echo "Esse numero é menor que 100";
    if ($igual)
        echo "Esse numero é igual a 100";
    if ($maior)
        echo "Esse numero é maior que 100";
       
    ?>
    
</body>
</html>