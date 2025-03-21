<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">

<legend>idade</legend>
            <label for="idade">informe sua idade</label>
            <input type="idade" name="idade" id="idade" placeholder="0" required>

</form>
<?php
 if (isset($_GET['idade'])) {
    $idade =$_GET['idade'];
    if($idade>16){
        echo 'pode voltar';
    }
    else{
        echo ' não pode votar';
    }
}
?>
</body>
</html>