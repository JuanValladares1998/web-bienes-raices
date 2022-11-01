<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header') ?>

<main>
    <div class="marcador-pagina contenedor">
        <h1>Propiedades >></h1>
    </div>
    <section class="anuncios contenedor">
        <h2>Propiedades en Venta
            <hr>
        </h2>
        <?php
        $limite = 9;
        include "includes/templates/anuncios.php";
        ?>
    </section>

    <section class="contacto">
        <div class="banner">
            <h2>¿Necesitas ayuda en tu busqueda?</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="#">Contactanos</a>
        </div>
    </section>
</main>

<?php
incluirTemplate('footer')  ?>