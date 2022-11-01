<?php

//importar la coneccion
require "includes/config/database.php";
$db = conectarBD();

//consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//leer los resultados
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) :  ?>
        <div class="anuncio">
            <img loading="lazy" width="200" height="300" src="/imagenes/<?php echo $propiedad["imagen"]; ?>" alt="<?php echo $propiedad["titulo"]; ?>">

            <div class="contenido-anuncio">
                <h3><?php echo $propiedad["titulo"]; ?></h3>
                <p><?php
                    if (strlen($propiedad["descripcion"]) > 70) {

                        $descripcion = substr($propiedad["descripcion"], 0, 70);
                        echo $descripcion . "...";
                    } else {
                        echo $descripcion;
                    }
                    ?></p>
                <h4>$<?php echo $propiedad["precio"]; ?></h4>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $propiedad["wc"]; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $propiedad["estacionamiento"]; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p><?php echo $propiedad["habitaciones"]; ?></p>
                    </li>
                </ul>
                <a href="entrada-propiedad.php?id=<?php echo $propiedad["id"]; ?>" class="boton">Ver Más</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php
//cerrar la coneccion
mysqli_close($db);
?>