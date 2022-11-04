<?php

if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION["login"] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <!-- la funcion isset() sirve para ver si una variable esta definida -->
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logotipo de vienes raices">
                </a>

                <div class="boton-menu">
                    <img src="/build/img/barras.svg" alt="boton menu navegación">
                </div>

                <div class="derecha">
                    <nav class="navegacion hide">
                        <a href="/index.php">Inicio</a>
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/propiedades.php">Propiedades</a>
                        <a href="/blog.php">Blog</a>
                        <a href="/contacto.php">Contacto</a>
                        <?php if ($auth) : ?>
                            <a href="cerrar-sesion.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="boton dark- mode">
                </div>
            </div>
            <?php echo $inicio ? '<h1>Encuntra la propiedad de tus sueños en Lima</h1>' : ''; ?>
        </div>
    </header>