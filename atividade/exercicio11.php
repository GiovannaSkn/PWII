<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que irá receber 3 lados digitados pelo usuário (lado A, lado B, lado C).

- Exiba uma mensagem caso não seja um triângulo.
- Exiba se o triângulo é isósceles, se dois lados são iguais e um diferente (A = B ou A = C ou B = C).
- Exiba se o triângulo é escaleno, quando dois lados são diferentes ( A <> B ou B <> C).
- Exiba se equilátero quando possui todos os lados iguais (A = B e B = C). -->

    <form action="exercicio11.php" method="get">

        <fieldset>
            <legend>Verificação de Lados</legend>
            <label for="lados">Digite o numero de lados: </label>
            <input type="text" name="lados" id="lados" placeholder="0">
            
            <br>

            <label for="num1">Digite o tamanho do primeiro lado: </label>
            <input type="text" name="num1" id="num1" placeholder="0">
            
            <br>

            <label for="num2">Digite o tamanho do segundo lado: </label>
            <input type="text" name="num2" id="num2" placeholder="0">
            
            <br>

            <label for="num3">Digite o tamanho do terceiro lado: </label>
            <input type="text" name="num3" id="num3" placeholder="0">
            
            <br>

            <input type="submit" name="calcular" value="calcular">
        </fieldset>
            
    </form>

    <?php
if (isset($_GET['lados'])) {
    if (empty($_GET['lados'])) {
        echo 'O numero de lados é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num1'])) {
    if (empty($_GET['num1'])) {
        echo 'O tamanho é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num2'])) {
    if (empty($_GET['num2'])) {
        echo 'O tamanho é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['num3'])) {
    if (empty($_GET['num3'])) {
        echo 'O tamanho é obrigatório!';
        exit();
    }
} else {
    exit();
}

    $lados = $_GET['lados'];
    $num = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    //  $lados = $lados > 3 || $lados < 3;
     $triangulo = ($lados == 3);
     $Isosceles = $num == $num2 && $num != $num3|| $num == $num3 && $num2 != $num3 || $num2 == $num3 &&  $num != $num2;
     $escaleno = $num != $num2 && $num != $num3 && $num2 != $num3;
     $equilatero = $num == $num2 && $num2 == $num3 && $num == $num3;
    
    
    if (($triangulo == 3) )
        echo "Triangulo ";
    else  
       echo "Essa forma não é um triângulo ";
   
    if ($triangulo && $escaleno)
        echo "Escaleno";
    if ($equilatero)
        echo "Equilátero";
    if ($triangulo && $Isosceles)
        echo "Isósceles";
       
    ?>
    
</body>
</html>