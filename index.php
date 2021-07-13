<?php
    require_once "conecion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="indexcss.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main class="contenedor">
        <div class="info-login">
            <h1 class="titulo">Sign In</h1>
            <div class="social-login">
                <div class="social-login-elementos">
                    <img src="https://img.icons8.com/nolan/64/google-logo.png"/>
                    <span>Google</span>
                </div>
                <div class="social-login-elementos">
                    <img src="https://img.icons8.com/nolan/64/facebook.png"/>
                    <span>Facebook</span>
                </div>
            </div>
            <p>or</p>
            <form class="inputs-container" action="Modelo.php" method="POST">
                <input class="input" type="text" name="usuario" placeholder="Usuario" required>
                <input class="input" type="password" name="pass" placeholder="pass" required>
                <p>Forget password? <span class="span">click here</span></p>
                <button class="btn" type="submit"> Login</button>
                <p>No tienes una cuenta<span class="span">Click Here</span></p>
            </form>
        </div>
        <img src="image/cohete.jpg" alt="login" class="imagenD">



    </main>
    
</body>
</html>