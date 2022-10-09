<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header') ?>

<main>
    <div class="marcador-pagina contenedor">
        <h1>Blog >></h1>
    </div>
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
                    <a href="entrada-blog.php">
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
                    <a href="entrada-blog.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>02/02/22</span> Autor: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </a>
                </div>
            </article>
            <article class="articulo">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog3.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog3.jpg" alt="Imagen Blog ">
                    </picture>
                </div>
                <div class="articulo-text">
                    <a href="entrada-blog.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>02/02/22</span> Autor: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </a>
                </div>
            </article>
            <article class="articulo">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog4.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog4.jpg" alt="Imagen Blog ">
                    </picture>
                </div>
                <div class="articulo-text">
                    <a href="entrada-blog.php">
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