<?php
$conexion = mysqli_connect(  "localhost", "root", "", "phpmysql");

/*if(mysqli_connect_errno()){
    echo "La conexioon a la base de datos ha fallado".mysqli_connect_error();
}else{
    echo "Conexion realizada con exito";
}*/

//configurar caracteres de db
mysqli_query($conexion, "SET NAMES 'utf8'");

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    echo '<h2>'.$nota['id'].". ".$nota['titulo'] .'<br/>'.'</h2>';
    echo $nota['descripcion'] .'<br/>';
}

//insertar en base de datos desde php
$sql = "INSERT INTO notas VALUES(null, 'Notas insertada desde php', 'esto es una nota desde php', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "DAtos insertados";        
}else{ "error: ".mysqli_error($conexion);
}