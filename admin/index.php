<?php
require "../includes/funciones.php";
incluirTemplate('header');

$resultado = $_GET["resultado"] ?? null;

?>


<main class="contenedor seccion">
    <h1>Adminstrador de Bienes Raices</h1>

    <?php if (intVal($resultado) === 1) : ?>
        <p class="alerta exito">Anuncio agregado correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton_anar">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Casa en la playa</td>
                <td> <img src="/imagenes/32b8465ee6020c8b4f87846b6e242c7b.jpg"></td>
                <td>$120000</td>
                <td>
                    <a href="#">Eliminar</a>
                    <a href="#">Actualizar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php
incluirTemplate('footer')  ?>