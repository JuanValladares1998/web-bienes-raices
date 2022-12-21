<?php

//importar conexión a base de datos
require "includes/config/database.php";
$db = conectarBD();

//crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//query para crear usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";

//agregarlo a la base de datos
mysqli_query($db, $query);
