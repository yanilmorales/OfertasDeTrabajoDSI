<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Contacta con nosotros</title>
</head>
<body>
    <div id="marco">
        <header>
            <h1>Contacta con nosotros</h1>
            <p>¿Tienes algun problema? Mandanos un mensaje a nuestro correo electronico</p>
        </header>

        <!-- <label for="">Dinos, ¿Cual es tu problema?</label> -->

        <form method="POST" action="">
            @csrf
            <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">  
            <textarea name="textarea" id="textarea" cols="61" rows="7.5" placeholder="Escribenos"></textarea>
            <button type="submit">Enviar</button>
        </form>

        <p>O envianos un mensaje en</p>

        <div class="networks">
            <a href="">Facebook</a> 
            <a href="">Twitter</a> 
            <a href="">Instagram</a> 
            <a href="">Telegram</a>
        </div>
    </div>
</body>
</html>