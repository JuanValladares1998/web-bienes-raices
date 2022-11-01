<?php
require "includes/funciones.php";
require "includes/config/database.php";
$db = conectarBD();

$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /");
}

$query = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);



$inicio = true;
incluirTemplate('header') ?>

<main class="contenedor">
    <div class="marcador-pagina">
        <h1>Propiedades >> <?php echo $propiedad["titulo"] ?> >></h1>
    </div>
    <section class="entrada">
        <h2><?php echo $propiedad["titulo"] ?>
            <hr>
        </h2>
        <img loading="lazy" width="200" height="300" src="/imagenes/<?php echo $propiedad["imagen"] ?>" alt="<?php echo $propiedad["titulo"] ?>">
        <p>
            <?php echo $propiedad["descripcion"] ?>
        </p>
    </section>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer')  ?>