<?php

require "includes/config/database.php";
$db = conectarBD();

$errores = [];

//Autenticar usuario
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));

    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errores[] = "Email invalido";
    }

    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {

        //Consultar a la base de datos por el usuario
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        //Comprobar si el usuario existe
        if ($resultado->num_rows) {
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            $auth = password_verify($password, $usuario["password"]);

            if ($auth) {

                session_start();

                $_SESSION["usuario"] = $usuario["email"];
                $_SESSION["login"] = true;

                header ("Location: /admin");
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}


//incluye el header
require "includes/funciones.php";
incluirTemplate('header')
?>


<main class="contenedor-estrecho">
    <h1 class="titulo-pagina">Iniciar Sesión</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST">
        <fieldset>
            <legend>Email y password</legend>
            <div class="input-formulario">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Tu correo" require>
            </div>
            <div class="input-formulario">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Tu contraseña" require>
            </div>
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton-enviar">

    </form>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>