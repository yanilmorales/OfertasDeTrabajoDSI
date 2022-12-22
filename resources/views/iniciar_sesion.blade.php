<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/iniciar_sesion.css">
</head>
<body>
    <div id="marco">
        <header>
            <h1>Inicia Sesión</h1>
        </header> 
    
        <form method="POST" action="">
            <label for="username">Ingresa tu usuario</label>
            <input class="username" type="text" id="Username" name="Username"  placeholder="Usuario">
            <label for="username">Ingresa tu contraseña</label>
            <input class="password" type="password" id="Password" name="password" placeholder="Contraseña">
            <button type="sumbit">Iniciar Sesión</button>
        </form>        
           
        <div class="hr5">
            <a class="btn fb_btn" href=""><i class="fab fa-facebook"></i>Iniciar sesión con Facebook</a>
            <a class="btn google_btn" href=""><i class="fab fa-google"></i>Iniciar sesión con Google</a>
            <a class="btn apple_btn" href=""><i class="fab fa-apple"></i>Iniciar sesión con Apple</a>
            <a id="cuenta" href="registrarse.html">¿Aún no tienes una cuenta?</a>
        </div>
    </div>    
</body>
</html>
