<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que irá receber dois valores reais, e um operador (+, -. *, /).
Será realizado o cálculo conforme o operador digitado. Se escolher +, será feito a soma e exibido o resultado da soma, se digitar - será exibido a subtração e assim por diante. -->
    <form action="exercicio12.php" method="get">

        <fieldset>
            <legend>Calculadora Científica</legend>
            <label for="num1">Numero 1</label>
            <input type="text" name="num1" id="num1" placeholder="0">

            <br>

            <label for="num2">Numero 2</label>
            <input type="text" name="num2" id="num2" placeholder="0" >
            
            <br>

            <input type="submit" name="somar" value="+">
            <input type="submit" name="subtrair" value="-">
            <input type="submit" name="dividir" value="/">
            <input type="submit" name="multiplicar" value="*">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['num1'])) {
            if (empty($_GET['num1'])) {
                echo 'O Valor é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        if (isset($_GET['num2'])) {
            if (empty($_GET['num2'])) {
                echo 'O Valor é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        if (isset($_GET['somar']))
            echo $_GET['num1'] + $_GET['num2'];

        if (isset($_GET['subtrair']))
            echo $_GET['num1'] - $_GET['num2'];

        if (isset($_GET['dividir']))
            echo $_GET['num1'] / $_GET['num2'];

        if (isset($_GET['multiplicar']))
            echo $_GET['num1'] * $_GET['num2'];
    ?>
    
</body>
</html>