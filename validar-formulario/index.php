<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
</head>
<body>
    <h1>Formulario Usuarios</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'error'){
                echo '<strong style="color:red">Introduce todos los datos correctamente</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce correctamente el nombre</strong>';
            }
            if($error == 'apellido'){
                echo '<strong style="color:red">Introduce correctamente los apellidos</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce la edad de forma correcta</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">Introduce el correo correctamente</strong>';
            }
            if($error == 'password'){
                echo '<strong style="color:red">Introduce una contraseña de mas 4 de letras</strong>';
            }
        }

    ?>

    <form action="procesar_formulario.php" method="POST">
        <p><label for="nombre">Nombres:</label>
        <input type="text" name="nombre" require="require" parent="[A-Za-z+]"></p>
        <p><label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" require="require" parent="[A-Za-z+]"></p>
        <p><label for="edad">Edad:</label>
        <input type="number" name="edad" require="require" patern="[0-9+]"></p>
        <p><label for="email">Correo electronico:</label>
        <input type="email" name="email" require="require"></p>
        <p><label for="password">Contraseña:</label>
        <input type="password" name="password" require="require"></p>
        <input type="submit" value="Enviar datos">

    </form>
</body>
</html>