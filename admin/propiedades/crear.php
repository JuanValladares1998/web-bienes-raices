<?php

//conectar a la base de datos
require "../../includes/config/database.php";

//Conectarse a la base de datos
$db = conectarBD();

//Consultando los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes vacios
$errores = [];

$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";

//Ejecutar el metodo POST del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {



    exit;

    //Obtener datos del formulario
    $titulo = mysqli_real_escape_string($_POST["titulo"]);
    $precio = mysqli_real_escape_string($_POST["precio"]);
    $descripcion = mysqli_real_escape_string($_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($_POST["wc"]);
    $estacionamiento = mysqli_real_escape_string($_POST["estacionamiento"]);
    $vendedorId = mysqli_real_escape_string($_POST["vendedor"]);
    $creado = date("Y/m/d");

    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripción mayor a 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "Debes añadir un número de habitaciones";
    }
    if (!$wc) {
        $errores[] = "Debes añadir un número de baños";
    }
    if (!$estacionamiento) {
        $errores[] = "Debes añadir un número de estacionamientos";
    }
    if (!$vendedorId) {
        $errores[] = "Debes elegir un vendedor";
    }


    //Revisar que el arreglo de errores este vacio

    if (empty($errores)) {

        //Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //Redireccionar al usuario

            //la funcion header para redireccionar se debe usar antes del HTML
            header("Location: /admin");
        }
    }
}




//Funciones para el header
require "../../includes/funciones.php";
incluirTemplate('header') ?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton_anar">Volver</a>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>


    <form class="formulario-contacto" action="/admin/propiedades/crear.php" method="POST">
        <fieldset>
            <legend>Informacion General</legend>
            <div class="input-formulario">
                <label for="titulo">Titulo:</label>
                <input type="text" id="text" name="titulo" placeholder="Título de la propiedad" value="<?php echo $titulo ?>">
            </div>
            <div class="input-formulario">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio ?>">
            </div>
            <div class="input-formulario">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            </div>
            <div class="input-formulario">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion ?>"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <div class="input-formulario">
                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones ?>">
            </div>
            <div class="input-formulario">
                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc ?>">
            </div>
            <div class="input-formulario">
                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estaciones" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
            </div>
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">
                    <--Seleccione-->
                </option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId === $vendedor["id"] ? "selected" : ""; ?> value="<?php echo $vendedor["id"] ?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"] ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton-enviar">
    </form>
</main>

<?php
incluirTemplate('footer');  ?>