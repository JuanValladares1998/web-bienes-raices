<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header') ?>

<main>
    <div class="marcador-pagina contenedor">
        <h1>Nosotros >></h1>
    </div>
    <section class="sobre-nosotros-experiencia contenedor">
        <picture>
            <source srcset="./build/img/blog3.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="./build/img/blog3.jpg" alt="Sala de descanso">
        </picture>
        <div class="texto">
            <h2>25 Años de experiencia
                <hr>
            </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Proin consequat viverra sapien,
                malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet molestie. Proin tristique
                commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis convallis sollicitudin,
                arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan maximus est, eu
                mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor.
                Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus,
                urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur
                malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.
            </p>
            <p>
                Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque
                ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue
                quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt
                odio fermentum vel. Nulla facilisi.
            </p>
        </div>
    </section>
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
</main>

<?php
incluirTemplate('footer')  ?>