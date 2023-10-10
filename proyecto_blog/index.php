<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifu Cel Gaming</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
</head>
<body>
    <!--- Cabecera --->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Fifu Cel - Gaming
            </a>  
        </div>  
    
    <!--- Menu --->
    <nav id="menu">
        <ul>
            <li>
                <a href = "index.php">Inicio</a>
            </li>
            <li>
                <a href = "index.php">Categoria 1</a>
            </li>
            <li>
                <a href = "index.php">Categoria 2</a>
            </li>
            <li>
                <a href = "index.php">Categoria 3</a>
            </li>
            <li>
                <a href = "index.php">Categoria 4</a>
            </li>
            <li>
                <a href = "index.php">Sobre nosotros</a>
            </li>
            <li>
                <a href = "index.php">Contacto</a>
            </li>
           
        </ul>
    </nav>

    <div class="clearfix"></div>
    </header>

    <div id="contenedor">
    <!--- Barra latera --->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Inicia sesion</h3>
                <form action="login.php" method="POST">
                    
                    <label for="email">Coreo</label>
                    <input type="email" name="email"/>
                    
                    <label for="password">Clave</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Iniciar sesion">
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"/>
                    
                    
                    <label for="email">Coreo</label>
                    <input type="email" name="email"/>
                    
                    <label for="password">Clave</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Registrar">
            </div>
        </aside>
    <!--- caja principal --->
        <div id="principal">
            <h1>Entradas recientes</h1>

            <article class="entrada">
                <a href="entrada">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </a>
            </article>

            <article class="entrada">
                <a href="entrada">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </a>
            </article>

            <article class="entrada">
                <a href="entrada">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </a>
            </article>

            <article class="entrada">
                <a href="entrada">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </a>
            </article>

            <article class="entrada">
                <a href="entrada">
                    <h2>Titulo</h2>
                    <p>descripcion</p>
                </a>
            </article>

            <div id="ver-todas">
            <a href="">Ver todas</a>
        </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
    <!--- Pie de pagina--->
    <footer id="pie">
     <hr>
        <p>Desarrollado por Fifu Cel &copy</p>
    </footer>
</body>
</html>
