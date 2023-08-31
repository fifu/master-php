<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombres">Nombres: </label>
        <input type="text" name="nombre"/></br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos"/></br>

        <label for="boton">Boton: </label>
        <input type="button" name="boton" value="Haz Clic"/></br>

        <label for="sexo">Sexo: </label></br>
        <input type="checkbox" name="sexo"/>Hombre</br>
        <input type="checkbox" name="sexo"/>Mujer</br>
        
        <label for="color">Color: </label>
        <input type="color" name="color"/></br>

        <label for="fecha">Fecha: </label>
        <input type="date" name="fecha"/></br>

        <label for="email">Correo electronico: </label>
        <input type="email" name="email"/></br>

        <label for="archivo">Archivo: </label>
        <input type="file" name="archivo" multiple="multiple"/></br>

        <label for="numero">Numero: </label>
        <input type="number" name="numero"/></br>
        
        <label for="telefono">Numero de telefono: </label>
        <input type="tel" name="telefono"/></br>

        <label for="continente">Seleccione su continente: </label></br>
        America: <input type="radio" name="continente" value="america"/></br>
        Europa: <input type="radio" name="continente" value="europa"/></br>
        Asia: <input type="radio" name="continente" value="asia"/></br>
        Africa:<input type="radio" name="continente" value="africa"/></br>
        Oceania:<input type="radio" name="continente" value="oceania"/></br>
        Antartida:<input type="radio" name="continente" value="antartida"/></br>
    
        <label for="link">Link: </label>
        <input type="url" name="link"/></br>

        <label for=descripcion>Descripcion: </label>
        <textarea name="descripcion" placeholder="Escribe una descripción "></textarea></br>

        <label for="peliculas">Peliculas: </label></br>
        <select name="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="batman">Batman</option>
            <option value="transformers">transformers</option>
        </select></br>

        <label for="pass">Contraseña: </label>
        <input type="password" name="pass"/></br>


        

        <input type="submit" value="Enviar datos"/>
    </form>
</body>
</html>