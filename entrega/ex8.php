<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex8.php" method="get">

<legend>numeros</legend>
            <label for="nome">informe seu nome</label>
            <input type="nome" name="nome" id="nome" placeholder="0" required>

            <label for="vendas">informe sua vendas</label>
            <input type="vendas" name="vendas" id="vendas" placeholder="0" required>
            <input type="submit" name="somar" value="somar">
        </form>
<?php
    $soma ;
 if (isset($_GET['nome'])) {
    $nome =($_GET['nome']);

   if (isset($_GET['vendas'])) 
        $vendas=$_GET['vendas'];
    if($vendas<=1000){
        echo $vendas;
    }
    else if($vendas>1000 && $vendas<=2000){
        $soma = $vendas + $vendas*0.3;
        echo  'Vendedor:'.
        $nome
       ' Total de Vendas: 1000
        Valor do Bônus: 10%
        Total a Receber:
        '.$soma;
    }
    else if($vendas>=2000 && $vendas<5000){
        $soma = $vendas + $vendas*0.2; 
        echo  $soma;
    }
    else{
        $soma = $vendas + $vendas*0.1;
        echo  $soma;
    }
 }

    ?>