<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio1.php" method="get">

        <fieldset>
            <legend></legend>
            <label for="idade">Digite a nota do aluno (0 a 10)</label>
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
     $opcao = $idade >= 16 && $idade >= 60;
     $sim = $idade > 18;

    if ($nao)
         echo "Você não tem idade suficiente";
    if ($opcao)
        echo "Você não é obrigado a votar";
    if ($sim)
        echo "Você é obrigado a votar";
       
    ?>
    
</body>
</html>
   