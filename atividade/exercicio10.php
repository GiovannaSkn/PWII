<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<!-- Faça um programa que irá receber o nome de usuário e a senha para fazer login.
- Se nome de usuário for igual ‘Admin’ e senha ‘123’ irá exibir ‘Conectado com sucesso!’, senão irá exibir, ‘Acesso negado! Usuário ou senha incorretos!`. -->
    <form action="exercicio10.php" method="get">

        <fieldset>
            
            <legend>Verificar Usuario</legend>
         <label for="user">Digite o  Usuario: </label>
            <input type="text" name="user" id="user" placeholder="0">
            
            <br>

            <label for="senha">Digite a senha: </label>
            <input type= "password" name="senha" id="senha" placeholder="0">

            <br>

            <input type="submit" name="avançar" value="avançar">
        </fieldset>
            
    </form>

    <?php

if (isset($_GET['user'])) {
    if (empty($_GET['user'])) {
        echo 'O Usuario é obrigatório!';
        exit();
    }
} else {
    exit();
}
if (isset($_GET['senha'])) {
    if (empty($_GET['senha'])) {
        echo 'A senha é obrigatória!';
        exit();
    }
} else {
    exit();
}
$user = $_GET['user'];
$senha = $_GET['senha'];

$aceito = $user == "Admin" && $senha == "123";

    if ($aceito)
        echo "Conectado com sucesso!";
    else 
        echo "Acesso negado! usuário ou senha incorretos!";

    


?>
    
</body>
</html>