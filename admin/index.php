<?php



require "../includes/funciones.php";
require "../includes/config/database.php";
incluirTemplate('header');
$db = conectarBD();
$auth = estadoAutenticado();

if (!$auth) {
    header("Location: /");
}

//Importar la conexión
$query = "SELECT * FROM propiedades";

//Escribir el Query
$resultadoConsulta = mysqli_query($db, $query);

//Consultar la base de datos
$resultado = $_GET["resultado"] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        //Eliminar imagen
        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink("../imagenes/" . $propiedad["imagen"]);

        //Eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header("location: /admin?resultado=3");
        }
    }
}

?>

<main class="contenedor seccion">
    <h1>Adminstrador de Bienes Raices</h1>

    <?php if (intVal($resultado) === 1) : ?>
        <p class="alerta exito">Anuncio Agregado Correctamente</p>
    <?php elseif (intVal($resultado) === 2) : ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif (intVal($resultado) === 3) : ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
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

            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $propiedad["id"] ?></td>
                    <td><?php echo $propiedad["titulo"] ?></td>
                    <td> <img class="imagen-tabla" src="/imagenes/<?php echo $propiedad["imagen"] ?>"></td>
                    <td>$<?php echo $propiedad["precio"] ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad["id"]; ?>">
                            <input type="submit" class="btn-rojo" value="Eliminar">
                        </form>
                        <a class="btn-verde" href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>