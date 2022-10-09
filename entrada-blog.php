<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate('header') ?>

<main class="contenedor">
    <div class="marcador-pagina">
        <h1>Blog >> Terraza en el techo de tu casa >></h1>
    </div>
    <section class="entrada">
        <h2>Terraza en el techo de tu casa
            <hr>
        </h2>
        <picture>
            <source srcset="./build/img/blog1.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="./build/img/blog1.jpg" alt="">
        </picture>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti corrupti suscipit sit eveniet placeat
            temporibus. Culpa fugiat vero vitae voluptatum repellat ab nihil nobis dolores vel tempore officiis
            libero modi obcaecati architecto beatae quas, eveniet optio, distinctio nam aperiam? Minus, laborum esse
            placeat ut numquam deleniti et facilis consectetur veniam, vitae velit sunt reiciendis ab sed odit fuga,
            modi totam earum fugit rerum debitis! Tempore eius impedit, ad ut amet quia voluptate enim maiores
            dignissimos illum voluptatem, commodi iusto debitis, recusandae atque accusamus eveniet praesentium
            mollitia velit. Magni nostrum id dolorem, ducimus nesciunt aspernatur qui eveniet, deserunt laboriosam
            cupiditate vitae. Doloremque ducimus quaerat odit laudantium similique! Porro animi tempora vitae
            dolorem nesciunt. Nobis facilis sequi praesentium aliquam beatae magni. Eos?
        </p>
    </section>
</main>

<?php
incluirTemplate('footer')  ?>