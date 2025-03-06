<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Elabore um programa que irá receber a nota do aluno de 0 a 10, e exiba se o aluno está aprovado, reprovado ou de recuperação.

- Nota < 6 reprovado
- Nota entre 6 e 7 recuperação
- Nota > 7 aprovado -->
    <form action="exercicio1.php" method="get">

        <fieldset>
            <legend>Verificar Situação do Aluno</legend>
            <label for="nota">Digite a nota do aluno (0 a 10)</label>
            <input type="text" name="nota" id="nota" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['nota'])) {
    if (empty($_GET['nota'])) {
        echo 'A nota é obrigatória!';
        exit();
    }
} else {
    exit();
}

    $nota = $_GET['nota'];

     $reprovado = $nota < 6 && $nota >= 0;
     $recuperacao = $nota >= 6 && $nota <= 7;
     $aprovado = $nota > 7 && $nota <= 10;
     
    if ($reprovado)
         echo "Reprovado";
    if ($recuperacao)
        echo "Recuperação";
    if ($aprovado)
        echo "Aprovado";
    else
        echo "Nota inválida";
       
    ?>
    
</body>
</html>