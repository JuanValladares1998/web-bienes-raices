<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header') ?>

<main class="contenedor seccion-formulario-contacto">
    <div class="marcador-pagina">
        <h1>Contacto >></h1>
    </div>
    <picture>
        <source srcset="./build/img/destacada3.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="./build/img/destacada3.jpg" alt="">
    </picture>

    <div class="formulario-contacto">
        <h2>Llene nuestro formulario de contacto
            <hr>
        </h2>


        <form action="">
            <fieldset>
                <legend>Informacion personal</legend>
                <div class="input-formulario">
                    <label for="nombre">Nombres</label>
                    <input type="text" id="nombre" placeholder="Tu nombre">
                </div>
                <div class="input-formulario">
                    <label for="email">Correo</label>
                    <input type="mail" id="email" placeholder="Tu correo">
                </div>
                <div class="input-formulario">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" placeholder="Tu teléfono">
                </div>
                <div class="input-formulario textarea">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" placeholder="Tu mensaje" maxlength="300"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <div class="input-formulario">
                    <label for="opciones">Compra o Venta</label>
                    <select id="opciones">
                        <option value="" disabled selected>--- Seleccione ---</option>
                        <option value="compra">Compra</option>
                        <option value="vende">Vende</option>
                    </select>
                </div>
                <div class="input-formulario">
                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="number" id="presupuesto" placeholder="Tu Precio o Presupuesto">
                </div>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>¿Como desea ser contactado?</p>
                <div class="input-formulario">
                    <div>
                        <label for="contactar-telefono">Teléfono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    </div>
                    <div>
                        <label for="contactar-email">Correo</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-email">
                    </div>
                </div>
                <p>Si ecogio teléfono, elija la fehc ay hora para ser contactado </p>
                <div class="input-formulario">
                    <label for="fehca">Fecha</label>
                    <input type="date" id="fecha">
                </div>
                <div class="input-formulario">
                    <label for="hora">Hora</label>
                    <input type="time" id="hora" min="09:00" max="18:00">
                </div>
            </fieldset>

            <input type="submit" value="Enviar" class="boton-enviar">
        </form>
    </div>

</main>

<?php
incluirTemplate('footer')  ?>