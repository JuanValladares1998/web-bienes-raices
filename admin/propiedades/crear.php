<?php

//conectar a la base de datos
require "../../includes/funciones.php";
require "../../includes/config/database.php";

//Conectarse a la base de datos
$db = conectarBD();

$auth = estadoAutenticado();

if (!$auth) {
    header("Location: /");
}

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

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_FILES); //super global para subir archivos por formulario
    // echo "</pre>";

    //Obtener datos del formulario
    //La funcion mysqli_real_escape_string sanitiza los datos antes de ingrearlos a la base de datos
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
    $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);
    $creado = date("Y/m/d");

    $imagen = $_FILES["imagen"];


    //Matriz de errores si falta agregar algun valor al formulario
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

    //Validar imagen
    if (!$imagen["name"] || $imagen["error"]) {
        $errores[] = "La imagen es obligatoria";
    }

    //Validar por tamaño (1M máximo)
    $medida = 1000 * 1000;

    if ($imagen["size"] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    //Revisar que el arreglo de errores este vacio
    if (empty($errores)) {

        /** Subida de archivos **/
        $carpetaImagenes = "../../imagenes/";

        if (!is_dir($carpetaImagenes)) { // la funcion is_dir() revisa si existe una carpeta en el directorio
            mkdir($carpetaImagenes); // la funcion mkdir() crea una carpeta
        }

        // Generar un nombre único
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        //Subir la imagen
        move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);

        //Crear insercion para la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

        //Agregar la informacion a la base de datos
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //Redireccionar al usuario

            //la funcion header para redireccionar se debe usar antes del HTML
            header("Location: /admin?resultado=1");
        }
    }
}




//Funciones para el header
incluirTemplate('header') ?>


<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>

    <a href="/admin" class="boton_anar">Volver</a>

    <!-- Errores de llenado del formulario -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>


    <form class="formulario-contacto" action="/admin/propiedades/crear.php" method="POST" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data" sirve para subir archivos al servidor -->

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