<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/registrarse.css">
</head>
<body>    
    <div id="marco">
        <header>
            <h1>Registrate</h1>            
        </header> 
    
        <form method="POST" action="">
            <label for="Realname">Ingrese su nombre real</label>
            <input class="name" type="text" id="Realname" name="Realname" value="" placeholder="Nombre">
    
            <label for="RealLastname">Ingrese su apellido real</label>
            <input class="lastname" type="text" id="RealLastname" name="RealLastname" value="" placeholder="Apellido">
    
            <label for="Email">Ingrese un Email existente</label>
            <input class="email" type="email" id="Email" name="Email" value="" placeholder="Correo Electronico">
    
            <label for="Telephone">Ingrese su numero de telefóno</label>
            <input class="telephone" type="tel" id="Telephone" name="Telephone" value="" placeholder="Número de Teléfono">
    
            <label for="Username">Ingrese el nombre que se mostrara en su perfil</label>
            <input class="username" type="text" id="Username" name="Username" value="" placeholder="Nombre de usuario">
    
            <label for="Password">Ingrese una contraseña</label>
            <input class="password" type="password" id="Password" name="password" value="" placeholder="Contraseña">

            <label for="sexo">¿Cual es su sexo?</label>
            <select class="sexo" name="sexo" id="sexo">
                <option value="select">-- Selecciona tu sexo --</option>              
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>                
            </select>

            <button class="submit" type="sumbit">Registrarse</button>
        </form>
        <a id="cuenta" href="iniciar_sesion.html">¿Ya tienes una cuenta?</a>
    </div>
</body>
</html>