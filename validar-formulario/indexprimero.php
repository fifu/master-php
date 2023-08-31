<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formlario</title>
</head>
<body>
    <h2>Escribe el titulo de una pelicula y una descripción</h2>
    <form method="POST" action="guardarprimero.php">

    <p><label for="titulo">Titulo de la pelicula</label>
    <input type="text" name="titulo"></p>
    
    <p><label for="descripcion" name="descripcion">Descripcion de la pelicula</label>
    <textarea name="descripcion"></textarea></p>

    <input type="submit" value="Enviar">
    
    </form>
</body>
</html>