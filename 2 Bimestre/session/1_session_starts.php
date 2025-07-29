<?php
    session_start();
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .login-container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 100px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }
      .login-header {
        text-align: center;
        margin-bottom: 30px;
      }
      .form-floating {
        margin-bottom: 15px;
      }
      .btn-login {
        width: 100%;
        padding: 10px;
      }
      .forgot-password {
        text-align: right;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="login-container">
        <div class="login-header">
          <h2 class="mb-3">Bem-vindo</h2>
          <p class="text-muted">Por favor faça login para continuar</p>
        </div>
        
        <form action="1_session_starts.php" method="POST">
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
          </div>
          
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">
              Lembrar de mim
            </label>
          </div>
          
          <button class="btn btn-primary btn-login" type="submit">Entrar</button>
          
          <div class="forgot-password">
            <a href="#" class="text-decoration-none">Esqueceu a senha?</a>
          </div>
        </form>
        
        <div class="text-center mt-4">
          <p class="text-muted">Não tem uma conta? <a href="#" class="text-decoration-none">Cadastre-se</a></p>
        </div>
      </div>
    </div>

    <?php 
        $email = isset($_POST['email']) ? $_POST['email'] : exit();
        $password = isset($_POST['password']) ? $_POST['password'] : exit();
        if($email =='admin@gmail.com' && $password =='12345'){
            $_SESSION['email'] = $email;
            header('Location: 2_pagina_inicial.php');
        }else{
        ?>
          <div class="container mt-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                    <div class="alert alert-warning"   role="alert ">
                     Login incorreto!!!
                    </div>
                    </div>
                </div>
            </div>
        <?php
        }
    
        //$email = $_POST['email']; irá puxar do formulário
       // $password = $_POST['password'];

         echo $email;





    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>