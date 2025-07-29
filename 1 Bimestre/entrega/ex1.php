<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex1.php" method="get">

<legend>nota</legend>
            <label for="nota">informe sua nota</label>
            <input type="nota" name="nota" id="nota" placeholder="0" required>

</form>
<?php
 if (isset($_GET['nota'])) {
    $nota =$_GET['nota'];
    if($nota<6){
        echo 'reprovado';
    }
    else if($nota>=6 && $nota<7){
        echo 'recuperação';
    }
    else{
        echo 'aprovado';
    }
}
?>
</body>
</html>
