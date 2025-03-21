<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex9.php" method="get">

<legend>numeros</legend>
            <label for="numeros">informe sua numeros</label>
            <input type="numeros" name="numeros" id="numeros" placeholder="0" required>

            <label for="n2">informe sua n2</label>
            <input type="n2" name="n2" id="n2" placeholder="0" required>

            <label for="n3">informe sua n3</label>
            <input type="n3" name="n3" id="n3" placeholder="0" required>

</form>
<?php
 if (isset($_GET['numeros']) && isset ($_GET['n2']) && isse ($_GET['n3'])) {
    $numeros =$_GET['numeros'];
    $n2 =$_GET['n2'];         
    $n3 =$_GET['n3'];
   

            if($numeros>=$n2 && $numeros>$n3){
                echo 'o primeiro é maior';
            }
           else if($n2>=$numeros && $numeros>=$n3){
                echo 'o segundo é maior';
            }
            else{
                echo  'o terceiro é maior';
            }
        }
        ?>