<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Elabore um programa que irá receber o nome de um mês, e exiba se o mês é do primeiro semestre ou segundo semestre. -->
 
    <form action="exercicio4.php" method="get">

        <fieldset>
            <legend>Verificar Mês</legend>
            <label for="mes">Digite o nome de um mes: </label>
            <input type="text" name="mes" id="mes" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['mes'])) {
    if (empty($_GET['mes'])) {
        echo 'O mes é obrigatório!';
        exit();
    }
} else {
    exit();
}

// $primeiro = $mes <= 6;
// $segundo = $mes >6;

// if ($primeiro)
//     echo "Esse mes é no primeiro semestre";
// if ($segundo)
//    echo "Esse mes é no segundo semestre";

    $mes = $_GET['mes'];

    if ($mes == 'Janeiro') 
        $numero = 1;

    if ($mes == 'Fevereiro')
        $numero = 2;

    if ($mes == 'Março')
        $numero = 3;

    if ($mes == 'Abril')
        $numero = 4;

    if ($mes == 'Maio')
        $numero = 5;

    if ($mes == 'Junho')
        $numero = 6;

    if ($mes == 'Julho')
        $numero = 7;

    if ($mes == 'Agosto')
        $numero = 8;

    if ($mes == 'Setembro')
        $numero = 9;

    if ($mes == 'Outubro')
        $numero = 10;

    if ($mes == 'Novembro')
        $numero = 11;

    if ($mes == 'Dezembro')
        $numero = 12;

    else
        echo "Mes invalido";
        
    if ($numero <= 6) 
        echo "Esse mes é no primeiro semestre";
    else 
        echo "Esse mes é no segundo semestre";
    
        
       
    ?>
    
</body>
</html>