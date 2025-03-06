<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que peça ao usuário uma letra, e exiba se ela é uma consoante ou vogal. -->
    <form action="exercicio5.php" method="get">

        <fieldset>
            
            <legend>Verificar Letra</legend>
            <label for="letra">Digite uma Letra</label>
            <input type="text" name="letra" id="letra" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['letra'])) {
    if (empty($_GET['letra'])) {
        echo 'A letra é obrigatória!';
        exit();
    }
} else {
    exit();
}
$letra = $_GET['letra'];

     
   
    if ($letra == 'a')
        $numero = 1;

    if ($letra == 'e')
        $numero = 2;

    if ($letra == 'i')
        $numero = 3;

    if ($letra == 'o')
        $numero = 4;

    if ($letra == 'u')
        $numero = 5;

    if ($letra == 'b')
        $numero = 6;
        
    if ($letra == 'c')
        $numero = 7;

    if ($letra == 'd')
        $numero = 8;
        
    if ($letra == 'f')
        $numero = 9;
        
    if ($letra == 'g')
        $numero = 10;
        
    if ($letra == 'h')
        $numero = 11;
        
    if ($letra == 'j')
        $numero = 12;
        
    if ($letra == 'k')
        $numero = 13;
        
    if ($letra == 'l')
        $numero =  14;
        
    if ($letra == 'm')
        $numero = 15;

    if ($letra == 'n')
        $numero = 16;

    if ($letra == 'p')
        $numero = 17;

    if ($letra == 'q')
        $numero = 18;

    if ($letra == 'r')
        $numero = 19;

    if ($letra == 's')
        $numero = 20;

    if ($letra == 't')
        $numero = 21;

    if ($letra == 'v')
        $numero = 22;

    if ($letra == 'w')
        $numero = 23;

    if ($letra == 'x')
        $numero = 24;

    if ($letra == 'y')
        $numero = 25;
    
    if ($letra == 'z')
        $numero = 26;

        if ($numero <= 5)
            echo "Essa letra é uma vogal";
        else
            echo "Essa letra é uma consoante";

     
?>
    
</body>
</html>