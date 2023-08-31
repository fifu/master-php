CREATE DATABASE blog;

USE DATABASE blog;

/*      DISENO DE BASE DE DATOS         */

CREATE TABLE usuarios(
id  int(255) auto_increment not null,
nombre varchar(255) not null,
apellido varchar(255) not null,
email varchar(255) not null,
password varchar(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id int(255) auto_increment not null,
nombre varchar(255) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE posts(
id int(255) auto_increment not null,
usuario_id int(255) not null,
categoria_id int(255) not null,
titulo varchar (255) not null,
descripcion MEDIUMTEXT,
fecha date not null,
CONSTRAINT pk_posts PRIMARY KEY(id),
CONSTRAINT fk_post_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_post_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;


/*      MANIPULACION DE DATOS        */
/*      INSERTAR DATOS EN TABLA        */
INSERT INTO usuarios VALUES (null, 'fifu', 'lucas', 'fifucel@gmail.com', '12345', '2023-08-29');
INSERT INTO usuarios VALUES (null, 'Marco', 'Villatoro', 'noemarco77@gmail.com', '1aa5', '2023-08-29');
INSERT INTO usuarios VALUES (null, 'Randy', 'Gutierrez', 'gtzrandy117@gmail.com', '117randy', '2023-08-29');

/*      INSERTAR DATOS COLUMNA DE TABLA        */

INSERT INTO usuarios (email, password) VALUES ('dora@gmail.com', '123dora');

/*      SELECT BASICO       */
SELECT * FROM usuarios;

SELECT email, password FROM usuarios;

/*      SELECT BASICO CON OPERADORES ARITMETICOS      */
SELECT email, (id+5) AS operacion FROM usuarios;

/*      WHERE      */

SELECT email FROM usuarios WHERE (nombre) = 'Marco' OR (nombre) = 'Randy';
SELECT id, nombre, email FROM usuarios WHERE  apellido LIKE '%l%' AND password = '12345';
/*      MOSTRAR USUARIOS CUYA FECAHA DE IUNGRESO TENGA UN AÑO QUE SEA PAR     */
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);
/*      MOSTRAR USUARIOS      */

SELECT UPPER (nombre) AS Nombre , apellido FROM usuarios WHERE LENGTH (nombre)>4 AND YEAR(fecha)<2024;

SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY id DESC LIMIT 2;

/*      ACTUALIZAR DATOOS       */

UPDATE usuarios SET nombre = 'Brayanth', apellido = 'Castillo', email ='iampermmit@outlook.com', password = 'permmit12', fecha = '2023-01-01' WHERE id = 4;

/*      BORRAR REGISTROS        */
DELETE FROM usuarios WHERE password = '777'; 