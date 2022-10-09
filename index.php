<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header', $inicio = true) ?>

<main>
    <div class="marcador-pagina contenedor">
        <p>Inicio >></p>
    </div>
    <section class="sobre-nosotros contenedor">
        <h2>Sobre Nosotros
            <hr>
        </h2>
        <div class="iconos">
            <div class="icono">
                <img src="./build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad
                    <hr>
                </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic veritatis esse unde aspernatur
                    pariatur
                    aliquid. Quam a sapiente expedita reiciendis ab tenetur harum provident? Ipsam voluptatum facere
                    modi ducimus consectetur.</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio
                    <hr>
                </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic veritatis esse unde aspernatur
                    pariatur
                    aliquid. Quam a sapiente expedita reiciendis ab tenetur harum provident? Ipsam voluptatum facere
                    modi ducimus consectetur.</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A tiempo
                    <hr>
                </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic veritatis esse unde aspernatur
                    pariatur
                    aliquid. Quam a sapiente expedita reiciendis ab tenetur harum provident? Ipsam voluptatum facere
                    modi ducimus consectetur.</p>
            </div>
        </div>
    </section>

    <section class="anuncios contenedor">
        <h2>Propiedades en Venta
            <hr>
        </h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="./build/img/anuncio1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio1.jpg" alt="">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, culpa!</p>
                    <h4>$3,000,000</h4>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="entrada-propiedad.php" class="boton">Ver Más</a>
                </div>
            </div>
            <div class="anuncio">
                <picture>
                    <source srcset="./build/img/anuncio2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio2.jpg" alt="">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa en la Playa</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, culpa!</p>
                    <h4>$3,000,000</h4>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="entrada-propiedad.php" class="boton">Ver Más</a>
                </div>
            </div>
            <div class="anuncio">
                <picture>
                    <source srcset="./build/img/anuncio3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio3.jpg" alt="">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, culpa!</p>
                    <h4>$3,000,000</h4>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="entrada-propiedad.php" class="boton">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="ver-mas">
            <a href="propiedades.php" class="boton-ver-mas">Ver Más Propiedades</a>
        </div>
    </section>

    <section class="contacto">
        <div class="banner">
            <h2>¿Necesitas ayuda en tu busqueda?</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="#">Contactanos</a>
        </div>
    </section>

    <section class="testimonios contenedor">
        <h2>Testimonios
            <hr>
        </h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <div class="contenedor-testimonios">
            <div class="testimonio">
                <picture>
                    <source srcset="./build/img/foto1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/foto1.jpg" alt="foto perfil">
                </picture>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quia.</p>
                <p>Clara Mendoza</p>
            </div>
            <div class="testimonio">
                <picture>
                    <source srcset="./build/img/foto2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/foto2.jpg" alt="foto perfil">
                </picture>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quia.</p>
                <p>Juan Valladares</p>
            </div>
            <div class="testimonio">
                <picture>
                    <source srcset="./build/img/foto3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/foto3.jpg" alt="foto perfil">
                </picture>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quia.</p>
                <p>Andrés Valladares</p>
            </div>
        </div>
    </section>

    <section class="blog contenedor">
        <h2>Nuestro Blog
            <hr>
        </h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <div class="contenedor-articulos">
            <article class="articulo">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog1.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog1.jpg" alt="Imagen Blog ">
                    </picture>
                </div>
                <div class="articulo-text">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>02/02/22</span> Autor: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </a>
                </div>
            </article>
            <article class="articulo">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog2.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog2.jpg" alt="Imagen Blog ">
                    </picture>
                </div>
                <div class="articulo-text">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>02/02/22</span> Autor: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </a>
                </div>
            </article>
        </div>
    </section>
</main>

<?php
incluirTemplate('footer')  ?>