<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Elabore um programa que pergunte a idade do usuário, e exiba na tela se ele pode votar ou não. -->
    <form action="exercicio2.php" method="get">

        <fieldset>
            <legend>Verificação de Votação</legend>
            <label for="idade">Digite a sua idade</label>
            <input type="text" name="idade" id="idade" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['idade'])) {
    if (empty($_GET['idade'])) {
        echo 'A idade é obrigatória!';
        exit();
    }
} else {
    exit();
}

    $idade = $_GET['idade'];

     $nao = $idade < 16;
     $opcao = $idade >= 16 && $idade < 18 || $idade >= 70;
     $sim = $idade >= 18 && $idade < 70;

    if ($nao)
         echo "Você não tem idade suficiente";
    if ($opcao)
        echo "Você não é obrigado a votar mas pode";
    if ($sim)
        echo "Você é obrigado a votar";
       
    ?>
    
</body>
</html>
   