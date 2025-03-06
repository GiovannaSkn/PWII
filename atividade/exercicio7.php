<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que irá receber o ano de nascimento de um usuário e exiba se ele é maior ou menor de idade. -->
    <form action="exercicio7.php" method="get">

        <fieldset>
            
            <legend>Verificar Maior idade</legend>
            <label for="data">Digite o ano de nascimento: </label>
            <input type="text" name="data" id="data" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['data'])) {
    if (empty($_GET['data'])) {
        echo 'A data é obrigatória!';
        exit();
    }
} else {
    exit();
}

$data = $_GET['data'];

$maior = 2024 - $data;
    if ($maior >= 18)
        echo "Maior de idade";
    else
        echo "Menor de idade";  

    
?>
    
</body>
</html>