<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex3.php" method="get">

<legend>numero</legend>
            <label for="numero">informe seu numero</label>
            <input type="numero" name="numero" id="numero" placeholder="0" required>

</form>
<?php
 if (isset($_GET['numero'])) {
    $numero =$_GET['numero'];
    if($numero>100){
        echo 'seu numero é maior do que 100';
    }
    else{
        echo 'seu numero é menor do que 100';
    }
}
?>
</body>
</html>